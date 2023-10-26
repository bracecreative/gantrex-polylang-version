<?php get_header(); ?>
<?php echo wp_get_attachment_image(\Brace\get_field('document_directory_image', 'option'), 'full', false, array('class' => 'block w-full')); ?>
<div class="bg-light text-center pb-12 pt-20">
    <div class="container mx-auto">
        <h1 class="sen-bold uppercase text-primary tracking-tighter text-[35px] mb-2 text-center">
            <?php echo __('Document Directory', 'brace-starter-theme') ?>
        </h1>
        <div id="doc-intro" class="mx-auto text-justify">
            <?php echo get_field('document_directory_intro', 'option'); ?>
        </div>
    </div>
</div>
<div class="<?php esc_attr_e(\Brace\DocumentDirectoryController::getInstance()->classes['root']); ?> bg-secondary py-20 relative">
    <div class="container mx-auto">
        <?php get_template_part('template-parts/document-archive/search-form'); ?>
        <div id="document-id" class="document-filters flex justify-center gap-4 mb-4">
            <?php \Brace\DocumentDirectoryController::getInstance()->print_filters(); ?>
        </div>
        <?php if (have_posts()) : ?>
            <table class="border border-t-0 border-r-0 border-l-0 text-white w-full">
                <?php \Brace\DocumentDirectoryController::getInstance()->print_column_headers(); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/document-archive/item-row'); ?>
                <?php endwhile; ?>
            </table>
        <?php else : ?>
            <?php get_template_part('template-parts/none'); ?>
        <?php endif; ?>
        <div class="flex justify-center mt-4">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
    <?php get_template_part('template-parts/document-archive/loader'); ?>
</div>
<?php get_footer(); ?>