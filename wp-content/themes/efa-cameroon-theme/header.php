<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header">

  <!-- TOP BAR -->
  <nav class="navbar navbar-top">
    <div class="container">
      <ul class="top-info-list ms-auto">
        <?php if ( efa_option( 'efa_phone' ) ) : ?>
        <li>
          <a href="tel:<?php echo esc_attr( efa_option( 'efa_phone' ) ); ?>" class="nav-link">
            <i class="fa fa-phone"></i> <?php echo esc_html( efa_option( 'efa_phone' ) ); ?>
          </a>
        </li>
        <?php else : ?>
        <li>
          <a href="tel:+237600000000" class="nav-link">
            <i class="fa fa-phone"></i> +237 6XX XXX XXX
          </a>
        </li>
        <?php endif; ?>

        <?php if ( efa_option( 'efa_email' ) ) : ?>
        <li>
          <a href="mailto:<?php echo esc_attr( efa_option( 'efa_email' ) ); ?>" class="nav-link">
            <i class="fa fa-envelope"></i> <?php echo esc_html( efa_option( 'efa_email' ) ); ?>
          </a>
        </li>
        <?php else : ?>
        <li>
          <a href="mailto:contact@efacameroon.org" class="nav-link">
            <i class="fa fa-envelope"></i> contact@efacameroon.org
          </a>
        </li>
        <?php endif; ?>

        <li class="navbar-text">
          <i class="fa fa-map-marker-alt"></i> Maroua &amp; Ngaoundéré, Cameroun
        </li>
      </ul>
    </div>
  </nav>

  <!-- MAIN NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="mainNavbar">
    <div class="container">

      <!-- Brand / Logo -->
      <a class="navbar-brand" href="#">
       <img src="<?php bloginfo('template_directory');?>/assets/img/efa-cameroon-logo.png" style="height:50px; width:auto;" alt="">
      </a>

      <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="<?php esc_attr_e( 'Toggle navigation', 'efa-cameroon' ); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'fallback_cb'    => 'efa_default_nav_menu',
            'walker'         => new EFA_Bootstrap_Nav_Walker(),
        ] );
        ?>

        <!-- CTA Button -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <?php _e( 'Nous soutenir', 'efa-cameroon' ); ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://efa.local/faire-in-don/"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></a></li>
              <li><a class="dropdown-item" href="http://efa.local/partenariat/"><?php _e( 'Devenir partenaire', 'efa-cameroon' ); ?></a></li>
              <li><a class="dropdown-item" href="http://efa.local/devenir-benevole/"><?php _e( 'Devenir bénévole', 'efa-cameroon' ); ?></a></li>
            </ul>
          </div>
        </ul>
      </div>

    </div>
  </nav>

</header><!-- #site-header -->
