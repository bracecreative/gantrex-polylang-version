<?php

/**
 * @var string $class
 * @var string $name
 * @var string $role
 * @var string $email
 * @var string $telephone
 * @var WP_Post[] $locations
 */

?>
<div class="<?php esc_attr_e($class); ?> bg-secondary p-6 lg:p-10">


    <!-- Top Row  -->
    <div class="flex space-x-4 mb-4">

        <!-- Flag  -->

        <!-- Country / Location  -->
        <div class="flex flex-col">
            <?php if (!empty($locations[0])) : ?>
            <h4 class="sen-bold text-[25px] text-white tracking-[-1.25px] leading-[25px] uppercase">
                <?php echo apply_filters('the_title', $locations[0]->post_title); ?>
            </h4>
            <?php endif; ?>
            <?php if (!empty($locations[1])) : ?>
            <h5 class="sen-bold text-[15px] text-white tracking-[1.125px] leading-[18px] uppercase">
                <?php 
                // echo apply_filters('the_title', $locations[1]->post_title); 
                ?>
            </h5>
            <?php endif; ?>
        </div>
    </div>


    <!-- Member Info  -->

    <div class="flex flex-col">

        <!-- Avatar  -->
        <div>
            <?php if ($image) : ?>
            <img class="w-[65px] lg:w-[100px] h-[65px] lg:h-[100px] rounded-full" src="<?php echo $image['url'] ?>"
                alt="">
            <?php endif ?>
        </div>

        <!-- Details  -->
        <div class="flex flex-col">

            <!-- Role  -->
            <?php if ($role) : ?>
            <p class="gothic-medium uppercase text-[15px] tracking-[2.25px] leading-[14px] text-white lg:mb-2">
                <?php esc_html_e($role); ?></p>
            <?php endif; ?>

            <!-- Contact Details  -->
            <div class="flex flex-col ">
                <?php if ($name) : ?>
                <p class="text-[18px] gothic-medium text-white"><?php esc_html_e($name); ?></p>
                <?php endif; ?>

                <div class="flex flex-col lg:flex-row lg:space-x-4">
                    <?php if ($telephone) : ?>
                    <a class="gothic-book text-[18px] text-white"
                        href="tel:<?php esc_html_e($telephone); ?>"><?php esc_html_e($telephone); ?></a>
                    <?php endif; ?>

                    <span class="hidden lg:block text-accent">&#8226;</span>
                    <?php if ($email) : ?>
                    <a class="gothic-book text-[18px] text-white"
                        href="mailto:<?php esc_html_e($email); ?>"><?php esc_html_e($email); ?></a>
                    <?php endif; ?>
                </div>

            </div>

            <?php

                $bcc_output;

                foreach($email_ccs as $ccs):

                    $bcc_output .= $ccs['email'] . ';';

                endforeach;

            ?>

            <!-- CTA Button  -->
            <a href="mailto:<?php esc_html_e($email); ?>?bcc=marketing@gantrex.com;<?php esc_html_e($bcc_output) ?>" class="gtx-btn-alt-two max-w-max">
                <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo __('send enquiry', 'brace-starter-theme') ?></span>
            </a>

        </div>

    </div>




</div>