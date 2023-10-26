<?php if (get_row_layout() == 'gallery_slider') { 
    
    $top_padding = get_sub_field('top_padding');
    $bottom_padding = get_sub_field('bottom_padding');
    
    
?>


<section id="gallery-slider" class="bg-secondary"
    style="padding-top:<?php echo $top_padding ?>px;padding-bottom:<?php echo $bottom_padding ?>px;">
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
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1150: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        1430: {
          slidesPerView: 5,
          spaceBetween: 25,
        },
      },
    })" class="relative max-w-[80%] 2xl:max-w-[60%] mx-auto flex flex-row">
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

                <?php

                $images = get_sub_field('gallery');
                $size = 'medium';


                if( $images ) :

                    foreach( $images as $image ) : 
                    
   
                
                ?>

                <div class="swiper-slide flex justify-center">
                    <div>
                        <img class="max-w-[200px] min-w-[200px] w-[200px] min-h-[200px] h-[200px] max-h-[200px] w-auto object-cover object-center"
                            src="<?php echo $image['sizes']['medium']; ?>" alt="">
                    </div>
                </div>

                <?php endforeach;
                endif;
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

</section>

<?php } ?>