<?php if (get_row_layout() == 'timeline') {?>
<section id="timeline" class="bg-light w-full relative">
    <div class="absolute left-2 lg:left-20 top-1/2 z-10 flex items-center">
        <button id="slideLeft" class="group relative bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">

            <div
                class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                <div class="absolute bg-white w-[10px] h-[20px] -right-1 top-1/2 -translate-y-1/2"></div>
            </div>

            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286"
                viewBox="0 0 17.686 14.286">
                <path
                    d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                    transform="translate(-24 -981.362)" fill="#0b2b42" />
            </svg>
        </button>
    </div>

    <div class="absolute right-2 lg:right-20 top-1/2 z-10 flex items-center">
        <button id="slideRight" class="group relative bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-14 h-14 rounded-full shadow focus:outline-none">
            <div
                class="absolute w-10 h-10 rounded-full border-2 border-accent group-hover:-rotate-90 transition-all duration-500 ease-in-out">
                <div class="absolute bg-white w-[10px] h-[20px] -left-1 top-1/2 -translate-y-1/2"></div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="17.686" height="14.286" viewBox="0 0 17.686 14.286">
                <path
                    d="M41.43,987.825,35.989,981.7a1.02,1.02,0,1,0-1.52,1.361l3.932,4.422H25.02a1.02,1.02,0,1,0,0,2.041H38.4l-3.932,4.422a1.045,1.045,0,0,0,.081,1.451,1.032,1.032,0,0,0,1.439-.09l5.442-6.122A1.031,1.031,0,0,0,41.43,987.825Z"
                    transform="translate(-24 -981.362)" fill="#0b2b42" />
            </svg>
        </button>
    </div>

    <div id="track" class="h-full h-[800px] w-[80%] mx-auto py-20 flex px-4 overflow-x-scroll snap-x snap-mandatory scrollbar-hide scroll-smooth">


        <?php

            $layout_switch = true;
            $order_one;
            $order_two;
            $pointer;

            if (have_rows('events')) :

                while (have_rows('events')) : the_row();

                    $date = get_sub_field('date');
                    $description = get_sub_field('description');
                    $layout_switch = !$layout_switch;

                    if ($layout_switch === false) {
                        $order_one = 'order-first';
                        $order_two = 'order-last';
                        $pointer = '-bottom-[19px]';
                    } elseif ($layout_switch = true) {
                        $order_one = 'order-last';
                        $order_two = 'order-first';
                        $pointer = '-top-[19px] rotate-90';
                    }

            ?>

        <!-- Timeline Step -->
        <div class="flex flex-col snap-start w-[360px]">

            <div class="min-h-[170px] <?php echo $order_one ?>">
                <div class="bg-primary flex flex-col max-w-[360px] min-w-[360px] p-4 relative">
                    <h5 class="sen-bold text-[40px] text-accent"><?php echo $date ?></h5>
                    <p class="gothic-medium text-[18px] text-white"><?php echo $description ?></p>
                    <img class="absolute right-0 <?php echo $pointer ?>"
                        src="<?php echo get_template_directory_uri() . '/images/timeline-pointer.png' ?>" alt="">
                </div>
            </div>

            <div class="inline-block w-full h-[124px] bg-repeat-x my-10"
                style="background-image: url(<?php echo get_template_directory_uri() . '/images/timeline-track.png' ?>);">
            </div>

            <div class="min-h-[170px] <?php echo $order_two ?>"></div>

        </div>

        <?php
                endwhile;

            else :

            endif;
            ?>

    </div>

</section>


<?php } ?>