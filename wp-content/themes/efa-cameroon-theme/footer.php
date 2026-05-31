  <!-- NEWSLETTER -->
  <div class="footer-newsletter">
    <div class="container">
      <div class="row align-items-center g-3">
        <div class="col-md-5">
          <h4><?php _e( 'Abonnez-vous à notre newsletter', 'efa-cameroon' ); ?></h4>
          <p><?php _e( 'Restez informé de nos actions, de nos projets et de notre impact sur le terrain.', 'efa-cameroon' ); ?></p>
        </div>
        <div class="col-md-7">
          <div class="d-flex gap-2" id="newsletter-form">
            <input type="email" id="newsletter-email" class="newsletter-input"
              placeholder="<?php esc_attr_e( 'Votre adresse e-mail…', 'efa-cameroon' ); ?>">
            <button class="btn-subscribe" id="newsletter-submit">
              <?php _e( "S'inscrire", 'efa-cameroon' ); ?>
            </button>
          </div>
          <p id="newsletter-msg" class="mt-2 text-white" style="display:none;"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER MAIN -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-5">

        <!-- Brand -->
        <div class="col-lg-3">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="footer-brand-name"><?php bloginfo( 'name' ); ?></span>
          </div>
          <p class="footer-brand-desc">
            <?php _e( 'Education For Advancement Cameroon – ONG nationale œuvrant pour la résilience et le développement communautaire depuis 2014.', 'efa-cameroon' ); ?>
          </p>
          <div class="footer-socials">
            <?php if ( efa_option( 'efa_facebook' ) ) : ?>
            <a href="<?php echo esc_url( efa_option( 'efa_facebook' ) ); ?>" class="footer-social-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
            <?php else : ?>
            <a href="#" class="footer-social-btn"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if ( efa_option( 'efa_twitter' ) ) : ?>
            <a href="<?php echo esc_url( efa_option( 'efa_twitter' ) ); ?>" class="footer-social-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            <?php else : ?>
            <a href="#" class="footer-social-btn"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if ( efa_option( 'efa_instagram' ) ) : ?>
            <a href="<?php echo esc_url( efa_option( 'efa_instagram' ) ); ?>" class="footer-social-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <?php else : ?>
            <a href="#" class="footer-social-btn"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>
            <?php if ( efa_option( 'efa_linkedin' ) ) : ?>
            <a href="<?php echo esc_url( efa_option( 'efa_linkedin' ) ); ?>" class="footer-social-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <?php else : ?>
            <a href="#" class="footer-social-btn"><i class="fab fa-linkedin-in"></i></a>
            <?php endif; ?>
          </div>
        </div>

        <!-- About links -->
        <div class="col-lg-2 col-md-3">
          <h6><?php _e( 'À propos', 'efa-cameroon' ); ?></h6>
          <ul>
            <li><a href="#"><?php _e( 'Notre mission', 'efa-cameroon' ); ?></a></li>
            <li><a href="#"><?php _e( 'Notre équipe', 'efa-cameroon' ); ?></a></li>
            <li><a href="#"><?php _e( 'Notre histoire', 'efa-cameroon' ); ?></a></li>
            <li><a href="#"><?php _e( 'Nos partenaires', 'efa-cameroon' ); ?></a></li>
          </ul>
        </div>

        <!-- Act links -->
        <div class="col-lg-2 col-md-3">
          <h6><?php _e( 'Agir', 'efa-cameroon' ); ?></h6>
          <ul>
            <li><a href="#"><?php _e( 'Faire un don', 'efa-cameroon' ); ?></a></li>
            <li><a href="#"><?php _e( 'Devenir partenaire', 'efa-cameroon' ); ?></a></li>
            <li><a href="#"><?php _e( 'Devenir bénévole', 'efa-cameroon' ); ?></a></li>
            <li><a href="<?php echo esc_url( get_post_type_archive_link( 'efa_project' ) ); ?>"><?php _e( 'Projets en cours', 'efa-cameroon' ); ?></a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="col-lg-4">
          <h6><?php _e( 'Contact', 'efa-cameroon' ); ?></h6>
          <?php if ( efa_option( 'efa_address_1' ) ) : ?>
          <div class="footer-contact-item">
            <div class="footer-contact-icon"><i class="fa fa-map-marker-alt"></i></div>
            <span><?php echo esc_html( efa_option( 'efa_address_1' ) ); ?></span>
          </div>
          <?php else : ?>
          <div class="footer-contact-item">
            <div class="footer-contact-icon"><i class="fa fa-map-marker-alt"></i></div>
            <span><?php _e( 'Maroua – Entrée Pont Palar Jeudi, Extrême-Nord, Cameroun', 'efa-cameroon' ); ?></span>
          </div>
          <?php endif; ?>

          <?php if ( efa_option( 'efa_address_2' ) ) : ?>
          <div class="footer-contact-item">
            <div class="footer-contact-icon"><i class="fa fa-map-marker-alt"></i></div>
            <span><?php echo esc_html( efa_option( 'efa_address_2' ) ); ?></span>
          </div>
          <?php else : ?>
          <div class="footer-contact-item">
            <div class="footer-contact-icon"><i class="fa fa-map-marker-alt"></i></div>
            <span><?php _e( 'Ngaoundéré – Délégation Régionale du MINADER, Adamaoua', 'efa-cameroon' ); ?></span>
          </div>
          <?php endif; ?>

          <div class="footer-contact-item">
            <div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
            <span><?php echo esc_html( efa_option( 'efa_email', 'contact@efacameroon.org' ) ); ?></span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- FOOTER BOTTOM -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'Tous droits réservés', 'efa-cameroon' ); ?></p>
        </div>
        <div class="col-md-4 text-center">
          <a href="#" class="me-3"><?php _e( 'Mentions Légales', 'efa-cameroon' ); ?></a>
          <a href="#"><?php _e( 'Politique de Confidentialité', 'efa-cameroon' ); ?></a>
        </div>
        <div class="col-md-4 text-end">
          <p><?php _e( 'Fait avec', 'efa-cameroon' ); ?> <span class="heart">&#9829;</span> <?php _e( 'au Cameroun', 'efa-cameroon' ); ?></p>
        </div>
      </div>
    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>
