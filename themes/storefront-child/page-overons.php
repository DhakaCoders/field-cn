<?php
/*Template Name: Overons*/
get_header();
$thisID = get_the_ID();
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

<div class="over-field-con-ctlr">
  <?php
  $showhide_intro = get_field('showhide_intro', $thisID );
  if($showhide_intro): 
    $introsec = get_field('introsec', $thisID );
    if($introsec):
  ?>
  <section class="over-field-intro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="over-field-intro-sec-inr">
            <div class="over-field-intro-pos-rgt hide-md">
              <?php if( !empty($introsec['logo']) ) echo cbv_get_image_tag( $introsec['logo'] ); ?>
            </div>
            <div class="over-field-intro-img-ctlr">
              <div class="over-field-intr-img inline-bg" style="background-image:url(<?php echo !empty($introsec['afbeelding'])?cbv_get_image_src( $introsec['afbeelding'] ):''; ?>);">
                <?php if( !empty($introsec['afbeelding']) ) echo cbv_get_image_tag( $introsec['afbeelding'] ); ?>
              </div>
            </div>
            <div class="over-field-intro-des">
            <?php 
              if( !empty($introsec['titel']) ) printf( '<h3 class="over-field-intro-subtitle fl-h6">%s</h3>', $introsec['titel'] ); 
              if( !empty($introsec['subtitel']) ) printf( '<h2 class="over-field-intro-titlte fl-h1">%s</h2>', $introsec['subtitel'] ); 
              if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] ); 
              $introknop = $introsec['knop'];
              if( is_array( $introknop ) &&  !empty( $introknop['url'] ) ){
                  printf('<a class="fl-btn fl-btn-angel" href="%s" target="%s">%s</a>', $introknop['url'], $introknop['target'], $introknop['title']); 
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
  <?php
  $showhide_intro2 = get_field('showhide_intro2', $thisID );
  if($showhide_intro2): 
    $intro2 = get_field('intro2_sec', $thisID );
    if($intro2):
  ?>
  <section class="process-sec">
    <div class="process-rgt-pos-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-icon.png">
    </div>
    <div class="process-sec-inr">
      <div class="process-img-ctlr">
        <div class="process-img">
          <div class="process-img-lft-ctlr">
            <div class="process-img-lft inline-bg" style="background-image:url('<?php echo !empty($intro2['afbeelding_1'])? cbv_get_image_src( $intro2['afbeelding_1'] ): ''; ?>');"></div>
          </div>
          <div class="process-img-rgt-ctlr">
            <div class="process-img-rgt inline-bg" style="background-image:url('<?php echo !empty($intro2['afbeelding_2'])? cbv_get_image_src( $intro2['afbeelding_2'] ): ''; ?>');"></div>
          </div>
        </div>
      </div>
      <div class="process-des-ctlr">
        <div class="process-des">
          <?php 
            if( !empty($intro2['titel']) ) printf( '<h2 class="process-des-title fl-h2">%s</h2>', $intro2['titel'] );
            if( !empty($intro2['beschrijving']) ) echo wpautop( $intro2['beschrijving'] );
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
  <?php
  $showhide_team = get_field('showhide_team', $thisID );
  if($showhide_team): 
    $team = get_field('teamsec', $thisID );
    if($team):
    $memberobj = $team['select_team'];
    if( empty($memberobj) ){
        $memberobj = get_posts( array(
          'post_type' => 'team',
          'posts_per_page'=> -1,
          'orderby' => 'date',
          'order'=> 'desc',
          'suppress_filters' => false
        ) );  
    }

  ?>
  <?php if( !empty($team['team_bericht']) ): ?>
  <section class="part-of-team-sec">
    <div class="part-of-team-box"></div>
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="part-of-team-sec-inr">
            <div class="part-of-team-des">
              <?php printf( '<h2 class="part-of-team-des-title">%s</h2>', $team['team_bericht'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="over-field-team-sec ">
    <div class="team-red-angle-img">
      <img class="hide-sm" src="<?php echo THEME_URI; ?>/assets/images/cta-lft-img.png">
      <img class="show-sm" src="<?php echo THEME_URI; ?>/assets/images/team-xs-red-angle-img.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-entry-hdr text-center">
            <?php 
              if( !empty($team['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $team['titel'] );
              if( !empty($team['beschrijving']) ) echo wpautop( $team['beschrijving'] ); 
            ?>
          </div>
        </div>
        <?php if($memberobj): ?>
        <div class="col-md-12">
          <div class="over-field-team-sec-inner">
            <div class="team-grid teamSlider">
              <?php 
                foreach( $memberobj as $member ) :
                $imgID = get_post_thumbnail_id($member->ID);
                $teamimg = !empty($imgID)? cbv_get_image_src($imgID): ''; 
                $positie = get_field('positie', $member->ID);
                $link = get_field('link', $member->ID);
              ?>
              <div class="team-grid-item">
                  <div class="team-grd-item-inner">
                    <div class="team-grd-item-img">
                      <!-- <a class="overlay-link" href="#"></a> -->
                      <div class="team-grd-item-img-div inline-bg" style="background-image: url(<?php echo $teamimg; ?>);"></div>
                    </div>
                    <div class="team-grd-item-des">
                      <div class="team-grd-item-heading">
                        <h3 class="fl-h5 team-grd-item-title mHc"><a><?php echo get_the_title($member->ID); ?></a></h3>
                        <?php if( !empty($positie) ) printf('<strong>%s</strong>', $positie); ?>
                      </div>
                    </div>
                  </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>