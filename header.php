<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body 

    <?php body_class(); ?>>
    <?php do_action('wp_body_open'); ?>

    <main>

        <!-- Get the header  -->
        <?php get_template_part('template-parts/header/home', 'header'); ?>

        <!-- Fixed CTA  -->
        <?php get_template_part('template-parts/header/fixed', 'cta'); ?>

        <img src="<?php echo get_template_directory_uri(); ?>/src/svg/scroll-top.svg" width="60px" height="60px" class="fixed hidden lg:block right-[20px] bottom-[20px] cursor-pointer hover:animate-bounce z-50 scrollTopButton">