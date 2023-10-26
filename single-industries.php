<?php get_header(); ?>



<!---------------------------------

Hero Section

---------------------------------->

<?php 


get_template_part( '/template-parts/industries-single/hero');


?>



<!---------------------------------

Intro Section

---------------------------------->

<?php 

get_template_part( '/template-parts/industries-single/intro' );

?>





<!---------------------------------

References Section

---------------------------------->

<?php 

get_template_part( '/template-parts/industries-single/references' );

?>





<!---------------------------------

Tabbed Related Section

---------------------------------->

<?php 

get_template_part( '/template-parts/industries-single/tabbed', 'related' );

?>





<!---------------------------------

News Slider Section

---------------------------------->

<?php 

get_template_part( '/template-parts/industries-single/news', 'slider' );

?>





<!---------------------------------

Other Industries Section

---------------------------------->

<?php 

get_template_part( '/template-parts/industries-single/other', 'industries' );

?>














<?php get_footer(); ?>