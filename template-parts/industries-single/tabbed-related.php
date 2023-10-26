<section 
x-data="{
    openTab: 1,
    activeClass: 'gtx-btn-alt bg-accent text-white',
    inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}" 
class="bg-light pt-0 pb-40 flex flex-col items-center justify-center">

    <div class="w-full lg:max-w-[1364px] flex flex-col items-center lg:items-stretch lg:flex-row bg-primary lg:bg-transparent">
        <div class="w-[90%] lg:w-1/2 flex flex-col lg:flex-row">
            <div class="w-full lg:w-2/5 flex flex-col items-center lg:items-start py-10 lg:py-0 space-y-2">

                    <div @click="openTab = 1" :class="openTab === 1 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">related 1</span>
                    </div>

                    <div @click="openTab = 2" :class="openTab === 2 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">related 2</span>
                    </div>

                    <div @click="openTab = 3" :class="openTab === 3 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">related 3</span>
                    </div>
                    
            </div>
            <div class="w-full lg:w-3/5 z-10 flex justify-center lg:block">
                <img class="w-full object-cover object-center h-full md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 1" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/smiling-man.jpg' ?>" alt="">
                <img class="w-full object-cover object-center h-full md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 2" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/placeholder-1.jpg' ?>" alt="">
                <img class="w-full object-cover object-center h-full md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 3" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/placeholder-2.jpg' ?>" alt="">
            </div>
        </div>
        <div class="w-full lg:w-1/2 bg-primary p-10 flex justify-center items-center">

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 1">
                    <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 1 product name</h4>
                    <div class="body-text prose text-white prose-p:mb-6 text-center lg:text-left"><p>Info Text – 100 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dolor diam, pulvinar sed ex nec, imperdiet porta libero. Maecenas semper turpis lobortis enim auctor, quis lobortis nisi pretium. Integer sed justo tincidunt eros mattis dictum. Nunc sed iaculis urna. Aenean id venenatis velit. Cras quis iaculis magna. Aliquam eget arcu eu urna ultrices laoreet. Aliquam erat volutpat. Cras facilisis sagittis lacinia. Suspendisse mollis turpis vel nisi porta tempor. Praesent ultrices tempor tellus, quis molestie dui mollis vitae. Proin suscipit lorem in ante dictum, eget viverra eros dignissim. Donec placerat auctor metus, eget fermentum ex suscipit ac.</p>
                </div>
            </div>

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 2">
                    <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 1 product name</h4>
                    <div class="body-text prose text-white prose-p:mb-6 text-center lg:text-left"><p>Info Text – 100 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dolor diam, pulvinar sed ex nec, imperdiet porta libero. Maecenas semper turpis lobortis enim auctor, quis lobortis nisi pretium. Integer sed justo tincidunt eros mattis dictum. Nunc sed iaculis urna. Aenean id venenatis velit. Cras quis iaculis magna. Aliquam eget arcu eu urna ultrices laoreet. Aliquam erat volutpat. Cras facilisis sagittis lacinia. Suspendisse mollis turpis vel nisi porta tempor. Praesent ultrices tempor tellus, quis molestie dui mollis vitae. Proin suscipit lorem in ante dictum, eget viverra eros dignissim. Donec placerat auctor metus, eget fermentum ex suscipit ac.</p>
                </div>
            </div>

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 3">
                    <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 1 product name</h4>
                    <div class="body-text prose text-white prose-p:mb-6 text-center lg:text-left"><p>Info Text – 100 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dolor diam, pulvinar sed ex nec, imperdiet porta libero. Maecenas semper turpis lobortis enim auctor, quis lobortis nisi pretium. Integer sed justo tincidunt eros mattis dictum. Nunc sed iaculis urna. Aenean id venenatis velit. Cras quis iaculis magna. Aliquam eget arcu eu urna ultrices laoreet. Aliquam erat volutpat. Cras facilisis sagittis lacinia. Suspendisse mollis turpis vel nisi porta tempor. Praesent ultrices tempor tellus, quis molestie dui mollis vitae. Proin suscipit lorem in ante dictum, eget viverra eros dignissim. Donec placerat auctor metus, eget fermentum ex suscipit ac.</p>
                </div>
            </div>

            

        </div>
    </div>
</section>