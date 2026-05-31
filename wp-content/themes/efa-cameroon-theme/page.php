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
            <li class="breadcrumb-item active text-white" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>"
          class="img-fluid rounded shadow mb-4" alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
