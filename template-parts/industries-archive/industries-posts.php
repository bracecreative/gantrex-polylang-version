<div
    class="archive-card-hover max-w-[1360px] gap-4 w-[80%] flex-wrap explore-cards py-[100px] pt-[0px] flex m-auto justify-center">
    <?php
        $args = array(
            'post_type'         => 'industries',
            'post_status'       => 'publish',
            'posts_per_page'    => 4,
            'orderby'         => 'menu_order',
            'order'           => 'ASC',
            'suppress_filters' => false,
        );
        $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
                setup_postdata( $post )
        ?>

    <a class="relative flex flex-col items-center justify-center w-[320px] h-[300px] overflow-hidden group"
        href="<?php the_permalink(); ?>">
        <img class="absolute inset-0 h-full w-full transform transition-all duration-500 ease-in-out group-hover:scale-125"
            src="<?php echo get_the_post_thumbnail_url($post, 'medium'); ?>" alt="">
        <div
            class="absolute inset-0 bg-primary bg-opacity-50 z-1 h-full w-full transform transition-all duration-500 ease-in-out group-hover:bg-opacity-75">
        </div>

        <h3 class="max-w-[90%] text-center text-[30px] text-white sen-bold uppercase  z-10">
            <?php the_title(); ?></h3>

        <div class="gtx-btn flex items-center z-10">
            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center"><?php echo __('learn more', 'brace-starter-theme') ?></span>
        </div>


        <!-- </div> -->
    </a>
    <?php
                endforeach;
                wp_reset_postdata(); 
            ?>



</div>