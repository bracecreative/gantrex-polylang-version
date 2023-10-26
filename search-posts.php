<?php /* Template Name: Search Posts Template */ ?>
<?php get_header(); ?>
<img src="<?php echo get_template_directory_uri() . '/images/hero-placeholder.jpg' ?>" class="pb-[50px]" width="100%" alt="">
<div class="container m-auto">
    <div class="global-search container m-auto">
        <label for="">
            <input id="document-search" class="mb-[55px] cursor-pointer w-full border-2 border=black h-[61px] px-6 bg-white text-secondary uppercase gothic-medium tracking-widest focus:outline-none mb-4 pl-[70px]" type="search" placeholder="SEARCH" onsearch="searchFunction()"></input>
        </label>
    </div>
    <p id="search-output"></p>
</div>
<div class="search-results container m-auto">
    <div class="post-type-one">
    <h2 class="pb-[50px] uppercase mt-[50px] sen-bold text-white w-auto py-[5px] my-[25px] text-left text-[30px]"><span class="bg-accent p-[4px]"><?php echo __('Products', 'brace-starter-theme') ?></span></h2>
        <?php $args = array(  
            'post_type' => 'products',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $loop = new WP_Query( $args ); 
            
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="result-card flex align-center">
            <div class="thumbnail-image min-w-[125px] mr-[20px]">
                <?php
                    $image = get_the_post_thumbnail( $post_id, 'thumbnail' );
                    echo $image;

                    $postType = get_post_type_object(get_post_type());
                ?>
            </div>
            <div class="result-info mt-[-10px]">
                <h1 class="pb-[5px] sen-bold text-[28px] self-start uppercase tracking-[-2px]"><?php the_title(); ?> </h1>
                <p class="pb-[10px] result-post-type gothic-book text-secondary capitalize"><?php echo $postType->labels->singular_name; ?></p>
                <p><?php the_excerpt(); ?> </p>
                <div class="hover:text-secondary pt-[10px] gtx-btn-search flex items-center z-10">
                    <a href="<?php the_permalink(); ?>">
                        <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                    </a>
                </div>
            </div> 
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
    </div>
    <div class="post-type-two">
        <h2 class="pb-[50px] pt-[50px] uppercase sen-bold text-white w-auto py-[5px] my-[25px] text-left text-[30px]"><span class="bg-accent p-[4px]"><?php echo __('Industries', 'brace-starter-theme') ?></span></h2>
        <?php $args = array(  
            'post_type' => 'industries',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $loop = new WP_Query( $args ); 
            
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="result-card flex items-start">
            <div class="thumbnail-image min-w-[125px] mr-[20px]">
                <?php
                    $image = get_the_post_thumbnail( $post_id, 'thumbnail' );
                    echo $image;

                    $postType = get_post_type_object(get_post_type());
                ?>
            </div>
            <div class="result-info mt-[-10px]">
                <h1 class="pb-[5px] sen-bold text-[28px] self-start uppercase tracking-[-2px]"><?php the_title(); ?> </h1>
                <p class="pb-[10px] result-post-type gothic-book text-secondary capitalize"><?php echo $postType->labels->singular_name; ?></p>
                <p><?php the_excerpt(); ?> </p>
                <div class="hover:text-secondary pt-[10px] gtx-btn-search flex items-center z-10">
                    <a href="<?php the_permalink(); ?>">
                        <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center pb-[50px]"><?php echo __('read more', 'brace-starter-theme') ?></span>
                    </a>
                </div>
            </div> 
        </div>
    <?php endwhile;

        wp_reset_postdata(); ?>
    </div>
    <div class="post-type-three">
        <h2 class="pb-[50px] pt-[50px] uppercase sen-bold text-white w-auto py-[5px] my-[25px] text-left text-[30px]"><span class="bg-accent p-[4px]"><?php echo __('News', 'brace-starter-theme') ?></span></h2>
        <?php $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $loop = new WP_Query( $args ); 
            
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="result-card flex items-start">
            <div class="thumbnail-image min-w-[125px] mr-[20px]">
                <?php
                    $image = get_the_post_thumbnail( $post_id, 'thumbnail' );
                    echo $image;

                    $postType = get_post_type_object(get_post_type());
                ?>
            </div>
            <div class="result-info mt-[-10px]">
                <h1 class="pb-[5px] sen-bold text-[28px] self-start uppercase tracking-[-2px]"><?php the_title(); ?> </h1>
                <p class="pb-[10px] result-post-type gothic-book text-secondary capitalize"><?php echo $postType->labels->singular_name; ?></p>
                <p><?php the_excerpt(); ?> </p>
                <div class="hover:text-secondary pt-[10px] gtx-btn-search flex items-center z-10">
                    <a href="<?php the_permalink(); ?>">
                        <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center pb-[50px]"><?php echo __('read more', 'brace-starter-theme') ?></span>
                    </a>
                </div>
            </div> 
        </div>
    <?php endwhile;

        wp_reset_postdata(); ?>
    </div>
</div>

<script>
    function searchFunction() {
        var searchInput = document.getElementById("document-search").value;
        document.getElementById("search-output").innerHTML = 'Search results for...   ' + searchInput;
    };
</script>

<?php get_footer(); ?>