<?php
// Add appropriate page ID's in order to show gantrex ports logo

$pagePortsID = get_field('port_page_id','option');
$postPortsID = get_field('port_post_page_id','option');

$homeURL = get_home_url();
$portsURL = get_home_url() . '/industries/ports-intermodal';

$enabledPagesArray = explode(', ', $pagePortsID);
$enabledPostsArray = explode(', ', $postPortsID);

if (is_page($enabledPagesArray)) {
    $logo = get_template_directory_uri() . '/images/gantrex-ports-logo.svg';
    $redirectUrl = $portsURL;
} elseif (is_single($enabledPostsArray))  { 
    $logo = get_template_directory_uri() . '/images/gantrex-ports-logo.svg';
    $redirectUrl = $portsURL;
} else {
    $logo = get_template_directory_uri() . '/images/gantrex-logo.svg';
    $redirectUrl = $homeURL;
}

?>
<!-- Mobile Nav  -->
<div
    class="mobile-menu overflow-hidden 2xl:hidden fixed top-[30px] md:top-[30px] bg-secondary h-0 w-full z-30 transition-all duration-500 ease-in-out">
    <div
        class="w-full h-[600px] mt-[150px] mb-[150px] mx-auto overflow-y-scroll scrollbar-hide flex flex-col justify-start">

        <div
            class="mobile-nav w-full h-auto flex flex-col items-center text-white text-center uppercase sen-bold text-[25px]">
            <a href="<?php echo get_home_url() ?>"><img class="mb-4"
                    src="<?php echo get_template_directory_uri() . '/images/home-icon.svg' ?>" alt=""></a>
            <?php
            $desktop_nav = new BraceNavBuilder('mobile');
            $desktop_nav->generate();
            ?>

        </div>

        <div class="flex flex-col items-center">
            <p class="text-white uppercase gothic-medium text-[14px] tracking-[1.8px] leading-[14px] mb-2">
                <?php echo __('Follow Us', 'brace-starter-theme') ?></p>
            <div class="flex items-center justify-center space-x-6">
                <a href="https://www.youtube.com/channel/UC5q1Dhep2WXUz06_nrogjyg" target="_blank"><img
                        src="<?php echo get_template_directory_uri(  ) . '/images/youtube-icon-white.svg' ?>"
                        alt=""></a>
                <a href="https://www.linkedin.com/company/gantrex" target="_blank"><img
                        src="<?php echo get_template_directory_uri(  ) . '/images/linkedin-icon-white.svg' ?>"
                        alt=""></a>
                <a href="https://twitter.com/gantrexgroup" target="_blank"><img
                        src="<?php echo get_template_directory_uri(  ) . '/images/twitter-icon-white.svg' ?>"
                        alt=""></a>
            </div>
        </div>

    </div>
</div>

<header class="<?php echo (is_front_page()) ? 'fixed' : 'sticky' ?> top-0 w-full z-30">
    <!-- Top Bar  -->
    <div class="top-bar bg-primary w-full z-30">
        <div class="w-[90%] h-full flex items-center justify-between mx-auto">
            <div class="hidden md:flex items-center space-x-6">
                <p class="gothic-medium text-[15px] tracking-[2.25px] uppercase text-white">
                    <?php echo __('Follow us', 'brace-starter-theme') ?></p>
                <a href="https://www.linkedin.com/company/gantrex" target="_blank"><img
                        src="<?php echo get_template_directory_uri() . '/images/linkedin.svg' ?>" alt=""></a>
                <a href="https://twitter.com/gantrexgroup" target="_blank"><img
                        src="<?php echo get_template_directory_uri() . '/images/twitter.svg' ?>" alt=""></a>
                <a href="https://www.youtube.com/channel/UC5q1Dhep2WXUz06_nrogjyg" target="_blank"><img
                        src="<?php echo get_template_directory_uri() . '/images/youtube.svg' ?>" alt=""></a>
            </div>
            <div class="w-full md:w-auto flex justify-between md:space-x-4">
                <!-- Language  -->
                <div class="flex items-center">
                    <select name="lang_choice_1" id="lang_choice_1" class="pll-switcher-select">
                        <?php

                        $raw_pll = pll_the_languages( array('raw' => true));

                        $flag_emoji = '';

                        foreach ($raw_pll as $pll) :

                            if($pll['slug'] == 'en' ) {
                                $flag_emoji = '🇺🇸';
                            } elseif ($pll['slug'] == 'es') {
                                $flag_emoji = '🇪🇸';
                            } elseif ($pll['slug'] == 'de') {
                                $flag_emoji = '🇩🇪';
                            } elseif ($pll['slug'] == 'zh-hans') {
                                $flag_emoji = '🇨🇳';
                            } elseif ($pll['slug'] == 'fr') {
                                $flag_emoji = '🇫🇷';
                            }

                            ?>
                            <option value="<?php echo $pll['url'] ?>" lang="<?php echo $pll['locale'] ?>" <?php echo $pll['current_lang'] ? 'selected="selected"' : '' ?>>
                                <?php echo $flag_emoji ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Search -->
                <div class="flex items-center space-x-2 mr-auto">
                    <img class="w-[15px] h-[15px]"
                        src="<?php echo get_template_directory_uri() . '/images/search-icon-light.svg' ?>" alt="">
                    <form action="<?php echo home_url(); ?>" id="search-form" method="get">
                        <input
                            class="gothic-medium px-2 py-1 text-[15px] text-white uppercase bg-primary tracking-[2.25px]"
                            type="text" name="s" id="s" value="search" onblur="if(this.value=='')this.value='search'"
                            onfocus="if(this.value=='search')this.value=''" />
                        <input type="hidden" value="submit" />
                    </form>
                </div>

                <div class="flex justify-center items-center">
                    <a class="hidden lg:block text-white gtx-btn-alt uppercase text-sm xl:text-lg text-center mx-auto bg-accent px-4" href="<?php the_permalink_polylang(204); ?>">
                        <span class="sen font-bold flex items-center justify-center">
                            <?php echo __('find us', 'brace-starter-theme') ?>
                        </span>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a class="block text-white gtx-login-btn uppercase text-sm xl:text-lg text-center mx-auto" href="https://my.gantrex.com/">
                        <span class="sen font-bold flex items-center justify-center">
                            My Gantrex
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div> 
    <!-- Main Nav  -->  
    <div class="w-full flex <?php echo (is_front_page()) ? 'justify-end' : 'justify-between' ?> items-end">
        <div class="new-navbar <?php echo (is_front_page()) ? 'lg:min-w-[90%] xl:mt-10 xl:p-0' : 'min-w-full' ?> flex justify-between items-center p-2">
            <div class="flex items-center justify-center">
                <a href="<?php echo $redirectUrl; ?>">
                    <img class="logo h-[50px] lg:h-[100px] transition-all duration-500 ease-in-out"
                        src="<?php echo $logo ?>" alt="">
                </a>
            </div>
            <div
                class="desktop-menu hidden xl:flex desk-nav justify-end items-center <?php echo (is_front_page()) ? 'text-white' : 'text-primary' ?> uppercase sen-bold h-full pr-8">

                <?php
                $desktop_nav = new BraceNavBuilder('desktop');
                $desktop_nav->generate();
                ?>
            </div>

            <div
                class="burger h-[40px] w-[50px] p-[10px] xl:hidden flex flex-col items-end justify-between group hover:rotate-90 cursor-pointer transition-all duration-500 ease-in-out">
                <div
                    class="hamburger-line w-[30px] h-[2px] bg-primary <?php // echo (is_front_page()) ? '' : 'bg-primary' ?> transition-all duration-500 ease-in-out group-hover:transform group-hover:origin-right group-hover:rotate-45 group-hover:w-[12.5px] group-hover:translate-y-[9px]">
                </div>
                <div
                    class="hamburger-line w-[30px] h-[2px] bg-primary <?php // echo (is_front_page()) ? '' : 'bg-primary' ?> transition-all duration-500 ease-in-out">
                </div>
                <div
                    class="hamburger-line w-[30px] h-[2px] bg-primary <?php // echo (is_front_page()) ? '' : 'bg-primary' ?> transition-all duration-500 ease-in-out group-hover:transform group-hover:origin-right group-hover:-rotate-45 group-hover:w-[12.5px] group-hover:-translate-y-[9px]">
                </div>
            </div>
        </div>
    </div>

</header>