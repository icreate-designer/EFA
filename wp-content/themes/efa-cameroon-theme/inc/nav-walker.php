<?php
/**
 * EFA Bootstrap 5 Nav Walker
 * Converts WordPress nav menus to Bootstrap 5 compatible markup.
 */

if ( ! class_exists( 'EFA_Bootstrap_Nav_Walker' ) ) :

class EFA_Bootstrap_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="dropdown-menu">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $is_active    = in_array( 'current-menu-item', $item->classes ) || in_array( 'current-menu-ancestor', $item->classes );

        if ( $depth === 0 ) {
            $li_class = 'nav-item' . ( $has_children ? ' dropdown' : '' );
            $output  .= '<li class="' . esc_attr( $li_class ) . '">';

            if ( $has_children ) {
                $output .= '<a class="nav-link dropdown-toggle' . ( $is_active ? ' active' : '' ) . '" href="' . esc_url( $item->url ) . '" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html( $item->title ) . '</a>';
            } else {
                $output .= '<a class="nav-link' . ( $is_active ? ' active' : '' ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
            }
        } else {
            if ( 'divider' === strtolower( $item->title ) ) {
                $output .= '<li><hr class="dropdown-divider"></li>';
            } else {
                $output .= '<li><a class="dropdown-item' . ( $is_active ? ' active' : '' ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a></li>';
            }
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</li>';
        }
    }
}

endif;

/**
 * Fallback nav menu when no menu is assigned.
 */
function efa_default_nav_menu() {
    echo '<ul class="navbar-nav m-auto mb-2 mb-lg-0">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/' ) ) . '">' . __( 'Accueil', 'efa-cameroon' ) . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#">' . __( 'À propos', 'efa-cameroon' ) . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#">' . __( 'Projets', 'efa-cameroon' ) . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#">' . __( 'Actualités', 'efa-cameroon' ) . '</a></li>';
    echo '</ul>';
}
