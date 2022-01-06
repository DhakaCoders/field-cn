  <?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $fb_url = get_field('facebook_url', 'options');
  $inst_url = get_field('instagram_url', 'options');
  $telefoon = get_field('telefoon', 'options');
  $adres = get_field('adres', 'options');
  $map_url = get_field('map_url', 'options');
  $gmaplink = !empty($map_url)?$map_url:'javascript:void()';
  $email = get_field('emailadres', 'options');
  $btw = get_field('btw', 'options');
  $appknop = get_field('app_btnknop', 'options');
  $nieuw = get_field('nieuwsec', 'options');
  $copyright_text = get_field('copyright_text', 'options');
  $is_hide_niews = isset($nieuw['showhideniews']) && $nieuw['showhideniews']? true:false;
  $ftclass = !$is_hide_niews?' ft-col-increase':'';
?>
  <footer class="footer-wrp ">
    <div class="ftr-top-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top">
              <div class="ftr-top-left<?php echo $ftclass; ?>">
                <div class="ftr-top-col ftr-top-col-1">
                  <div class="ftr-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                      <?php echo $logo_tag; ?>
                    </a>
                  </div>
                  <div class="ftr-socials">
                    <ul class="reset-list">
                      <?php if( !empty($fb_url) ): ?>
                        <li>
                          <a href="<?php echo $fb_url; ?>" target="_blank">
                            <i>
                              <svg class="ftr-facebook-icon" width="24" height="25" viewBox="0 0 24 25" fill="#7D8D98">
                                <use xlink:href="#ftr-facebook-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </li>
                        <?php endif; ?>
                        <?php if( !empty($inst_url) ): ?>
                        <li>
                          <a href="<?php echo $inst_url; ?>" target="_blank">
                            <i>
                              <svg class="ftr-instagram-icon" width="24" height="25" viewBox="0 0 24 25" fill="#7D8D98">
                                <use xlink:href="#ftr-instagram-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </li>
                        <?php endif; ?>
                      </ul>
                  </div>
                </div>
              </div>
              
              <div class="ftr-top-mdl<?php echo $ftclass; ?>">
                <div class="ftr-top-col ftr-top-col-2">
                  <h6 class="ftr-col-title fl-h6"><?php _e('Navigatie', 'field'); ?></h6>
                  <div class="ftr-col-menu">
                    <?php 
                      $fmenuOptions = array( 
                          'theme_location' => 'cbv_fta_menu', 
                          'menu_class' => 'reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $fmenuOptions );
                    ?>
                  </div>
                </div>

                <div class="ftr-top-col ftr-top-col-3<?php echo $ftclass; ?>">
                  <h6 class="ftr-col-title fl-h6"><?php _e('Account', 'field'); ?></h6>
                  <div class="ftr-col-menu">
                    <?php 
                      $fmenuOptions2 = array( 
                          'theme_location' => 'cbv_ftb_menu', 
                          'menu_class' => 'reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $fmenuOptions2 );
                    ?>
                  </div>
                </div>

                <div class="ftr-top-col ftr-top-col-4<?php echo $ftclass; ?>">
                  <h6 class="ftr-col-title fl-h6"><?php _e('Contact', 'field'); ?></h6>
                  <div class="ftr-col-desc">
                    <?php 
                      if( !empty($telefoon) ) printf('<div class="ftr-col-tel"><a href="tel:%s">%s</a></div>', phone_preg($telefoon), $telefoon); 
                      if( !empty($email) ) printf('<div class="ftr-col-mail"><a href="mailto:%s">%s</a></div>', $email, $email); 
                      if( !empty($btw) ) printf('<div class="ftr-col-btw"><span>%s: </span><strong>%s</strong></div>', __('BTW', 'field'),  $btw); 
                      if( !empty($adres) ) printf('<div class="ftr-col-address"><a href="tel:%s">%s</a></div>', $gmaplink,  $adres); 
                      if( is_array($appknop) && !empty($appknop['url']) ){
                        printf('<div class="ftr-angle-btn"><a class="fl-btn fl-btn-angel" href="%s" target="%s">%s</a></div>', $appknop['url'], $appknop['target'], $appknop['title']); 
                      }
                    ?>
                  </div>
                </div>
              </div>
              <?php if( $is_hide_niews ): ?>
              <div class="ftr-top-rgt">
                <div class="ftr-top-col ftr-top-col-5">
                  <?php 
                    if( !empty($hbanner['toptitel']) ) printf( '<h6 class="ftr-col-title fl-h6">%s</h6>', $hbanner['toptitel'] );  
                  ?>
                  <div class="ftr-newsletter">
                    <form>
                      <input type="email" name="" placeholder="E-mailadres">
                      <div class="ftr-newsletter-btn">
                        <button>
                          <i>
                            <svg class="square-red-icon" width="11" height="10" viewBox="0 0 11 10" fill="#E63312">
                              <use xlink:href="#square-red-icon"></use> 
                            </svg>
                          </i>
                          Inschrijven
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="ftr-btm-wrap">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-cntlr">
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
            </div>
            <div class="ftr-developed-by">
              <p><?php _e('Website ontwerp door', 'field'); ?> <a target="_blank" href="#">Conversal</a></p>
            </div>
          </div>
        </div>
      </div>
      </div> 
    </div> 
  </footer>    
</div>
<?php wp_footer(); ?>
</body>
</html>