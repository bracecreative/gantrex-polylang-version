<?php get_header(); ?>

<?php if (have_posts()): ?>

<?php while (have_posts()): the_post(); ?>
<?php the_content(); ?>


<!---------------------------------

Hero Section

---------------------------------->

<?php get_template_part( '/template-parts/product-single/hero' ) ?>






<!---------------------------------

Intro text section

---------------------------------->

<?php get_template_part( '/template-parts/product-single/intro', 'text' ) ?>






<!---------------------------------

Sticky mid-way nav

---------------------------------->

<?php get_template_part( '/template-parts/product-single/sticky', 'navbar' ) ?>






<!---------------------------------

Tabbed download 

---------------------------------->

<?php get_template_part( '/template-parts/product-single/tabbed', 'download' ) ?>






<!---------------------------------

Brochures download

---------------------------------->

<?php get_template_part( '/template-parts/product-single/brochures', 'download' ) ?>





<!---------------------------------

Post Slider

---------------------------------->

<?php get_template_part( '/template-parts/product-single/post', 'slider' ) ?>





<!---------------------------------

Video Slider

---------------------------------->

<?php get_template_part( '/template-parts/product-single/video', 'slider' ) ?>





<!---------------------------------

Gallery Slider

---------------------------------->

<?php get_template_part( '/template-parts/product-single/gallery', 'slider' ) ?>





<!---------------------------------

References

---------------------------------->

<?php get_template_part( '/template-parts/product-single/references' ) ?>





<!---------------------------------

Related Projects

---------------------------------->

<?php get_template_part( '/template-parts/product-single/related', 'projects' ) ?>





<!---------------------------------

Icon CTA

---------------------------------->

<?php get_template_part( '/template-parts/product-single/icon', 'cta' ) ?>


<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>



<?php get_footer(); ?>