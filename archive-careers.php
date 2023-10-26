<!---------------------------------
Template Name: Careers Page Template
---------------------------------->

<?php get_header(); ?>

<?php 
$careersTitle  = get_field('careers_archive_title', 'option');
$careersTitleHighlight = get_field('careers_title_highlight', 'option');
$careersPara  = get_field('careers_archive_copy', 'option');
$careersNewTitle = brace_highlighter($careersTitleHighlight, $careersTitle);
$heroImage = get_field('careers_hero_image', 'option')['url'];
?>

<img src="<?php echo $heroImage; ?>" class="object-cover pb-[50px] max-h-[400px]" width="100%" alt="">
<h1 class="text-center heading--s sen-bold p-4 uppercase text-primary"><?php echo $careersNewTitle; ?></h1>
<div class="careers-intro-text text-center gothic-book m-auto max-w-[900px] w-3/5 p-2 body-text">
    <?php echo $careersPara; ?></div>




<div class="icon-group flex m-auto max-w-[1360px] py-[75px] flex-wrap justify-center mb-6">

    <?php 
// Check rows exists.
if( have_rows('icon_repeater', 'option') ):

    // Loop through rows.
    while( have_rows('icon_repeater', 'option') ) : the_row();

        // Load sub field value.
        $icon_image = get_sub_field('icon_image', 'option')['url'];
        $icon_tag = get_sub_field('icon_text', 'option'); ?>

    <div class="w-[35%] lg:w-1/4 flex flex-col items-center justify-between"><img class="w-[160px] h-160px] mb-8"
            src="<?php echo $icon_image ?>"   alt="">
        <p class="sen-bold pb-[20px] max-w-[175px] uppercase text-primary tracking-tighter text-center">
            <?php echo $icon_tag; ?></p>
    </div>

    <?php   // End loop.
    endwhile;

// No value.
else : ?> Sorry, no posts <?php
endif; ?>
</div>

<?php 

$testimonial_title = get_field('testimonial_title', 'option');
$testimonial_title_highlight = get_field('testimonial_highlight', 'option');
$testimonial_new_title = brace_highlighter($testimonial_title_highlight, $testimonial_title);

?>


<section id="testimonial-slider" class="pt-32 pb-20 bg-primary bg-no-repeat bg-cover bg-center mb-[50px]"
style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-4.png); background-position: center center; background-fit:cover;">

    <div class="max-w-full lg:max-w-[50%] mx-auto mb-4">
        <h2 class="sen-bold uppercase text-white tracking-tighter text-[35px] text-center">
            <?php echo brace_highlighter($testimonial_title_highlight, $testimonial_title) ?></h2>
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
        if( have_rows('testimonial_slider', 'option') ):

            // Loop through rows.
            while( have_rows('testimonial_slider', 'option') ) : the_row();

                // Load sub field value.
                $testimonial_client_photo = get_sub_field('testimonial_client_photo', 'option')['url'];
                $testimonial_testimonial_text = get_sub_field('testimonial_testimonial_text', 'option');
                $testimonial_client_details = get_sub_field('testimonial_client_details', 'option');
                // Do something...
            ?>

                    <!-- Slides -->
                    <div class="swiper-slide p-4 group">
                        <div
                            class="flex place-content-center flex-col overflow-hidden min-h-[381px] transition-all duration-500">
                            <div class="relative h-full transition duration-500 ease-in-out">

                                <div class="flex flex-col justify-center h-full w-full">
                                    <img class="h-[100px] m-auto mb-[17px] w-[100px] rounded-full"
                                        src="<?php echo $testimonial_client_photo; ?>" alt="">
                                    <article
                                        class="text-white text-[20px] mb-[20px] max-w-[90%] m-auto gothic-book leading-[22px]">
                                        <?php echo $testimonial_testimonial_text; ?></article>
                                    <p class="text-[15px] gothic-medium tracking-[2.25px] text-secondary uppercase">
                                        <?php echo $testimonial_client_details; ?></p>
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

<!-- <?php if( get_field('vimeo_url', 'option') ): ?>

<div class="video-section bg-white">
    <div class="flex flex-col bg-white overflow-hidden" x-data="{ play: false }" x-init="$watch('play', (value) => {
        if (value) {
            $refs.video.play()
        } else {
            $refs.video.pause()
        }
        })">

        <?php  $video = get_field('vimeo_url', 'option'); ?>

        <div class="relative w-full mb-[100px] group">
            <video x-ref="video" @click="play = !play" class="w-[53%] m-auto">
                <source src="<?php echo esc_url($video); ?>">
            </video>

            <div @click="play = true" x-show="!play" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                class="careers-video absolute inset-0 w-[53%] m-auto h-full flex items-center flex-col-reverse justify-center bg-secondary bg-opacity-50">

                <svg class="z-10" xmlns="http://www.w3.org/2000/svg" width="47.515" height="55" viewBox="0 0 47.515 55">
                    <g id="Group_1329" data-name="Group 1329" transform="translate(-940.485 -4074)">
                        <path id="Polygon_1" data-name="Polygon 1" d="M10,0,20,17.857H0Z"
                            transform="translate(972.88 4091.766) rotate(90)" fill="#fff" />
                        <path id="Subtraction_2" data-name="Subtraction 2"
                            d="M20.016,55A27.421,27.421,0,0,1,0,46.357H3.384a25.146,25.146,0,0,0,34.411-1.079A25.142,25.142,0,0,0,20.016,2.358,24.958,24.958,0,0,0,3.384,8.643H0a27.5,27.5,0,0,1,39.461-.588A27.5,27.5,0,0,1,20.016,55Z"
                            transform="translate(940.485 4074)" fill="#e96500" />
                    </g>
                </svg>
                <h1 class="sen-bold text-white uppercase text-[23px] bg-accent px-[10px] mb-[20px]">Life at gantrex</h1>
            </div>

        </div>
    </div>
</div>

<?php endif; ?> -->

<?php 
    $vacancyTitle  = get_field('vacancy_archive_title', 'option');
    $vacancyTitleHighlight = get_field('vacancy_title_highlight', 'option');
    $vacancyPara  = get_field('vacancy_archive_copy', 'option');
    $vacancyNewTitle = brace_highlighter($vacancyTitleHighlight, $vacancyTitle);
?>

<div class="current-vacancies">
    <h2 class="text-center text-[35px] tracking-[-2px] sen-bold p-4 uppercase text-primary">
        <?php echo $vacancyNewTitle; ?>
    </h2>
    <article class="text-center gothic-book m-auto max-w-[900px] w-3/5 pb-[50px] p-2 body-text">
        <?php echo $vacancyPara; ?>
    </article>
    <div class="hidden global-search w-[78%] m-auto">
        <label for="">
            <input
                class="mb-[55px] cursor-pointer w-full border-2 border=black h-[61px] px-6 bg-white text-secondary uppercase gothic-medium tracking-widest focus:outline-none mb-4 pl-[70px]"
                type="text" placeholder="SEARCH OUR CURRENT VACANCIES..."></input>
        </label>
    </div>
    <div class="gap-4 w-[80%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-[100px] pt-[0px] mx-auto">

        <?php
            $args = array(
                'post_type'         => 'careers',
                'post_status'       => 'publish',
                'posts_per_page'    => -1,
                // 'orderby'         => 'title',
                'order'           => 'DESC',
            );
            $postslist = get_posts( $args );
                foreach ( $postslist as $post ) :
                    setup_postdata( $post );   
        ?>

        <div class="job-card bg-accent flex p-8">
            <a class="current-card h-[100%] w-[100%] flex flex-col justify-center" href="<?php the_permalink(); ?>">
                <h3 class="py-[20px] text-left text-[22px] text-white sen-bold uppercase max-w-[250px] leading-[20px]">
                    <?php the_title(); ?></h3>
                <div class="careers-excerpt"><?php the_excerpt(); ?></div>
                <p class="flex text-left text-white sen-bold uppercase" href=""><?php echo __('Read More', 'brace-starter-theme') ?><svg
                        xmlns="http://www.w3.org/2000/svg" class="relative top-[-5px]" width="30.237" height="35"
                        viewBox="0 0 30.237 35">
                        <g transform="translate(-4906.763 143)">
                            <path
                                d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z"
                                transform="translate(4870 -143)" fill="#3091d9" />
                            <g transform="translate(4890.311 -1111.861)">
                                <path
                                    d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z"
                                    transform="translate(0 0)" fill="#fff" />
                            </g>
                        </g>
                    </svg></p>
            </a>
        </div>

        <?php
            endforeach;
            wp_reset_postdata();
        ?>

    </div>

</div>

<?php 
    $secondCareersTitle  = get_field('second_careers_archive_title', 'option');
    $secondCareersTitleHighlight = get_field('second_careers_title_highlight', 'option');
    $secondCareersPara  = get_field('second_careers_archive_copy', 'option');
    $secondCareersNewTitle = brace_highlighter($secondCareersTitleHighlight, $secondCareersTitle);
?>

<div class="send-cv-section flex justify-around px-[350px] py-[75px] items-center bg-secondary">
    <div class="text-box-one max-w-[850px] text-left">
        <h1 class="text-left text-[30px] tracking-[-2px] sen-bold p-4 pl-0 uppercase text-white">
            <?php echo $secondCareersNewTitle; ?></h1>
        <article class="px-[20px] text-white gothic-book"><?php echo $secondCareersPara;?></article>
    </div>
    <div class="text-box-two">
        <a href="mailto:marketing@gantrex.com"> <span
                class="sen-bold w-[250px] px-[30px] flex justify-center items-center font-bold text-primary text-white border-2 border-accent m-auto p-3 uppercase hover:bg-accent">Send
                us your CV<svg xmlns="http://www.w3.org/2000/svg" width="30.237" height="35" viewBox="0 0 30.237 35">
                    <g transform="translate(-4906.763 143)">
                        <path
                            d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z"
                            transform="translate(4870 -143)" fill="#e96500" />
                        <g transform="translate(4890.311 -1111.861)">
                            <path
                                d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z"
                                transform="translate(0 0)" fill="#fff" />
                        </g>
                    </g>
                </svg></span></a>
    </div>
</div>

<?php
    $thirdCareersTitle  = get_field('third_careers_archive_title', 'option');
    $thirdCareersTitleHighlight = get_field('third_careers_title_highlight', 'option');
    $thirdCareersPara  = get_field('third_careers_archive_copy', 'option');
    $thirdCareersNewTitle = brace_highlighter($thirdCareersTitleHighlight, $thirdCareersTitle);
?>

<div class="bg-primary linked-in m-auto justify-center items-center py-[75px]">
    <h1 class="text-center text-[30px] tracking-[-2px] sen-bold p-4 pl-0 uppercase text-white">
        <?php echo $thirdCareersNewTitle; ?>
    </h1>
    <!-- <article class="text-white text-center gothic-book pb-[25px] max-w-[850px] m-auto"><?php //echo $thirdCareersPara; ?> -->
    </article>
    <a href="https://www.linkedin.com/company/gantrex" target="_blank"> <span
            class="sen-bold w-[230px] px-[10px] flex justify-evenly items-center font-bold text-primary text-white border-2 border-accent m-auto p-3 uppercase hover:bg-accent">Follow us on
            <svg class="ml-[10px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="59.65" height="35" viewBox="0 0 59.65 35">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_498" data-name="Rectangle 498" width="50.341" height="14" fill="#fff" />
                    </clipPath>
                </defs>
                <g id="Group_1902" data-name="Group 1902" transform="translate(-175.35 -13)">
                    <g id="Group_1604" data-name="Group 1604" transform="translate(175.35 23.5)"
                        clip-path="url(#clip-path)">
                        <path id="Subtraction_16" data-name="Subtraction 16"
                            d="M12.721,14H1.429A1.415,1.415,0,0,1,0,12.6V1.4A1.416,1.416,0,0,1,1.429,0H12.721a1.415,1.415,0,0,1,1.426,1.4V12.6A1.413,1.413,0,0,1,12.721,14Zm-4.1-7.539c.8,0,.965.706.965,1.3v3.321h1.9V7.539c0-1.617-.819-2.583-2.191-2.583a2.194,2.194,0,0,0-1.891.966H7.371l-.086-.832H5.632c.025.557.048,1.175.048,1.91v4.079h1.9V7.625a1.36,1.36,0,0,1,.061-.466A1.052,1.052,0,0,1,8.623,6.461ZM2.638,5.089v5.99h1.9V5.089Zm.963-2.6a.933.933,0,1,0-.025,1.86A.938.938,0,0,0,4.6,3.423.925.925,0,0,0,3.6,2.494Z"
                            transform="translate(36.193 -0.001)" fill="#fff" stroke="rgba(0,0,0,0)"
                            stroke-miterlimit="10" stroke-width="1" />
                        <path id="Path_5489" data-name="Path 5489" d="M0,35.079H1.9v6.687H5.259v1.568H0Z"
                            transform="translate(0 -32.256)" fill="#fff" />
                        <path id="Path_5490" data-name="Path 5490"
                            d="M73.536,31.9a.94.94,0,0,1-1.027.931.934.934,0,1,1,1.027-.931M71.57,33.569h1.9v5.989h-1.9Z"
                            transform="translate(-65.636 -28.48)" fill="#fff" />
                        <path id="Path_5491" data-name="Path 5491"
                            d="M108.546,63.605c0-.747-.025-1.371-.05-1.91h1.653l.088.833h.038a2.21,2.21,0,0,1,1.891-.968c1.252,0,2.191.821,2.191,2.584v3.539h-1.9V64.365c0-.771-.275-1.3-.964-1.3a1.043,1.043,0,0,0-.977.7,1.315,1.315,0,0,0-.062.465v3.454h-1.9Z"
                            transform="translate(-99.569 -56.606)" fill="#fff" />
                        <path id="Path_5492" data-name="Path 5492"
                            d="M195.465,34.831h.025a8.039,8.039,0,0,1,.438-.722l1.24-1.8h2.291l-2.191,2.425,2.5,3.564h-2.341l-1.49-2.462-.476.588V38.3h-1.9V29.6h1.9Z"
                            transform="translate(-177.637 -27.22)" fill="#fff" />
                        <path id="Path_5493" data-name="Path 5493"
                            d="M266.749,65.283c.05.771.839,1.139,1.728,1.139a5.149,5.149,0,0,0,1.691-.257l.25,1.261a5.9,5.9,0,0,1-2.216.38c-2.079,0-3.268-1.176-3.268-3.049a3.028,3.028,0,0,1,3.093-3.2,2.678,2.678,0,0,1,2.73,2.988,4.333,4.333,0,0,1-.063.735Zm2.241-1.274a1.088,1.088,0,0,0-1.077-1.212,1.242,1.242,0,0,0-1.177,1.212Z"
                            transform="translate(-243.136 -56.606)" fill="#fff" />
                        <path id="Path_5494" data-name="Path 5494"
                            d="M346.849,29.6v6.907c0,.673.025,1.384.05,1.788h-1.69l-.075-.87H345.1a2.151,2.151,0,0,1-1.916,1c-1.452,0-2.617-1.213-2.617-3.074-.012-2.021,1.277-3.2,2.742-3.2a1.9,1.9,0,0,1,1.615.674h.025V29.6Zm-1.9,5.242a1.637,1.637,0,0,0-.025-.343,1.137,1.137,0,0,0-1.114-.906c-.877,0-1.315.759-1.315,1.7,0,1.016.514,1.653,1.3,1.653a1.122,1.122,0,0,0,1.114-.894,2.367,2.367,0,0,0,.037-.429Z"
                            transform="translate(-312.543 -27.22)" fill="#fff" />
                    </g>
                    <path class="group-hover:fill" id="Subtraction_2" data-name="Subtraction 2"
                        d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z"
                        transform="translate(168 13)" fill="#e96500" />
                </g>
            </svg>
    </a>
</div>


<?php get_footer(); ?>