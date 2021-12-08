<?php 
get_header(); 
$desc = get_field('page_404', 'options'); 
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
              <span>404</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-bedankt-cntent-cntlr page-404-cntent-cntlr">
  <div class="page-bedankt-cntent-inr">
    <div class="page-bedankt-cntent-img-cntlr">
      <div class="page-bedankt-cntent-img-inr">
          <div class="page-404-cntent-rgt-img inline-bg" style="background-image: url('<?php if( !empty($desc['bg_afbeelding']) ) echo cbv_get_image_src($desc['bg_afbeelding']); ?>');"></div>
           <div class="page-404-xs-img show-sm">
             <?php if( !empty($desc['afbeelding']) ) echo cbv_get_image_tag($desc['afbeelding']); ?>
           </div>
      </div>
    </div>
    <div class="page-bedankt-cntent-desc-cntlr">
      <div class="page-bedankt-cntent-desc-inr ">
        <i class="hide-sm">
          <?php if( !empty($desc['afbeelding']) ) echo cbv_get_image_tag($desc['afbeelding']); ?>
        </i>
        <?php 
          if( !empty($desc['titel']) ) printf('<h1 class="fl-h2 page-bedankt-con-desc-title">%s</h1>', $desc['titel']);
          if( !empty($desc['beschrijving']) ) echo wpautop($desc['beschrijving']); 
        ?>
        <?php if( !empty($desc['knops']) ): ?>
        <div class="page-bedankt-con-item">
          <ul>
            <?php 
              foreach( $desc['knops'] as $knop ):  
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
          <a class="fl-btn fl-btn-angel" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'field'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>