<?php 

if (get_row_layout() == 'post_cards_two') { 
    

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);
$post_type = get_sub_field('choose_post_type');

$args = array(
'post_type' => $post_type,
'post_status' => 'publish',
'posts_per_page' => 3,
'orderby' => 'title',
'order' => 'ASC',
'post__not_in' => array( $post->ID ),
'suppress_filters' => false,
);
$postslist = get_posts( $args );


?>


<section class="post-slider-section bg-secondary py-[75px] lg:py-[150px]">

    <div class="max-w-full lg:max-w-[50%] mb-10 mx-auto">
        <h2 class="sen-bold uppercase text-primary tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($title_highlight, $title) ?></h2>
    </div>

    <div class="flex justify-center">




        <div class="flex flex-col lg:flex-row gap-4 justify-center w-[80%]">


            <?php

                foreach ( $postslist as $post ) :
                setup_postdata( $post );

            ?>

            <div
                class="flex flex-col w-full lg:w-1/3 lg:min-h-[412px] lg:max-h-[412px] group overflow-hidden transition-all duration-500">
                <img class="hidden lg:block transition-height h-1/2 min-w-full group-hover:h-0 duration-500 ease object-cover"
                    src="<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; } ?>"
                    alt="">

                <div class="relative h-[300px] lg:h-full group-hover:min-h-[100%] transition duration-500 ease-in-out bg-clip-content bg-cover bg-center bg-no-repeat"
                    style="background-image: url(<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; } ?>);">

                    <div
                        class="flex flex-col justify-between items-center h-[300px] lg:h-full w-full bg-light bg-opacity-70 lg:bg-opacity-100 transition-all duration-500 ease-in-out lg:group-hover:bg-opacity-90 group-hover:h-[100%] p-10">
                        <h4 class="heading--xs font-medium text-primary leading-7 mb-2 text-center">
                            <?php the_title(); ?></h4>
                        <a href="<?php the_permalink(); ?>">
                            <div class="gtx-submit block flex items-center">
                                <span
                                    class="sen-bold uppercase text-primary tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <?php
                endforeach;
            ?>


        </div>





    </div>



    <div class="mx-auto max-w-[1364px] flex justify-center pt-20">
        <a href="<?php echo get_post_type_archive_link( $post_type ); ?>">
            <div
                class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo __('read all', 'brace-starter-theme') ?>
                    <?php echo $post_type ?></span>
            </div>
        </a>
    </div>



</section>

<?php
wp_reset_postdata();
}
?>