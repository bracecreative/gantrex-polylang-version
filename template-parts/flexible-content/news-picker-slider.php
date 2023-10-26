<?php if (get_row_layout() == 'news_picker_slider') { 

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);
$posts = get_sub_field('choose_posts');

// Options 
$bg_selected = get_sub_field('background_colour');
$show_social_links = get_sub_field('show_social_links');

$bg_colour;

if($bg_selected === 'light') {
    $bg_colour = 'bg-light';
} elseif($bg_selected === 'dark') {
    $bg_colour = 'bg-primary';
}

?>

<section id="news-slider" class="post-slider-section py-20 <?php echo $bg_colour ?>">

    <div class="max-w-full lg:max-w-[50%] mb-10 mx-auto">
        <h2 class="sen-bold uppercase text-primary tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($title_highlight, $title) ?></h2>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
  loop: false,
  centeredSlides: false,
  slidesPerView: 1,
  spaceBetween: 1,

  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    1430: {
      slidesPerView: 3,
      spaceBetween: 0,
      slidesPerGroup: 3,
    },
  },
})" class="relative max-w-[80%] 2xl:max-w-[1364px] mx-auto flex flex-row">
        <div class="absolute inset-y-0 left-0 md:-left-10 z-10 flex items-center">
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

        <div class="post-slider w-full">
            <div class="swiper-container overflow-visible" x-ref="container">
                <div class="swiper-wrapper">

                    <!-- Slides -->

                    <?php foreach( $posts as $post ): 

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post);

                    ?>

                    <!-- Display Post Here -->

                    <div class="swiper-slide p-4 group">
                        <div class="flex flex-col overflow-hidden h-[600px] transition-all duration-500">
                            <img class="h-[250px] group-hover:h-0 transition-all duration-500 ease object-cover" src="<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; }  ?>" alt="">
                            <div class="relative h-full bg-cover"
                                style="background-image: url(<?php if(!empty(get_the_post_thumbnail_url($post, 'medium'))) { echo get_the_post_thumbnail_url($post, 'medium'); } else { echo get_template_directory_uri() . '/images/crane-placeholder.jpg'; }  ?>);">

                                <div class="flex flex-col justify-end h-full w-full bg-secondary p-10">
                                    <p class="gothic-medium uppercase tracking-widest text-white mb-4">
                                        <?php 
                                        if(!empty(get_the_category())) : echo get_the_category()[0]->category_nicename; endif;

                                        ?>
                                    </p>
                                    <h4 class="heading--xs font-medium text-white leading-7 mb-2"><?php the_title() ?>
                                    </h4>
                                    <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">
                                        <?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                    <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">
                                        <?php echo wp_trim_words(get_the_excerpt(), 120); ?></p>
                                    <a href="<?php echo get_permalink() ?>">
                                        <div class="gtx-read-more flex items-center">
                                            <span
                                                class="sen-bold uppercase text-white tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                      endforeach;
                    ?>

                </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 md:-right-10 z-10 flex items-center">
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

    <div class="mx-auto max-w-[1364px] flex justify-center pt-20 mb-4">
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">
            <div
                class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent transition-all duration-500 ease-in-out">
                <span
                    class="sen uppercase font-bold tracking-widest text-base flex items-center <?php if($bg_selected === 'light') { echo 'text-primary'; } elseif($bg_selected === 'dark') { echo 'text-white'; } ?>"><?php echo __('read all news', 'brace-starter-theme') ?></span>
            </div>
        </a>
    </div>

    <?php if($show_social_links) : ?>
    <div class="mx-auto max-w-[1364px] flex flex-col lg:flex-row lg:space-x-4 items-center justify-center">
        <a class="w-[80%] md:w-auto" href="https://www.linkedin.com/company/gantrex" target="_blank">
            <div class="linkedin-btn py-2 flex items-center justify-center">
                <span class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('follow us on', 'brace-starter-theme') ?></span>
            </div>
        </a>

        <a class="w-[80%] md:w-auto" href="https://www.youtube.com/channel/UC5q1Dhep2WXUz06_nrogjyg" target="_blank">
            <div class="youtube-btn-alt py-2 flex items-center justify-center">
                <span class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('watch us on', 'brace-starter-theme') ?></span>
            </div>
        </a>
    </div>
    <?php endif; ?>



</section>

<?php 
wp_reset_postdata();
} 

?>