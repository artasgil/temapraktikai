<?php 
    $copyright = get_theme_mod('bit_tema_copyright');
    $show_menu = get_theme_mod('bit_tema_show_menu');// true arba false reiksme
    //pazymetas = true
    //nepazymetas = false
?>

<footer class="footer">
    <?php wp_footer(); ?>

    <?php if($show_menu): ?>
        <?php 
            wp_nav_menu(array(
                'theme_location'=> 'menu-2'
            ));
        ?>
    <?php endif; ?>

    <?php if($copyright): ?> 
        <p class="copyright-text"><?php echo $copyright; ?></p>
    <?php endif; ?>    
</footer>