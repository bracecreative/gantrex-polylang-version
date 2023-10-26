<?php if (get_row_layout() == 'two_column') { 

// Content 

if(!empty(get_sub_field('image'))) : 
$image = get_sub_field('image')['url'];
endif;

if(!empty(get_sub_field('video_url'))) : 
$video = get_sub_field('video_url');
$videoThumb = get_sub_field('video_thumbnail')['url'];
endif;

$title = _(get_sub_field('title'));
$title_highlight = get_sub_field('word_highlight');
$new_title = brace_highlighter($title_highlight, $title);

if(!empty(get_sub_field('cta_button'))) : 
$cta_button = get_sub_field('cta_button');
$cta_button_url = $cta_button['url'];

// Translation 
$cta_button_link_post_id = url_to_postid($cta_button_url); // This returns 0 if not found, so you can detect an external link
$cta_button_translated_url = get_the_permalink($cta_button_link_post_id);

if($cta_button_link_post_id === 0) { 
    $cta_button_processed_url = $cta_button_url; 
} 
else { 
    $cta_button_processed_url = $cta_button_translated_url; 
}


$cta_button_title = $cta_button['title'];
endif;

$show_data_circles = get_sub_field('show_data_circles');
if($show_data_circles) : 
$data_circles_title = get_sub_field('data_circles_title');
$data_highlight = get_sub_field('data_highlight');
$new_data_title = brace_highlighter($data_highlight, $data_circles_title);
endif;


// Options
if(get_sub_field('background_image')) :
$background_image = get_sub_field('background_image')['url'];
$background_position = get_sub_field('background_position');
endif;

$alignment = get_sub_field('alignment');
$padding_top = get_sub_field('space_top');
$padding_bottom = get_sub_field('space_bottom');
$padding = '';

if($padding_top):
    $padding .= 'pt-20 xl:pt-40 ';
endif;

if($padding_bottom):
    $padding .= 'pb-20 xl:pb-40';
endif;





?>

<section id="two-column" class="bg-white bg-cover bg-no-repeat bg-contain <?php echo $padding ?>"
    <?php if(get_sub_field('background_image')) : ?>style="background-image: url(<?php echo $background_image ?>); background-position: <?php echo $background_position ?>;"
    <?php endif; ?>>



    <div
        class="max-w-full xl:max-w-[80%] flex flex-col flex-col-reverse <?php echo ($alignment === 'left') ? 'xl:flex-row' : 'flex-col xl:flex-row-reverse' ?> xl:space-x-20 mx-auto">

        <div class="w-full xl:w-1/2 flex <?php echo ($alignment === 'left') ? '2xl:mr-20' : '2xl:ml-20' ?>">
            <div class="relative min-w-full max-h-[428px] xl:max-h-full">

                <?php if( get_sub_field('video_or_image') == 'image' ) : ?>
                <!-- Image  -->
                <img class="max-h-[428px] xl:max-h-full xl:min-h-full min-w-full object-cover object-center" src="<?php 
                    echo $image 
                    ?>" alt="">
                <?php endif; ?>



                <?php if( get_sub_field('video_or_image') == 'video' ) : ?>
                <!-- Video Player  -->
                <div class="flex flex-col max-h-[400px]" x-data="{ play: false }" x-init="$watch('play', (value) => {
                    if (value) {
                        $refs.video.play()
                    } else {
                        $refs.video.pause()
                    }
                    })">
                    <div class="relative w-full max-h-[400px] group">
                        <video poster="<?php echo $videoThumb; ?>" x-ref="video" @click="play = !play" class="w-full max-h-[400px]" playsinline>
                            <source src="<?php echo $video ?>">
                        </video>
                        <div @click="play = true" x-show="!play" x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90"
                            class="absolute inset-0 w-full h-full flex flex-col items-center justify-center cursor-pointer">

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
                <?php endif; ?>

            </div>
        </div>

        <div class="w-full xl:w-1/2 px-10 xl:px-0 flex flex-col items-center xl:items-start">
            <h2
                class="sen-bold text-[35px] xl:text-[50px] uppercase text-primary leading-tight tracking-tight mb-8 text-center xl:text-left max-w-[600px]">
                <?php echo $new_title ?>
            </h2>
            <div class="flex flex-col space-y-8 max-w-[90%] md:max-w-[80%] mb-12">


                <?php

                
                if( have_rows('icon_list') ):

                    
                    while( have_rows('icon_list') ) : the_row();

                        if(!empty(get_sub_field('icon'))) :
                        $icon = get_sub_field('icon')['url'];
                        endif;
                        $icon_text = get_sub_field('text'); ?>


                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 items-center">
                    <?php if(!empty($icon)) : ?><img class="w-[75px] h-75px]" src="<?php echo $icon ?>"
                        alt=""><?php endif; ?>
                    <p class="gothic-book prose prose-p:text-base prose-p:text-primary text-center md:text-left">
                        <?php echo $icon_text ?></p>
                </div>

                <?php
                    endwhile;

                
                else :
                    
                endif;

                ?>


            </div>


            <?php if(!empty(get_sub_field('cta_button'))) : ?>
            <a class="w-full md:w-auto xl:inline-block mb-20" href="<?php echo $cta_button_processed_url ?>">
                <div class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                    <span
                        class="sen uppercase font-bold tracking-widest text-base flex items-center"><?php echo $cta_button_title ?></span>
                </div>
            </a>
            <?php endif; ?>



        </div>

    </div>

</section>

<?php } ?>