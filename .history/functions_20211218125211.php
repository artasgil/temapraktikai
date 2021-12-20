<?php


//1. Prijungti stiliu x 
//2. Prijungti Javascript dokumenteli x
//3. Customizeryje susikurti savo nustatyma: Copyright text


//uz stiliaus prijungima tiek uz skripto pajungima
function bit_tema_enqueue() {
    wp_enqueue_style( 'bit-tema-style', get_template_directory_uri() . "/assets/css/style.css" );
    wp_enqueue_script('bit-tema-script', get_template_directory_uri() . "/assets/js/script.js" );
}

add_action("wp_enqueue_scripts", "bit_tema_enqueue");


function bit_tema_customizer_section($wp_customize) {
    $wp_customize->add_section('bit_tema_settings', array(
        'title' => __('')
    ))
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