<?php
if (get_row_layout() == 'ports_navbar') {

$nav_items = get_sub_field('nav_items');

?>


<section class="lg:sticky lg:top-[150px] py-10 lg:py-0 lg:h-[60px] bg-accent w-full flex justify-center z-20">
    <div
        class="min-h-full space-y-4 lg:space-y-0 flex flex-col lg:flex-row justify-center lg:divide-x-2 lg:divide-secondary lg:border-l-2 lg:border-r-2 lg:border-accent lg:border-opacity-50 text-[14px] xl:text-[16px]">

        <?php foreach($nav_items as $nav_item ): 
            $title = $nav_item['link_title'];
            $target = $nav_item['target_id'];
            
            ?>
        <a href="<?php echo $target ?>"
            class="underline lg:no-underline decoration-secondary decoration-3 underline-offset-8 inline-block xl:border-0 flex items-center justify-center gothic-medium uppercase text-white tracking-widest lg:min-h-full lg:px-14 lg:hover:bg-secondary transition-all ease-in-out duration-500"><?php echo $title ?></a>

        <?php endforeach; ?>
    </div>
</section>

<?php } ?>