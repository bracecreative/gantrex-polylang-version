<?php if (get_row_layout() == 'icon_cta') { 
    
    $title = get_sub_field('title');
    $title_highlight = get_sub_field('title_highlight');
    $new_title = brace_highlighter($title_highlight, $title);

    $cta = get_sub_field('cta_link');
    $cta_url = $cta['url'];

    // Translation 
    $cta_link_post_id = url_to_postid($cta_url); // This returns 0 if not found, so you can detect an external link
    $cta_translated_url = get_the_permalink($cta_link_post_id);

    if($cta_link_post_id === 0) { 
        $cta_processed_url = $cta_url; 
    } 
    else { 
        $cta_processed_url = $cta_translated_url; 
    }


    $cta_title = $cta['title'];

    
?>


<section class="bg-light py-20 flex flex-col items-center">

    <div class="max-w-full lg:max-w-[50%] mb-16">
        <h2 class="sen-bold uppercase text-primary tracking-tighter text-[35px] text-center"><?php echo $new_title ?>
        </h2>
    </div>

    <div class="flex flex-wrap justify-center mb-6">

        <?php

        
        $icons = get_sub_field('icons');


        if( $icons ) :

            foreach( $icons as $icons ) : 
        
        ?>


        <div class="w-1/2 lg:w-1/4 min-h-[200px] flex flex-col items-center ">
            <?php if(!empty($icons['icon_link'])) : 
                
                
                
            // Translation 
            $icon_link = $icons['icon_link'];

            $icon_link_post_id = url_to_postid($icon_link); // This returns 0 if not found, so you can detect an external link
            $icon_link_translated_url = get_the_permalink($icon_link_post_id);

            if($icon_link_post_id === 0) { 
                $icon_link_processed_url = $icon_link; 
            } 
            else { 
                $icon_link_processed_url = $icon_link_translated_url; 
            }

                
            ?>
            <a href="<?php echo $icon_link_processed_url ?>">
                <?php endif; ?>
                <img class="w-[100px] h-[100px] sm:w-[160px] sm:h-[160px] mb-8"
                    src="<?php echo $icons['icon']['url'] ?>" alt="">
                <?php if(!empty($icons['icon_link'])) : ?>
            </a>
            <?php endif; ?>
            <p class="sen-bold uppercase text-primary tracking-tighter text-center max-w-[70%]">
                <?php echo $icons['text'] ?></p>
        </div>

        <?php 
        
            endforeach;
        
        endif;
        
        ?>


    </div>

    <div class="min-w-[25%] max-w-[1920px] flex justify-center group">

        <div class="min-w-full min-h-max flex items-center">
            <div
                class="w-full h-[2px] bg-accent transition-all duration-500 ease-in-out group-hover:translate-x-4 group-hover:animate-pulse">
            </div>
        </div>

        <div class="min-w-[107px] flex flex-col items-center pt-8">
            <a class="mb-4" href="<?php echo $cta_processed_url ?>"><img
                    class="w-[57px] h-[55px] rounded-full transition-all duration-500 ease-in-out hover:transform hover:scale-125"
                    src="<?php echo get_template_directory_uri() . '/images/arrow-icon.svg' ?>" alt=""></a>
            <a class="gothic-medium text-[12px] uppercase tracking-widest text-primary text-center hover:scale-105"
                href="<?php echo $cta_processed_url ?>"><?php echo $cta_title ?></a>
        </div>

        <div class="min-w-full min-h-max flex items-center">
            <div
                class="w-full h-[2px] bg-accent transition-all duration-500 ease-in-out group-hover:-translate-x-4 transition-all duration-500 ease-in-out group-hover:animate-pulse">
            </div>
        </div>

    </div>

</section>

<?php } ?>