<?php 

function atvaizduok() {
    echo "<meta description='Labas'>";
}

add_action('wp_head', 'atvaizduok');

function labas() {
    echo "<h1>Labas</h1>";
}

add_action("")