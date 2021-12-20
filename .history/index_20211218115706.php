<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        
        <!-- JEigu mes norime savo tema suristi su pluginu -->
        <!-- <meta description="Labas"> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

        <?php wp_body_open(); ?>

        <?php get_header(); ?>

        <?php if( have_posts()) : ?>
            
            <?php while(have_posts()): ?>
                <?php the_post() ?>
                <article <?php post_class(); ?>">
                    <header class="article-header-title">
                        <?php the_title('<h2 class="article-title"', '</h2>'); ?>
                    </header>
                    <div class="article-div-content">
                        <?php //the_content(esc_html__('Continue reading &rarr;', 'bit-tema')) ?>
                        <?php the_excerpt(); ?>
                    </div>
                </article>

            <?php endwhile; ?>    
        <?php else: ?>
            <div class="no-results">
                <p class="no-results-heading"><?php echo esc_html__('Noposts are found','bit-tema') posts are found ?> </p>
            </div>
        <?php endif; ?>    
        <div class="no-results">
                <p class="no-results-heading"><?php echo esc_html__('No posts are found','bit-tema') ?> </p>
            </div>
    </body>
</html>