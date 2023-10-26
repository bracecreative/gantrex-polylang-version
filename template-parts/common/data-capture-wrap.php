<?php

/**
 * @var string $form
 * @var string $close_class
 */

?>
<div class="data-capture fixed inset-0 z-50 bg-white bg-opacity-80 flex items-center justify-center">
    <button type="button" class="<?php esc_attr_e($close_class); ?> w-10 h-10 absolute right-10 top-10 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="bg-white p-4 border relative">
    <button type="button" class="<?php esc_attr_e($close_class); ?> w-10 h-10 absolute right-10 top-10 flex items-center justify-center absolute">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
        <?php echo $form; ?>
    </div>
</div>