<?php 

$show_menu = get_theme_mod('bit_tema_show_menu_header');
$show_title = get_theme_mod('bit_tema_show_title_header');
?>

<header class="header">
    
    <?php if(get_site_icon_url()) : ?>
        <div class="site-logo">
            <img src="<?php echo get_site_icon_url(); ?>" />
        </div>
    <?php endif; ?>

    <?php if($show_title): ?>
    <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
    
        </a>
    </p>
    <?php endif; ?>

      
    <p class="site-description">
        <?php bloginfo('description'); ?> 
    </p>

    <?php if($show_menu): ?>

        <?php 
            echo '<input class="menu-btn" type="checkbox" id="menu-btn" />';
            echo '<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>';

            wp_nav_menu(array(
                'theme_location'=> 'menu-1',
                'container_class' => 'menu',
                'container' => '',
                'menu_class' => 'menu'
            ));

        ?>
        
    <?php endif; ?>
</header>