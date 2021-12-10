<?php get_header(); ?>
  <section class="breadcrumb-sec hide-sm d-none">
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
                <span><?php the_title(); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="faq-detail-sec-con-cntlr">

    <section class="innerpage-con-wrap">
      <?php if( have_rows('faq_inhoud') ){ ?>
      <article class="default-page-con" id="faq-detail">
        <?php while ( have_rows('faq_inhoud') ) : the_row(); ?>
        <?php 
          if( get_row_layout() == 'introductietekst' ){ 
          $fc_titel = get_sub_field('fc_titel');
          $fc_afbeelding = get_sub_field('fc_afbeelding');
        ?>
        <div class="block">
          <div class="dfp-promo-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block-807">
                    <div class="dfp-promo-module-des">
                      <?php if( !empty($fc_titel) ) printf('<strong class="dfp-promo-module-title fl-h1">%s</strong>', $fc_titel); ?>
                    </div>
                  </div>
                  <div class="dfp-plate-one-img-bx">
                    <div class="dfp-plate-one-img-squre">
                      <img src="<?php echo THEME_URI; ?>/assets/images/dft-squre-icon.png" alt="">
                    </div>
                    <div class="dfp-xs-plate-one-img-squre">
                      <img src="<?php echo THEME_URI; ?>/assets/images/dft-xs-squre-icon.png" alt="">
                    </div>
                    <?php if( !empty($fc_afbeelding) ) echo cbv_get_image_tag($fc_afbeelding); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
          }elseif( get_row_layout() == 'full_afbeelding' ){ 
          $fcafbeelding = get_sub_field('fc_afbeelding');
          $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
        ?>
        <div class="block">
          <div class="dfp-promo-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-plate-one-img-bx">
                    <?php echo $affbeelding_tag; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
      }elseif( get_row_layout() == 'teksteditor' ){ 
      $fc_tekst = get_sub_field('fc_teksteditor');
      ?>
        <div class="block">
          <div class="dfp-text-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block-807">
                    <?php echo wpautop($fc_tekst); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php }elseif( get_row_layout() == 'afbeelding_afbeelding' ){ 
          $afbeelding_1 = get_sub_field('fc_afbeelding_1');
          $afbeelding_2 = get_sub_field('fc_afbeelding_2');
        ?>
        <div class="block">
          <div class="dfp-gallery-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block-807">
                    <div class="gallery-wrap has-inline-bg clearfix">                    
                      <div class="gallery gallery-columns-2">
                        <?php if( !empty($afbeelding_1) ): ?>
                        <figure class="gallery-item">
                          <div class="gallery-icon portrait">
                            <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_1); ?>');"></div>
                            <?php echo cbv_get_image_tag($afbeelding_1); ?>
                          </div>
                        </figure>
                        <?php endif; ?>
                        <?php if( !empty($afbeelding_2) ): ?>
                        <figure class="gallery-item">
                          <div class="gallery-icon portrait">
                            <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_2); ?>');"></div>
                            <?php echo cbv_get_image_tag($afbeelding_2); ?>
                          </div>
                        </figure>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
        $fc_afbeelding = get_sub_field('fc_afbeelding');
        $imgsrc = cbv_get_image_src($fc_afbeelding);
        $imgtag = cbv_get_image_tag($fc_afbeelding);
        $fc_tekst = get_sub_field('fc_tekst');
        $positie_afbeelding = get_sub_field('positie_afbeelding');
        $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
        ?>
        <div class="block">
          <div class="fl-dft-overflow-module">
            <div class="fl-dft-overflow-angle">
              <img src="<?php echo THEME_URI; ?>/assets/images/dft-left-angle.png" alt="">
            </div>
            <div class="fl-dft-overflow-module-out-bg"></div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
                    <div class="fl-dft-overflow-module-in-bg"></div>
                    <div class="fl-dft-lftimg-rgtdes-lft has-inline-bg">
                      <div class="inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                      <div class="fl-dft-lftimg-rgtdes-lft-img">
                        <?php echo $imgtag; ?>
                      </div>
                    </div>
                    <div class="fl-dft-lftimg-rgtdes-rgt">
                      <?php echo wpautop($fc_tekst); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }elseif( get_row_layout() == 'fc_product' ){ 
          $productIDS = get_sub_field('select_producten');
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
        <div class="block">
          <div class="dfp-club-collection-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-club-collection-cntlr">
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
              </div>
            </div>
          </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
        <?php }elseif( get_row_layout() == 'fc_faq' ){ 
          $fc_titel = get_sub_field('fc_titel');
          $faqobj = get_sub_field('select_faq');
          if( empty($faqobj) ){
              $faqobj = get_posts( array(
                'post_type' => 'faq',
                'posts_per_page'=> 2,
                'orderby' => 'date',
                'order'=> 'desc',
                'suppress_filters' => false
              ) );  
          }
        ?>
        <div class="block">
          <div class="dfp-field-fag-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-field-fag-cntlr">
                    <div class="block-807">
                      <?php if( !empty($fc_titel) ) printf( '<h2 class="fl-h2 field-fag-title">%s</h2>', $fc_titel ); ?>
                      <?php if($faqobj): ?>
                      <div class="field-fag">
                        <ul class="reset-list">
                          <?php 
                            foreach( $faqobj as $faq_row ) :
                          ?>
                          <li>
                            <div class="field-faq-accordion">
                              <div class="field-faq-accordion-hdr">
                                <h3 class="field-faq-accordion-title fl-h5"><?php echo get_the_title($faq_row->ID); ?></h3>
                              </div>
                              <div class="field-faq-accordion-desc" style="display: none;">
                                <?php echo wpautop(get_the_excerpt($faq_row->ID)); ?>
                                <div class="field-faq-accordion-btn">
                                  <a href="<?php echo get_the_permalink($faq_row->ID); ?>"><?php _e('LEES MEER', 'field'); ?></a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }elseif( get_row_layout() == 'galerij' ){ 
          $galleries = get_sub_field('fc_afbeeldingen');
          $lightbox = get_sub_field('lightbox');
          $kolom = get_sub_field('kolom');
          if($galleries): 
        ?>
        <div class="block">
          <div class="dfp-gallery-module btm-gallery">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="gallery-wrap clearfix btm-gallery-wrap">
                    <div class="gallery gallery-columns-3 gallery-masonry-items-cntlr BtmGallerySlider">
                      <?php foreach( $galleries as $image ): ?>
                      <figure class="gallery-item gallery-masonry-item">
                        <div class="gallery-icon portrait">
                            <?php 
                              $imgsrc = cbv_get_image_src( $image);
                              if( $lightbox ){
                                echo "<a data-fancybox='gallery' href='{$imgsrc}'>";
                                echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                                echo cbv_get_image_tag( $image);
                                echo "</a>";
                              }else{
                                echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                                echo cbv_get_image_tag( $image);
                              }
                            ?>
                        </div>
                      </figure>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php }elseif( get_row_layout() == 'fc_cta' ){ 
          $fc_titel = get_sub_field('fc_titel');
          $fc_tekst = get_sub_field('fc_tekst');
          $fc_knop = get_sub_field('fc_knop');
        ?>
        <div class="block">
          <div class="dfp-cta-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="cta-ctlr">
                    <div class="cta-module">
                      <div class="cta-module-des-ctlr">
                        <div class="cta-module-des">
                          <?php 
                            if( !empty($fc_titel) ) printf( '<h2 class="cta-module-des-title fl-h2">%s</h2>', $fc_titel );
                            if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
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
          </div>
        </div>

       <?php }elseif( get_row_layout() == 'fc_team' ){ 
          $fc_titel = get_sub_field('titel');
          $fc_tekst = get_sub_field('fc_tekst');
          $memberobj = get_sub_field('select_team');
          if( empty($memberobj) ){
              $memberobj = get_posts( array(
                'post_type' => 'team',
                'posts_per_page'=> -1,
                'orderby' => 'date',
                'order'=> 'asc',
                'suppress_filters' => false
              ) );  
          }
        ?>
        <div class="block">
          <div class="dfp-team-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-team-module-cntlr">
                    <div class="sec-entry-hdr text-center">
                    <?php 
                      if( !empty($fc_titel) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $fc_titel );
                      if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
                    ?>
                    </div>
                    <?php if($memberobj): ?>
                    <div class="dfp-team-sec-cntlr">
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
                                  <h5 class="fl-h5 team-grd-item-title mHc"><a><?php echo get_the_title($member->ID); ?></a></h5>
                                  <?php if( !empty($positie) ) printf('<strong>%s</strong>', $positie); ?>
                                </div>
                              </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }elseif( get_row_layout() == 'fcknop' ){
        $fc_knop = get_sub_field('knop');
        $is_angle = get_sub_field('is_angle');
        $bg_kleur = get_sub_field('background_kleur');
        $tekst_kleur = get_sub_field('tekst_kleur');
        $border_kleur = get_sub_field('border_kleur');
        $btnclass = isset($is_angle[0]) && ($is_angle[0] == 1)?'fl-btn fl-btn-angel':'dft-fl-btn';
        ?> 
        <div class="block">
          <div class="dfp-btn-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-btn-module-ctlr">
                    <ul class="reset-list">
                    <?php
                      if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                        printf('<a class="%s" href="%s" target="%s" data-color="%s" data-bg="%s" data-border="%s">%s</a>', $btnclass, $fc_knop['url'], $fc_knop['target'], $tekst_kleur, $bg_kleur, $border_kleur, $fc_knop['title']); 
                      }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }elseif( get_row_layout() == 'table' ){
        $fc_table = get_sub_field('fc_tafel');
        $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
        ?>
        <div class="block">
          <div class="dfp-table-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block-800">
                    <?php cbv_table($fc_table, $fc_titel); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif( get_row_layout() == 'gap' ){
        $fc_gap = get_sub_field('fc_gap');
        $hide_mobile = get_sub_field('hide_mobile');
        $hide_class = $hide_mobile?' hide-sm':'';
      ?>
        <div class="gap-<?php echo $fc_gap; echo $hide_class; ?>"></div>
      <?php 
        }elseif( get_row_layout() == 'horizontal_line' ){ 
          ?>
          <div class="block">
            <div class="dfp-hr-module">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="block-800">
                      <div class="dfp-hr-module-cntlr">
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php endwhile; ?>
      </article>
      <?php } ?>
    </section>
    <?php 
      $faqterms = get_the_terms(get_the_ID(), 'faq_cat');
      $slugs = array();
      if( !empty($faqterms) ){
        foreach( $faqterms as $faqterm ){
          $slugs[] = $faqterm->slug;
        }
      }
      $query = new WP_Query(array(
        'post_type' => 'faq',
        'posts_per_page'=> 4,
        'post__not_in' => array(get_the_ID()),
        'orderby' => 'date',
        'order'=> 'DESC',
        'tax_query' => array(
          array(
            'taxonomy' => 'faq_cat',
              'field'    => 'slug',
              'terms'    => $slugs,
          )
        )
      ));
      if($query->have_posts()):
        $faqtekst = get_field('faqtekst', 'options');
    ?> 
    <section class="related-faq-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="related-faq-con-cntlr">
              <div class="sec-entry-hdr text-center">
              <?php 
                if( !empty($faqtekst['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $faqtekst['titel']);
                if( !empty($faqtekst['tekst']) ) echo wpautop($faqtekst['tekst']); 
              ?>
              </div>
              <div class="related-faq-field-cntlr">
                <div class="field-fag">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>
  </div>
<?php get_footer(); ?>