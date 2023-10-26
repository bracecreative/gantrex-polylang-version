<?php

/**
 * @var string $class 
 * @var WP_Term[] $languages
 */

?>
<div class="<?php esc_attr_e($class); ?>">
    <select data-placeholder="Any language">
        <option value="" class="min-w-full"></option>
        <?php foreach ($languages as $language) : ?>
        <option value="<?php esc_attr_e($language->slug); ?>">
            <?php echo $language->name; ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>


