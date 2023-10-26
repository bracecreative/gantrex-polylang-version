<?php if (get_row_layout() == 'team_cards') {

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);

$cards = get_sub_field('cards');

?>

<section id="team-cards" class="pt-20 bg-white scroll-mt-60" x-data="{ 
    openTab: '<?php if( $cards ) {
                echo $cards[0]['department'];
            }
            ?>',
    activeClass: 'gtx-btn-alt bg-accent text-white border-accent',
    inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}">

    <div class="w-[80%] flex justify-center mx-auto mb-10">
        <h3 class="sen-bold text-[35px] uppercase text-primary"><?php echo $new_title ?></h3>
    </div>

    <div class="w-[80%] flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 justify-center mx-auto mb-40">


        <?php 

        // Check rows exists.
        if( have_rows('cards') ):


                $department_arr = get_sub_field_object('field_62308ebcd9b56');
                $departments = array_values($department_arr['choices']); 


                foreach($departments as $department) { ?>
        <div @click="openTab = '<?php echo strtolower($department); ?>'"
            :class="openTab === '<?php echo strtolower($department); ?>' ? activeClass : inactiveClass"
            class="gtx-btn border-2 border-secondary px-14 py-2 flex items-center justify-center hover:bg-accent hover:border-accent cursor-pointer">
            <span
                class="sen uppercase font-bold tracking-[1.2px] leading-[19px] text-base flex items-center"><?php echo $department; ?></span>
        </div>
        <?php }


        endif;

        ?>


    </div>

    <div class="w-[80%] grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 flex items-center mx-auto">


        <?php

            // Check rows exists.
            if( have_rows('cards') ):

                // Loop through rows.
                while( have_rows('cards') ) : the_row();

                    // Load sub field value.
                    $image = get_sub_field('image')['url'];
                    $card_title = get_sub_field('card_title');
                    $card_subheading = get_sub_field('card_subheading');
                    $linkedin_url = get_sub_field('linkedin_url');
                    $department = get_sub_field('department');
                    ?>


        <!-- Card  -->
        <div x-show="openTab === '<?php echo strtolower($department) ?>'" x-transition:enter.duration.500ms
            class="bg-primary relative flex flex-col items-center p-4 lg:mx-4 mb-28">
            <img class="h-[150px] w-[150px] absolute -top-[75px] left-1/2 -translate-x-1/2 rounded-full"
                src="<?php echo $image ?>" alt="">
            <h3 class="sen-bold text-[25px] tracking-[-1.25px] leading-[25px] uppercase text-white mb-2 mt-[80px]">
                <?php echo $card_title ?>
            </h3>
            <h5 class="gothic-medium text-[15px] uppercase text-white tracking-[2.25px] leading-[14px] mb-2">
                <?php echo $card_subheading ?></h5>
            <a class="w-[80%] md:w-auto" href="<?php echo $linkedin_url ?>">
                <div class="linkedin-alt py-2 flex items-center justify-center">
                    <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo __('connect on', 'brace-starter-theme') ?></span>
                </div>
            </a>
        </div>

        <?php
                endwhile;

            // No value.
            else :
                // Do something...
            endif;

        ?>


    </div>

</section>


<?php } ?>