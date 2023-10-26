<?php
if (get_row_layout() == 'contact_form') {


    $image = get_sub_field('image')['url'];

?>

<section >

    <div class="flex flex-col lg:flex-row" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/component_bg/background-1.png); background-position: center center; background-fit:cover;">
        <div class="w-full lg:w-1/2 bg-primary py-20 xl:p-20 flex flex-col items-center lg:items-end">
            <div class="contact-form px-8 w-full 2xl:w-[80%]">
                <?php 
                gravity_form( 4, false, false, false, '', false ); 
                ?>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <img class="h-full w-full object-cover" src="
            <?php 
            echo $image 
            ?>" alt="">
        </div>
    </div>

</section>

<?php } ?>