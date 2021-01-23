( function( $ ) {

	'use strict';

	if ( typeof wpcf7 === 'undefined' || wpcf7 === null ) {
		return;
	}

	wpcf7 = $.extend( {
		cached: 0,
		inputs: []
	}, wpcf7 );

	$( function() {
		wpcf7.supportHtml5 = ( function() {
			var features = {};
			var input = document.createElement( 'input' );

			features.placeholder = 'placeholder' in input;

			var inputTypes = [ 'email', 'url', 'tel', 'number', 'range', 'date' ];

			$.each( inputTypes, function( index, value ) {
				input.setAttribute( 'type', value );
				features[ value ] = input.type !== 'text';
			} );

			return features;
		} )();

		$( 'div.wpcf7 > form' ).each( function() {
			var $form = $( this );
			wpcf7.initForm( $form );

			if ( wpcf7.cached ) {
				wpcf7.refill( $form );
			}
		} );
	} );

	wpcf7.getId = function( form ) {
		return parseInt( $( 'input[name="_wpcf7"]', form ).val(), 10 );
	};

	wpcf7.initForm = function( form ) {
		var $form = $( form );

		$form.submit( function( event ) {
			if ( ! wpcf7.supportHtml5.placeholder ) {
				$( '[placeholder].placeheld', $form ).each( function( i, n ) {
					$( n ).val( '' ).removeClass( 'placeheld' );
				} );
			}

			if ( typeof window.FormData === 'function' ) {
				wpcf7.submit( $form );
				event.preventDefault();
			}
		} );

		$( '.wpcf7-submit', $form ).after( '<span class="ajax-loader"></span>' );

		wpcf7.toggleSubmit( $form );

		$form.on( 'click', '.wpcf7-acceptance', function() {
			wpcf7.toggleSubmit( $form );
		} );

		// Exclusive Checkbox
		$( '.wpcf7-exclusive-checkbox', $form ).on( 'click', 'input:checkbox', function() {
			var name = $( this ).attr( 'name' );
			$form.find( 'input:checkbox[name="' + name + '"]' ).not( this ).prop( 'checked', false );
		} );

		// Free Text Option for Checkboxes and Radio Buttons
		$( '.wpcf7-list-item.has-free-text', $form ).each( function() {
			var $freetext = $( ':input.wpcf7-free-text', this );
			var $wrap = $( this ).closest( '.wpcf7-form-control' );

			if ( $( ':checkbox, :radio', this ).is( ':checked' ) ) {
				$freetext.prop( 'disabled', false );
			} else {
				$freetext.prop( 'disabled', true );
			}

			$wrap.on( 'change', ':checkbox, :radio', function() {
				var $cb = $( '.has-free-text', $wrap ).find( ':checkbox, :radio' );

				if ( $cb.is( ':checked' ) ) {
					$freetext.prop( 'disabled', false ).focus();
				} else {
					$freetext.prop( 'disabled', true );
				}
			} );
		} );

		// Placeholder Fallback
		if ( ! wpcf7.supportHtml5.placeholder ) {
			$( '[placeholder]', $form ).each( function() {
				$( this ).val( $( this ).attr( 'placeholder' ) );
				$( this ).addClass( 'placeheld' );

				$( this ).focus( function() {
					if ( $( this ).hasClass( 'placeheld' ) ) {
						$( this ).val( '' ).removeClass( 'placeheld' );
					}
				} );

				$( this ).blur( function() {
					if ( '' === $( this ).val() ) {
						$( this ).val( $( this ).attr( 'placeholder' ) );
						$( this ).addClass( 'placeheld' );
					}
				} );
			} );
		}

		if ( wpcf7.jqueryUi && ! wpcf7.supportHtml5.date ) {
			$form.find( 'input.wpcf7-date[type="date"]' ).each( function() {
				$( this ).datepicker( {
					dateFormat: 'yy-mm-dd',
					minDate: new Date( $( this ).attr( 'min' ) ),
					maxDate: new Date( $( this ).attr( 'max' ) )
				} );
			} );
		}

		if ( wpcf7.jqueryUi && ! wpcf7.supportHtml5.number ) {
			$form.find( 'input.wpcf7-number[type="number"]' ).each( function() {
				$( this ).spinner( {
					min: $( this ).attr( 'min' ),
					max: $( this ).attr( 'max' ),
					step: $( this ).attr( 'step' )
				} );
			} );
		}

		// Character Count
		$( '.wpcf7-character-count', $form ).each( function() {
			var $count = $( this );
			var name = $count.attr( 'data-target-name' );
			var down = $count.hasClass( 'down' );
			var starting = parseInt( $count.attr( 'data-starting-value' ), 10 );
			var maximum = parseInt( $count.attr( 'data-maximum-value' ), 10 );
			var minimum = parseInt( $count.attr( 'data-minimum-value' ), 10 );

			var updateCount = function( target ) {
				var $target = $( target );
				var length = $target.val().length;
				var count = down ? starting - length : length;
				$count.attr( 'data-current-value', count );
				$count.text( count );

				if ( maximum && maximum < length ) {
					$count.addClass( 'too-long' );
				} else {
					$count.removeClass( 'too-long' );
				}

				if ( minimum && length < minimum ) {
					$count.addClass( 'too-short' );
				} else {
					$count.removeClass( 'too-short' );
				}
			};

			$( ':input[name="' + name + '"]', $form ).each( function() {
				updateCount( this );

				$( this ).keyup( function() {
					updateCount( this );
				} );
			} );
		} );

		// URL Input Correction
		$form.on( 'change', '.wpcf7-validates-as-url', function() {
			var val = $.trim( $( this ).val() );

			if ( val
			&& ! val.match( /^[a-z][a-z0-9.+-]*:/i )
			&& -1 !== val.indexOf( '.' ) ) {
				val = val.replace( /^\/+/, '' );
				val = 'http://' + val;
			}

			$( this ).val( val );
		} );
	};

	wpcf7.submit = function( form ) {
		if ( typeof window.FormData !== 'function' ) {
			return;
		}

		var $form = $( form );

		$( '.ajax-loader', $form ).addClass( 'is-active' );

		wpcf7.clearResponse( $form );

		var formData = new FormData( $form.get( 0 ) );

		var detail = {
			id: $form.closest( 'div.wpcf7' ).attr( 'id' ),
			status: 'init',
			inputs: [],
			formData: formData
		};

		$.each( $form.serializeArray(), function( i, field ) {
			if ( '_wpcf7' == field.name ) {
				detail.contactFormId = field.value;
			} else if ( '_wpcf7_version' == field.name ) {
				detail.pluginVersion = field.value;
			} else if ( '_wpcf7_locale' == field.name ) {
				detail.contactFormLocale = field.value;
			} else if ( '_wpcf7_unit_tag' == field.name ) {
				detail.unitTag = field.value;
			} else if ( '_wpcf7_container_post' == field.name ) {
				detail.containerPostId = field.value;
			} else if ( field.name.match( /^_wpcf7_\w+_free_text_/ ) ) {
				var owner = field.name.replace( /^_wpcf7_\w+_free_text_/, '' );
				detail.inputs.push( {
					name: owner + '-free-text',
					value: field.value
				} );
			} else if ( field.name.match( /^_/ ) ) {
				// do nothing
			} else {
				detail.inputs.push( field );
			}
		} );

		wpcf7.triggerEvent( $form.closest( 'div.wpcf7' ), 'beforesubmit', detail );

		var ajaxSuccess = function( data, status, xhr, $form ) {
			detail.id = $( data.into ).attr( 'id' );
			detail.status = data.status;
			detail.apiResponse = data;

			var $message = $( '.wpcf7-response-output', $form );

			switch ( data.status ) {
				case 'validation_failed':
					$.each( data.invalidFields, function( i, n ) {
						$( n.into, $form ).each( function() {
							wpcf7.notValidTip( this, n.message );
							$( '.wpcf7-form-control', this ).addClass( 'wpcf7-not-valid' );
							$( '[aria-invalid]', this ).attr( 'aria-invalid', 'true' );
						} );
					} );

					$message.addClass( 'wpcf7-validation-errors' );
					$form.addClass( 'invalid' );

					wpcf7.triggerEvent( data.into, 'invalid', detail );
					break;
				case 'acceptance_missing':
					$message.addClass( 'wpcf7-acceptance-missing' );
					$form.addClass( 'unaccepted' );

					wpcf7.triggerEvent( data.into, 'unaccepted', detail );
					break;
				case 'spam':
					$message.addClass( 'wpcf7-spam-blocked' );
					$form.addClass( 'spam' );

					$( '[name="g-recaptcha-response"]', $form ).each( function() {
						if ( '' === $( this ).val() ) {
							var $recaptcha = $( this ).closest( '.wpcf7-form-control-wrap' );
							wpcf7.notValidTip( $recaptcha, wpcf7.recaptcha.messages.empty );
						}
					} );

					wpcf7.triggerEvent( data.into, 'spam', detail );
					break;
				case 'aborted':
					$message.addClass( 'wpcf7-aborted' );
					$form.addClass( 'aborted' );

					wpcf7.triggerEvent( data.into, 'aborted', detail );
					break;
				case 'mail_sent':
					$message.addClass( 'wpcf7-mail-sent-ok' );
					$form.addClass( 'sent' );

					wpcf7.triggerEvent( data.into, 'mailsent', detail );
					break;
				case 'mail_failed':
					$message.addClass( 'wpcf7-mail-sent-ng' );
					$form.addClass( 'failed' );

					wpcf7.triggerEvent( data.into, 'mailfailed', detail );
					break;
				default:
					var customStatusClass = 'custom-'
						+ data.status.replace( /[^0-9a-z]+/i, '-' );
					$message.addClass( 'wpcf7-' + customStatusClass );
					$form.addClass( customStatusClass );
			}

			wpcf7.refill( $form, data );

			wpcf7.triggerEvent( data.into, 'submit', detail );

			if ( 'mail_sent' == data.status ) {
				$form.each( function() {
					this.reset();
				} );

				wpcf7.toggleSubmit( $form );
			}

			if ( ! wpcf7.supportHtml5.placeholder ) {
				$form.find( '[placeholder].placeheld' ).each( function( i, n ) {
					$( n ).val( $( n ).attr( 'placeholder' ) );
				} );
			}

			$message.html( '' ).append( data.message ).slideDown( 'fast' );
			$message.attr( 'role', 'alert' );

			$( '.screen-reader-response', $form.closest( '.wpcf7' ) ).each( function() {
				var $response = $( this );
				$response.html( '' ).attr( 'role', '' ).append( data.message );

				if ( data.invalidFields ) {
					var $invalids = $( '<ul></ul>' );

					$.each( data.invalidFields, function( i, n ) {
						if ( n.idref ) {
							var $li = $( '<li></li>' ).append( $( '<a></a>' ).attr( 'href', '#' + n.idref ).append( n.message ) );
						} else {
							var $li = $( '<li></li>' ).append( n.message );
						}

						$invalids.append( $li );
					} );

					$response.append( $invalids );
				}

				$response.attr( 'role', 'alert' ).focus();
			} );
		};

		$.ajax( {
			type: 'POST',
			url: wpcf7.apiSettings.getRoute(
				'/contact-forms/' + wpcf7.getId( $form ) + '/feedback' ),
			data: formData,
			dataType: 'json',
			processData: false,
			contentType: false
		} ).done( function( data, status, xhr ) {
			ajaxSuccess( data, status, xhr, $form );
			$( '.ajax-loader', $form ).removeClass( 'is-active' );
		} ).fail( function( xhr, status, error ) {
			var $e = $( '<div class="ajax-error"></div>' ).text( error.message );
			$form.after( $e );
		} );
	};

	wpcf7.triggerEvent = function( target, name, detail ) {
		var $target = $( target );

		/* DOM event */
		var event = new CustomEvent( 'wpcf7' + name, {
			bubbles: true,
			detail: detail
		} );

		$target.get( 0 ).dispatchEvent( event );

		/* jQuery event */
		$target.trigger( 'wpcf7:' + name, detail );
		$target.trigger( name + '.wpcf7', detail ); // deprecated
	};

	wpcf7.toggleSubmit = function( form, state ) {
		var $form = $( form );
		var $submit = $( 'input:submit', $form );

		if ( typeof state !== 'undefined' ) {
			$submit.prop( 'disabled', ! state );
			return;
		}

		if ( $form.hasClass( 'wpcf7-acceptance-as-validation' ) ) {
			return;
		}

		$submit.prop( 'disabled', false );

		$( '.wpcf7-acceptance', $form ).each( function() {
			var $span = $( this );
			var $input = $( 'input:checkbox', $span );

			if ( ! $span.hasClass( 'optional' ) ) {
				if ( $span.hasClass( 'invert' ) && $input.is( ':checked' )
				|| ! $span.hasClass( 'invert' ) && ! $input.is( ':checked' ) ) {
					$submit.prop( 'disabled', true );
					return false;
				}
			}
		} );
	};

	wpcf7.notValidTip = function( target, message ) {
		var $target = $( target );
		$( '.wpcf7-not-valid-tip', $target ).remove();
		$( '<span role="alert" class="wpcf7-not-valid-tip"></span>' )
			.text( message ).appendTo( $target );

		if ( $target.is( '.use-floating-validation-tip *' ) ) {
			var fadeOut = function( target ) {
				$( target ).not( ':hidden' ).animate( {
					opacity: 0
				}, 'fast', function() {
					$( this ).css( { 'z-index': -100 } );
				} );
			};

			$target.on( 'mouseover', '.wpcf7-not-valid-tip', function() {
				fadeOut( this );
			} );

			$target.on( 'focus', ':input', function() {
				fadeOut( $( '.wpcf7-not-valid-tip', $target ) );
			} );
		}
	};

	wpcf7.refill = function( form, data ) {
		var $form = $( form );

		var refillCaptcha = function( $form, items ) {
			$.each( items, function( i, n ) {
				$form.find( ':input[name="' + i + '"]' ).val( '' );
				$form.find( 'img.wpcf7-captcha-' + i ).attr( 'src', n );
				var match = /([0-9]+)\.(png|gif|jpeg)$/.exec( n );
				$form.find( 'input:hidden[name="_wpcf7_captcha_challenge_' + i + '"]' ).attr( 'value', match[ 1 ] );
			} );
		};

		var refillQuiz = function( $form, items ) {
			$.each( items, function( i, n ) {
				$form.find( ':input[name="' + i + '"]' ).val( '' );
				$form.find( ':input[name="' + i + '"]' ).siblings( 'span.wpcf7-quiz-label' ).text( n[ 0 ] );
				$form.find( 'input:hidden[name="_wpcf7_quiz_answer_' + i + '"]' ).attr( 'value', n[ 1 ] );
			} );
		};

		if ( typeof data === 'undefined' ) {
			$.ajax( {
				type: 'GET',
				url: wpcf7.apiSettings.getRoute(
					'/contact-forms/' + wpcf7.getId( $form ) + '/refill' ),
				beforeSend: function( xhr ) {
					var nonce = $form.find( ':input[name="_wpnonce"]' ).val();

					if ( nonce ) {
						xhr.setRequestHeader( 'X-WP-Nonce', nonce );
					}
				},
				dataType: 'json'
			} ).done( function( data, status, xhr ) {
				if ( data.captcha ) {
					refillCaptcha( $form, data.captcha );
				}

				if ( data.quiz ) {
					refillQuiz( $form, data.quiz );
				}
			} );

		} else {
			if ( data.captcha ) {
				refillCaptcha( $form, data.captcha );
			}

			if ( data.quiz ) {
				refillQuiz( $form, data.quiz );
			}
		}
	};

	wpcf7.clearResponse = function( form ) {
		var $form = $( form );
		$form.removeClass( 'invalid spam sent failed' );
		$form.siblings( '.screen-reader-response' ).html( '' ).attr( 'role', '' );

		$( '.wpcf7-not-valid-tip', $form ).remove();
		$( '[aria-invalid]', $form ).attr( 'aria-invalid', 'false' );
		$( '.wpcf7-form-control', $form ).removeClass( 'wpcf7-not-valid' );

		$( '.wpcf7-response-output', $form )
			.hide().empty().removeAttr( 'role' )
			.removeClass( 'wpcf7-mail-sent-ok wpcf7-mail-sent-ng wpcf7-validation-errors wpcf7-spam-blocked' );
	};

	wpcf7.apiSettings.getRoute = function( path ) {
		var url = wpcf7.apiSettings.root;

		url = url.replace(
			wpcf7.apiSettings.namespace,
			wpcf7.apiSettings.namespace + path );

		return url;
	};

} )( jQuery );

/*
 * Polyfill for Internet Explorer
 * See https://developer.mozilla.org/en-US/docs/Web/API/CustomEvent/CustomEvent
 */
( function () {
	if ( typeof window.CustomEvent === "function" ) return false;

	function CustomEvent ( event, params ) {
		params = params || { bubbles: false, cancelable: false, detail: undefined };
		var evt = document.createEvent( 'CustomEvent' );
		evt.initCustomEvent( event,
			params.bubbles, params.cancelable, params.detail );
		return evt;
	}

	CustomEvent.prototype = window.Event.prototype;

	window.CustomEvent = CustomEvent;
} )();

;jQuery(function(e){if("undefined"==typeof wc_add_to_cart_params)return!1;var t=function(){e(document.body).on("click",".add_to_cart_button",this.onAddToCart).on("click",".remove_from_cart_button",this.onRemoveFromCart).on("added_to_cart",this.updateButton).on("added_to_cart",this.updateCartPage).on("added_to_cart removed_from_cart",this.updateFragments)};t.prototype.onAddToCart=function(t){var a=e(this);if(a.is(".ajax_add_to_cart")){if(!a.attr("data-product_id"))return!0;t.preventDefault(),a.removeClass("added"),a.addClass("loading");var o={};e.each(a.data(),function(t,a){o[t]=a}),e(document.body).trigger("adding_to_cart",[a,o]),e.post(wc_add_to_cart_params.wc_ajax_url.toString().replace("%%endpoint%%","add_to_cart"),o,function(t){t&&(t.error&&t.product_url?window.location=t.product_url:"yes"!==wc_add_to_cart_params.cart_redirect_after_add?e(document.body).trigger("added_to_cart",[t.fragments,t.cart_hash,a]):window.location=wc_add_to_cart_params.cart_url)})}},t.prototype.onRemoveFromCart=function(t){var a=e(this),o=a.closest(".woocommerce-mini-cart-item");t.preventDefault(),o.block({message:null,overlayCSS:{opacity:.6}}),e.post(wc_add_to_cart_params.wc_ajax_url.toString().replace("%%endpoint%%","remove_from_cart"),{cart_item_key:a.data("cart_item_key")},function(t){t&&t.fragments?e(document.body).trigger("removed_from_cart",[t.fragments,t.cart_hash]):window.location=a.attr("href")}).fail(function(){window.location=a.attr("href")})},t.prototype.updateButton=function(t,a,o,r){(r=void 0!==r&&r)&&(r.removeClass("loading"),r.addClass("added"),wc_add_to_cart_params.is_cart||0!==r.parent().find(".added_to_cart").length||r.after(' <a href="'+wc_add_to_cart_params.cart_url+'" class="added_to_cart wc-forward" title="'+wc_add_to_cart_params.i18n_view_cart+'">'+wc_add_to_cart_params.i18n_view_cart+"</a>"),e(document.body).trigger("wc_cart_button_updated",[r]))},t.prototype.updateCartPage=function(){var t=window.location.toString().replace("add-to-cart","added-to-cart");e(".shop_table.cart").load(t+" .shop_table.cart:eq(0) > *",function(){e(".shop_table.cart").stop(!0).css("opacity","1").unblock(),e(document.body).trigger("cart_page_refreshed")}),e(".cart_totals").load(t+" .cart_totals:eq(0) > *",function(){e(".cart_totals").stop(!0).css("opacity","1").unblock(),e(document.body).trigger("cart_totals_refreshed")})},t.prototype.updateFragments=function(t,a){a&&(e.each(a,function(t){e(t).addClass("updating").fadeTo("400","0.6").block({message:null,overlayCSS:{opacity:.6}})}),e.each(a,function(t,a){e(t).replaceWith(a),e(t).stop(!0).css("opacity","1").unblock()}),e(document.body).trigger("wc_fragments_loaded"))},new t});
;/*!
 * jQuery blockUI plugin
 * Version 2.70.0-2014.11.23
 * Requires jQuery v1.7 or later
 *
 * Examples at: http://malsup.com/jquery/block/
 * Copyright (c) 2007-2013 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to Amir-Hossein Sobhi for some excellent contributions!
 */
!function(){"use strict";function e(e){function t(t,n){var s,h,k=t==window,y=n&&n.message!==undefined?n.message:undefined;if(!(n=e.extend({},e.blockUI.defaults,n||{})).ignoreIfBlocked||!e(t).data("blockUI.isBlocked")){if(n.overlayCSS=e.extend({},e.blockUI.defaults.overlayCSS,n.overlayCSS||{}),s=e.extend({},e.blockUI.defaults.css,n.css||{}),n.onOverlayClick&&(n.overlayCSS.cursor="pointer"),h=e.extend({},e.blockUI.defaults.themedCSS,n.themedCSS||{}),y=y===undefined?n.message:y,k&&p&&o(window,{fadeOut:0}),y&&"string"!=typeof y&&(y.parentNode||y.jquery)){var m=y.jquery?y[0]:y,g={};e(t).data("blockUI.history",g),g.el=m,g.parent=m.parentNode,g.display=m.style.display,g.position=m.style.position,g.parent&&g.parent.removeChild(m)}e(t).data("blockUI.onUnblock",n.onUnblock);var v,I,w,U,x=n.baseZ;v=e(r||n.forceIframe?'<iframe class="blockUI" style="z-index:'+x+++';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="'+n.iframeSrc+'"></iframe>':'<div class="blockUI" style="display:none"></div>'),I=e(n.theme?'<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:'+x+++';display:none"></div>':'<div class="blockUI blockOverlay" style="z-index:'+x+++';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>'),n.theme&&k?(U='<div class="blockUI '+n.blockMsgClass+' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:'+(x+10)+';display:none;position:fixed">',n.title&&(U+='<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">'+(n.title||"&nbsp;")+"</div>"),U+='<div class="ui-widget-content ui-dialog-content"></div>',U+="</div>"):n.theme?(U='<div class="blockUI '+n.blockMsgClass+' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:'+(x+10)+';display:none;position:absolute">',n.title&&(U+='<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">'+(n.title||"&nbsp;")+"</div>"),U+='<div class="ui-widget-content ui-dialog-content"></div>',U+="</div>"):U=k?'<div class="blockUI '+n.blockMsgClass+' blockPage" style="z-index:'+(x+10)+';display:none;position:fixed"></div>':'<div class="blockUI '+n.blockMsgClass+' blockElement" style="z-index:'+(x+10)+';display:none;position:absolute"></div>',w=e(U),y&&(n.theme?(w.css(h),w.addClass("ui-widget-content")):w.css(s)),n.theme||I.css(n.overlayCSS),I.css("position",k?"fixed":"absolute"),(r||n.forceIframe)&&v.css("opacity",0);var C=[v,I,w],S=e(k?"body":t);e.each(C,function(){this.appendTo(S)}),n.theme&&n.draggable&&e.fn.draggable&&w.draggable({handle:".ui-dialog-titlebar",cancel:"li"});var O=f&&(!e.support.boxModel||e("object,embed",k?null:t).length>0);if(u||O){if(k&&n.allowBodyStretch&&e.support.boxModel&&e("html,body").css("height","100%"),(u||!e.support.boxModel)&&!k)var E=a(t,"borderTopWidth"),T=a(t,"borderLeftWidth"),M=E?"(0 - "+E+")":0,B=T?"(0 - "+T+")":0;e.each(C,function(e,t){var o=t[0].style;if(o.position="absolute",e<2)k?o.setExpression("height","Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.support.boxModel?0:"+n.quirksmodeOffsetHack+') + "px"'):o.setExpression("height",'this.parentNode.offsetHeight + "px"'),k?o.setExpression("width",'jQuery.support.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"'):o.setExpression("width",'this.parentNode.offsetWidth + "px"'),B&&o.setExpression("left",B),M&&o.setExpression("top",M);else if(n.centerY)k&&o.setExpression("top",'(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"'),o.marginTop=0;else if(!n.centerY&&k){var i="((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "+(n.css&&n.css.top?parseInt(n.css.top,10):0)+') + "px"';o.setExpression("top",i)}})}if(y&&(n.theme?w.find(".ui-widget-content").append(y):w.append(y),(y.jquery||y.nodeType)&&e(y).show()),(r||n.forceIframe)&&n.showOverlay&&v.show(),n.fadeIn){var j=n.onBlock?n.onBlock:c,H=n.showOverlay&&!y?j:c,z=y?j:c;n.showOverlay&&I._fadeIn(n.fadeIn,H),y&&w._fadeIn(n.fadeIn,z)}else n.showOverlay&&I.show(),y&&w.show(),n.onBlock&&n.onBlock.bind(w)();if(i(1,t,n),k?(p=w[0],b=e(n.focusableElements,p),n.focusInput&&setTimeout(l,20)):d(w[0],n.centerX,n.centerY),n.timeout){var W=setTimeout(function(){k?e.unblockUI(n):e(t).unblock(n)},n.timeout);e(t).data("blockUI.timeout",W)}}}function o(t,o){var s,l=t==window,d=e(t),a=d.data("blockUI.history"),c=d.data("blockUI.timeout");c&&(clearTimeout(c),d.removeData("blockUI.timeout")),o=e.extend({},e.blockUI.defaults,o||{}),i(0,t,o),null===o.onUnblock&&(o.onUnblock=d.data("blockUI.onUnblock"),d.removeData("blockUI.onUnblock"));var r;r=l?e(document.body).children().filter(".blockUI").add("body > .blockUI"):d.find(">.blockUI"),o.cursorReset&&(r.length>1&&(r[1].style.cursor=o.cursorReset),r.length>2&&(r[2].style.cursor=o.cursorReset)),l&&(p=b=null),o.fadeOut?(s=r.length,r.stop().fadeOut(o.fadeOut,function(){0==--s&&n(r,a,o,t)})):n(r,a,o,t)}function n(t,o,n,i){var s=e(i);if(!s.data("blockUI.isBlocked")){t.each(function(e,t){this.parentNode&&this.parentNode.removeChild(this)}),o&&o.el&&(o.el.style.display=o.display,o.el.style.position=o.position,o.el.style.cursor="default",o.parent&&o.parent.appendChild(o.el),s.removeData("blockUI.history")),s.data("blockUI.static")&&s.css("position","static"),"function"==typeof n.onUnblock&&n.onUnblock(i,n);var l=e(document.body),d=l.width(),a=l[0].style.width;l.width(d-1).width(d),l[0].style.width=a}}function i(t,o,n){var i=o==window,l=e(o);if((t||(!i||p)&&(i||l.data("blockUI.isBlocked")))&&(l.data("blockUI.isBlocked",t),i&&n.bindEvents&&(!t||n.showOverlay))){var d="mousedown mouseup keydown keypress keyup touchstart touchend touchmove";t?e(document).bind(d,n,s):e(document).unbind(d,s)}}function s(t){if("keydown"===t.type&&t.keyCode&&9==t.keyCode&&p&&t.data.constrainTabKey){var o=b,n=!t.shiftKey&&t.target===o[o.length-1],i=t.shiftKey&&t.target===o[0];if(n||i)return setTimeout(function(){l(i)},10),!1}var s=t.data,d=e(t.target);return d.hasClass("blockOverlay")&&s.onOverlayClick&&s.onOverlayClick(t),d.parents("div."+s.blockMsgClass).length>0||0===d.parents().children().filter("div.blockUI").length}function l(e){if(b){var t=b[!0===e?b.length-1:0];t&&t.focus()}}function d(e,t,o){var n=e.parentNode,i=e.style,s=(n.offsetWidth-e.offsetWidth)/2-a(n,"borderLeftWidth"),l=(n.offsetHeight-e.offsetHeight)/2-a(n,"borderTopWidth");t&&(i.left=s>0?s+"px":"0"),o&&(i.top=l>0?l+"px":"0")}function a(t,o){return parseInt(e.css(t,o),10)||0}e.fn._fadeIn=e.fn.fadeIn;var c=e.noop||function(){},r=/MSIE/.test(navigator.userAgent),u=/MSIE 6.0/.test(navigator.userAgent)&&!/MSIE 8.0/.test(navigator.userAgent),f=(document.documentMode,e.isFunction(document.createElement("div").style.setExpression));e.blockUI=function(e){t(window,e)},e.unblockUI=function(e){o(window,e)},e.growlUI=function(t,o,n,i){var s=e('<div class="growlUI"></div>');t&&s.append("<h1>"+t+"</h1>"),o&&s.append("<h2>"+o+"</h2>"),n===undefined&&(n=3e3);var l=function(t){t=t||{},e.blockUI({message:s,fadeIn:"undefined"!=typeof t.fadeIn?t.fadeIn:700,fadeOut:"undefined"!=typeof t.fadeOut?t.fadeOut:1e3,timeout:"undefined"!=typeof t.timeout?t.timeout:n,centerY:!1,showOverlay:!1,onUnblock:i,css:e.blockUI.defaults.growlCSS})};l();s.css("opacity");s.mouseover(function(){l({fadeIn:0,timeout:3e4});var t=e(".blockMsg");t.stop(),t.fadeTo(300,1)}).mouseout(function(){e(".blockMsg").fadeOut(1e3)})},e.fn.block=function(o){if(this[0]===window)return e.blockUI(o),this;var n=e.extend({},e.blockUI.defaults,o||{});return this.each(function(){var t=e(this);n.ignoreIfBlocked&&t.data("blockUI.isBlocked")||t.unblock({fadeOut:0})}),this.each(function(){"static"==e.css(this,"position")&&(this.style.position="relative",e(this).data("blockUI.static",!0)),this.style.zoom=1,t(this,o)})},e.fn.unblock=function(t){return this[0]===window?(e.unblockUI(t),this):this.each(function(){o(this,t)})},e.blockUI.version=2.7,e.blockUI.defaults={message:"<h1>Please wait...</h1>",title:null,draggable:!0,theme:!1,css:{padding:0,margin:0,width:"30%",top:"40%",left:"35%",textAlign:"center",color:"#000",border:"3px solid #aaa",backgroundColor:"#fff",cursor:"wait"},themedCSS:{width:"30%",top:"40%",left:"35%"},overlayCSS:{backgroundColor:"#000",opacity:.6,cursor:"wait"},cursorReset:"default",growlCSS:{width:"350px",top:"10px",left:"",right:"10px",border:"none",padding:"5px",opacity:.6,cursor:"default",color:"#fff",backgroundColor:"#000","-webkit-border-radius":"10px","-moz-border-radius":"10px","border-radius":"10px"},iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank",forceIframe:!1,baseZ:1e3,centerX:!0,centerY:!0,allowBodyStretch:!0,bindEvents:!0,constrainTabKey:!0,fadeIn:200,fadeOut:400,timeout:0,showOverlay:!0,focusInput:!0,focusableElements:":input:enabled:visible",onBlock:null,onUnblock:null,onOverlayClick:null,quirksmodeOffsetHack:4,blockMsgClass:"blockMsg",ignoreIfBlocked:!1};var p=null,b=[]}"function"==typeof define&&define.amd&&define.amd.jQuery?define(["jquery"],e):e(jQuery)}();
;/*!
 * JavaScript Cookie v2.1.4
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
!function(e){var n=!1;if("function"==typeof define&&define.amd&&(define(e),n=!0),"object"==typeof exports&&(module.exports=e(),n=!0),!n){var o=window.Cookies,t=window.Cookies=e();t.noConflict=function(){return window.Cookies=o,t}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var o=arguments[e];for(var t in o)n[t]=o[t]}return n}function n(o){function t(n,r,i){var c;if("undefined"!=typeof document){if(arguments.length>1){if("number"==typeof(i=e({path:"/"},t.defaults,i)).expires){var a=new Date;a.setMilliseconds(a.getMilliseconds()+864e5*i.expires),i.expires=a}i.expires=i.expires?i.expires.toUTCString():"";try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(m){}r=o.write?o.write(r,n):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=(n=(n=encodeURIComponent(String(n))).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent)).replace(/[\(\)]/g,escape);var f="";for(var s in i)i[s]&&(f+="; "+s,!0!==i[s]&&(f+="="+i[s]));return document.cookie=n+"="+r+f}n||(c={});for(var p=document.cookie?document.cookie.split("; "):[],d=/(%[0-9A-Z]{2})+/g,u=0;u<p.length;u++){var l=p[u].split("="),C=l.slice(1).join("=");'"'===C.charAt(0)&&(C=C.slice(1,-1));try{var g=l[0].replace(d,decodeURIComponent);if(C=o.read?o.read(C,g):o(C,g)||C.replace(d,decodeURIComponent),this.json)try{C=JSON.parse(C)}catch(m){}if(n===g){c=C;break}n||(c[g]=C)}catch(m){}}return c}}return t.set=t,t.get=function(e){return t.call(t,e)},t.getJSON=function(){return t.apply({json:!0},[].slice.call(arguments))},t.defaults={},t.remove=function(n,o){t(n,"",e(o,{expires:-1}))},t.withConverter=n,t}return n(function(){})});
;jQuery(function(i){i(".woocommerce-ordering").on("change","select.orderby",function(){i(this).closest("form").submit()}),i("input.qty:not(.product-quantity input.qty)").each(function(){var o=parseFloat(i(this).attr("min"));0<=o&&parseFloat(i(this).val())<o&&i(this).val(o)}),i(".woocommerce-store-notice__dismiss-link").click(function(){Cookies.set("store_notice","hidden",{path:"/"}),i(".woocommerce-store-notice").hide()}),"hidden"===Cookies.get("store_notice")?i(".woocommerce-store-notice").hide():i(".woocommerce-store-notice").show(),i(document.body).on("click",function(){i(".woocommerce-input-wrapper span.description:visible").prop("aria-hidden",!0).slideUp(250)}),i(".woocommerce-input-wrapper").on("click",function(o){o.stopPropagation()}),i(".woocommerce-input-wrapper :input").on("keydown",function(o){var e=i(this).parent().find("span.description");if(27===o.which&&e.length&&e.is(":visible"))return e.prop("aria-hidden",!0).slideUp(250),o.preventDefault(),!1}).on("click focus",function(){var o=i(this).parent(),e=o.find("span.description");o.addClass("currentTarget"),i(".woocommerce-input-wrapper:not(.currentTarget) span.description:visible").prop("aria-hidden",!0).slideUp(250),e.length&&e.is(":hidden")&&e.prop("aria-hidden",!1).slideDown(250),o.removeClass("currentTarget")}),i.scroll_to_notices=function(o){o.length&&i("html, body").animate({scrollTop:o.offset().top-100},1e3)}});
;jQuery(function(n){if("undefined"==typeof wc_cart_fragments_params)return!1;var t=!0,o=wc_cart_fragments_params.cart_hash_key;try{t="sessionStorage"in window&&null!==window.sessionStorage,window.sessionStorage.setItem("wc","test"),window.sessionStorage.removeItem("wc"),window.localStorage.setItem("wc","test"),window.localStorage.removeItem("wc")}catch(w){t=!1}function a(){t&&sessionStorage.setItem("wc_cart_created",(new Date).getTime())}function s(e){t&&(localStorage.setItem(o,e),sessionStorage.setItem(o,e))}var e={url:wc_cart_fragments_params.wc_ajax_url.toString().replace("%%endpoint%%","get_refreshed_fragments"),type:"POST",success:function(e){e&&e.fragments&&(n.each(e.fragments,function(e,t){n(e).replaceWith(t)}),t&&(sessionStorage.setItem(wc_cart_fragments_params.fragment_name,JSON.stringify(e.fragments)),s(e.cart_hash),e.cart_hash&&a()),n(document.body).trigger("wc_fragments_refreshed"))}};function r(){n.ajax(e)}if(t){var i=null;n(document.body).on("wc_fragment_refresh updated_wc_div",function(){r()}),n(document.body).on("added_to_cart removed_from_cart",function(e,t,n){var r=sessionStorage.getItem(o);null!==r&&r!==undefined&&""!==r||a(),sessionStorage.setItem(wc_cart_fragments_params.fragment_name,JSON.stringify(t)),s(n)}),n(document.body).on("wc_fragments_refreshed",function(){clearTimeout(i),i=setTimeout(r,864e5)}),n(window).on("storage onstorage",function(e){o===e.originalEvent.key&&localStorage.getItem(o)!==sessionStorage.getItem(o)&&r()}),n(window).on("pageshow",function(e){e.originalEvent.persisted&&(n(".widget_shopping_cart_content").empty(),n(document.body).trigger("wc_fragment_refresh"))});try{var c=n.parseJSON(sessionStorage.getItem(wc_cart_fragments_params.fragment_name)),_=sessionStorage.getItem(o),g=Cookies.get("woocommerce_cart_hash"),m=sessionStorage.getItem("wc_cart_created");if(null!==_&&_!==undefined&&""!==_||(_=""),null!==g&&g!==undefined&&""!==g||(g=""),_&&(null===m||m===undefined||""===m))throw"No cart_created";if(m){var d=1*m+864e5,f=(new Date).getTime();if(d<f)throw"Fragment expired";i=setTimeout(r,d-f)}if(!c||!c["div.widget_shopping_cart_content"]||_!==g)throw"No fragment";n.each(c,function(e,t){n(e).replaceWith(t)}),n(document.body).trigger("wc_fragments_loaded")}catch(w){r()}}else r();0<Cookies.get("woocommerce_items_in_cart")?n(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").show():n(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").hide(),n(document.body).on("adding_to_cart",function(){n(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").show()})});
;!function(a){"use strict";window.dahz=window.dahz||{},dahz.stickyHeader={set:function(e){_.extend(dahz.stickyHeader,_.pick(e||{},"elementDesktop","elementMobile","offsetTop","offsetTopMobile","offsetBottom","edgeY","firstWindowWidth","framedWidth","headerOffsetTop","top"))},init:function(){var e=a("#de-header-horizontal-desktop .de-header__sticky--wrapper").data("header-sticky-offset");dahz.stickyHeader.set({elementDesktop:a("#de-header-horizontal-desktop .de-header__sticky--wrapper"),elementMobile:a("#de-header-horizontal-mobile .de-header__sticky--wrapper"),offsetTop:a("#wpadminbar").height(),offsetTopMobile:600<a(window).outerWidth()?a("#wpadminbar").height():0,offsetBottom:a(window).height(),edgeY:100,firstWindowWidth:600<a(window).outerWidth()?"desktop":"mobile",framedWidth:960<=a(window).outerWidth()&&"number"==typeof e?e:0,headerOffsetTop:a("#de-site-header").length?a("#de-site-header").offset().top:0,top:a("#de-header-horizontal-desktop .de-header__sticky--wrapper").data("header-sticky-top")}),dahz.stickyHeader.sticky(dahz.stickyHeader.elementDesktop,"desktop"),dahz.stickyHeader.sticky(dahz.stickyHeader.elementMobile,"mobile"),a(".de-header__sticky--wrapper").off("active"),a(".de-header__sticky--wrapper").off("inactive"),a(".de-header__sticky--wrapper").on("active",dahz.stickyHeader.onActive),a(".de-header__sticky--wrapper").on("inactive",dahz.stickyHeader.onInactive)},onActive:function(){void 0!==a("#de-header-horizontal").data("transparency")&&a("#de-header-horizontal").addClass("no-transparency").removeClass(a("#de-header-horizontal").data("transparency")),void 0!==a(this).data("header-sticky-box-shadow")&&""!==a(this).data("header-sticky-box-shadow")&&a(this).addClass(a(this).data("header-sticky-box-shadow"))},onInactive:function(){void 0!==a("#de-header-horizontal").data("transparency")&&a("#de-header-horizontal").removeClass("no-transparency").addClass(a("#de-header-horizontal").data("transparency")),void 0!==a(this).data("header-sticky-box-shadow")&&""!==a(this).data("header-sticky-box-shadow")&&a(this).removeClass(a(this).data("header-sticky-box-shadow"))},sticky:function(e,t){var i=0;"mobile"==t?(i=dahz.stickyHeader.offsetTopMobile,dahz.stickyHeader.set({offsetTopMobile:dahz.stickyHeader.offsetTopMobile+a(e).outerHeight()})):(i=dahz.stickyHeader.offsetTop,dahz.stickyHeader.set({offsetTop:dahz.stickyHeader.offsetTop+a(e).outerHeight()})),UIkit.sticky(e,{offset:i+dahz.stickyHeader.framedWidth,top:dahz.stickyHeader.top?0:a("#de-site-header").outerHeight()+dahz.stickyHeader.edgeY+a(window).outerHeight(),animation:"uk-animation-slide-top","cls-active":"no-transparency"})}},dahz.wishlist={init:function(){dahz.wishlist.set({totalItemContainer:a(".de-wishlist__total-item",a('[data-item-id="wishlist"]')),wishlistButton:a(".de-header__wishlist-btn",a('[data-item-id="wishlist"]'))}),a(document).on("added_to_wishlist removed_from_wishlist",function(){dahz.wishlist.updateCount()})},set:function(e){_.extend(dahz.wishlist,_.pick(e||{},"totalItemContainer","wishlistButton"))},updateCount:function(){a.ajax({url:dahzFramework.ajaxURL,async:!0,beforeSend:function(){dahz.wishlist.wishlistButton.append('<div class="de-header__wishlist-btn--overlay uk-overlay-default uk-position-cover"><div class="uk-position-center" uk-spinner></div></div>')},data:{action:"dahz_framework_update_wishlist_count"},error:function(){a(".de-header__wishlist-btn--overlay",dahz.wishlist.wishlistButton).remove()},dataType:"json",success:function(e){a(".de-header__wishlist-btn--overlay",dahz.wishlist.wishlistButton).remove(),0<e.count?(dahz.wishlist.wishlistButton.removeClass("de-header__wishlist--empty"),dahz.wishlist.totalItemContainer.html(e.count)):(dahz.wishlist.totalItemContainer.html(""),dahz.wishlist.wishlistButton.addClass("de-header__wishlist--empty"))}})}},dahz.notices={statuses:{error:"danger",success:"success",notice:"warning"},positions:{error:"top-right",success:"top-right",notice:"top-right"},init:function(){dahz.notices.set({$el:a(".de-notices")}),dahz.notices.show()},set:function(e){_.extend(dahz.notices,_.pick(e||{},"$el"))},show:function(){dahz.notices.$el.each(dahz.notices.showNotices)},showNotices:function(e,t){var i=a(t).data("notices-type");UIkit.notification({message:a(t).html(),status:dahz.notices.statuses[i],pos:dahz.notices.positions[i],timeout:3e3}),a(t).remove()}},dahz.mobileMenu={init:function(){dahz.mobileMenu.set({body:a("body")}),a("#header-mobile-menu").on("shown",dahz.mobileMenu.lazyMenu)},set:function(e){_.extend(dahz.mobileMenu,_.pick(e||{},"body"))},renderMenu:function(e,t){t.html(e).promise().done(function(){a(document).trigger("dahz_mobile_menu_loaded")})},lazyMenu:function(){var t=a(".header-mobile-menu__container--content",a(this));t.data("mobile-menu-is-loaded")||a.ajax({url:dahzFramework.ajaxURL,type:"POST",async:!0,beforeSend:function(){t.data("mobile-menu-is-loaded",!0),t.append('<div class="header-mobile-menu__container--content--overlay uk-overlay-default uk-position-cover"><div class="uk-position-center" uk-spinner></div></div>')},error:function(){t.data("mobile-menu-is-loaded",!1)},complete:function(){a(".header-mobile-menu__container--content--overlay",t).remove()},data:{action:"dahz_framework_render_mobile_menu_elements",is_override:!(void 0===dahzFramework.megamenu||!dahzFramework.megamenu.isOverride),page_id:!(void 0===dahzFramework.megamenu||!dahzFramework.megamenu.isOverride)&&dahzFramework.megamenu.pageID},success:function(e){_.defer(dahz.mobileMenu.renderMenu,e,t)}})}},dahz.share={popup:{width:600,height:450},init:function(){a("body").on("click","a.ds-social-share",dahz.share.onClick)},onClick:function(){return dahz.share.popup.top=a(window).height()/2-dahz.share.popup.height/2,dahz.share.popup.left=a(window).width()/2-dahz.share.popup.width/2,window.open(this.href,"targetWindow","\n toolbar=no,\n location=no,\n status=no,\n menubar=no,\n scrollbars=yes,\n resizable=yes,\n left="+dahz.share.popup.left+",\n top="+dahz.share.popup.top+",\n width="+dahz.share.popup.width+",\n height="+dahz.share.popup.height+"\n"),!1}},dahz.backToTop={scrollTop:0,init:function(){a("body").hasClass("enable-back-to-top")&&a(window).on("scroll",dahz.backToTop.onScroll)},onScroll:function(){dahz.backToTop.scrollTop=a(window).scrollTop(),500<dahz.backToTop.scrollTop?(a(".de-back-to-top").removeClass("uk-hidden uk-animation-fade uk-animation-reverse"),a(".de-back-to-top").addClass("uk-animation-slide-right-small")):(a(".de-back-to-top").addClass("uk-animation-slide-right-small uk-animation-fade uk-animation-reverse"),a(".de-back-to-top").removeClass("uk-animation-slide-right-small"))}},dahz.wooPriceSlider={init:function(){a(".price_slider").on("slidechange",dahz.wooPriceSlider.onChange)},onChange:function(){a(this).parents("form").trigger("submit")}},dahz.tableResponsive={init:function(){a("table").wrap('<div class="uk-overflow-auto></div"')}},dahz.drop={getBottomPosition:function(e,t){var i;switch(t){case"auto":i=e.parents(".main-menu-item");break;case"row":i=e.parents(".de-header__row");break;case"container":i=e.parents(".uk-container")}return(i.length?i.position().top:0)+i.outerHeight()+parseInt(i.css("margin-top"))},getboundaryHeight:function(e){return(e.length?e.position().top:0)+e.outerHeight()},getOffset:function(e,t,i){return dahz.drop.getboundaryHeight(t)-dahz.drop.getBottomPosition(e,i)},init:function(){a("[data-dahz-drop]").each(function(){var e=a(this),t=e.data("dahz-drop"),i="";t.boundaryAlign?t.boundaryAlign&&"bottom-justify"!==t.pos&&(i=e.data("container"),t.offset=dahz.drop.getOffset(e,e.parents(".de-header__section"),i)):t.offset=dahz.drop.getOffset(e,e.parents(".de-header__section"),"auto"),UIkit.drop(e,t)})}},dahz.shop={singleProduct:function(){a(".ds-single").each(function(){a(".woocommerce-product-gallery__trigger",this).addClass("uk-icon"),UIkit.icon(a(".woocommerce-product-gallery__trigger",this),{icon:"expand"}),UIkit.icon(a(".woocommerce-product-gallery__trigger--popup-video",this),{icon:"play"}),UIkit.modal(a("#modal-media-video",this)),UIkit.tooltip(a(".tooltip",this),{pos:"top-left"})})}},dahz.shopArchive={init:function(){a(".de-product .de-product__item").each(function(){var e=a(".de-product-thumbnail__action--add-to-cart a",this).width(),t=a(".de-product-thumbnail__action--add-to-cart a svg",this).width(),i=a(".yith-wcwl-add-button a",this).width(),o=a(".yith-wcwl-add-button a svg",this).width();if(a(".yith-wcwl-wishlistexistsbrowse.show",this).length)i=a(".yith-wcwl-wishlistexistsbrowse.show a").width(),o=a(".yith-wcwl-wishlistexistsbrowse.show a svg").width();else if(a(".yith-wcwl-wishlistaddedbrowse.show",this).length)i=a(".yith-wcwl-wishlistaddedbrowse.show a").width(),o=a(".yith-wcwl-wishlistaddedbrowse.show a svg").width();a(".yith-wcwl-add-to-wishlist",this).css("right",-(i-(o-2))),a(".de-product-thumbnail__action--add-to-cart",this).css("right",-(e-(t-2)))})},updateButton:function(e,t,i,o){(o=void 0!==o&&o)&&"undefined"!=typeof wc_add_to_cart_params&&(wc_add_to_cart_params.is_cart||0!==o.parent().find(".added_to_cart").length||(o.attr("href",wc_add_to_cart_params.cart_url),o.removeClass("ajax_add_to_cart"),a("span",o).html(wc_add_to_cart_params.i18n_view_cart)))}},dahz.headerTransparent={init:function(){var e=a("#de-header-horizontal"),t=a(".de-page-title"),i=0;void 0!==e.data("transparency")&&void 0!==t&&(void 0===(t=a(".de-page-title")).data("padding-default")&&t.data("padding-default",t.css("padding-top")),a("#de-header-horizontal-desktop",e).is(":visible")?(i=parseInt(t.data("padding-default"))+a("#de-header-horizontal-desktop",e).outerHeight(),t.css("padding-top",i)):t.css("padding-top",""))}},dahz.widget={calendar:function(){a(".sidebar").each(function(){0==a(".widget_calendar tfoot td a",this).length&&a(".widget_calendar tfoot").css("display","none")})}},a(document).on("ready",function(){console.log(dahzFramework),dahz.headerTransparent.init(),dahz.tableResponsive.init(),dahz.drop.init(),dahz.shop.singleProduct(),dahz.widget.calendar();document.documentElement.offsetWidth;dahz.mobileMenu.init(),dahz.share.init(),dahz.backToTop.init(),dahz.wooPriceSlider.init(),a("iframe").each(function(){a(this).parents(".ds-video-cover").length&&UIkit.cover(this)}),dahz.stickyHeader.init(),a(".footer-section__toggle-content").on("show",function(){a(".footer-section__toggle-content--btn",a(this).parents(".de-footer__section")).addClass("active")}),a(".footer-section__toggle-content").on("hide",function(){a(".footer-section__toggle-content--btn",a(this).parents(".de-footer__section")).removeClass("active")}),a('[data-item-id="wishlist"]').length&&dahz.wishlist.init(),a(window).on("resize",function(){_.defer(dahz.headerTransparent.init),_.defer(dahz.stickyHeader.init),_.defer(dahz.drop.init),dahz.shopArchive.init()})}),a(document).on("ajaxComplete",function(){}),a(document.body).on("added_to_cart",dahz.shopArchive.updateButton),a(document).on("content_block_ready",function(){if(void 0!==dahz.stickyHeader||"undefined"!=dahz.stickyHeader.headerOffsetTop){a("#de-site-header").length&&a("#de-site-header").offset().top;dahz.stickyHeader.headerOffsetTop}}),a(document).on("added_to_cart",function(e,t,i,o){void 0!==t&&t.notice}),a(window).on("load",function(){dahz.shopArchive.init()}),a(document).ajaxComplete(function(){dahz.shopArchive.init()})}(jQuery);
;!function(t){"use strict";window.dahzWidget={navMenu:function(o){this.$target=o,this.$target.addClass("dahz-initialized"),t("li.menu-item-has-children > span",this.$target).on("click",{_this:this},this.navOpener)},woocommerceTitle:function(t){this.$target=t,this.$target.addClass("dahz-initialized")},productCategories:function(t){this.$target=t,this.$target.addClass("dahz-initialized"),this.init()}},window.InitDahzWidget=function(){var o,e,n,i,a,r;t(".widget_nav_menu:not(.dahz-initialized)").each(function(){t(this).dahzWidgetNav()}),t(".widget.woocommerce:not(.dahz-initialized)").each(function(){t(".widget-title",this).length&&t(this).dahzWidgetWooTitle()}),t(".widget_product_categories").each(function(){t(this).dahzWidgetProductCategories()}),t(".woocs_converter_shortcode").length&&(t(".woocs_converter_shortcode_button").off("click"),t(".woocs_converter_shortcode_button").on("click",function(){return o=t(this).parent(".woocs_converter_shortcode").find(".woocs_converter_shortcode_amount").eq(0).val(),e=t(this).parent(".woocs_converter_shortcode").find(".woocs_converter_shortcode_from").eq(0).val(),n=t(this).parent(".woocs_converter_shortcode").find(".woocs_converter_shortcode_to").eq(0).val(),i=t(this).parent(".woocs_converter_shortcode").find(".woocs_converter_shortcode_precision").eq(0).val(),a=t(this).parent(".woocs_converter_shortcode").find(".woocs_converter_shortcode_results").eq(0),t(a).val(woocs_lang_loading+" ..."),r={action:"woocs_convert_currency",amount:o,from:e,to:n,precision:i},t.post(woocs_ajaxurl,r,function(o){t(a).val(o)}),!1}))},dahzWidget.navMenu.prototype.navOpener=function(o){o.data._this;var e=t(this);o.preventDefault(),e.hasClass("df-arrow-up")?(e.next(".sub-menu").slideUp("fast"),e.removeClass("df-arrow-up"),e.addClass("df-arrow-down")):(e.next(".sub-menu").slideDown("fast",function(){t(window).trigger("dahzForceLazyload")}),e.removeClass("df-arrow-down"),e.addClass("df-arrow-up"))},dahzWidget.woocommerceTitle.prototype.titleOpener=function(o){t(this).toggleClass("active"),t(this).next().slideToggle("200",function(){t(window).trigger("dahzForceLazyload")}).css("display","flex")},dahzWidget.productCategories.prototype.init=function(o){var e=this,n=t(".product-categories .cat-item.cat-parent",e.$target);n.find(".children").length&&(n.find(".count").length?t(".count",n).append('<span class="cat-toggle"><span data-uk-icon="df_dots-horizontal" class="df-arrow-down"></span></span>').promise().done(function(){t(".count",n).on("click",{_this:e},e.togglePCatList)}):n.append('<span class="count"><span class="cat-toggle"><span data-uk-icon="df_dots-horizontal" class="df-arrow-down"></span></span></span>').promise().done(function(){t(".count",n).on("click",{_this:e},e.togglePCatList)}))},dahzWidget.productCategories.prototype.togglePCatList=function(o){t(window).trigger("dahzForceLazyload"),t(this).siblings(".children").slideToggle("200",function(){t(window).trigger("dahzForceLazyload")}).toggleClass("active")},t.fn.dahzWidgetNav=function(){return new dahzWidget.navMenu(this),this},t.fn.dahzWidgetWooTitle=function(){return new dahzWidget.woocommerceTitle(this),this},t.fn.dahzWidgetProductCategories=function(){return new dahzWidget.productCategories(this),this},t(document).on("ready",function(){InitDahzWidget()}),t(document).on("footer_widget_1_ready",function(){InitDahzWidget()}),t(document).on("footer_widget_2_ready",function(){InitDahzWidget()}),t(document).on("footer_widget_3_ready",function(){InitDahzWidget()}),t(document).on("footer_widget_4_ready",function(){InitDahzWidget()})}(jQuery);
;!function(e,t,n,o){function a(e,t){return e[t]===o?v[t]:e[t]}function i(){var e=t.pageYOffset;return e===o?h.scrollTop:e}function r(e,t){var n=v["on"+e];n&&(p(n)?n.call(t[0]):(n.addClass&&t.addClass(n.addClass),n.removeClass&&t.removeClass(n.removeClass))),t.trigger("lazy"+e,[t]),c()}function l(t){r(t.type,e(this).off(g,l))}function s(n){if(E.length){n=n||v.forceLoad,b=1/0;var o,a,s=i(),d=t.innerHeight||h.clientHeight,c=t.innerWidth||h.clientWidth;for(o=0,a=E.length;o<a;o++){var f,u=E[o],m=u[0],y=u[A],C=!1,z=n;if(w(h,m)){if(n||!y.visibleOnly||m.offsetWidth||m.offsetHeight){if(!z){var I=m.getBoundingClientRect(),T=y.edgeX,B=y.edgeY;z=(f=I.top+s-B-d)<=s&&I.bottom>-B&&I.left<=c+T&&I.right>-T}if(z){r("show",u);var L=y.srcAttr,X=p(L)?L(u):m.getAttribute(L);X&&(u.on(g,l),m.src=X),C=!0}else f<b&&(b=f)}}else C=!0;C&&(E.splice(o--,1),a--)}a||r("complete",e(h))}}function d(){I>1?(I=1,s(),setTimeout(d,v.throttle)):I=0}function c(e){E.length&&(e&&"scroll"===e.type&&e.currentTarget===t&&b>=i()||(I||setTimeout(d,0),I=2))}function f(){y.lazyLoadXT()}function u(){s(!0)}var A="lazyLoadXT",g="load error",h=n.documentElement||n.body,v={autoInit:!0,selector:"img[data-src]",blankImage:"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",throttle:50,forceLoad:t.onscroll===o||!!t.operamini||!h.getBoundingClientRect,loadEvent:"pageshow",updateEvent:"load orientationchange resize scroll touchmove focus",forceEvent:"",oninit:{removeClass:"lazy"},onshow:{addClass:"lazy-hidden"},onload:{removeClass:"lazy-hidden",addClass:"lazy-loaded"},onerror:{removeClass:"lazy-hidden"},checkDuplicates:!0},m={srcAttr:"data-src",edgeX:500,edgeY:500,visibleOnly:!0},y=e(t),p=e.isFunction,C=e.extend,z=e.data||function(t,n){return e(t).data(n)},w=e.contains||function(e,t){for(;t=t.parentNode;)if(t===e)return!0;return!1},E=[],b=0,I=0;e[A]=C(v,m,e[A]),e.fn[A]=function(n){var o,i=a(n=n||{},"blankImage"),l=a(n,"checkDuplicates"),s=a(n,"scrollContainer"),d={};e(s).on("scroll",c);for(o in m)d[o]=a(n,o);return this.each(function(o,a){if(a===t)e(v.selector).lazyLoadXT(n);else{if(l&&z(a,"lazied"))return;var s=e(a).data("lazied",1);i&&"IMG"===a.tagName&&!a.src&&(a.src=i),s[A]=C({},d),r("init",s),E.push(s)}})},e(n).ready(function(){r("start",y),y.on(v.loadEvent,f).on(v.updateEvent,c).on(v.forceEvent,u),e(n).on(v.updateEvent,c),v.autoInit&&f()})}(window.jQuery||window.Zepto||window.$,window,document);
;(function ($) {
	"use strict";
	window.dahz = window.dahz || {};

	dahz.blogSingle = {
		init: function(){
			dahz.blogSingle.set({
				$relatedItemContainer : $('[data-single-related-is-loaded="false"]'),
				$relatedContainer : $( '.ds-single__section-related' )
			});
			dahz.blogSingle.lazyRelated();			
		},
		set: function( options ){
			_.extend(
				dahz.blogSingle, 
				_.pick(
					options || {}, 
					'$relatedItemContainer',
					'$relatedItem',
					'$relatedContainer'
				)
			);
			dahz.blogSingle.relatedSlideToShow = 3;
		},
		renderRelated: function( data ){
			dahz.blogSingle.$relatedItemContainer.html( data.related_loop_html ).promise().done( function() {
				dahz.blogSingle.set({
					$relatedItem : $( '.de-related-post__item', dahz.blogSingle.$relatedItemContainer ),
					$relatedContainer : $( '.ds-single__section-related' )
				});
			});
		},
		getRelated : function(){
			$.ajax({
				url: dahzFramework.ajaxURL,
				beforeSend:function(){
					dahz.blogSingle.$relatedItemContainer.attr( 'data-single-related-is-loaded', 'true' );
					dahz.blogSingle.$relatedItemContainer.append( '<div class="uk-height-small"><div class="de-sc-lazy-load--overlay uk-overlay-default uk-position-cover"><div class="uk-position-center" uk-spinner></div></div></div>' );
					dahz.blogSingle.set({
						$relatedItemContainer : $('[data-single-related-is-loaded="true"]')
					});
				},
				type: 'POST',
				data: {
					action: 'dahz_framework_blog_single_lazy_related',
					id: dahz.blogSingle.$relatedItemContainer.data( 'id' ),
				},
				complete:function(){
					$( '.de-sc-lazy-load--overlay', dahz.blogSingle.$relatedItemContainer ).remove();
				},
				dataType:'json',
				success: function success(data) {
					_.defer( dahz.blogSingle.renderRelated, data );
				}
			});
		},
		lazyRelated: function(){
			UIkit.scrollspy( dahz.blogSingle.$relatedItemContainer, {});
			dahz.blogSingle.$relatedItemContainer.on( 'inview', dahz.blogSingle.getRelated );
		}
	};
	$( document ).on( 'ready', dahz.blogSingle.init );
	
})(jQuery);
;!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d)if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);
;!function(a){"use strict";window.dahz=window.dahz||{},dahz.headerCart={init:function(){dahz.headerCart.set({miniCart:a(".ds-mini-cart__item"),miniCartContainer:a(".de-header__mini-cart-container")}),a(document).on("wc_fragments_loaded",dahz.headerCart.loadMiniCart),a(document).on("wc_fragments_refreshed",dahz.headerCart.loadMiniCart),a(document).on("dahz_mobile_menu_loaded",dahz.headerCart.loadMiniCart)},loadMiniCart:function(){dahz.headerCart.miniCartContainer.attr("data-mini-cart-is-loaded","false"),dahz.headerCart.lazyCart()},set:function(a){_.extend(dahz.headerCart,_.pick(a||{},"miniCart","miniCartContainer"))},decodeUrlParameter:function(a){return decodeURIComponent((a+"").replace(/\+/g,"%20"))},renderCart:function(e){var t=a(".de-mini-cart__item-outer-container",a(e)),r="",i="";a(".de-header__mini-cart-btn--overlay",a(".de-header__mini-cart-btn")).remove(),t.length&&!t.hasClass("de-mini-cart__item-outer-container--empty")?(r=dahz.headerCart.decodeUrlParameter(t.data("total-price")),i=t.data("total-items"),a(".de-header__mini-cart-btn .de-cart__total-price").html(r),a(".de-header__mini-cart-btn .de-cart__total-item").html(i),a(".de-header__mini-cart-btn").removeClass("de-header__mini-cart--empty")):(a(".de-header__mini-cart-btn .de-cart__total-price").html(""),a(".de-header__mini-cart-btn .de-cart__total-item").html(""),a(".de-header__mini-cart-btn").addClass("de-header__mini-cart--empty")),dahz.headerCart.miniCartContainer.html(e).promise().done(function(){a(document).trigger("dahz_mini_cart_ready")})},lazyCart:function(){"false"===dahz.headerCart.miniCartContainer.attr("data-mini-cart-is-loaded")&&a.ajax({url:dahzFramework.ajaxURL,type:"POST",async:!0,beforeSend:function(){dahz.headerCart.miniCartContainer.attr("data-mini-cart-is-loaded","true"),a(".de-header__mini-cart-btn").append('<div class="de-header__mini-cart-btn--overlay uk-overlay-default uk-position-cover"><div class="uk-position-center" uk-spinner></div></div>')},error:function(){dahz.headerCart.miniCartContainer.attr("data-mini-cart-is-loaded","false"),a(".de-header__mini-cart-btn--overlay",a(".de-header__mini-cart-btn")).remove()},data:{action:"dahz_framework_header_lazy_mini_cart"},success:function(a){_.defer(dahz.headerCart.renderCart,a)}})}},dahz.headerCart.init()}(jQuery);
;!function(e){"use strict";window.dahz=window.dahz||{},dahz.headerSearch={init:_.once(function(a){dahz.headerSearch.set({modal:a,input:e('input[name="s"]',a),loader:e("[data-uk-spinner]",a),result:e(".de-header-search__result",a)}),dahz.headerSearch.input.focus(),dahz.headerSearch.listener(),dahz.headerSearch.modal.on("hide",this.searchFlush)}),set:function(e){_.extend(dahz.headerSearch,_.pick(e||{},"modal","input","loader","result"))},listener:function(){dahz.headerSearch.input.unbind("keyup"),dahz.headerSearch.input.keyup(_.debounce(dahz.headerSearch.searchProcess,1e3))},searchProcess:function(){var a=e(this).val();a.length>=2?dahz.headerSearch.searchContentRender(a):dahz.headerSearch.searchFlush()},searchContentRender:function(a){e.ajax({url:dahzFramework.ajaxURL,type:"POST",data:{action:"dahz_framework_search_product_render",keyword:a},beforeSend:function(){dahz.headerSearch.loader.removeClass("uk-invisible"),dahz.headerSearch.result.removeClass("de-header-search__result--found")},success:function(e){""===e?(dahz.headerSearch.loader.addClass("uk-invisible"),dahz.headerSearch.result.html('<span class="uk-modal-title">'+dahzFramework.language.emptyMessage+"</span>")):(dahz.headerSearch.loader.addClass("uk-invisible"),dahz.headerSearch.result.html(e).addClass("de-header-search__result--found"))}})},searchFlush:function(){dahz.headerSearch.input.val(""),dahz.headerSearch.result.html("").removeClass("de-header-search__result--found")}},e("#header-search-modal").on("show",function(){dahz.headerSearch.init(e(this))})}(jQuery);
;function vc_js(){vc_toggleBehaviour(),vc_tabsBehaviour(),vc_accordionBehaviour(),vc_teaserGrid(),vc_carouselBehaviour(),vc_slidersBehaviour(),vc_prettyPhoto(),vc_googleplus(),vc_pinterest(),vc_progress_bar(),vc_plugin_flexslider(),vc_google_fonts(),vc_gridBehaviour(),vc_rowBehaviour(),vc_prepareHoverBox(),vc_googleMapsPointer(),vc_ttaActivation(),jQuery(document).trigger("vc_js"),window.setTimeout(vc_waypoints,500)}document.documentElement.className+=" js_active ",document.documentElement.className+="ontouchstart"in document.documentElement?" vc_mobile ":" vc_desktop ",function(){for(var prefix=["-webkit-","-moz-","-ms-","-o-",""],i=0;i<prefix.length;i++)prefix[i]+"transform"in document.documentElement.style&&(document.documentElement.className+=" vc_transform ")}(),"function"!=typeof window.vc_plugin_flexslider&&(window.vc_plugin_flexslider=function($parent){($parent?$parent.find(".wpb_flexslider"):jQuery(".wpb_flexslider")).each(function(){var this_element=jQuery(this),sliderTimeout=1e3*parseInt(this_element.attr("data-interval")),sliderFx=this_element.attr("data-flex_fx"),slideshow=!0;0===sliderTimeout&&(slideshow=!1),this_element.is(":visible")&&this_element.flexslider({animation:sliderFx,slideshow:slideshow,slideshowSpeed:sliderTimeout,sliderSpeed:800,smoothHeight:!0})})}),"function"!=typeof window.vc_googleplus&&(window.vc_googleplus=function(){0<jQuery(".wpb_googleplus").length&&function(){var po=document.createElement("script");po.type="text/javascript",po.async=!0,po.src="//apis.google.com/js/plusone.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po,s)}()}),"function"!=typeof window.vc_pinterest&&(window.vc_pinterest=function(){0<jQuery(".wpb_pinterest").length&&function(){var po=document.createElement("script");po.type="text/javascript",po.async=!0,po.src="//assets.pinterest.com/js/pinit.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po,s)}()}),"function"!=typeof window.vc_progress_bar&&(window.vc_progress_bar=function(){void 0!==jQuery.fn.waypoint&&jQuery(".vc_progress_bar").waypoint(function(){jQuery(this).find(".vc_single_bar").each(function(index){var bar=jQuery(this).find(".vc_bar"),val=bar.data("percentage-value");setTimeout(function(){bar.css({width:val+"%"})},200*index)})},{offset:"85%"})}),"function"!=typeof window.vc_waypoints&&(window.vc_waypoints=function(){void 0!==jQuery.fn.waypoint&&jQuery(".wpb_animate_when_almost_visible:not(.wpb_start_animation)").waypoint(function(){jQuery(this).addClass("wpb_start_animation animated")},{offset:"85%"})}),"function"!=typeof window.vc_toggleBehaviour&&(window.vc_toggleBehaviour=function($el){function event(e){e&&e.preventDefault&&e.preventDefault();var element=jQuery(this).closest(".vc_toggle"),content=element.find(".vc_toggle_content");element.hasClass("vc_toggle_active")?content.slideUp({duration:300,complete:function(){element.removeClass("vc_toggle_active")}}):content.slideDown({duration:300,complete:function(){element.addClass("vc_toggle_active")}})}$el?$el.hasClass("vc_toggle_title")?$el.unbind("click").click(event):$el.find(".vc_toggle_title").unbind("click").click(event):jQuery(".vc_toggle_title").unbind("click").on("click",event)}),"function"!=typeof window.vc_tabsBehaviour&&(window.vc_tabsBehaviour=function($tab){if(jQuery.ui){var $call=$tab||jQuery(".wpb_tabs, .wpb_tour"),ver=jQuery.ui&&jQuery.ui.version?jQuery.ui.version.split("."):"1.10",old_version=1===parseInt(ver[0])&&parseInt(ver[1])<9;$call.each(function(index){var $tabs,interval=jQuery(this).attr("data-interval"),tabs_array=[];if($tabs=jQuery(this).find(".wpb_tour_tabs_wrapper").tabs({show:function(event,ui){wpb_prepare_tab_content(event,ui)},beforeActivate:function(event,ui){1!==ui.newPanel.index()&&ui.newPanel.find(".vc_pie_chart:not(.vc_ready)")},activate:function(event,ui){wpb_prepare_tab_content(event,ui)}}),interval&&0<interval)try{$tabs.tabs("rotate",1e3*interval)}catch(e){window.console&&window.console.warn&&console.warn(e)}jQuery(this).find(".wpb_tab").each(function(){tabs_array.push(this.id)}),jQuery(this).find(".wpb_tabs_nav li").click(function(e){return e.preventDefault(),old_version?$tabs.tabs("select",jQuery("a",this).attr("href")):$tabs.tabs("option","active",jQuery(this).index()),!1}),jQuery(this).find(".wpb_prev_slide a, .wpb_next_slide a").click(function(e){if(e.preventDefault(),old_version){var index=$tabs.tabs("option","selected");jQuery(this).parent().hasClass("wpb_next_slide")?index++:index--,index<0?index=$tabs.tabs("length")-1:index>=$tabs.tabs("length")&&(index=0),$tabs.tabs("select",index)}else{index=$tabs.tabs("option","active");var length=$tabs.find(".wpb_tab").length;index=jQuery(this).parent().hasClass("wpb_next_slide")?length<=index+1?0:index+1:index-1<0?length-1:index-1,$tabs.tabs("option","active",index)}})})}}),"function"!=typeof window.vc_accordionBehaviour&&(window.vc_accordionBehaviour=function(){jQuery(".wpb_accordion").each(function(index){var $tabs,$this=jQuery(this),active_tab=($this.attr("data-interval"),!isNaN(jQuery(this).data("active-tab"))&&0<parseInt($this.data("active-tab"))&&parseInt($this.data("active-tab"))-1),collapsible=!1===active_tab||"yes"===$this.data("collapsible");$tabs=$this.find(".wpb_accordion_wrapper").accordion({header:"> div > h3",autoHeight:!1,heightStyle:"content",active:active_tab,collapsible:collapsible,navigation:!0,activate:vc_accordionActivate,change:function(event,ui){void 0!==jQuery.fn.isotope&&ui.newContent.find(".isotope").isotope("layout"),vc_carouselBehaviour(ui.newPanel)}}),!0===$this.data("vcDisableKeydown")&&($tabs.data("uiAccordion")._keydown=function(){})})}),"function"!=typeof window.vc_teaserGrid&&(window.vc_teaserGrid=function(){var layout_modes={fitrows:"fitRows",masonry:"masonry"};jQuery(".wpb_grid .teaser_grid_container:not(.wpb_carousel), .wpb_filtered_grid .teaser_grid_container:not(.wpb_carousel)").each(function(){var $container=jQuery(this),$thumbs=$container.find(".wpb_thumbnails"),layout_mode=$thumbs.attr("data-layout-mode");$thumbs.isotope({itemSelector:".isotope-item",layoutMode:void 0===layout_modes[layout_mode]?"fitRows":layout_modes[layout_mode]}),$container.find(".categories_filter a").data("isotope",$thumbs).click(function(e){e.preventDefault();var $thumbs=jQuery(this).data("isotope");jQuery(this).parent().parent().find(".active").removeClass("active"),jQuery(this).parent().addClass("active"),$thumbs.isotope({filter:jQuery(this).attr("data-filter")})}),jQuery(window).bind("load resize",function(){$thumbs.isotope("layout")})})}),"function"!=typeof window.vc_carouselBehaviour&&(window.vc_carouselBehaviour=function($parent){($parent?$parent.find(".wpb_carousel"):jQuery(".wpb_carousel")).each(function(){var $this=jQuery(this);if(!0!==$this.data("carousel_enabled")&&$this.is(":visible")){$this.data("carousel_enabled",!0);getColumnsCount(jQuery(this));jQuery(this).hasClass("columns_count_1")&&900;var carousele_li=jQuery(this).find(".wpb_thumbnails-fluid li");carousele_li.css({"margin-right":carousele_li.css("margin-left"),"margin-left":0});var fluid_ul=jQuery(this).find("ul.wpb_thumbnails-fluid");fluid_ul.width(fluid_ul.width()+300),jQuery(window).resize(function(){screen_size!=(screen_size=getSizeName())&&window.setTimeout("location.reload()",20)})}})}),"function"!=typeof window.vc_slidersBehaviour&&(window.vc_slidersBehaviour=function(){jQuery(".wpb_gallery_slides").each(function(index){var $imagesGrid,this_element=jQuery(this);if(this_element.hasClass("wpb_slider_nivo")){var sliderTimeout=1e3*this_element.attr("data-interval");0===sliderTimeout&&(sliderTimeout=9999999999),this_element.find(".nivoSlider").nivoSlider({effect:"boxRainGrow,boxRain,boxRainReverse,boxRainGrowReverse",slices:15,boxCols:8,boxRows:4,animSpeed:800,pauseTime:sliderTimeout,startSlide:0,directionNav:!0,directionNavHide:!0,controlNav:!0,keyboardNav:!1,pauseOnHover:!0,manualAdvance:!1,prevText:"Prev",nextText:"Next"})}else this_element.hasClass("wpb_image_grid")&&(jQuery.fn.imagesLoaded?$imagesGrid=this_element.find(".wpb_image_grid_ul").imagesLoaded(function(){$imagesGrid.isotope({itemSelector:".isotope-item",layoutMode:"fitRows"})}):this_element.find(".wpb_image_grid_ul").isotope({itemSelector:".isotope-item",layoutMode:"fitRows"}))})}),"function"!=typeof window.vc_prettyPhoto&&(window.vc_prettyPhoto=function(){try{jQuery&&jQuery.fn&&jQuery.fn.prettyPhoto&&jQuery('a.prettyphoto, .gallery-icon a[href*=".jpg"]').prettyPhoto({animationSpeed:"normal",hook:"data-rel",padding:15,opacity:.7,showTitle:!0,allowresize:!0,counter_separator_label:"/",hideflash:!1,deeplinking:!1,modal:!1,callback:function(){-1<location.href.indexOf("#!prettyPhoto")&&(location.hash="")},social_tools:""})}catch(err){window.console&&window.console.warn&&console.warn(err)}}),"function"!=typeof window.vc_google_fonts&&(window.vc_google_fonts=function(){return!1}),window.vcParallaxSkroll=!1,"function"!=typeof window.vc_rowBehaviour&&(window.vc_rowBehaviour=function(){var vcSkrollrOptions,callSkrollInit,$=window.jQuery;function fullWidthRow(){var $elements=$('[data-vc-full-width="true"]');$.each($elements,function(key,item){var $el=$(this);$el.addClass("vc_hidden");var $el_full=$el.next(".vc_row-full-width");if($el_full.length||($el_full=$el.parent().next(".vc_row-full-width")),$el_full.length){var padding,paddingRight,el_margin_left=parseInt($el.css("margin-left"),10),el_margin_right=parseInt($el.css("margin-right"),10),offset=0-$el_full.offset().left-el_margin_left,width=$(window).width();if("rtl"===$el.css("direction")&&(offset-=$el_full.width(),offset+=width,offset+=el_margin_left,offset+=el_margin_right),$el.css({position:"relative",left:offset,"box-sizing":"border-box",width:width}),!$el.data("vcStretchContent"))"rtl"===$el.css("direction")?((padding=$el_full.offset().left)<0&&(padding=0),(paddingRight=offset)<0&&(paddingRight=0)):((padding=-1*offset)<0&&(padding=0),(paddingRight=width-padding-$el_full.width()+el_margin_left+el_margin_right)<0&&(paddingRight=0)),$el.css({"padding-left":padding+"px","padding-right":paddingRight+"px"});$el.attr("data-vc-full-width-init","true"),$el.removeClass("vc_hidden"),$(document).trigger("vc-full-width-row-single",{el:$el,offset:offset,marginLeft:el_margin_left,marginRight:el_margin_right,elFull:$el_full,width:width})}}),$(document).trigger("vc-full-width-row",$elements)}function fullHeightRow(){var windowHeight,offsetTop,fullHeight,$element=$(".vc_row-o-full-height:first");$element.length&&(windowHeight=$(window).height(),(offsetTop=$element.offset().top)<windowHeight&&(fullHeight=100-offsetTop/(windowHeight/100),$element.css("min-height",fullHeight+"vh")));$(document).trigger("vc-full-height-row",$element)}$(window).off("resize.vcRowBehaviour").on("resize.vcRowBehaviour",fullWidthRow).on("resize.vcRowBehaviour",fullHeightRow),fullWidthRow(),fullHeightRow(),(0<window.navigator.userAgent.indexOf("MSIE ")||navigator.userAgent.match(/Trident.*rv\:11\./))&&$(".vc_row-o-full-height").each(function(){"flex"===$(this).css("display")&&$(this).wrap('<div class="vc_ie-flexbox-fixer"></div>')}),vc_initVideoBackgrounds(),callSkrollInit=!1,window.vcParallaxSkroll&&window.vcParallaxSkroll.destroy(),$(".vc_parallax-inner").remove(),$("[data-5p-top-bottom]").removeAttr("data-5p-top-bottom data-30p-top-bottom"),$("[data-vc-parallax]").each(function(){var skrollrSize,skrollrStart,$parallaxElement,parallaxImage,youtubeId;callSkrollInit=!0,"on"===$(this).data("vcParallaxOFade")&&$(this).children().attr("data-5p-top-bottom","opacity:0;").attr("data-30p-top-bottom","opacity:1;"),skrollrSize=100*$(this).data("vcParallax"),($parallaxElement=$("<div />").addClass("vc_parallax-inner").appendTo($(this))).height(skrollrSize+"%"),(youtubeId=vcExtractYoutubeId(parallaxImage=$(this).data("vcParallaxImage")))?insertYoutubeVideoAsBackground($parallaxElement,youtubeId):void 0!==parallaxImage&&$parallaxElement.css("background-image","url("+parallaxImage+")"),skrollrStart=-(skrollrSize-100),$parallaxElement.attr("data-bottom-top","top: "+skrollrStart+"%;").attr("data-top-bottom","top: 0%;")}),callSkrollInit&&window.skrollr&&(vcSkrollrOptions={forceHeight:!1,smoothScrolling:!1,mobileCheck:function(){return!1}},window.vcParallaxSkroll=skrollr.init(vcSkrollrOptions),window.vcParallaxSkroll)}),"function"!=typeof window.vc_gridBehaviour&&(window.vc_gridBehaviour=function(){jQuery.fn.vcGrid&&jQuery("[data-vc-grid]").vcGrid()}),"function"!=typeof window.getColumnsCount&&(window.getColumnsCount=function(el){for(var find=!1,i=1;!1===find;){if(el.hasClass("columns_count_"+i))return find=!0,i;i++}});var screen_size=getSizeName();function getSizeName(){var screen_w=jQuery(window).width();return 1170<screen_w?"desktop_wide":960<screen_w&&screen_w<1169?"desktop":768<screen_w&&screen_w<959?"tablet":300<screen_w&&screen_w<767?"mobile":screen_w<300?"mobile_portrait":""}function loadScript(url,$obj,callback){var script=document.createElement("script");script.type="text/javascript",script.readyState&&(script.onreadystatechange=function(){"loaded"!==script.readyState&&"complete"!==script.readyState||(script.onreadystatechange=null,callback())}),script.src=url,$obj.get(0).appendChild(script)}function vc_ttaActivation(){jQuery("[data-vc-accordion]").on("show.vc.accordion",function(e){var $=window.jQuery,ui={};ui.newPanel=$(this).data("vc.accordion").getTarget(),window.wpb_prepare_tab_content(e,ui)})}function vc_accordionActivate(event,ui){if(ui.newPanel.length&&ui.newHeader.length){var $pie_charts=ui.newPanel.find(".vc_pie_chart:not(.vc_ready)"),$round_charts=ui.newPanel.find(".vc_round-chart"),$line_charts=ui.newPanel.find(".vc_line-chart"),$carousel=ui.newPanel.find('[data-ride="vc_carousel"]');void 0!==jQuery.fn.isotope&&ui.newPanel.find(".isotope, .wpb_image_grid_ul").isotope("layout"),ui.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&ui.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var grid=jQuery(this).data("vcGrid");grid&&grid.gridBuilder&&grid.gridBuilder.setMasonry&&grid.gridBuilder.setMasonry()}),vc_carouselBehaviour(ui.newPanel),vc_plugin_flexslider(ui.newPanel),$pie_charts.length&&jQuery.fn.vcChat&&$pie_charts.vcChat(),$round_charts.length&&jQuery.fn.vcRoundChart&&$round_charts.vcRoundChart({reload:!1}),$line_charts.length&&jQuery.fn.vcLineChart&&$line_charts.vcLineChart({reload:!1}),$carousel.length&&jQuery.fn.carousel&&$carousel.carousel("resizeAction"),ui.newPanel.parents(".isotope").length&&ui.newPanel.parents(".isotope").each(function(){jQuery(this).isotope("layout")})}}function initVideoBackgrounds(){return window.console&&window.console.warn&&window.console.warn("this function is deprecated use vc_initVideoBackgrounds"),vc_initVideoBackgrounds()}function vc_initVideoBackgrounds(){jQuery("[data-vc-video-bg]").each(function(){var youtubeId,$element=jQuery(this);$element.data("vcVideoBg")?((youtubeId=vcExtractYoutubeId($element.data("vcVideoBg")))&&($element.find(".vc_video-bg").remove(),insertYoutubeVideoAsBackground($element,youtubeId)),jQuery(window).on("grid:items:added",function(event,$grid){$element.has($grid).length&&vcResizeVideoBackground($element)})):$element.find(".vc_video-bg").remove()})}function insertYoutubeVideoAsBackground($element,youtubeId,counter){if("undefined"==typeof YT||void 0===YT.Player)return 100<(counter=void 0===counter?0:counter)?void console.warn("Too many attempts to load YouTube api"):void setTimeout(function(){insertYoutubeVideoAsBackground($element,youtubeId,counter++)},100);var $container=$element.prepend('<div class="vc_video-bg vc_hidden-xs"><div class="inner"></div></div>').find(".inner");new YT.Player($container[0],{width:"100%",height:"100%",videoId:youtubeId,playerVars:{playlist:youtubeId,iv_load_policy:3,enablejsapi:1,disablekb:1,autoplay:1,controls:0,showinfo:0,rel:0,loop:1,wmode:"transparent"},events:{onReady:function(event){event.target.mute().setLoop(!0)}}}),vcResizeVideoBackground($element),jQuery(window).bind("resize",function(){vcResizeVideoBackground($element)})}function vcResizeVideoBackground($element){var iframeW,iframeH,marginLeft,marginTop,containerW=$element.innerWidth(),containerH=$element.innerHeight();containerW/containerH<16/9?(iframeW=containerH*(16/9),iframeH=containerH,marginLeft=-Math.round((iframeW-containerW)/2)+"px",marginTop=-Math.round((iframeH-containerH)/2)+"px"):(iframeH=(iframeW=containerW)*(9/16),marginTop=-Math.round((iframeH-containerH)/2)+"px",marginLeft=-Math.round((iframeW-containerW)/2)+"px"),iframeW+="px",iframeH+="px",$element.find(".vc_video-bg iframe").css({maxWidth:"1000%",marginLeft:marginLeft,marginTop:marginTop,width:iframeW,height:iframeH})}function vcExtractYoutubeId(url){if(void 0===url)return!1;var id=url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);return null!==id&&id[1]}if("function"!=typeof window.wpb_prepare_tab_content&&(window.wpb_prepare_tab_content=function(event,ui){var $ui_panel,$google_maps,panel=ui.panel||ui.newPanel,$pie_charts=panel.find(".vc_pie_chart:not(.vc_ready)"),$round_charts=panel.find(".vc_round-chart"),$line_charts=panel.find(".vc_line-chart"),$carousel=panel.find('[data-ride="vc_carousel"]');if(vc_carouselBehaviour(),vc_plugin_flexslider(panel),ui.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&ui.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var grid=jQuery(this).data("vcGrid");grid&&grid.gridBuilder&&grid.gridBuilder.setMasonry&&grid.gridBuilder.setMasonry()}),panel.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&panel.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var grid=jQuery(this).data("vcGrid");grid&&grid.gridBuilder&&grid.gridBuilder.setMasonry&&grid.gridBuilder.setMasonry()}),$pie_charts.length&&jQuery.fn.vcChat&&$pie_charts.vcChat(),$round_charts.length&&jQuery.fn.vcRoundChart&&$round_charts.vcRoundChart({reload:!1}),$line_charts.length&&jQuery.fn.vcLineChart&&$line_charts.vcLineChart({reload:!1}),$carousel.length&&jQuery.fn.carousel&&$carousel.carousel("resizeAction"),$ui_panel=panel.find(".isotope, .wpb_image_grid_ul"),$google_maps=panel.find(".wpb_gmaps_widget"),0<$ui_panel.length&&$ui_panel.isotope("layout"),$google_maps.length&&!$google_maps.is(".map_ready")){var $frame=$google_maps.find("iframe");$frame.attr("src",$frame.attr("src")),$google_maps.addClass("map_ready")}panel.parents(".isotope").length&&panel.parents(".isotope").each(function(){jQuery(this).isotope("layout")})}),"function"!=typeof window.vc_googleMapsPointer)function vc_googleMapsPointer(){var $=window.jQuery,$wpbGmapsWidget=$(".wpb_gmaps_widget");$wpbGmapsWidget.click(function(){$("iframe",this).css("pointer-events","auto")}),$wpbGmapsWidget.mouseleave(function(){$("iframe",this).css("pointer-events","none")}),$(".wpb_gmaps_widget iframe").css("pointer-events","none")}function vc_setHoverBoxPerspective(hoverBox){hoverBox.each(function(){var $this=jQuery(this),perspective=4*$this.width()+"px";$this.css("perspective",perspective)})}function vc_setHoverBoxHeight(hoverBox){hoverBox.each(function(){var $this=jQuery(this),hoverBoxInner=$this.find(".vc-hoverbox-inner");hoverBoxInner.css("min-height",0);var frontHeight=$this.find(".vc-hoverbox-front-inner").outerHeight(),backHeight=$this.find(".vc-hoverbox-back-inner").outerHeight(),hoverBoxHeight=backHeight<frontHeight?frontHeight:backHeight;hoverBoxHeight<250&&(hoverBoxHeight=250),hoverBoxInner.css("min-height",hoverBoxHeight+"px")})}function vc_prepareHoverBox(){var hoverBox=jQuery(".vc-hoverbox");vc_setHoverBoxHeight(hoverBox),vc_setHoverBoxPerspective(hoverBox)}jQuery(document).ready(vc_prepareHoverBox),jQuery(window).resize(vc_prepareHoverBox),jQuery(document).ready(function($){window.vc_js()});
;window.$=jQuery,$.fn.pricingLabel=function(){if($(this).addClass("initialized"),0!==$(this).closest(".de-column").next().find(".de-sc-pricing-table").length){var i=$(this).closest(".de-column").next().find(".de-sc-pricing-table").find("li"),n=$(i[0]).outerHeight()+$(i[1]).outerHeight()+40-$(this).find("li").first().outerHeight()+10;$(this).css("margin-top",n)}},function(i){i(document).ready(function(){i(".de-sc-pricing-label:not(.initialized)").each(function(n,e){i(e).pricingLabel()})}),i(document).on("shortcode_pricing-label_ready",function(){i(".de-sc-pricing-label:not(.initialized)").each(function(n,e){i(e).pricingLabel()})})}(window.jQuery);
;