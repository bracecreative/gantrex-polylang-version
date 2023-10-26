<?php if (get_row_layout() == 'related_projects') { 

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);
$posts_selected = get_sub_field('choose_posts');
$section_id = get_sub_field('rp_id');

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


?>

<section id="<?php echo $section_id ?>" class="bg-secondary flex flex-col items-center py-[75px] lg:py-[150px] scroll-mt-[200px]">

    <div class="max-w-full lg:max-w-[50%] mb-10">
        <h2 class="sen-bold uppercase text-primary tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($title_highlight, $title) ?></h2>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 4,
  
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        1430: {
          slidesPerView: 1,
          spaceBetween: 4,
        },
      },
    })" class="relative max-w-[80%] 2xl:max-w-[60%] mx-auto flex flex-row mb-10">
        <div class="absolute inset-y-0 left-0 md:-left-10 lg:-left-20 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                class="group relative bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">

                <div
                    class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                    <div class="absolute bg-white w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
                </div>

                <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286"
                    viewBox="0 0 17.686 14.286">
                    <path
                        d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                        transform="translate(-24 -981.362)" fill="#0b2b42" />
                </svg>
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">

                <!-- Slides -->


                <?php foreach( $posts_selected as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);

                    ?>


                <div class="swiper-slide">
                    <div class="flex flex-col lg:flex-row">
                        <div class="min-h-full w-full lg:w-1/3">
                            <img class="min-h-full object-cover object-center w-full"
                                src="<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; }  ?>"
                                alt="">
                        </div>
                        <div class="bg-white w-full lg:w-2/3 p-12">
                            <h4 class="sen-bold text-[25px] uppercase text-primary tracking-tighter mb-2">
                                <?php echo get_the_title() ?></h4>

                            <!-- Deprecated - Does a reference post have a subheading?  -->
                            <!-- <h2 class="subheading text-secondary text-secondary mb-5 font-medium">Sub-heading</h2> -->
                            <p class="gothic-book text-base text-dark mb-4"><?php echo get_the_excerpt() ?></p>
                            <a href="<?php echo get_permalink() ?>">
                                <div class="gtx-read-more-alt">
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


                <!-- End Slides    -->



            </div>
        </div>

        <div class="absolute inset-y-0 right-0 md:-right-10 lg:-right-20 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                class="group relative bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
                <div
                    class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                    <div class="absolute bg-white w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286">
                    <path
                        d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                        transform="translate(-24 -981.362)" fill="#0b2b42" />
                </svg>
            </button>
        </div>
    </div>


    <a class="w-[80%] md:w-auto" href="<?php echo get_post_type_archive_link('references'); ?>">
        <div class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
            <span
                class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo __('View All References', 'brace-starter-theme') ?></span>
        </div>
    </a>

</section>

<?php
wp_reset_postdata();

} ?>