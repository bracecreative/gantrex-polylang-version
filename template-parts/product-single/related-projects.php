<section class="bg-secondary flex flex-col items-center pb-28">

    <div class="max-w-full lg:max-w-[50%] mb-10">
        <h2 class="sen-bold uppercase text-white tracking-tighter text-[35px] text-center">Related <mark class="bg-accent px-2 text-white">projects<mark></h2>
    </div>

    <div x-data="{swiper: null}"
  x-init="swiper = new Swiper($refs.container, {
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
    })"
  class="relative max-w-[80%] 2xl:max-w-[60%] mx-auto flex flex-row mb-10">
  <div class="absolute inset-y-0 left-0 md:-left-10 lg:-left-20 z-10 flex items-center">
    <button @click="swiper.slidePrev()" 
            class="group relative bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
            
            <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                <div class="absolute bg-white w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
            </div>

            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#0b2b42"/></svg>
    </button>
  </div>

  <div class="swiper-container" x-ref="container">
    <div class="swiper-wrapper">

        <!-- Slides -->

        <div class="swiper-slide">
            <div class="flex flex-col lg:flex-row">
                <div class="min-h-full">
                    <img class="min-h-full object-cover object-center" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
                </div>
                <div class="bg-white p-12">
                    <h4 class="sen-bold text-[25px] uppercase text-primary tracking-tighter mb-2">Lorem ipsum dolor sit amet consectetur adipiscing elit</h4>
                    <h2 class="subheading text-secondary text-secondary mb-5 font-medium">Sub-heading</h2>
                    <p class="gothic-book text-base text-dark mb-4">Intro Text – 50 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa libero, accumsan vel fermentum eu, blandit id ligula. Nunc iaculis gravida scelerisque. Nam elementum velit sit amet ipsum vehicula viverra. Sed congue turpis a mauris efficitur tempus. Morbi venenatis commodo feugiat. Maecenas sit amet feugiat massa.</p>
                    <a href="!#">
                        <div class="gtx-read-more-alt">
                            <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center">read more</span>
                        </div>
                    </a>
            </div>
            </div> 
        </div>

        <!-- End Slides    -->
    


    </div>
  </div>

  <div class="absolute inset-y-0 right-0 md:-right-10 lg:-right-20 z-10 flex items-center">
    <button @click="swiper.slideNext()" 
            class="group relative bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
        <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
            <div class="absolute bg-white w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#0b2b42"/></svg>
    </button>
  </div>
</div>


<a class="w-[80%] md:w-auto" href="!#">
    <div class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
        <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center">view all projects</span>
    </div>
</a>

</section>