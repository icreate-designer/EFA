<?php
/**
 * Front Page Template – EFA Cameroon
 */
get_header();
?>

<!-- ═══ HERO CAROUSEL ═══ -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-inner">

    <div class="carousel-item active slide-1"
      style="background-image: url('http://efa.local/wp-content/uploads/2026/05/young-african-woman-farmer-carrying-600nw-2665877589.webp');">
      <div class="hero-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="py-5">
                <h2 class="display-4 fw-bolder text-white">
                  <?php _e( 'Des communautés résilientes, autonomes et capables', 'efa-cameroon' ); ?>
                </h2>
                <p class="text-white opacity-75">
                  <?php _e( 'Depuis 2014, EFA Cameroon œuvre pour l\'amélioration durable des conditions de vie des populations vulnérables à travers des interventions intégrées en sécurité alimentaire, nutrition, santé et résilience climatique.', 'efa-cameroon' ); ?>
                </p>
                <div>
                  <button class="btn btn-success-gradient me-2"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></button>
                  <button class="btn btn-success-gradient"><?php _e( 'En savoir plus', 'efa-cameroon' ); ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item slide-2"
      style="background-image: url('http://efa.local/wp-content/uploads/2026/05/image-20-1024x421-1.png');">
      <div class="hero-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="py-5">
                <h2 class="display-4 fw-bolder text-white">
                  <?php _e( 'Sécurité alimentaire et nutrition pour tous', 'efa-cameroon' ); ?>
                </h2>
                <p class="text-white opacity-75">
                  <?php _e( 'Nous assistons les déplacés internes, réfugiés, femmes et ménages vulnérables dans l\'Extrême-Nord, le Nord et l\'Adamaoua à travers des distributions de vivres, des transferts monétaires et des activités nutritionnelles.', 'efa-cameroon' ); ?>
                </p>
                <div>
                  <button class="btn btn-success-gradient me-2"><?php _e( 'Nos projets', 'efa-cameroon' ); ?></button>
                  <button class="btn btn-success-gradient"><?php _e( 'En savoir plus', 'efa-cameroon' ); ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item slide-3"
      style="background-image: url('http://efa.local/wp-content/uploads/2026/05/young-african-boy-drinking-water-community-borehole-hand-pump-young-african-boy-drinking-water-community-172697689.jpg.webp');">
      <div class="hero-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="py-5">
                <h2 class="display-4 fw-bolder text-white">
                  <?php _e( 'Un partenaire fiable reconnu à l\'échelle internationale', 'efa-cameroon' ); ?>
                </h2>
                <p class="text-white opacity-75">
                  <?php _e( 'Partenaire du PAM, de l\'OIM, du PNUD, de USAID, de la Hilton Foundation et bien d\'autres, EFA Cameroon est un acteur de terrain structuré et engagé au service des plus vulnérables.', 'efa-cameroon' ); ?>
                </p>
                <div>
                  <button class="btn btn-success-gradient me-2"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></button>
                  <button class="btn btn-success-gradient"><?php _e( 'Nous contacter', 'efa-cameroon' ); ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="carousel-arrow-group">
    <button class="arrow-btn" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="<?php esc_attr_e( 'Précédent', 'efa-cameroon' ); ?>">
      <i class="fa fa-chevron-left"></i>
    </button>
    <button class="arrow-btn" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="<?php esc_attr_e( 'Suivant', 'efa-cameroon' ); ?>">
      <i class="fa fa-chevron-right"></i>
    </button>
  </div>

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
</div>


<!-- ═══ ABOUT ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="d-flex">
          <span class="badge-success-light"><?php _e( 'Qui sommes-nous ?', 'efa-cameroon' ); ?></span>
        </div>
        <h1><?php _e( 'Education For Advancement Cameroon', 'efa-cameroon' ); ?></h1>
        <p>
          <?php _e( 'Fondée le 1er octobre 2014, EFA Cameroon est une ONG nationale camerounaise légalement reconnue. À la suite d\'une évolution stratégique majeure officialisée en 2023, l\'organisation a élargi son mandat vers des approches intégrées couvrant la sécurité alimentaire et nutritionnelle, la résilience, la santé communautaire, le WASH et le développement local.', 'efa-cameroon' ); ?>
        </p>
        <div class="card border-none shadow-lg mt-5">
          <div class="card-body row g-4">
            <div class="col"><div class="rounded-square-image pe-4" style="background-image:url('http://efa.local/wp-content/uploads/2026/05/CAR_OCHA_2021_BY1A5282_web.jpeg');"></div></div>
            <div class="col-9">
              <div class="py-3">
                <p><strong><?php _e( 'Notre vision :', 'efa-cameroon' ); ?></strong> <?php _e( 'Des communautés résilientes, autonomes et capables de faire face aux chocs socio-économiques et climatiques.', 'efa-cameroon' ); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col"></div>
      <div class="col-md-6">
        <div class="position-relative">
          
          <div class="circular-image" style="background-image:url('http://efa.local/wp-content/uploads/2026/05/young-african-boy-drinking-water-community-borehole-hand-pump-young-african-boy-drinking-water-community-172697689.jpg.webp')"></div>
          <div class="card shadow border-light position-absolute d-none d-md-block" style="width:200px; bottom:14%; background-color:rgb(225, 252, 204);">
            <div class="card-body">
              <p class="fw-bold text-dark lead mb-0"><?php _e( '10 ans +', 'efa-cameroon' ); ?></p>
              <p style="font-size:10pt;"><?php _e( 'au service des communautés vulnérables du Cameroun.', 'efa-cameroon' ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ PARTNERS ═══ -->
<!-- <section class="py-5 bg-success-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1 class="fw-bold text-white"><?php _e( 'Nos partenaires', 'efa-cameroon' ); ?></h1>
        <p class="lead text-white"><?php _e( 'EFA Cameroon collabore avec des agences onusiennes, des bailleurs internationaux et des institutions publiques pour maximiser son impact sur le terrain.', 'efa-cameroon' ); ?></p>
      </div>
      <div class="col-md-8">
        <div class="card shadow border-none bg-transparent-white">
          <div class="card-body">
            <?php
            $partners = new WP_Query( [ 'post_type' => 'efa_partner', 'posts_per_page' => 10 ] );
            if ( $partners->have_posts() ) :
                echo '<ul class="list-unstyled">';
                while ( $partners->have_posts() ) : $partners->the_post();
                    if ( has_post_thumbnail() ) {
                        echo '<li class="list-inline-item">';
                        echo get_the_post_thumbnail( get_the_ID(), [ 50, 50 ], [ 'class' => 'me-2', 'style' => 'height:50px;width:auto;', 'alt' => get_the_title() ] );
                        echo '</li>';
                    }
                endwhile;
                echo '</ul>';
                wp_reset_postdata();
            else :
            ?>
            <ul class="list-unstyled">
              <li class="list-inline-item"><img src="<?php echo esc_url( EFA_URI . '/assets/img/g.png' ); ?>" class="me-2" style="height:50px;" alt="PAM"></li>
              <li class="list-inline-item"><img src="<?php echo esc_url( EFA_URI . '/assets/img/g.png' ); ?>" class="me-2" style="height:50px;" alt="OIM"></li>
              <li class="list-inline-item"><img src="<?php echo esc_url( EFA_URI . '/assets/img/g.png' ); ?>" class="me-2" style="height:50px;" alt="PNUD"></li>
              <li class="list-inline-item"><img src="<?php echo esc_url( EFA_URI . '/assets/img/g.png' ); ?>" class="me-2" style="height:50px;" alt="USAID"></li>
              <li class="list-inline-item"><img src="<?php echo esc_url( EFA_URI . '/assets/img/g.png' ); ?>" class="me-2" style="height:50px;" alt="Hilton Foundation"></li>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!-- ═══ DOMAINES D'INTERVENTION ═══ -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-6">
        <div class="d-flex justify-content-center">
          <span class="badge-success-light"><?php _e( "Domaines d'intervention", 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="text-center fw-bolder"><?php _e( 'Ce que nous faisons', 'efa-cameroon' ); ?></h1>
      </div>
    </div>
    <div class="row">

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-wheat-awn domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( 'Sécurité alimentaire', 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Distributions de vivres et transferts monétaires au profit des ménages vulnérables, appuyés par la création d\'actifs productifs communautaires via l\'approche Food Assistance for Assets (FFA).', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-heart-pulse domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( 'Nutrition &amp; Santé', 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Dépistage de la malnutrition aiguë, sensibilisations ANJE, démonstrations culinaires, accompagnement des femmes enceintes et allaitantes, et référencement communautaire vers les structures sanitaires.', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-droplet domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( 'Eau, Hygiène &amp; Assainissement', 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Construction et réhabilitation de forages et points d\'eau, mise en place de comités de gestion, campagnes sur la potabilisation de l\'eau et distribution de kits d\'hygiène.', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-seedling domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( "Moyens d'existence", 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Appui aux activités génératrices de revenus (AGR), développement des chaînes de valeur agricoles via l\'approche SAMS, inclusion financière et renforcement des coopératives.', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-leaf domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( 'Résilience climatique', 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Création de champs communautaires, biefs, magasins de stockage et réhabilitation de pistes rurales pour renforcer la capacité des communautés face aux chocs climatiques et humanitaires.', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card domaine-card rounded-lg mb-3 shadow-sm">
          <div class="card-body text-center px-4 py-4">
            <i class="fa-solid fa-hand-holding-dollar domaine-icon"></i>
            <p class="lead text-dark fw-bold"><?php _e( 'Transferts monétaires', 'efa-cameroon' ); ?></p>
            <p><?php _e( 'Mise en œuvre de programmes de cash transfer (CBT) au profit des ménages en situation de crise, permettant un accès rapide aux denrées alimentaires et aux biens essentiels.', 'efa-cameroon' ); ?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══ PROJECTS ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Nos réalisations', 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="fw-bolder"><?php _e( 'Projets &amp; Réalisations', 'efa-cameroon' ); ?></h1>
        <p><?php _e( 'Des interventions concrètes menées sur le terrain pour créer un impact durable dans les communautés les plus vulnérables du Cameroun.', 'efa-cameroon' ); ?></p>
      </div>
    </div>

    <div class="row g-4">
      <?php
      $projects = new WP_Query( [
          'post_type'      => 'efa_project',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
      ] );

      if ( $projects->have_posts() ) :
          while ( $projects->have_posts() ) : $projects->the_post();
              $partner = get_post_meta( get_the_ID(), '_efa_project_partner', true );
              $period  = get_post_meta( get_the_ID(), '_efa_project_period', true );
              $status  = get_post_meta( get_the_ID(), '_efa_project_status', true );
              if ( ! $status ) $status = 'ongoing';
              $label   = get_the_title() . ( $partner ? ' – ' . $partner : '' ) . ( $period ? ' (' . $period . ')' : '' );
              $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : EFA_URI . '/assets/img/5.jpg';
              ?>
              <div class="col-md-4">
                <div class="project-card shadow">
                  <a href="<?php the_permalink(); ?>" class="project-card-overlay-link" aria-label="<?php echo esc_attr( $label ); ?>"></a>
                  <div class="project-bg" style="background-image: url('<?php echo esc_url( $img_url ); ?>');"></div>
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
                    <h5 class="mt-2"><?php echo esc_html( $label ); ?></h5>
                    <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-light btn-sm mt-3" style="position:relative;z-index:3;"><?php _e( 'Voir le projet', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-1"></i></a>
                  </div>
                </div>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          // Fallback static projects
          $static_projects = [
              [ 'title' => 'Projet PULCCA – PAM', 'period' => '2024–2025', 'status' => 'ongoing',   'desc' => 'Renforcement de la résilience communautaire : création d\'actifs productifs, pratiques agricoles durables, formations nutritionnelles et infrastructures WASH. Plus de 24 590 bénéficiaires dans trois régions.' ],
              [ 'title' => 'Projet FFA / CBT – PAM', 'period' => '2019–2025', 'status' => 'ongoing',   'desc' => 'Assistance alimentaire et transferts monétaires au profit de plus de 100 000 bénéficiaires cumulés dans l\'Extrême-Nord, accompagnés d\'activités nutritionnelles.' ],
              [ 'title' => 'Projet WASH – OIM', 'period' => '2020–2021', 'status' => 'completed', 'desc' => 'Sensibilisations sur l\'hygiène, construction et réhabilitation de forages et points d\'eau dans trois communautés de l\'Extrême-Nord, au bénéfice de plus de 6 000 ménages.' ],
          ];
          foreach ( $static_projects as $p ) : ?>
          <div class="col-md-4">
            <div class="project-card shadow">
              <div class="project-bg" style="background-image: url('<?php echo esc_url( EFA_URI . '/assets/img/5.jpg' ); ?>');"></div>
              <div class="project-status-wrap">
                <?php echo efa_project_status_badge( $p['status'] ); ?>
              </div>
              <div class="project-default">
                <div class="title-bar">
                  <span class="proj-title"><?php echo esc_html( $p['title'] ); ?></span>
                  <span class="arrow-link"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </div>
              </div>
              <div class="project-hover">
                <?php echo efa_project_status_badge( $p['status'] ); ?>
                <h5 class="mt-2"><?php echo esc_html( $p['title'] . ' (' . $p['period'] . ')' ); ?></h5>
                <p><?php echo esc_html( $p['desc'] ); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach;
      endif;
      ?>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-6 text-center">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'efa_project' ) ); ?>" class="btn btn-success-gradient">
          <?php _e( 'Voir tous les projets', 'efa-cameroon' ); ?>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ═══ FEATURES / CTA ═══ -->
<section class="features-section py-5 text-white" style="background-image: url('<?php echo esc_url( EFA_URI . '/assets/img/5.jpg' ); ?>');">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-5"><?php _e( 'Rejoignez-nous dans la transformation des vies', 'efa-cameroon' ); ?></h2>
        <ul class="list-unstyled feature-list">
          <li class="d-flex gap-3">
            <div class="icon-circle"><i class="fa fa-check"></i></div>
            <div>
              <h5 class="fw-bold text-white"><?php _e( 'Faire un Don', 'efa-cameroon' ); ?></h5>
              <p class="text-white opacity-75"><?php _e( 'Chaque contribution permet de financer des actions concrètes sur le terrain : distributions alimentaires, forages, kits nutritionnels et activités de résilience communautaire.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
          <li class="d-flex gap-3">
            <div class="icon-circle"><i class="fa fa-check"></i></div>
            <div>
              <h5 class="fw-bold text-white"><?php _e( 'Devenir Partenaire', 'efa-cameroon' ); ?></h5>
              <p class="text-white opacity-75"><?php _e( 'EFA Cameroon est un partenaire de mise en œuvre fiable, doté de procédures conformes aux exigences des agences onusiennes et des bailleurs internationaux.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
          <li class="d-flex gap-3">
            <div class="icon-circle"><i class="fa fa-check"></i></div>
            <div>
              <h5 class="fw-bold text-white"><?php _e( 'Devenir Bénévole', 'efa-cameroon' ); ?></h5>
              <p class="text-white opacity-75"><?php _e( 'Mettez vos compétences au service des communautés vulnérables de l\'Extrême-Nord, du Nord et de l\'Adamaoua en rejoignant nos équipes de terrain.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img src="http://efa.local/wp-content/uploads/2026/05/CAR_OCHA_2021_BY1A5282_web.jpeg" class="img-fluid rounded" alt="">
      </div>
    </div>
  </div>
</section>


<!-- ═══ BLOG / ACTUALITIES ═══ -->
<section class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Actualités', 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="fw-bolder"><?php _e( 'Blog &amp; Communiqués', 'efa-cameroon' ); ?></h1>
        <p><?php _e( 'Restez informés de nos dernières activités, rapports de terrain et mises à jour communautaires.', 'efa-cameroon' ); ?></p>
      </div>
    </div>

    <div class="row g-4">
      <?php
      $posts = new WP_Query( [ 'post_type' => 'post', 'posts_per_page' => 3 ] );
      if ( $posts->have_posts() ) :
          while ( $posts->have_posts() ) : $posts->the_post();
              $cats    = get_the_category();
              $cat_name = $cats ? esc_html( $cats[0]->name ) : '';
              $img_url  = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) : EFA_URI . '/assets/img/5.jpg';
              ?>
              <div class="col-md-4">
                <div class="blog-card">
                  <div class="blog-photo" style="background-image: url('<?php echo esc_url( $img_url ); ?>');">
                    <?php if ( $cat_name ) : ?>
                    <span class="blog-tag"><?php echo $cat_name; ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="blog-body">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                      <h5><?php the_title(); ?></h5>
                    </a>
                    <p class="blog-role"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    <div class="blog-info-row">
                      <div class="info-left">
                        <span class="info-icon"><i class="fa fa-calendar"></i></span>
                        <span><?php _e( 'Publié le', 'efa-cameroon' ); ?></span>
                      </div>
                      <span class="info-right"><?php echo get_the_date( 'j M Y' ); ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-6 text-center">
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-success-gradient">
          <?php _e( "Voir plus d'actualités", 'efa-cameroon' ); ?>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="py-5">
  <div class="container">
    <div class="cta-banner">
      <div class="row align-items-center g-4 position-relative" style="z-index:1;">
        <div class="col-lg-8">
          <h3 class="fw-bolder text-white mb-2"><?php _e( 'Vous souhaitez collaborer avec EFA Cameroon ?', 'efa-cameroon' ); ?></h3>
          <p class="text-white mb-0" style="opacity:0.75;"><?php _e( 'Bailleur, agence humanitaire, institution publique ou particulier — nous sommes ouverts à tout partenariat au service des populations vulnérables.', 'efa-cameroon' ); ?></p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#" class="btn btn-success mb-3"><?php _e( 'Nous contacter', 'efa-cameroon' ); ?></a>
          <a href="#" class="btn btn-outline-light"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
