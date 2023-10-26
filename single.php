
<?php get_header(); ?>

<!---------------------------------

Hero Section

---------------------------------->

<?php get_template_part( '/template-parts/news-single/news', 'hero' ) ?>

<?php get_template_part( '/template-parts/news-single/news', 'main' ) ?>

<?php //get_template_part( '/template-parts/news-single/news', 'related' ) ?>

<?php get_template_part( '/template-parts/news-single/explore', 'more' ) ?>

<?php get_footer(); ?>