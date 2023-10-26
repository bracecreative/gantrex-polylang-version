<?php if (get_row_layout() == 'data_circles') { 

// Content 


$data_circles_title = get_sub_field('data_circles_title');
$data_highlight = get_sub_field('data_highlight');
$new_data_title = brace_highlighter($data_highlight, $data_circles_title);
$spacing = get_sub_field('spacing');
$colour = get_sub_field('colour');
$bg_colour;
$number_colour;
$sub_colour;
$border;

if($colour === 'light') {
    $bg_colour = 'bg-light';
    $number_colour = 'text-secondary';
    $sub_colour = 'text-primary';
    $border = 'border-light';
} elseif ($colour === 'blue') {
    $bg_colour = 'bg-secondary';
    $number_colour = 'text-white';
    $sub_colour = 'text-white';
    $border = 'border-secondary';
}

?>

<section id="data-circles"
    class="bg-white bg-cover bg-no-repeat bg-contain flex flex-col items-center <?php echo ($spacing) ? 'py-20' : '' ?>">
    <h4
        class="sen-bold text-[25px] lg:text-[35px] uppercase text-primary leading-none tracking-tight mb-10 text-center xl:text-left">
        <?php echo $new_data_title ?>
    </h4>

    <div class="flex flex-col md:flex-row gap-4 flex-wrap mb-12 justify-center lg:max-w-[40%]">


        <?php

                
                    if( have_rows('data_circles') ):

                        
                        while( have_rows('data_circles') ) : the_row();

                            
                            $data_number = get_sub_field('data_number');
                            $data = get_sub_field('data'); 
                            $subheading = get_sub_field('subheading'); 
                            
        ?>


        <div class="flex items-center">
            <div class="progress border-8 <?php echo $border ?> rounded-full"
                data-percentage="<?php echo $data_number ?>">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value <?php echo $bg_colour ?>">
                    <div class="flex flex-col items-center justify-center">
                        <h4 class="sen-bold <?php echo $number_colour ?> uppercase text-[50px] mb-4">
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

<?php } ?>