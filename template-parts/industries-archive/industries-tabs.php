<?php

$tab_count = 0;
$content_count = 0;
$image_count = 0;

$image_tabs = get_sub_field('image_tabs');


?>

<section id="tabbed-content" x-data="{
param: new URLSearchParams(location.search).get('tab') || '1',
activeClass: 'gtx-btn-alt bg-accent border-2 border-accent text-white',
inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}" x-init="$watch('param', (value) => {
const url = new URL(window.location.href);
url.searchParams.set('tab', value);
history.pushState(null, document.title, url.toString());
})" id="tabbed-content" class="bg-light pt-0 lg:py-40 flex flex-col items-center justify-center" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-2.png); background-position: center center; background-fit:cover;">

<div
    class="w-full lg:max-w-[1364px] flex flex-col items-center lg:items-stretch lg:flex-row bg-primary lg:bg-transparent">
    <div class="w-[90%] lg:w-1/2 flex flex-col lg:flex-row">
        <div class="w-full lg:w-[324px] flex flex-col items-center lg:items-start py-10 lg:py-0 space-y-2">



                        <?php

                // Check rows exists.
                if (have_rows('tab', pll_current_language('slug'))) :

                    // Loop through rows.
                    while (have_rows('tab', pll_current_language('slug'))) : the_row();

                        // Load sub field value.
                        $tab_title = get_sub_field('tab_title', pll_current_language('slug'));
                        $tab_count++;
                        $image = get_sub_field('image', pll_current_language('slug'))['url'];


                ?>


                <div x-model="param" @click="param = '<?php echo $tab_count ?>'"
:class="param === '<?php echo $tab_count ?>' ? activeClass : inactiveClass"
                    class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer">
                    <?php if($image_tabs): ?> <img class="hidden lg:block h-[60px] w-[60px]" src="<?php echo $image ?>"
                        alt=""> <?php endif; ?>
                    <span
                        class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4"><?php echo $tab_title ?></span>
                </div>

            <?php // End loop.
                    endwhile;

                // No value.
                else :
                // Do something...
                endif;

                ?>




        </div>
        <div class="w-full lg:w-[400px] z-10 flex justify-center lg:block bg-primary">



            <?php

            // Check rows exists.
            if (have_rows('tab', pll_current_language('slug'))) :

                // Loop through rows.
                while (have_rows('tab', pll_current_language('slug'))) : the_row();

                    // Load sub field value.
                    $image = get_sub_field('image', pll_current_language('slug'))['url'];
                    $image_count++;
            ?>


            <img class="w-full object-cover object-center h-auto md:h-[600px] lg:w-full lg:h-auto"
                x-show="param === '<?php echo $image_count ?>'"
                class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out"
                src="<?php echo $image ?>" alt="">

            <?php
                    endwhile;

                // No value.
                else :
                // Do something...
                endif;
                ?>

        </div>
    </div>
    <div class="w-full lg:w-1/2 bg-primary p-10 flex justify-center items-center">



            <?php

            // Check rows exists.
            if (have_rows('tab', pll_current_language('slug'))) :

                // Loop through rows.
                while (have_rows('tab', pll_current_language('slug'))) : the_row();

                    // Load sub field value.
                    $content_title = get_sub_field('content_title', pll_current_language('slug'));
                    $content_text = get_sub_field('content_text', pll_current_language('slug'));
                    $content_count++;

                    $download_shortcode = get_sub_field('download_shortcode', pll_current_language('slug'));
            ?>


        <div class="tab-contents flex flex-col items-center lg:items-start"
            x-show="param === '<?php echo $content_count ?>'">
            <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">
                <?php echo $content_title ?></h4>
            <article class="body-text text-white mb-6 text-center lg:text-left"><?php echo $content_text ?></article>


            <?php 
                
                echo $download_shortcode; 

            
                ?>

        </div>

        <?php
                endwhile;

            // No value.
            else :
            // Do something...
            endif;
            ?>



    </div>
</div>
</section>