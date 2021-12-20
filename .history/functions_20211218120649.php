<?php 

function atvaizduok() {
    echo "<meta description='Labas'>";
}

// add_action('wp_head', 'atvaizduok');

function labas() {
    echo "<h1>Labas</h1>";
}

//  add_action("wp_footer", 'labas');

register_nav_menus( array() {
    'menu-1' => __('Header Menu', 'bit-tema'),
    'menu-2' => __('Footer Menu', 'bit-tema'),
});