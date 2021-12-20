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
        
        <?php     

    </body>
</html>