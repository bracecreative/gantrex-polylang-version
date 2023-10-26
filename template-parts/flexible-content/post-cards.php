<?php 

if (get_row_layout() == 'post_cards') {

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);
$posts_selected = get_sub_field('select_posts');

if(!empty(get_sub_field('cta_button'))) :
$cta_button = get_sub_field('cta_button');
$cta_button_url = $cta_button['url'];

// Translation 
$cta_button_link_post_id = url_to_postid($cta_button_url); // This returns 0 if not found, so you can detect an external link
$cta_button_translated_url = get_the_permalink($cta_button_link_post_id);

if($cta_button_link_post_id === 0) { 
    $cta_button_processed_url = $cta_button_url; 
} 
else { 
    $cta_button_processed_url = $cta_button_translated_url; 
}


$cta_button_title = $cta_button['title'];
endif;

if(!empty(get_sub_field('background_image'))) :
    $background_image = get_sub_field('background_image')['url'];
endif;
?>

<section id="post-cards" class="bg-white py-20 bg-auto bg-left-top bg-no-repeat flex flex-col items-center" <?php if($background_image) { ?>
    style="background-image: url(<?php echo $background_image ?>);" <?php } ?>>



    <div class="max-w-full lg:max-w-[50%] mb-10 mx-auto">
        <h2 class="sen-bold uppercase text-primary tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($title_highlight, $title) ?></h2>
    </div>

    <div class="max-w-[80%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 text-center justify-center">


        <?php foreach( $posts_selected as $post ): 

    // Setup this post for WP functions (variable must be named $post).
    setup_postdata($post);

        ?>


        <a class="relative flex flex-col items-center justify-center h-[300px] 2xl:h-[400px] overflow-hidden group"
            href="<?php the_permalink(); ?>">
            <img class="absolute object-cover inset-0 h-full w-full transform transition-all duration-500 ease-in-out group-hover:scale-125"
                src="<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; }  ?>"
                alt="">
            <div
                class="absolute inset-0 bg-primary bg-opacity-50 z-1 h-full w-full transform transition-all duration-500 ease-in-out group-hover:bg-opacity-50">
            </div>

            <h3 class="max-w-[90%] text-[22px] xl:text-[35px] text-white sen-bold uppercase  z-10">
                <?php the_title(); ?></h3>

            <div class="gtx-btn flex items-center z-10">
                <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
            </div>

        </a>

        <?php
endforeach;
?>

    </div>

    <div class="mx-auto max-w-[1364px] flex justify-center pt-20">
        <a href="<?php echo $cta_button_processed_url ?>">
            <div class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                <span
                    class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo $cta_button_title ?></span>
            </div>
        </a>
    </div>

</section>

<?php
wp_reset_postdata();
}
?>