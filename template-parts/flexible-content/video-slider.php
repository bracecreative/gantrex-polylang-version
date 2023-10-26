<?php if (get_row_layout() == 'video_slider') { 

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);


?>


<section id="video-slider" class="scroll-mt-40 video-slider-section bg-white py-20 bg-no-repeat"
    style="background-image: url(<?php echo get_template_directory_uri() . '/images/sketch-bg.svg' ?>); background-position: -500px 50%;">

    <div class="flex justify-center mb-14">
        <h4 class="heading--s text-[25px] md:text-[35px] lg:text-[50px] text-primary"><?php echo $new_title ?></h4>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
        loop: false,
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

        <div class="video-slider w-full">
            <div class="swiper-container overflow-visible" x-ref="container">
                <div class="swiper-wrapper">


                    <?php 
                
                $slides = get_sub_field('slide');
                
                if($slides) :

                    foreach($slides as $slide ) : ?>


                    <div class="swiper-slide p-4">

                        <!-- Video Player  -->

                        <div class="flex flex-col overflow-hidden" x-data="{ play: false }" x-init="$watch('play', (value) => {
                            if (value) {
                                $refs.video.play()
                            } else {
                                $refs.video.pause()
                            }
                            })">
                            <div class="relative w-full group">
                                <video x-ref="video" @click="play = !play" class="w-full">
                                    <source src="<?php echo $slide['slide_video'] ?>">
                                </video>
                                <div @click="play = true" x-show="!play"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-90"
                                    class="absolute inset-0 w-full h-full flex flex-col items-center justify-center bg-secondary bg-opacity-50 cursor-pointer">

                                    <mark
                                        class="inline bg-accent max-w-[80%] sen-bold mb-4 text-white py-2 px-2 uppercase text-[25px] tracking-tighter text-center leading-5"><?php echo $slide['slide_title'] ?></mark>
                                    <svg class="z-10" xmlns="http://www.w3.org/2000/svg" width="47.515" height="55"
                                        viewBox="0 0 47.515 55">
                                        <g id="Group_1329" data-name="Group 1329" transform="translate(-940.485 -4074)">
                                            <path id="Polygon_1" data-name="Polygon 1" d="M10,0,20,17.857H0Z"
                                                transform="translate(972.88 4091.766) rotate(90)" fill="#fff" />
                                            <path id="Subtraction_2" data-name="Subtraction 2"
                                                d="M20.016,55A27.421,27.421,0,0,1,0,46.357H3.384a25.146,25.146,0,0,0,34.411-1.079A25.142,25.142,0,0,0,20.016,2.358,24.958,24.958,0,0,0,3.384,8.643H0a27.5,27.5,0,0,1,39.461-.588A27.5,27.5,0,0,1,20.016,55Z"
                                                transform="translate(940.485 4074)" fill="#e96500" />
                                        </g>
                                    </svg>

                                </div>

                            </div>
                        </div>

                    </div>


                    <?php endforeach;

                
                endif; ?>


                </div>
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

        <!-- End of swiper component  -->
    </div>

    <div class="mx-auto max-w-[1364px] flex justify-center pt-20">
        <a class="w-[80%] md:w-auto" href="https://www.youtube.com/channel/UC5q1Dhep2WXUz06_nrogjyg">
            <div class="youtube-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                <span class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('watch us on', 'brace-starter-theme') ?></span>
            </div>
        </a>
    </div>

</section>

<?php } ?>