<?php
/*Template Name: Offerte*/
get_header();
$thisID = get_the_ID();
$banner = get_field('bannersec', $thisID);
?>
<div class="club-pagina-details-con-ctlr">

  <section class="page-banner">
    <div class="page-banner-squre-icon-ctlr hide-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/page-banner-squre-icon.png" alt="">
    </div>
    <div class="page-banner-inner">
      <div class="breadcrumb-sec hide-sm">
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
                  <li>
                    <a href="<?php echo esc_url(home_url('clubs')); ?>">
                      <span><?php _e('Club', 'field'); ?></span>
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
      </div>
      <?php if( !empty($banner) ): ?>
      <div class="page-banner-bg inline-bg" style="background-image: url(<?php echo !empty($banner['afbeelding'])?cbv_get_image_src($banner['afbeelding']):''; ?>);"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-bnr-des-ctlr">
              <div class="page-bnr-des">
              <?php 
                if( !empty($banner['titel']) ) printf('<h1 class="page-bnr-title">%s</h1>', $banner['titel']); 
                if( !empty($banner['subtitel']) ) printf('<h3 class="page-bnr-subtitle fl-h6">%s</h3>', $banner['subtitel']); 
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
<?php
$showhide_galerij = get_field('showhide_galerij', $thisID );
if($showhide_galerij): 
  $introsec = get_field('introsec', $thisID );
  if($introsec):
?>
  <section class="customer-service-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="customer-service-sec-inr">
            <div class="customer-service-lft">
              <div class="sec-entry-hdr">
                <?php 
                  if( !empty($introsec['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $introsec['titel'] ); 
                  if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] ); 
                ?>
              </div>
            </div>
            <?php if( !empty($introsec['galerij']) ): ?>
            <div class="customer-service-rgt hide-sm">
              <div class="fl-prev-next">
                <span class="fl-prev">
                  <i>
                    <svg class="slider-lft-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98"  fill-opacity="0.32">
                      <use xlink:href="#slider-lft-arrow-svg"></use> 
                    </svg>
                  </i>
                </span>
                <span class="fl-next">
                  <i>
                    <svg class="slider-rgt-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98"  fill-opacity="0.32">
                      <use xlink:href="#slider-rgt-arrow-svg"></use> 
                    </svg>
                  </i>
                </span>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="customer-service-slider-ctlr">
      <?php if( !empty($introsec['galerij']) ): ?>
      <div class="customer-service-slider customerServiceSlider">
        <?php foreach( $introsec['galerij'] as $galID ): ?>
        <div class="customer-service-slider-item">
          <div class="customer-service-slider-item-img inline-bg" style="background-image:url(<?php echo cbv_get_image_src( $galID ); ?>);">
            <?php echo cbv_get_image_tag( $galID ); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="customer-service-rgt show-sm">
        <div class="fl-prev-next">
          <span class="fl-prev">
            <i>
              <svg class="slider-lft-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98"  fill-opacity="0.32">
                <use xlink:href="#slider-lft-arrow-svg"></use> 
              </svg>
            </i>
          </span>
          <span class="fl-next">
            <i>
              <svg class="slider-rgt-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98"  fill-opacity="0.32">
                <use xlink:href="#slider-rgt-arrow-svg"></use> 
              </svg>
            </i>
          </span>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_tekst2 = get_field('showhide_tekst2', $thisID );
if($showhide_tekst2): 
  $tekstsec = get_field('tekstsec', $thisID );
  if($tekstsec):
?>
  <section class="two-plat-text-module-sec">
    <div class="red-angle hide-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/red-angel.png">
    </div>
    <div class="xs-red-angle show-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/xs-red-angle.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="two-plat-text-module-sec-inr">
            <div class="sec-entry-hdr">
              <?php if( !empty($tekstsec['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $tekstsec['titel'] ); ?>
            </div>
            <div class="dfp-two-des-module">
              <?php if( !empty($tekstsec['tekst_1']) ): ?>
              <div class="dfp-two-des-col">
                <?php echo wpautop( $tekstsec['tekst_1'] ); ?>
              </div>
              <?php 
              endif;
              if( !empty($tekstsec['tekst_2']) ):
              ?>
              <div class="dfp-two-des-col">
                <?php echo wpautop( $tekstsec['tekst_2'] ); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>  
</div>

<?php get_footer(); ?>