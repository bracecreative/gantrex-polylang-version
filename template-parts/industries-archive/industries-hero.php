
<?php 
$industriesTitle  = get_field('industries_archive_title', 'option');
$titleHighlight = get_field('industries_title_highlight', 'option');
$industriesPara  = get_field('industries_archive_copy', 'option');
$industriesNewTitle = brace_highlighter($titleHighlight, $industriesTitle);
?>


<h1 class="text-center heading--s sen-bold p-4 uppercase text-primary pt-[260px]"><?php echo $industriesNewTitle; ?></h1>
<div class="text-justify gothic-book m-auto max-w-[900px] w-3/5 p-2 body-text pb-[50px]"><?php echo $industriesPara; ?></div>