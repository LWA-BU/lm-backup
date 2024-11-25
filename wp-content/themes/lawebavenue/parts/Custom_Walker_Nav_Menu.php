<?php
// rendre le menu accessible et transformer le lien personnalisé en button. 


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Classes CSS pour l'élément de menu
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        // ID pour l'élément de menu
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        // Vérifie si l'élément a un sous-menu
        $has_children = in_array('menu-item-has-children', $classes);

        // Générer l'ID du sous-menu (en fonction de l'élément actuel)
        $submenu_id = $has_children ? 'sub-menu-' . $item->ID : ''; // ID unique pour le sous-menu

        // Construire le bouton ou le lien
        if ($item->type === 'custom' || $has_children) {
            // Attributs du bouton
            $attributes  = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';

            // Attributs ARIA si l'élément a un sous-menu
            if ($has_children) {
                $attributes .= ' aria-expanded="false"';
                $attributes .= ' aria-controls="' . esc_attr($submenu_id) . '"'; // Lier au sous-menu avec l'ID
            }

            // Générer le bouton
            $item_output = '<button type="button"' . $attributes . '>';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);

            // Ajouter le toggle visuel
            if ($has_children) {
                $item_output .= '<span class="menu-toggle" aria-hidden="true">';
                $item_output .= '<img class="menu-toggle-img" src="' . get_template_directory_uri() . '/assets/img/down-arrow.png" alt="Toggle submenu" aria-hidden="true">';
                $item_output .= '</span>';
                $item_output .= '<span class="sr-only">' . __('Ouvrir le sous-menu', 'text-domain') . '</span>';
            }
            $item_output .= '</button>';

        } else {
            // Générer un lien classique
            $attributes  = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= ! empty($item->url)        ? ' href="' . esc_attr($item->url) . '"' : '';

            $item_output = '<a' . $attributes . '>';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
            $item_output .= '</a>';
        }

        // Ajouter le texte final et filtre WordPress
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        // Ajouter l'ID du sous-menu à `$args` pour la méthode start_lvl()
        if ($has_children) {
            $args->submenu_id = $submenu_id;
        }
    }

    // Commence le sous-menu
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);

        // Utiliser l'ID du sous-menu transmis par start_el()
        $submenu_id = isset($args->submenu_id) ? $args->submenu_id : 'sub-menu-unknown';

        // Ajoute l'ID au sous-menu
        $output .= "\n$indent<ul class=\"sub-menu\" id=\"$submenu_id\">\n";
    }
}
