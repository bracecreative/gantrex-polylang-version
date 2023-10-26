<?php get_header() ?>

<?php 
$referencesTitle  = get_field('references_archive_title', 'option');
$referencesTitleHighlight = get_field('references_title_highlight', 'option');
$referencesPara  = get_field('references_archive_copy', 'option');
$referencesNewTitle = brace_highlighter($referencesTitleHighlight, $referencesTitle);
?>

<h1 class="text-center heading--s pt-20 sen-bold p-4 uppercase text-primary">
<?php echo $referencesNewTitle; ?>
</h1>

<div class="text-justify gothic-book m-auto max-w-[900px] w-3/5 p-2 body-text pb-[40px]"><?php echo $referencesPara; ?></div>

<div class="reference-facets max-w-[1360px] w-[80%] xl:w-[60%] mx-auto">

    <?php echo do_shortcode('[wpgb_facet id="2" grid="wpgb-content"]') ?>
    <?php echo do_shortcode('[wpgb_facet id="1" grid="wpgb-content"]') ?>
    <?php echo do_shortcode('[wpgb_facet id="4" grid="wpgb-content"]') ?>

</div>

<div class="w-[80%] xl:w-[60%] max-w-[1360px] references-post-wrap m-auto">

    <?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
    //  the_content();
    $country = get_field('country'); 
    $industry = get_field('industry');

    $industryString = preg_replace('/[^A-Za-z0-9\-]/', '', $industry);

    ?>

    <div class="lg:max-h-[250px] flex flex-col my-[20px] md:flex-row">
        <div class="w-full lg:w-1/3">
            <?php
                if (has_post_thumbnail() ) {
                    $image = get_the_post_thumbnail_url( $post_id, 'small' );
                    echo "<img class='reference-image h-[200px] md:h-full w-full object-cover object-center' src='";
                    echo $image;
                    echo "' alt='";
                    the_title();
                    echo "' />";
                } else {
                    ?>  <img class="w-full object-cover object-center" src="<?php bloginfo('template_directory'); ?>/images/placeholder-1.jpg" alt="<?php the_title(); ?>" />
            <?php  } ?>
        </div>
        <div class="w-full lg:w-2/3 bg-primary p-8">
            <h4 class="sen-bold text-[25px] uppercase text-white tracking-tighter mb-2"><?php the_title(); ?></h4>
            <div class="icon-thumbnails text-white gothic-book flex">
                <div class="flex items-center country-icon--<?php echo strtolower($country); ?>"><?php echo $country; ?></div>

                <div class="flex items-center industry-icon--<?php echo strtolower(str_replace('-', '', $industryString)); ?>"><?php echo $industry; ?></div>

            </div>
            <article class="text-white"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></article>


            <?php if( get_field('show_case_study') ) { ?>
                <a href="<?php echo the_permalink(); ?>">
                    <div class="gtx-read-more">
                        <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

    <?php

endwhile;
endif;

?>


</div>

<div class="w-full flex justify-center">
    <?php echo do_shortcode('[wpgb_facet id="3" grid="wpgb-content"]') ?>
</div>

<div class="testimonials overflow-hidden p-10 my-10 bg-primary mt-[90px]"
    style="background-position:center;background-size:105%;background-repeat:no-repeat;background-image: url(<?php echo get_template_directory_uri() . '/images/overlay.png' ?>);">


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
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1430: {
          slidesPerView: 1,
          spaceBetween: 0,
          slidesPerGroup: 3,
        },
      },
    })" class="relative max-w-[80%] 2xl:max-w-[1364px] mx-auto flex flex-row">
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

        <div class="post-slider w-full m-auto text-center">
            <div class="swiper-container overflow-visible" x-ref="container">
                <div class="swiper-wrapper">


                    <?php

    $page_id = 175;

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
                        <div
                            class="flex place-content-center flex-col overflow-hidden min-h-[381px] transition-all duration-500">
                            <div class="relative h-full transition duration-500 ease-in-out">

                                <div class="flex flex-col justify-center h-full w-full">
                                    <img class="h-[100px] rounded-[50%] m-auto mb-[25px] radius-round w-[100px]"
                                        src="<?php echo $testimonialImage; ?>" alt="">
                                    <article class="text-white max-w-[650px] mb-[20px] m-auto gothic-book">
                                        <?php echo $testimonialText; ?></article>
                                    <p class="text-[13px] gothic-medium tracking-[2px] text-white uppercase slide-text">
                                        <?php echo $testimonialClient; ?></p>
                                    <a href="">
                                        <div class="m-auto justify-center mt-[50px]">
                                            <span
                                                class="sen-bold w-[260px] flex justify-between items-center pr-[20px] font-bold text-primary text-white border-2 border-accent m-auto p-3 uppercase hover:bg-accent">See
                                                all testimonials <svg class="rotate-[270deg]"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.789" height="18.571"
                                                    viewBox="0 0 14.789 18.571">
                                                    <g transform="translate(14.789) rotate(90)">
                                                        <path
                                                            d="M18.3,6.691,12.588.353A1.107,1.107,0,0,0,11.067.258a1.072,1.072,0,0,0-.074,1.5l4.129,4.577H1.071a1.056,1.056,0,1,0,0,2.113h14.05l-4.129,4.578a1.071,1.071,0,0,0,.085,1.5,1.094,1.094,0,0,0,1.511-.093L18.3,8.1A1.056,1.056,0,0,0,18.3,6.691Z"
                                                            fill="#fff" />
                                                    </g>
                                                </svg></span>
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
    </div>
    </div>
    <?php get_footer(); ?>