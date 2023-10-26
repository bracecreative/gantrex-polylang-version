<?php

/**
 * @var string $class
 * @var WP_Post[] $documents
 */

?>
<div class="<?php esc_attr_e($class); ?>">
    <select data-placeholder="Choose a document">
        <option value=""></option>
        <?php foreach ($documents as $document) : ?>
        <option value="<?php echo $document->ID; ?>">
            <?php echo esc_html($document->post_title); ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>

