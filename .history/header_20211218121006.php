<header class="site-header">
    <?php 
    
    wp_nav_menu
    
    ?>
    <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </p>
    <p class="site-description">
        <?php bloginfo('description'); ?> 
    </p>
</header>