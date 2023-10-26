<footer class="bg-light border-t-4 border-accent">

    <!-- Inner Wrapper  -->
    <div class="w-[80%] mx-auto py-20">


        <!-- Top Row  -->
        <div class="flex flex-col xl:flex-row w-full mb-8">

            <!-- Left Col  -->
            <div class="w-full xl:w-1/5 flex justify-center xl:justify-start mb-4 xl:mb-0 order-1">
                <div>
                    <?php 
					// do_action('wpml_add_language_selector'); 
					?>
                </div>
                <div class="flex flex-col items-center">
                    <div class="hidden xl:block mb-2">
                        <p class="text-[12px] gothic-medium uppercase tracking-[1.8px] leading-[14px]">
                            <?php echo __('Follow Us', 'brace-starter-theme') ?></p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/gantrex" target="_blank"><img
                                src="<?php echo get_template_directory_uri(  ) . '/images/linkedin-icon-dark.svg' ?>"
                                alt=""></a>
                        <a href="https://www.youtube.com/channel/UC5q1Dhep2WXUz06_nrogjyg" target="_blank"><img
                                src="<?php echo get_template_directory_uri(  ) . '/images/youtube-icon-dark.svg' ?>"
                                alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Middle Col  -->
            <div class="w-full xl:w-3/5 flex flex-col order-3 xl:order-2">
                <div class="flex flex-col xl:flex-row xl:space-x-8 justify-center mb-4 xl:mb-0">

                    <a class="w-full md:w-auto flex-none"
                        href="<?php echo get_home_url() . '/corporate-information' ?>">
                        <div class="gtx-submit flex items-center justify-center">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('about
                                us', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                    <a class="w-full md:w-auto flex-none" href="<?php  echo get_home_url() . '/find-us' ?>">
                        <div class="gtx-submit flex items-center justify-center">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('find
                                us', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                    <a class="w-full md:w-auto flex-none" href="<?php echo get_post_type_archive_link('products'); ?>">
                        <div class="gtx-submit flex items-center justify-center">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('products', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                    <a class="w-full md:w-auto flex-none" href="<?php echo get_post_type_archive_link('services'); ?>">
                        <div class="gtx-submit flex items-center justify-center">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('services', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                    <a class="w-full md:w-auto flex-none" href="<?php  echo get_home_url() . '/documents' ?>">
                        <div class="gtx-submit flex items-center justify-center">
                            <span
                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center"><?php echo __('downloads', 'brace-starter-theme') ?></span>
                        </div>
                    </a>

                </div>
                <div>
                </div>
            </div>

            <!-- Right Col  -->
            <div
                class="w-full xl:w-1/5 flex justify-center items-center xl:justify-end order-2 xl:order-3 mb-4 xl:mb-0">
                <!-- Search -->
                <img class="w-[15px] h-[15px]"
                    src="<?php echo get_template_directory_uri() . '/images/search-icon-dark.svg' ?>" alt="">
                <form action="<?php echo home_url(); ?>" id="search-form" method="get">
                    <input
                        class="gothic-medium p-2 text-[15px] text-primary uppercase bg-light tracking-[2.25px] text-center"
                        type="text" name="s" id="s" value="search" onblur="if(this.value=='')this.value='search'"
                        onfocus="if(this.value=='search')this.value=''" />
                    <input type="hidden" value="submit" />
                </form>
            </div>

        </div>



        <!-- Bottom Row  -->
        <div class="w-full flex flex-col xl:flex-row">

            <!-- Left Col
            <div
                class="w-full xl:w-2/5 flex flex-col xl:flex-row xl:space-x-4 justify-start items-center xl:items-end order-2 xl:order-1 mb-4 xl:mb-0">
                <a class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px]"
                    href="<?php echo get_permalink(27363); ?> "><?php echo __('Cookie Policy', 'brace-starter-theme') ?></a>
                <a class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px]"
                    href="<?php echo wp_get_attachment_url(35569); ?>"><?php echo __('Privacy Policy', 'brace-starter-theme') ?></a>
                <a class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px]"
                    href="<?php echo get_permalink(12576); ?>"><?php echo __('Terms & Conditions', 'brace-starter-theme') ?></a>
                <a class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px]"
                    href="<?php echo get_permalink(23132); ?>">Impressum</a>
            </div>-->

            <div class="w-full xl:w-2/5 flex flex-col xl:flex-row xl:space-x-4 justify-start items-center xl:items-end order-2 xl:order-1 mb-4 xl:mb-0">
                <?php
                $footer_nav = new BraceNavBuilder('footer');
                $footer_nav->generate();
                ?>
            </div>

            <!-- Middle Col  -->
            <div class="middle-col w-full xl:w-1/5 flex justify-center order-1 xl:order-2 mb-4 xl:mb-0">
                <a href="<?php echo get_home_url() ?>">
                    <img class="max-w-[260px]"
                        src="<?php echo get_template_directory_uri(  ) . '/images/gantrex-logo.svg' ?>" alt="">
                </a>
            </div>

            <!-- Right Col  -->
            <div class="search-col w-full xl:w-2/5 flex justify-center xl:justify-end xl:items-end order-3 mb-4 xl:mb-0">
                <p class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px] text-accent">
                    <?php echo __('website by', 'brace-starter-theme') ?> <a href="https://www.brace.co.uk/"
                        target="_blank">brace creative agency</a></p>
            </div>
        </div>


    </div>

</footer>



</main>
<?php wp_footer(); ?>
</body>

</html>