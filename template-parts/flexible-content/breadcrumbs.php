<?php
if (get_row_layout() == 'breadcrumbs') {

    $link_builder = get_sub_field('link_builder');

?>


<section class="bg-light py-4">

    <div class="max-w-[90%] mx-auto gothic-medium uppercase flex items-center flex-col md:flex-row">

        <?php

        if( have_rows('link_builder') ):


            while( have_rows('link_builder') ) : the_row();
        

                $link = get_sub_field('link');


            ?>
                <a class="text-accent" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a> <span class="hidden md:inline-block">&nbsp; &gt; &nbsp;</span>
            
            <?php

            endwhile;
        

        endif;

        ?>

        <p><?php echo get_the_title() ?></p>


    </div>

</section>

<?php } ?>

