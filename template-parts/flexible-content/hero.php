<?php
if (get_row_layout() == 'hero') {


$title = get_sub_field('title');
$subheading = get_sub_field('subheading');
$text = get_sub_field('text');
$list_title = get_sub_field('list_title');
$button = get_sub_field('button');
if($button) :
$button_url = $button['url'];

    // Translation 
    $button_link_post_id = url_to_postid($button_url); // This returns 0 if not found, so you can detect an external link
    $button_translated_url = get_the_permalink($button_link_post_id);

    if($button_link_post_id === 0) { 
        $button_processed_url = $button_url; 
    } 
    else { 
        $button_processed_url = $button_translated_url; 
    }


$button_title = $button['title'];
endif;
$image_slider = get_sub_field('image_slider');
$list_items = get_sub_field('list_items');


?>



<section id="hero" class="bg-light xl:px-10 xl:pb-12 pt-0 lg:pt-10"
    style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-1.png); background-position: center center; background-fit:cover;">
    <div class="w-full xl:max-w-[80%] mx-auto grid grid-cols-1 xl:grid-cols-2">

        <!-- Left Column -->
        <div class="w-full flex flex-col items-center xl:items-start px-12 pt-14 lg:pt-0 pb-20 xl:pb-0">
            <h1 class="heading text-primary heading--s font-bold"><?php echo $title ?></h1>
            <h2 class="subheading text-secondary text-secondary mb-5 font-medium"><?php echo $subheading ?></h2>
            <div class="hero-text max-w-none prose mb-5 font-normal text-lg lg:w-[80%] text-center lg:text-left text-primary"><?php echo $text ?></div>
            <h3 class="heading text-primary heading--xs font-bold"><?php echo $list_title ?></h3>
            <ul class="gtx-list pl-4 list-inside sen body-text font-normal text-lg text-secondary mb-6 lg:w-[80%] ">
                <?php 
                
                if($list_items) {
                    foreach($list_items as $list) {
                        $list_item = $list['list_item']; 
                        
                ?>
                <li><?php echo $list_item ?></li>
                <?php
                    }
                }

                ?>

            </ul>
            <?php if( !empty( $button_processed_url ) ): ?>
                <a class="w-full md:w-auto" href="<?php echo $button_processed_url ?>">
                    <div class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                        <span
                            class="sen uppercase font-bold tracking-widest text-base flex items-center"><?php echo $button_title ?></span>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <!-- Right Column -->
        <div class="w-full">


            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      centeredSlides:true,
  
    })" class="relative">
                <div class="absolute top-20 md:inset-y-0  left-4 md:left-6 xl:-left-20 z-10 flex items-center">
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
                    <div class="swiper-container" x-ref="container">
                        <div class="swiper-wrapper">


                            <?php 
                        
                        if($image_slider):
                        
                        
                            foreach($image_slider as $slide) : ?>
                            <!-- Slides -->
                            <div class="swiper-slide w-full">

                                <div class="product-hero-slide relative">
                                    <!-- <div class="absolute h-[20px] bottom-0 w-full bg-accent mix-blend-multiply z-10">
                                    </div>
                                    <div
                                        class="absolute h-[40px] bottom-[20px] w-full bg-secondary mix-blend-multiply z-10">
                                    </div> -->
                                    <img class="min-w-[100%]  max-h-[300px] md:max-h-[450px] lg:max-h-[600px] 2xl:min-h-[600px] max-w-[600px] object-cover object-center z-1"
                                        src="<?php echo esc_url( $slide['url'] ) ?>" alt="">
                                </div>

                            </div>
                            <?php 
                            endforeach;
                        endif; ?>


                        </div>
                    </div>
                </div>

                <div class="absolute md:inset-y-0 top-20 right-4 md:right-6 xl:-right-20 z-10 flex items-center">
                    <button @click="swiper.slideNext()"
                        class="group relative bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
                        <div
                            class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                            <div class="absolute bg-white w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286"
                            viewBox="0 0 17.686 14.286">
                            <path
                                d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                                transform="translate(-24 -981.362)" fill="#0b2b42" />
                        </svg>
                    </button>
                </div>
            </div>






        </div>

    </div>
</section>


<?php } ?>