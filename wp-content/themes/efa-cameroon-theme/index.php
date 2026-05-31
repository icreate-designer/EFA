<?php get_header(); ?>

<section class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="text-white">
          <?php
          if ( is_category() )      single_cat_title();
          elseif ( is_tag() )       single_tag_title();
          elseif ( is_author() )    the_author();
          elseif ( is_search() )    printf( __( 'Résultats pour : %s', 'efa-cameroon' ), get_search_query() );
          elseif ( is_home() )      _e( 'Actualités', 'efa-cameroon' );
          else                      the_title();
          ?>
        </h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white-50"><?php _e( 'Accueil', 'efa-cameroon' ); ?></a></li>
            <li class="breadcrumb-item active text-white" aria-current="page"><?php _e( 'Blog', 'efa-cameroon' ); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<section class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row g-4">

      <!-- Posts -->
      <div class="col-lg-8">
        <div class="row g-4">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              $cats     = get_the_category();
              $cat_name = $cats ? esc_html( $cats[0]->name ) : '';
              $img_url  = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) : EFA_URI . '/assets/img/5.jpg';
              ?>
              <div class="col-md-6">
                <div class="blog-card">
                  <div class="blog-photo" style="background-image: url('<?php echo esc_url( $img_url ); ?>');">
                    <?php if ( $cat_name ) : ?>
                    <span class="blog-tag"><?php echo $cat_name; ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="blog-body">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none"><h5><?php the_title(); ?></h5></a>
                    <p class="blog-role"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    <div class="blog-info-row">
                      <div class="info-left">
                        <span class="info-icon"><i class="fa fa-calendar"></i></span>
                        <span><?php echo get_the_date( 'j M Y' ); ?></span>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="info-right text-success text-decoration-none"><?php _e( 'Lire →', 'efa-cameroon' ); ?></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>

              <!-- Pagination -->
              <div class="col-12">
                <?php the_posts_pagination( [ 'mid_size' => 2, 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ] ); ?>
              </div>

          <?php else : ?>
              <div class="col-12">
                <p><?php _e( 'Aucun article trouvé.', 'efa-cameroon' ); ?></p>
              </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php else : ?>
          <!-- Default sidebar content -->
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-body">
              <h5 class="fw-bold mb-3"><?php _e( 'Catégories', 'efa-cameroon' ); ?></h5>
              <ul class="list-unstyled">
                <?php wp_list_categories( [ 'show_count' => true, 'title_li' => '' ] ); ?>
              </ul>
            </div>
          </div>
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-body">
              <h5 class="fw-bold mb-3"><?php _e( 'Articles récents', 'efa-cameroon' ); ?></h5>
              <?php
              $recent = new WP_Query( [ 'posts_per_page' => 5 ] );
              if ( $recent->have_posts() ) : echo '<ul class="list-unstyled">';
                  while ( $recent->have_posts() ) : $recent->the_post(); ?>
                  <li class="mb-2"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></li>
                  <?php endwhile;
              echo '</ul>'; wp_reset_postdata(); endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
