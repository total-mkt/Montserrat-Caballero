<hr></hr>
<div class="uk-width-1-1 uk-padding-remove">
  <div></div>
  <div class="uk-flex-1 uk-position-relative uk-position-z-index">
    <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--divider uk-margin" data-dahz-shortcode-key="1536117440788-728fe1ae-dc75" style="">
      <div class="de-divider__wrapper uk-flex-left">
        <div class="de-divider uk-width-1-1"></div>
      </div>
    </div>
  </div>
</div>
<div class="uk-width-1-1 uk-margin-medium uk-margin-remove-top">
  <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536117430826-59c67a3e-32eb">
    <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-stack">
      <div class="de-column uk-position-relative uk-width-1-1@m uk-first-column" style="z-index: 0 !important;" data-dahz-id="1536117430830-3783f729-c61f">
        <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
          <div class="uk-width-1-1 uk-padding-remove">
            <div></div>
            <div class="uk-flex-1 uk-position-relative uk-position-z-index">
              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--divider uk-margin" data-dahz-shortcode-key="1536117440788-728fe1ae-dc75" style="">
                <div class="de-divider__wrapper uk-flex-left">
                  <div class="de-divider uk-width-1-1"></div>
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
  <div class="de-row uk-container" style="z-index: 0 !important;" data-dahz-id="1536117449812-85c8df69-7492">
    <div data-uk-grid="" class="uk-grid uk-flex-1 uk-c-position-z-index-0 uk-grid-stack">
      <div class="de-column uk-position-relative uk-width-1-1@m uk-first-column uk-scrollspy-inview uk-animation-slide-bottom-medium" style="z-index: 0 !important;" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300;" data-dahz-id="1536117449815-bdb5e7ae-5408">
        <div class="uk-flex uk-c-flex-stretch uk-width-1-1">
          <div class="uk-width-1-1 uk-padding-remove">
            <div></div>
            <div class="uk-flex-1 uk-position-relative uk-position-z-index">
              <div style="" class="uk-margin">
                <div class="de-textblock-wrapper">
                  <p style="text-align: center"><span style="color: #e61937;">De Interés</span></p>
                </div>
              </div>
              <style>
			@media only screen and ( max-width: 414px ) {
				h3[data-dahz-shortcode-key="1536115681044-505bb940-4f68"] {
					font-size: 32px!important;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 960px ) and ( max-width: 1023px ) {
				h3[data-dahz-shortcode-key="1536115681044-505bb940-4f68"] {
					font-size: inherit;
					line-height: inherit;
				}
			}

			@media only screen and ( min-width: 1024px ) and ( max-width: 1024px ) {
				h3[data-dahz-shortcode-key="1536115681044-505bb940-4f68"] {
					font-size: inherit;
					line-height: inherit;
				}
			}
		</style>
              <h3 style="font-size: 48px; line-height: 1.2; text-align: center;" class="uk-margin de-sc-heading" data-dahz-shortcode-key="1536115681044-505bb940-4f68"> Noticias recientes</h3>
              <div style="" class="uk-margin-medium uk-margin-remove-top">
                <div class="de-textblock-wrapper">
                </div>
              </div>
              <div class="uk-position-relative de-shortcode__wrapper de-shortcode__wrapper--post_slider uk-margin-large uk-margin-remove-top" data-dahz-shortcode-key="1536117493763-86dcb3b5-876b" style="">
                <div class="de-sc-post-slider" data-hover-effect="zoom">
                  <div data-uk-slider="" class="uk-visible-toggle uk-slider-container de-sc-post-slider uk-position-relative uk-slider">
                    <div class="uk-position-relative">
                      <ul class="uk-slider-items uk-grid" data-uk-grid="" style="transform: translateX(0px);">
 <?php 
$query_R = "SELECT * FROM blog ORDER BY fecha DESC LIMIT 8";
$resultado_R = mysql_query($query_R);
while($rowR = mysql_fetch_array($resultado_R))
{
?> 
                        <li class="de-sc-post-slider__item uk-margin-remove-bottom uk-width-1-1 uk-width-1-1@s uk-width-1-1@m uk-width-1-4@l post-36 post type-post status-publish format-standard has-post-thumbnail hentry category-social">
                          <div class="uk-text-left entry-wrapper" style="" data-uk-margin="margin:uk-margin-small"> 
							  
							  <?php if($rowR['categoria'] == 'Blog Sitio'){?> 	
							  <a class="uk-margin-medium de-ratio de-ratio-4-5 uk-first-column" href="noticias/<?php echo $rowR['permalink'];?>"> 
								<?php } else {?>  
							   <a class="uk-margin-medium de-ratio de-ratio-4-5 uk-first-column" target="_blank" href="https://www.facebook.com/MontserratCaballero.Bc/<?php echo $rowR['permalink'];?>"> 
								   <?php } ?>
							  
							  <img width="640" height="427" class="de-ratio-content wp-post-image ds-lazy-image lazy-loaded" alt="blog-06-min" sizes="(max-width: 640px) 100vw, 640px" data-uk-img="" data-src="<?php echo $rowR['imagen'];?>" data-srcset="<?php echo $rowR['imagen'];?>" src="<?php echo $rowR['imagen'];?>"> </a>
                            <div class="de-sc-post-slider__content uk-margin-small uk-first-column">
                              <ul class="uk-flex uk-flex-left de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottomuk-text-uppercase">
                                <li class="uk-width-auto"> <a href="http://dahz.daffyhazan.com/baklon/2018/08/15/" class="uk-link de-post-meta__date"> <?php echo $rowR['mes'];?> <?php echo $rowR['dia'];?>, <?php echo $rowR['anio'];?> </a> </li>
                              </ul>
							  <?php if($rowR['categoria'] == 'Blog Sitio'){?> 	
                              <h5 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" href="noticias/<?php echo $rowR['permalink'];?>"><?php echo $rowR['titulo'];?></a></h5>
							  <?php } else {?>	
							  <h5 class="de-sc-post-slider__item--title uk-margin-remove"><a class="uk-link" target="_blank" href="https://www.facebook.com/MontserratCaballero.Bc/<?php echo $rowR['permalink'];?>"><?php echo $rowR['titulo'];?></a></h5>
							  <?php } ?>
                            </div>
                          </div>
                        </li>
<?php }?> 
                      </ul>
                    </div>
                    <ul class="uk-dotnav uk-margin uk-flex uk-flex-center   ">
                      <li data-uk-slider-item="0" class="uk-active"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="1"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="2"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="3"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="4"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="5"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                      <li data-uk-slider-item="6" class="uk-hidden"> <a href=""> </a>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16" preserveAspectRatio="none">
                          <circle cx="8" cy="8" r="6.215"></circle>
                        </svg>
                      </li>
                    </ul>
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
