<?php 
include_once( 'mysql2i/mysql2i.class.php' );
require_once('includes/conn.php');
include( 'cpanel/includes/function-string.php' );
mysql_select_db($database_conn, $conn);

// Editar
$permalink = $_REQUEST['permalink'];

$query_edit = sprintf("SELECT * FROM blog WHERE permalink = %s",
GetSQLValueString($permalink, "text"));
$edit = mysql_query($query_edit, $conn) or die(mysql_error());
$editando = mysql_fetch_assoc($edit);
?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php echo $editando['titulo'];?> &#8211; <?php echo $title;?></title>
<base href="<?php echo $url;?>">
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<meta name="author" content="<?php echo $title;?>">
<?php include('includes/favicons.php')?>
<!-- meta tags -->
<meta name="description" content="<?php echo $editando['excerp'];?>"/>
<meta name="robots" content="INDEX/FOLLOW"/>
<link rel="canonical" href="<?php echo $url;?>noticias/<?php echo $editando['permalink'];?>" />
<meta property="og:locale" content="es_MX" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $editando['titulo'];?> - <?php echo $title;?>" />
<meta property="og:description" content="<?php echo $editando['excerp'];?>" />
<meta property="og:url" content="<?php echo $url;?>noticias/<?php echo $editando['permalink'];?>" />
<meta property="og:site_name" content="<?php echo $editando['titulo'];?> - <?php echo $title;?>" />
<meta property="og:image" content="<?php echo $url;?><?php echo $editando['imagen'];?>" />
<meta property="og:image:width" content="1080" />
<meta property="og:image:height" content="1080" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $editando['excerp'];?>" />
<meta name="twitter:title" content="<?php echo $editando['titulo'];?> - <?php echo $title;?>" />
<meta name="twitter:site" content="@MontseMorenaBC" />
<meta name="twitter:image" content="<?php echo $url;?>noticias/<?php echo $editando['permalink'];?>" />
<meta name="twitter:creator" content="@MontseMorenaBC" />

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
      <div class="de-page-title uk-section" data-layout="trina" data-render-location="page" style="background-color:#5d1030; background-image:url(images/gestion.jpg);background-position:left top;background-repeat:no-repeat;background-size:cover;background-attachment:scroll;">
        <div class="de-page-title__container uk-container">
          <h1 class=" uk-heading-primary" style="font-size: 49px;"><?php echo $editando['titulo'];?></h1>
          <ul class="uk-breadcrumb uk-text-small">
            <li> <a class="uk-link" href="./" title="<?php $title;?>"> Inicio </a> </li>
            <li> <a class="uk-link" href="./noticias/" title="Noticias>"> Noticias </a> </li>
            <li> <span class="bread-current"> <?php echo $editando['titulo'];?> </span> </li>
          </ul>
        </div>
      </div>
      <div class="main de-content__wrapper uk-section ds-single-post ds-site-content" id="de-content-wrapper" data-uk-height-viewport="expand:true;" style="box-sizing: border-box; transform: none;">
        <div class="uk-container de-main-container" id="de-archive-content" style="transform: none;">
          <div class="uk-grid-large de-main-grid uk-grid" data-uk-grid="" style="transform: none;">
            <div class="uk-width-expand@m de-main-content uk-first-column" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="de-content uk-child-width-1-1@s uk-grid uk-grid-stack" data-uk-grid="">
                  <article id="post-46" class="uk-width-1-1@m uk-flex uk-flex-center post-46 post type-post status-publish format-standard has-post-thumbnail hentry category-social uk-first-column">
                    <div class="uk-width-1-1">
                      <div class="entry-header">
                        <div class="entry-image de-single__entry-image uk-flex uk-flex-center uk-margin-medium-bottom uk-flex-middle">
							<?php if($editando['video'] == '') {?>
							<img width="1900" height="1268" class="attachment-full size-full wp-post-image ds-lazy-image lazy-loaded" alt="<?php echo $editando['titulo'];?>" sizes="(max-width: 1900px) 100vw, 1900px" data-uk-img="" data-src="<?php echo $editando['imagen'];?>" data-srcset="<?php echo $editando['imagen'];?>" src="<?php echo $editando['imagen'];?>" srcset="<?php echo $editando['imagen'];?>">
							<?php } if($editando['video'] != '') {?>
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $editando['video'];?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  <?php }?>
						  </div>
                        <ul class="uk-text-small uk-subnav uk-subnav-divider uk-margin de-post-meta uk-margin-remove-top " data-uk-margin="">
                          <li class="uk-width-auto uk-first-column"><?php echo $editando['mes'];?> <?php echo $editando['dia'];?>, <?php echo $editando['anio'];?> </li>
                          <li class="uk-width-auto">
                            <div class="uk-flex uk-width-1 de-post-meta__categories"><?php echo $editando['titulo'];?></div>
                          </li>
                        </ul>
                        <h2 class="entry-title de-archive__entry-title uk-h1 uk-margin-medium-bottom uk-margin-remove-top  "><?php echo $editando['titulo'];?></h2>
                      </div>
                      <div class="entry-content de-single__entry-content ">
                       <?php echo $editando['contenido'];?>
                      </div>
                      <!-- .entry-content --> 
                    </div>
                  </article>
                  <!-- #post-## -->
                  
                  
					
                  
                </div>
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                  <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                    <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 993px; height: 4205px;"></div>
                  </div>
                  <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
	  		<?php include('includes/noticias-relacionadas.php')?>	
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
