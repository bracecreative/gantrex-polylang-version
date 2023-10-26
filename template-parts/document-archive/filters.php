<?php

/**
 * @var \Brace\DocumentFilter[] $filters
 * @var string $class
 */

?>
<?php foreach ($filters as $filter) : ?>
    <div class="directory-filter px-2" style="border:3px solid #0B2B42;background-color:#fff;padding:10px 20px;width:30%;text-transform:uppercase !important;font-family: 'Franklin Gothic Medium', sans-serif;letter-spacing:2px;">
        <select style="border: none;" class="<?php esc_attr_e($class); ?> mb-4" name="<?php esc_attr_e($filter->get_name()); ?>" data-placeholder="<?php echo esc_attr_e($filter->get_label()); ?>" <?php echo $filter->is_multiple() ? 'multiple="multiple"' : ''; ?> autocomplete="off">
            <?php foreach ($filter->get_options() as $option) : ?>
                <option value="<?php esc_attr_e($option['value']); ?>" <?php selected($option['selected']); ?>>
                    <?php echo esc_html($option['label']); ?>
                </option>
            <?php endforeach; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12.38" viewBox="0 0 10 12.38"><g transform="translate(991.361 -24) rotate(90)"><path d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z" transform="translate(0 0)" fill="#e96500"/></g></svg>
        </select>
       
    </div>
<?php endforeach; ?>