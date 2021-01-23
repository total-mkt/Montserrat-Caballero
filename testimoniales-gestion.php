<?php require_once('includes/conn.php');
include( 'cpanel/includes/function-string.php');
mysql_select_db($database_conn, $conn);
$seccion = 'testimoniales gestion';
?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Testimonios de Gestión Social &#8211; <?php echo $title;?></title>
<base href="<?php echo $url;?>">
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<meta name="author" content="<?php echo $title;?>">
<?php include('includes/favicons.php')?>
<?php include('includes/metatags.php')?>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required {
    visibility: visible;
}
</style>
<link rel='stylesheet' id='dahz-framework-typo-font-css'  href='//fonts.googleapis.com/css?family=Raleway%3A700%7CIBM+Plex+Sans%3A400&#038;ver=4.9.16#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='css-0-css'  href='assets/merged/5fa88461b5f245519b1b9c1725db0597-1558593568.css' type='text/css' media='all' />
<link rel='stylesheet' id='interiores'  href='css/interiores.css' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var give_global_vars = {"ajaxurl":"","checkout_nonce":"33fa8de563","currency":"USD","currency_sign":"$","currency_pos":"before","thousands_separator":",","decimal_separator":".","no_gateway":"Please select a payment method.","bad_minimum":"The minimum custom donation amount for this form is","bad_maximum":"The maximum custom donation amount for this form is","general_loading":"Loading...","purchase_loading":"Please Wait...","number_decimals":"2","give_version":"2.2.6","magnific_options":{"main_class":"give-modal","close_on_bg_click":true},"form_translation":{"payment-mode":"Please select payment mode.","give_first":"Please enter your first name.","give_email":"Please enter a valid email address.","give_user_login":"Invalid username. Only lowercase letters (a-z) and numbers are allowed.","give_user_pass":"Enter a password.","give_user_pass_confirm":"Enter the password confirmation.","give_agree_to_terms":"You must agree to the terms and conditions."},"confirm_email_sent_message":"Please check your email and click on the link to access your complete donation history.","ajax_vars":{"ajaxurl":"","ajaxNonce":"60d9b1ec88","loading":"Loading","select_option":"Please select an option","default_gateway":"manual","permalinks":"1","number_decimals":2},"cookie_hash":"12e3924517a4e1629f28cab19496576c","delete_session_nonce_cookie":"0"};
var giveApiSettings = {"root":"","rest_base":"give-api\/v2"};
/* ]]> */
</script> 
<script type='text/javascript' src='assets/merged/71d897434f306f1d9b507511bdfd0813-1567665585.js'></script>
<style>
.woocommerce-product-gallery{ opacity: 1 !important; }
</style>
<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1536115882976{background-color: #eaeaea !important;}.vc_custom_1536155609725{background-color: #0d4275 !important;}.vc_custom_1536208430482{background-color: #6f1339 !important;}.vc_custom_1536133741421{background-color: #c4c4c4 !important;}.vc_custom_1536133902984{margin-bottom: 0px !important;}.vc_custom_1536133921800{margin-bottom: 0px !important;}.vc_custom_1536133932279{margin-bottom: 0px !important;}.vc_custom_1536133945671{margin-bottom: 0px !important;}.vc_custom_1536133956351{margin-bottom: 0px !important;}.vc_custom_1536133967335{margin-bottom: 0px !important;}
</style>
<noscript>
<style type="text/css"> 
.wpb_animate_when_almost_visible { opacity: 1; }
</style>
</noscript>
<?php include('includes/en-header.php')?>
</head>

<body class="page-template-default page page-id-421 woocommerce-no-js tribe-no-js de-is-lazyload-image enable-back-to-top fullwidth de-fullwidth baklon ds-single wpb-js-composer js-comp-ver-5.5.2 vc_responsive">
<?php include('includes/en-body.php')?>
<div class="uk-offcanvas-content">
  <div class="de-page-container ds-single-page de-content-fullwidth" id="page">
    <div class="page-wrapper">
      <div id="de-site-header" class="de-site-header ds-single-page ds-site-header">
        <?php include('includes/header-interior.php')?>
      </div>
      
	  	<?php if($_REQUEST['pagina'] != ''){?>	
      <div class="de-page-title uk-section" data-layout="trina" data-render-location="page" style="background-color:#5d1030; background-image:url(images/cabeceras/testimonios-gestion-social-diputada.jpg);background-position:left top;background-repeat:no-repeat;background-size:cover;background-attachment:scroll;">
        <div class="de-page-title__container uk-container">
          <h1 class=" uk-heading-primary" style="font-size: 49px; font-weight: 400">Testimoniales Gestión Social</h1>
          <ul class="uk-breadcrumb uk-text-small">
            <li> <a class="uk-link" href="./" title="<?php $title;?>"> Inicio </a> </li>
            <li> <span class="bread-current"> Videos </span> </li>
          </ul>
        </div>
      </div>
	
	<?php } if($_REQUEST['pagina'] == ''){?>	
	<div data-dahz-id="1536115680907-c9928351-05b8" class="de-section uk-section uk-section-large uk-background-cover uk-background-norepeat uk-background-top-left parallax" style="background-image: url(images/cabeceras/testimonios-gestion-social.jpg); background-color: #eaeaea !important;" data-uk-parallax="bgx:0,0;bgy:-100,110;media: (min-width: 1200px);">
                      <div class="uk-width-1-1 uk-margin-large">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536115680957-aa30014a-729a">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 300;" data-dahz-id="1536115680988-9ea91e69-d480">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper">
                                        <p><span style="color: #811443;">DIPUTADA MONTSERRAT CABALLERO</span></p>
                                      </div>
                                    </div>
                                    <style>
			@media only screen and ( max-width: 414px ) {
				h3[data-dahz-shortcode-key="1536117462427-06277516-837a"] {
					font-size: 32px!important;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {
				h3[data-dahz-shortcode-key="1536117462427-06277516-837a"] {
					font-size: inherit;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {
				h3[data-dahz-shortcode-key="1536117462427-06277516-837a"] {
					font-size: inherit;
					line-height: inherit;
				}
			}
		</style>
                                    <h3 style="font-size: 48px; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536117462427-06277516-837a"> Testimoniales<br>
										Gestión Social</h3>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                      </div>
                                    </div>
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin" data-dahz-shortcode-key="1536115973739-e3a20352-ca6e" style=""> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                      <div> <img width="246" height="71" class="   attachment-full ds-lazy-image" alt="signature-dark-min" data-uk-img="" data-src="uploads/2018/09/signature-dark-min.png" /> </div>
                                      </a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536115681118-342484c9-596c">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>	
		<?php } ?>	
	
		
      <div class="main de-content__wrapper uk-section ds-single-page ds-site-content" id="de-content-wrapper" data-uk-height-viewport="expand:true;" style="box-sizing: border-box; transform: none;">
        <div class="uk-container de-main-container" id="de-archive-content" style="transform: none;">
          <div class="uk-grid-large de-main-grid uk-grid uk-grid-stack" data-uk-grid="" style="transform: none;">
            <div class="uk-width-expand@m de-main-content uk-first-column" style="transform: none;">
              <div class="de-content uk-child-width-1-1@s uk-grid uk-grid-stack" data-uk-grid="" style="transform: none;">
                <?php
                $consulta_noticias = "SELECT * FROM testimonios WHERE categoria = 'Gestion' AND mostrar = 'Si'";
                $rs_noticias = mysql_query( $consulta_noticias, $conn );
                $num_total_registros = mysql_num_rows( $rs_noticias );

                //Si hay registros
                if ( $num_total_registros > 0 ) {
                  //Limito la busqueda
                  $TAMANO_PAGINA = 10;
                  $pagina = false;

                  //examino la pagina a mostrar y el inicio del registro a mostrar
                  if ( isset( $_GET[ "pagina" ] ) )
                    $pagina = $_GET[ "pagina" ];

                  if ( !$pagina ) {
                    $inicio = 0;
                    $pagina = 1;
                  } else {
                    $inicio = ( $pagina - 1 ) * $TAMANO_PAGINA;
                  }
                  //calculo el total de paginas
                  $total_paginas = ceil( $num_total_registros / $TAMANO_PAGINA );


                  $consulta = "SELECT * FROM testimonios WHERE categoria = 'Gestion' AND mostrar = 'Si' ORDER BY fecha DESC LIMIT " . $inicio . "," . $TAMANO_PAGINA;
                  $rs = mysql_query( $consulta, $conn );
                  while ( $row = mysql_fetch_array( $rs ) ) {


                    ?>
                <!-- post -->
                <div id="post-<?php echo $row['id'];?>" class="post-0 page type-page status-draft hentry uk-first-column" style="transform: none;">
                  <div class="de-page-builder" style="transform: none;">
                    <div id="tribe-events" class="" data-live_ajax="1" data-datepicker_format="0" data-category="" data-featured="" style="transform: none;">
                      <div id="tribe-events-content" class="tribe-events-single" style="transform: none;">
                        <div data-uk-grid="" data-uk-height-match="target: > div;row:false;" class="uk-grid uk-grid-stack">
                          <div class="uk-width-expand@m uk-first-column">
                            <div class="tribe-events-event-image">
                              <iframe width="1200" height="720" src="https://www.youtube.com/embed/<?php echo $row['permalink'];?>" allowfullscreen></iframe>
                            </div>
                          </div>
                        </div>
                        <div id="post-653" class="post-653 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-politic cat_politic uk-grid uk-grid-stack" data-uk-grid="" style="transform: none;">
                          <div class="uk-width-expand@m de-single-event__content uk-first-column" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 404px;">
                              <div class="uk-flex uk-flex-top uk-margin-remove-bottom uk-grid uk-grid-stack" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                  <h3 class="tribe-events-single-event-title uk-h2 uk-margin-small" style="font-size: 25px;"><?php echo $row['titulo'];?></h3>
                                  <h4 class="uk-margin-remove-top uk-h5"><span class="tribe-event-date-start" style="font-size: 18px;"><?php echo $row['mes'];?> <?php echo $row['dia'];?>, <?php echo $row['anio'];?></span></h4>
                                </div>
                              </div>
                              <div class="tribe-events-single-event-description tribe-events-content uk-margin-medium">
                                <p><?php echo $row['contenido'];?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        </hr>
                      </div>
                      <!-- #tribe-events-content -->
                      <div class="tribe-events-after-html"></div>
                    </div>
                  </div>
                </div>
                <!-- //post -->
                <?php
                }
                ?>
              </div>
			  <?php
	$urlnotas = 'testimonios-salud/';	
				
	echo '<ul class="de-pagination uk-pagination uk-margin-large uk-flex-center uk-margin-remove-bottom" data-pagination-type="number">';


	if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<li><a class="c-button b-40 bg-blue-2 hv-blue-2-o fl" href="'.$urlnotas.'?pagina='.($pagina-1).'"><span data-uk-icon="chevron-left" class="uk-icon"></span></a></li>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i)
				//si muestro el indice de la pagina actual, no coloco enlace
				echo '<li class="active"><a href="javascript:void();" aria-current="page" class="active">'.$pagina.'</a></li>';
			else
				//si el indice no corresponde con la pagina mostrada actualmente,
				//coloco el enlace para ir a esa pagina
				echo '<li><a href="'.$urlnotas.'?pagina='.$i.'"">'.$i.'</a></li>';
		}
		if ($pagina != $total_paginas)
			echo ' <li><a class="c-button b-40 bg-blue-2 hv-blue-2-o fr" href="'.$urlnotas.'?pagina='.($pagina+1).'"> <span data-uk-icon="chevron-right" class="uk-icon"></span></a></li>';
	}
}

echo '</ul> ';


?> 
			</div>
          </div>
        </div>
      </div>
	  <?php include('includes/cta-youtube.php')?>
      <!-- .de-site__wrapper -->
      <?php include('includes/footer-interior.php')?>
      <!-- #colophon --> 
    </div>
  </div>
  <!-- #page --> 
</div>
<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>

<?php include('includes/search.php')?>

<?php include('includes/menu-mobile.php')?>

<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done"}};var tribe_system_info = {"sysinfo_optin_nonce":"3f514fc80d","clipboard_btn_text":"Copy to clipboard","clipboard_copied_text":"System info copied","clipboard_fail_text":"Press \"Cmd + C\" to copy"};/* ]]> */ </script> <script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
<link rel='stylesheet' id='css-3-css'  href='assets/merged/8be21da1467690968baba61ff4c7e9c1-1536303594.css' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};var wc_add_to_cart_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/dahz.daffyhazan.com\/baklon\/cart\/","is_cart":"","cart_redirect_after_add":"no"};var woocommerce_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%"};var wc_cart_fragments_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d0bf745d85d2fccca469f21b5db485e3","fragment_name":"wc_fragments_d0bf745d85d2fccca469f21b5db485e3"};var dahzFramework = {"ajaxURL":"","unavailableModules":["header-wishlist"],"language":{"emptyMessage":"<h4>OH NO! No result were found<\/h4>"},"megamenu":{"isOverride":true,"pageID":421}};
/* ]]> */
</script> 
<script type='text/javascript' src='assets/merged/f6bc1a545046dd69f5fe1f54bd1275f6-1544671650.js'></script>
<?php include('includes/en-footer.php')?>
</body>
</html>
