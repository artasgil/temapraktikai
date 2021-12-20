<?php 

function atvaizduok() {
    echo "<meta description='Labas'>";
}

add_action('wp_head', 'atvaizduok');