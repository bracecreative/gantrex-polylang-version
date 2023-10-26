</div>

<div class="related-services-section bg-white pt-[100px]">
    <h1 class="heading--s tracking-[-1px] uppercase font-bold m-auto text-center text-primary"><?php echo __('Related', 'brace-starter-theme') ?> 
        <span class="tracking-[-1px] uppercase font-bold text-white bg-accent px-[5px]"><?php echo __('Products & Services', 'brace-starter-theme') ?></span>
    </h1>
    <div class="pt-[50px] max-w-[1360px] gap-4 w-[80%] flex-wrap explore-cards py-[100px] pt-[0px] flex m-auto justify-center">
    <?php
    $args = array(
        'post_type'         => 'products',
        'post_status'       => 'publish',
        'posts_per_page'    => 3,
        'orderby'         => 'title',
        'order'           => 'ASC',
    );
    $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
            setup_postdata( $post )
    ?>  
        <a class="relative flex flex-col items-center justify-center w-[438px] h-[300px] overflow-hidden group"
            href="<?php the_permalink(); ?>">
            <!-- <div class="relative flex flex-col items-center justify-center min-w-[31%] w-[300px] h-[300px]"> -->
            <img class="absolute inset-0 h-full w-full transform transition-all duration-500 ease-in-out group-hover:scale-125"
                src="<?php echo get_the_post_thumbnail_url($post, 'medium'); ?>" alt="">
            <div
                class="absolute inset-0 bg-primary bg-opacity-50 z-1 h-full w-full transform transition-all duration-500 ease-in-out group-hover:bg-opacity-75">
            </div>

            <h3 class="max-w-[90%] text-[35px] text-white sen-bold uppercase  z-10">
                <?php the_title(); ?></h3>

            <div class="gtx-btn flex items-center z-10">
                <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
            </div>


            <!-- </div> -->
        </a>
        <?php
            endforeach;
            wp_reset_postdata(); 
        ?>
    </div>

    <div class="click-through-container"></div>
        <div class="click-through flex justify-center max-w-500px">
            <a class="sen-bold tracking-[1px] mr-[30px] text-[12px] mt-[10px] flex justify-center font-bold uppercase" href="<?php echo get_post_type_archive_link( 'products' ); ?>">Explore All Products<span class="relative top-[-9px]"><svg class="scale-75"  xmlns="http://www.w3.org/2000/svg" width="30.237" height="35" viewBox="0 0 30.237 35"><g transform="translate(-4906.763 143)"><path d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z" transform="translate(4870 -143)" fill="#3091d9"/><g transform="translate(4890.311 -1111.861)"><path d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z" transform="translate(0 0)" fill="#e96500"/></g></g></svg></span></a>
            <a class="sen-bold tracking-[1px] text-[12px] mt-[10px] flex justify-center font-bold uppercase" href="<?php echo get_post_type_archive_link( 'services' ); ?>">Explore All Services<span class="relative top-[-9px]"><svg class="scale-75"  xmlns="http://www.w3.org/2000/svg" width="30.237" height="35" viewBox="0 0 30.237 35"><g transform="translate(-4906.763 143)"><path d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z" transform="translate(4870 -143)" fill="#3091d9"/><g transform="translate(4890.311 -1111.861)"><path d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z" transform="translate(0 0)" fill="#e96500"/></g></g></svg></span></a>
        </div>
    </div>

</div>