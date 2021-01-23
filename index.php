<?php 
include_once('mysql2i/mysql2i.class.php');
require_once('includes/conn.php');
include( 'cpanel/includes/function-string.php');
mysql_select_db($database_conn, $conn);
$seccion = 'index';
?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php echo $title;?></title>
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
<link rel='stylesheet' id='home-default'  href='css/home-default.css' type='text/css' media='all' />

<script type='text/javascript'>
/* <![CDATA[ */
var give_global_vars = {"ajaxurl":"","checkout_nonce":"296d09a691","currency":"USD","currency_sign":"$","currency_pos":"before","thousands_separator":",","decimal_separator":".","no_gateway":"Please select a payment method.","bad_minimum":"The minimum custom donation amount for this form is","bad_maximum":"The maximum custom donation amount for this form is","general_loading":"Loading...","purchase_loading":"Please Wait...","number_decimals":"2","give_version":"2.2.6","magnific_options":{"main_class":"give-modal","close_on_bg_click":true},"form_translation":{"payment-mode":"Please select payment mode.","give_first":"Please enter your first name.","give_email":"Please enter a valid email address.","give_user_login":"Invalid username. Only lowercase letters (a-z) and numbers are allowed.","give_user_pass":"Enter a password.","give_user_pass_confirm":"Enter the password confirmation.","give_agree_to_terms":"You must agree to the terms and conditions."},"confirm_email_sent_message":"Please check your email and click on the link to access your complete donation history.","ajax_vars":{"ajaxurl":"","ajaxNonce":"6416785580","loading":"Loading","select_option":"Please select an option","default_gateway":"manual","permalinks":"1","number_decimals":2},"cookie_hash":"12e3924517a4e1629f28cab19496576c","delete_session_nonce_cookie":"0"};
var giveApiSettings = {"root":"","rest_base":"give-api\/v2"};
/* ]]> */
</script> 
<script type='text/javascript' src='assets/merged/71d897434f306f1d9b507511bdfd0813-1567665585.js'></script>
<script type="text/javascript">function setREVStartSize(e){									

						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;

							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					

						}catch(d){console.log("Failure at Presize of Slider:"+d)}						

					};</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1535423783414{background-color: #000000 !important;}.vc_custom_1535341996855{background-color: #1e73be !important;}.vc_custom_1536217099341{background-color: #8e1043 !important;}.vc_custom_1536203675163{background-color: #8e1043 !important;}.vc_custom_1535431466485{padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;background-color: #ffffff !important;}.vc_custom_1535431466485{padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;background-color: #ffffff !important;}.vc_custom_1536217105966{background-color: #8e1043 !important;}
</style>
<noscript>
<style type="text/css"> 
.wpb_animate_when_almost_visible { opacity: 1; }
</style>
</noscript>
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
</head>

<body class="page-template-default page page-id-82 woocommerce-no-js tribe-no-js de-is-lazyload-image enable-back-to-top fullwidth de-fullwidth baklon ds-single wpb-js-composer js-comp-ver-5.5.2 vc_responsive">
<div class="uk-offcanvas-content">
  <div class="de-page-container ds-single-page de-content-fullwidth" id="page">
    <div class="page-wrapper">
      <div id="de-site-header" class="de-site-header ds-single-page ds-site-header">
		  
        <?php include('includes/header.php');?>
		  
      </div>
      <div class="main de-content__wrapper uk-section ds-single-page ds-site-content uk-padding-remove-top uk-padding-remove-bottom" id="de-content-wrapper" data-uk-height-viewport="expand:true;">
        <div class="de-main-container" id="de-archive-content">
          <div class="uk-grid-large de-main-grid" data-uk-grid="">
            <div class="uk-width-expand@m de-main-content">
              <div class="de-content uk-child-width-1-1@s" data-uk-grid="">
                <div id="post-82" class="post-82 page type-page status-publish hentry">
                  <div class="de-page-builder">
                    <div class="uk-width-1-1 uk-margin-remove">
                      <div class="de-row uk-container uk-position-relative uk-container-expand uk-padding-remove-horizontal uk-overflow-hidden" style="z-index: 0 !important;" data-dahz-id="1534324973128-b97b1c98-b7ed">
                        <div class="de-shape-divider uk-position-bottom uk-position-z-index" style="">
                          <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <polygon points="100 10 100 0 -4 10"></polygon>
                          </svg>
                        </div>
                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                          <div class="de-column uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1534324973134-6181b8ce-c0d6">
                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                              <div class="uk-width-1-1 uk-padding-remove">
                                <div ></div>
                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                  <link href="http://fonts.googleapis.com/css?family=IBM+Plex+Serif:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                  
									<?php include('includes/slider-2.php');?>
                                  
								  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					  
					<?php include('includes/slider-form.php');?>
					  
                    <div data-dahz-id="1534326187892-8c79830c-0f58" class="de-section uk-section uk-position-relative uk-background-norepeat uk-background-top-left uk-background-fixed" style="background-image: url(uploads/2018/08/home-bg-08-min.jpg);">
                      <div class="de-shape-divider uk-position-top " style="transform: rotate(180deg);">
                        <svg fill="url(#SVGID_1_top_1534326187892-8c79830c-0f58)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
                          <linearGradient id="SVGID_1_top_1534326187892-8c79830c-0f58" gradientUnits="userSpaceOnUse" x1="500" y1="-98.4186" x2="500" y2="94.3336" gradientTransform="matrix(-1 0 0 1 1000 98)">
                            <stop offset="0" stop-color="#ffffff" stop-opacity="0"/>
                            <stop offset="1" stop-color="#ffffff"/>
                          </linearGradient>
                          <rect width="1000" height="200"/>
                        </svg>
                      </div>
                      <div class="de-shape-divider uk-position-bottom " style="">
                        <svg fill="url(#SVGID_1_bottom_1534326187892-8c79830c-0f58)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
                          <linearGradient id="SVGID_1_bottom_1534326187892-8c79830c-0f58" gradientUnits="userSpaceOnUse" x1="500" y1="-98.4186" x2="500" y2="94.3336" gradientTransform="matrix(-1 0 0 1 1000 98)">
                            <stop offset="0" stop-color="#ffffff" stop-opacity="0"/>
                            <stop offset="1" stop-color="#ffffff"/>
                          </linearGradient>
                          <rect width="1000" height="200"/>
                        </svg>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1534326059362-c2c795ce-700a">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1534326059368-1ba6ab04-7c0f">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-2-3@m" style="z-index: 0 !important;" data-dahz-id="1534326271609-04060813-9c44">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:300;">
                                        <p style="text-align: center;"><span style="color: #831543;"><?php echo $title;?></span></p>
                                      </div>
                                    </div>
                                    <style>

			@media only screen and ( max-width: 414px ) {

				h1[data-dahz-shortcode-key="1535351000977-284bf593-7f8f"] {

					font-size: 32px!important;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {

				h1[data-dahz-shortcode-key="1535351000977-284bf593-7f8f"] {

					font-size: inherit;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {

				h1[data-dahz-shortcode-key="1535351000977-284bf593-7f8f"] {

					font-size: inherit;

					line-height: inherit;

				}

			}

		</style>
                                    <h1 data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:400;" style="font-size: 56px; color: #000000; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1535351000977-284bf593-7f8f"> Trabajando por Tijuana,<br />
                                      trabajando por ti </h1>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:500;">
                                        <p style="text-align: center;">Mi política es una política que se hace en la calle, cercana al ciudadano, conociendo de su propia voz sus necesidades y entregando resultados de frente.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1534326271615-35814182-a972">
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
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536243807263-211d7b34-58be">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1536243807266-5be02ee8-0ada">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--portfolio_slider uk-margin" data-dahz-shortcode-key="1536243813935-370d1a44-5b67" style="">
                                      <div class="de-sc-post-slider" data-hover-effect="zoom">
                                        <div data-uk-slider="" class="uk-visible-toggle uk-slider-container de-sc-post-slider uk-position-relative">
                                          <div class="uk-position-relative">
                                            <ul class="uk-slider-items" data-uk-grid="">
												
                                              <li class="de-sc-post-slider__item uk-margin-remove-bottom uk-width-5-6 uk-width-1-2@s uk-width-1-2@m uk-width-1-3@l post-136 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_categories-social">
                                                <div class="uk-text-left entry-wrapper uk-background-cover de-ratio de-ratio-1-1" style="background-color:#e0e0e0; background-image:url(images/labor-diputada-montserrat-caballero.jpg);" data-uk-margin="margin:uk-margin">
                                                  <div class="de-ratio-content uk-inline-clip uk-transition-toggle">
                                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="">
                                                      <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom">
                                                        <li class="uk-width-auto">
                                                          <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="javascript:void()"> Lo que hago </a> </div>
                                                        </li>
                                                      </ul>
                                                      <h4 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="labores/">Mi Labor</a></h4>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
                                              
                                              <li class="de-sc-post-slider__item uk-margin-remove-bottom uk-width-5-6 uk-width-1-2@s uk-width-1-2@m uk-width-1-3@l post-133 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_categories-politic">
                                                <div class="uk-text-left entry-wrapper uk-background-cover de-ratio de-ratio-1-1" style="background-color:#e0e0e0; background-image:url(images/gestion-social-diputada-montserrat-caballero.jpg);" data-uk-margin="margin:uk-margin">
                                                  <div class="de-ratio-content uk-inline-clip uk-transition-toggle">
                                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="">
                                                      <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom">
                                                        <li class="uk-width-auto">
                                                          <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="javascript:void()"> Lo que hago </a> </div>                                                      </ul>
                                                      <h4 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="gestion-social/">Gestión Social</a></h4>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
												
                                              <li class="de-sc-post-slider__item uk-margin-remove-bottom uk-width-5-6 uk-width-1-2@s uk-width-1-2@m uk-width-1-3@l post-132 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_categories-economy">
                                                <div class="uk-text-left entry-wrapper uk-background-cover de-ratio de-ratio-1-1" style="background-color:#e0e0e0; background-image:url(images/promesas-diputada-montserrat-caballero.jpg);" data-uk-margin="margin:uk-margin">
                                                  <div class="de-ratio-content uk-inline-clip uk-transition-toggle">
                                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="">
                                                      <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom">
                                                        <li class="uk-width-auto">
                                                          <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="javascript:void()"> Lo que hago </a> </div>                                                        </li>
                                                      </ul>
                                                      <h4 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="promesas/">Promesas de Campaña</a></h4>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
												
                                              
                                            </ul>
                                          </div>
                                          
                                          
                                          <!-- RENDER ARROW --> 
                                          
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
					  
                    <div data-dahz-id="1534327281610-3cb811a4-3834" class="de-section uk-section uk-position-relative uk-background-cover uk-background-norepeat uk-background-center-center parallax" style="background-image: url(images/videos/nino.jpg); background-color: #000000 !important;" data-uk-parallax="bgx:0,0;bgy:-120,120;">
                      <div class="uk-position-cover uk-overlay" style="background-color: rgba(0,0,0,0.7)"></div>
                      <div class="de-shape-divider uk-position-top " style="transform: rotate(180deg);">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="de-shape-divider uk-position-bottom " style="">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div data-uk-height-viewport="" class="de-row uk-container uk-flex uk-flex-middle" style="z-index: 0 !important;" data-dahz-id="1534327281733-32a9a4fe-abe8">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1534327281784-f4311a53-44f5">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-2-3@m" style="z-index: 0 !important;" data-dahz-id="1535342209607-47f227a5-8f25">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--dahz_video_popup uk-margin" data-uk-scrollspy="cls: uk-animation-scale-up; delay: 300;" data-dahz-shortcode-key="1535342353679-f389a05d-4452" style="">
                                      <div class="de-sc-video-popup uk-text-center" data-uk-scrollspy="cls: uk-animation-scale-up; delay: 300;"> <a href="#de-sc-vp-1535342353679-f389a05d-4452" data-uk-toggle="" class="de-sc-video-popup__button">
                                        <div class="uk-inline uk-position-relative"> <span data-uk-icon="icon: play-circle;ratio: 3.5;" class="de-sc-video-popup__icon de-sc-video-popup__icon--outline" style="color: #ffffff;"> </span> </div>
                                        </a> </div>
                                      <div id="de-sc-vp-1535342353679-f389a05d-4452" data-uk-modal>
                                        <div class="uk-modal-dialog uk-margin-auto-vertical">
                                          <iframe src="https://www.youtube.com/embed/tRB5ic2bUHA" width="600" height="337" frameborder="0" data-uk-video></iframe>
                                        </div>
                                      </div>
                                    </div>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:400;">
                                        <p style="text-align: center;"><span style="color: #ffffff;"><?php echo $title;?></span></p>
                                      </div>
                                    </div>
                                    <style>

			@media only screen and ( max-width: 414px ) {

				h1[data-dahz-shortcode-key="1534326080064-8e64e2ed-82e6"] {

					font-size: 32px!important;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {

				h1[data-dahz-shortcode-key="1534326080064-8e64e2ed-82e6"] {

					font-size: inherit;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {

				h1[data-dahz-shortcode-key="1534326080064-8e64e2ed-82e6"] {

					font-size: inherit;

					line-height: inherit;

				}

			}

		</style>
                                    <h1 data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:500;" style="font-size: 56px; color: #ffffff; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1534326080064-8e64e2ed-82e6">Somos gente que cree<br />
                                     en la gente </h1>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:600;">
                                        <p style="text-align: center;"><span style="color: #ffffff;">Porque somos gente que cree en la gente, porque como diputada de la XXIII legislatura trabajamos para que nuestro Distrito y sus familias estén mejor, porque los gobiernos que buscaban aplausos y pleitesía, ya no están, ni son gobierno. </span></p>
                                      </div>
                                    </div>
                                    <?php include('video-donar.php;');?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1535342209610-bc347391-6559">
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
                    <div data-dahz-id="1534326463544-723e6249-de72" class="de-section uk-section uk-position-relative uk-background-norepeat uk-background-top-right uk-background-fixed" style="background-image: url(uploads/2018/08/home-bg-07-min.jpg);">
                      <div class="de-shape-divider uk-position-top " style="transform: rotate(180deg);">
                        <svg fill="url(#SVGID_1_top_1534326463544-723e6249-de72)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
                          <linearGradient id="SVGID_1_top_1534326463544-723e6249-de72" gradientUnits="userSpaceOnUse" x1="500" y1="-98.4186" x2="500" y2="94.3336" gradientTransform="matrix(-1 0 0 1 1000 98)">
                            <stop offset="0" stop-color="#ffffff" stop-opacity="0"/>
                            <stop offset="1" stop-color="#ffffff"/>
                          </linearGradient>
                          <rect width="1000" height="200"/>
                        </svg>
                      </div>
                      <div class="de-shape-divider uk-position-bottom " style="">
                        <svg fill="url(#SVGID_1_bottom_1534326463544-723e6249-de72)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
                          <linearGradient id="SVGID_1_bottom_1534326463544-723e6249-de72" gradientUnits="userSpaceOnUse" x1="500" y1="-98.4186" x2="500" y2="94.3336" gradientTransform="matrix(-1 0 0 1 1000 98)">
                            <stop offset="0" stop-color="#ffffff" stop-opacity="0"/>
                            <stop offset="1" stop-color="#ffffff"/>
                          </linearGradient>
                          <rect width="1000" height="200"/>
                        </svg>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container uk-container-expand uk-padding-remove-horizontal uk-overflow-hidden" style="z-index: 0 !important;" data-dahz-id="1534326627918-502dc4e7-0a21">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1534326627922-fe02cf35-830b">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--animated_text uk-margin uk-h1" data-dahz-shortcode-key="1534326633888-b0439f1e-4398" style="">
                                      <div class="uk-overflow-hidden de-sc-animated-text" data-animate-style="default">
                                        <div class="de-sc-animated-text__box" style="max-width: 1240px;"> <span class="de-sc-animated-text__text inner" style="font-size:18vw; animation-duration:336s; line-height:0.85; color:#f7f7f7;"> <span>POR TIJUANA POR TI POR TIJUANA POR TI POR TIJUANA POR TI POR TIJUANA POR TI </span> <span>POR TIJUANA POR TI POR TIJUANA POR TI POR TIJUANA POR TI POR TIJUANA POR TI </span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1534326463578-837191b7-8c03">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1534326463602-5ad767b3-e823">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-left-medium; delay:300;">
                                        <p><span style="color: #82163c;"><?php echo $title;?></span></p>
                                      </div>
                                    </div>
                                    <style>

			@media only screen and ( max-width: 414px ) {

				h1[data-dahz-shortcode-key="1535431584509-fe56699d-abb9"] {

					font-size: 32px!important;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {

				h1[data-dahz-shortcode-key="1535431584509-fe56699d-abb9"] {

					font-size: inherit;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {

				h1[data-dahz-shortcode-key="1535431584509-fe56699d-abb9"] {

					font-size: inherit;

					line-height: inherit;

				}

			}

		</style>
                                    <h1 data-uk-scrollspy="cls:uk-animation-slide-left-medium; delay:400;" style="font-size: 56px; color: #000000; line-height: 1.2; text-align: left;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1535431584509-fe56699d-abb9"> Promesas hechas,<br />
                                      Promesas cumplidas </h1>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-left-medium; delay:500;">
                                        <p>En un año de mi gestión como diputada por el Distrito XIII, cumplí con 7 de mis promesas de campaña.</p>
                                      </div>
                                    </div>
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--button uk-margin uk-inline" data-uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 600;" data-dahz-shortcode-key="1535342945208-53092fe1-94bb" style=""> <a href="#" class="uk-button uk-button-primary" target="_self" data-uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 600;"> <span class="uk-flex uk-flex-middle"> <span>¡Conóceme!</span> </span> </a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1534326463719-42121564-671f">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <h4 data-uk-scrollspy="cls:uk-animation-fade; delay:300;" style="font-size: 24px; color: #c1c1c1; line-height: 1.2; text-align: left;" class="uk-text-uppercase uk-margin de-sc-heading" data-dahz-shortcode-key="1534326463658-6ea49151-d5d8"> XXIII Legislatura de B.C. </h4>
                                    <div class="uk-width-1-1 uk-margin">
                                      <div class="de-row de-row--inner uk-container" style="z-index: 0 !important;" data-dahz-id="1535431292825-f3fc3bef-75d8">
                                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                                          <div class="de-column de-column--inner uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1535431292874-ce567ae4-e047">
                                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                              <div class="uk-width-1-1 uk-card uk-card-body uk-card-default uk-box-shadow-medium uk-padding-small" style="padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;background-color: #ffffff !important;">
                                                <div ></div>
                                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                                  <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--icon_list uk-margin-remove" data-uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 400;" data-dahz-shortcode-key="1535431292913-2846e49c-083b" style="">
                                                    <div data-uk-grid="" data-uk-scrollspy="cls:uk-animation-slide-right-medium; delay:400;" class="de-sc-iconlist uk-grid uk-text-left">
                                                      <div class="uk-width-auto"> <span class="uk-margin de-sc-iconlist--icon" style="display:inline-block; color:#000000;"><img width="100" height="100" class=" ds-lazy-image" alt="home-bg-14-min" data-uk-img="" data-src="images/XXIII-legislatura-BC.jpg" /></span> </div>
                                                      <div class="uk-margin-left uk-padding-remove uk-width-expand">
                                                        <h4 class="uk-margin-small-bottom" style="color:#000000;">Logros como bancada</h4>
                                                        <p class="uk-margin-small-top" style="color:#000000;">Fuimos la bancada más productiva de la XXIII Legislatura, la legislatura del cambio, de equidad y de puertas abiertas para los ciudadanos.</p>
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
                                    <div class="uk-width-1-1 uk-margin">
                                      <div class="de-row de-row--inner uk-container" style="z-index: 0 !important;" data-dahz-id="1535431536693-4a5c7201-7da3">
                                        <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                                          <div class="de-column de-column--inner uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1535431536740-3ede6346-1bdf">
                                            <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                              <div class="uk-width-1-1 uk-card uk-card-body uk-card-default uk-box-shadow-medium uk-padding-small" style="padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;background-color: #ffffff !important;">
                                                <div ></div>
                                                <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                                  <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--icon_list uk-margin-remove" data-uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 500;" data-dahz-shortcode-key="1535431536783-615dab81-392d" style="">
                                                    <div data-uk-grid="" data-uk-scrollspy="cls:uk-animation-slide-right-medium; delay:500;" class="de-sc-iconlist uk-grid uk-text-left">
                                                      <div class="uk-width-auto"> <span class="uk-margin de-sc-iconlist--icon" style="display:inline-block; color:#000000;"><img width="100" height="100" class=" ds-lazy-image" alt="home-bg-15" data-uk-img="" data-src="images/comision-salud.jpg" /></span> </div>
                                                      <div class="uk-margin-left uk-padding-remove uk-width-expand">
                                                        <h4 class="uk-margin-small-bottom" style="color:#000000;">Logros en Comisión de Salud</h4>
                                                        <p class="uk-margin-small-top" style="color:#000000;">Respondiendo ante la emergencia sanitaria provocada por Covid-19, legislamos en pro de los bajacalifornianos para atacar esta problemática, además de obtener reconstrucciones mamarias gratuitas para las sobrevivientes de cáncer en la entidad.</p>
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
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-dahz-id="1534326933984-b07e752f-490e" class="de-section uk-section uk-position-relative uk-section-large uk-background-cover uk-background-norepeat uk-background-top-center parallax" style="background-image: url(uploads/2018/08/home-bg-01-min.jpg); background-color: #8e1043 !important;" data-uk-parallax="bgx:-50,50;bgy:-50,50;media: (min-width: 1200px);">
                      <div class="uk-position-cover uk-overlay" style="background-color: rgba(0,0,0,0.5)"></div>
                      <div class="de-shape-divider uk-position-top " style="transform: rotate(180deg);">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="de-shape-divider uk-position-bottom " style="">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1535341377431-6d41315b-a18c">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1535341377434-67b92310-4f8f">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="height:60px;" class=""> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1534326934070-22694e41-09bf">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-flex-middle">
                            <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300;" data-dahz-id="1534326934108-01dc5bd4-cfba">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--milestone uk-margin" data-dahz-shortcode-key="1534326963558-5eb4902e-78fa" style="">
                                      <div class="de-sc-milestone uk-flex uk-flex-column uk-flex-middle uk-text-center">
                                        <div class="de-sc-milestone__count" id="1534326963558-5eb4902e-78fa" data-start-counter="4657" data-symbol="<span class='de-sc-milestone__symbol'>K</span>" data-symbol-position="suffix"></div>
                                        <div class="de-sc-milestone__title">  Alguna Cifra </div>
                                        <div class="de-sc-milestone__subtitle"> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important;" data-dahz-id="1534326941147-846a0846-c699">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--milestone uk-margin" data-uk-scrollspy="cls: uk-animation-slide-top-medium; delay: 400;" data-dahz-shortcode-key="1534326965110-1ef69e04-e401" style="">
                                      <div class="de-sc-milestone uk-flex uk-flex-column uk-flex-middle uk-text-center">
                                        <div class="de-sc-milestone__count" id="1534326965110-1ef69e04-e401" data-start-counter="660" data-symbol="<span class='de-sc-milestone__symbol'></span>" data-symbol-position="prefix"></div>
                                        <div class="de-sc-milestone__title"> Alguna Cifra </div>
                                        <div class="de-sc-milestone__subtitle"> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important;" data-dahz-id="1534326941153-5221d98c-e4c9">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--milestone uk-margin" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 500;" data-dahz-shortcode-key="1534326966510-2a609bcf-17d5" style="">
                                      <div class="de-sc-milestone uk-flex uk-flex-column uk-flex-middle uk-text-center">
                                        <div class="de-sc-milestone__count" id="1534326966510-2a609bcf-17d5" data-start-counter="789" data-symbol="<span class='de-sc-milestone__symbol'></span>" data-symbol-position="prefix"></div>
                                        <div class="de-sc-milestone__title"> Alguna Cifra </div>
                                        <div class="de-sc-milestone__subtitle"> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-4@m" style="z-index: 0 !important;" data-dahz-id="1534326941160-4e55821e-8a9a">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--milestone uk-margin" data-uk-scrollspy="cls: uk-animation-slide-top-medium; delay: 600;" data-dahz-shortcode-key="1534326946294-8755f77e-843b" style="">
                                      <div class="de-sc-milestone uk-flex uk-flex-column uk-flex-middle uk-text-center">
                                        <div class="de-sc-milestone__count" id="1534326946294-8755f77e-843b" data-start-counter="6895" data-symbol="<span class='de-sc-milestone__symbol'>K</span>" data-symbol-position="suffix"></div>
                                        <div class="de-sc-milestone__title"> Alguna Cifra </div>
                                        <div class="de-sc-milestone__subtitle"> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1535341378622-5c28d516-83b6">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-1@m" style="z-index: 0 !important;" data-dahz-id="1535341378657-67c3a6c4-12c2">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="height:60px;" class=""> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-dahz-id="1534327043708-2d8a3541-7c2c" class="de-section uk-section">
                      <div class="uk-width-1-1 uk-margin-medium">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1534327043809-c1219218-3b8a">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1534327043854-d4a13105-9b7f">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index"> </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-2-3@m" style="z-index: 0 !important;" data-dahz-id="1534327043899-5588ef55-6ef8">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:300;">
                                        <p style="text-align: center;"><span style="color: #82163c;"><?php echo $title;?></span></p>
                                      </div>
                                    </div>
                                    <style>

			@media only screen and ( max-width: 414px ) {

				h1[data-dahz-shortcode-key="1535439163748-5e780cda-890e"] {

					font-size: 32px!important;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {

				h1[data-dahz-shortcode-key="1535439163748-5e780cda-890e"] {

					font-size: inherit;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {

				h1[data-dahz-shortcode-key="1535439163748-5e780cda-890e"] {

					font-size: inherit;

					line-height: inherit;

				}

			}

		</style>
                                    <h1 data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:400;" style="font-size: 56px; color: #000000; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1535439163748-5e780cda-890e"> Noticias </h1>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:500;">
                                        <p style="text-align: center;">Este es mi trabajo día con día. Te invito a conocerlo.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-6@m" style="z-index: 0 !important;" data-dahz-id="1534327044073-ab39a09d-551b">
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
                      <div class="uk-width-1-1 uk-margin">
                        <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1534327064307-b59903e7-420a">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0">
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-fade; delay: 300;" data-dahz-id="1534327064310-649f95e8-e8fb">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1 de-column-sticky" data-uk-sticky="bottom: true; media: (min-width: 1200px);">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--post_grid uk-margin" data-dahz-shortcode-key="1534327098670-0936338f-c2d4" style="">
                                      <div class="de-sc-post-slider" data-hover-effect="zoom">
                                        <ul class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l" data-uk-grid="">
											
<?php
$fijada = 'Si';
$query_fijar = sprintf("SELECT * FROM blog WHERE fijar = %s",
GetSQLValueString($fijada, "text"));
$fijar = mysql_query($query_fijar, $conn) or die(mysql_error());
$p_fija = mysql_fetch_assoc($fijar);
											
if($p_fija['categoria'] == 'Blog Sitio'){
	$link = 'noticias/'.$p_fija['permalink'];
	$target = '_self';
	$text_fijada = 'Seguir leyendo';
} else{
	$link = $facebook.$p_fija['permalink'];
	$target = '_blank';
	$text_fijada = 'Ver en Facebook';
}
?>									
                                          <li class="de-sc-post-slider__item uk-margin-remove-bottom  post-46 post type-post status-publish format-standard has-post-thumbnail hentry category-social">
                                            <div class="uk-text-left entry-wrapper" style="" data-uk-margin="margin:uk-margin-small"> <a class="uk-margin-medium de-ratio de-ratio-3-4" href="<?php echo $link;?>" target="<?php echo $target;?>"> <img width="640" height="427" class="de-ratio-content wp-post-image ds-lazy-image" alt="<?php echo $p_fija['titulo'];?>" sizes="(max-width: 640px) 100vw, 640px" data-uk-img="" data-src="<?php echo $p_fija['imagen'];?>" data-srcset="<?php echo $p_fija['imagen'];?> 1024w, <?php echo $p_fija['imagen'];?> 1000w, <?php echo $p_fija['imagen'];?> 300w, <?php echo $p_fija['imagen'];?> 768w" /> </a>
                                              <div class="de-sc-post-slider__content ">
                                                <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom">
                                                  <li class="uk-width-auto">
                                                    <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="tag/<?php echo $p_fija['categoria'];?>"><?php echo $p_fija['categoria'];?></a> </div>
                                                  </li>
													<li class="uk-width-auto"><a href="javascript:void();" class="uk-link de-post-meta__author"><strong>Publicación Fijada</strong></a></li>
                                                  <li class="uk-width-auto"> <?php echo $p_fija['mes'];?> <?php echo $p_fija['dia'];?>, <?php echo $p_fija['anio'];?> </li>
                                                </ul>
                                                <h2 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="<?php echo $link;?>" target="<?php echo $target;?>"><?php echo $p_fija['titulo'];?></a></h2>
                                                <div class="de-archive__featured-content uk-margin uk-margin-remove-bottom">
                                                  <p class="uk-margin-remove"><?php echo $p_fija['excerp'];?>... </p>
                                                  <a class="uk-margin-medium-top uk-button uk-button-primary" href="<?php echo $link;?>" target="<?php echo $target;?>"> <?php echo $text_fijada;?> </a> </div>
                                              </div>
                                            </div>
                                          </li>
											
											
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
							  
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-fade; delay: 300;" data-dahz-id="1534327065706-16363e5d-7a94">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--post_grid uk-margin" data-dahz-shortcode-key="1534327083014-d744041d-0835" style="">
                                      <div class="de-sc-post-slider" data-hover-effect="zoom">
                                        <ul class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-2@l" data-uk-grid="">
<?php
$mostrar = 'Si';
$query_notas = sprintf("SELECT * FROM blog WHERE mostrar = %s ORDER BY fecha DESC LIMIT 6",
GetSQLValueString($mostrar, "text"));
$notas = mysql_query($query_notas, $conn) or die(mysql_error());
while($show_notas = mysql_fetch_assoc($notas)){
											
if($show_notas['categoria'] == 'Blog Sitio'){
	$link_notas = 'noticias/'.$show_notas['permalink'];
	$target_notas = '_self';
} else{
	$link_notas = $facebook.$show_notas['permalink'];
	$target_notas = '_blank';
}
?>                                          
											<li class="de-sc-post-slider__item uk-margin-remove-bottom  post-33 post type-post status-publish format-standard has-post-thumbnail hentry category-social">
                                            <div class="uk-text-left entry-wrapper" style="" data-uk-margin="margin:uk-margin-small"> <a class="uk-margin-medium de-ratio de-ratio-3-4" href="<?php echo $link_notas;?>" target="<?php echo $target_notas;?>">
											<img width="640" height="427" class="de-ratio-content wp-post-image ds-lazy-image" alt="<?php echo $show_notas['titulo'];?>" sizes="(max-width: 640px) 100vw, 640px" data-uk-img="" data-src="<?php echo $show_notas['imagen'];?>" data-srcset="<?php echo $show_notas['imagen'];?> 1024w, <?php echo $show_notas['imagen'];?> 1000w, <?php echo $show_notas['imagen'];?> 300w, <?php echo $show_notas['imagen'];?> 768w" /> </a>
                                              <div class="de-sc-post-slider__content ">
                                                <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom">
                                                  <li class="uk-width-auto">
                                                    <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="tag/<?php echo $show_notas['categoria'];?>"><?php echo $show_notas['categoria'];?> </a> </div>
                                                  </li>
                                                </ul>
                                                <h5 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="<?php echo $link_notas;?>" target="<?php echo $target_notas;?>"><?php echo $show_notas['titulo'];?></a></h5>
                                              </div>
                                            </div>
                                          </li>
<?php
}
?>
                                        </ul>
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
                    <div data-dahz-id="1534326392700-a9a5a492-976e" class="de-section uk-section uk-position-relative uk-padding-remove-vertical uk-padding-remove-top uk-padding-remove-bottom" style="background-color: #8e1043 !important;">
                      <div class="de-shape-divider uk-position-top uk-position-z-index" style="transform: rotate(180deg);">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="de-shape-divider uk-position-bottom uk-position-z-index" style="">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                          <polygon points="100 10 100 0 -4 10"></polygon>
                        </svg>
                      </div>
                      <div class="uk-width-1-1 uk-margin-remove">
                        <div class="de-row uk-container uk-container-expand uk-padding-remove-horizontal" style="z-index: 0 !important;" data-dahz-id="1535343691789-a88f8c45-3907">
                          <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-collapse uk-grid-match uk-c-flex-middle">
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-fade; delay: 300;" data-dahz-id="1535343691793-d5b8ac31-ac8e">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-position-relative uk-padding-large uk-background-cover uk-background-norepeat uk-background-top-left uk-background-fixed" style="background-image: url(uploads/2018/08/home-bg-05-min.jpg); background-color: #8e1043 !important;">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="height:80px;" class=""> </div>
                                    <div style="" class="uk-margin">
                                      <div class="de-textblock-wrapper">
                                        <p style="text-align: center;"><span style="color: #ffffff;"><?php echo $title;?></span></p>
                                      </div>
                                    </div>
                                    <style>

			@media only screen and ( max-width: 414px ) {

				h1[data-dahz-shortcode-key="1534327043975-06fd32fd-520b"] {

					font-size: 32px!important;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {

				h1[data-dahz-shortcode-key="1534327043975-06fd32fd-520b"] {

					font-size: inherit;

					line-height: inherit;

				}

			}



			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {

				h1[data-dahz-shortcode-key="1534327043975-06fd32fd-520b"] {

					font-size: inherit;

					line-height: inherit;

				}

			}

		</style>
                                    <h1 style="font-size: 56px; color: #ffffff; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1534327043975-06fd32fd-520b"> Lo que la gente<br />
                                     dice de mi</h1>
                                    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--testimonials uk-margin" data-dahz-shortcode-key="1535431742309-c72cee92-8f1a" style="">
                                      <div class="de-sc-testimonials--style-2 uk-position-relative de-sc-testimonials uk-slider-container" data-uk-slider="autoplay: true;autoplay-interval:1800;">
                                        <div class="uk-position-relative uk-visible-toggle">
                                          <ul class="uk-slider-items">
<?php
$mostrar = 'Si';
$testimonio = '';
$query_testimonios = sprintf("SELECT * FROM testimonios WHERE mostrar = %s AND testimonio != '' ORDER BY fecha DESC LIMIT 3",
GetSQLValueString($mostrar, "text"));
$testimonios = mysql_query($query_testimonios, $conn) or die(mysql_error());
while($show_testimonios = mysql_fetch_assoc($testimonios)){
											
if($show_testimonios['categoria'] == 'Salud'){
	$link_testimonios = 'testimonios-salud/';
} else{
	$link_testimonios = 'testimonios-gestion-social/';
}
?> 	  
<li class="de-sc-testimonials__item uk-width-1-1"> 
<a href="<?php echo $link_testimonios;?>" aria-label="Testimonios" class="uk-padding-large uk-padding-remove-vertical">
<div class="de-sc-testimonials__quote-icon"></div>
<div class="de-sc-testimonials__image">
<img width="150" height="150" class="attachment-thumbnail size-thumbnail ds-lazy-image" alt="<?php echo $show_testimonios['titulo'];?>" sizes="(max-width: 150px) 100vw, 150px" data-uk-img="<?php echo $show_testimonios['foto'];?>" data-src="<?php echo $show_testimonios['foto'];?>" data-srcset="<?php echo $show_testimonios['foto'];?> 150w, <?php echo $show_testimonios['foto'];?> 100w" /> 
</div>
<p class="de-sc-testimonials__content"><?php echo $show_testimonios['testimonio'];?></p>
<div class="de-sc-testimonials__name uk-margin-small-bottom">
<h5><?php echo $show_testimonios['nombre'];?> <?php echo $show_testimonios['apellido'];?></h5>
</div>
</a> 
</li>
<?php
}
?> 
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div style="height:80px;" class=""> </div>
                                  </div>
                                  <div class="uk-position-cover uk-overlay" style="background-color: rgba(130,21,67,0.9)"></div>
                                </div>
                              </div>
                            </div>
                            <div class="de-column uk-position-relative uk-width-1-2@m" style="z-index: 0 !important;" data-dahz-id="1535343692990-17e9091d-70eb">
                              <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
                                <div class="uk-width-1-1 uk-padding-remove uk-background-cover uk-background-center-right" style="background-image: url(images/diputada-montserrat-caballero.jpg);">
                                  <div ></div>
                                  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
                                    <div style="height:85vh;" class=""> </div>
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
                <!-- #post-82#--> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .de-site__wrapper -->
      
      <?php include('includes/cta-facebook.php')?>
      <?php include('includes/footer.php')?>
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

<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done"}};var tribe_system_info = {"sysinfo_optin_nonce":"7d7f0d0d1b","clipboard_btn_text":"Copy to clipboard","clipboard_copied_text":"System info copied","clipboard_fail_text":"Press \"Cmd + C\" to copy"};/* ]]> */ </script> <script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script> 
<script type="text/javascript">

				function revslider_showDoubleJqueryError(sliderID) {

					var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";

					errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";

					errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";

					errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";

					errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";

						jQuery(sliderID).show().html(errorMessage);

				}

			</script>

<link rel='stylesheet' id='css-3-css'  href='assets/merged/75aeadf4052dd54a838bffcd82bc24d9-1536303594.css' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/dahz.daffyhazan.com\/baklon\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};var wc_add_to_cart_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/dahz.daffyhazan.com\/baklon\/cart\/","is_cart":"","cart_redirect_after_add":"no"};var woocommerce_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%"};var wc_cart_fragments_params = {"ajax_url":"\/baklon\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/baklon\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d0bf745d85d2fccca469f21b5db485e3","fragment_name":"wc_fragments_d0bf745d85d2fccca469f21b5db485e3"};var dahzFramework = {"ajaxURL":"http:\/\/dahz.daffyhazan.com\/baklon\/wp-admin\/admin-ajax.php","unavailableModules":["header-wishlist"],"language":{"emptyMessage":"<h4>OH NO! No result were found<\/h4>"},"megamenu":{"isOverride":true,"pageID":82}};
/* ]]> */
</script> 
<script type='text/javascript' src='assets/merged/3a45b9257e26a55f0d056084ba66293b-1544671650.js'></script>
<?php include('includes/en-footer.php')?>
</body>
</html>
