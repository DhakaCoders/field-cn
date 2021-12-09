<?php
/*Template Name: Clubs*/
get_header();
$thisID = get_the_ID();
$term_obj = get_queried_object();
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

<div class="fld-clubs-page-contents">

  <section class="page-entry-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr-cntlr text-center">
            <?php if( !empty($term_obj->name) ) printf('<h1 class="fl-h2 page-entry-hdr-title">%s</h1>', $term_obj->name); ?>
            <?php if( !empty($term_obj->description) ): ?>
            <div class="page-entry-hdr-desc">
              <?php echo wpautop( $term_obj->description ); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 
$terms = get_terms( 'club_cat', array(
    'hide_empty' => false,
) );
?>
  <section class="fld-club-grids-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
          <div class="fld-catagories-cntlr hide-sm">
            <ul class="clear-fix reset-list">
              <?php 
              $i = 1;
              $term_id = $term_name = '';
              foreach($terms as $term){ 
                $ImgID = get_field('icon', $term);
                if( $i == 1 ){
              ?>
              <li>
                <div class="fld-catg-item">
                  <?php if( !empty($ImgID) ): ?>
                  <div class="fld-catg-item-img"><i><?php echo cbv_get_image_tag($ImgID); ?></i></div>
                  <?php endif; ?>
                  <strong class="category-item-title"><?php echo $term->name; ?></strong>
                  <a href="<?php echo esc_url( home_url('clubs') ); ?>" class="overlay-link"></a>
                </div>
              </li>
              <?php }else{ ?>
               <li<?php echo $term->term_id == $term_obj->term_id?' class="active"':''; ?>>
                <div class="fld-catg-item">
                  <?php if( !empty($ImgID) ): ?>
                  <div class="fld-catg-item-img"><i><?php echo cbv_get_image_tag($ImgID); ?></i></div>
                  <?php endif; ?>
                  <strong class="category-item-title"><?php echo $term->name; ?></strong>
                  <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="overlay-link"></a>
                </div>
              </li>
              <?php } ?>
              <?php $i++; } ?>
            </ul>
          </div>

          <div class="xs-page-entry-menu show-sm">
            <ul class="reset-list">
              <li>
                <a href="#"><?php echo $term_obj->name; ?></a>
                <ul class="reset-list page-entry-sub-menu">
                  <?php
                  foreach($terms as $term){ 
                    $ImgID = get_field('icon', $term);
                    if( $term->term_id != $term_obj->term_id ){
                  ?>
                  <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
                  <?php } ?>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </div>
          <?php } ?>
          <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              'post_type' => 'club',
              'posts_per_page'=> 12,
              'orderby' => 'date',
              'order'=> 'DESC',
              'paged'=>$paged,
              'tax_query' => array(
                array(
                  'taxonomy' => 'club_cat',
                  'fields' => 'term_id',
                  'terms' => array($term_obj->term_id)
                )
              )
            ));
          ?>  
          <div class="fld-club-grids-cntlr">
            <?php if($query->have_posts()):?>
            <ul class="reset-list">
              <?php  
                while($query->have_posts()): $query->the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): news_placeholder();
                $banner = get_field('bannersec', get_the_ID());
              ?>
              <li>
                <div class="fld-club-grid">
                  <div class="fld-club-grid-img-cntlr inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/club-team-grid-dft-bg.png')">
                    <?php if( !empty($banner['logo']) ) echo cbv_get_image_tag($banner['logo']); ?>
                    <div class="show-inline-img-on-hover inline-bg" style="background-image:url('<?php echo $imgsrc; ?>')"></div>
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  </div>
                  <div class="fld-club-grid-desc">
                    <h3 class="fl-h5 fld-club-desc-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php else: ?>
            <div class="col-md-12">
              <div class="notfound"><?php echo no_result_text(); ?></div>
            </div>
            <?php endif; ?>
        </div>
        <?php if( $query->max_num_pages > 1 ): ?>
        <div class="fl-pagination-cntlr">
          <?php
            $big = 999999999; // need an unlikely integer
            $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_next' => true,
              'prev_text' => __('', 'field'),
              'next_text' => __('', 'field'),
              'format'    => '?paged=%#%',
              'current'   => $current,
              'total'     => $query->max_num_pages
            ) );
          ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="fd-link-module-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fd-link-module-sec-inr inline-bg">
            <div class="fd-link-module-sec-desktop hide-xs inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/fd-link-module-sec-bg.jpg);"></div>
            <div class="fd-link-module-sec-xs show-xs inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/fd-link-module-sec-bg-xs.jpg);"></div>
            <div class="fdlms-link">
              <a href="#">
                <span>LATEN WE SAMEN EEN <br>TOPPROJECT STARTEN</span>
                <i>
                  <svg class="right-arrow-white-icon" width="33" height="18" viewBox="0 0 33 18" fill="#fff">
                    <use xlink:href="#right-arrow-white-icon"></use> 
                  </svg>
                </i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>
</div>

<?php get_footer(); ?>