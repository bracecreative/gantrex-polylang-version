<div class="hero bg-light">
<div class="back-to-archive sen-bold py-[20px]">
    <a href="<?php echo esc_url( get_post_type_archive_link('post')) ; ?>" class="flex pr-[30px] items-center justify-center font-bold text-primary absolute top-[90px] left-[200px] border-2 border-accent max-w-[275px] m-auto p-3 uppercase"><svg class="scale-75 rotate-180" xmlns="http://www.w3.org/2000/svg" width="30.237" height="35" viewBox="0 0 30.237 35"><g transform="translate(-4907.763 143)"><path d="M49.5,35a17.45,17.45,0,0,1-12.737-5.5h2.153a16,16,0,0,0,21.9-23.314,15.971,15.971,0,0,0-21.9-.687H36.763A17.5,17.5,0,1,1,49.5,35Z" transform="translate(4871 -143)" fill="#e96500"/><g transform="translate(4890.311 -1111.861)"><path d="M36.2,985.886,32.392,981.6a.714.714,0,1,0-1.064.952l2.753,3.1H24.714a.714.714,0,1,0,0,1.428h9.367l-2.753,3.1a.731.731,0,0,0,.056,1.015.722.722,0,0,0,1.007-.063l3.809-4.286A.722.722,0,0,0,36.2,985.886Z" transform="translate(0 0)" fill="#3091d9"/></g></g></svg>Back to all news</a>
</div>


    <h1 class="py-[50px] leading-[30px] tracking-[-2px] uppercase text-center m-auto max-w-[500px]  text-primary text-[30px] heading--s"><?php the_title(); ?></h1>
    <div class="extra-info flex flex-row justify-center">
        <div class="single-date mr-[10px] flex items-center">
            <svg class="mr-[10px] scale-75" xmlns="http://www.w3.org/2000/svg" width="40" height="39.903" viewBox="0 0 40 39.903">
                <g id="Group_1902" data-name="Group 1902" transform="translate(-768 -333.097)">
                    <path id="Path_5543" data-name="Path 5543" d="M20,.1A19.951,19.951,0,1,1,0,20,19.917,19.917,0,0,1,20,.1Z" transform="translate(768 333)" fill="#fff"/>
                    <path id="Path_5532" data-name="Path 5532" d="M15,0A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(773 338)" fill="#e96500"/>
                    <path id="noun-calendar-4619829" d="M119.286,36.143H117v-.571a.571.571,0,1,0-1.143,0v.571h-5.714v-.571a.571.571,0,1,0-1.143,0v.571h-2.286A1.714,1.714,0,0,0,105,37.857V49.286A1.714,1.714,0,0,0,106.714,51h12.571A1.714,1.714,0,0,0,121,49.286V37.857a1.714,1.714,0,0,0-1.714-1.714Zm-12.571,1.143H109v.571a.571.571,0,1,0,1.143,0v-.571h5.714v.571a.571.571,0,1,0,1.143,0v-.571h2.286a.571.571,0,0,1,.571.571v2.857H106.143V37.857a.571.571,0,0,1,.571-.571Zm12.571,12.571H106.714a.571.571,0,0,1-.571-.571V41.857h13.714v7.429a.571.571,0,0,1-.571.571Z" transform="translate(675 310)" fill="#fff"/>
                </g>
            </svg>
            <div class="gothic-book"><?php echo get_the_date('Y/m/d'); ?></div>
            
        </div>
        <div class="cat-icon--<?php echo the_category_ID(); ?> gothic-book mr-[10px] flex items-center">
            
            <?php the_category(); ?>
        </div>
    </div>

