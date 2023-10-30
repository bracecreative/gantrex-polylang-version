
<?php

$productsTitle  = get_field('products_archive_title', pll_current_language('slug'));
$productsTitleHighlight = get_field('products_title_highlight', pll_current_language('slug'));
$productsPara  = get_field('products_archive_copy', pll_current_language('slug'));
$productsNewTitle = brace_highlighter($productsTitleHighlight, $productsTitle);

?>


<div class="container m-auto py-[50px]">
    <h1 class="text-center heading--s sen-bold pb-[25px] uppercase text-primary"><?php echo $productsNewTitle; ?></h1>
    <article class="m-auto max-w-[800px] gothic-book text-justify"><?php echo $productsPara; ?></article>
</div>