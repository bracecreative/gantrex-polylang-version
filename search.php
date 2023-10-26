<?php get_header(); ?>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );


?>





<section>

    <div class="main-search-container w-[80%] lg:w-[60%] xl:w-[40%] mx-auto">

        <!-- Search Form  -->
        <div class="mb-8">
            <form action="<?php echo home_url(); ?>" id="search-form" method="get">
                <input
                    class="w-full gothic-medium p-2 text-[15px] text-primary uppercase bg-white tracking-[2.25px] border-2 border-secondary focus:border-secondary"
                    type="text" name="s" id="s" value="search" onblur="if(this.value=='')this.value='search'"
                    onfocus="if(this.value=='search')this.value=''" />
                <input type="hidden" value="submit" />
            </form>
        </div>


        <!-- Search results  -->
        <div>
            <?php
            
            if ( $the_query->have_posts() ) { ?>

            <p class="gothic-book text-[20px] mb-6"><?php echo __('Search results for', 'brace-starter-theme') ?>: <span
                    class="italic">"<?php echo get_query_var('s') ?>"</span></p>



            <!-- Products  -->
            <div class="results-container">


                <div id="products-headline" class="mb-6">
                    <h2 class="sen-bold text-[35px] uppercase mb-[25px]"><?php echo brace_highlighter('Products', 'Products') ?>
                    </h2>
                </div>


                <?php
                        while ( $the_query->have_posts() ) {


                                    $the_query->the_post();

                                ?>

                <?php
                                    if($the_query->post->post_type == 'products') :

                                    
                    if(!empty(wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ))) :
                        $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        else :
                        $image = get_template_directory_uri() . '/images/gantrex-placeholder.png';
                        endif;

                                ?>

                <div id="products-results" class="flex flex-col lg:flex-row lg:space-x-10 mb-10">
                    <div class="min-w-[100px]"><img class="w-[100px] h-[100px]" src="<?php echo $image ?>" alt=""></div>
                    <div class="flex flex-col inner-results">
                        <h5 class="sen-bold text-[25px] uppercase text-primary"><?php the_title() ?></h5>
                        <p class="gothic-book text-[20px] text-secondary capitalize">
                            <?php echo $the_query->post->post_type ?></p>
                        <p class="gothic-book text-base"><?php echo get_the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="gtx-submit max-w-max">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </a>
                    </div>
                </div>

                <?php
                                endif;

                            }
                ?>

            </div>





            <!-- Services  -->
            <div class="results-container">

                <div id="services-headline" class="mb-6">
                    <h2 class="sen-bold text-[35px] uppercase mb-[25px]"><?php echo brace_highlighter('Services', 'Services') ?>
                    </h2>
                </div>

                <?php
        while ( $the_query->have_posts() ) {


                    $the_query->the_post();

                ?>

                <?php
                    if($the_query->post->post_type == 'services') :

                    
                        if(!empty(wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ))) :
                            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            else :
                            $image = get_template_directory_uri() . '/images/gantrex-placeholder.png';
                            endif;
                ?>

                <div id="services-results" class="flex space-x-10 mb-10">
                    <div class="min-w-[100px]"><img class="w-[100px] h-[100px]" src="<?php echo $image ?>" alt=""></div>
                    <div class="flex flex-col inner-results">
                        <h5 class="sen-bold text-[25px] uppercase text-primary"><?php the_title() ?></h5>
                        <p class="gothic-book text-[20px] text-secondary capitalize">
                            <?php echo $the_query->post->post_type ?></p>
                        <p class="gothic-book text-base"><?php echo get_the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="gtx-submit max-w-max">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </a>
                    </div>
                </div>

                <?php
                endif;

            }
?>

            </div>






            <!-- News  -->
            <div class="results-container">

                <div id="news-headline" class="mb-6">
                    <h2 class="sen-bold text-[35px] uppercase mb-[25px]"><?php echo brace_highlighter('News', 'News') ?>
                    </h2>
                </div>

                <?php
        while ( $the_query->have_posts() ) {


                    $the_query->the_post();

                ?>

                <?php
                    if($the_query->post->post_type == 'post') :

                    if(!empty(wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ))) :
                    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                    else :
                    $image = get_template_directory_uri() . '/images/gantrex-placeholder.png';
                    endif;
                ?>

                <div id="news-results" class="flex space-x-10 mb-10">
                    <div class="min-w-[100px]"><img class="w-[100px] h-[100px]" src="<?php echo $image ?>" alt=""></div>
                    <div class="flex flex-col inner-results">
                        <h5 class="sen-bold text-[25px] uppercase text-primary"><?php the_title() ?></h5>
                        <p class="gothic-book text-[20px] text-secondary capitalize">
                            <?php echo $the_query->post->post_type ?></p>
                        <p class="gothic-book text-base"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="gtx-submit max-w-max">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </a>
                    </div>
                </div>

                <?php
                endif;

            }
?>

            </div>

        </div>
        <?php
                    }else{
                    ?>

        <div class="max-w-[80%] mx-auto flex flex-col items-center py-20">
            <h5 class="mb-4"><?php echo __('Didnt find what you are looking for?', 'brace-starter-theme') ?><h5>
            <a href="<?php echo get_home_url() . '/contact' ?>"><?php echo __('Please get in touch', 'brace-starter-theme') ?></a>
        </div>

                <?php } ?>

    </div>

</section>


<script>


window.addEventListener('load', function () {

    var productsResults = document.getElementById('products-results');
    var productsHeadline = document.getElementById('products-headline');

    var servicesResults = document.getElementById('services-results');
    var servicesHeadline = document.getElementById('services-headline');

    var newsResults = document.getElementById('news-results');
    var newsHeadline = document.getElementById('news-headline');

    if(productsResults == null) {
        productsHeadline.remove();
    } 

    if(servicesResults == null) {
        servicesHeadline.remove();
    } 

    if(newsResults == null) {
        newsHeadline.remove();
    }

    })


</script>

<?php get_footer(); ?>