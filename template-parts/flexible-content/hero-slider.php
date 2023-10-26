<?php if (get_row_layout() == 'hero_slider') { ?>

<section id="hero-slider" class="border-b-8 border-accent lg:border-b-0">

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
            autoplay: {
                delay: 5000,
            },
            speed: 2000,
            effect: 'fade',
            fadeEffect: { 
                crossFade: true 
            },
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            })" class="relative w-full mx-auto flex flex-row">

        <div class="hidden md:flex items-center absolute inset-y-0 left-24 z-10 ">
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

        <div class="w-full">
            <div class="swiper-container max-h-[100vh] relative" x-ref="container">

                <div class="hidden w-full bg-primary md:flex absolute z-30 bottom-[150px] left-[50%] -translate-x-1/2"
                style="transform: translate(-70px, 0px);">
                    <div class="swiper-pagination flex space-x-2"></div>
                </div>

                <div
                    class="hidden lg:flex justify-center items-center absolute bottom-0 left-0 h-[128px] w-full bg-secondary bg-opacity-80 z-20 space-x-4">

                    <a class="w-full md:w-auto" href="<?php echo get_post_type_archive_link('products'); ?>">
                        <div
                            class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base flex items-center text-white"><?php echo __('Our Products', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                    <a class="w-full md:w-auto" href="<?php echo get_post_type_archive_link('services'); ?>">
                        <div
                            class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base flex items-center text-white"><?php echo __('Our Services', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                </div>

                <div class="swiper-wrapper">

                    <?php if( have_rows('slide') ): 

                        // Loop through rows.
                        while( have_rows('slide') ) : the_row();

                            // Video or Image
                            $voi = get_sub_field('video_or_image_background');

                            // Load sub field value.
                            if(get_sub_field('background_video')) :
                            $video = get_sub_field('background_video');
                            endif;
                            if(get_sub_field('background_image')) :
                            $image = get_sub_field('background_image')['url'];
                            endif;
                            $title = get_sub_field('title');
                            $text_highlight = get_sub_field('text_highlight');
                            $new_title = brace_highlighter($text_highlight, $title);
                            $subheading = get_sub_field('sub-heading');
                            $button_one_processed_url = '';
                            $button_two_processed_url = '';
                            
                            // Buttons 
                            $button_one = get_sub_field('button_one');
                            if($button_one):
                                $button_one_url = get_sub_field('button_one')['url'];

                                // Translation 
                                $button_one_link_post_id = url_to_postid($button_one_url); // This returns 0 if not found, so you can detect an external link
                                $button_one_translated_url = get_the_permalink($button_one_link_post_id);

                                if($button_one_link_post_id === 0) { 
                                    $button_one_processed_url = $button_one_url; 
                                } 
                                else { 
                                    $button_one_processed_url = $button_one_translated_url; 
                                }

                                $button_one_title = get_sub_field('button_one')['title'];
                            endif;

                            $button_two = get_sub_field('button_two');
                            if($button_two):
                                $button_two_url = get_sub_field('button_two')['url'];

                                // Translation 
                                $button_two_link_post_id = url_to_postid($button_two_url); // This returns 0 if not found, so you can detect an external link
                                $button_two_translated_url = get_the_permalink($button_two_link_post_id);

                                if($button_two_link_post_id === 0) { 
                                    $button_two_processed_url = $button_two_url; 
                                } 
                                else { 
                                    $button_two_processed_url = $button_two_translated_url; 
                                }


                                $button_two_title = get_sub_field('button_two')['title'];
                            endif;

                    ?>

                    <!-- Slides -->
                    <div class="swiper-slide">

                        <div class="relative min-h-[100vh] bg-cover bg-center"
                            style="<?php if($voi === 'image') : ?>background-image: url('<?php echo $image ?>')<?php endif; ?>">

                            <div class="absolute inset-0 w-screen min-h-[100vh] bg-primary bg-opacity-50 z-10"></div>
   

                            <div class="absolute flex flex-col justify-center items-center pt-40 md:pt-0 w-full h-full">
                                <div class="flex flex-col justify-center items-center z-20 max-w-[80%] lg:max-w-[60%]">
                                    <h1 class="hero-slider__heading sen-bold text-[30px] md:text-[55px] 2xl:text-[65px] uppercase text-center text-white leading-none tracking-tighter mb-8">
                                        <?php echo $new_title ?></h1>
                                    <div class="hero-slider__subheading gothic-book text-[18px] text-white text-center mb-8">
                                        <?php echo $subheading ?></div>
                                    <div class="flex flex-col md:flex-row md:gap-4">

                                        <a class="w-full md:w-auto" href="<?php echo $button_one_processed_url ?>">
                                            <div class="gtx-btn px-6 py-2 flex items-center justify-center">
                                                <span
                                                    class="sen uppercase text-white font-bold tracking-widest text-base flex items-center"><?php echo $button_one_title ?></span>
                                            </div>
                                        </a>

                                        <a class="w-full md:w-auto" href="<?php echo $button_two_processed_url ?>">
                                            <div class="gtx-btn px-6 py-2 flex items-center justify-center ">
                                                <span
                                                    class="sen uppercase text-white font-bold tracking-widest text-base flex items-center"><?php echo $button_two_title ?></span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>



                            <?php if($voi === 'video') : ?>
                            <video autoplay loop muted class="absolute z-1 w-full object-cover min-w-full min-h-[100%] max-w-none">
                                <source src="<?php echo $video ?>" />
                                <?php echo __('Your browser does not support the video tag.', 'brace-starter-theme') ?>
                            </video>
                            <?php endif; ?>
                        </div>

                    </div>



                    <?php

                        // End loop.
                        endwhile;

                        // Do something...
                        endif; 
                        
                    ?>


                </div>




            </div>
        </div>

        <div class="hidden md:flex items-center absolute inset-y-0 right-24 z-10 ">
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

</section>

<?php } ?>