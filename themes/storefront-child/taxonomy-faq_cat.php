<?php
get_header();
$pageID = get_id_by_page_template('page-faq.php');
$thisID = get_the_ID();
$term_obj = get_queried_object();
?>
<div class="faq-overview-content-cntlr">
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
                <a href="<?php echo esc_url(home_url('faq')); ?>">
                  <span><?php _e('FAQ', 'field'); ?></span>
                </a>
              </li>
              <li class="active">
                <span><?php echo $term_obj->name; ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-entry-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr-cntlr text-center">
            <?php if( !empty($term_obj->name) ) printf('<h1 class="fl-h2 page-entry-hdr-title">%s</h1>', $term_obj->name); ?>
            <?php if( !empty( $term_obj->description ) ): ?>
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
$terms = get_terms( 'faq_cat', array(
    'hide_empty' => false,
) );
?>
  <section class="faq-overview-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-overview-cntlr">
            <div class="fag-overview-btn hide-sm">
              <ul class="reset-list">
                <li><a href="<?php echo esc_url(home_url('faq')); ?>"><?php _e('Alle', 'field'); ?></a></li>
                <?php 
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ 
                foreach($terms as $term){
                ?>
                <li<?php echo $term_obj->term_id == $term->term_id?' class="active"':''; ?>><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
                <?php 
                  }
                  } 
                ?>
              </ul>
            </div>
            <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
            <div class="xs-page-entry-menu show-sm">
              <ul class="reset-list">
                <li>
                  <a href="#"><?php echo $term_obj->name; ?></a>
                  <ul class="reset-list page-entry-sub-menu">
                    <?php 
                      foreach($terms as $term){ 
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
            <div class="field-fag">
              <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $query = new WP_Query(array(
                  'post_type' => 'faq',
                  'posts_per_page'=> 7,
                  'orderby' => 'date',
                  'order'=> 'DESC',
                  'paged'=>$paged,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'faq_cat',
                      'field' => 'term_id',
                      'terms' => array($term_obj->term_id)
                    )
                  )
                ));
              ?> 
              <?php if($query->have_posts()):?>
              <ul class="reset-list">
                <?php  
                  while($query->have_posts()): $query->the_post(); 
                  global $post;
                ?>
                <li>
                  <div class="field-faq-accordion">
                    <div class="field-faq-accordion-hdr">
                      <h3 class="field-faq-accordion-title fl-h5"><?php the_title(); ?></h3>
                    </div>
                    <div class="field-faq-accordion-desc">
                      <?php the_excerpt(); ?>
                      <div class="field-faq-accordion-btn">
                        <a href="<?php the_permalink(); ?>"><?php _e('LEES MEER', 'field'); ?></a>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php else: ?>
              <div class="col-md-12">
                <div class="notfound"><?php echo no_result_text(); ?></div>
              </div>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <?php if( $query->max_num_pages > 1 ): ?>
        <div class="col-md-12">
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
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>