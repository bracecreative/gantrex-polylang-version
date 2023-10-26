

<section class="post-slider-section bg-secondary py-40">

    <div class="max-w-full lg:max-w-[50%] mb-10 mx-auto">
        <h2 class="sen-bold uppercase text-white tracking-tighter text-[35px] text-center"><?php echo __('Explore more from', 'brace-starter-theme') ?> <mark class="bg-accent px-2 text-white">gantrex<mark></h2>
    </div>

<div class="flex justify-center">




    <div class="flex max-w-[1360px] flex-col lg:flex-row gap-4 justify-center w-[80%]">
        
    
        <div class="flex flex-col w-full max-h-[412px] group overflow-hidden transition-all duration-500 cursor-pointer">
            <img class="hidden lg:block transition-height h-1/2 group-hover:h-0 duration-500 ease object-cover" src="<?php echo get_template_directory_uri() . '/images/services.jpeg' ?>" alt="">

            <div class="h-full group-hover:min-h-[100%] transition duration-500 ease-in-out bg-clip-content bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri() . '/images/services.jpeg' ?>);">

                <div class="flex flex-col justify-between items-center h-full w-full bg-light transition-height duration-500 ease-in-out group-hover:bg-opacity-90 group-hover:h-[100%] p-10">
                    <h4 class="heading--xs font-medium text-primary leading-7 mb-2 text-center"><?php echo __('Our Services', 'brace-starter-theme') ?></h4>
                    <a href="<?php echo get_post_type_archive_link('services'); ?>">
                        <div class="gtx-submit block flex items-center">
                            <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="flex flex-col w-full max-h-[412px] group overflow-hidden transition-all duration-500 cursor-pointer">
            <img class="hidden lg:block transition-height h-1/2 group-hover:h-0 duration-500 ease object-cover" src="<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>" alt="">
            
            <div class="relative h-full group-hover:min-h-[100%] transition duration-500 ease-in-out bg-clip-content bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri() . '/images/crane-placeholder.jpg' ?>);">

                <div class="flex flex-col justify-between items-center h-full w-full bg-light transition-height duration-500 ease-in-out group-hover:bg-opacity-90 group-hover:h-[100%] p-10">
                    <h4 class="heading--xs font-medium text-primary leading-7 mb-2 text-center"><?php echo __('Our Industries', 'brace-starter-theme') ?></h4>
                    <a href="<?php echo get_post_type_archive_link('industries'); ?>">
                        <div class="gtx-submit block flex items-center">
                            <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="flex flex-col w-full max-h-[412px] group overflow-hidden transition-all duration-500 cursor-pointer">
            <img class="hidden lg:block transition-height h-1/2 group-hover:h-0 duration-500 ease object-cover" src="<?php echo get_template_directory_uri() . '/images/find_us.jpg' ?>" alt="">
            
            <div class="relative h-full group-hover:min-h-[100%] transition duration-500 ease-in-out bg-clip-content bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri() . '/images/find_us.jpg' ?>);">

                <div class="flex flex-col justify-between items-center h-full w-full bg-light transition-height duration-500 ease-in-out group-hover:bg-opacity-90 group-hover:h-[100%] p-10">
                    <h4 class="heading--xs font-medium text-primary leading-7 mb-2 text-center"><?php echo __('Find Us', 'brace-starter-theme') ?></h4>
                    <a href="<?php echo get_permalink('204'); ?>">
                        <div class="gtx-submit block flex items-center">
                            <span class="sen-bold uppercase text-primary tracking-widest text-base flex items-center"><?php echo __('read more', 'brace-starter-theme') ?></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        

        

    </div>

</div>



<div class="mx-auto max-w-[1364px] flex justify-center pt-20">
    <a href="<?php echo get_post_type_archive_link('post'); ?>">
        <div class="gtx-btn-alt-two border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-accent">
            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo __('read all news', 'brace-starter-theme') ?></span>
        </div>
    </a>
</div>



</section>