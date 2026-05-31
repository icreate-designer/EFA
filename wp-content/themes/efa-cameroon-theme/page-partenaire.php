<?php
/**
 * Template Name: Devenir Partenaire
 * EFA Cameroon – Partnership Page
 */
get_header();
?>

<!-- ═══ HERO ═══ -->
<section class="part-hero" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1400&auto=format&fit=crop');">
  <div class="part-hero-overlay"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center py-5 mt-3" style="min-height:440px;">
      <div class="col-lg-7">
        <div class="d-flex mb-3">
          <span class="badge-success-light"><?php _e( 'Collaboration & Impact', 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="display-4 fw-bolder text-white mb-3">
          <?php _e( 'Construisons ensemble un avenir durable', 'efa-cameroon' ); ?>
        </h1>
        <p class="lead text-white mb-4" style="opacity:0.85; max-width:560px;">
          <?php _e( 'EFA Cameroon invite entreprises, institutions, ONG et bailleurs de fonds à unir leurs forces pour un impact durable sur les communautés vulnérables du Cameroun.', 'efa-cameroon' ); ?>
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="#formulaire" class="btn btn-success-gradient">
            <?php _e( 'Proposer un partenariat', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-2"></i>
          </a>
          <a href="#avantages" class="btn btn-outline-light">
            <?php _e( 'Nos offres de partenariat', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>

      <div class="col-lg-5 d-none d-lg-flex justify-content-end">
        <div class="part-hero-stats">
          <div class="hero-stat-row">
            <div class="part-hero-stat">
              <span class="part-stat-num">6+</span>
              <span class="part-stat-label"><?php _e( 'partenaires actifs', 'efa-cameroon' ); ?></span>
            </div>
            <div class="part-hero-stat">
              <span class="part-stat-num">10</span>
              <span class="part-stat-label"><?php _e( "ans d'expérience", 'efa-cameroon' ); ?></span>
            </div>
          </div>
          <div class="hero-stat-row">
            <div class="part-hero-stat">
              <span class="part-stat-num">100K+</span>
              <span class="part-stat-label"><?php _e( 'bénéficiaires', 'efa-cameroon' ); ?></span>
            </div>
            <div class="part-hero-stat">
              <span class="part-stat-num">3</span>
              <span class="part-stat-label"><?php _e( 'régions couvertes', 'efa-cameroon' ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ PARTENAIRES ACTUELS STRIP ═══ -->
<section class="py-4 border-bottom" style="background:#fff;">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-auto">
        <p class="mb-0 fw-semibold" style="font-size:13px; color:#aaa; text-transform:uppercase; letter-spacing:1px; white-space:nowrap;">
          <?php _e( 'Ils nous font confiance', 'efa-cameroon' ); ?>
        </p>
      </div>
      <div class="col">
        <div class="partner-logo-strip">
          <div class="partner-logo-item">PAM / WFP</div>
          <div class="partner-logo-item">OIM / IOM</div>
          <div class="partner-logo-item">PNUD / UNDP</div>
          <div class="partner-logo-item">UNICEF</div>
          <div class="partner-logo-item">MINATD</div>
          <div class="partner-logo-item">MINADER</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ POURQUOI NOUS CHOISIR ═══ -->
<section class="py-5" style="background:#f7f9fc;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="d-flex mb-3">
          <span class="badge-success-light"><?php _e( 'Pourquoi EFA Cameroon ?', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder mb-3"><?php _e( 'Un partenaire crédible, ancré et audité', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'Depuis 2014, EFA Cameroon intervient sur des crises humanitaires complexes avec une approche locale, communautaire et axée sur les résultats. Nos partenariats sont structurés, transparents et orientés vers un impact mesurable.', 'efa-cameroon' ); ?></p>

        <div class="row g-3 mt-3">
          <?php
          $atouts = [
            [ 'icon' => 'fa-file-contract',    'title' => 'ONG légalement reconnue',      'desc' => 'Enregistrée au MINATD depuis 2014.' ],
            [ 'icon' => 'fa-chart-line',        'title' => 'Systèmes MEAL robustes',       'desc' => 'Suivi, évaluation et apprentissage rigoureux.' ],
            [ 'icon' => 'fa-building-columns',  'title' => 'Audits financiers annuels',    'desc' => 'Comptes certifiés, rapports bailleurs disponibles.' ],
            [ 'icon' => 'fa-earth-africa',      'title' => 'Ancrage territorial fort',     'desc' => 'Bureaux opérationnels à Maroua et Ngaoundéré.' ],
            [ 'icon' => 'fa-people-group',      'title' => 'Équipes pluridisciplinaires',  'desc' => 'Nutrition, WASH, AGR, protection, éducation.' ],
            [ 'icon' => 'fa-handshake-angle',   'title' => 'Partenariats ONU confirmés',   'desc' => 'PAM, OIM, PNUD — références disponibles.' ],
          ];
          foreach ( $atouts as $a ) : ?>
          <div class="col-6">
            <div class="atout-card">
              <div class="atout-icon"><i class="fa <?php echo esc_attr( $a['icon'] ); ?>"></i></div>
              <div>
                <strong><?php echo esc_html( $a['title'] ); ?></strong>
                <p><?php echo esc_html( $a['desc'] ); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="impact-showcase">
          <div class="impact-showcase-header">
            <h6 class="text-white fw-bold mb-0"><?php _e( 'Notre impact en chiffres (2014–2024)', 'efa-cameroon' ); ?></h6>
          </div>
          <div class="impact-showcase-body">
            <?php
            $impacts = [
              [ 'num' => '100 000+', 'label' => 'Bénéficiaires directs',              'icon' => 'fa-users' ],
              [ 'num' => '15 000',   'label' => 'Ménages assistés en sécurité alimentaire', 'icon' => 'fa-wheat-awn' ],
              [ 'num' => '8 000',    'label' => 'Enfants traités pour malnutrition',   'icon' => 'fa-heart-pulse' ],
              [ 'num' => '50+',      'label' => 'Forages et points d\'eau réhabilités','icon' => 'fa-droplet' ],
              [ 'num' => '3 500',    'label' => 'Femmes formées en AGR',               'icon' => 'fa-seedling' ],
              [ 'num' => '12 000',   'label' => 'Enfants scolarisés ou maintenus',     'icon' => 'fa-book-open' ],
            ];
            foreach ( $impacts as $imp ) : ?>
            <div class="impact-row">
              <div class="impact-row-icon"><i class="fa <?php echo esc_attr( $imp['icon'] ); ?>"></i></div>
              <div class="impact-row-label"><?php echo esc_html( $imp['label'] ); ?></div>
              <div class="impact-row-num"><?php echo esc_html( $imp['num'] ); ?></div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="impact-showcase-footer">
            <a href="#" class="text-success fw-semibold" style="font-size:13px;">
              <i class="fa fa-download me-1"></i><?php _e( 'Télécharger notre rapport annuel 2023', 'efa-cameroon' ); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ TYPES DE PARTENARIAT ═══ -->
<section id="avantages" class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Offres de partenariat', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Choisissez votre forme de collaboration', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'EFA Cameroon propose des formats de partenariat adaptés à chaque type de structure et niveau d\'engagement.', 'efa-cameroon' ); ?></p>
      </div>
    </div>

    <div class="row g-4">

      <!-- Partenaire Financier -->
      <div class="col-lg-4 col-md-6">
        <div class="part-type-card">
          <div class="part-type-icon-wrap" style="background:linear-gradient(135deg,#f4fdf8,#d2fdef);">
            <i class="fa fa-coins" style="color:#198754;"></i>
          </div>
          <div class="part-type-badge">
            <?php _e( 'Bailleur de fonds', 'efa-cameroon' ); ?>
          </div>
          <h5 class="fw-bold mt-3 mb-2"><?php _e( 'Partenaire Financier', 'efa-cameroon' ); ?></h5>
          <p style="font-size:14px;"><?php _e( 'Financez un projet, un programme ou un secteur spécifique. Idéal pour les fondations, ambassades, agences de coopération et fonds thématiques.', 'efa-cameroon' ); ?></p>
          <ul class="part-benefit-list">
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Convention de financement dédiée', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Rapports financiers et narratifs réguliers', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Visibilité sur tous nos supports de communication', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Accès aux données de terrain en temps réel', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Audit indépendant disponible', 'efa-cameroon' ); ?></li>
          </ul>
          <a href="#formulaire" class="btn part-apply-btn w-100 mt-auto">
            <?php _e( 'Nous contacter', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>

      <!-- Partenaire Technique -->
      <div class="col-lg-4 col-md-6">
        <div class="part-type-card featured">
          <div class="part-featured-ribbon"><?php _e( 'Populaire', 'efa-cameroon' ); ?></div>
          <div class="part-type-icon-wrap" style="background:linear-gradient(135deg,rgba(9,130,92,0.15),rgba(82,204,16,0.15));">
            <i class="fa fa-gears" style="color:#198754;"></i>
          </div>
          <div class="part-type-badge">
            <?php _e( 'Expert / Académique', 'efa-cameroon' ); ?>
          </div>
          <h5 class="fw-bold mt-3 mb-2"><?php _e( 'Partenaire Technique', 'efa-cameroon' ); ?></h5>
          <p style="font-size:14px;"><?php _e( 'Apportez votre expertise sectorielle — recherche, formation, innovation technologique, évaluation. Idéal pour les universités, cabinets conseil et instituts de recherche.', 'efa-cameroon' ); ?></p>
          <ul class="part-benefit-list">
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Co-développement de projets et outils', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Accès aux données terrain pour la recherche', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Co-publication de rapports et études', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Ateliers de renforcement de capacités', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Reconnaissance officielle dans les rapports', 'efa-cameroon' ); ?></li>
          </ul>
          <a href="#formulaire" class="btn btn-success-gradient w-100 mt-auto">
            <?php _e( 'Nous contacter', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>

      <!-- Partenaire Entreprise -->
      <div class="col-lg-4 col-md-6">
        <div class="part-type-card">
          <div class="part-type-icon-wrap" style="background:linear-gradient(135deg,#fff8f0,#ffe8cc);">
            <i class="fa fa-building" style="color:#c47300;"></i>
          </div>
          <div class="part-type-badge" style="background:rgba(255,145,0,0.1); color:#c47300; border-color:rgba(255,145,0,0.25);">
            <?php _e( 'RSE / Secteur privé', 'efa-cameroon' ); ?>
          </div>
          <h5 class="fw-bold mt-3 mb-2"><?php _e( 'Partenaire Entreprise', 'efa-cameroon' ); ?></h5>
          <p style="font-size:14px;"><?php _e( 'Intégrez EFA Cameroon dans votre stratégie RSE. Sponsoring de projets, dons en nature, engagement de vos collaborateurs, mécénat d\'entreprise.', 'efa-cameroon' ); ?></p>
          <ul class="part-benefit-list">
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Logo sur site web, rapports et événements', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Récit de marque et contenu de communication', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Visites terrain pour vos équipes (sur demande)', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Reçu fiscal pour les contributions éligibles', 'efa-cameroon' ); ?></li>
            <li><i class="fa fa-check text-success me-2"></i><?php _e( 'Rapport annuel de votre impact RSE', 'efa-cameroon' ); ?></li>
          </ul>
          <a href="#formulaire" class="btn part-apply-btn w-100 mt-auto">
            <?php _e( 'Nous contacter', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>

    </div><!-- /row -->
  </div>
</section>


<!-- ═══ PROCESSUS DE PARTENARIAT ═══ -->
<section class="py-5" style="background:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Comment ça marche ?', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Le processus de partenariat', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'Un parcours structuré pour construire une collaboration solide et durable.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="row g-0 justify-content-center">
      <?php
      $steps = [
        [ 'n' => '01', 'icon' => 'fa-paper-plane', 'title' => 'Prise de contact',       'desc' => 'Soumettez votre formulaire ou envoyez-nous un email de présentation. Notre équipe partenariats vous répond sous 5 jours.' ],
        [ 'n' => '02', 'icon' => 'fa-comments',    'title' => 'Réunion exploratoire',   'desc' => 'Une visioconférence ou réunion en présentiel pour explorer les synergies, les objectifs communs et les modalités envisagées.' ],
        [ 'n' => '03', 'icon' => 'fa-file-pen',    'title' => 'Convention de partenariat', 'desc' => 'Co-rédaction et signature d\'une convention précisant les engagements, livrables, calendrier et mécanismes de suivi.' ],
        [ 'n' => '04', 'icon' => 'fa-rocket',      'title' => 'Mise en oeuvre & suivi', 'desc' => 'Démarrage des activités avec un point de contact dédié, des rapports réguliers et des revues de partenariat semestrielles.' ],
      ];
      foreach ( $steps as $i => $s ) : ?>
      <div class="col-md-3 process-step <?php echo $i < count($steps)-1 ? 'has-arrow' : ''; ?>">
        <div class="process-step-inner">
          <div class="process-num"><?php echo esc_html( $s['n'] ); ?></div>
          <div class="process-icon-wrap">
            <i class="fa <?php echo esc_attr( $s['icon'] ); ?>"></i>
          </div>
          <h6 class="fw-bold mt-3 mb-2"><?php echo esc_html( $s['title'] ); ?></h6>
          <p style="font-size:13px; color:#888;"><?php echo esc_html( $s['desc'] ); ?></p>
        </div>
        <?php if ( $i < count($steps)-1 ) : ?>
        <div class="process-arrow d-none d-md-flex"><i class="fa fa-chevron-right"></i></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ TEMOIGNAGES PARTENAIRES ═══ -->
<section class="py-5 bg-success-gradient">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="fw-bolder text-white"><?php _e( 'Ce que disent nos partenaires', 'efa-cameroon' ); ?></h2>
        <p class="text-white" style="opacity:0.8;"><?php _e( 'Des collaborations concrètes, des résultats mesurables.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $testimonials = [
        [
          'org'   => 'Agence Régionale de Coopération',
          'name'  => 'Mme. Isabelle F.',
          'role'  => 'Responsable programmes humanitaires',
          'flag'  => '🇧🇪',
          'text'  => "Nous avons financé deux cycles de distribution alimentaire avec EFA. Leurs rapports sont exemplaires, les données de terrain fiables et les équipes réactives. Un partenaire de confiance pour intervenir dans les zones difficiles d'accès du Nord Cameroun.",
        ],
        [
          'org'   => 'Université de Yaoundé I',
          'name'  => 'Pr. Alain T.',
          'role'  => 'Département Sciences de la Nutrition',
          'flag'  => '🇨🇲',
          'text'  => "Notre partenariat de recherche avec EFA nous a permis de mener des enquêtes nutritionnelles auprès de 3 000 ménages. La collaboration est fluide, les équipes terrain sont formées et rigoureuses. Nous avons co-publié deux articles scientifiques.",
        ],
        [
          'org'   => 'Société Nationale de Transformation',
          'name'  => 'M. Cyril N.',
          'role'  => 'Directeur RSE',
          'flag'  => '🇨🇲',
          'text'  => "Intégrer EFA dans notre stratégie RSE a été une décision stratégique. En sponsorisant leurs programmes d'AGR, nous contribuons directement au développement économique de nos zones d'approvisionnement tout en renforçant notre ancrage territorial.",
        ],
      ];
      foreach ( $testimonials as $t ) : ?>
      <div class="col-md-4">
        <div class="part-testimonial-card">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <p><?php echo esc_html( $t['text'] ); ?></p>
          <div class="d-flex align-items-center gap-3 mt-4 pt-3" style="border-top:1px solid rgba(255,255,255,0.15);">
            <div class="part-avatar"><?php echo $t['flag']; ?></div>
            <div>
              <strong class="text-white d-block"><?php echo esc_html( $t['name'] ); ?></strong>
              <span style="font-size:12px; color:rgba(255,255,255,0.6);"><?php echo esc_html( $t['role'] ); ?></span><br>
              <span style="font-size:12px; color:rgba(82,204,16,0.9); font-weight:700;"><?php echo esc_html( $t['org'] ); ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ DOMAINES D'INTERVENTION ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( "Secteurs d'intervention", 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Nos domaines de collaboration', 'efa-cameroon' ); ?></h2>
        <p><?php _e( 'Chaque partenariat peut se concentrer sur un ou plusieurs de nos secteurs d\'intervention prioritaires.', 'efa-cameroon' ); ?></p>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $domaines = [
        [ 'icon' => 'fa-wheat-awn',      'color' => '#198754', 'bg' => 'rgba(25,135,84,0.08)',  'title' => 'Sécurité alimentaire',   'desc' => 'Distributions alimentaires, soutien aux ménages vulnérables, agriculture et moyens de subsistance.' ],
        [ 'icon' => 'fa-heart-pulse',    'color' => '#e74c3c', 'bg' => 'rgba(231,76,60,0.08)',  'title' => 'Nutrition',              'desc' => 'Prévention et traitement de la malnutrition aiguë, suivi des enfants de moins de 5 ans.' ],
        [ 'icon' => 'fa-droplet',        'color' => '#0d6efd', 'bg' => 'rgba(13,110,253,0.08)', 'title' => 'WASH',                   'desc' => 'Accès à l\'eau potable, assainissement, promotion de l\'hygiène en milieu communautaire.' ],
        [ 'icon' => 'fa-book-open',      'color' => '#f39c12', 'bg' => 'rgba(243,156,18,0.08)', 'title' => 'Éducation',              'desc' => 'Scolarisation des enfants déplacés, dotation en fournitures, appui aux enseignants.' ],
        [ 'icon' => 'fa-seedling',       'color' => '#27ae60', 'bg' => 'rgba(39,174,96,0.08)',  'title' => 'Résilience & AGR',       'desc' => 'Formation des ménages en activités génératrices de revenus, épargne solidaire, microfinance.' ],
        [ 'icon' => 'fa-shield-halved',  'color' => '#8e44ad', 'bg' => 'rgba(142,68,173,0.08)', 'title' => 'Protection',             'desc' => 'Protection des groupes vulnérables, lutte contre les violences basées sur le genre.' ],
      ];
      foreach ( $domaines as $d ) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="domaine-part-card">
          <div class="domaine-part-icon" style="background:<?php echo $d['bg']; ?>; color:<?php echo $d['color']; ?>;">
            <i class="fa <?php echo esc_attr( $d['icon'] ); ?>"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1"><?php echo esc_html( $d['title'] ); ?></h6>
            <p style="font-size:13px; margin:0;"><?php echo esc_html( $d['desc'] ); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ FORMULAIRE DE CONTACT ═══ -->
<section id="formulaire" class="py-5" style="background:#f7f9fc;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="don-card shadow-lg">
          <div class="row g-5">

            <!-- Left: Form -->
            <div class="col-lg-7">
              <div class="d-flex mb-3">
                <span class="badge-success-light"><?php _e( 'Formulaire de contact', 'efa-cameroon' ); ?></span>
              </div>
              <h3 class="fw-bolder mb-1"><?php _e( 'Proposez un partenariat', 'efa-cameroon' ); ?></h3>
              <p class="mb-4"><?php _e( 'Remplissez ce formulaire et notre équipe partenariats vous contactera sous 5 jours ouvrables.', 'efa-cameroon' ); ?></p>

              <div id="part-form">
                <div class="row g-3 mb-3">
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Prénom *', 'efa-cameroon' ); ?></label>
                    <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Pierre', 'efa-cameroon' ); ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Nom *', 'efa-cameroon' ); ?></label>
                    <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Mbarga', 'efa-cameroon' ); ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Fonction / Poste *', 'efa-cameroon' ); ?></label>
                    <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Ex. Directeur RSE', 'efa-cameroon' ); ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Organisation *', 'efa-cameroon' ); ?></label>
                    <input type="text" class="don-input" placeholder="<?php esc_attr_e( 'Nom de votre structure', 'efa-cameroon' ); ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Adresse e-mail *', 'efa-cameroon' ); ?></label>
                    <input type="email" class="don-input" placeholder="<?php esc_attr_e( 'vous@organisation.com', 'efa-cameroon' ); ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="don-label"><?php _e( 'Téléphone', 'efa-cameroon' ); ?></label>
                    <input type="tel" class="don-input" placeholder="<?php esc_attr_e( '+237 6XX XXX XXX', 'efa-cameroon' ); ?>">
                  </div>

                  <div class="col-12">
                    <label class="don-label"><?php _e( "Type d'organisation *", 'efa-cameroon' ); ?></label>
                    <select class="don-input" id="org-type">
                      <option value=""><?php _e( 'Sélectionner…', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'ONG / Association', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Agence de coopération / Bailleur bilatéral', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Organisation des Nations Unies', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Entreprise / Secteur privé', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Université / Institut de recherche', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Institution gouvernementale', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Fondation / Fonds de dotation', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Autre', 'efa-cameroon' ); ?></option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="don-label"><?php _e( 'Type de partenariat envisagé *', 'efa-cameroon' ); ?></label>
                    <div class="row g-2">
                      <?php
                      $types = [
                        'financial'  => 'Partenariat financier',
                        'technical'  => 'Partenariat technique',
                        'enterprise' => 'Partenariat entreprise / RSE',
                        'inkind'     => 'Don en nature',
                        'research'   => 'Partenariat de recherche',
                        'other'      => 'Autre (préciser)',
                      ];
                      foreach ( $types as $val => $lbl ) : ?>
                      <div class="col-6">
                        <label class="part-check-label">
                          <input type="checkbox" name="part-type" value="<?php echo esc_attr( $val ); ?>">
                          <span><?php echo esc_html( $lbl ); ?></span>
                        </label>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="col-12">
                    <label class="don-label"><?php _e( 'Secteurs prioritaires (optionnel)', 'efa-cameroon' ); ?></label>
                    <div class="row g-2">
                      <?php
                      $sectors = [ 'Sécurité alimentaire', 'Nutrition', 'WASH', 'Éducation', 'Résilience & AGR', 'Protection' ];
                      foreach ( $sectors as $sec ) : ?>
                      <div class="col-6">
                        <label class="part-check-label">
                          <input type="checkbox" name="sector" value="<?php echo esc_attr( $sec ); ?>">
                          <span><?php echo esc_html( $sec ); ?></span>
                        </label>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="col-12">
                    <label class="don-label"><?php _e( 'Budget indicatif (optionnel)', 'efa-cameroon' ); ?></label>
                    <select class="don-input">
                      <option value=""><?php _e( 'Sélectionner une fourchette…', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Moins de 5 000 000 FCFA', 'efa-cameroon' ); ?></option>
                      <option><?php _e( '5 000 000 – 20 000 000 FCFA', 'efa-cameroon' ); ?></option>
                      <option><?php _e( '20 000 000 – 100 000 000 FCFA', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'Plus de 100 000 000 FCFA', 'efa-cameroon' ); ?></option>
                      <option><?php _e( 'À définir ensemble', 'efa-cameroon' ); ?></option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="don-label"><?php _e( 'Décrivez votre proposition de partenariat *', 'efa-cameroon' ); ?></label>
                    <textarea class="don-input" rows="5"
                      placeholder="<?php esc_attr_e( 'Contexte de votre organisation, objectifs du partenariat, ressources que vous souhaitez apporter, zone géographique d\'intérêt, calendrier envisagé…', 'efa-cameroon' ); ?>"></textarea>
                  </div>

                  <div class="col-12">
                    <label class="don-check">
                      <input type="checkbox" id="rgpd-check">
                      <span><?php _e( "J'accepte que mes données soient traitées par EFA Cameroon dans le cadre de cette prise de contact.", 'efa-cameroon' ); ?></span>
                    </label>
                  </div>
                </div>

                <button class="btn btn-success-gradient w-100 py-3" id="part-submit">
                  <i class="fa fa-paper-plane me-2"></i><?php _e( 'Envoyer ma proposition', 'efa-cameroon' ); ?>
                </button>
              </div><!-- /part-form -->

              <!-- Success state -->
              <div id="part-success" style="display:none;" class="text-center py-4">
                <div class="thankyou-circle mb-4"><i class="fa fa-check"></i></div>
                <h3 class="fw-bolder mb-2"><?php _e( 'Proposition reçue !', 'efa-cameroon' ); ?></h3>
                <p><?php _e( 'Merci pour votre intérêt. Notre équipe partenariats vous contactera dans les 5 jours ouvrables pour une première discussion.', 'efa-cameroon' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-success-gradient mt-3">
                  <?php _e( "Retour à l'accueil", 'efa-cameroon' ); ?>
                </a>
              </div>
            </div>

            <!-- Right: Contact info -->
            <div class="col-lg-5">
              <div class="part-contact-sidebar">
                <h6 class="fw-bold mb-4"><?php _e( 'Contact direct', 'efa-cameroon' ); ?></h6>

                <div class="part-contact-item">
                  <div class="part-contact-icon"><i class="fa fa-envelope"></i></div>
                  <div>
                    <strong><?php _e( 'Partenariats & Bailleurs', 'efa-cameroon' ); ?></strong>
                    <a href="mailto:<?php echo esc_attr( efa_option( 'efa_email', 'partenariats@efacameroon.org' ) ); ?>" class="d-block text-success" style="font-size:14px;">
                      <?php echo esc_html( efa_option( 'efa_email', 'partenariats@efacameroon.org' ) ); ?>
                    </a>
                  </div>
                </div>

                <div class="part-contact-item">
                  <div class="part-contact-icon"><i class="fa fa-phone"></i></div>
                  <div>
                    <strong><?php _e( 'Téléphone', 'efa-cameroon' ); ?></strong>
                    <a href="tel:<?php echo esc_attr( efa_option( 'efa_phone', '+237600000000' ) ); ?>" class="d-block text-success" style="font-size:14px;">
                      <?php echo esc_html( efa_option( 'efa_phone', '+237 6XX XXX XXX' ) ); ?>
                    </a>
                  </div>
                </div>

                <div class="part-contact-item">
                  <div class="part-contact-icon"><i class="fa fa-map-marker-alt"></i></div>
                  <div>
                    <strong><?php _e( 'Siège opérationnel', 'efa-cameroon' ); ?></strong>
                    <p style="font-size:13px; margin:0;"><?php _e( 'Maroua – Extrême-Nord, Cameroun', 'efa-cameroon' ); ?></p>
                  </div>
                </div>

                <hr style="border-color:#eef2ee; margin:24px 0;">

                <h6 class="fw-bold mb-3"><?php _e( 'Documents disponibles', 'efa-cameroon' ); ?></h6>
                <div class="d-flex flex-column gap-2">
                  <?php
                  $docs = [
                    [ 'icon' => 'fa-file-pdf',  'label' => 'Rapport annuel 2023' ],
                    [ 'icon' => 'fa-file-pdf',  'label' => 'Statuts & récépissé MINATD' ],
                    [ 'icon' => 'fa-file-pdf',  'label' => 'Politique anti-fraude' ],
                    [ 'icon' => 'fa-file-alt',  'label' => 'Note de présentation institutionnelle' ],
                  ];
                  foreach ( $docs as $doc ) : ?>
                  <a href="#" class="part-doc-link">
                    <i class="fa <?php echo esc_attr( $doc['icon'] ); ?> text-success me-2"></i>
                    <?php echo esc_html( $doc['label'] ); ?>
                    <i class="fa fa-download ms-auto text-success" style="font-size:11px;"></i>
                  </a>
                  <?php endforeach; ?>
                </div>

                <hr style="border-color:#eef2ee; margin:24px 0;">

                <h6 class="fw-bold mb-3"><?php _e( "D'autres façons d'agir", 'efa-cameroon' ); ?></h6>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'don' ) ) ); ?>" class="alt-support-link">
                  <div class="alt-icon"><i class="fa fa-heart"></i></div>
                  <div>
                    <strong><?php _e( 'Faire un don', 'efa-cameroon' ); ?></strong>
                    <p><?php _e( 'Contribuez directement depuis 2 000 FCFA.', 'efa-cameroon' ); ?></p>
                  </div>
                  <i class="fa fa-chevron-right alt-arrow"></i>
                </a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'benevole' ) ) ); ?>" class="alt-support-link">
                  <div class="alt-icon"><i class="fa fa-hands-helping"></i></div>
                  <div>
                    <strong><?php _e( 'Devenir bénévole', 'efa-cameroon' ); ?></strong>
                    <p><?php _e( 'Apportez vos compétences sur le terrain.', 'efa-cameroon' ); ?></p>
                  </div>
                  <i class="fa fa-chevron-right alt-arrow"></i>
                </a>
              </div>
            </div>

          </div><!-- /row inside card -->
        </div><!-- /don-card -->
      </div>
    </div>
  </div>
</section>


<!-- ═══ CTA FINAL ═══ -->
<section class="py-5">
  <div class="container">
    <div class="cta-banner">
      <div class="row align-items-center g-4 position-relative" style="z-index:1;">
        <div class="col-lg-8">
          <h3 class="fw-bolder text-white mb-2"><?php _e( 'Une question avant de vous lancer ?', 'efa-cameroon' ); ?></h3>
          <p class="text-white mb-0" style="opacity:0.75;">
            <?php _e( 'Notre équipe partenariats est disponible pour répondre à toutes vos questions et vous aider à définir la meilleure forme de collaboration.', 'efa-cameroon' ); ?>
          </p>
        </div>
        <div class="col-lg-4 text-lg-end d-flex gap-3 justify-content-lg-end flex-wrap">
          <a href="mailto:<?php echo esc_attr( efa_option( 'efa_email', 'contact@efacameroon.org' ) ); ?>" class="btn btn-success">
            <?php _e( 'Nous écrire', 'efa-cameroon' ); ?>
          </a>
          <a href="tel:<?php echo esc_attr( efa_option( 'efa_phone', '+237600000000' ) ); ?>" class="btn btn-outline-light">
            <i class="fa fa-phone me-1"></i><?php _e( 'Appeler', 'efa-cameroon' ); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ STYLES ═══ -->
<style>
/* ── Hero ── */
.part-hero {
  position: relative; min-height: 480px;
  display: flex; align-items: center;
  background-size: cover; background-position: center;
  padding: 60px 0 40px;
}
.part-hero-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(1,56,37,0.93) 0%, rgba(9,130,92,0.78) 55%, rgba(0,0,0,0.5) 100%);
}
.part-hero-stats {
  display: flex; flex-direction: column; gap: 16px;
  background: rgba(255,255,255,0.1); backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 2rem; padding: 32px 36px;
}
.hero-stat-row { display: flex; gap: 32px; }
.part-hero-stat { display: flex; flex-direction: column; align-items: center; }
.part-stat-num {
  font-size: 2rem; font-weight: 800;
  background: linear-gradient(90deg, #fff 0%, rgba(82,204,16,1) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.part-stat-label { font-size: 12px; color: rgba(255,255,255,0.75); text-align: center; }

/* ── Partner logo strip ── */
.partner-logo-strip { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; }
.partner-logo-item {
  font-weight: 800; font-size: 13px; color: #aaa;
  padding: 8px 18px; border-radius: 100px;
  border: 1.5px solid #e8ecef;
  letter-spacing: 0.5px; white-space: nowrap;
  transition: all 0.2s;
}
.partner-logo-item:hover { color: #198754; border-color: #198754; background: #f4fdf8; }

/* ── Atout cards ── */
.atout-card {
  display: flex; align-items: flex-start; gap: 12px;
  padding: 16px; border-radius: 14px;
  background: #fff; box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  height: 100%;
}
.atout-icon {
  width: 40px; height: 40px; border-radius: 12px; flex-shrink: 0;
  background: rgba(25,135,84,0.1); color: #198754;
  display: flex; align-items: center; justify-content: center; font-size: 15px;
}
.atout-card strong { font-size: 13px; font-weight: 700; color: #222; display: block; margin-bottom: 3px; }
.atout-card p { font-size: 12px; color: #888; margin: 0; }

/* ── Impact showcase ── */
.impact-showcase {
  border-radius: 2rem; overflow: hidden;
  box-shadow: 0 12px 40px rgba(0,0,0,0.12);
}
.impact-showcase-header {
  background: linear-gradient(90deg, rgba(1,56,37,1) 0%, rgba(47,133,1,1) 100%);
  padding: 20px 28px;
}
.impact-showcase-body { background: #fff; padding: 8px 0; }
.impact-row {
  display: flex; align-items: center; gap: 14px;
  padding: 14px 28px; border-bottom: 1px solid #f0f4f0;
  transition: background 0.2s;
}
.impact-row:last-child { border-bottom: none; }
.impact-row:hover { background: #f9fdf9; }
.impact-row-icon {
  width: 36px; height: 36px; border-radius: 50%; flex-shrink: 0;
  background: rgba(25,135,84,0.1); color: #198754;
  display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.impact-row-label { flex: 1; font-size: 13px; color: #555; }
.impact-row-num {
  font-size: 15px; font-weight: 800; color: #198754; white-space: nowrap;
}
.impact-showcase-footer {
  background: #f7f9fc; padding: 16px 28px; text-align: center;
}

/* ── Partnership type cards ── */
.part-type-card {
  background: #fff; border-radius: 2rem;
  padding: 32px 28px; height: 100%;
  box-shadow: 0 4px 24px rgba(0,0,0,0.07);
  display: flex; flex-direction: column;
  position: relative; overflow: hidden;
  border: 2px solid transparent;
  transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
}
.part-type-card:hover {
  border-color: #198754; transform: translateY(-6px);
  box-shadow: 0 20px 48px rgba(9,130,92,0.15);
}
.part-type-card.featured {
  border-color: #198754;
  box-shadow: 0 12px 40px rgba(9,130,92,0.18);
}
.part-featured-ribbon {
  position: absolute; top: 20px; right: -28px;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  color: #fff; font-size: 11px; font-weight: 700;
  padding: 4px 40px; transform: rotate(45deg);
  letter-spacing: 1px; text-transform: uppercase;
}
.part-type-icon-wrap {
  width: 64px; height: 64px; border-radius: 18px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.5rem; flex-shrink: 0;
}
.part-type-badge {
  display: inline-flex; margin-top: 16px;
  font-size: 11px; font-weight: 700; text-transform: uppercase;
  padding: 4px 14px; border-radius: 100px; letter-spacing: 0.5px;
  background: rgba(25,135,84,0.1); color: #0d6640;
  border: 1px solid rgba(25,135,84,0.25);
}
.part-benefit-list {
  list-style: none; padding: 0; margin: 0 0 20px;
  display: flex; flex-direction: column; gap: 10px;
  font-size: 13px; color: #555; flex: 1;
}
.part-apply-btn {
  background: transparent; color: #198754;
  border: 2px solid #198754; font-weight: 600;
  font-size: 14px; padding: 12px 24px; border-radius: 100px;
  transition: all 0.25s;
}
.part-apply-btn:hover {
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  color: #fff; border-color: transparent;
}

/* ── Process steps ── */
.process-step { display: flex; align-items: flex-start; position: relative; }
.process-step-inner { flex: 1; text-align: center; padding: 0 12px; }
.process-num {
  font-size: 3rem; font-weight: 900; line-height: 1;
  background: linear-gradient(90deg, rgba(9,130,92,0.15), rgba(82,204,16,0.15));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  margin-bottom: 12px;
}
.process-icon-wrap {
  width: 64px; height: 64px; border-radius: 50%; margin: 0 auto;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  color: #fff; font-size: 1.4rem;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 8px 24px rgba(9,130,92,0.3);
}
.process-arrow {
  color: #ccc; font-size: 20px; padding-top: 40px;
  flex-shrink: 0; margin: 0 -8px; align-items: center;
}

/* ── Testimonials ── */
.part-testimonial-card {
  background: rgba(255,255,255,0.1); backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 1.5rem; padding: 28px; height: 100%;
}
.part-testimonial-card .testimonial-quote { color: rgba(255,255,255,0.35); font-size: 1.5rem; margin-bottom: 14px; }
.part-testimonial-card p { font-size: 14px; color: rgba(255,255,255,0.85); line-height: 1.75; }
.part-avatar {
  width: 48px; height: 48px; border-radius: 50%; flex-shrink: 0;
  background: rgba(255,255,255,0.2);
  display: flex; align-items: center; justify-content: center; font-size: 1.5rem;
}

/* ── Domaines ── */
.domaine-part-card {
  display: flex; align-items: flex-start; gap: 16px;
  padding: 22px; border-radius: 18px;
  background: #fff; box-shadow: 0 4px 18px rgba(0,0,0,0.06);
  transition: transform 0.25s, box-shadow 0.25s;
}
.domaine-part-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,0.1); }
.domaine-part-icon {
  width: 52px; height: 52px; border-radius: 14px; flex-shrink: 0;
  display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
}
.domaine-part-card h6 { color: #111; }
.domaine-part-card p { color: #888; }

/* ── Form ── */
.don-card { background: #fff; border-radius: 2rem; padding: 40px; }
@media (max-width: 576px) { .don-card { padding: 24px 16px; } }
.don-label { font-size: 13px; font-weight: 600; color: #444; margin-bottom: 6px; display: block; }
.don-input {
  width: 100%; padding: 12px 16px;
  border: 2px solid #e0e0e0; border-radius: 12px;
  font-size: 15px; font-family: inherit; outline: none;
  transition: border-color 0.2s; background: #fafafa;
}
.don-input:focus { border-color: #198754; background: #fff; }
.don-check { display: flex; align-items: flex-start; gap: 10px; cursor: pointer; font-size: 14px; color: #555; }
.don-check input { margin-top: 3px; accent-color: #198754; }

/* Checkbox group labels */
.part-check-label {
  display: flex; align-items: center; gap: 8px;
  padding: 10px 14px; border-radius: 10px;
  border: 2px solid #e0e0e0; background: #fff;
  cursor: pointer; font-size: 13px; font-weight: 600; color: #555;
  transition: all 0.2s; user-select: none;
}
.part-check-label input { accent-color: #198754; width: 15px; height: 15px; }
.part-check-label:has(input:checked) {
  border-color: #198754;
  background: rgba(25,135,84,0.07); color: #198754;
}

/* ── Contact sidebar ── */
.part-contact-sidebar {
  background: #f7f9fc; border-radius: 1.5rem;
  padding: 28px; height: 100%;
}
.part-contact-item {
  display: flex; align-items: flex-start; gap: 14px;
  margin-bottom: 20px;
}
.part-contact-icon {
  width: 40px; height: 40px; border-radius: 50%; flex-shrink: 0;
  background: rgba(25,135,84,0.1); color: #198754;
  display: flex; align-items: center; justify-content: center; font-size: 15px;
}
.part-contact-item strong { font-size: 13px; font-weight: 700; display: block; color: #222; margin-bottom: 2px; }

/* ── Doc links ── */
.part-doc-link {
  display: flex; align-items: center; gap: 8px;
  padding: 10px 14px; border-radius: 10px;
  background: #fff; border: 1px solid #e8ecef;
  font-size: 13px; color: #444; text-decoration: none;
  transition: all 0.2s;
}
.part-doc-link:hover { border-color: #198754; color: #198754; background: #f4fdf8; }

/* ── Alt support links ── */
.alt-support-link {
  display: flex; align-items: center; gap: 14px;
  padding: 14px 0; border-bottom: 1px solid #eef2ee;
  text-decoration: none; color: inherit; transition: all 0.2s;
}
.alt-support-link:last-child { border-bottom: none; padding-bottom: 0; }
.alt-support-link:hover { color: #198754; }
.alt-icon {
  width: 42px; height: 42px; border-radius: 12px; flex-shrink: 0;
  background: rgba(25,135,84,0.1); color: #198754;
  display: flex; align-items: center; justify-content: center; font-size: 16px;
}
.alt-support-link strong { font-size: 14px; font-weight: 700; display: block; }
.alt-support-link p { font-size: 12px; color: #888; margin: 2px 0 0; }
.alt-arrow { color: #ccc; font-size: 12px; margin-left: auto; flex-shrink: 0; }

/* ── Thank you / Success ── */
.thankyou-circle {
  width: 90px; height: 90px; border-radius: 50%;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  display: flex; align-items: center; justify-content: center;
  font-size: 2.2rem; color: #fff; margin: 0 auto;
}

/* ── CTA Banner ── */
.cta-banner {
  background: linear-gradient(90deg, rgba(1,56,37,1) 0%, rgba(47,133,1,1) 100%);
  border-radius: 2rem; padding: 40px 48px;
  position: relative; overflow: hidden;
}
.cta-banner::before {
  content: ''; position: absolute; top: -60px; right: -60px;
  width: 220px; height: 220px; border-radius: 50%;
  background: rgba(255,255,255,0.05);
}
@media (max-width: 576px) { .cta-banner { padding: 28px 20px; } }
</style>


<!-- ═══ SCRIPT ═══ -->
<script>
(function () {
  var btn = document.getElementById('part-submit');
  if (btn) {
    btn.addEventListener('click', function () {
      document.getElementById('part-form').style.display    = 'none';
      document.getElementById('part-success').style.display = 'block';
      window.scrollTo({ top: document.getElementById('formulaire').offsetTop - 80, behavior: 'smooth' });
    });
  }
})();
</script>

<?php get_footer(); ?>