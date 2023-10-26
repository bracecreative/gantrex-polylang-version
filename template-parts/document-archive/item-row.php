<?php

$language_details = apply_filters('wpml_post_language_details', array(), get_the_ID());

?>
<tr data-document-id="<?php echo get_the_ID(); ?>">
    <td class="border-l border-b px-3 py-2">
        <a class="<?php esc_attr_e(\Brace\DocumentDirectoryController::getInstance()->classes['download']); ?> flex gap-[10px] items-center" href="#">
            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="20.05" height="20" viewBox="0 0 20.05 20">
                <path id="Path_4731" data-name="Path 4731" d="M215.714,71.223a.9.9,0,0,0,.251.176.635.635,0,0,0,.3.05,1.252,1.252,0,0,0,.3-.05.9.9,0,0,0,.251-.176l5.489-5.489a.78.78,0,0,0-1.1-1.1l-4.16,4.16V57.338a.777.777,0,1,0-1.554,0V68.766l-4.16-4.135a.78.78,0,0,0-1.1,1.1Z" transform="translate(-206.24 -56.561)" fill="#e96500" />
                <path id="Path_4732" data-name="Path 4732" d="M145.273,354.48a.781.781,0,0,0-.777.777,4.311,4.311,0,0,1-4.311,4.311h-8.3a4.311,4.311,0,0,1-4.311-4.311.781.781,0,0,0-.777-.777.8.8,0,0,0-.8.777,5.9,5.9,0,0,0,5.89,5.89h8.3a5.878,5.878,0,0,0,5.865-5.89.781.781,0,0,0-.777-.777Z" transform="translate(-126 -341.147)" fill="#e96500" />
            </svg>

            <?php the_title(); ?>
        </a>
    </td>
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(wp_get_post_terms(get_the_ID(), 'document_language'), 'name'))); ?>
    </td>
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(wp_get_post_terms(get_the_ID(), 'document_type'), 'name'))); ?>
    </td>
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(get_field('products') ?: array(), 'post_title'))); ?>
    </td>
    <!-- <td class="border-l border-b px-3 py-2">
        <?php 
        // echo esc_html(join(', ', wp_list_pluck(wp_get_post_terms(get_the_ID(), 'document_product_group'), 'name'))); 
        ?>
    </td> -->
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(get_field('industries') ?: array(), 'post_title'))); ?>
    </td>
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(get_field('services') ?: array(), 'post_title'))); ?>
    </td>
    <td class="border-l border-b px-3 py-2">
        <?php echo esc_html(join(', ', wp_list_pluck(wp_get_post_terms(get_the_ID(), 'document_application'), 'name'))); ?>
    </td>
</tr>

