<?php if (get_row_layout() == 'cta_cards') {


$padding_top = get_sub_field('spacing_top');
$padding_bottom = get_sub_field('spacing_bottom');
$padding = '';

if($padding_top):
    $padding .= 'pt-20 ';
endif;

if($padding_bottom):
    $padding .= 'pb-20';
endif;

?>

<section id="cta-cards" class="bg-light flex items-center <?php echo $padding ?>"
    style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-2.png); background-position: center center; background-fit:cover;">


    <div class="max-w-[55%] mx-auto flex items-center justify-center grid grid-cols-1 gap-8">


        <?php

        // Check rows exists.
        if( have_rows('card') ):

            // Loop through rows.
            while( have_rows('card') ) : the_row();

                // Load sub field value.
                $image = get_sub_field('image')['url'];
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $button = get_sub_field('button');
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
        ?>


        <!-- Card  -->
        <div class="bg-primary flex flex-col lg:flex-row min-h-full">

            <div class="cta-card-copy p-12 flex flex-col items-center lg:items-start w-full lg:w-2/3">
                <h4 class="text-white sen-bold text-[25px] uppercase leading-[25px] mb-4"><?php echo $title ?>
                </h4>
                <p class="gothic-book text-[16px] text-white mb-4 text-center lg:text-left"><?php echo $text ?></p>

                <a class="inline-block" href="<?php echo $button_processed_url ?>">
                    <div class="gtx-btn-alt py-2 flex items-center justify-center">
                        <span
                            class="sen-bold text-[16px] uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $button_title ?></span>
                    </div>
                </a>
            </div>

            <div class="w-full lg:w-1/3 bg-primary">
                <img class="h-full w-full object-cover md:object-contain 2xl:object-cover" src="<?php echo $image ?>"
                    alt="">
            </div>

        </div>

        <?php
            endwhile;

        endif;

        ?>



    </div>




</section>


<?php } ?>