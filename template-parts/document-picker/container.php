<?php

/**
 * @var string $class
 * @var string $filters_attr
 * @var string $language_picker
 * @var string $document_picker
 * @var string $language_loader_class
 * @var string $document_loader_class
 * @var string $theme
 */

?>
<div class="<?php esc_attr_e($class); ?> mx-auto" data-filters="<?php esc_attr_e($filters_attr); ?>">
    <div class="flex flex-col xl:flex-row space-y-4 xl:space-y-0 xl:space-x-4 mb-4 items-center">
        <?php echo $language_picker; ?>
        <?php echo $document_picker; ?>
        <div class="<?php esc_attr_e($language_loader_class); ?> <?php echo $theme === 'light' ? 'text-white' : ''; ?>" style="display: none">
            <?php \Brace\template('template-parts/common/loader'); ?>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="gtx-submit flex items-center justify-center">
            <span class="sen uppercase font-bold tracking-widest text-base text-secondary flex items-center">Download</span>
        </button>
    </div>

    <div class="<?php esc_attr_e($document_loader_class); ?> <?php echo $theme === 'light' ? 'text-white' : ''; ?>" style="display: none">
        <?php \Brace\template('template-parts/common/loader'); ?>
    </div>
</div>