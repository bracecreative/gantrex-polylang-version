
<?php 
$productsTitle  = get_field('products_archive_title', 'option');
$productsTitleHighlight = get_field('products_title_highlight', 'option');
$productsPara  = get_field('products_archive_copy', 'option');
$productsNewTitle = brace_highlighter($productsTitleHighlight, $productsTitle);
?>


<div class="container m-auto py-[50px]">
    <h1 class="text-center heading--s sen-bold pb-[25px] uppercase text-primary"><?php echo $productsNewTitle; ?></h1>
    <article class="m-auto max-w-[800px] gothic-book text-justify"><?php echo $productsPara; ?></article>
</div>