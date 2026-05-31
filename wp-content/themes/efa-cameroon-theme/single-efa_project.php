<?php
/**
 * Single Project Template – EFA Cameroon
 * Used exclusively for efa_project posts (never for blog posts).
 */
get_header();

while ( have_posts() ) : the_post();

    $partner = get_post_meta( get_the_ID(), '_efa_project_partner', true );
    $period  = get_post_meta( get_the_ID(), '_efa_project_period', true );
    $benef   = get_post_meta( get_the_ID(), '_efa_project_beneficiaires', true );
    $status  = get_post_meta( get_the_ID(), '_efa_project_status', true );
    if ( ! $status ) $status = 'ongoing';

    $img_url = has_post_thumbnail()
        ? get_the_post_thumbnail_url( get_the_ID(), 'full' )
        : EFA_URI . '/assets/img/5.jpg';

    // Status label map (same as badge helper but we need the label text separately)
    $status_labels = [
        'ongoing'   => __( 'En cours',  'efa-cameroon' ),
        'completed' => __( 'Terminé',   'efa-cameroon' ),
        'planned'   => __( 'Planifié',  'efa-cameroon' ),
        'suspended' => __( 'Suspendu',  'efa-cameroon' ),
    ];
    $status_label = isset( $status_labels[ $status ] ) ? $status_labels[ $status ] : $status_labels['ongoing'];

    // Related projects (same domain/category, exclude current)
    $domaines  = wp_get_post_terms( get_the_ID(), 'efa_domaine', [ 'fields' => 'ids' ] );
    $related_args = [
        'post_type'      => 'efa_project',
        'posts_per_page' => 3,
        'post__not_in'   => [ get_the_ID() ],
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];
    if ( ! is_wp_error( $domaines ) && ! empty( $domaines ) ) {
        $related_args['tax_query'] = [[
            'taxonomy' => 'efa_domaine',
            'field'    => 'term_id',
            'terms'    => $domaines,
        ]];
    }
    $related = new WP_Query( $related_args );
?>

<!-- ═══ PROJECT HERO BANNER ═══ -->
<section class="project-detail-hero" style="background-image: url('<?php echo esc_url( $img_url ); ?>');">
  <div class="project-detail-hero-overlay"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row justify-content-start align-items-end" style="min-height:420px; padding-bottom:48px;">
      <div class="col-lg-8">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
          <ol class="breadcrumb project-breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Accueil', 'efa-cameroon' ); ?></a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( get_post_type_archive_link( 'efa_project' ) ); ?>"><?php _e( 'Projets', 'efa-cameroon' ); ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>

        <!-- Status badge -->
        <?php echo efa_project_status_badge( $status ); ?>

        <!-- Title -->
        <h1 class="project-detail-title mt-3"><?php the_title(); ?></h1>

        <!-- Quick meta strip -->
        <div class="project-detail-meta-strip mt-3">
          <?php if ( $partner ) : ?>
          <span class="meta-chip">
            <i class="fa-solid fa-handshake me-1"></i>
            <?php echo esc_html( $partner ); ?>
          </span>
          <?php endif; ?>
          <?php if ( $period ) : ?>
          <span class="meta-chip">
            <i class="fa-solid fa-calendar-days me-1"></i>
            <?php echo esc_html( $period ); ?>
          </span>
          <?php endif; ?>
          <?php if ( $benef ) : ?>
          <span class="meta-chip">
            <i class="fa-solid fa-users me-1"></i>
            <?php echo esc_html( $benef ); ?> <?php _e( 'bénéficiaires', 'efa-cameroon' ); ?>
          </span>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ═══ PROJECT BODY ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">

      <!-- Main content -->
      <div class="col-lg-8">

        <!-- Excerpt / intro -->
        <?php if ( has_excerpt() ) : ?>
        <p class="project-detail-intro"><?php echo esc_html( get_the_excerpt() ); ?></p>
        <?php endif; ?>

        <!-- Full content (editor content) -->
        <div class="project-detail-content">
          <?php the_content(); ?>
        </div>

        <!-- Pagination between projects -->
        <hr class="my-5">
        <div class="d-flex justify-content-between flex-wrap gap-2">
          <?php
          $prev = get_previous_post( false, '', '', 'efa_project' );
          $next = get_next_post( false, '', '', 'efa_project' );
          if ( $prev ) : ?>
            <a href="<?php echo get_permalink( $prev ); ?>" class="btn btn-outline-success btn-sm">
              <i class="fa fa-arrow-left me-1"></i> <?php echo esc_html( $prev->post_title ); ?>
            </a>
          <?php endif;
          if ( $next ) : ?>
            <a href="<?php echo get_permalink( $next ); ?>" class="btn btn-outline-success btn-sm ms-auto">
              <?php echo esc_html( $next->post_title ); ?> <i class="fa fa-arrow-right ms-1"></i>
            </a>
          <?php endif; ?>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="project-detail-sidebar">

          <!-- Project info card -->
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-header project-sidebar-header">
              <h5 class="mb-0 fw-bold"><?php _e( 'Informations du projet', 'efa-cameroon' ); ?></h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled project-info-list">

                <li>
                  <span class="info-icon-wrap"><i class="fa-solid fa-circle-dot"></i></span>
                  <div>
                    <small class="text-muted d-block"><?php _e( 'Statut', 'efa-cameroon' ); ?></small>
                    <?php echo efa_project_status_badge( $status ); ?>
                  </div>
                </li>

                <?php if ( $partner ) : ?>
                <li>
                  <span class="info-icon-wrap"><i class="fa-solid fa-handshake"></i></span>
                  <div>
                    <small class="text-muted d-block"><?php _e( 'Partenaire financeur', 'efa-cameroon' ); ?></small>
                    <strong><?php echo esc_html( $partner ); ?></strong>
                  </div>
                </li>
                <?php endif; ?>

                <?php if ( $period ) : ?>
                <li>
                  <span class="info-icon-wrap"><i class="fa-solid fa-calendar-days"></i></span>
                  <div>
                    <small class="text-muted d-block"><?php _e( 'Période', 'efa-cameroon' ); ?></small>
                    <strong><?php echo esc_html( $period ); ?></strong>
                  </div>
                </li>
                <?php endif; ?>

                <?php if ( $benef ) : ?>
                <li>
                  <span class="info-icon-wrap"><i class="fa-solid fa-users"></i></span>
                  <div>
                    <small class="text-muted d-block"><?php _e( 'Bénéficiaires', 'efa-cameroon' ); ?></small>
                    <strong><?php echo esc_html( $benef ); ?></strong>
                  </div>
                </li>
                <?php endif; ?>

                <?php
                // Domain terms
                $terms = get_the_terms( get_the_ID(), 'efa_domaine' );
                if ( $terms && ! is_wp_error( $terms ) ) : ?>
                <li>
                  <span class="info-icon-wrap"><i class="fa-solid fa-tags"></i></span>
                  <div>
                    <small class="text-muted d-block"><?php _e( "Domaine d'intervention", 'efa-cameroon' ); ?></small>
                    <div class="mt-1">
                      <?php foreach ( $terms as $term ) : ?>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="badge bg-success-subtle text-success text-decoration-none me-1">
                          <?php echo esc_html( $term->name ); ?>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </li>
                <?php endif; ?>

              </ul>
            </div>
          </div>

          <!-- Back to projects -->
          <a href="<?php echo esc_url( get_post_type_archive_link( 'efa_project' ) ); ?>" class="btn btn-success-gradient w-100 mb-4">
            <i class="fa fa-arrow-left me-2"></i><?php _e( 'Tous les projets', 'efa-cameroon' ); ?>
          </a>

          <!-- Share -->
          <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
              <p class="fw-bold mb-2"><?php _e( 'Partager ce projet', 'efa-cameroon' ); ?></p>
              <div class="d-flex justify-content-center gap-2">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener" class="btn btn-outline-dark btn-sm">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>

        </div><!-- /.project-detail-sidebar -->
      </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</section>


<!-- ═══ RELATED PROJECTS ═══ -->
<?php if ( $related->have_posts() ) : ?>
<section class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-8 text-center">
        <span class="badge-success-light"><?php _e( 'À découvrir aussi', 'efa-cameroon' ); ?></span>
        <h2 class="fw-bolder mt-2"><?php _e( 'Autres projets', 'efa-cameroon' ); ?></h2>
      </div>
    </div>
    <div class="row g-4">
      <?php while ( $related->have_posts() ) : $related->the_post();
          $r_partner = get_post_meta( get_the_ID(), '_efa_project_partner', true );
          $r_period  = get_post_meta( get_the_ID(), '_efa_project_period', true );
          $r_status  = get_post_meta( get_the_ID(), '_efa_project_status', true );
          if ( ! $r_status ) $r_status = 'ongoing';
          $r_label   = get_the_title() . ( $r_partner ? ' – ' . $r_partner : '' ) . ( $r_period ? ' (' . $r_period . ')' : '' );
          $r_img     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : EFA_URI . '/assets/img/5.jpg';
      ?>
      <div class="col-md-4">
        <div class="project-card shadow">
          <a href="<?php the_permalink(); ?>" class="project-card-overlay-link" aria-label="<?php echo esc_attr( $r_label ); ?>"></a>
          <div class="project-bg" style="background-image: url('<?php echo esc_url( $r_img ); ?>');"></div>
          <div class="project-status-wrap">
            <?php echo efa_project_status_badge( $r_status ); ?>
          </div>
          <div class="project-default">
            <div class="title-bar">
              <span class="proj-title"><?php echo esc_html( $r_label ); ?></span>
              <span class="arrow-link"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>
          <div class="project-hover">
            <?php echo efa_project_status_badge( $r_status ); ?>
            <h5 class="mt-2"><?php echo esc_html( $r_label ); ?></h5>
            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-light btn-sm mt-3" style="position:relative;z-index:3;"><?php _e( 'Voir le projet', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php endwhile; ?>

<?php get_footer(); ?>
