<?php
/* 

Template Name: Content Builder 
Template Post Type: post, page, products, industries, services, references

*/

?>

<?php get_header(); ?>


<?php if (have_rows('content_builder')) : ?>

<?php while (have_rows('content_builder')) : the_row(); ?>

<?php
        get_template_part('template-parts/flexible-content/hero', 'slider');
        get_template_part('template-parts/flexible-content/hero', 'sliding-doors');
        get_template_part('template-parts/flexible-content/two', 'column');
        get_template_part('template-parts/flexible-content/references');
        get_template_part('template-parts/flexible-content/news', 'slider');
        get_template_part('template-parts/flexible-content/post', 'cards');
        get_template_part('template-parts/flexible-content/testimonial', 'slider');
        get_template_part('template-parts/flexible-content/image', 'hero');
        get_template_part('template-parts/flexible-content/plain', 'text');
        get_template_part('template-parts/flexible-content/cta', 'cards');
        get_template_part('template-parts/flexible-content/timeline');
        get_template_part('template-parts/flexible-content/tabbed', 'content');
        get_template_part('template-parts/flexible-content/team', 'cards');
        get_template_part('template-parts/flexible-content/data', 'circles');
        get_template_part('template-parts/flexible-content/hero');
        get_template_part('template-parts/flexible-content/sticky', 'navbar');
        get_template_part('template-parts/flexible-content/tabbed', 'download');
        get_template_part('template-parts/flexible-content/brochure', 'download');
        get_template_part('template-parts/flexible-content/locator', 'map');
        get_template_part('template-parts/flexible-content/contact', 'form');
        get_template_part('template-parts/flexible-content/video', 'slider');
        get_template_part('template-parts/flexible-content/gallery', 'slider');
        get_template_part('template-parts/flexible-content/related', 'projects');
        get_template_part('template-parts/flexible-content/icon', 'cta');
        get_template_part('template-parts/flexible-content/find', 'us');
        get_template_part('template-parts/flexible-content/text', 'image');
        get_template_part('template-parts/flexible-content/post-cards-two');
        get_template_part('template-parts/flexible-content/banner', 'cta');
        get_template_part('template-parts/flexible-content/reference-single-content');
        get_template_part('template-parts/flexible-content/plain-text-with-image');
        get_template_part('template-parts/flexible-content/sts-crane');
        get_template_part('template-parts/flexible-content/image');
        get_template_part('template-parts/flexible-content/news-picker-slider');
        get_template_part('template-parts/flexible-content/ports-navbar');
        get_template_part('template-parts/flexible-content/breadcrumbs');
        get_template_part('template-parts/flexible-content/ports-tabbed-content');
?>

<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>