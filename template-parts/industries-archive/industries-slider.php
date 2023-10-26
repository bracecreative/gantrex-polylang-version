<div class="testimonials overflow-hidden p-10 my-10 bg-secondary" style="background-position:center;background-size:105%;background-repeat:no-repeat;background-image: url(<?php echo get_template_directory_uri() . '/images/overlay.png' ?>);">


<div x-data="{swiper: null}"
  x-init="swiper = new Swiper($refs.container, {
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
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1430: {
          slidesPerView: 1,
          spaceBetween: 0,
          slidesPerGroup: 3,
        },
      },
    })"
  class="relative max-w-[80%] 2xl:max-w-[1364px] mx-auto flex flex-row"
>
  <div class="absolute inset-y-0 left-0 md:-left-10 z-10 flex items-center">
    <button @click="swiper.slidePrev()" 
            class="group relative -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full focus:outline-none">
            
            <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                <div class="absolute bg-secondary w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
            </div>

            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#fff"/></svg>
    </button>
  </div>

  <div class="post-slider w-full m-auto text-center">
    <div class="swiper-container overflow-visible" x-ref="container">
      <div class="swiper-wrapper">

        
    <?php

    $page_id = 32;

        // Check rows exists.
        if( have_rows('testimonials', $page_id) ):

            // Loop through rows.
            while( have_rows('testimonials', $page_id) ) : the_row();

                // Load sub field value.
                $testimonialImage = get_sub_field('image', $page_id);
                $testimonialText = get_sub_field('text', $page_id);
                $testimonialClient = get_sub_field('client_and_company', $page_id);
                // Do something...
            ?>

        <!-- Slides -->
        <div class="swiper-slide p-4 group">
          <div class="flex place-content-center flex-col overflow-hidden min-h-[381px] transition-all duration-500">
              <div class="relative h-full transition duration-500 ease-in-out">

                  <div class="flex flex-col justify-center h-full w-full">
                      <img class="h-[100px] rounded-[50%] m-auto mb-[25px] radius-round w-[100px]" src="<?php echo $testimonialImage; ?>" alt="">
                      <article class="text-white max-w-[650px] mb-[20px] m-auto gothic-book"><?php echo $testimonialText; ?></article>
                      <p class="text-[13px] gothic-medium tracking-[2px] text-white uppercase slide-text"><?php echo $testimonialClient; ?></p>
                      <a href="">
                          <div class="m-auto justify-center mt-[50px]">
                              <span class="sen-bold w-[260px] flex justify-between items-center pr-[20px] font-bold text-primary text-white border-2 border-accent m-auto p-3 uppercase hover:bg-accent">See all testimonials <svg class="rotate-[270deg]" xmlns="http://www.w3.org/2000/svg" width="14.789" height="18.571" viewBox="0 0 14.789 18.571"><g transform="translate(14.789) rotate(90)"><path d="M18.3,6.691,12.588.353A1.107,1.107,0,0,0,11.067.258a1.072,1.072,0,0,0-.074,1.5l4.129,4.577H1.071a1.056,1.056,0,1,0,0,2.113h14.05l-4.129,4.578a1.071,1.071,0,0,0,.085,1.5,1.094,1.094,0,0,0,1.511-.093L18.3,8.1A1.056,1.056,0,0,0,18.3,6.691Z" fill="#fff"/></g></svg></span>    
                          </div>
                      </a>
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
            class="group relative  -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full focus:outline-none">
        <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
            <div class="absolute bg-secondary w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#fff"/></svg>
    </button>
  </div>
</div>