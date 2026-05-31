<?php
/**
 * Template Name: Faire un Don
 * EFA Cameroon – Donation Page
 */
get_header();
?>

<!-- ═══ HERO ═══ -->
<section class="don-hero" style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1400&auto=format&fit=crop');">
  <div class="don-hero-overlay"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row justify-content-center text-center py-5 mt-3">
      <div class="col-lg-8">
        <div class="d-flex justify-content-center mb-3">
          <span class="badge-success-light"><?php _e( 'Agir maintenant', 'efa-cameroon' ); ?></span>
        </div>
        <h1 class="display-4 fw-bolder text-white mb-3">
          <?php _e( 'Votre don change des vies', 'efa-cameroon' ); ?>
        </h1>
        <p class="lead text-white" style="opacity:0.85;">
          <?php _e( 'Chaque franc contribue directement à la sécurité alimentaire, à la nutrition et à la résilience des communautés vulnérables au Cameroun.', 'efa-cameroon' ); ?>
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ═══ IMPACT STRIP ═══ -->
<section class="don-impact-strip py-4">
  <div class="container">
    <div class="row g-3 justify-content-center text-center">
      <div class="col-6 col-md-3">
        <div class="impact-chip">
          <span class="impact-num">100 000+</span>
          <span class="impact-label"><?php _e( 'bénéficiaires cumulés', 'efa-cameroon' ); ?></span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="impact-chip">
          <span class="impact-num">10 ans</span>
          <span class="impact-label"><?php _e( "d'action humanitaire", 'efa-cameroon' ); ?></span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="impact-chip">
          <span class="impact-num">3</span>
          <span class="impact-label"><?php _e( 'régions couvertes', 'efa-cameroon' ); ?></span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="impact-chip">
          <span class="impact-num">6+</span>
          <span class="impact-label"><?php _e( 'partenaires internationaux', 'efa-cameroon' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ MAIN DONATION SECTION ═══ -->
<section class="py-5" style="background-color:#f7f9fc;">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- LEFT: Donation Form -->
      <div class="col-lg-7">
        <div class="don-card shadow-lg">

          <!-- Step indicator -->
          <div class="don-steps mb-4">
            <div class="don-step active" id="step-indicator-1">
              <span class="step-num">1</span>
              <span class="step-txt"><?php _e( 'Montant', 'efa-cameroon' ); ?></span>
            </div>
            <div class="don-step-line"></div>
            <div class="don-step" id="step-indicator-2">
              <span class="step-num">2</span>
              <span class="step-txt"><?php _e( 'Vos infos', 'efa-cameroon' ); ?></span>
            </div>
            <div class="don-step-line"></div>
            <div class="don-step" id="step-indicator-3">
              <span class="step-num">3</span>
              <span class="step-txt"><?php _e( 'Paiement', 'efa-cameroon' ); ?></span>
            </div>
          </div>

          <!-- ── STEP 1: Amount ── -->
          <div id="step-1">
            <h4 class="fw-bold mb-1"><?php _e( 'Choisissez votre montant', 'efa-cameroon' ); ?></h4>
            <p class="mb-4"><?php _e( 'Sélectionnez un montant ou saisissez le vôtre.', 'efa-cameroon' ); ?></p>

            <!-- Frequency toggle -->
            <div class="don-frequency-toggle mb-4">
              <button class="freq-btn active" data-freq="once"><?php _e( 'Don unique', 'efa-cameroon' ); ?></button>
              <button class="freq-btn" data-freq="monthly"><?php _e( 'Don mensuel', 'efa-cameroon' ); ?></button>
            </div>

            <!-- Preset amounts -->
            <div class="row g-3 mb-3" id="preset-amounts">
              <div class="col-6 col-md-3">
                <button class="amount-btn" data-amount="2000">2 000 F</button>
              </div>
              <div class="col-6 col-md-3">
                <button class="amount-btn active" data-amount="5000">5 000 F</button>
              </div>
              <div class="col-6 col-md-3">
                <button class="amount-btn" data-amount="10000">10 000 F</button>
              </div>
              <div class="col-6 col-md-3">
                <button class="amount-btn" data-amount="25000">25 000 F</button>
              </div>
              <div class="col-6 col-md-3">
                <button class="amount-btn" data-amount="50000">50 000 F</button>
              </div>
              <div class="col-6 col-md-3">
                <button class="amount-btn" data-amount="100000">100 000 F</button>
              </div>
              <div class="col-6 col-md-6">
                <div class="amount-custom-wrap">
                  <span class="amount-currency">FCFA</span>
                  <input type="number" id="custom-amount" class="amount-custom-input"
                    placeholder="<?php esc_attr_e( 'Autre montant…', 'efa-cameroon' ); ?>">
                </div>
              </div>
            </div>

            <!-- Impact hint -->
            <div class="don-impact-hint mb-4" id="impact-hint">
              <i class="fa fa-heart text-success me-2"></i>
              <span id="impact-text"><?php _e( '5 000 FCFA permettent de fournir des kits nutritionnels à une famille pendant un mois.', 'efa-cameroon' ); ?></span>
            </div>

            <!-- Allocation -->
            <h6 class="fw-bold mb-2"><?php _e( 'Affecter mon don à (optionnel)', 'efa-cameroon' ); ?></h6>
            <div class="row g-2 mb-4">
              <div class="col-6 col-md-4">
                <label class="domain-choice active">
                  <input type="radio" name="domain" value="general" checked>
                  <i class="fa fa-globe-africa"></i>
                  <span><?php _e( 'Général', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-6 col-md-4">
                <label class="domain-choice">
                  <input type="radio" name="domain" value="food">
                  <i class="fa fa-wheat-awn"></i>
                  <span><?php _e( 'Alimentation', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-6 col-md-4">
                <label class="domain-choice">
                  <input type="radio" name="domain" value="nutrition">
                  <i class="fa fa-heart-pulse"></i>
                  <span><?php _e( 'Nutrition', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-6 col-md-4">
                <label class="domain-choice">
                  <input type="radio" name="domain" value="wash">
                  <i class="fa fa-droplet"></i>
                  <span><?php _e( 'WASH', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-6 col-md-4">
                <label class="domain-choice">
                  <input type="radio" name="domain" value="resilience">
                  <i class="fa fa-seedling"></i>
                  <span><?php _e( 'Résilience', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-6 col-md-4">
                <label class="domain-choice">
                  <input type="radio" name="domain" value="education">
                  <i class="fa fa-book-open"></i>
                  <span><?php _e( 'Éducation', 'efa-cameroon' ); ?></span>
                </label>
              </div>
            </div>

            <button class="btn btn-success-gradient w-100 py-3" id="btn-next-1">
              <?php _e( 'Continuer', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-2"></i>
            </button>
          </div><!-- /step-1 -->


          <!-- ── STEP 2: Donor Info ── -->
          <div id="step-2" style="display:none;">
            <h4 class="fw-bold mb-1"><?php _e( 'Vos informations', 'efa-cameroon' ); ?></h4>
            <p class="mb-4"><?php _e( 'Ces informations nous permettent d\'émettre votre reçu de don.', 'efa-cameroon' ); ?></p>

            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Prénom *', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" id="donor-firstname"
                  placeholder="<?php esc_attr_e( 'Ex. Marie', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Nom *', 'efa-cameroon' ); ?></label>
                <input type="text" class="don-input" id="donor-lastname"
                  placeholder="<?php esc_attr_e( 'Ex. Nguetse', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Adresse e-mail *', 'efa-cameroon' ); ?></label>
                <input type="email" class="don-input" id="donor-email"
                  placeholder="<?php esc_attr_e( 'vous@exemple.com', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-md-6">
                <label class="don-label"><?php _e( 'Téléphone', 'efa-cameroon' ); ?></label>
                <input type="tel" class="don-input" id="donor-phone"
                  placeholder="<?php esc_attr_e( '+237 6XX XXX XXX', 'efa-cameroon' ); ?>">
              </div>
              <div class="col-12">
                <label class="don-label"><?php _e( 'Pays', 'efa-cameroon' ); ?></label>
                <select class="don-input" id="donor-country">
                  <option value="CM" selected>Cameroun</option>
                  <option value="FR">France</option>
                  <option value="BE">Belgique</option>
                  <option value="CH">Suisse</option>
                  <option value="CA">Canada</option>
                  <option value="other"><?php _e( 'Autre', 'efa-cameroon' ); ?></option>
                </select>
              </div>
              <div class="col-12">
                <label class="don-check">
                  <input type="checkbox" id="anon-check">
                  <span><?php _e( 'Je souhaite faire un don anonyme', 'efa-cameroon' ); ?></span>
                </label>
              </div>
              <div class="col-12">
                <label class="don-check">
                  <input type="checkbox" id="newsletter-check" checked>
                  <span><?php _e( 'Recevoir nos actualités et rapports d\'impact par e-mail', 'efa-cameroon' ); ?></span>
                </label>
              </div>
            </div>

            <div class="d-flex gap-3">
              <button class="btn btn-outline-secondary flex-shrink-0" id="btn-back-2">
                <i class="fa fa-arrow-left me-1"></i> <?php _e( 'Retour', 'efa-cameroon' ); ?>
              </button>
              <button class="btn btn-success-gradient flex-grow-1 py-3" id="btn-next-2">
                <?php _e( 'Continuer', 'efa-cameroon' ); ?> <i class="fa fa-arrow-right ms-2"></i>
              </button>
            </div>
          </div><!-- /step-2 -->


          <!-- ── STEP 3: Payment ── -->
          <div id="step-3" style="display:none;">
            <h4 class="fw-bold mb-1"><?php _e( 'Choisissez votre mode de paiement', 'efa-cameroon' ); ?></h4>
            <p class="mb-4"><?php _e( 'Votre transaction est sécurisée et cryptée.', 'efa-cameroon' ); ?></p>

            <div class="row g-3 mb-4">
              <div class="col-6">
                <label class="payment-method active" data-method="mtn">
                  <input type="radio" name="payment" value="mtn" checked>
                  <div class="pm-logo mtn-logo">MTN<br><small>Mobile Money</small></div>
                </label>
              </div>
              <div class="col-6">
                <label class="payment-method" data-method="orange">
                  <input type="radio" name="payment" value="orange">
                  <div class="pm-logo orange-logo">Orange<br><small>Money</small></div>
                </label>
              </div>
              <div class="col-6">
                <label class="payment-method" data-method="card">
                  <input type="radio" name="payment" value="card">
                  <div class="pm-logo card-logo"><i class="fa fa-credit-card fa-lg mb-1"></i><br><small><?php _e( 'Carte bancaire', 'efa-cameroon' ); ?></small></div>
                </label>
              </div>
              <div class="col-6">
                <label class="payment-method" data-method="transfer">
                  <input type="radio" name="payment" value="transfer">
                  <div class="pm-logo transfer-logo"><i class="fa fa-building-columns fa-lg mb-1"></i><br><small><?php _e( 'Virement bancaire', 'efa-cameroon' ); ?></small></div>
                </label>
              </div>
            </div>

            <!-- Mobile money fields -->
            <div id="mtn-fields" class="payment-fields mb-4">
              <label class="don-label"><?php _e( 'Numéro MTN Mobile Money *', 'efa-cameroon' ); ?></label>
              <input type="tel" class="don-input" placeholder="+237 67X XXX XXX">
              <p class="don-help-text mt-2"><i class="fa fa-circle-info me-1 text-success"></i><?php _e( 'Vous recevrez une demande de confirmation sur ce numéro.', 'efa-cameroon' ); ?></p>
            </div>
            <div id="orange-fields" class="payment-fields mb-4" style="display:none;">
              <label class="don-label"><?php _e( 'Numéro Orange Money *', 'efa-cameroon' ); ?></label>
              <input type="tel" class="don-input" placeholder="+237 69X XXX XXX">
              <p class="don-help-text mt-2"><i class="fa fa-circle-info me-1 text-success"></i><?php _e( 'Vous recevrez un SMS de confirmation.', 'efa-cameroon' ); ?></p>
            </div>
            <div id="card-fields" class="payment-fields mb-4" style="display:none;">
              <p class="don-help-text"><i class="fa fa-lock me-1 text-success"></i><?php _e( 'Paiement sécurisé via Stripe / CinetPay.', 'efa-cameroon' ); ?></p>
            </div>
            <div id="transfer-fields" class="payment-fields mb-4" style="display:none;">
              <div class="bank-details-box">
                <p class="fw-bold mb-1"><?php _e( 'Coordonnées bancaires EFA Cameroon', 'efa-cameroon' ); ?></p>
                <p class="mb-0"><?php _e( 'Banque : Afriland First Bank – Maroua', 'efa-cameroon' ); ?><br>
                <?php _e( 'IBAN / Compte : 10005 00100 XXXXXXXXXX 00', 'efa-cameroon' ); ?><br>
                <?php _e( 'Référence : DON-EFA-2025', 'efa-cameroon' ); ?></p>
              </div>
            </div>

            <!-- Order summary -->
            <div class="don-summary mb-4">
              <div class="d-flex justify-content-between align-items-center">
                <span><?php _e( 'Montant du don', 'efa-cameroon' ); ?></span>
                <strong id="summary-amount">5 000 FCFA</strong>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <span><?php _e( 'Fréquence', 'efa-cameroon' ); ?></span>
                <strong id="summary-freq"><?php _e( 'Don unique', 'efa-cameroon' ); ?></strong>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <span><?php _e( 'Affectation', 'efa-cameroon' ); ?></span>
                <strong id="summary-domain"><?php _e( 'Général', 'efa-cameroon' ); ?></strong>
              </div>
            </div>

            <div class="d-flex gap-3">
              <button class="btn btn-outline-secondary flex-shrink-0" id="btn-back-3">
                <i class="fa fa-arrow-left me-1"></i> <?php _e( 'Retour', 'efa-cameroon' ); ?>
              </button>
              <button class="btn btn-success-gradient flex-grow-1 py-3" id="btn-submit">
                <i class="fa fa-lock me-2"></i><?php _e( 'Confirmer mon don', 'efa-cameroon' ); ?>
              </button>
            </div>
            <p class="text-center mt-3" style="font-size:12px; color:#aaa;">
              <i class="fa fa-shield-halved me-1"></i>
              <?php _e( 'Paiement 100% sécurisé — EFA Cameroon ne stocke pas vos données bancaires.', 'efa-cameroon' ); ?>
            </p>
          </div><!-- /step-3 -->


          <!-- ── STEP 4: Thank you ── -->
          <div id="step-4" style="display:none;" class="text-center py-4">
            <div class="thankyou-circle mb-4">
              <i class="fa fa-heart"></i>
            </div>
            <h3 class="fw-bolder mb-2"><?php _e( 'Merci pour votre générosité !', 'efa-cameroon' ); ?></h3>
            <p><?php _e( 'Votre don a bien été reçu. Un reçu vous sera envoyé par e-mail. Ensemble, nous transformons des vies.', 'efa-cameroon' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-success-gradient mt-3">
              <?php _e( "Retour à l'accueil", 'efa-cameroon' ); ?>
            </a>
          </div>

        </div><!-- /don-card -->
      </div><!-- /col-lg-7 -->


      <!-- RIGHT: Trust sidebar -->
      <div class="col-lg-5">

        <!-- Impact per amount -->
        <div class="don-sidebar-card mb-4">
          <h6 class="fw-bold mb-3"><?php _e( 'Ce que votre don permet', 'efa-cameroon' ); ?></h6>
          <ul class="impact-list">
            <li>
              <span class="impact-pill">2 000 F</span>
              <span><?php _e( 'Un repas nutritif pour 4 enfants', 'efa-cameroon' ); ?></span>
            </li>
            <li>
              <span class="impact-pill">5 000 F</span>
              <span><?php _e( 'Kit nutritionnel pour une famille (1 mois)', 'efa-cameroon' ); ?></span>
            </li>
            <li>
              <span class="impact-pill">10 000 F</span>
              <span><?php _e( 'Formation d\'un agriculteur en agroécologie', 'efa-cameroon' ); ?></span>
            </li>
            <li>
              <span class="impact-pill">25 000 F</span>
              <span><?php _e( 'Accès à l\'eau potable pour 10 ménages', 'efa-cameroon' ); ?></span>
            </li>
            <li>
              <span class="impact-pill">50 000 F</span>
              <span><?php _e( 'Dotation scolaire pour 5 enfants déplacés', 'efa-cameroon' ); ?></span>
            </li>
            <li>
              <span class="impact-pill">100 000 F</span>
              <span><?php _e( 'Appui à un groupe de femmes en activité génératrice de revenus', 'efa-cameroon' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Trust badges -->
        <div class="don-sidebar-card mb-4">
          <h6 class="fw-bold mb-3"><?php _e( 'Pourquoi nous faire confiance ?', 'efa-cameroon' ); ?></h6>
          <ul class="trust-list">
            <li>
              <div class="trust-icon"><i class="fa fa-file-contract"></i></div>
              <div>
                <strong><?php _e( 'ONG légalement reconnue', 'efa-cameroon' ); ?></strong>
                <p><?php _e( 'Enregistrée auprès du MINATD depuis 2014, récépissé no. XXXXXXXXX.', 'efa-cameroon' ); ?></p>
              </div>
            </li>
            <li>
              <div class="trust-icon"><i class="fa fa-handshake"></i></div>
              <div>
                <strong><?php _e( 'Partenaire d\'agences ONU', 'efa-cameroon' ); ?></strong>
                <p><?php _e( 'PAM, OIM, PNUD — audits réguliers, rapports financiers transparents.', 'efa-cameroon' ); ?></p>
              </div>
            </li>
            <li>
              <div class="trust-icon"><i class="fa fa-chart-pie"></i></div>
              <div>
                <strong><?php _e( '90% des dons sur le terrain', 'efa-cameroon' ); ?></strong>
                <p><?php _e( 'Moins de 10% de frais administratifs. Votre argent va à l\'essentiel.', 'efa-cameroon' ); ?></p>
              </div>
            </li>
            <li>
              <div class="trust-icon"><i class="fa fa-shield-halved"></i></div>
              <div>
                <strong><?php _e( 'Reçu fiscal disponible', 'efa-cameroon' ); ?></strong>
                <p><?php _e( 'Un reçu vous est envoyé par e-mail pour toute contribution.', 'efa-cameroon' ); ?></p>
              </div>
            </li>
          </ul>
        </div>

        

      </div><!-- /col-lg-5 -->
    </div><!-- /row -->
  </div>
</section>


<!-- ═══ TESTIMONIALS ═══ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="d-flex justify-content-center mb-2">
          <span class="badge-success-light"><?php _e( 'Témoignages', 'efa-cameroon' ); ?></span>
        </div>
        <h2 class="fw-bolder"><?php _e( 'Ce que disent nos donateurs', 'efa-cameroon' ); ?></h2>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $testimonials = [
        [ 'name' => 'Aminatou K.', 'loc' => 'Yaoundé', 'text' => 'Je soutiens EFA depuis 2 ans. Leurs rapports d\'impact sont clairs et je vois concrètement où va mon argent. Une organisation sérieuse et engagée.' ],
        [ 'name' => 'Jean-Paul M.', 'loc' => 'Paris, France', 'text' => 'En tant que Camerounais de la diaspora, je suis fier de contribuer à une ONG locale qui travaille avec les agences de l\'ONU. EFA, c\'est la crédibilité.' ],
        [ 'name' => 'Fatima O.', 'loc' => 'Maroua', 'text' => 'Mon don de 5 000 F par mois semble petit, mais multiplié par des centaines de personnes, il change des vies. Merci EFA pour votre transparence.' ],
      ];
      foreach ( $testimonials as $t ) : ?>
      <div class="col-md-4">
        <div class="testimonial-card">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <p class="mb-3"><?php echo esc_html( $t['text'] ); ?></p>
          <div class="d-flex align-items-center gap-3">
            <div class="testimonial-avatar"></div>
            <div>
              <strong><?php echo esc_html( $t['name'] ); ?></strong>
              <p style="font-size:12px; margin:0;"><?php echo esc_html( $t['loc'] ); ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ BOTTOM CTA ═══ -->
<section class="py-5">
  <div class="container">
    <div class="cta-banner">
      <div class="row align-items-center g-4 position-relative" style="z-index:1;">
        <div class="col-lg-8">
          <h3 class="fw-bolder text-white mb-2"><?php _e( 'Des questions sur votre don ?', 'efa-cameroon' ); ?></h3>
          <p class="text-white mb-0" style="opacity:0.75;"><?php _e( 'Notre équipe est disponible pour vous accompagner et répondre à toutes vos questions.', 'efa-cameroon' ); ?></p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="mailto:<?php echo esc_attr( efa_option( 'efa_email', 'contact@efacameroon.org' ) ); ?>"
            class="btn btn-success"><?php _e( 'Nous contacter', 'efa-cameroon' ); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ PAGE STYLES ═══ -->
<style>
/* ── Hero ── */
.don-hero {
  position: relative;
  min-height: 380px;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding: 60px 0 40px;
}
.don-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(1,56,37,0.88) 0%, rgba(9,130,92,0.75) 60%, rgba(82,204,16,0.5) 100%);
}

/* ── Impact strip ── */
.don-impact-strip { background: #fff; border-bottom: 1px solid #eef2ee; }
.impact-chip {
  display: flex; flex-direction: column;
  align-items: center;
  padding: 16px 10px;
}
.impact-num {
  font-size: 1.7rem; font-weight: 800;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.impact-label { font-size: 12px; color: #888; margin-top: 2px; }

/* ── Don card ── */
.don-card {
  background: #fff;
  border-radius: 2rem;
  padding: 40px;
}
@media (max-width: 576px) { .don-card { padding: 24px 18px; } }

/* ── Steps ── */
.don-steps { display: flex; align-items: center; }
.don-step {
  display: flex; align-items: center; gap: 8px;
  opacity: 0.4; transition: opacity 0.3s;
}
.don-step.active { opacity: 1; }
.step-num {
  width: 30px; height: 30px; border-radius: 50%;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  color: #fff; font-weight: 700; font-size: 13px;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.don-step:not(.active) .step-num { background: #ddd; }
.step-txt { font-size: 13px; font-weight: 600; color: #333; white-space: nowrap; }
.don-step-line { flex: 1; height: 2px; background: #e0e0e0; margin: 0 8px; }

/* ── Frequency toggle ── */
.don-frequency-toggle {
  display: inline-flex; background: #f2f4f3;
  border-radius: 100px; padding: 4px; gap: 4px;
}
.freq-btn {
  padding: 8px 24px; border-radius: 100px;
  border: none; background: transparent;
  font-weight: 600; font-size: 14px; color: #555;
  cursor: pointer; transition: all 0.25s;
}
.freq-btn.active {
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  color: #fff;
}

/* ── Amount buttons ── */
.amount-btn {
  width: 100%; padding: 14px 8px;
  border: 2px solid #e0e0e0; border-radius: 12px;
  background: #fff; font-weight: 700; font-size: 15px;
  color: #333; cursor: pointer; transition: all 0.2s;
}
.amount-btn:hover { border-color: #198754; color: #198754; }
.amount-btn.active {
  border-color: #198754;
  background: linear-gradient(90deg, rgba(9,130,92,0.08) 0%, rgba(82,204,16,0.08) 100%);
  color: #198754;
}
.amount-custom-wrap {
  display: flex; align-items: center;
  border: 2px solid #e0e0e0; border-radius: 12px;
  overflow: hidden; background: #fff;
  transition: border-color 0.2s;
}
.amount-custom-wrap:focus-within { border-color: #198754; }
.amount-currency {
  padding: 0 12px; font-weight: 600; font-size: 12px;
  color: #888; white-space: nowrap; border-right: 1px solid #eee;
}
.amount-custom-input {
  border: none; outline: none; padding: 14px 12px;
  width: 100%; font-size: 14px; font-family: inherit;
}

/* ── Impact hint ── */
.don-impact-hint {
  background: #f4fdf8; border-left: 3px solid #198754;
  padding: 12px 16px; border-radius: 0 12px 12px 0;
  font-size: 14px; color: #333;
}

/* ── Domain choices ── */
.domain-choice {
  display: flex; flex-direction: column; align-items: center;
  justify-content: center; gap: 6px;
  padding: 14px 8px; border-radius: 14px;
  border: 2px solid #e0e0e0; background: #fff;
  cursor: pointer; transition: all 0.2s;
  width: 100%; text-align: center;
  font-size: 13px; font-weight: 600; color: #555;
}
.domain-choice input { display: none; }
.domain-choice i { font-size: 1.3rem; color: #198754; }
.domain-choice.active, .domain-choice:hover {
  border-color: #198754;
  background: linear-gradient(135deg, rgba(9,130,92,0.07) 0%, rgba(82,204,16,0.07) 100%);
  color: #198754;
}

/* ── Don input ── */
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

/* ── Payment methods ── */
.payment-method {
  display: block; border: 2px solid #e0e0e0;
  border-radius: 16px; padding: 16px 10px;
  cursor: pointer; text-align: center;
  transition: all 0.2s; background: #fff;
}
.payment-method input { display: none; }
.payment-method.active { border-color: #198754; background: #f4fdf8; }
.pm-logo { font-weight: 800; font-size: 15px; line-height: 1.3; }
.pm-logo small { font-weight: 400; font-size: 11px; color: #888; }
.mtn-logo { color: #ffd700; }
.orange-logo { color: #f76c00; }
.card-logo, .transfer-logo { color: #198754; }
.bank-details-box {
  background: #f4fdf8; border-radius: 12px;
  padding: 16px; font-size: 14px; color: #333;
  border-left: 3px solid #198754;
}
.don-help-text { font-size: 13px; color: #666; }

/* ── Summary ── */
.don-summary {
  background: #f7f9fc; border-radius: 14px;
  padding: 16px 20px; font-size: 14px; color: #555;
}

/* ── Thank you ── */
.thankyou-circle {
  width: 90px; height: 90px; border-radius: 50%;
  background: linear-gradient(90deg, rgba(9,130,92,1) 0%, rgba(82,204,16,1) 100%);
  display: flex; align-items: center; justify-content: center;
  font-size: 2.2rem; color: #fff; margin: 0 auto;
}

/* ── Sidebar cards ── */
.don-sidebar-card {
  background: #fff; border-radius: 2rem;
  padding: 28px; box-shadow: 0 4px 24px rgba(0,0,0,0.07);
}

/* ── Impact list ── */
.impact-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 14px; }
.impact-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; color: #444; }
.impact-pill {
  font-size: 12px; font-weight: 700; white-space: nowrap;
  background: linear-gradient(90deg, rgba(9,130,92,0.12) 0%, rgba(82,204,16,0.12) 100%);
  color: #198754; border-radius: 100px; padding: 4px 12px;
  flex-shrink: 0; min-width: 80px; text-align: center;
}

/* ── Trust list ── */
.trust-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 18px; }
.trust-list li { display: flex; align-items: flex-start; gap: 14px; }
.trust-icon {
  width: 40px; height: 40px; border-radius: 50%; flex-shrink: 0;
  background: rgba(25,135,84,0.1); color: #198754;
  display: flex; align-items: center; justify-content: center; font-size: 15px;
}
.trust-list strong { font-size: 14px; font-weight: 700; color: #222; }
.trust-list p { font-size: 12px; color: #888; margin: 3px 0 0; }

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

/* ── Testimonials ── */
.testimonial-card {
  background: #fff; border-radius: 1.5rem;
  padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,0.07);
  height: 100%;
}
.testimonial-quote { font-size: 1.6rem; color: #198754; opacity: 0.3; margin-bottom: 10px; }
.testimonial-card p { font-size: 14px; color: #555; line-height: 1.7; }
.testimonial-avatar {
  width: 44px; height: 44px; border-radius: 50%;
  background: linear-gradient(135deg, #198754, #52cc10); flex-shrink: 0;
}

/* ── CTA banner ── */
.cta-banner {
  background: linear-gradient(90deg, rgba(1,56,37,1) 0%, rgba(47,133,1,1) 100%);
  border-radius: 2rem; padding: 40px 48px;
  position: relative; overflow: hidden;
}
.cta-banner::before {
  content: '';
  position: absolute; top: -60px; right: -60px;
  width: 220px; height: 220px; border-radius: 50%;
  background: rgba(255,255,255,0.05);
}
</style>


<!-- ═══ PAGE SCRIPT ═══ -->
<script>
(function () {
  const impactMap = {
    2000:  '2 000 FCFA permettent de fournir un repas nutritif à 4 enfants.',
    5000:  '5 000 FCFA permettent de fournir des kits nutritionnels à une famille pendant un mois.',
    10000: '10 000 FCFA financent la formation d\'un agriculteur en agroécologie.',
    25000: '25 000 FCFA donnent accès à l\'eau potable à 10 ménages.',
    50000: '50 000 FCFA couvrent la dotation scolaire de 5 enfants déplacés.',
    100000:'100 000 FCFA appuient un groupe de femmes en activité génératrice de revenus.',
  };
  const domainLabels = {
    general:'Général', food:'Alimentation', nutrition:'Nutrition',
    wash:'WASH', resilience:'Résilience', education:'Éducation'
  };

  let selectedAmount = 5000;
  let selectedFreq   = 'once';

  // Preset amount buttons
  document.querySelectorAll('.amount-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('custom-amount').value = '';
      selectedAmount = parseInt(btn.dataset.amount);
      updateImpact();
    });
  });

  document.getElementById('custom-amount').addEventListener('input', function () {
    document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
    selectedAmount = parseInt(this.value) || 0;
    updateImpact();
  });

  function updateImpact () {
    const closest = Object.keys(impactMap).reduce((a, b) =>
      Math.abs(b - selectedAmount) < Math.abs(a - selectedAmount) ? b : a);
    document.getElementById('impact-text').textContent = impactMap[closest] || '';
    document.getElementById('summary-amount').textContent =
      selectedAmount.toLocaleString('fr-FR') + ' FCFA';
  }

  // Frequency
  document.querySelectorAll('.freq-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.freq-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      selectedFreq = btn.dataset.freq;
      document.getElementById('summary-freq').textContent =
        selectedFreq === 'monthly' ? 'Don mensuel' : 'Don unique';
    });
  });

  // Domain choices
  document.querySelectorAll('.domain-choice').forEach(label => {
    label.addEventListener('click', () => {
      document.querySelectorAll('.domain-choice').forEach(l => l.classList.remove('active'));
      label.classList.add('active');
      const val = label.querySelector('input').value;
      document.getElementById('summary-domain').textContent = domainLabels[val] || val;
    });
  });

  // Payment method switching
  document.querySelectorAll('.payment-method').forEach(label => {
    label.addEventListener('click', () => {
      document.querySelectorAll('.payment-method').forEach(l => l.classList.remove('active'));
      label.classList.add('active');
      const method = label.dataset.method;
      document.querySelectorAll('.payment-fields').forEach(f => f.style.display = 'none');
      const el = document.getElementById(method + '-fields');
      if (el) el.style.display = 'block';
    });
  });

  // Steps
  function showStep(n) {
    [1,2,3,4].forEach(i => {
      const el = document.getElementById('step-' + i);
      if (el) el.style.display = (i === n) ? 'block' : 'none';
      const ind = document.getElementById('step-indicator-' + i);
      if (ind) ind.classList.toggle('active', i === n || i < n);
    });
  }

  document.getElementById('btn-next-1').addEventListener('click', () => showStep(2));
  document.getElementById('btn-next-2').addEventListener('click', () => {
    updateImpact();
    showStep(3);
  });
  document.getElementById('btn-back-2').addEventListener('click', () => showStep(1));
  document.getElementById('btn-back-3').addEventListener('click', () => showStep(2));
  document.getElementById('btn-submit').addEventListener('click', () => showStep(4));
})();
</script>

<?php get_footer(); ?>