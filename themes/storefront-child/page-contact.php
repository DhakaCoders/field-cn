<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$telefoon = get_field('telefoon', 'options');
$opening_tijd = get_field('opening_tijd', 'options');
$adres = get_field('adres', 'options');
$map_url = get_field('map_url', 'options');
$bknop = get_field('btnknop', 'options');
$gmaplink = !empty($map_url)?$map_url:'javascript:void()';
?>
<section class="breadcrumb-sec hide-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-cntlr">
          <ul class="reset-list clearfix">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <span><?php _e('Home', 'field'); ?></span>
              </a>
            </li>
            <li class="active">
              <span><?php the_title(); ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="contact-form-sec-cntlr">
  <section class="contact-form-sec-wrp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-form-block clearfix">
            <div class="contact-form-lft">
              <div class="contact-forn-con-cntlr">
                <div class="contact-form-dsc-wrp">
                  <div class="contact-entry-header">
                    <?php 
                      if( !empty($intro['titel']) ) printf( '<h1 class="cnt-sec-entry-hdr-title fl-h2">%s</h1>', $intro['titel'] ); 
                      if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                    ?>
                  </div>
                </div>
                <div class="contact-form-wrp clearfix">
                  <?php if( !empty($intro['shortcode']) ) echo do_shortcode($intro['shortcode']); ?>
                </div>
              </div>   
            </div>
            <div class="contact-form-rgt">
              <div class="contact-form-info-cntlr">
                <div class="contact-form-info">
                  <div class="contact-info-details-cntlr">
                    <div class="cntct-info-details-inr">
                      <h2 class="contact-form-info-title fl-h5"><?php _e('Contact Info', 'field'); ?></h2>
                      <div class="contact-details">
                        <?php if( !empty($telefoon) ): ?>
                        <div class="cntct-tel cntct-details-col">
                          <a href="tel:<?php echo phone_preg($telefoon); ?>"><?php printf('%s', $telefoon); ?>
                            <i>
                              <svg class="cntct-tel-icon" width="18" height="30" viewBox="0 0 18 30" fill="#E63312">
                                <use xlink:href="#cntct-tel-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </div>
                        <?php endif; ?>
                        <?php if( !empty($adres) ) printf('<div class="cntct-addrs cntct-details-col"><a href="%s">%s</a></div>', $gmaplink,  $adres); ?>
                        <?php if( $opening_tijd ): ?>
                        <div class="cntct-time cntct-details-col">
                          <?php 
                            foreach( $opening_tijd as $opening_tim ): 
                              if( !empty($opening_tim['tekst']) ) printf('<strong>%s</strong>', $opening_tim['tekst']); 
                            endforeach;
                          ?>                        
                        </div>
                        <?php endif; ?>
                        <?php if( is_array($bknop) && !empty($bknop['url']) ) ?>
                        <div class="cntct-btn cntct-details-col">
                          <a href="<?php echo $bknop['url']; ?>" target="<?php echo $bknop['target']; ?>" class="fl-text-btn"><?php printf('%s', $bknop['title']); ?>
                            <i><svg class="btn-right-arrow" width="16" height="9" viewBox="0 0 16 9" fill="#E63312">
                              <use xlink:href="#btn-right-arrow"></use> 
                            </svg></i>
                          </a>                           
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
  </section>
</div>
<?php get_footer(); ?>