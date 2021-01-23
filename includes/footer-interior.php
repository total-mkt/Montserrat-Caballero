<div id="de-site-footer" class="ds-single-page ds-site-footer">
        <div id="footer-sectionbefore-section" class="de-footer__section">
          <div class="uk-container"> </div>
        </div>
        <div id="footer-section2" class="de-footer__section">
          <div class="uk-container">
            <div id="footer-section-2-row-0" class="de-footer__row uk-grid uk-grid-medium" data-uk-grid="">
              <div id="footer-section-2-row-0-column-0" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-3@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-left" data-uk-grid="">
                  <div data-section="2" data-builder-type="footer" data-item-id="footer_widget_1" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-left">
                    <div class="uk-width-1-1 de-footer__widget">
                      <div id="text-2" class="widget widget_text de-footer-top-inner">
                        <h6 class="widget-title widgettitle"><?php echo $title;?></h6>
                        <div class="textwidget">
                          <p><?php echo $desc_footer;?></p>
                          <p><img class="alignnone size-full wp-image-787" src="images/firma-montserrat.png" alt="<?php echo $title;?>" width="246" height="71" /></p>
                        </div>
                      </div>
                      <hr class="de-sidebar__widget-separator uk-margin-medium" />
                    </div>
                  </div>
                </div>
              </div>
              
              <div id="footer-section-2-row-0-column-2" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-3@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-left" data-uk-grid="">
                  <div data-section="2" data-builder-type="footer" data-item-id="footer_widget_3" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-left">
                    <div class="uk-width-1-1 de-footer__widget">
                      <div id="dahz_recent_post_widget-3" class="widget widget_dahz_recent_post_widget de-footer-top-inner">
                        <div class="dahz-widget__wrapper dahz-widget__wrapper--dahz_recent_post_widget">
                          <h6 class="widget-title widgettitle">Noticias</h6>
 <?php 
$query_F = "SELECT * FROM blog ORDER BY fecha DESC LIMIT 3";
$resultado_F = mysql_query($query_F);
while($rowF = mysql_fetch_array($resultado_F))
{
?>
                          <div class="de-widget__recent-posts">
                            <div class="de-widget__recent-posts-image"> <img width="150" height="150" class="attachment-thumbnail size-thumbnail wp-post-image ds-lazy-image" alt="<?php echo $rowF['titulo'];?>" sizes="(max-width: 150px) 100vw, 150px" data-uk-img="" data-src="<?php echo $rowF['imagen'];?>" data-srcset="<?php echo $rowF['imagen'];?> 150w, uploads/2018/08/blog-01-min-100x100.jpg 100w" /> </div>
                            <div class="de-widget__recent-posts-description">
                              <h6 class="uk-margin-small-bottom"><a href="noticias/" title="<?php echo $rowF['titulo'];?>"><?php echo $rowF['titulo'];?></a></h6>
                              <div class="de-widget__recent-posts-meta">
                                <ul class="uk-text-small uk-subnav uk-subnav-divider uk-margin de-post-meta" data-uk-margin>
                                  <li class="uk-width-auto"> <a href="noticias/" class="uk-link de-post-meta__date"> <?php echo $rowF['mes'];?> <?php echo $rowF['dia'];?>, <?php echo $rowF['anio'];?> </a> </li>
                                  <li class="uk-width-auto">
                                    <div class="uk-flex uk-width-1 de-post-meta__categories"> <a class="uk-link" href="noticias/"> <?php echo $rowF['categoria'];?> </a> </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
 <?php 
 }
?>                        </div>
                      </div>
                      <hr class="de-sidebar__widget-separator uk-margin-medium" />
                    </div>
                  </div>
                </div>
              </div>
				
              <div id="footer-section-2-row-0-column-3" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-3@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-left" data-uk-grid="">
                  <div data-section="2" data-builder-type="footer" data-item-id="footer_widget_4" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-left">
                    <div class="uk-width-1-1 de-footer__widget">
                      <div id="dahz_post_categories_widget-3" class="widget widget_dahz_post_categories_widget de-footer-top-inner">
                        <div class="dahz-widget__wrapper dahz-widget__wrapper--dahz_post_categories_widget">
							 <h6 class="widget-title widgettitle">Congreso del Estado de B.C.</h6>
							<div class="textwidget">
                          <p><?php echo $desc_congreso;?></p>
                          <p><img class="alignnone size-full wp-image-787" src="images/logo-congreso-bc.png" alt="Congreso del estado de B.C."/></p>
                        </div>
                         </div>
                      </div>
                      <hr class="de-sidebar__widget-separator uk-margin-medium" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="footer-section3" class="de-footer__section">
          <div class="uk-container">
            <div id="footer-section-3-row-0" class="de-footer__row uk-grid uk-grid-medium" data-uk-grid="">
              <div id="footer-section-3-row-0-column-0" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-1@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-center" data-uk-grid="">
                  <div data-section="3" data-builder-type="footer" data-item-id="footer_logo" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-center"> <a href="./" rel="home"> <img src="images/logo-montserrat-footer.png" data-src-2x="images/logo-montserrat-footer.png" data-src-3x="images/logo-montserrat-footer.png" alt="<?php echo $title;?>" /> </a> </div>
                </div>
              </div>
            </div>
            <div id="footer-section-3-row-1" class="de-footer__row uk-grid uk-grid-medium" data-uk-grid="">
              <div id="footer-section-3-row-1-column-0" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-1@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-center" data-uk-grid="">
                  <div data-section="3" data-builder-type="footer" data-item-id="footer_menu" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-center">
                    <ul id="menu-footer" class="de-footer-menu de-footer-menu--style-2">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="montserrat-caballero/">¿Quién Soy?</a></li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="politica-de-privacidad/">Política de Privacidad</a></li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="terminos-y-condiciones/">Términos y Condiciones</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div id="footer-section-3-row-2" class="de-footer__row uk-grid uk-grid-medium" data-uk-grid="">
              <div id="footer-section-3-row-2-column-0" class="uk-flex uk-flex-wrap uk-flex-row uk-width-1-1 uk-width-1-1@m">
                <div class="uk-grid uk-flex-1 uk-child-width-1-1 uk-flex-center" data-uk-grid="">
                  <div data-section="3" data-builder-type="footer" data-item-id="site_copyright" data-item-is-lazyload="" class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-center">
                    <div class="site-info uk-text-center">
                      <p class="uk-margin-remove"> &#169;<?php echo date('Y');?> <?php echo $title;?> - Desarrollo por <a href="<?php echo $desarrollo;?>" target="_blank">Total Marketing</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="footer-sectionafter-section" class="de-footer__section">
          <div class="uk-container"> </div>
        </div>
        <a class="uk-hidden de-back-to-top uk-box-shadow-hover-medium ds-btt--btn uk-border-circle" data-uk-totop data-uk-scroll="offset: 46;" data-uk-scrollspy="target: > de-site-after-footer;cls:uk-animation-fade"> <i data-uk-icon="arrow-up"></i> </a> </div>