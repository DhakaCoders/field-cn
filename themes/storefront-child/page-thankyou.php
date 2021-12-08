<?php 
/*Template Name: Thankyou*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
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

<section class="page-bedankt-cntent-cntlr">
<div class="page-bedankt-cntent-inr">
  <div class="page-bedankt-cntent-img-cntlr">
    <div class="page-bedankt-cntent-img-inr">
      <div class="page-bedankt-cntent-lft-img-ctlr">
        <div class="page-bedankt-cntent-lft-img inline-bg" style="background-image: url('<?php if( !empty($intro['afbeelding_1']) ) echo cbv_get_image_src($intro['afbeelding_1']); ?>');"></div>
      </div>
      <div class="page-bedankt-cntent-rgt-img-ctlr">
        <div class="page-bedankt-xs-img show-sm"><img src="<?php echo THEME_URI; ?>/assets/images/xs-thank-img.png"></div>
        <div class="page-bedankt-cntent-rgt-img inline-bg" style="background-image:url('<?php if( !empty($intro['afbeelding_2']) ) echo cbv_get_image_src($intro['afbeelding_2']); ?>');"></div>
      </div>
    </div>
  </div>
  <div class="page-bedankt-cntent-desc-cntlr">
    <div class="page-bedankt-cntent-desc-inr ">
      <i class="hide-sm"><img src="<?php echo THEME_URI; ?>/assets/images/thank-you.svg"></i>
      <?php if( !empty($intro['titel']) ) printf( '<h1 class="fl-h2 page-bedankt-con-desc-title">%s</h1>', $intro['titel'] ); ?>
      <?php if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] ); ?>
      <?php if( $intro['knops'] ): ?>
      <div class="page-bedankt-con-item">
        <ul>
        <?php 
            foreach( $intro['knops'] as $knop ):  
            $knopp = $knop['knop'];
            if( is_array( $knopp ) &&  !empty( $knopp['url'] ) ){
                printf('<li><a href="%s" target="%s" class="fl-text-btn">%s</a></li>', $knopp['url'], $knopp['target'], $knopp['title']); 
            }
            endforeach; 
        ?>
        </ul>
      </div>
  	  <?php endif; ?>
      <div class="page-bedankt-con-desc-btn">
        <a class="fl-btn fl-btn-angel" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'canoetrip'); ?></a>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer(); ?>