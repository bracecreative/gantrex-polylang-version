<footer class="bg-light border-t-4 border-accent">

    <!-- Inner Wrapper  -->
    <div class="w-[80%] mx-auto py-20">


        <!-- Top Row  -->
        <div class="flex flex-col xl:flex-row w-full mb-8 items-center justify-between">

            <!-- Left Col  -->
            <div class="w-full xl:w-1/5 flex justify-center xl:justify-start mb-4 xl:mb-0">
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


            <!-- Right Col  -->
            <div
                class="w-full sm:w-1/2 xl:w-1/3 flex justify-center items-center xl:justify-end mb-4 xl:mb-0">
                <!-- Search -->
                <img class="w-[15px] h-[15px] mr-2"
                    src="<?php echo get_template_directory_uri() . '/images/search-icon-dark.svg' ?>" alt="">
                <form action="<?php echo home_url(); ?>" id="search-form" method="get" class="w-full">
                    <input
                        class="border-2 border-brand-dark w-full gothic-medium p-2 text-[15px] text-primary uppercase bg-light tracking-[2.25px] text-center"
                        type="text" name="s" id="s" value="search" onblur="if(this.value=='')this.value='search'"
                        onfocus="if(this.value=='search')this.value=''" />
                    <input type="hidden" value="submit" />
                </form>
            </div>

        </div>

        <div class="w-full mb-8">
            <!--                <div class="flex flex-col xl:flex-row xl:space-x-8 justify-center mb-4 xl:mb-0">-->

            <?php
            $footer_main = new BraceNavBuilder('footer-main', 'footer-main', 'flex flex-col xl:flex-row xl:space-x-8 justify-center mb-4 xl:mb-0');
            $footer_main->generate();
            ?>

            <!--                    <a class="w-full md:w-auto flex-none"-->
            <!--                        href="--><?php //echo get_home_url() . '/corporate-information' ?><!--">-->
            <!--                        <div class="gtx-submit flex items-center justify-center">-->
            <!--                            <span-->
            <!--                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center">--><?php //echo __('about
            //                                us', 'brace-starter-theme') ?><!--</span>-->
            <!--                        </div>-->
            <!--                    </a>-->
            <!---->
            <!--                    <a class="w-full md:w-auto flex-none" href="--><?php // echo get_home_url() . '/find-us' ?><!--">-->
            <!--                        <div class="gtx-submit flex items-center justify-center">-->
            <!--                            <span-->
            <!--                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center">--><?php //echo __('find
            //                                us', 'brace-starter-theme') ?><!--</span>-->
            <!--                        </div>-->
            <!--                    </a>-->
            <!---->
            <!--                    <a class="w-full md:w-auto flex-none" href="--><?php //echo get_post_type_archive_link('products'); ?><!--">-->
            <!--                        <div class="gtx-submit flex items-center justify-center">-->
            <!--                            <span-->
            <!--                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center">--><?php //echo __('products', 'brace-starter-theme') ?><!--</span>-->
            <!--                        </div>-->
            <!--                    </a>-->
            <!---->
            <!--                    <a class="w-full md:w-auto flex-none" href="--><?php //echo get_post_type_archive_link('services'); ?><!--">-->
            <!--                        <div class="gtx-submit flex items-center justify-center">-->
            <!--                            <span-->
            <!--                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center">--><?php //echo __('services', 'brace-starter-theme') ?><!--</span>-->
            <!--                        </div>-->
            <!--                    </a>-->
            <!---->
            <!--                    <a class="w-full md:w-auto flex-none" href="--><?php // echo get_home_url() . '/documents' ?><!--">-->
            <!--                        <div class="gtx-submit flex items-center justify-center">-->
            <!--                            <span-->
            <!--                                class="sen uppercase font-bold tracking-widest text-base text-primary flex items-center">--><?php //echo __('downloads', 'brace-starter-theme') ?><!--</span>-->
            <!--                        </div>-->
            <!--                    </a>-->

            <!--                </div>-->

        </div>



        <!-- Bottom Row  -->
        <div class="w-full flex flex-col xl:flex-row">

            <!-- Left Col-->
            <div class="middle-col w-full flex justify-center xl:justify-start mb-4 xl:mb-0">
                <a href="<?php echo get_home_url() ?>">
                    <img class="max-w-[260px]"
                         src="<?php echo get_template_directory_uri(  ) . '/images/gantrex-logo.svg' ?>" alt="">
                </a>
            </div>

            <!-- Right Col  -->
            <div class="w-full flex flex-col justify-center xl:justify-end xl:items-end mb-4 xl:mb-0">
                <p class="text-[12px] uppercase gothic-medium tracking-[1.8px] leading-[14px] text-accent text-center">
                    <?php echo __('website by', 'brace-starter-theme') ?> <a href="https://www.brace.co.uk/"
                        target="_blank">brace creative agency</a>
                </p>

                <div class="w-full flex flex-col xl:flex-row xl:space-x-4 justify-end items-center xl:items-end mb-4 xl:mb-0">
                    <?php
                    $footer_nav = new BraceNavBuilder('footer');
                    $footer_nav->generate();
                    ?>
                </div>
            </div>
        </div>


    </div>

</footer>



</main>
<?php wp_footer(); ?>
</body>

</html>