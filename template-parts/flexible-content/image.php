<?php if (get_row_layout() == 'image') {

if(!empty(get_sub_field('image'))) :
$image = get_sub_field('image')['url'];
endif;


?>

<section id="image" class="max-w-[80%] mx-auto py-8 lg:py-12">

    <img src="<?php echo $image ?>" alt="">

</section>


<?php } ?>