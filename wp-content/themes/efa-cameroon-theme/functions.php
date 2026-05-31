<?php
/**
 * EFA Cameroon Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'EFA_VERSION', '1.0.0' );
define( 'EFA_DIR', get_template_directory() );
define( 'EFA_URI', get_template_directory_uri() );

require_once EFA_DIR . '/inc/nav-walker.php';

/* ─────────────────────────────────────────
   THEME SETUP
───────────────────────────────────────── */
function efa_setup() {
    load_theme_textdomain( 'efa-cameroon', EFA_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    register_nav_menus( [
        'primary' => __( 'Menu principal', 'efa-cameroon' ),
        'footer'  => __( 'Menu pied de page', 'efa-cameroon' ),
    ] );
}
add_action( 'after_setup_theme', 'efa_setup' );

/* ─────────────────────────────────────────
   ENQUEUE SCRIPTS & STYLES
───────────────────────────────────────── */
function efa_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style( 'efa-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap',
        [], null );

    // Font Awesome
    wp_enqueue_style( 'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [], '6.5.0' );

    // Bootstrap CSS (local)
    wp_enqueue_style( 'bootstrap',
        EFA_URI . '/assets/css/bootstrap.min.css',
        [], '5.3.3' );

    // Theme custom CSS
    wp_enqueue_style( 'efa-custom',
        EFA_URI . '/assets/css/custom.css',
        [ 'bootstrap' ], EFA_VERSION );

    // Main theme stylesheet (style.css — kept thin)
    wp_enqueue_style( 'efa-style', get_stylesheet_uri(), [ 'efa-custom' ], EFA_VERSION );

    // Bootstrap JS (local)
    wp_enqueue_script( 'bootstrap',
        EFA_URI . '/assets/js/bootstrap.bundle.min.js',
        [], '5.3.3', true );

    // Theme JS
    wp_enqueue_script( 'efa-main',
        EFA_URI . '/assets/js/main.js',
        [ 'bootstrap' ], EFA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'efa_enqueue_assets' );

/* ─────────────────────────────────────────
   WIDGET AREAS
───────────────────────────────────────── */
function efa_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Pied de page – Colonne 1', 'efa-cameroon' ),
        'id'            => 'footer-1',
        'description'   => __( 'Zone de widget du pied de page.', 'efa-cameroon' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ] );
    register_sidebar( [
        'name'          => __( 'Barre latérale principale', 'efa-cameroon' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Barre latérale du blog/actualités.', 'efa-cameroon' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title fw-bold mb-3">',
        'after_title'   => '</h5>',
    ] );
}
add_action( 'widgets_init', 'efa_widgets_init' );

/* ─────────────────────────────────────────
   CUSTOM POST TYPE: PROJECTS
───────────────────────────────────────── */
function efa_register_post_types() {
    // Projects
    register_post_type( 'efa_project', [
        'labels' => [
            'name'               => __( 'Projets', 'efa-cameroon' ),
            'singular_name'      => __( 'Projet', 'efa-cameroon' ),
            'add_new_item'       => __( 'Ajouter un projet', 'efa-cameroon' ),
            'edit_item'          => __( 'Modifier le projet', 'efa-cameroon' ),
            'menu_name'          => __( 'Projets', 'efa-cameroon' ),
        ],
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => [ 'slug' => 'projets' ],
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'          => 'dashicons-portfolio',
        'show_in_rest'       => true,
    ] );

    // Team members
    register_post_type( 'efa_team', [
        'labels' => [
            'name'          => __( 'Équipe', 'efa-cameroon' ),
            'singular_name' => __( 'Membre', 'efa-cameroon' ),
            'add_new_item'  => __( 'Ajouter un membre', 'efa-cameroon' ),
            'menu_name'     => __( 'Équipe', 'efa-cameroon' ),
        ],
        'public'       => true,
        'has_archive'  => false,
        'supports'     => [ 'title', 'thumbnail', 'editor', 'custom-fields' ],
        'menu_icon'    => 'dashicons-groups',
        'show_in_rest' => true,
    ] );

    // Partners
    register_post_type( 'efa_partner', [
        'labels' => [
            'name'          => __( 'Partenaires', 'efa-cameroon' ),
            'singular_name' => __( 'Partenaire', 'efa-cameroon' ),
            'add_new_item'  => __( 'Ajouter un partenaire', 'efa-cameroon' ),
            'menu_name'     => __( 'Partenaires', 'efa-cameroon' ),
        ],
        'public'       => false,
        'show_ui'      => true,
        'supports'     => [ 'title', 'thumbnail', 'custom-fields' ],
        'menu_icon'    => 'dashicons-networking',
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'efa_register_post_types' );

/* ─────────────────────────────────────────
   CUSTOM TAXONOMY: DOMAINES
───────────────────────────────────────── */
function efa_register_taxonomies() {
    register_taxonomy( 'efa_domaine', [ 'efa_project', 'post' ], [
        'labels' => [
            'name'          => __( "Domaines d'intervention", 'efa-cameroon' ),
            'singular_name' => __( 'Domaine', 'efa-cameroon' ),
            'menu_name'     => __( 'Domaines', 'efa-cameroon' ),
        ],
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => [ 'slug' => 'domaines' ],
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'efa_register_taxonomies' );

/* ─────────────────────────────────────────
   CUSTOM META BOXES (PROJECTS)
───────────────────────────────────────── */
function efa_add_project_meta_boxes() {
    add_meta_box(
        'efa_project_details',
        __( 'Détails du projet', 'efa-cameroon' ),
        'efa_project_meta_box_cb',
        'efa_project',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'efa_add_project_meta_boxes' );

function efa_project_meta_box_cb( $post ) {
    wp_nonce_field( 'efa_project_save', 'efa_project_nonce' );
    $partner  = get_post_meta( $post->ID, '_efa_project_partner', true );
    $period   = get_post_meta( $post->ID, '_efa_project_period', true );
    $benef    = get_post_meta( $post->ID, '_efa_project_beneficiaires', true );
    $status   = get_post_meta( $post->ID, '_efa_project_status', true );
    if ( ! $status ) $status = 'ongoing';

    $status_options = [
        'ongoing'   => __( 'En cours', 'efa-cameroon' ),
        'completed' => __( 'Terminé', 'efa-cameroon' ),
        'planned'   => __( 'Planifié', 'efa-cameroon' ),
        'suspended' => __( 'Suspendu', 'efa-cameroon' ),
    ];
    ?>
    <p>
        <label for="efa_project_status"><strong><?php _e( 'Statut du projet', 'efa-cameroon' ); ?></strong></label><br>
        <select id="efa_project_status" name="efa_project_status" class="widefat" style="margin-top:4px;">
            <?php foreach ( $status_options as $val => $label ) : ?>
                <option value="<?php echo esc_attr( $val ); ?>" <?php selected( $status, $val ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <label for="efa_partner"><strong><?php _e( 'Partenaire financeur', 'efa-cameroon' ); ?></strong></label><br>
        <input type="text" id="efa_partner" name="efa_partner" value="<?php echo esc_attr( $partner ); ?>" class="widefat" placeholder="ex : PAM, OIM…">
    </p>
    <p>
        <label for="efa_period"><strong><?php _e( 'Période', 'efa-cameroon' ); ?></strong></label><br>
        <input type="text" id="efa_period" name="efa_period" value="<?php echo esc_attr( $period ); ?>" class="widefat" placeholder="ex : 2024–2025">
    </p>
    <p>
        <label for="efa_benef"><strong><?php _e( 'Bénéficiaires', 'efa-cameroon' ); ?></strong></label><br>
        <input type="text" id="efa_benef" name="efa_benef" value="<?php echo esc_attr( $benef ); ?>" class="widefat" placeholder="ex : 24 590">
    </p>
    <?php
}

function efa_save_project_meta( $post_id ) {
    if ( ! isset( $_POST['efa_project_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['efa_project_nonce'], 'efa_project_save' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = [
        'efa_partner'         => '_efa_project_partner',
        'efa_period'          => '_efa_project_period',
        'efa_benef'           => '_efa_project_beneficiaires',
    ];
    foreach ( $fields as $key => $meta_key ) {
        if ( isset( $_POST[ $key ] ) ) {
            update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $key ] ) );
        }
    }

    // Status field — whitelist allowed values
    $allowed_statuses = [ 'ongoing', 'completed', 'planned', 'suspended' ];
    if ( isset( $_POST['efa_project_status'] ) && in_array( $_POST['efa_project_status'], $allowed_statuses, true ) ) {
        update_post_meta( $post_id, '_efa_project_status', $_POST['efa_project_status'] );
    }
}
add_action( 'save_post', 'efa_save_project_meta' );

/* ─────────────────────────────────────────
   PROJECT STATUS BADGE HELPER (global)
───────────────────────────────────────── */
if ( ! function_exists( 'efa_project_status_badge' ) ) :
function efa_project_status_badge( $status ) {
    $map = [
        'completed' => [ 'class' => 'proj-status-completed', 'icon' => 'fa-circle-check',    'label' => __( 'Terminé',   'efa-cameroon' ) ],
        'planned'   => [ 'class' => 'proj-status-planned',   'icon' => 'fa-clock',            'label' => __( 'Planifié',  'efa-cameroon' ) ],
        'suspended' => [ 'class' => 'proj-status-suspended', 'icon' => 'fa-circle-pause',     'label' => __( 'Suspendu',  'efa-cameroon' ) ],
        'ongoing'   => [ 'class' => 'proj-status-ongoing',   'icon' => 'fa-circle-dot',       'label' => __( 'En cours',  'efa-cameroon' ) ],
    ];
    $s = isset( $map[ $status ] ) ? $map[ $status ] : $map['ongoing'];
    return '<span class="proj-status-badge ' . esc_attr( $s['class'] ) . '">'
         . '<i class="fa-solid ' . esc_attr( $s['icon'] ) . ' me-1"></i>'
         . esc_html( $s['label'] )
         . '</span>';
}
endif;

/* ─────────────────────────────────────────
   TEAM MEMBER META BOX
───────────────────────────────────────── */
function efa_add_team_meta_boxes() {
    add_meta_box( 'efa_team_details', __( 'Détails du membre', 'efa-cameroon' ), 'efa_team_meta_box_cb', 'efa_team', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'efa_add_team_meta_boxes' );

function efa_team_meta_box_cb( $post ) {
    wp_nonce_field( 'efa_team_save', 'efa_team_nonce' );
    $role = get_post_meta( $post->ID, '_efa_team_role', true );
    ?>
    <p>
        <label for="efa_team_role"><strong><?php _e( 'Rôle / Poste', 'efa-cameroon' ); ?></strong></label><br>
        <input type="text" id="efa_team_role" name="efa_team_role" value="<?php echo esc_attr( $role ); ?>" class="widefat" placeholder="ex : Directeur Exécutif">
    </p>
    <?php
}

function efa_save_team_meta( $post_id ) {
    if ( ! isset( $_POST['efa_team_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['efa_team_nonce'], 'efa_team_save' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    if ( isset( $_POST['efa_team_role'] ) ) {
        update_post_meta( $post_id, '_efa_team_role', sanitize_text_field( $_POST['efa_team_role'] ) );
    }
}
add_action( 'save_post', 'efa_save_team_meta' );

/* ─────────────────────────────────────────
   THEME OPTIONS PAGE
───────────────────────────────────────── */
function efa_add_theme_options_page() {
    add_menu_page(
        __( 'Options EFA', 'efa-cameroon' ),
        __( 'Options EFA', 'efa-cameroon' ),
        'manage_options',
        'efa-options',
        'efa_theme_options_page_cb',
        'dashicons-admin-site-alt3',
        60
    );
}
add_action( 'admin_menu', 'efa_add_theme_options_page' );

function efa_theme_options_page_cb() {
    if ( isset( $_POST['efa_options_nonce'] ) && wp_verify_nonce( $_POST['efa_options_nonce'], 'efa_save_options' ) ) {
        $fields = [ 'efa_phone', 'efa_email', 'efa_address_1', 'efa_address_2', 'efa_facebook', 'efa_twitter', 'efa_instagram', 'efa_linkedin' ];
        foreach ( $fields as $field ) {
            update_option( $field, sanitize_text_field( $_POST[ $field ] ?? '' ) );
        }
        echo '<div class="updated"><p>' . __( 'Options enregistrées.', 'efa-cameroon' ) . '</p></div>';
    }
    $get = fn( $k ) => get_option( $k, '' );
    ?>
    <div class="wrap">
        <h1><?php _e( 'Options du thème EFA Cameroon', 'efa-cameroon' ); ?></h1>
        <form method="post">
            <?php wp_nonce_field( 'efa_save_options', 'efa_options_nonce' ); ?>
            <table class="form-table">
                <tr><th><?php _e( 'Téléphone', 'efa-cameroon' ); ?></th><td><input type="text" name="efa_phone" value="<?php echo esc_attr( $get( 'efa_phone' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><?php _e( 'Email', 'efa-cameroon' ); ?></th><td><input type="email" name="efa_email" value="<?php echo esc_attr( $get( 'efa_email' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><?php _e( 'Adresse bureau 1', 'efa-cameroon' ); ?></th><td><input type="text" name="efa_address_1" value="<?php echo esc_attr( $get( 'efa_address_1' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><?php _e( 'Adresse bureau 2', 'efa-cameroon' ); ?></th><td><input type="text" name="efa_address_2" value="<?php echo esc_attr( $get( 'efa_address_2' ) ); ?>" class="regular-text"></td></tr>
                <tr><th>Facebook</th><td><input type="url" name="efa_facebook" value="<?php echo esc_attr( $get( 'efa_facebook' ) ); ?>" class="regular-text"></td></tr>
                <tr><th>Twitter / X</th><td><input type="url" name="efa_twitter" value="<?php echo esc_attr( $get( 'efa_twitter' ) ); ?>" class="regular-text"></td></tr>
                <tr><th>Instagram</th><td><input type="url" name="efa_instagram" value="<?php echo esc_attr( $get( 'efa_instagram' ) ); ?>" class="regular-text"></td></tr>
                <tr><th>LinkedIn</th><td><input type="url" name="efa_linkedin" value="<?php echo esc_attr( $get( 'efa_linkedin' ) ); ?>" class="regular-text"></td></tr>
            </table>
            <?php submit_button( __( 'Enregistrer', 'efa-cameroon' ) ); ?>
        </form>
    </div>
    <?php
}

/* ─────────────────────────────────────────
   HELPER: GET THEME OPTION
───────────────────────────────────────── */
function efa_option( $key, $default = '' ) {
    return get_option( $key, $default );
}

/* ─────────────────────────────────────────
   NEWSLETTER AJAX HANDLER
───────────────────────────────────────── */
function efa_newsletter_subscribe() {
    check_ajax_referer( 'efa_newsletter', 'nonce' );
    $email = sanitize_email( $_POST['email'] ?? '' );
    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => __( 'Adresse e-mail invalide.', 'efa-cameroon' ) ] );
    }
    // Add your newsletter integration here (Mailchimp, etc.)
    // For now we store locally
    $subscribers = get_option( 'efa_newsletter_subscribers', [] );
    if ( ! in_array( $email, $subscribers ) ) {
        $subscribers[] = $email;
        update_option( 'efa_newsletter_subscribers', $subscribers );
    }
    wp_send_json_success( [ 'message' => __( 'Merci pour votre inscription !', 'efa-cameroon' ) ] );
}
add_action( 'wp_ajax_efa_newsletter', 'efa_newsletter_subscribe' );
add_action( 'wp_ajax_nopriv_efa_newsletter', 'efa_newsletter_subscribe' );

/* ─────────────────────────────────────────
   LOCALIZE SCRIPT DATA
───────────────────────────────────────── */
function efa_localize_scripts() {
    wp_localize_script( 'efa-main', 'efaAjax', [
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'efa_newsletter' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'efa_localize_scripts' );

/* ─────────────────────────────────────────
   EXCERPT LENGTH
───────────────────────────────────────── */
function efa_excerpt_length( $length ) { return 25; }
add_filter( 'excerpt_length', 'efa_excerpt_length' );

function efa_excerpt_more( $more ) { return '…'; }
add_filter( 'excerpt_more', 'efa_excerpt_more' );