<?php if (get_row_layout() == 'plain_text_with_image') {

$title = get_sub_field('title');
$title_highlight = get_sub_field('title_highlight');
$new_title = brace_highlighter($title_highlight, $title);
$text = get_sub_field('text');

if(!empty(get_sub_field('image'))) :
$image = get_sub_field('image')['url'];
endif;

$mobile_top = 'pt-' . get_sub_field('mobile_top');
$mobile_bottom = 'pb-' . get_sub_field('mobile_bottom');

$desktop_top = 'lg:pt-' . get_sub_field('desktop_top');
$desktop_bottom = 'lg:pb-' . get_sub_field('desktop_bottom');

$spacing = $mobile_top . ' ' . $mobile_bottom . ' ' . $desktop_top . ' ' . $desktop_bottom;

$colour = get_sub_field('background_colour');
$bg_colour;
$text_colour;

if($colour === 'white') {
    $bg_colour = 'bg-white';
    $text_colour = 'text-dark';
} elseif ($colour === 'dark-blue') {
    $bg_colour = 'bg-primary';
    $text_colour = 'text-white';
}

?>

<section id="plain-text-with-image" class="<?php echo $spacing ?> <?php echo $bg_colour ?>" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-4.png); background-position: center center; background-fit:cover;">

    <div class="max-w-[90%] sm:max-w-[80%] h-full mx-auto flex flex-col items-center">

        <?php if(!empty($title)) { ?>
        <h4
            class="sen-bold text-[25px] md:text-[35px] lg:text-[50px] uppercase max-w-[90%] xl:max-w-[60%] leading-tight text-center mb-12 <?php echo $text_colour ?>">
            <?php echo $new_title ?>
        </h4>
        <?php } ?>

        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div
                class="min-w-full flex flex-col justify-center lg:justify-start prose prose-p:gothic-book prose-p:text-[18px] prose-p:text-center prose-p:lg:text-left prose-p:leading-[20px] <?php echo $text_colour ?>">
                <?php echo $text ?>
            </div>
            <div class="order-first lg:order-last">
                <img src="<?php echo $image ?>" alt="">
            </div>
        </div>

    </div>

</section>


<?php } ?>