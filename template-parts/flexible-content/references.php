<?php if (get_row_layout() == 'references') {

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
if(!empty(get_sub_field('cta_button'))) {
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
}
$bg_colour = get_sub_field('background_colour');

$top_padding = get_sub_field('top_padding');
$bottom_padding = get_sub_field('bottom_padding');




?>
<section id="references" class="scroll-mt-60 flex items-center justify-center 

<?php if($bg_colour === 'primary') 
{   
    echo 'bg-primary';
}
elseif($bg_colour === 'secondary')
{ 
    echo 'bg-secondary';
}
elseif($bg_colour === 'white')
{ 
    echo 'bg-white';
}

?>" style="padding-top:<?php echo $top_padding ?>px;padding-bottom:<?php echo $bottom_padding ?>px; background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-3.png); background-position: center center; background-fit:cover;">

    <div class="w-full flex flex-col items-center px-10">

        <h4
            class="sen-bold text-[25px] md:text-[35px] uppercase max-w-[90%] xl:max-w-[60%] leading-tight text-center mb-12 <?php if($bg_colour === 'white') { echo 'text-primary'; } else { echo 'text-white'; } ?>">
            <?php echo brace_highlighter($title_highlight, $title) ?>
        </h4>

        <div class="flex gap-8 flex-wrap justify-center mb-10">


            <?php

                
            if( have_rows('logos') ):

                
                while( have_rows('logos') ) : the_row();

                    
                    $logo = get_sub_field('logo')['url'];

            ?>


            <div
                class="w-[100px] h-[100px] lg:w-[150px] lg:h-[150px] p-6 bg-white rounded-full flex items-center justify-center">
                <img src="<?php echo $logo ?>" alt="">
            </div>

            <?php
                endwhile;

            endif;

            ?>




        </div>
        <?php if(!empty(get_sub_field('cta_button'))) { ?>
        <a class="w-full md:w-auto" href="<?php echo get_post_type_archive_link('references'); ?>">
            <div
                class="<?php if($bg_colour === 'primary') 
{   
    echo 'gtx-btn';
}
else 
{ 
    echo 'gtx-btn-alt-two';
} ?> border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent <?php if($bg_colour === 'white') { echo 'bg-accent'; } ?>">
                <span
                    class="sen uppercase font-bold tracking-widest text-base flex items-center text-white"> <?php echo __('View All References', 'brace-starter-theme') ?></span>
            </div>
        </a>
        <?php } ?>
    </div>

</section>

<?php } ?>