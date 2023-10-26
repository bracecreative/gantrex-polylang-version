<?php

/**
 * @var \Brace\DocumentColumn[] $columns
 */

?>
<thead>
    <tr>
        <?php foreach ($columns as $column) : ?>
            <th class="text-left border-l border-b px-3 py-2">
                <a class="flex items-center justify-between uppercase tracking-[2px] gothic-book" href="<?php echo esc_url($column->get_sort_link()); ?>">
                    <?php echo $column->get_label(); ?>
                </a>
            </th>
        <?php endforeach; ?>
    </tr>
</thead>