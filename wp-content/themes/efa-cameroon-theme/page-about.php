<?php
/**
 * Template Name: Page À propos
 */
get_header();
?>

<!-- PAGE HERO -->
<section class="hero-section py-5 text-white" style="background-image:url('<?php bloginfo('template_directory');?>/assets/img/CAR_OCHA_2021_BY1A5282_web.jpeg'); background-repeat:no-repeat; background-size:cover; background-attachment:fixed;">
  <div class="container position-relative">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="text-white"><?php _e( 'À propos de nous', 'efa-cameroon' ); ?></h1>

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

<!-- ABOUT EFA -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-5" style="background-image:url('<?php bloginfo('template_directory') ?>/assets/img/young-african-boy-drinking-water-community-borehole-hand-pump-young-african-boy-drinking-water-community-172697689.jpg.webp'); background-size:cover; height:100vh; background-repeat:no-repeat;">
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 px-4">
        <span class="badge-success-light d-inline-block mb-3"><?php _e( 'Notre organisation', 'efa-cameroon' ); ?></span>
        <h1 class="display-4 fw-bold"><?php _e( 'À propos d\'EFA Cameroon', 'efa-cameroon' ); ?></h1>
        <p class="lead"><?php _e( 'ONG nationale camerounaise engagée depuis 2014 pour l\'amélioration durable des conditions de vie des populations les plus vulnérables.', 'efa-cameroon' ); ?></p>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
              <div class="value-card pb-2">
                  <h4 class="mb-0">Mission</h4>
                  <p>Améliorer durablement les conditions de vie des populations vulnérables.</p>
              </div>
            </div>
            <!-- vision -->
             <div class="col-md-6">
              <div class="value-card pb-2">
                  <h4 class="mb-0">Vision</h4>
                  <p>Des communautés résilientes, autonomes et inclusives.</p>
              </div>
            </div>
            <!-- mandate -->
             <div class="col-md-12">
              <div class="value-card pb-2">
                  <h4 class="mb-0">Mandat</h4>
                  <p>Accompagner les populations vulnérables à travers des actions humanitaires et de développement.</p>
              </div>
            </div>

          </div>

        <button class="btn btn-success"><?php _e( 'Devenir partenaire', 'efa-cameroon' ); ?></button>
      </div>
    </div>
  </div>
</section>


<!-- STATS -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <span class="badge-success-light d-inline-block mb-3"><?php _e( 'Notre impact', 'efa-cameroon' ); ?></span>
        <div class="section-divider"></div>
        <h2 class="fw-bolder mb-3" style="color:#0d1b4b;"><?php _e( 'Des résultats concrets sur le terrain', 'efa-cameroon' ); ?></h2>
        <p style="color:#555;"><?php _e( 'Depuis 2014, EFA Cameroon a transformé la vie de dizaines de milliers de personnes dans les régions les plus vulnérables du Cameroun, à travers des interventions directes, mesurables et durables.', 'efa-cameroon' ); ?></p>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <?php
          $stats = [
              [ 'icon' => 'fa-users',             'value' => '100K+', 'label' => __( 'Bénéficiaires cumulés', 'efa-cameroon' ) ],
              [ 'icon' => 'fa-briefcase',          'value' => '15+',   'label' => __( 'Projets réalisés', 'efa-cameroon' ) ],
              [ 'icon' => 'fa-handshake',          'value' => '10+',   'label' => __( 'Partenaires internationaux', 'efa-cameroon' ) ],
              [ 'icon' => 'fa-map-location-dot',   'value' => '3',     'label' => __( 'Régions d\'intervention', 'efa-cameroon' ) ],
          ];
          foreach ( $stats as $stat ) : ?>
          <div class="col-6">
            <div class="value-card d-flex">
              <div class="me-3">
                <div class="fade-icon"><i class="fa-solid <?php echo esc_attr( $stat['icon'] ); ?>"></i></div>
              </div>
              <div>
                <div class="h3"><?php echo esc_html( $stat['value'] ); ?></div>
                <div class="sc-lbl"><?php echo esc_html( $stat['label'] ); ?></div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- HISTORY TIMELINE -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge-success-light d-inline-block mb-3"><?php _e( 'Notre histoire', 'efa-cameroon' ); ?></span>
        <div class="section-divider"></div>
        <h2 class="fw-bolder mb-4"><?php _e( 'De Education Fights AIDS à Education For Advancement', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'EFA Cameroon a été créée le 1er octobre 2014 sous l\'appellation Education Fights AIDS, initialement engagée dans la lutte contre le VIH/SIDA et la promotion de la santé communautaire.', 'efa-cameroon' ); ?></p>
        <p><?php _e( 'À la suite de l\'Assemblée Générale du 22 décembre 2022, l\'organisation a engagé une évolution stratégique majeure en adoptant la dénomination Education For Advancement Cameroon, tout en conservant l\'acronyme EFA Cameroon, sa vision, sa mission ainsi que ses valeurs fondamentales.', 'efa-cameroon' ); ?></p>
        <p><?php _e( 'Cette transformation a été officialisée à travers l\'Arrêté N°000350/A/MINAT/SG/DAP/SDLP/SONG/BA délivré à Yaoundé le 27 juin 2023, permettant à l\'organisation d\'élargir son champ d\'intervention vers des approches intégrées.', 'efa-cameroon' ); ?></p>
      </div>
      <div class="col-lg-6">
        <div class="timeline">
          <?php
          $timeline = [
              [ 'year' => '2014',        'title' => __( 'Fondation de l\'organisation', 'efa-cameroon' ),    'desc' => __( 'Création sous le nom Education Fights AIDS le 1er octobre 2014. Premières interventions en santé communautaire et lutte contre le VIH/SIDA dans l\'Extrême-Nord.', 'efa-cameroon' ) ],
              [ 'year' => '2019 – 2021', 'title' => __( 'Partenariats PAM &amp; OIM', 'efa-cameroon' ),       'desc' => __( 'Lancement des premiers projets FFA avec le PAM. Partenariat avec l\'OIM pour les activités WASH dans l\'Extrême-Nord (plus de 6 000 ménages touchés).', 'efa-cameroon' ) ],
              [ 'year' => '2022',        'title' => __( 'Évolution stratégique majeure', 'efa-cameroon' ),    'desc' => __( 'L\'Assemblée Générale adopte la nouvelle dénomination Education For Advancement Cameroon et élargit le mandat organisationnel.', 'efa-cameroon' ) ],
              [ 'year' => '2023',        'title' => __( 'Reconnaissance officielle', 'efa-cameroon' ),        'desc' => __( 'Officialisation du nouveau statut par arrêté ministériel. Expansion des partenariats avec la Hilton Foundation et Global Giving.', 'efa-cameroon' ) ],
              [ 'year' => '2024 – 2025', 'title' => __( 'Projets PULCCA &amp; IFNA', 'efa-cameroon' ),        'desc' => __( 'Mise en œuvre du projet PULCCA (PAM) et du projet IFNA (JICA/Banque mondiale), couvrant plus de 35 000 bénéficiaires dans trois régions.', 'efa-cameroon' ) ],
          ];
          foreach ( $timeline as $item ) : ?>
          <div class="timeline-item">
            <div class="year"><?php echo esc_html( $item['year'] ); ?></div>
            <h6><?php echo $item['title']; ?></h6>
            <p style="margin:0; font-size:14px;"><?php echo esc_html( $item['desc'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- TEAM -->
<section class="features-section py-5 text-white" style="background-image: url('<?php echo esc_url( EFA_URI . '/assets/img/5.jpg' ); ?>');">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 text-center">
        <span class="badge-success-light d-inline-block mb-3"><?php _e( 'Notre équipe', 'efa-cameroon' ); ?></span>
        <h2 class="fw-bolder text-white"><?php _e( 'Une équipe dédiée sur le terrain', 'efa-cameroon' ); ?></h2>
        <p class="mt-2 text-white"><?php _e( 'Des experts, techniciens et agents de terrain maîtrisant les langues locales et les réalités socioculturelles des régions d\'intervention.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $team = new WP_Query( [ 'post_type' => 'efa_team', 'posts_per_page' => 8 ] );
      if ( $team->have_posts() ) :
          while ( $team->have_posts() ) : $team->the_post();
              $role    = get_post_meta( get_the_ID(), '_efa_team_role', true );
              $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&q=80';
              ?>
              <div class="col-6 col-md-3">
                <div class="team-card">
                  <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="team-photo">
                  <button class="share-btn" title="<?php esc_attr_e( 'Partager', 'efa-cameroon' ); ?>"><i class="fa-solid fa-share-nodes"></i></button>
                  <div class="team-info">
                    <div class="team-name text-white"><?php the_title(); ?></div>
                    <div class="team-role text-white"><?php echo esc_html( $role ); ?></div>
                  </div>
                </div>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          // Fallback static team
          $members = [
              [ 'name' => 'Directeur Exécutif',    'role' => 'Direction &amp; Stratégie',  'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&q=80' ],
              [ 'name' => 'Responsable Programmes', 'role' => 'Coordination des projets',   'img' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&auto=format&fit=crop&q=80' ],
              [ 'name' => 'Responsable MEAL',       'role' => 'Suivi &amp; Évaluation',     'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&auto=format&fit=crop&q=80' ],
              [ 'name' => 'Responsable Finances',   'role' => 'Gestion financière',         'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&auto=format&fit=crop&q=80' ],
          ];
          foreach ( $members as $m ) : ?>
          <div class="col-6 col-md-3">
            <div class="team-card">
              <img src="<?php echo esc_url( $m['img'] ); ?>" alt="<?php echo esc_attr( $m['name'] ); ?>" class="team-photo">
              <button class="share-btn" title="Partager"><i class="fa-solid fa-share-nodes"></i></button>
              <div class="team-info">
                <div class="team-name text-white"><?php echo esc_html( $m['name'] ); ?></div>
                <div class="team-role text-white"><?php echo $m['role']; ?></div>
              </div>
            </div>
          </div>
          <?php endforeach;
      endif;
      ?>
    </div>
  </div>
</section>


<!-- PARTNERS -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <span class="badge-success-light d-inline-block mb-3"><?php _e( 'Nos partenaires', 'efa-cameroon' ); ?></span>
        <div class="section-divider mx-auto"></div>
        <h2 class="fw-bolder"><?php _e( 'Des partenariats solides et diversifiés', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'EFA Cameroon a développé au fil des années des partenariats avec des agences des Nations Unies, des institutions publiques et des partenaires techniques et financiers de premier plan.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="text-center mb-4">
      <?php
      $partner_names = [ 'Programme Alimentaire Mondial (PAM)', 'Organisation Internationale pour les Migrations (OIM)', 'PNUD', 'IRC', 'FHI360', 'USAID', 'CREEN', 'Global Giving', 'Hilton Foundation', 'JICA', 'Banque mondiale' ];
      foreach ( $partner_names as $pname ) : ?>
      <span class="partner-badge"><i class="fa-solid fa-check-circle"></i> <?php echo esc_html( $pname ); ?></span>
      <?php endforeach; ?>
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
