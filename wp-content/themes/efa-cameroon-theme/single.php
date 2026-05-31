<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="text-white"><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white-50"><?php _e( 'Accueil', 'efa-cameroon' ); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="text-white-50"><?php _e( 'Blog', 'efa-cameroon' ); ?></a></li>
            <li class="breadcrumb-item active text-white" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <p class="text-white-50 mt-2"><i class="fa fa-calendar me-1"></i><?php echo get_the_date( 'j F Y' ); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>"
          class="img-fluid rounded shadow mb-4" alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>

        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          if ( $prev ) echo '<a href="' . get_permalink( $prev ) . '" class="btn btn-outline-success btn-sm">&laquo; ' . esc_html( $prev->post_title ) . '</a>';
          if ( $next ) echo '<a href="' . get_permalink( $next ) . '" class="btn btn-outline-success btn-sm">' . esc_html( $next->post_title ) . ' &raquo;</a>';
          ?>
        </div>
      </div>

      <div class="col-lg-4">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
