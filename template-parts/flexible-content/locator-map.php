<?php if (get_row_layout() == 'locator_map') {

?>

<section x-data="{
    openTooltip: 'none',
    activeClass: 'gtx-btn-alt bg-accent border-2 border-accent text-white',
    inactiveClass: 'gtx-btn bg-white border-2 border-secondary'
}" class="pb-20 bg-light">

    <div class="w-full flex justify-center">
        <img class="lg:hidden left-right" src="<?php echo get_template_directory_uri() . '/images/y-scroll-icon.svg' ?>"
            alt="">
    </div>

    <div class="max-w-[80%] mx-auto overflow-x-scroll">


        <div class="w-[1009.673px] relative mx-auto">


            <!-- VANCOUVER  -->
            <div class="absolute top-[345px] left-[125px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'vancouver', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'vancouver'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/canada_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">vancouver</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-2">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">321-1150 Quayside Drive
                        V3M 6E1 Vancouver (British Columbia)
                        Canada</p>
                    <a href="tel:+19056860560" class="gothic-book text-[16px] leading-[20px] text-white">+1 905 686
                        0560</a>
                    <a href="mailto:info.ajax@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.ajax@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- LOS ANGELES  -->
            <div class="absolute top-[400px] left-[135px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'la', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'la'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">


                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-states-of-america_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Los Angeles</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">3674 Sandpiper Way
                        92823 Brea, CA
                        USA</p>
                    <a href="tel:+15592584353" class="gothic-book text-[16px] leading-[20px] text-white">+1 559 258
                        4353</a>
                    <a href="mailto:info.pittsburgh@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.pittsburgh@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- QUERETARO  -->
            <div class="absolute top-[440px] left-[180px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'queretaro', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'queretaro'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/mexico_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Queretaro</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Carretas N° 393 Col. Milenio III
                        Querétaro, Qro
                        México</p>
                    <a href="tel:+524422948125" class="gothic-book text-[16px] leading-[20px] text-white">+52 442 294 81
                        25</a>
                    <a href="mailto:info.latam@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.latam@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- BIRMINGHAM, AL  -->
            <div class="absolute top-[400px] left-[215px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'birmingham al', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'birmingham al'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-states-of-america_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Birmingham</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">7554 Carriage Cove
                        35173 Trussville, AL
                        USA</p>
                    <a href="tel:+14126551400" class="gothic-book text-[16px] leading-[20px] text-white">+1 412 655
                        1400</a>
                    <a href="mailto:info.pittsburgh@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.pittsburgh@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- NORTH CAROLINA  -->
            <div class="absolute top-[395px] left-[230px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'north carolina', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'north carolina'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-states-of-america_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">North Carolina</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">219 Anniston Way
                        28036 North Carolina
                        USA</p>
                    <a href="tel:+1724-531-1912" class="gothic-book text-[16px] leading-[20px] text-white">+1
                        724-531-1912</a>
                    <a href="mailto:info.pittsburgh@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.pittsburgh@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- PITTSBURGH  -->
            <div class="absolute top-[380px] left-[235px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'pittsburgh', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'pittsburgh'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-states-of-america_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Pittsburgh</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">6000 Town Center Blvd., Suite
                        240
                        15317 Canonsburg, PA
                        USA</p>
                    <a href="tel:+14126551400" class="gothic-book text-[16px] leading-[20px] text-white">+1 412 655
                        1400</a>
                    <a href="mailto:info.pittsburgh@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.pittsburgh@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- AJAX, ONTARIO  -->
            <div class="absolute top-[360px] left-[240px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'ajax ontario', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'ajax ontario'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/canada_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Ajax, Ontario</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">12 Barr road
                        L1S 3X9 Ajax (Ontario)
                        Canada</p>
                    <a href="tel:+19056860560" class="gothic-book text-[16px] leading-[20px] text-white">+1 905 686
                        0560</a>
                    <a href="mailto:info.ajax@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.ajax@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- MONTREAL  -->
            <div class="absolute top-[355px] left-[250px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'montreal', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'montreal'" @click.away="openTooltip = 'none'" x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/canada_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Montreal</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">13760 Rue De Montigny
                        H1A 3Z9 Montreal (Quebec)
                        Canada</p>
                    <a href="tel:+19056860560" class="gothic-book text-[16px] leading-[20px] text-white">+1 905 686
                        0560</a>
                    <a href="mailto:info.ajax@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.ajax@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- CURDWORTH  -->
            <div class="absolute top-[330px] left-[455px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'curdworth', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'curdworth'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-kingdom_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Curdworth</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">53 Breeden Drive
                        B76 9HL Curdworth, Sutton Coldfield
                        United Kingdom</p>
                    <a href="tel:+447801224814" class="gothic-book text-[16px] leading-[20px] text-white">+44 7801
                        224814</a>
                    <a href="mailto:info.aachen@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.aachen@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- NIVELLES  -->
            <div class="absolute top-[340px] left-[475px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'nivelles', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'nivelles'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/belgium_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Nivelles</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Rue du commerce 19
                        1400 Nivelles
                        Belgium</p>
                    <a href="tel:+32067888030" class="gothic-book text-[16px] leading-[20px] text-white">+32 (0) 67 88
                        80 30</a>
                    <a href="mailto:info.nivelles@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.nivelles@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- BILBAO  -->
            <div class="absolute top-[368px] left-[452px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'bilbao', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'bilbao'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/spain_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Bilbao</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Pgno. Industrial Izarza, 4N -
                        Apartado de Correos, 1
                        48150 Sondika (Vizcaya)
                        Spain</p>
                    <a href="tel:+34944535084" class="gothic-book text-[16px] leading-[20px] text-white">+34 94 453
                        5084</a>
                    <a href="mailto:info.bilbao@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.bilbao@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>




            <!-- MADRID  -->
            <div class="absolute top-[380px] left-[452px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'madrid', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'madrid'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/spain_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Madrid</h3>
                    </div>

                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Parque Empresarial Neinor
                        Henares, Edificio 11 Nave 13
                        28880 Meco (Madrid)</p>
                    <a href="tel:+34918279980" class="gothic-book text-[16px] leading-[20px] text-white">+34 91 827
                        9980</a>
                    <a href="mailto:info.madrid@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.madrid@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- MOROCCO  -->
            <div class="absolute top-[398px] left-[445px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'morocco', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'morocco'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/morocco_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Morocco</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">P​lace Charles Nicole 17
                        Etage 7 ; N 2
                        Casablanca</p>
                    <a href="mailto:info.nivelles@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.nivelles@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- AACHEN  -->
            <div class="absolute top-[338px] left-[485px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'aachen', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'aachen'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/germany_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Aachen</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Hirzenrott 10
                        D-52076 AACHEN
                        Germany</p>
                    <a href="tel:+490240894540" class="gothic-book text-[16px] leading-[20px] text-white">+49 (0)2408
                        9454 0</a>
                        <a href="mailto:info.aachen@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.aachen@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- ITALY  -->
            <div class="absolute top-[360px] left-[490px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'italy', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'italy'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/italy_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Italy</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Via Borgogna 2
                        I-20122 Milano
                        Italy</p>
                    <a href="tel:+393356082308" class="gothic-book text-[16px] leading-[20px] text-white">+39 (0)33 5608
                        2308</a>
                    <a href="mailto:info.aachen@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.aachen@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- POLAND  -->
            <div class="absolute top-[325px] left-[510px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'poland', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'poland'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute top-10 left-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -top-[19px] left-0 rotate-180"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/poland_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Poland</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">ul. Kaczewska 24
                        PL 81-476 Gdynia
                        Poland</p>
                    <a href="tel:+48606399255" class="gothic-book text-[16px] leading-[20px] text-white">+48 606 399
                        255</a>
                    <a href="mailto:info.aachen@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.aachen@gantrex.com</a>
                        
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- SANTIAGO  -->
            <div class="absolute top-[610px] left-[260px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'santiago', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'santiago'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-79 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] left-0 rotate-145 scale-x-[-1]"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/chile_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Santigao</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Ñuñoa
                        Santiago
                        Chile</p>
                    <a href="tel:+5628995400" class="gothic-book text-[16px] leading-[20px] text-white">+56 2 899
                        5400</a>
                    <a href="mailto:info.latam@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.latam@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- RIO DE JANEIRO  -->
            <div class="absolute top-[575px] left-[340px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'rio de janeiro', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'rio de janeiro'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/brazil_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Rio De Janeiro</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">22793-230 Barra da Tijuca
                        Rio de Janeiro
                        Brasil</p>
                    <a href="tel:+5521981134040" class="gothic-book text-[16px] leading-[20px] text-white">+55 21 98 113
                        4040</a>
                    <a href="mailto:info.latam@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.latam@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- DUBAI  -->
            <div class="absolute top-[430px] left-[615px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'dubai', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'dubai'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/united-arab-emirates_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Dubai</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Pinnacle Building - Office 513
                        Al Barsha 1
                        U.A.E</p>
                    <a href="tel:+97145655210" class="gothic-book text-[16px] leading-[20px] text-white">+971 (0)4 565
                        5210</a>
                    <a href="mailto:info.dubai@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.dubai@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- MUMBAI  -->
            <div class="absolute top-[445px] left-[665px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'mumbai', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'mumbai'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/india_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Mumbai</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Nerul East
                        Navi Mumbai – 400 706
                        Maharashtra</p>
                    <a href="tel:+917596099913" class="gothic-book text-[16px] leading-[20px] text-white">+91 75960
                        99913</a>
                    <a href="mailto:info.kolkata@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.kolkata@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- CHENNAI  -->
            <div class="absolute top-[465px] left-[685px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'chennai', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'chennai'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/india_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Chennai</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Shiridhi Sri Sai Nivas, 83/9,
                        Chithirai Street,
                        Chinmaya Nagar, Stage II,Virgambakkam,
                        Chennai – 600 092, Tamil Nadu</p>
                    <div class="flex flex-col">
                    <a href="tel:+917596099905" class="gothic-book text-[16px] leading-[20px] text-white">+91 75960
                        99905</a>
                    <a href="tel:+914447600668" class="gothic-book text-[16px] leading-[20px] text-white">+91 44 4760
                        0668</a>
                    <a href="mailto:info.kolkata@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.kolkata@gantrex.com</a>
                    </div>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>




            <!-- KOLKATA  -->
            <div class="absolute top-[438px] left-[705px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'kolkata', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'kolkata'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/india_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Kolkata</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">166B Shyama Prasad Mukherjee
                        Road
                        4D, Marlin Links Building, 4th Floor
                        Kolkata - 700 026, INDIA</p>
                    <div class="flex flex-col">
                        <a href="tel:+9103340006918" class="gothic-book text-[16px] leading-[20px] text-white">+91 (0)33
                            4000 6918</a>
                        <a href="tel:+916292217164" class="gothic-book text-[16px] leading-[20px] text-white">+91 62922
                            17164</a>
                        <a href="mailto:info.kolkata@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.kolkata@gantrex.com</a>
                    </div>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- MALAYSIA  -->
            <div class="absolute top-[480px] left-[735px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'malaysia', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'malaysia'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/malaysia_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Malaysia</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">NO.11 JALAN SILC 2/19, KAWASAN
                        PERINDUSTRIAN SILC, 79200 ISKANDAR PUTERI, JOHOR, MALAYSIAA</p>
                    <a href="tel:+6075103620" class="gothic-book text-[16px] leading-[20px] text-white">+607 5103620</a>
                    <a href="mailto:info.malaysia@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.malaysia@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- SINGAPORE  -->
            <div class="absolute top-[495px] left-[742px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'singapore', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'singapore'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/singapore_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Singapore</h3>
                    </div>

                    <h3 class="sen-bold text-[20px] text-white uppercase mb-2"></h3>
                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">71 Bukit Batok Crescent 
                        #06-06 Prestige Centre 
                        658071 Singapore
                    </p>
                    <a href="tel:+6567645033" class="gothic-book text-[16px] leading-[20px] text-white">+65 6764
                        5033</a>
                    <a href="mailto:info.singapore@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.singapore@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- JAKARTA  -->
            <div class="absolute top-[525px] left-[755px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'jakarta', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'jakarta'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/singapore_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Jakarta</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">71 Bukit Batok Crescent 
                        #06-06 Prestige Centre 
                        658071 Singapore</p>
                    <a href="tel:+6281291810023" class="gothic-book text-[16px] leading-[20px] text-white">+62 812
                        91810023</a>
                    <a href="mailto:info.jakarta@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.jakarta@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- BEIJING  -->
            <div class="absolute top-[380px] left-[780px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'beijing', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'beijing'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/china_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Beijing</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">BLK 10-11, No 10 Jingsheng
                        Middle Street
                        101102 Tongzhou Beijing
                        China</p>
                    <a href="tel:+861080897669" class="gothic-book text-[16px] leading-[20px] text-white">+86 (0)10 8089
                        7669</a>
                    <a href="mailto:info.shanghai@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.shanghai@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- SHANGHAI  -->
            <div class="absolute top-[410px] left-[795px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'shanghai', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'shanghai'" @click.away="openTooltip = 'none'"
                    x-transition.duration.500ms class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/china_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Shanghai</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Room 19F Huadu Mansion, No. 838
                        Zhangyang Road, Pudong New Area
                        200122 Shanghai
                        China</p>
                    <a href="tel:+862150586605" class="gothic-book text-[16px] leading-[20px] text-white">+86 (0)21 5058
                        6605</a>
                    <a href="mailto:info.shanghai@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.shanghai@gantrex.com</a>
                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- SEOUL  -->
            <div class="absolute top-[390px] left-[812px]">
                <!-- Location Spot  -->
                <div @click="setTimeout(() => openTooltip = 'seoul', 500)"
                    class="absolute top-0 left-0 w-[15px] h-[15px] rounded-full bg-accent cursor-pointer border-2 border-white  hover:animate-ping transition-all duration-500 ease-in-out">
                </div>

                <!-- Tooltip  -->
                <div x-show="openTooltip === 'seoul'" @click.away="openTooltip = 'none'" x-transition.duration.500ms
                    class="absolute bottom-6 -right-2 w-[300px] bg-accent p-4 z-20">

                    <!-- Pointer  -->
                    <img class="absolute -bottom-[19px] right-0 rotate-125"
                        src="<?php echo get_template_directory_uri() . '/images/tool-pointer.svg' ?>" alt="">

                    <div class="flex space-x-2 mb-2">
                        <img class="w-[30px] h-[30px] border-4 border-white rounded-full"
                            src="<?php echo get_template_directory_uri() . '/images/flags/south-korea_flag-png-round-small.png' ?>"
                            alt="">
                        <h3 class="sen-bold text-[20px] text-white uppercase mb-2">Seoul</h3>
                    </div>

                    <p class="gothic-medium text-[14px] uppercase tracking-[2.1px] leading-[14px] text-white mb-4">sales
                        office</p>
                    <p class="gothic-medium text-[16px] leading-[20px] text-white mb-2">Room 706, 310, Teheran-ro,
                        Gangnam-g
                        06211 Seoul
                        Republic of Korea</p>
                    <a href="tel:+8225611767" class="gothic-book text-[16px] leading-[20px] text-white">+82 2 561
                        1767</a>
                    <a href="mailto:info.seoul@gantrex.com" class="gothic-book text-[16px] leading-[20px] text-white">info.seoul@gantrex.com</a>

                    <a class="inline-block mt-4" href="/contact">
                        <div class="gtx-btn-alt">
                            <span class="sen-bold uppercase text-white tracking-widest text-base flex items-center">send
                                enquiry</span>
                        </div>
                    </a>
                </div>
            </div>


            <img src="<?php echo get_template_directory_uri() . '/images/map.svg' ?>" alt="">


        </div>


    </div>



</section>


<?php } ?>