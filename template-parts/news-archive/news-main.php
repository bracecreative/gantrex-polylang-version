<div id="news-filter">


<?php 
    $newsTitle  = get_field('news_archive_title', 'option');
    $titleHighlight = get_field('news_title_highlight', 'option');
    $newsPara  = get_field('news_archive_copy', 'option');
    $newTitle = brace_highlighter($titleHighlight, $newsTitle);


    $args = array(
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'posts_per_page'    => 12,
        'orderby'         => 'post_date',
        'order'           => 'DESC',
        'suppress_filters' => false,
        'wp_grid_builder' => 'wpgb-content-1',
    );
    $postslist = get_posts( $args );

?>

    <div class="container m-auto py-[50px]">
        <h1 class="text-center heading--s sen-bold pb-[25px] uppercase text-primary"><?php echo $newTitle; ?></h1>
        <article class="m-auto max-w-[800px] gothic-book text-justify"><?php echo $newsPara; ?></article>
    </div>

    <div class="first-container container m-auto">


    <div class="py-10">
        <?php 
        echo do_shortcode('[wpgb_facet id="5" grid="wpgb-content-1"]');
        ?>

    </div>

    <div class="py-2 mb-4">
        <?php 
        echo do_shortcode('[wpgb_facet id="6" grid="wpgb-content-1"]'); 
        ?>
    </div>

    </div>



    <div class="wpgb-content-1 news-archive-wrap container m-auto">
        <div class="row flex flex-wrap justify-around m-auto gap-4 text-center mt-4" id="ajax-posts">
        <?php
                foreach ( $postslist as $post ) :
                    setup_postdata( $post );   
        ?>

                    <div class="news-card bg-primary <?php print (str_replace(' ', '-', strtolower(get_the_category(get_the_ID())[0]->name))); ?> <?php echo the_category_ID(); ?> w-[32%] basis-[32.5%]">
                        <a class="post-card news-cat" href="<?php the_permalink(); ?>">
                            <div class="featured-image">
                                <?php
                                if (has_post_thumbnail() ) {
                                    $image = get_the_post_thumbnail( $post_id, 'small' );
                                    echo $image;
                                } else {
                                  ?>  <img src="<?php bloginfo('template_directory'); ?>/images/placeholder-1.jpg" width="1200" height="800" alt="<?php the_title(); ?>" /> 
                                <?php  } ?>
                            </div>
                            <div class="news-text min-h-[253px] p-10 pb-[50px] flex flex-col text-white">
                                <h3 class="news-title uppercase sen-bold tracking-widest leading-[20px] text-[23px] text-left py-2"><?php the_title(); ?></h3>
                                <div class="extra-info flex items-center">
                                    <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                        <path id="noun-calendar-4619829" d="M118.393,36.072H116.25v-.536a.536.536,0,1,0-1.071,0v.536h-5.357v-.536a.536.536,0,1,0-1.071,0v.536h-2.143A1.607,1.607,0,0,0,105,37.679V48.393A1.607,1.607,0,0,0,106.607,50h11.786A1.607,1.607,0,0,0,120,48.393V37.679a1.607,1.607,0,0,0-1.607-1.607Zm-11.786,1.071h2.143v.536a.536.536,0,1,0,1.071,0v-.536h5.357v.536a.536.536,0,1,0,1.071,0v-.536h2.143a.536.536,0,0,1,.536.536v2.679H106.071V37.679a.536.536,0,0,1,.536-.536Zm11.786,11.786H106.607a.536.536,0,0,1-.536-.536V41.429h12.857v6.964a.536.536,0,0,1-.536.536Z" transform="translate(-105 -35)" fill="#e96500"/>
                                    </svg>
                                    <p class="pl-[10px] text-[13px] tracking-[2px] text-left pb-[0.25rem] pt-[0.35rem] gothic-medium"><?php echo get_the_date('Y/m/d'); ?></p>
                                    </div>
                                    
                                <div class="cat--<?php print (str_replace(' ', '-', strtolower(get_the_category(get_the_ID())[0]->name))); ?> <?php echo the_category_ID(); ?> pl-[5px] flex items-center gothic-medium uppercase text-[13px] tracking-[2px]"><?php the_category(); ?></div>
                                </div>

                                <article class="leading-[15px] mt-[5px] gothic-book text-left text-[13px]"><?php echo wp_trim_words(get_the_excerpt(), 55) . "…"; ?></article>
                                <a href="<?php the_permalink(); ?>" class="flex space-x-4 bold gtx-btn font-bold uppercase tracking-widest self-start"><span class="read-more sen-bold mt-2"><?php echo __('Read More', 'brace-starter-theme') ?></span></a>
                            </div>  
                        </a>
                    </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
                  
        </div>
    </div>

    <div class="py-4 mb-4 flex justify-center">
        <?php 
        echo do_shortcode('[wpgb_facet id="7" grid="wpgb-content-1"]'); 
        ?>
    </div>

</div>

