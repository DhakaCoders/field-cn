<?php
/*Template Name: Offerte*/
get_header();
$thisID = get_the_ID();
$customtitle = get_field('titel', $thisID);
$pagetitle = !empty($customtitle)?$customtitle:get_the_title($thisID);
$beschrijving = get_field('beschrijving', $thisID);
$shortcode = get_field('shortcode', $thisID);
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

<div class="offerte-form-sec-cntlr">
  <section class="page-entry-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr-cntlr text-center">
            <?php if( !empty($pagetitle) ) printf('<h1 class="fl-h2 page-entry-hdr-title">%s</h1>', $pagetitle); ?>
            <div class="page-entry-hdr-desc">
              <?php if( !empty($beschrijving) ) echo wpautop( $beschrijving ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if( !empty($shortcode) ): ?>
  <section class="offerte-form-sec-wrp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="offerte-form-block clearfix">
            <div class="offerte-form-con-cntlr">
              <div class="offerte-form-con-inner">
                <div class="offerte-form-wrp clearfix">
                  <div class="wpforms-container">
                    <?php echo do_shortcode( $shortcode ); ?>
                  </div>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
</div>
<?php get_footer(); ?>