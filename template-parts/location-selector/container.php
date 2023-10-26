<?php

/**
 * @var string $container_class
 * @var string $loader_class
 * @var string $markup
 */

?>
<div class="<?php esc_attr_e($container_class); ?>">
    <?php echo $markup; ?>
    <div class="<?php esc_attr_e($loader_class); ?>" style="display: none">
        <?php \Brace\template('template-parts/common/loader'); ?>
    </div>
</div>