<section class="post-slider-section bg-primary py-40">
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
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1430: {
          slidesPerView: 3,
          spaceBetween: 0,
          slidesPerGroup: 3,
        },
      },
    })"
  class="relative max-w-[80%] 2xl:max-w-[1364px] mx-auto flex flex-row"
>
  <div class="absolute inset-y-0 left-0 md:-left-10 z-10 flex items-center">
    <button @click="swiper.slidePrev()" 
            class="group relative bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
            
            <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                <div class="absolute bg-white w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
            </div>

            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#0b2b42"/></svg>
    </button>
  </div>

  <div class="post-slider w-full">
    <div class="swiper-container overflow-visible" x-ref="container">
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="">
                          <div class="gtx-read-more block flex items-center">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>

        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="">
                          <div class="gtx-read-more block flex items-center">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>

        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="!#">
                          <div class="gtx-read-more">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>

        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="!#">
                          <div class="gtx-read-more">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>

        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="!#">
                          <div class="gtx-read-more">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>

        <div class="swiper-slide p-4 group">
          <div class="flex flex-col overflow-hidden min-h-[541px] transition-all duration-500">
              <img class="group-hover:h-0 max-h-1/4 transition-all duration-500 ease" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
              <div class="relative h-full group-hover:min-h-[541px] transition duration-500 ease-in-out" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                  <div class="flex flex-col justify-center h-full w-full bg-secondary group-hover:bg-opacity-90 group-hover:min-h-[600px] p-10 transition-all duration-500 ease-in-out">
                      <p class="gothic-medium uppercase tracking-widest text-white mb-4">Article</p>
                      <h4 class="heading--xs font-medium text-white leading-7 mb-2">Shock treatment improves crane operating efficiency</h4>
                      <p class="group-hover:hidden gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely…</p>
                      <p class="hidden group-hover:block gothic-book text-white text-base mb-4 z-30">A crane at rest is a costly crane. A crane that is not moving as fast as it safely... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="!#">
                          <div class="gtx-read-more">
                              <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">read more</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
        </div>
                

      </div>
    </div>
  </div>

  <div class="absolute inset-y-0 right-0 md:-right-10 z-10 flex items-center">
    <button @click="swiper.slideNext()" 
            class="group relative bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
        <div class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
            <div class="absolute bg-white w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286"><path d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z" transform="translate(-24 -981.362)" fill="#0b2b42"/></svg>
    </button>
  </div>
</div>

<div class="mx-auto max-w-[1364px] flex justify-center pt-20">
    <a href="">
        <div class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center">read all news</span>
        </div>
    </a>
</div>



</section>