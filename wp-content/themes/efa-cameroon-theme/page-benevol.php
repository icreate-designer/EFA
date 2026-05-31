<?php
/**
 * Template Name: Devenir Bénévole
 * EFA Cameroon – Volunteer Page
 */
get_header();
?>

<!-- ═══ HERO ═══ -->
<section class="vol-hero" style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1400&auto=format&fit=crop');">
  <div class="vol-hero-overlay"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center py-5 mt-3" style="min-height:400px;">
      <div class="col-lg-7">
        <div class="d-flex mb-3">
          <span class="badge-success-light"><?php _e( "Rejoindre l'équipe", 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="display-4 fw-bolder text-white mb-3">
          <?php _e( 'Devenez bénévole avec EFA Cameroon', 'efa-cameroon' ); ?>
        </h1>
        <p class="lead text-white mb-4" style="opacity:0.85; max-width:560px;">
          <?php _e( 'Mettez vos compétences au service des communautés vulnérables du Nord Cameroun. Que vous soyez professionnel, étudiant ou retraité — il y a une place pour vous.', 'efa-cameroon' ); ?>
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="#candidature" class="btn btn-success-gradient">
            <?php _e( 'Déposer ma candidature', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-2"></i>
          </a>
          <a href="#missions" class="btn btn-outline-light">
            <?php _e( 'Voir les missions', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-flex justify-content-end">
        <div class="vol-hero-stats">
          <div class="hero-stat">
            <span class="hero-stat-num">50+</span>
            <span class="hero-stat-label"><?php _e( 'bénévoles actifs', 'efa-cameroon' ); ?></span>
          </div>
          <div class="hero-stat">
            <span class="hero-stat-num">12</span>
            <span class="hero-stat-label"><?php _e( 'nationalités représentées', 'efa-cameroon' ); ?></span>
          </div>
          <div class="hero-stat">
            <span class="hero-stat-num">3</span>
            <span class="hero-stat-label"><?php _e( "régions d'intervention", 'efa-cameroon' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ WHY VOLUNTEER ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="d-flex mb-3">
          <span class="badge-success-light"><?php _e( 'Pourquoi nous rejoindre ?', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder mb-3"><?php _e( 'Un engagement qui transforme — vous et les autres', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'Rejoindre EFA Cameroon en tant que bénévole, c\'est bien plus qu\'un acte de générosité. C\'est une expérience humaine et professionnelle unique, au cœur d\'une action humanitaire reconnue internationalement.', 'efa-cameroon' ); ?></p>
        <ul class="vol-benefits-list mt-4">
          <li>
            <div class="benefit-icon"><i class="fa fa-certificate"></i></div>
            <div>
              <strong><?php _e( 'Attestation de bénévolat', 'efa-cameroon' ); ?></strong>
              <p><?php _e( 'Reconnue et signée par la direction d\'EFA Cameroon.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
          <li>
            <div class="benefit-icon"><i class="fa fa-graduation-cap"></i></div>
            <div>
              <strong><?php _e( 'Formation & montée en compétences', 'efa-cameroon' ); ?></strong>
              <p><?php _e( 'Accès à nos formations internes (MEAL, sécurité alimentaire, gestion de projet).', 'efa-cameroon' ); ?></p>
            </div>
          </li>
          <li>
            <div class="benefit-icon"><i class="fa fa-network-wired"></i></div>
            <div>
              <strong><?php _e( 'Réseau humanitaire', 'efa-cameroon' ); ?></strong>
              <p><?php _e( 'Intégrez un réseau de professionnels connectés aux agences ONU et aux ONG internationales.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
          <li>
            <div class="benefit-icon"><i class="fa fa-plane"></i></div>
            <div>
              <strong><?php _e( 'Expérience terrain unique', 'efa-cameroon' ); ?></strong>
              <p><?php _e( 'Vivez une immersion au contact des communautés de l\'Extrême-Nord et de l\'Adamaoua.', 'efa-cameroon' ); ?></p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <div class="col-6">
            <div class="vol-photo-card" style="height:260px; background-image:url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&auto=format&fit=crop'); border-radius:2rem;"></div>
          </div>
          <div class="col-6 mt-4">
            <div class="vol-photo-card" style="height:260px; background-image:url('https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=600&auto=format&fit=crop'); border-radius:2rem;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ MISSIONS ═══ -->
<section id="missions" class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Missions disponibles', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Trouvez la mission qui vous correspond', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'Nous accueillons des bénévoles dans de nombreux domaines, sur le terrain comme à distance.', 'efa-cameroon' ); ?></p>
      </div>
    </div>

    <?php
    $missions = [
      [
        'icon'     => 'fa-wheat-awn',
        'title'    => 'Sécurité alimentaire & nutrition',
        'type'     => 'Terrain',
        'location' => 'Maroua / Ngaoundéré',
        'duration' => '3 – 6 mois',
        'desc'     => 'Appui aux distributions alimentaires, suivi nutritionnel des ménages bénéficiaires, collecte de données et animation communautaire.',
        'skills'   => ['Agro/nutrition', 'MEAL', 'Langues locales'],
      ],
      [
        'icon'     => 'fa-droplet',
        'title'    => 'WASH & hygiène communautaire',
        'type'     => 'Terrain',
        'location' => 'Extrême-Nord',
        'duration' => '2 – 4 mois',
        'desc'     => "Sensibilisation sur l'hygiène, appui technique aux chantiers de réhabilitation de forages et formation des comités d'eau.",
        'skills'   => ['Génie civil', 'Santé publique', 'Animation'],
      ],
      [
        'icon'     => 'fa-chart-bar',
        'title'    => 'Suivi, évaluation & apprentissage (MEAL)',
        'type'     => 'Terrain / Distance',
        'location' => 'Flexible',
        'duration' => '1 – 3 mois',
        'desc'     => "Conception d'outils de collecte, formation des équipes terrain, analyse de données et rédaction de rapports d'impact.",
        'skills'   => ['STATA/SPSS/KoBoToolbox', 'Excel', 'Rédaction'],
      ],
      [
        'icon'     => 'fa-laptop-code',
        'title'    => 'Communication & digital',
        'type'     => 'Distance',
        'location' => 'En ligne',
        'duration' => '2 – 6 mois',
        'desc'     => 'Gestion des réseaux sociaux, création de contenus visuels, refonte de site web, newsletter et rapports annuels.',
        'skills'   => ['Design', 'Rédaction', 'Réseaux sociaux'],
      ],
      [
        'icon'     => 'fa-scale-balanced',
        'title'    => 'Administration, finance & conformité',
        'type'     => 'Distance / Yaoundé',
        'location' => 'Flexible',
        'duration' => '3 – 6 mois',
        'desc'     => 'Appui à la comptabilité, préparation des audits, mise à jour des procédures internes et conformité bailleurs.',
        'skills'   => ['Comptabilité', 'Audit', 'Français/Anglais'],
      ],
      [
        'icon'     => 'fa-people-group',
        'title'    => 'Développement communautaire',
        'type'     => 'Terrain',
        'location' => 'Maroua / Ngaoundéré',
        'duration' => '3 – 6 mois',
        'desc'     => "Appui aux groupements de femmes, animation d'AGR, formation sur l'épargne solidaire et le leadership féminin.",
        'skills'   => ['Sciences sociales', 'Microfinance', 'Langues locales'],
      ],
    ];
    ?>

    <div class="row g-4">
      <?php foreach ( $missions as $m ) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="mission-card">
          <div class="mission-top">
            <div class="mission-icon-wrap">
              <i class="fa <?php echo esc_attr( $m['icon'] ); ?>"></i>
            </div>
            <span class="mission-type-badge <?php echo $m['type'] === 'Distance' ? 'remote' : ( strpos( $m['type'], '/' ) !== false ? 'hybrid' : 'terrain' ); ?>">
              <?php echo esc_html( $m['type'] ); ?>
            </span>
          </div>
          <h5 class="fw-bold mt-3 mb-2"><?php echo esc_html( $m['title'] ); ?></h5>
          <p style="font-size:14px;"><?php echo esc_html( $m['desc'] ); ?></p>
          <div class="mission-meta">
            <span><i class="fa fa-location-dot text-success me-1"></i><?php echo esc_html( $m['location'] ); ?></span>
            <span><i class="fa fa-clock text-success me-1"></i><?php echo esc_html( $m['duration'] ); ?></span>
          </div>
          <div class="mission-skills mt-3">
            <?php foreach ( $m['skills'] as $skill ) : ?>
            <span class="mission-skill-tag"><?php echo esc_html( $skill ); ?></span>
            <?php endforeach; ?>
          </div>
          <a href="#candidature" class="btn mission-apply-btn mt-4 w-100">
            <?php _e( 'Postuler à cette mission', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ PROCESS ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Comment ça marche ?', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Le processus de candidature', 'efa-cameroon' ); ?></h2>
      </div>
    </div>
    <div class="row g-0 justify-content-center">
      <?php
      $steps = [
        [ 'n' => '01', 'icon' => 'fa-file-lines',    'title' => 'Soumission du dossier', 'desc' => 'Remplissez le formulaire ci-dessous en joignant votre CV et lettre de motivation.' ],
        [ 'n' => '02', 'icon' => 'fa-magnifying-glass', 'title' => 'Examen du dossier',   'desc' => 'Notre équipe RH étudie votre profil sous 7 jours ouvrables et vous contacte.' ],
        [ 'n' => '03', 'icon' => 'fa-comments',      'title' => 'Entretien de sélection', 'desc' => 'Un entretien (en présentiel ou vidéo) avec votre futur responsable de mission.' ],
        [ 'n' => '04', 'icon' => 'fa-handshake',     'title' => 'Intégration & démarrage', 'desc' => "Signature de la charte bénévole, briefing d'orientation et début de mission." ],
      ];
      foreach ( $steps as $i => $s ) : ?>
      <div class="col-md-3 process-step <?php echo $i < count($steps)-1 ? 'has-arrow' : ''; ?>">
        <div class="process-step-inner">
          <div class="process-num"><?php echo esc_html( $s['n'] ); ?></div>
          <div class="process-icon-wrap">
            <i class="fa <?php echo esc_attr( $s['icon'] ); ?>"></i>
          </div>
          <h6 class="fw-bold mt-3 mb-2"><?php echo esc_html( $s['title'] ); ?></h6>
          <p style="font-size:13px;"><?php echo esc_html( $s['desc'] ); ?></p>
        </div>
        <?php if ( $i < count($steps)-1 ) : ?>
        <div class="process-arrow"><i class="fa fa-chevron-right"></i></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ TESTIMONIALS ═══ -->
<section class="py-5 bg-success-gradient">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="fw-bolder text-white"><?php _e( 'Ce que disent nos bénévoles', 'efa-cameroon' ); ?></h2>
        <p class="text-white" style="opacity:0.8;"><?php _e( 'Des expériences authentiques partagées par notre communauté.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $testimonials = [
        [ 'name' => 'Laure-Anne D.', 'role' => 'Bénévole MEAL – 2023', 'flag' => '🇫🇷',
          'text' => "Six mois à Maroua m'ont donné plus que deux ans de stage en bureau. J'ai appris à collecter des données terrain, à travailler dans des conditions réelles et à collaborer avec des équipes multiculturelles." ],
        [ 'name' => 'Hamadou B.',    'role' => 'Bénévole développement communautaire – 2022', 'flag' => '🇨🇲',
          'text' => "EFA m'a donné ma première vraie expérience humanitaire. L'encadrement est sérieux, les missions ont du sens et l'attestation que j'ai obtenue m'a ouvert des portes au niveau international." ],
        [ 'name' => 'Sofia R.',       'role' => 'Bénévole communication – 2024', 'flag' => '🇨🇦',
          'text' => "J'ai pu contribuer à distance depuis Montréal tout en gardant mon emploi. L'équipe EFA est réactive, organisée et j'ai vu l'impact concret de mon travail sur leur visibilité en ligne." ],
      ];
      foreach ( $testimonials as $t ) : ?>
      <div class="col-md-4">
        <div class="vol-testimonial-card">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <p><?php echo esc_html( $t['text'] ); ?></p>
          <div class="d-flex align-items-center gap-3 mt-3">
            <div class="vol-avatar"><?php echo $t['flag']; ?></div>
            <div>
              <strong class="text-white"><?php echo esc_html( $t['name'] ); ?></strong>
              <p style="font-size:12px; color:rgba(255,255,255,0.65); margin:0;"><?php echo esc_html( $t['role'] ); ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ APPLICATION FORM ═══ -->
<section id="candidature" class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="don-card shadow-lg">
          <div class="d-flex justify-content-center mb-3">
            <span class="badge-success-light"><?php _e( 'Candidature', 'efa-cameroon' ); ?></span>
          </div>
          <h3 class="fw-bolder text-center mb-1"><?php _e( 'Déposez votre candidature', 'efa-cameroon' ); ?></h3>
          <p class="text-center mb-4"><?php _e( 'Complétez ce formulaire et nous vous recontacterons sous 7 jours ouvrables.', 'efa-cameroon' ); ?></p>

          <div id="vol-form">
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Prénom *', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Aminatou', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Nom *', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Mahamat', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Adresse e-mail *', 'efa-cameroon' ); ?></label>
                <input type="email" class="don-input" placeholder="<?php esc_attr_e( 'vous@exemple.com', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Téléphone *', 'efa-cameroon' ); ?></label>
                <input type="tel" class="don-input" placeholder="<?php esc_attr_e( '+237 6XX XXX XXX', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Nationalité', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Camerounaise', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Ville de résidence actuelle', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Yaoundé', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-12">
                <label class="don-label"><?php _e( 'Mission souhaitée *', 'efa-cameroon' ); ?></label>
                <select class="don-input">
                  <option value=""><?php _e( 'Choisir une mission…', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Sécurité alimentaire & nutrition', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'WASH & hygiène communautaire', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Suivi, évaluation & apprentissage (MEAL)', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Communication & digital', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Administration, finance & conformité', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Développement communautaire', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Autre (préciser dans la motivation)', 'efa-cameroon' ); ?></option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Type de bénévolat préféré *', 'efa-cameroon' ); ?></label>
                <select class="don-input">
                  <option><?php _e( 'Terrain (présence physique)', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'À distance', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Les deux (hybride)', 'efa-cameroon' ); ?></option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Disponibilité *', 'efa-cameroon' ); ?></label>
                <select class="don-input">
                  <option><?php _e( 'Immédiatement', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Dans 1 à 3 mois', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'Dans 3 à 6 mois', 'efa-cameroon' ); ?></option>
                  <option><?php _e( 'À discuter', 'efa-cameroon' ); ?></option>
                </select>
              </div>
              <div class="col-12">
                <label class="don-label"><?php _e( 'Vos compétences & expériences clés *', 'efa-cameroon' ); ?></label>
                <textarea class="don-input" rows="3"
                  placeholder="<?php esc_attr_e( 'Ex. Master en nutrition, 2 ans dans une ONG, maîtrise de KoBoToolbox, fulfulde courant…', 'efa-cameroon' ); ?>"></textarea>
              </div>
              <div class="col-12">
                <label class="don-label"><?php _e( 'Lettre de motivation *', 'efa-cameroon' ); ?></label>
                <textarea class="don-input" rows="5"
                  placeholder="<?php esc_attr_e( "Pourquoi souhaitez-vous rejoindre EFA Cameroon ? Qu'espérez-vous apporter et apprendre ?", 'efa-cameroon' ); ?>"></textarea>
              </div>

              <!-- CV upload -->
              <div class="col-12">
                <label class="don-label"><?php _e( 'CV (PDF, max 5 Mo)', 'efa-cameroon' ); ?></label>
                <div class="vol-upload-zone" id="upload-zone">
                  <i class="fa fa-cloud-arrow-up fa-2x text-success mb-2"></i>
                  <p class="mb-0 fw-semibold" style="font-size:14px;"><?php _e( 'Glisser-déposer votre CV ici', 'efa-cameroon' ); ?></p>
                  <p style="font-size:12px; color:#aaa;"><?php _e( 'ou', 'efa-cameroon' ); ?> <label for="cv-input" class="text-success" style="cursor:pointer;"><?php _e( 'cliquer pour parcourir', 'efa-cameroon' ); ?></label></p>
                  <input type="file" id="cv-input" accept=".pdf,.doc,.docx" style="display:none;">
                  <p id="cv-filename" style="font-size:13px; color:#198754; font-weight:600;"></p>
                </div>
              </div>

              <div class="col-12">
                <label class="don-check">
                  <input type="checkbox" id="rgpd-check">
                  <span><?php _e( 'J\'accepte que mes données soient utilisées par EFA Cameroon uniquement dans le cadre de cette candidature.', 'efa-cameroon' ); ?></span>
                </label>
              </div>
            </div>

            <button class="btn btn-success-gradient w-100 py-3" id="vol-submit">
              <i class="fa fa-paper-plane me-2"></i><?php _e( 'Envoyer ma candidature', 'efa-cameroon' ); ?>
            </button>
          </div><!-- /vol-form -->

          <!-- Success state -->
          <div id="vol-success" style="display:none;" class="text-center py-4">
            <div class="thankyou-circle mb-4">
              <i class="fa fa-check"></i>
            </div>
            <h3 class="fw-bolder mb-2"><?php _e( 'Candidature envoyée !', 'efa-cameroon' ); ?></h3>
            <p><?php _e( 'Merci pour votre intérêt. Notre équipe RH examinera votre dossier et vous contactera sous 7 jours ouvrables.', 'efa-cameroon' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-success-gradient mt-3">
              <?php _e( "Retour à l'accueil", 'efa-cameroon' ); ?>
            </a>
          </div>

        </div><!-- /don-card -->
      </div>
    </div>
  </div>
</section>


<!-- ═══ FAQ ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light">FAQ</span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Questions fréquentes', 'efa-cameroon' ); ?></h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?php
        $faqs = [
          [ 'q' => 'Le bénévolat est-il rémunéré ?',
            'a' => 'Le bénévolat est par nature non rémunéré. Cependant, selon les missions et les financements disponibles, des indemnités de déplacement ou de subsistance peuvent être accordées pour les missions terrain. Cela est précisé dans la convention de bénévolat.' ],
          [ 'q' => 'Faut-il parler une langue locale ?',
            'a' => 'La maîtrise du français est indispensable. Pour les missions terrain, la connaissance du fulfulde ou du kanuri est un atout majeur, mais pas toujours obligatoire — des interprètes peuvent être disponibles.' ],
          [ 'q' => "Puis-je faire du bénévolat depuis l'étranger ?",
            'a' => "Absolument. Plusieurs missions sont accessibles entièrement à distance : communication digitale, MEAL, administration, rédaction de rapports. Vous pouvez contribuer depuis n'importe où dans le monde." ],
          [ 'q' => "Quelle est la durée minimale d'engagement ?",
            'a' => "Nous recommandons un engagement d'au moins 1 mois pour les missions à distance et de 3 mois pour les missions terrain, afin d'assurer un impact réel et une bonne intégration dans l'équipe." ],
          [ 'q' => 'Est-ce que je recevrai une attestation à la fin de ma mission ?',
            'a' => "Oui, systématiquement. Une attestation de bénévolat officielle, signée par la direction d'EFA Cameroon, vous est remise à la fin de votre mission. Elle décrit vos responsabilités et la durée de votre engagement." ],
        ];
        ?>
        <div class="accordion vol-faq" id="volFaq">
          <?php foreach ( $faqs as $i => $faq ) : ?>
          <div class="accordion-item vol-faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $i; ?>"
                aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                <?php echo esc_html( $faq['q'] ); ?>
              </button>
            </h2>
            <div id="faq-<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>"
              data-bs-parent="#volFaq">
              <div class="accordion-body">
                <?php echo esc_html( $faq['a'] ); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ BOTTOM CTA ═══ -->
<section class="py-5">
  <div class="container">
    <div class="cta-banner">
      <div class="row align-items-center g-4 position-relative" style="z-index:1;">
        <div class="col-lg-8">
          <h3 class="fw-bolder text-white mb-2"><?php _e( 'Vous préférez soutenir financièrement ?', 'efa-cameroon' ); ?></h3>
          <p class="text-white mb-0" style="opacity:0.75;"><?php _e( 'Un don — même modeste — contribue directement aux opérations sur le terrain.', 'efa-cameroon' ); ?></p>
        </div>
        <div class="col-lg-4 text-lg-end d-flex gap-3 justify-content-lg-end flex-wrap">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'don' ) ) ); ?>"
            class="btn btn-success"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></a>
          <a href="#" class="btn btn-outline-light"><?php _e( 'Devenir partenaire', 'efa-cameroon' ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ PAGE STYLES ═══ -->



<!-- ═══ PAGE SCRIPT ═══ -->
<script>
(function () {
  // CV file upload label
  const input = document.getElementById('cv-input');
  const zone  = document.getElementById('upload-zone');
  const fname = document.getElementById('cv-filename');
  if (input) {
    input.addEventListener('change', function () {
      if (this.files[0]) {
        fname.textContent = '✓ ' + this.files[0].name;
      }
    });
    zone.addEventListener('dragover', e => { e.preventDefault(); zone.style.borderColor = '#198754'; });
    zone.addEventListener('dragleave', () => { zone.style.borderColor = '#c8e6c9'; });
    zone.addEventListener('drop', e => {
      e.preventDefault();
      zone.style.borderColor = '#c8e6c9';
      if (e.dataTransfer.files[0]) fname.textContent = '✓ ' + e.dataTransfer.files[0].name;
    });
  }

  // Submit
  const submitBtn = document.getElementById('vol-submit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function () {
      document.getElementById('vol-form').style.display    = 'none';
      document.getElementById('vol-success').style.display = 'block';
      window.scrollTo({ top: document.getElementById('candidature').offsetTop - 80, behavior: 'smooth' });
    });
  }
})();
</script>

<?php get_footer(); ?>