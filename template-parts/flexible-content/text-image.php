<?php if (get_row_layout() == 'text_and_image') {

    $title = get_sub_field('title');
    $text = get_sub_field('text');
    if(!empty(get_sub_field('button'))) :
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
    endif;
    if(!empty(get_sub_field('image'))) :
        $image = get_sub_field('image')['url'];
    endif;
    $do_reverse = get_sub_field('reverse_columns');

?>

<section id="text-and-image" class="bg-light xl:px-10 xl:py-20 scroll-mt-60"
    style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-3.png); background-position: center center; background-fit:cover;">


    <div class="w-full xl:max-w-[80%] mx-auto grid grid-cols-1 xl:grid-cols-2">

        <!-- Left Column -->
        <div
            class="<?php echo ($do_reverse) ? 'order-2' : 'order-1' ?> w-full flex flex-col items-center xl:items-start px-12 lg:px-0 pt-14 lg:pt-0 pb-20 xl:pb-0 <?php echo ($do_reverse) ? 'lg:pl-10' : '' ?>">
            <h1 class="heading text-primary heading--xs font-bold mb-4"><?php echo $title ?></h1>
            <div class="body-text mb-5 font-normal text-lg lg:w-[80%] text-center lg:text-left prose prose-p:mb-4">
                <?php echo $text ?>
            </div>


            <?php if(!empty($button)) : ?>
            <a class="w-full md:w-auto" href="<?php echo $button_processed_url ?>">
                <div class="gtx-btn border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                    <span
                        class="sen uppercase font-bold tracking-widest text-base flex items-center"><?php echo $button_title ?></span>
                </div>
            </a>
            <?php endif ?>
        </div>

        <!-- Right Column -->
        <div class="<?php echo ($do_reverse) ? 'order-1' : 'order-2' ?> w-full">


            <div class="product-hero-slide relative">
                <!-- <div class="absolute left-0 top-0 w-[40px] h-full bg-accent mix-blend-multiply"></div>
                <div class="absolute left-[40px] top-0 w-[15px] h-full bg-secondary mix-blend-multiply"></div> -->
                <img class="w-full h-full object-cover object-center" src="<?php echo $image ?>" alt="">
            </div>

        </div>

    </div>


</section>

<?php } ?>