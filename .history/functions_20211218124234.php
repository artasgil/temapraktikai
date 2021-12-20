<?php


//1. Prijungti stiliu
//2. Prijungti Javascript dokumenteli
//3. Customizeryje susikurti savo nustatyma: Copyright text


//uz stiliaus prijungima tiek uz skripto pajungima
function bit_tema_enqueue() {
    wp_enqueue_style( 'bit-tema', get_template_directory_uri() . "assets/css/style.css" );
    wp_enqueue_script('bit-tema-script');
}





function atvaizduok() {
    echo "<meta description='Labas'>";
}

// add_action('wp_head', 'atvaizduok');

function labas() {
    echo "<h1>Labas</h1>";
}

//  add_action("wp_footer", 'labas');

register_nav_menus( array( 
    'menu-1' => __('Primary Header Menu', 'bit-tema'), //vietos pavadinimas atvaizdavimui
    'menu-2' => __('Secondary Footer Menu', 'bit-tema'),
));