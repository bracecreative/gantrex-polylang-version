<?php 

if (get_row_layout() == 'testimonial_slider') { 


$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);

?>


<section id="testimonial-slider" class="pt-32 pb-20 bg-primary bg-no-repeat bg-cover bg-center"
    style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-4.png); background-position: center center; background-fit:cover;">
    <div class="max-w-full lg:max-w-[50%] mx-auto mb-4">
        <h2 class="sen-bold uppercase text-white tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($title_highlight, $title) ?></h2>
    </div>


    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
      loop: true,
      centeredSlides: false,
      slidesPerView: 1,
      spaceBetween: 1,
  
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1430: {
          slidesPerView: 1,
          spaceBetween: 0,
          slidesPerGroup: 1,
        },
      },
    })" class="relative max-w-[80%] 2xl:max-w-[50%] mx-auto flex flex-row">
        <div class="absolute inset-y-0 left-0 md:-left-10 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                class="group relative -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full focus:outline-none">

                <div
                    class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                    <div class="absolute bg-primary w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
                </div>

                <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286"
                    viewBox="0 0 17.686 14.286">
                    <path
                        d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                        transform="translate(-24 -981.362)" fill="#fff" />
                </svg>
            </button>
        </div>

        <div class="w-full m-auto text-center">
            <div class="swiper-container" x-ref="container">
                <div class="swiper-wrapper">


                    <?php


        // Check rows exists.
        if( have_rows('testimonial') ):

            // Loop through rows.
            while( have_rows('testimonial') ) : the_row();

                // Load sub field value.
                $client_photo = get_sub_field('client_photo')['url'];
                $testimonial_text = get_sub_field('testimonial_text');
                $client_details = get_sub_field('client_details');
                // Do something...
            ?>

                    <!-- Slides -->
                    <div class="swiper-slide p-4 group">
                        <div
                            class="flex place-content-center flex-col overflow-hidden min-h-[381px] transition-all duration-500">
                            <div class="relative h-full transition duration-500 ease-in-out">

                                <div class="flex flex-col justify-center h-full w-full">
                                    <img class="h-[100px] m-auto mb-[17px] w-[100px] rounded-full"
                                        src="<?php echo $client_photo; ?>" alt="">
                                    <article
                                        class="text-white text-[20px] mb-[20px] max-w-[90%] m-auto gothic-book leading-[22px]">
                                        <?php echo $testimonial_text; ?></article>
                                    <p class="text-[15px] gothic-medium tracking-[2.25px] text-secondary uppercase">
                                        <?php echo $client_details; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
        // End loop.
        endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>

                </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 md:-right-10 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                class="group relative -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full focus:outline-none">
                <div
                    class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                    <div class="absolute bg-primary w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286">
                    <path
                        d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                        transform="translate(-24 -981.362)" fill="#fff" />
                </svg>
            </button>
        </div>
</section>

<?php } ?>