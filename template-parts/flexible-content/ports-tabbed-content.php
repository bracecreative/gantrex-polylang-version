<?php if (get_row_layout() == 'ports_tabbed_content') {

    $image_tabs = get_sub_field('image_tabs');
    $unique_id = get_sub_field('unique_id');
    
    $title = get_sub_field('title');
    $title_highlight = get_sub_field('title_highlight');
    $new_title = brace_highlighter($title_highlight, $title);
    $text = get_sub_field('text');

    $single_check = 0;

// Single checker
if (have_rows('tab')) :

    // Loop through rows.
    while (have_rows('tab')) : the_row();

        $single_check++;

    endwhile;

endif;



?>

<section id="<?php echo $unique_id ?>" x-data="{
    param: new URLSearchParams(location.search).get('tab<?php echo get_row_index(); ?>') || '<?php $tab_names = array();
                                                                        if (have_rows('tab')) :
                                                                        while (have_rows('tab')) : the_row();
                                                                            $tab_names[] = get_sub_field('tab_title');
                                                                        endwhile;

                                                                        endif;
                                                                        echo gtxCleanString($tab_names[0]);
                                                                        ?>',
    activeClass: 'gtx-btn-alt bg-accent border-2 border-accent text-white',
    inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}" x-init="$watch('param', (value) => {
    const url = new URL(window.location.href);
    url.searchParams.set('tab<?php echo get_row_index(); ?>', value);
    history.pushState(null, document.title, url.toString());
  })" class="scroll-mt-40 bg-light py-20 flex flex-col items-center justify-center" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-2.png); background-position: center center; background-fit:cover;">
        
    <div class="w-full lg:max-w-[1364px] mx-auto mb-8 px-6 2xl:px-0">
        <h4 class="sen-bold text-[25px] md:text-[35px] uppercase text-primary max-w-[90%] xl:max-w-[60%] leading-tight mb-4">
            <?php echo $new_title ?>
        </h4>

        <div class="prose max-w-none prose-p:gothic-book prose-p:text-[18px] <?php echo $text_colour ?> prose-p:text-justify min-w-[60%] prose-p:leading-[20px]">
            <?php echo $text ?>
        </div>
    </div>
  
    <div class="hidden w-full lg:max-w-[1364px] lg:flex flex-col items-center lg:items-stretch lg:flex-row bg-primary lg:bg-transparent">
        <div class="w-[90%] <?php echo ($single_check <= 1) ? 'lg:w-1/4' : 'lg:w-1/2' ?> flex flex-col lg:flex-row">

            <div class="<?php echo ($single_check <= 1) ? 'hidden' : 'w-full lg:w-[324px]' ?> flex flex-col items-center lg:items-start py-10 lg:py-0 space-y-2">
            <?php

                    // Check rows exists.
                    if (have_rows('tab')) :

                        // Loop through rows.
                        while (have_rows('tab')) : the_row();

                            // Load sub field value.
                            $tab_title = get_sub_field('tab_title');
                            $image = get_sub_field('image')['url'];


                    ?>


                    <div x-model="param" @click="param = '<?php echo gtxCleanString($tab_title) ?>'"
                    :class="param === '<?php echo gtxCleanString($tab_title) ?>' ? activeClass : inactiveClass"
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
            <div class="<?php echo ($single_check <= 1) ? 'w-full' : 'w-full lg:w-[400px]' ?> p-4 z-10 flex justify-center lg:block bg-primary">



                <?php

                    // Check rows exists.
                    if (have_rows('tab')) :

                        // Loop through rows.
                        while (have_rows('tab')) : the_row();

                            // Load sub field value.
                            $image = get_sub_field('image')['url'];
                            $tab_title = get_sub_field('tab_title');
                    ?>


                <img x-show="param === '<?php echo gtxCleanString($tab_title) ?>'"
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
        <div class="w-full <?php echo ($single_check <= 1) ? 'lg:w-3/4' : 'lg:w-1/2' ?> bg-primary p-10 flex justify-center items-start">



            <?php

                // Check rows exists.
                if (have_rows('tab')) :

                    // Loop through rows.
                    while (have_rows('tab')) : the_row();

                        // Load sub field value.
                        $tab_title = get_sub_field('tab_title');
                        $content_title = get_sub_field('content_title');
                        $content_text = get_sub_field('content_text');

                        $button = get_sub_field('button');
                ?>


            <div class="tab-contents flex flex-col items-center lg:items-start"
                x-show="param === '<?php echo gtxCleanString($tab_title) ?>'">
                <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">
                    <?php echo $content_title ?></h4>
                <article class="body-text text-white mb-6 text-center lg:text-left"><?php echo $content_text ?></article>


                <!-- CTA Button  -->
                <?php if(!empty($button)) : ?>
                <a href="<?php echo $button['url'] ?>" class="ports-btn max-w-max">
                    <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $button['title'] ?></span>
                </a>
                <?php endif; ?>

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






    <!-- Mobile Version  -->

    <div class="lg:hidden w-full lg:max-w-[1364px] flex flex-col items-center lg:items-stretch lg:flex-row bg-primary lg:bg-transparent">
        <div class="w-[90%] <?php echo ($single_check <= 1) ? 'lg:w-1/4' : 'lg:w-1/2' ?> flex flex-col lg:flex-row">

            <div class="<?php echo ($single_check <= 1) ? 'hidden' : 'w-full lg:w-[324px]' ?> flex flex-col items-center lg:items-start py-10 lg:py-0 space-y-2">
                    <?php

                    // Check rows exists.
                    if (have_rows('tab')) :

                        // Loop through rows.
                        while (have_rows('tab')) : the_row();

                            // Load sub field value.
                            $tab_title = get_sub_field('tab_title');
                            $image = get_sub_field('image')['url'];
                            $content_title = get_sub_field('content_title');
                            $content_text = get_sub_field('content_text');
    
                            $button = get_sub_field('button');


                    ?>


                    <div x-model="param" @click="param = '<?php echo gtxCleanString($tab_title) ?>'"
                    :class="param === '<?php echo gtxCleanString($tab_title) ?>' ? activeClass : inactiveClass"
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer">
                        <?php if($image_tabs): ?> <img class="hidden lg:block h-[60px] w-[60px]" src="<?php echo $image ?>"
                            alt=""> <?php endif; ?>
                        <span
                            class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4"><?php echo $tab_title ?></span>
                    </div>

                    <div class="tab-contents flex flex-col items-center lg:items-start"
                        x-show="param === '<?php echo gtxCleanString($tab_title) ?>'">

                        <img x-show="param === '<?php echo gtxCleanString($tab_title) ?>'"
                        class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out mb-6"
                        src="<?php echo $image ?>" alt="">
                        
                        <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">
                            <?php echo $content_title ?></h4>
                        <article class="body-text text-white mb-6 text-left lg:text-left"><?php echo $content_text ?></article>


                        <!-- CTA Button  -->
                        <?php if(!empty($button)) : ?>
                        <a href="<?php echo $button['url'] ?>" class="ports-btn max-w-max mb-10">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $button['title'] ?></span>
                        </a>
                        <?php endif; ?>

                    </div>

                <?php // End loop.
                        endwhile;

                    // No value.
                    else :
                    // Do something...
                    endif;

                    ?>




            </div>

        </div>
        
    </div>
</section>


<?php 

} ?>