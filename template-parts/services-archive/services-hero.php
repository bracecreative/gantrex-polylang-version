
<?php 
    $serviceTitle  = get_field('services_archive_title', pll_current_language('slug'));
    $titleHighlight = get_field('services_title_highlight', pll_current_language('slug'));
    $servicePara  = get_field('services_archive_copy', pll_current_language('slug'));
    $newTitle = brace_highlighter($titleHighlight, $serviceTitle);
?>


<div class="container m-auto py-[50px]">
    <h1 class="text-center heading--s sen-bold pb-[25px] uppercase text-primary"><?php echo $newTitle; ?></h1>
    <article class="m-auto max-w-[800px] gothic-book text-justify"><?php echo $servicePara; ?></article>
</div>