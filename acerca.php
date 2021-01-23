<?php 
include_once('mysql2i/mysql2i.class.php');
require_once('includes/conn.php');
include( 'cpanel/includes/function-string.php');
mysql_select_db($database_conn, $conn);
$seccion = 'acerca';
?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Acerca &#8211; <?php echo $title;?></title>
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
      

	  <div class="de-main-container" id="de-archive-content">
        <div class="uk-grid-large de-main-grid uk-grid uk-grid-stack" data-uk-grid="">
          <div class="uk-width-expand@m de-main-content uk-first-column">
            <div class="de-content uk-child-width-1-1@s uk-grid uk-grid-stack" data-uk-grid="">
              <div id="post-432" class="post-432 page type-page status-publish hentry uk-first-column">
                <div class="de-page-builder">
                  <div data-dahz-id="1536041187391-5bbe8869-aed8" class="de-section uk-section uk-padding-remove-vertical uk-background-cover uk-background-norepeat uk-background-top-right" style="background-image: url(uploads/2018/09/home-bg-19-min.jpg); background-color: #821543 !important;">
                    <div class="uk-width-1-1 uk-margin-remove">
                      <div class="de-row uk-container uk-container-large" style="z-index: 0 !important;" data-dahz-id="1536041189685-b4c322b0-69ce">
                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-large uk-flex-middle">
                          <div class="de-column uk-position-relative uk-width-1-2@m uk-first-column" style="z-index: 1 !important;" data-dahz-id="1536041189689-5a6d46fa-e9a7">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <div style="height:80px;" class="de-hidden@m de-hidden@s"> </div>
                                  <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--cascading_image uk-margin-remove" data-dahz-shortcode-key="1536041769361-e2b10d94-04c7" style="">
                                    <div id="1536041769361-e2b10d94-04c7" class="de-sc-cascading-image de-sc-cascading-image--left initialized" style="height: 720px;">
                                      <div id="cscd-item-1536041769361-e2b10d94-04c7--1" class="de-sc-cascading-image__item uk-scrollspy-inview uk-animation-slide-left-medium" data-uk-scrollspy="cls:uk-animation-slide-left-medium;delay:500;" style="">
                                        <div class="de-sc-cascading-image__inner" style="transform: translateX(0px) translateY(0px) scale(1, 1) translateZ(0px);">
                                          <div class="de-sc-cascading-image__img-wrap"> <img width="1017" height="946" src="uploads/2018/09/cascade-02-min.png" class="" alt="cascade-02-min" data-is-ignore-lazyload="1" srcset="uploads/2018/09/cascade-02-min.png 1017w, uploads/2018/09/cascade-02-min-1000x930.png 1000w, uploads/2018/09/cascade-02-min-300x279.png 300w, uploads/2018/09/cascade-02-min-768x714.png 768w" sizes="(max-width: 1017px) 100vw, 1017px"> </div>
                                        </div>
                                      </div>
                                      <div id="cscd-item-1536041769361-e2b10d94-04c7--2" class="de-sc-cascading-image__item uk-scrollspy-inview uk-animation-slide-right-medium" data-uk-scrollspy="cls:uk-animation-slide-right-medium;delay:600;" style="">
                                        <div class="de-sc-cascading-image__inner" style="transform: translateX(0px) translateY(0px) scale(1, 1) translateZ(0px);">
                                          <div class="de-sc-cascading-image__img-wrap"> <img width="1017" height="946" src="uploads/2018/09/cascade-01-min.png" class="" alt="cascade-01-min" data-is-ignore-lazyload="1" srcset="uploads/2018/09/cascade-01-min.png 1017w, uploads/2018/09/cascade-01-min-1000x930.png 1000w, uploads/2018/09/cascade-01-min-300x279.png 300w, uploads/2018/09/cascade-01-min-768x714.png 768w" sizes="(max-width: 1017px) 100vw, 1017px"> </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536041223192-c2dcc293-1573">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-large">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper uk-scrollspy-inview uk-animation-slide-right-medium" data-uk-scrollspy="cls:uk-animation-slide-right-medium; delay:400;" style="">
                                      <p><span style="color: #ffffff;">ACERCA DE MI</span></p>
                                    </div>
                                  </div>
                                  <h3 data-uk-scrollspy="cls:uk-animation-slide-right-medium; delay:500;" style="font-size: 28px; color: rgb(255, 255, 255); line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading uk-scrollspy-inview uk-animation-slide-right-medium" data-dahz-shortcode-key="1536042475309-970c1149-2285"><?php echo $title;?> </h3>
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper uk-scrollspy-inview uk-animation-slide-right-medium" data-uk-scrollspy="cls:uk-animation-slide-right-medium; delay:600;" style="">
                                      <p><span style="color: #ffffff;">Desde mi toma de protesta como diputada, he ejercido como presidenta de la Jucopo (Junta de Coordinación Política) de la XXIII Legislatura, siendo la única mujer en encabezarla por tres periodos consecutivos, trabajando siempre bajo los valores éticos y morales de la Cuarta Transformación.</span></p>
                                    </div>
                                  </div>
                                  <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin uk-scrollspy-inview uk-animation-slide-bottom-medium" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 800;" data-dahz-shortcode-key="1536050066674-f15fd69a-09a1" style=""> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                    <div> <img width="246" height="71" class="attachment-full ds-lazy-image lazy-loaded" alt="signature-min" data-uk-img="" data-src="images/firma-montserrat.png" src="images/firma-montserrat.png"> </div>
                                    </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-dahz-id="1536042468255-2e1a9e28-fcc1" class="de-section uk-section uk-section-large uk-background-cover uk-background-norepeat uk-background-top-left parallax" style="background-image: url(&quot;uploads/2018/09/home-bg-20.jpg?r=1); background-repeat: no-repeat; background-size: 1983px 1417px; background-position: calc(0px) calc(-220px);" data-uk-parallax="bgx:0,0;bgy:-110,110;">
                    <div class="uk-width-1-1 uk-margin">
                      <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536042470201-82292409-012a">
                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                          <div class="de-column uk-position-relative uk-width-1-4@m uk-first-column uk-scrollspy-inview uk-animation-slide-left-medium" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 300;" data-dahz-id="1536042470206-340168c4-bb0c">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                              </div>
                            </div>
                          </div>
                          <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536286812211-b3ff292b-6e3f">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper">
                                      <p style="text-align: center;"><span style="color: #821543;"><?php echo $title;?></span></p>
                                    </div>
                                  </div>
                                  <style>
			@media only screen and ( max-width: 414px ) {
				h3[data-dahz-shortcode-key="1536047844071-6b38f6f8-1123"] {
					font-size: 32px!important;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {
				h3[data-dahz-shortcode-key="1536047844071-6b38f6f8-1123"] {
					font-size: inherit;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {
				h3[data-dahz-shortcode-key="1536047844071-6b38f6f8-1123"] {
					font-size: inherit;
					line-height: inherit;
				}
			}
		</style>
                                  <h3 style="font-size: 48px; color: #000000; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536047844071-6b38f6f8-1123"> Fundadora de<br>
MORENA en B.C.</h3>
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper">
                                      <p style="text-align: center;">Nací en Oaxaca, Oaxaca, llegué a Tijuana a los dos años de edad, acompañada de mi madre y hermanos, soy orgullosa Tijuanense por adopción. Amo esta tierra que me ha dado todo.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important;" data-dahz-id="1536286812222-098c4505-f107">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="uk-width-1-1 uk-margin">
                      <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536286642458-f79b9c23-7597">
                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-stack">
                          <div class="de-column uk-position-relative uk-width-1-1@m uk-first-column" style="z-index: 0 !important;" data-dahz-id="1536286642580-9344806c-ceac">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <div class="de-sc-slider uk-margin uk-margin" data-dahz-shortcode-key="1536052526437-daff4193-c794" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:600;" style="visibility: hidden;">
                                    <div data-uk-slider="autoplay: true;autoplay-interval: 1500;" class="uk-visible-toggle uk-slider">
                                      <div class="uk-position-relative"> 
                                        <!-- RENDER SLIDER ITEM -->
                                        <div class="uk-slider-container">
                                          <ul data-uk-grid="" class="uk-grid uk-slider-items" style="transform: translateX(-426px);">
                                            
                                            <li class="uk-width-5-6 uk-width-1-3@l uk-width-5-6@s uk-width-1-2@m uk-active">
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin-medium" data-dahz-shortcode-key="1536046380361-1cd7d34a-86ea" style=""> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                                <div> <img width="780" height="736" class="attachment-full ds-lazy-image lazy-loaded" alt="<?php echo $title;?> Presidenta Jucopo" sizes="(max-width: 780px) 100vw, 780px" data-uk-img="images/presidenta-jucopo.jpg?r=2" data-src="uimages/presidenta-jucopo.jpg?r=2" data-srcset="images/presidenta-jucopo.jpg?r=2" srcset="images/presidenta-jucopo.jpg?r=2"> </div>
                                                </a> </div>
                                              <h4 style="color: #000000; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1534326463658-6ea49151-d5d8"> Presidenta JUCOPO </h4>
                                              <div style="" class="uk-margin">
                                                <div class="de-textblock-wrapper">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                                </div>
                                              </div>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin-remove uk-inline" data-dahz-shortcode-key="1536043029677-5b1d2182-4005" style=""> <a href="#" class="uk-button uk-button-text" target="_self"> <span class="uk-flex uk-flex-middle"> <span>Ver más </span> </span> </a> </div>
                                            </li>
                                            <li class="uk-width-5-6 uk-width-1-3@l uk-width-5-6@s uk-width-1-2@m uk-active">
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin-medium" data-dahz-shortcode-key="1536042853400-041a1d40-235b" style=""> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                                <div> <img width="780" height="736" class="attachment-full ds-lazy-image lazy-loaded" alt="<?php echo $title;?> Presidenta Comisión de Salud" sizes="(max-width: 780px) 100vw, 780px" data-uk-img="images/presidenta-comision-salud.jpg?r=1" data-src="uimages/presidenta-comision-salud.jpg?r=1" data-srcset="images/presidenta-comision-salud.jpg?r=1" srcset="images/presidenta-comision-salud.jpg?r=1"> </div>
                                                </a> </div>
                                              <h4 style="color: #000000; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536045629135-550454e4-d982"> Presidenta Comisión de Salud </h4>
                                              <div style="" class="uk-margin">
                                                <div class="de-textblock-wrapper">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                                </div>
                                              </div>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin-remove uk-inline" data-dahz-shortcode-key="1536045734444-8aa8ff27-024b" style=""> <a href="#" class="uk-button uk-button-text" target="_self"> <span class="uk-flex uk-flex-middle"> <span>Ver más </span> </span> </a> </div>
                                            </li>
                                            <li class="uk-width-5-6 uk-width-1-3@l uk-width-5-6@s uk-width-1-2@m uk-active">
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin-medium" data-dahz-shortcode-key="1536052693623-3e2051b1-a00b" style=""> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                                <div> <img width="780" height="736" class="attachment-full ds-lazy-image lazy-loaded" alt="<?php echo $title;?> Diputada Distrito XIII" sizes="(max-width: 780px) 100vw, 780px" data-uk-img="images/diputada-distrito-13.jpg?r=2" data-src="uimages/diputada-distrito-13.jpg?r=2" data-srcset="images/diputada-distrito-13.jpg?r=2" srcset="images/diputada-distrito-13.jpg?r=2"> </div>
                                                </a> </div>
                                              <h4 style="color: #000000; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536052693698-bd9ca80f-2bbd"> Diputada Distrito XIII</h4>
                                              <div style="" class="uk-margin">
                                                <div class="de-textblock-wrapper">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                                </div>
                                              </div>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin-remove uk-inline" data-dahz-shortcode-key="1536052693854-0e1201bc-5273" style=""> <a href="#" class="uk-button uk-button-text" target="_self"> <span class="uk-flex uk-flex-middle"> <span>Ver más</span> </span> </a> </div>
                                            </li>
                                          </ul>
                                        </div>
                                        <!-- RENDER ARROW --> 
                                      </div>
                                      <!-- # RENDER DOTS -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-1 uk-margin-remove">
                    <div class="de-row uk-container uk-container-expand uk-padding-remove-horizontal" style="z-index: 0 !important;" data-dahz-id="1536046727677-175e7fea-53cc">
                      <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-collapse uk-grid-match uk-c-flex-top">
                        <div class="de-column uk-position-relative uk-width-1-4@m uk-first-column" style="z-index: 0 !important;" data-dahz-id="1536046735717-c03cbbfc-a2c6">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove" style="background-color: #6b1137 !important;">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div class="uk-width-1-1 uk-margin-remove">
                                  <div class="de-row de-row--inner uk-container" style="z-index: 0 !important;" data-dahz-id="1536046806285-0a171b54-07d6">
                                    <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-stack">
                                      <div class="de-column de-column--inner uk-position-relative uk-width-1-1@m uk-first-column" style="z-index: 0 !important; visibility: hidden;" data-uk-scrollspy="cls: uk-animation-slide-top-medium; delay: 300;" data-dahz-id="1536046806287-3f46a4ab-e27f">
                                        <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                          <div class="uk-width-1-1 uk-padding-large">
                                            <div></div>
                                            <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                              <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-left">
                                                <div class="vc_icon_element-inner vc_icon_element-color-white vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey"> <span class="vc_icon_element-icon vote-reward-badges-de-elections-5"></span></div>
                                              </div>
                                              <h4 style="color: #ffffff; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536045729955-b26427a4-993b">Siempre trabajando<br>
                                                por y para ustedes </h4>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin-remove uk-light uk-inline" data-dahz-shortcode-key="1536042926844-902b3fd9-d752" style=""> <a href="#" class="uk-button uk-button-text" target="_self"> <span class="uk-flex uk-flex-middle"> <span>Estamos listos para Tijuana</span> </span> </a> </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin-remove" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 400;" data-dahz-shortcode-key="1536043009581-68ec95c8-ba3f" style="visibility: hidden;"> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                  <div> <img width="640" height="660" class="attachment-full ds-lazy-image" alt="home-detail-04-min" sizes="(max-width: 640px) 100vw, 640px" data-uk-img="" data-src="images/acerca-diputada-1.jpg?r=1" data-srcset="images/acerca-diputada-1.jpg?r=1 640w, images/acerca-diputada-1.jpg?r=1 291w, images/acerca-diputada-1.jpg 600w" src="images/acerca-diputada-1.jpg?r=1" srcset="images/acerca-diputada-1.jpg?r=1 640w, images/acerca-diputada-1.jpg 291w, images/acerca-diputada-1.jpg?r=1 600w"> </div>
                                  </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important; visibility: hidden;" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 400;" data-dahz-id="1536046743155-8f3a88f1-6414">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove" style="background-color: #821543 !important;">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_single_image uk-margin-remove" data-uk-scrollspy="cls: uk-animation-slide-top-medium; delay: 500;" data-dahz-shortcode-key="1536046452014-24e35c91-0c65" style="visibility: hidden;"> <a class="de-single-image__wrapper uk-flex uk-flex-left">
                                  <div> <img width="640" height="510" class="attachment-full ds-lazy-image" alt="home-detail-05-min" sizes="(max-width: 640px) 100vw, 640px" data-uk-img="" data-src="images/acerca-diputada-2.jpg" data-srcset="images/acerca-diputada-2.jpg 640w, images/acerca-diputada-2.jpg 300w, images/acerca-diputada-2.jpg 600w" src="images/acerca-diputada-2.jpg" srcset="images/acerca-diputada-2.jpg 640w, images/acerca-diputada-2.jpg 300w, images/acerca-diputada-2.jpg 600w"> </div>
                                  </a> </div>
                                <div class="uk-width-1-1 uk-margin-remove">
                                  <div class="de-row de-row--inner uk-container" style="z-index: 0 !important;" data-dahz-id="1536046874914-27a0353c-0aba">
                                    <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-stack">
                                      <div class="de-column de-column--inner uk-position-relative uk-width-1-1@m uk-first-column" style="z-index: 0 !important; visibility: hidden;" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600;" data-dahz-id="1536046874917-360221a9-3bef">
                                        <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                          <div class="uk-width-1-1 uk-padding-large">
                                            <div></div>
                                            <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                              <div style="height:40px;" class=""> </div>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_video_popup uk-margin" data-dahz-shortcode-key="1536045752007-6fc58852-618a" style="">
                                                <div class="de-sc-video-popup uk-text-left"> <a href="#de-sc-vp-1536045752007-6fc58852-618a" data-uk-toggle="" class="de-sc-video-popup__button">
                                                  <div class="uk-inline uk-position-relative"> <span data-uk-icon="icon: play-circle;ratio: 3.5;" class="de-sc-video-popup__icon de-sc-video-popup__icon--outline uk-icon" style="color: #ffffff;">
                                                    <svg width="70" height="70" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon fill="none" stroke="#000" stroke-width="1.1" points="8.5 7 13.5 10 8.5 13"></polygon>
                                                      <circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"></circle>
                                                    </svg>
                                                    </span> 
													</div>
                                                  </a> </div>
                                                <div id="de-sc-vp-1536045752007-6fc58852-618a" data-uk-modal="" class="uk-modal">
                                                  <div class="uk-modal-dialog uk-margin-auto-vertical">
                                                    <iframe src="https://www.youtube.com/embed/3jZ7nJsaBzQ?enablejsapi=1" width="600" height="337" frameborder="0" data-uk-video=""></iframe>
                                                  </div>
                                                </div>
                                              </div>
                                              <h4 style="color: #ffffff; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536043011213-1195562e-d945"> Trabajando bajo los valores de la Cuarta Transformación </h4>
                                              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin-remove uk-light uk-inline" data-dahz-shortcode-key="1536048338999-029d1d66-c228" style=""> <a href="#" class="uk-button uk-button-text" target="_self"> <span class="uk-flex uk-flex-middle"> <span>Estamos listos para Tijuana</span> </span> </a> </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536046727682-10eddfde-369e">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove uk-background-norepeat uk-background-top-left" style="background-image: url(images/23-legislatura.jpg?r=1);">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div style="height:500px;" class=""> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-1 uk-margin-large">
                    <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536286480799-6c227d3e-fa28">
                      <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-large uk-grid-stack">
                        <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536286480875-50cbdeff-6fae">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                            </div>
                          </div>
                        </div>
                        <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536286481114-4a7846d1-076a">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-1 uk-margin-large">
                    <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1535527312670-ef5d07b4-f546">
                      <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-large">
                        <div class="de-column uk-position-relative uk-width-1-3@m uk-first-column" style="z-index: 0 !important;" data-dahz-id="1535527312674-45d877a5-8061">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--icon_box uk-margin-medium" data-dahz-shortcode-key="1536114417677-25cf8f81-9a19" style="">
                                  <div class="de-sc-iconbox uk-text-center"> <span class="uk-margin-small de-sc-iconbox--icon uk-width-auto" style="display:inline-block;line-height:1; font-size:50px; color:#adadad;"><i style="line-height:1;" class="political-de-businessman"></i></span>
                                    <div>
                                      <h5 style="color:#000000;">Lic. en Derecho CETYS</h5>
                                      <p style="color:#000000;">Carrera que culminó mientras laboraba en la Procuraduría General de Justicia del Estado de Baja California (PGJE), en el área de criminalística de campo.</p>
                                      <a href="#" target="_self" class="">Ver más</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="de-column uk-position-relative uk-width-1-3@m" style="z-index: 0 !important;" data-dahz-id="1535527315438-c9dbe99d-8faf">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--icon_box uk-margin-medium" data-dahz-shortcode-key="1536114415798-8d12f0b9-8c0c" style="">
                                  <div class="de-sc-iconbox uk-text-center"> <span class="uk-margin-small de-sc-iconbox--icon uk-width-auto" style="display:inline-block;line-height:1; font-size:50px; color:#adadad;"><i style="line-height:1;" class="political-de-balance"></i></span>
                                    <div>
                                      <h5 style="color:#000000;">Fundadora de MORENA</h5>
                                      <p style="color:#000000;">Participé activamente en la recolección de firmas para demostrar la inconformidad de los resultados y buscar la legitimización de la victoria de Andrés Manuel López Obrador.</p>
                                      <a href="#" target="_self" class="">Ver más</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="de-column uk-position-relative uk-width-1-3@m" style="z-index: 0 !important;" data-dahz-id="1536286401196-0a58e20e-b76c">
                          <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                            <div class="uk-width-1-1 uk-padding-remove">
                              <div></div>
                              <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--icon_box uk-margin-medium" data-dahz-shortcode-key="1536114306238-b6abba92-f814" style="">
                                  <div class="de-sc-iconbox uk-text-center"> <span class="uk-margin-small de-sc-iconbox--icon uk-width-auto" style="display:inline-block;line-height:1; font-size:50px; color:#adadad;"><i style="line-height:1;" class="political-de-vote-4"></i></span>
                                    <div>
                                      <h5 style="color:#000000;">MAdre de familia</h5>
                                      <p style="color:#000000;">Como madre soltera de Amir, de cinco años de edad, tengo el recordatorio constante, como muchas madres de México, de luchar diariamente por brindarle a mi hijo un futuro mejor.</p>
                                      <a href="#" target="_self" class="">Ver más</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-dahz-id="1536047788748-3b9b0490-98d3" class="de-section uk-section uk-section-large uk-background-cover uk-background-norepeat uk-background-top-left parallax" style="background-image: url(&quot;uploads/2018/09/home-bg-25-min.jpg?r=1;); background-color: rgb(130, 21, 67) !important; background-repeat: no-repeat; background-size: 2039px 856px; background-position: calc(0px) calc(-210px);" data-uk-parallax="bgx:0,0;bgy:-100,110;media: (min-width: 1200px);">
                    <div class="uk-width-1-1 uk-margin-large">
                      <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536047791932-01aeabaf-4986">
                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                          <div class="de-column uk-position-relative uk-width-1-2@m uk-first-column" style="z-index: 0 !important; visibility: hidden;" data-uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 300;" data-dahz-id="1536047793874-0bbaac46-f330">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper">
                                      <p><span style="color: #ffffff;"><?php echo $title;?></span></p>
                                    </div>
                                  </div>
                                  <style>
			@media only screen and ( max-width: 414px ) {
				h3[data-dahz-shortcode-key="1536048584219-6ac014bf-122f"] {
					font-size: 32px!important;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {
				h3[data-dahz-shortcode-key="1536048584219-6ac014bf-122f"] {
					font-size: inherit;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {
				h3[data-dahz-shortcode-key="1536048584219-6ac014bf-122f"] {
					font-size: inherit;
					line-height: inherit;
				}
			}
		</style>
                                  <h3 style="font-size: 48px; color: #ffffff; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536048584219-6ac014bf-122f"> Diputada por el <br>
                                    Distrito XIII </h3>
                                  <div style="" class="uk-margin">
                                    <div class="de-textblock-wrapper">
                                      <p><span style="color: #ffffff;">Actualmente ejerce como diputada por el Distrito XIII de Baja California, pero su carrera política se remonta al 2012, donde participó por la suplencia de una diputación federal a través del partido Movimiento Ciudadano, siempre mostrando de forma abierta su simpatía al Movimiento Regeneración Nacional, para posteriormente participar en la afiliación de simpatizanes a este después de noviembre de 2012.
</span></p>
                                    </div>
                                  </div>
                                  <div style="height:80px;" class=""> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1536047791935-2f21c354-bae3">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- #post-432#--> 
            </div>
          </div>
        </div>
      </div>	
      
	  <?php include('includes/cta-facebook.php')?>	
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
