<?php 

function atvaizduok() {
    echo "<meta description='Labas'></meta>";
}

add_action('wp_head', 'atvaizduok');