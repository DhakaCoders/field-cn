<?php get_header(); ?>
<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
  $display_video = $hbanner['display_video']? true: false; 
  $is_video = !empty($hbanner['upload_video']) && $display_video?' has-vdo':''; 
?>
  <section class="hm-banner<?php echo $is_video; ?>">
    <div class="hm-bnr-icon hide-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-icon.png">
    </div>
    <div class="hm-banner-bg-black"></div>
    <?php if( !empty($hbanner['upload_video']) && $display_video ): ?>
    <div class="hm-video-cntlr">
      <video id="bnr-vdo" autoplay muted loop>
        <source src="<?php echo $hbanner['upload_video']; ?>" type="video/mp4">
      </video>
    </div>
    <?php else: ?>
    <div class="hm-bnr-slider-ctlr">
      <?php if( !empty($hbanner['slider']) ): ?>
      <div class="hm-bnr-slider hmBnrSlider">
        <?php foreach( $hbanner['slider'] as $slide ): ?>
        <div class="hm-bnr-slider-item">
          <div class="hm-banner-bg inline-bg" style="background-image:url(<?php echo !empty($slide['afbeelding'])?cbv_get_image_src($slide['afbeelding']):''; ?>);"></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-banner-des-cntlr">
            <div class="hm-banner-des">
              <?php 
              if( !empty($hbanner['toptitel']) ) printf( '<h2 class="hm-bnr-sub-title fl-h6">%s</h2>', $hbanner['toptitel'] ); 
              if( !empty($hbanner['titel']) ) printf( '<h1 class="hm-bnr-title fl-h1">%s</h1>', $hbanner['titel'] ); 
              ?>
              <?php if( !empty($hbanner['dtp_beschrijving']) ): ?>
              <div class="hm-banner-des-inr hide-sm">
                <?php echo wpautop( $hbanner['dtp_beschrijving'] ); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($hbanner['mobiel_beschrijving']) ): ?>
              <div class="hm-banner-des-inr show-sm">
                <?php echo wpautop( $hbanner['mobiel_beschrijving'] ); ?>
              </div>
              <?php endif; ?>
              <?php 
                $hknop_1 = $hbanner['knop'];
                if( is_array( $hknop_1 ) &&  !empty( $hknop_1['url'] ) ){
                    printf('<div class="hm-bnr-btn"><a class="fl-btn fl-btn-angel" href="%s" target="%s">%s</a></div>', $hknop_1['url'], $hknop_1['target'], $hknop_1['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php 
  $usps = get_field('usps', 'options');
  if( $usps ): 
?>
  <section class="usp-sec hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="usp-sec-inr">
            <div class="usp-grd">
              <ul class="reset-list">
                <?php foreach( $usps as $usp ): ?>
                <li>
                  <div class="usp-grd-item">
                    <div class="usp-grd-item-des">
                      <i><?php if( !empty($usp['icon']) ) echo cbv_get_image_tag($usp['icon']); ?></i>
                      <?php if( !empty($usp['titel']) ) printf('<h2 class="usp-grd-des-title">%s</h2>', $usp['titel']); ?>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php
$showhidesports = get_field('showhidesports', HOMEID);
if($showhidesports): 
  $sportssec = get_field('sportssec', HOMEID);
  if($sportssec):
    $sportobj = $sportssec['select_sports'];
    if( empty($sportobj) ){
        $sportobj = get_posts( array(
          'post_type' => 'sports',
          'posts_per_page'=> -1,
          'orderby' => 'date',
          'order'=> 'desc',
          'suppress_filters' => false
        ) );  
    }
    if($sportobj):
?>
  <section class="msnry-sec ">
    <div class="msnry-grd msnrySlider">
      <?php 
      foreach( $sportobj as $sport_row ) : 
        $simgID = get_post_thumbnail_id($sport_row->ID);
        $simgtag = !empty($simgID)? cbv_get_image_tag($simgID): '';
        $is_not_img = empty($simgID)? ' reb-bg': '';
      ?>
      <div class="msnry-grd-item<?php echo $is_not_img; ?>">
        <div class="msnry-grd-item-inr">
          <div class="msnry-grd-item-img-ctlr">
            <?php echo empty($simgID)?'<div class="msnry-grd-item-red"></div>':'';?>
            <div class="msnry-grd-item-img">
              <?php echo $simgtag; ?>
            </div>
            <div class="msnry-grd-item-img-des">
              <h2 class="msnry-grd-img-title fl-h5"><?php echo get_the_title($sport_row->ID); ?></h2>
            </div>
          </div>
          <div class="msnry-grd-item-des">
            <div class="msnry-grd-item-des-inr">
              <h2 class="msnry-grd-des-title fl-h5"><a href="<?php echo get_the_permalink($sport_row->ID); ?>"><?php echo get_the_title($sport_row->ID); ?></a></h2>
              <?php echo wpautop($sport_row->post_excerpt); ?>
              <a href="<?php echo get_the_permalink($sport_row->ID); ?>"><?php _e('Meer info', 'field'); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
  <?php endif; ?>
<?php
$showhideprocess = get_field('showhideprocess', HOMEID);
if($showhideprocess): 
  $proceses = get_field('proceses', HOMEID);
  if($proceses):
?>
  <section class="hm-grd-sec ">
    <div class="hm-grd-rgt-sqr-box"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-grd-sec-inr">
            <ul class="reset-list">
              <?php 
                foreach( $proceses as $process ): 
              ?>
              <li>
                <div class="hm-grd-item">
                  <div class="hm-grd-des">
                  <?php 
                    if( !empty($process['titel']) ) printf('<h2 class="hm-grd-des-title fl-h2 mHc">%s</h2>', $process['titel']); 
                    if( !empty($process['subtitel']) ) printf('<h3 class="hm-grd-des-sub-title fl-h6 mHc1">%s</h3>', $process['subtitel']); 
                    if( !empty($process['beschrijving']) ) echo wpautop($process['beschrijving']); 
                  ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_intro = get_field('showhide_intro', HOMEID);
if($showhide_intro): 
  $introsec = get_field('introsec', HOMEID);
  if($introsec):
?>
  <section class="process-sec ">
    <div class="process-rgt-pos-img">
      <img src="<?php echo THEME_URI; ?>/assets/images/field-logo.png">
    </div>
    <div class="process-xs-box"></div>
    <div class="process-sec-inr">
      <div class="process-img-ctlr">
        <div class="process-img">
          <div class="process-img-lft-ctlr">
            <?php if(!empty($introsec['afbeelding_1'])): ?>
            <div class="process-img-lft inline-bg" style="background-image:url('<?php echo cbv_get_image_src( $introsec['afbeelding_1'] ); ?>');"></div>
            <?php endif; ?>
          </div>
          <div class="process-img-rgt-ctlr">
            <div class="process-xs-icon show-sm">
              <img src="<?php echo THEME_URI; ?>/assets/images/process-xs-icon.png">
            </div>
            <?php if(!empty($introsec['afbeelding_2'])): ?>
            <div class="process-img-rgt inline-bg" style="background-image:url('<?php echo cbv_get_image_src( $introsec['afbeelding_2'] ); ?>');"></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="process-des-ctlr">
        <div class="process-des">
        <?php 
          if( !empty($introsec['titel']) ) printf( '<h2 class="process-des-title fl-h2">%s</h2>', $introsec['titel'] );
          if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] ); 
        ?>
        </div>
      </div>
    </div>
  </section>
  <?php if( !empty($introsec['bottom_tekst']) ): ?>
  <section class="part-of-team-sec ">
    <div class="part-of-team-box hide-sm"></div>
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="part-of-team-sec-inr">
            <div class="part-of-team-des">
              <?php printf( '<h2 class="part-of-team-des-title">%s</h2>', $introsec['bottom_tekst'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cta = get_field('showhide_cta', HOMEID);
if($showhide_cta): 
  $cta = get_field('cta', 'options');
  if($cta):
?>
  <section class="cta-sec cta-module-2 ">
    <div class="cta-lft-img hide-sm">
      <img src="<?php echo THEME_URI; ?>/assets/images/cta-lft-img.png">
    </div>
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
                  if( !empty($cta['titel']) ) printf('<h2 class="cta-module-des-title fl-h2">%s</h2>', $cta['titel']); 
                  if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']);
                  if( !empty( $cta['upload_file'] ) ){
                      printf('<div class="cta-module-btn"><a href=%s" class="fl-btn fl-btn-angel" download>%s</a></div>', $cta['upload_file'], __('Download', 'field')); 
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
$showhide_team = get_field('showhide_team', HOMEID);
if($showhide_team): 
  $team = get_field('teamsec', HOMEID);
  if($team):
    $teamobj = $team['select_club'];
    if( empty($teamobj) ){
        $teamobj = get_posts( array(
          'post_type' => 'club',
          'posts_per_page'=> 5,
          'orderby' => 'date',
          'order'=> 'asc',
          'suppress_filters' => false
        ) );  
    }
?>
  <section class="clubs-team-sec ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="clubs-team-sec-inr">
            <div class="clubs-team-lft">
              <div class="sec-entry-hdr">
                <?php 
                  if( !empty($team['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $team['titel']);
                  if( !empty($team['beschrijving']) ) echo wpautop($team['beschrijving']); 
                ?>
              </div>
            </div>
            <?php if($teamobj): ?>
            <div class="clubs-team-rgt hide-sm">
              <div class="fl-prev-next">
                <span class="fl-prev">
                  <i>
                    <svg class="slider-lft-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98" fill-opacity="0.32">
                      <use xlink:href="#slider-lft-arrow-svg"></use> 
                    </svg>
                  </i>
                </span>
                <span class="fl-next">
                  <i>
                    <svg class="slider-rgt-arrow-svg" width="44" height="24" viewBox="0 0 44 24" fill="#7D8D98" fill-opacity="0.32">
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
    <?php if($teamobj): ?>
    <div class="clubs-team-slider-ctlr">
      <div class="clubs-team-grds clubsTeamSlider">
        <?php 
        foreach( $teamobj as $team_row ) : 
          $timgID = get_post_thumbnail_id($team_row->ID);
          $timgtag = !empty($timgID)? cbv_get_image_tag($timgID): club_placeholder();
          $banner = get_field('bannersec', $team_row->ID);
        ?>
        <div class="clubs-team-grd">
          <div class="clubs-team-grd-item">
            <div class="clubs-team-grd-img">
              <?php echo $timgtag; ?>
            </div>
            <div class="clubs-team-grd-des">
              <a href="<?php echo get_the_permalink($team_row->ID); ?>" class="overlay-link"></a>
              <div class="clubs-team-grd-des-inr">
                <div class="clubs-team-logo">
                  <a href="<?php echo get_the_permalink($team_row->ID); ?>"><?php if( !empty($banner['logo']) ) echo cbv_get_image_tag($banner['logo']); ?></a>
                </div>
                <div class="clubs-team-name">
                  <h3 class="clubs-team-name-title fl-h5"><a href="<?php echo get_the_permalink($team_row->ID); ?>"><?php echo get_the_title($team_row->ID); ?></a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </section>
<?php endif; ?>
<?php endif; ?>

<?php
$showhide_product = get_field('showhide_product', HOMEID);
if($showhide_product): 
  $products = get_field('products', HOMEID);
  if($products):
    $productIDS = $products['select_producten'];
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
        'posts_per_page'=> 5,
        'orderby' => 'date',
        'order'=> 'desc',

      ));
    } 
?>
  <section class="club-collection-sec ">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sec-entry-hdr text-center">
            <?php 
              if( !empty($products['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $products['titel']);
              if( !empty($products['beschrijving']) ) echo wpautop($products['beschrijving']); 
            ?>
            </div>
          </div>
          <?php if( $pQuery->have_posts() ): ?>
          <div class="col-md-12">
            <div class="club-collection-sec-inner">
              <div class="club-collection-grid clubCollectionSlider">
              <?php 
                while($pQuery->have_posts()): $pQuery->the_post(); 
                global $product, $woocommerce, $post;
                $gridtag = cbv_get_image_tag( get_post_thumbnail_id($product->get_id()) );
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
$ftcta = get_field('ftcta', 'options');
if($ftcta):
?>
  <section class="fd-link-module-sec ">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="fd-link-module-sec-inr inline-bg">
              <div class="fd-link-module-sec-desktop hide-xs inline-bg" style="background: url(<?php echo !empty($ftcta['afbeelding'])? cbv_get_image_src( $ftcta['afbeelding'] ): ''; ?>);"></div>
              <div class="fd-link-module-sec-xs show-xs inline-bg" style="background: url(<?php echo !empty($ftcta['mobiel_afbeelding'])? cbv_get_image_src( $ftcta['mobiel_afbeelding'] ): ''; ?>);"></div>
              <?php 
                $ftknop = $ftcta['knop'];
                if( is_array( $ftknop ) &&  !empty( $ftknop['url'] ) ){
              ?>
              <div class="fdlms-link">
                <?php 
                  printf('<a href="%s" target="%s">', $ftknop['url'], $ftknop['target']);
                  printf('<span>%s</span>', wp_specialchars_decode($ftknop['title']));
                ?>
                  <i>
                    <svg class="right-arrow-white-icon" width="33" height="18" viewBox="0 0 33 18" fill="#fff">
                      <use xlink:href="#right-arrow-white-icon"></use> 
                    </svg>
                  </i>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
    </div>    
  </section>
  <?php endif; ?>
<?php get_footer(); ?>




