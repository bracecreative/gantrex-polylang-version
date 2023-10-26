<?php

/**
 * @var WP_Post[] $locations
 * @var int $parent
 * @var string $item_class
 * @var string $class
 * @var string $value
 * @var string $name
 * @var string $id
 * @var string $tabindex
 * @var string $disabled_text
 * @var string $required_attribute
 * @var string $invalid_attribute
 * @var string $describedby_attribute
 * @var string $autocomplete_attribute
 */

if (empty($locations)) {
    return;
}

?>
<div class="<?php esc_attr_e($item_class); ?>" style="border:2px #3091D9 solid;margin-bottom:15px;min-width:80%;">
    <select class="<?php esc_attr_e($class); ?>" name="<?php esc_attr_e($name); ?>" id="<?php esc_attr_e($id); ?>"
        <?php echo $tabindex; ?> <?php echo $describedby_attribute; ?> <?php echo $disabled_text; ?>
        <?php echo $required_attribute; ?> <?php echo $invalid_attribute; ?> <?php echo $autocomplete_attribute; ?>
        style="width: 100%;height:61px;">
        <option value=""><?php echo $parent ? __('Select a Region', 'brace-starter-theme') : __('Select a Country', 'brace-starter-theme') ?></option>
        <?php foreach ($locations as $location) : ?>
        <option value="<?php esc_attr_e($location->ID); ?>" <?php selected($location->ID, (int) $value); ?>>
            <?php echo $location->post_title; ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>