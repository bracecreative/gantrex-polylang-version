<?php if (get_row_layout() == 'image_hero') {

$image = get_sub_field('image')['url'];


?>

<section id="image-hero" class="min-h-[400px] max-h-[400px] bg-no-repeat bg-center bg-cover"
    style="background-image: url(<?php echo $image ?>);">

</section>


<?php } ?>