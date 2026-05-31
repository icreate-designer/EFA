<?php
/**
 * Projects Archive – with status filter tabs
 */
get_header();

// Allowed filter values
$allowed = [ 'all', 'ongoing', 'completed' ];
$filter  = isset( $_GET['status'] ) && in_array( $_GET['status'], $allowed )
    ? sanitize_key( $_GET['status'] )
    : 'all';

// Build query args
$query_args = [
    'post_type'      => 'efa_project',
    'posts_per_page' => 12,
    'paged'          => max( 1, get_query_var( 'paged' ) ),
    'orderby'        => 'date',
    'order'          => 'DESC',
];

if ( $filter !== 'all' ) {
    $query_args['meta_query'] = [
        [
            'key'     => '_efa_project_status',
            'value'   => $filter,
            'compare' => '=',
        ],
    ];
}

$projects = new WP_Query( $query_args );

// Archive URL helper
$archive_url = get_post_type_archive_link( 'efa_project' );
?>


<!-- PAGE HERO -->
<section class="hero-section py-5 text-white" style="background-image:url('<?php bloginfo('template_directory');?>/assets/img/young-african-boy-drinking-water-community-borehole-hand-pump-young-african-boy-drinking-water-community-172697689.jpg.webp'); background-repeat:no-repeat; background-size:cover; background-attachment:fixed;">
  <div class="container position-relative">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="text-white">Projets & Réalisations</h1>
        <p class="text-white">Des interventions concrètes menées sur le terrain pour créer un impact durable.</p>

        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white-50">
                <?php _e( 'Accueil', 'efa-cameroon' ); ?>
              </a>
            </li>

            <li class="breadcrumb-item active text-white" aria-current="page">
              <?php _e( 'À propos', 'efa-cameroon' ); ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>


<!-- FILTER TABS -->
<div class="project-filter-bar">
  <div class="container">
    <div class="d-flex align-items-center gap-2 flex-wrap">
      <span class="filter-label"><?php _e( 'Filtrer par :', 'efa-cameroon' ); ?></span>

      <a href="<?php echo esc_url( $archive_url ); ?>"
         class="filter-tab <?php echo $filter === 'all' ? 'active' : ''; ?>">
        <?php _e( 'Tous les projets', 'efa-cameroon' ); ?>
      </a>

      <a href="<?php echo esc_url( add_query_arg( 'status', 'ongoing', $archive_url ) ); ?>"
         class="filter-tab filter-tab-ongoing <?php echo $filter === 'ongoing' ? 'active' : ''; ?>">
        <i class="fa-solid fa-circle-dot me-1"></i><?php _e( 'En cours', 'efa-cameroon' ); ?>
      </a>

      <a href="<?php echo esc_url( add_query_arg( 'status', 'completed', $archive_url ) ); ?>"
         class="filter-tab filter-tab-completed <?php echo $filter === 'completed' ? 'active' : ''; ?>">
        <i class="fa-solid fa-circle-check me-1"></i><?php _e( 'Terminés', 'efa-cameroon' ); ?>
      </a>

      <!-- Result count -->
      <span class="ms-auto filter-count">
        <?php
        printf(
            _n( '%s projet', '%s projets', $projects->found_posts, 'efa-cameroon' ),
            '<strong>' . $projects->found_posts . '</strong>'
        );
        ?>
      </span>
    </div>
  </div>
</div>

<!-- PROJECTS GRID -->
<section class="py-5">
  <div class="container">

    <?php if ( $projects->have_posts() ) : ?>
    <div class="row g-4">
      <?php while ( $projects->have_posts() ) : $projects->the_post();
          $partner = get_post_meta( get_the_ID(), '_efa_project_partner', true );
          $period  = get_post_meta( get_the_ID(), '_efa_project_period', true );
          $benef   = get_post_meta( get_the_ID(), '_efa_project_beneficiaires', true );
          $status  = get_post_meta( get_the_ID(), '_efa_project_status', true );
          if ( ! $status ) $status = 'ongoing';

          $label   = get_the_title() . ( $partner ? ' – ' . $partner : '' );
          $img_url = has_post_thumbnail()
              ? get_the_post_thumbnail_url( get_the_ID(), 'large' )
              : EFA_URI . '/assets/img/5.jpg';
      ?>
      <div class="col-md-4">
        <div class="project-card shadow">
          <a href="<?php the_permalink(); ?>" class="project-card-overlay-link" aria-label="<?php the_title_attribute(); ?>"></a>
          <div class="project-bg" style="background-image: url('<?php echo esc_url( $img_url ); ?>');"></div>

          <!-- Status badge always visible on card -->
          <div class="project-status-wrap">
            <?php echo efa_project_status_badge( $status ); ?>
          </div>

          <div class="project-default">
            <div class="title-bar">
              <span class="proj-title"><?php echo esc_html( $label ); ?></span>
              <span class="arrow-link"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>

          <div class="project-hover">
            <?php echo efa_project_status_badge( $status ); ?>
            <h5 class="mt-2"><?php echo esc_html( $label . ( $period ? ' (' . $period . ')' : '' ) ); ?></h5>
            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
            <?php if ( $benef ) : ?>
            <p class="mt-2 mb-0" style="font-size:13px;">
              <i class="fa-solid fa-users me-1"></i>
              <strong><?php echo esc_html( $benef ); ?></strong> <?php _e( 'bénéficiaires', 'efa-cameroon' ); ?>
            </p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-light btn-sm mt-3" style="position:relative;z-index:3;"><?php _e( 'Voir le projet', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- Pagination (preserve filter) -->
    <div class="mt-5 d-flex justify-content-center">
      <?php
      echo paginate_links( [
          'total'   => $projects->max_num_pages,
          'current' => max( 1, get_query_var( 'paged' ) ),
          'format'  => '?paged=%#%',
          'add_args' => $filter !== 'all' ? [ 'status' => $filter ] : [],
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
          'type'    => 'list',
      ] );
      ?>
    </div>

    <?php else : ?>
    <div class="text-center py-5">
      <i class="fa-solid fa-folder-open fa-3x text-muted mb-3 d-block"></i>
      <p class="text-muted">
        <?php
        if ( $filter === 'ongoing' )        _e( 'Aucun projet en cours pour le moment.', 'efa-cameroon' );
        elseif ( $filter === 'completed' )  _e( 'Aucun projet terminé pour le moment.', 'efa-cameroon' );
        else                                _e( 'Aucun projet trouvé.', 'efa-cameroon' );
        ?>
      </p>
      <?php if ( $filter !== 'all' ) : ?>
      <a href="<?php echo esc_url( $archive_url ); ?>" class="btn btn-success-gradient mt-2">
        <?php _e( 'Voir tous les projets', 'efa-cameroon' ); ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>