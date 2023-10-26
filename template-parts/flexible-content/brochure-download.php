<?php if (get_row_layout() == 'brochure_download') { 

$shortcode = get_sub_field('shortcode');

?>

<section id="brochure-download" class="scroll-mt-60 brochure-download flex justify-center bg-light py-10">
    <div class="w-[80%] lg:w-[60%]">
        <h4 class="heading--s font-bold text-center mb-4"><?php echo __('brochures', 'brace-starter-theme') ?></h4>
        <div class="flex flex-col lg:flex-row lg:space-x-4 mb-4">


            <?php echo $shortcode; ?>

        </div>

    </div>
</section>

<?php } ?>