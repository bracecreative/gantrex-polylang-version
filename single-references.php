<?php

get_header(); 


?>
<a href="<?php echo esc_url( get_post_type_archive_link('references') ); ?>" class="back-to-careers relative top-[80px] sen-bold flex pr-[30px] items-center justify-center font-bold text-primary left-[100px] border-2 border-accent max-w-[275px] p-3 uppercase"><svg class="scale-75 rotate-180" xmlns="http://www.w3.org/2000/svg" width="30.237" height="35" viewBox="0 0 30.237 35"><g transform="translate(-4907.763 143)"><path d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z" transform="translate(4871 -143)" fill="#e96500"/><g transform="translate(4890.311 -1111.861)"><path d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z" transform="translate(0 0)" fill="#3091d9"/></g></g></svg>Back to References</a>
<h1 class="text-center heading--s sen-bold max-w-[40vw] m-auto p-4 uppercase text-primary"><?php the_title(); ?></h1>


<div class="extra-info flex flex-row justify-center">
    <div class="single-date mr-[10px] flex items-center">
        <svg class="mr-[10px] scale-75" xmlns="http://www.w3.org/2000/svg" width="40" height="39.903" viewBox="0 0 40 39.903">
            <g id="Group_1902" data-name="Group 1902" transform="translate(-768 -333.097)">
                <path id="Path_5543" data-name="Path 5543" d="M20,.1A19.951,19.951,0,1,1,0,20,19.917,19.917,0,0,1,20,.1Z" transform="translate(768 333)" fill="#fff"/>
                <path id="Path_5532" data-name="Path 5532" d="M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(773 338)" fill="#e96500"/>
                <path id="noun-calendar-4619829" d="M119.286,36.143H117v-.571a.571.571,0,1,0-1.143,0v.571h-5.714v-.571a.571.571,0,1,0-1.143,0v.571h-2.286A1.714,1.714,0,0,0,105,37.857V49.286A1.714,1.714,0,0,0,106.714,51h12.571A1.714,1.714,0,0,0,121,49.286V37.857a1.714,1.714,0,0,0-1.714-1.714Zm-12.571,1.143H109v.571a.571.571,0,1,0,1.143,0v-.571h5.714v.571a.571.571,0,1,0,1.143,0v-.571h2.286a.571.571,0,0,1,.571.571v2.857H106.143V37.857a.571.571,0,0,1,.571-.571Zm12.571,12.571H106.714a.571.571,0,0,1-.571-.571V41.857h13.714v7.429a.571.571,0,0,1-.571.571Z" transform="translate(675 310)" fill="#fff"/>
            </g>
        </svg>
        <div class="gothic-book country-icon--"><?php echo get_the_date('Y/m/d'); ?></div>
        
    </div>
    <div class="industry-icon--<?php echo the_category_ID(); ?> gothic-book mr-[10px] flex items-center">
        <?php the_category(); ?>
    </div>
</div>

<section id="data-circles"
    class="bg-white bg-cover bg-no-repeat bg-contain flex flex-col items-center <?php echo ($spacing) ? 'py-20' : '' ?>">
 
    <div class="flex flex-col md:flex-row gap-4 flex-wrap m-12 justify-center lg:max-w-[40%]">


        <?php  
        if( have_rows('data_circles') ):

            
            while( have_rows('data_circles') ) : the_row();

                
                $data_number = get_sub_field('ref_data_number');
                $data = get_sub_field('ref_data'); 
                $subheading = get_sub_field('ref_subheading');                  
        ?>


        <div class="flex items-center">
            <div class="progress bg-secondary mb-[0px] border-8 <?php echo $border ?> rounded-full"
                data-percentage="<?php echo $data_number ?>">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value <?php echo $bg_colour ?>">
                    <div class="flex gap-[10px] flex-col items-center justify-center">
                        <h4 class="sen-bold <?php echo $number_colour ?> uppercase text-[50px]">
                            <?php echo $data ?></h4>
                        <span
                            class="gothic text-[12px] uppercase <?php echo $sub_colour ?> leading-3"><?php echo $subheading ?></span>
                    </div>
                </div>
            </div>
        </div>

        <?php
                        endwhile;


                    else :
                        
                    endif;

                    ?>


    </div>


</section>

<div class="container m-auto my-[50px] mb-[100px] max-w-[900px]">


<?php

// Check rows exists.
if( have_rows('content_repeater') ):

    // Loop through rows.
    while( have_rows('content_repeater') ) : the_row();

        // Load sub field value.
        $image_divider = get_sub_field('image_divider')['url'];
        $sub_title = get_sub_field('sub_title');
        $copy = get_sub_field('copy'); ?>

        <div class="content-row">
            <?php if ( !empty ( $sub_title ) ) : ?>
                <h2 class="mb-[25px] sen-bold text-center heading--xs"><?php echo $sub_title; ?></h2>
            <?php endif; ?>
            <article class="reference-body gothic-book text-black max-w-[1200px] m-auto text-center prose"><?php echo $copy; ?></article>
            <img class="m-auto my-[50px] w-[100%] object-cover max-h-[600px]" onError="removeElement(this);" src="<?php echo $image_divider; ?>" alt="">
        </div>

        <script> // Removing empty image element from the DOM
            function removeElement(element) {
                element.remove();
            }
        </script>

     <?php endwhile;

// No value.
else :
    // Do something...
endif; ?>

</div>

<?php get_footer(); ?>