

<footer>

<div class="container max-w-full px-4 rounded-lg justify-between bg-txt_color mt-6 ">
    <div class="grid grid-cols-1 md:w-full lg:grid-cols-2  bg-txt_color pt-4 pl-8 pb-0 pr-8  ">
        <div class=" md:w-ful pb-4 pt-8 px-10 m-4 rounded-lg border-b-2 ">
            <div class="flex  ">
                <a href="<?php site_url();  ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <?php  the_custom_logo(); ?>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
            </div>
            <div class="block w-80 p-4"></div>
            <?php
                     $contact_params = array('post_type' => 'contact');
                     $contacts = get_posts($contact_params);
                    // var_dump($contacts);
                     foreach($contacts as $contact){
                        $featured_img_url = get_the_post_thumbnail_url($contact->ID);
                        ?>

            <div class="flex text-sm pb-4">
                <!-- <a href="#">See All FAQ’s</a> -->
                <img src="<?php echo $featured_img_url ;?>" alt="" width="20" height="20" />
                <span class="pl-2"> <?php echo $contact->post_content; ?> </span>
            </div>
            <?php } ?>
        </div>
        <div
            class=" md:w-ful grid grid-cols-1 md:w-full  pb-4 pt-8 px-10 m-4 lg:grid-cols-3 bg-txt_color rounded-lg border-b-2">
            <div class="text-center  ">
                <div
                    class="flex  bg-white p-4 font-bold leading-8 font-sans text-base tracking-wide text-secondary">
                    <span class="block ">Home</span>
                    <?php $menu_items = wp_get_nav_menu_items("footer home menu"); ?>
                </div>
                <div
                    class="flex bg-white text-normal leading-7 text-left font-sans font-normal tracking-wide text-secondary">
                    <ul>
                        <?php    foreach($menu_items as $item){ ?>
                        <li class="flex">
                            <?php echo $item->title; ?>

                            <!-- Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.
                                 -->
                        </li>
                        <?php  } ?>
                    </ul>
                </div>
            </div>
            <div class=" md:w-ful rounded-lg ">
                <div class="text-center  ">
                    <div
                        class="flex  bg-white p-4 font-bold leading-8 font-sans text-base tracking-wide text-secondary">
                        <?php $menu_items = wp_get_nav_menu_items("About Us");
                    $page = get_page_by_title( 'About Us' );
                    ?>
                        <span class="block "><?php echo get_the_title($page->ID); ?></span>
                    </div>
                    <div
                        class="flex bg-white text-normal leading-7 text-left font-sans font-normal tracking-wide text-secondary">
                        <ul>
                            <?php foreach($menu_items as $item){ ?>
                            <li class="flex">
                                <?php echo $item->title ;  ?>

                                <!-- Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.
                                 -->
                            </li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=" md:w-ful rounded-lg ">
                <div class="text-center ">
                    <div
                        class="flex  bg-white p-4 font-bold leading-8 font-sans text-base tracking-wide text-secondary">
                        <?php
                     $profile_params = array('post_type' => 'social-profile', 'numberposts' => -1);
                    $social_profiles = get_posts($profile_params);
                    
                    ?>
                        <span class="block ">Social Profiles</span>
                    </div>

                    <div
                        class="flex gap-2 bg-white text-normal leading-7 text-left font-sans font-normal tracking-wide text-secondary">
                        <?php
                        foreach($social_profiles as $social_profile){ 
                            ?>
                        <span class="w-10 h-10 bg-back_color_home border-1 border-wit_gray_95">
                            <?php $featured_img_url = get_the_post_thumbnail_url($social_profile->ID); ?>
                            <img class="w-6 h-6 rounded m-auto mt-2 " src="<?php echo  $featured_img_url ;?>"
                                alt="Default avatar">
                        </span>
                        <?php }
                     ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="grid grid-cols-1 md:w-full bg-txt_color lg:grid-cols-1 justify-center mb-4">

    <div class="h-10 bg-txt_color text-center">
        <div class="bg-orange h-10"><span>
                © 2023 Skillbridge. All rights reserved.
            </span>

        </div>
    </div>
</div>
</div>


</footer>


</body>

</html>