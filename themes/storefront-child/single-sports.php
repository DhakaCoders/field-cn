<?php 
get_header(); 
$thisID = get_the_ID();
?>
<div class="sport-pagina-content-cntlr">
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
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <span><?php _e('Sports', 'field'); ?></span>
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
  <?php 
    $bannerID = get_field('banner', $thisID);
    $sportsID = get_post_thumbnail_id($thisID);
    $banner_imgsrc = !empty($bannerID)? cbv_get_image_src($bannerID): cbv_get_image_src($sportsID);
    if( !empty($banner_imgsrc) ){
  ?>
  <section class="page-banner">
    <div class="page-banner-inner">
      <div class="page-banner-bg inline-bg" style="background-image: url(<?php echo $banner_imgsrc; ?>);"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-bnr-des-ctlr">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>
  <section class="sport-pagina-intro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sport-pagina-intro-cntlr">
            <div class="sport-pagina-intro-hding show-md">
              <h1 class="fl-h1-150"><?php the_title(); ?></h1>
            </div>
            <div class="sport-pagina-intro-img-cntlr">
              <div class="sport-pagina-intro-hding hide-md">
                <h1 class="fl-h1-150"><?php the_title(); ?></h1>
              </div>
              <?php 
                $introsec = get_field('introsec', $thisID );
                if($introsec):
              ?>
              <div class="sport-pagina-intro-img-rgt">
                <div class="sport-pagina-intro-img-rgt-bg inline-bg" style="background-image: url('<?php echo !empty($introsec['afbeelding_1'])?cbv_get_image_src( $introsec['afbeelding_1'] ):''; ?>');">

                </div>
              </div>
              <div class="sport-pagina-intro-img-lft">
                <div class="sport-pagina-intro-img-lft-bg inline-bg" style="background-image: url('<?php echo !empty($introsec['afbeelding_2'])?cbv_get_image_src( $introsec['afbeelding_2'] ):''; ?>');">
                  
                </div>
              </div>
              <?php endif; ?>
            </div>
            <?php 
              if($introsec):
            ?>
            <div class="sport-pagina-intro-desc-cntlr">
              <div class="sport-pagina-intro-desc">
                <?php 
                  if( !empty($introsec['fc_beschrijving']) ) echo wpautop( $introsec['fc_beschrijving'] ); 
                  $introknop = $introsec['knop'];
                  if( is_array( $introknop ) &&  !empty( $introknop['url'] ) ){
                    printf('<div class="sport-pagina-intro-desc-btn"><a class="fl-btn fl-btn-angel" href="%s" target="%s">%s</a></div>', $introknop['url'], $introknop['target'], $introknop['title']); 
                  }
                ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  $showhide_product = get_field('showhide_product', $thisID );
  if($showhide_product): 
    $producten = get_field('producten', $thisID );
    if($producten):
  ?>
  <section class="club-collection-sec ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sport-pagina-club-clcsn-wrp">
            <div class="sec-entry-hdr text-center">
              <?php 
                if( !empty($producten['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $producten['titel'] ); 
                if( !empty($producten['beschrijving']) ) echo wpautop( $producten['beschrijving'] ); 
              ?>
            </div>
          </div>
        </div>
        <?php 
        $productIDS = $producten['select_producten'];
          if( !empty($productIDS) ){
            $count = count($productIDS);
            $pIDS = ( $count > 1 )? $productIDS: $productIDS;
            $pQuery = new WP_Query(array(
              'post_type' => 'product',
              'posts_per_page'=> $count,
              'post__in' => $pIDS,
              'orderby' => 'date',
              'order'=> 'asc',

            ));
                
          }else{
            $pQuery = new WP_Query(array(
              'post_type' => 'product',
              'posts_per_page'=> 4,
              'orderby' => 'date',
              'order'=> 'desc',

            ));
          } 
        if( $pQuery->have_posts() ):
        ?>
        <div class="col-md-12">
          <div class="club-collection-sec-inner">
            <div class="club-collection-grid clubCollectionSlider">
              <?php 
                while($pQuery->have_posts()): $pQuery->the_post(); 
                global $product, $woocommerce, $post;
                $gridtag = cbv_get_image_tag( get_post_thumbnail_id($product->get_id()) );
                if( empty(get_post_thumbnail_id($product->get_id())) ) $gridtag = product_placeholder('tag');
              ?>
              <div class="club-collection-grid-item">
                <div class="clb-cltion-grd-item-inner">
                  <div class="clb-cltion-grd-item-img">
                    <?php echo $gridtag; ?>
                  </div>
                  <div class="clb-cltion-grd-item-bottom-des">
                    <div class="clb-cltion-grd-item-heading">
                      <h3 class="fl-h5 clb-cltion-item-title"><a href="<?php echo get_permalink( $product->get_id() ); ?>"><?php the_title()?></a></h3>
                    </div>
                  </div>
                  <div class="clb-cltion-grd-item-bottom-des-hover-ef">
                    <div class="clb-cltion-grd-item-heading">
                      <h4 class="fl-h5 clb-cltion-item-title"><a href="<?php echo get_permalink( $product->get_id() ); ?>"><?php the_title()?></a></h4>
                    </div> 
                    <div class="clb-cltion-grd-item-des">
                      <?php the_excerpt(); ?>
                      <div class="clb-cltion-item-btn">
                        <a href="<?php echo get_permalink( $product->get_id() ); ?>" class="fl-btn fl-btn-angel"><?php _e('meer info', 'field'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>    
  </section>
  <?php endif; ?>
  <?php endif; ?>
<?php
$showhide_galerij = get_field('showhide_galerij', $thisID );
if($showhide_galerij): 
  $gallerij = get_field('gallerij', $thisID );
  if($gallerij):
?>
  <section class="dfp-gallery-module btm-gallery sport-pagina-gallery">
    <div class="sport-pagina-gallery-bg"></div>
    <div class="sport-pagina-lft-angle-cntlr">
      <img src="<?php echo THEME_URI; ?>/assets/images/sport-pagina-lft-angle.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-entry-hdr text-center">
            <?php 
              if( !empty($gallerij['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $gallerij['titel'] ); 
              if( !empty($gallerij['beschrijving']) ) echo wpautop( $gallerij['beschrijving'] ); 
            ?>
          </div>
          <?php if( !empty($gallerij['galerij']) ): ?>
          <div class="gallery-wrap clearfix btm-gallery-wrap">
            <div class="gallery gallery-columns-3 gallery-masonry-items-cntlr BtmGallerySlider">
              <?php foreach( $gallerij['galerij'] as $galID ): ?>
              <figure class="gallery-item gallery-masonry-item">
                <div class="gallery-icon portrait">
                  <a href="<?php echo cbv_get_image_src( $galID ); ?>" data-fancybox="gallery">
                    <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src( $galID ); ?>');"></div>
                    <?php echo cbv_get_image_tag( $galID ); ?>
                  </a>
                </div>
              </figure>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cta1 = get_field('showhide_cta1', $thisID);
if($showhide_cta1): 
  $cta1 = get_field('cta', 'options');
  if($cta1):
?>
  <section class="cta-sec cta-module-2 sport-pagina-cta-sec">
    <div class="cta-lft-img show-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/cta-left-xs-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-ctlr">
            <div class="cta-module">
              <div class="cta-module-img-ctlr">
                <div class="cta-module-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/cta-img.png">
                </div>
              </div>
              <div class="cta-module-des-ctlr">
                <div class="cta-module-des">
                <?php 
                  if( !empty($cta1['titel']) ) printf('<h2 class="cta-module-des-title fl-h2">%s</h2>', $cta1['titel']); 
                  if( !empty($cta1['beschrijving']) ) echo wpautop($cta1['beschrijving']);
                  if( !empty( $cta1['upload_file'] ) ){
                      printf('<div class="cta-module-btn"><a href=%s" class="fl-btn fl-btn-angel" download>%s</a></div>', $cta1['upload_file'], __('Download', 'field')); 
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cta = get_field('showhide_cta', $thisID);
if($showhide_cta): 
  $cta = get_field('ctasec', $thisID);
  if($cta):
    $fc_knop = $cta['knop'];
?>
  <section class="sport-pagina-cta-sec-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-ctlr">
            <div class="cta-module">
              <div class="cta-module-des-ctlr">
                <div class="cta-module-des">
                  <?php 
                    if( !empty($cta['titel']) ) printf( '<h2 class="cta-module-des-title fl-h2">%s</h2>', $cta['titel'] );
                    if( !empty($cta['beschrijving']) ) echo wpautop( $cta['beschrijving'] ); 
                  ?>
                </div>
              </div>
              <?php 
                if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                  printf('<div class="cta-btn-ctlr"><div class="cta-btn"><a class="fl-btn fl-btn-angel" href="%s" target="%s">%s</a></div></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                }
              ?>
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