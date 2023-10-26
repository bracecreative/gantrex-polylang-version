<section 
x-data="{
    openTab: 1,
    activeClass: 'gtx-btn-alt bg-accent text-white',
    inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}" 
class="bg-light pt-0 lg:py-40 flex flex-col items-center justify-center">

    <div class="w-full lg:max-w-[1364px] flex flex-col items-center lg:items-stretch lg:flex-row bg-primary lg:bg-transparent">
        <div class="w-[90%] lg:w-1/2 flex flex-col lg:flex-row">
            <div class="w-full lg:w-2/5 flex flex-col items-center lg:items-start py-10 lg:py-0 space-y-2">

                    <div @click="openTab = 1" :class="openTab === 1 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">product type 1</span>
                    </div>

                    <div @click="openTab = 2" :class="openTab === 2 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">product type 2</span>
                    </div>

                    <div @click="openTab = 3" :class="openTab === 3 ? activeClass : inactiveClass" class="w-full lg:w-full border-2 border-accent px-6 py-2 flex items-center justify-center hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-2 cursor-pointer">
                        <span class="sen uppercase font-bold tracking-widest text-base flex items-center">product type 3</span>
                    </div>
                    
            </div>
            <div class="w-full lg:w-3/5 z-10 flex justify-center lg:block">
                <img class="w-full object-cover object-center h-[400px] md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 1" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/smiling-man.jpg' ?>" alt="">
                <img class="w-full object-cover object-center h-[400px] md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 2" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/placeholder-1.jpg' ?>" alt="">
                <img class="w-full object-cover object-center h-[400px] md:h-[600px] lg:w-full lg:h-full" x-show="openTab === 3" class="w-full h-full object-cover object-center transition-all duration-500 ease-in-out" src="<?php echo get_template_directory_uri() . '/images/placeholder-2.jpg' ?>" alt="">
            </div>
        </div>
        <div class="w-full lg:w-1/2 bg-primary p-10 flex justify-center items-center">

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 1">
                    <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 1 product name</h4>
                    <p class="body-text text-white mb-6 text-center lg:text-left">Intro text – 50 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris mauris, facilisis non tempus id, molestie quis nunc. Vestibulum facilisis a elit ac placerat. Vivamus interdum nisi non lectus venenatis pharetra a sit amet mi. Fusce elementum a ex at dapibus. Praesent semper vehicula eros, a.</p>
                    <select class="gtx-select cursor-pointer w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-4" name="select language" id="">
                        <option value="">Select language</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                    </select>

                    <select class="gtx-select cursor-pointer w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-6" name="select language" id="">
                        <option value="">Select datasheet</option>
                        <option value="english">option</option>
                        <option value="spanish">option</option>
                    </select>

                    <a class="inline-block" href="!#">
                        <div class="gtx-btn-download">
                            <span class="sen uppercase text-white font-bold tracking-widest text-base flex items-center">download</span>
                        </div>
                    </a>
            </div>

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 2">
            <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 2 product name</h4>
                    <p class="body-text text-white mb-6 text-center lg:text-left">Intro text – 50 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris mauris, facilisis non tempus id, molestie quis nunc. Vestibulum facilisis a elit ac placerat. Vivamus interdum nisi non lectus venenatis pharetra a sit amet mi. Fusce elementum a ex at dapibus. Praesent semper vehicula eros, a.</p>
                    <select class="gtx-select w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-4" name="select language" id="">
                        <option value="">Select language</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                    </select>

                    <select class="gtx-select w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-6" name="select language" id="">
                        <option value="">Select datasheet</option>
                        <option value="english">option</option>
                        <option value="spanish">option</option>
                    </select>

                    <a class="inline-block" href="!#">
                        <div class="gtx-btn-download">
                            <span class="sen uppercase text-white font-bold tracking-widest text-base flex items-center">download</span>
                        </div>
                    </a>
            </div>

            <div class="tab-contents flex flex-col items-center lg:items-start" x-show="openTab === 3">
            <h4 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6">Tab 3 product name</h4>
                    <p class="body-text text-white mb-6 text-center lg:text-left">Intro text – 50 words. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris mauris, facilisis non tempus id, molestie quis nunc. Vestibulum facilisis a elit ac placerat. Vivamus interdum nisi non lectus venenatis pharetra a sit amet mi. Fusce elementum a ex at dapibus. Praesent semper vehicula eros, a.</p>
                    <select class="gtx-select w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-4" name="select language" id="">
                        <option value="">Select language</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                    </select>

                    <select class="gtx-select w-full border-2 border-accent h-[61px] px-6 bg-primary text-white uppercase gothic-medium tracking-widest focus:outline-none mb-6" name="select language" id="">
                        <option value="">Select datasheet</option>
                        <option value="english">option</option>
                        <option value="spanish">option</option>
                    </select>

                    <a class="inline-block" href="!#">
                        <div class="gtx-btn-download">
                            <span class="sen uppercase text-white font-bold tracking-widest text-base flex items-center">download</span>
                        </div>
                    </a>  
            </div>

        </div>
    </div>
</section>