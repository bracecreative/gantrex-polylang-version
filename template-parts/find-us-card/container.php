<?php

/**
 * @var string $container_class
 * @var string $location_selector
 */

?>
<div class="<?php esc_attr_e($container_class); ?>">
    <?php echo $location_selector; ?>
    <div class="<?php esc_attr_e($placeholder_class); ?>"></div>
</div>