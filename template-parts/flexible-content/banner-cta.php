<?php
if (get_row_layout() == 'banner_cta') {

    $title = get_sub_field('title');
    $title_highlight = get_sub_field('title_highlight');
    $new_title = brace_highlighter($title_highlight, $title);

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

?>

<section id="banner-cta">

    <div class="bg-primary flex justify-center py-16">

        <div class="w-[80%] flex flex-col items-center">
            <h3 class="sen-bold text-white text-[35px] tracking-[-1.75px] uppercase mb-4 text-center">
                <?php echo $new_title ?>
            </h3>

            <a class="w-full lg:inline-block md:w-auto" href="<?php echo $cta_button_processed_url ?>">
                <div
                    class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
                    <span
                        class="sen uppercase font-bold tracking-widest text-base flex items-center text-white"><?php echo $cta_button_title ?></span>
                </div>
            </a>
        </div>

    </div>

</section>

<?php } ?>