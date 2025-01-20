<?php get_header(); ?>

<div id="defaultTabContent" class="text-center py-8 mt-12">
    <div class="flex inline-flex bg-home rounded-lg">
        <div class="p-3 leading-normal h-auto max-w-full mt-5">
            <img class=" object-cover" src="<?php echo get_template_directory_uri(); ?>/images/Icon_container.png">
        </div>
        <div class="flex justify-center text-4xl p-3 leading-normal  ">
            <span class="font-bold text-secondary dark:text-white text-5xl sm:3xl leading-loose"><span
                    class="text-primary">Unlock</span> Your Creative Potential </span>
        </div>
    </div>
    <div id="defaultTabContent" class="text-center">
        <div class=" p-2 rounded-lg md:p-8 " id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-3 text-3xl font-bold tracking-wide text-gray-900 font-sans dark:text-white">with Online
                Design and Development Courses.</h2>
            <div class="mb-3 text-secondary ">Learn from Industry Experts and Enhance Your Skills.
            </div>
        </div>
        <div class="inline-flex ms-auto rounded-md gap-3 shadow-sm" role="group ">
        <?php $menu_items = wp_get_nav_menu_items("explore-courses");  ?>
       
       <?php foreach ($menu_items as $menu_item) { ?>
        <a href="<?php echo $menu_item->url  ?>" class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">
        <?php echo $menu_item->title; ?></a>
           <?php  } ?>
        </div>
    </div>
</div>

<div class="flex justify-center py-12  flex-wrap ">
    <div class="container flex justify-between bg-home h-32 px-4 rounded-lg">
        <div class=" px-8 pr-5 pt-12   pb-0 bg-transparent dark:border-gray-700 ">
            <div class="flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/zapier.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/spotify.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/zoom.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/adobe.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/notion.png">
            </div>
        </div>

        <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
            <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/netflix.png">
            </div>
        </div>
    </div>
</div>
</div>


<div class="flex justify-center py-4  flex-wrap ">
    <div class="container inline-flex  h-50 px-4 rounded-lg">
        <video class="h-large w-full rounded-lg" controls>
            <source src="<?php echo get_template_directory_uri();?>/images/container.svg" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="flex justify-center py-4  flex-wrap ">
    <div class="container inline-flex  h-50 px-4 rounded-lg pt-8">
        <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-3 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Benefits</h2>
            <p class="text-gray-500 text-base text-carbon_30 tracking-loose font-lg w-auto h-20 leading-7 w-50 m-2">
                Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu
                sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
        </div>
        <div class="flex inlne-flex pt-12 pl-20 pr-0 p-4 ">
            <button type="button" class="bg-home text-secondary font-medium rounded-lg text-sm w-24 min-h-0 ">Views
                All</button>
        </div>
    </div>
</div>
<div class="flex justify-center py-4  flex-wrap ">
    <div class="container justify-center p-4  h-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-3  gap-4">
            <?php   $benefits = array('post_type' => 'benefits','numberposts'=>-1);
                        $course_benefits = get_posts($benefits);
                        
                        $i = 0;
                        $zero = 0;
                        foreach( $course_benefits as $post){ 
                            $i++;
                            ?>
            <div class="flex">
                <div class="rounded-lg bg-txt_color" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="block p-2  text-right">
                        <h2
                            class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                            <?php
                                if($i >= 10) {echo $i;} else {echo $zero.$i;} 
                                ?>
                        </h2>
                    </div>
                    <div class="block mt-6">
                        <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0 ">
                            <?php echo $post->post_title; ?></h6>
                    </div>
                    <div class="block p-2 p-0 pl-8 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">

                        <?php echo $post->post_content; ?>
                    </div>
                    <div class="block p-2">
                        <div class="text-right  mb-5">
                            <button type="button"
                                class=" mr-4 text-primary justify-right  bg-medwhite border-2 border-wit_gray_95  font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">

                                <i class="material-symbols-outlined font-xl ">north_east</i>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>
</div>


<!-- end of benifits section  -->
<div class="flex justify-center flex-wrap ">
    <div class="container inline-flex  h-50 px-4 rounded-lg ">
        <div class="flex">
            <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="container pl-4 ">
                    <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">Our Courses
                    </h2>
                </div>
                <div class="flex pl-4">
                    <p class="block text-carbon_30 font-normal leading-7 tracking-tight h-20 ">Lorem ipsum dolor
                        sit amet consectetur.
                        Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum
                        eget habitasse in velit fringilla feugiat senectus in.</p>
                </div>
            </div>
            <div class="flex rounded-lg  ml-44  md:flex-row md:max-w-xl" id="about" role="tabpanel"
                aria-labelledby="about-tab">

                <div class="flex">
                    <div class="flex inline-flex pt-8 pl-12 text-center ">
                        <span
                            class="bg-home text-secondary font-medium rounded-lg text-sm w-32 h-12 pt-3 align-text-bottom">
                            <a href="<?php echo //get_post_type_archive_link( 'courses' );
                                    get_post_type_archive_link('courses'); ?>">
                                 Views
                                All</a></span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div>
   </div>

<div class="flex justify-center p-12  flex-wrap ">
    <div class="container justify-center h-auto w-full">

        <div class="grid grid-cols-1 lg:grid-cols-2  gap-4 ">
            <?php   
                    $course_params = array('post_type' => 'courses', 'numberposts' => -1);
                    $courses = get_posts($course_params);
                    foreach($courses as $course) { 
                ?>
            <div class=" md:w-ful bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                <?php   
                                $featured_img_url = get_the_post_thumbnail_url($course->ID);
                            ?>
                <div>
                    <img class="rounded-t-lg" src="<?php echo $featured_img_url ;?>" alt="" />
                </div>
                <div class="flex mt-4 gap-4 ">
                    <?php 
                                    
                                    $course_terms = get_the_terms($course->ID, 'course-tags');
                                    if($course_terms) {
                                        foreach($course_terms as $course_term) {
                                ?>
                    <div
                        class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">
                        <a href="#">
                            <?php echo $course_term->name; ?>
                        </a>
                    </div>
                    <?php
                                       }
                                }
                                
                                $course_terms = get_the_terms($course->ID, 'course-instructor');
                                if($course_terms) { ?>
                    <div
                        class="inline-flex text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ml-44">
                        <?php
                                           foreach($course_terms as $course_term) {
                                           echo  "By ".$course_term->name;        

                                                } ?></div>
                    <?php } ?>


                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl leading-8 font-sans font-bold tracking-wide text-secondary">

                        <?php echo $course->post_title; ?>
                    </h5>
                    <p class="mb-3 font-normal text-black_30 dark:text-gray-400">
                        <?php echo $course->post_content; ?>.</p>
                </div>

                <div
                    class="inline-flex w-full justify-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg">
                    <a href="<?php echo the_permalink($course->ID); ?>">Get it Now
                    </a>
                </div>

            </div>

            <?php } ?>
        </div>




    </div>
</div>



<!-- end of the cources -->
<div class="flex justify-center flex-wrap m-12">
    <div class="container inline-flex  px-4 rounded-lg ">
        <div class="flex">
            <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="container ">
                    <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">Our
                        Testimonials
                    </h2>
                </div>
                <div class="flex">
                    <p class="block pt-6 text-base text-carbon_30 leading-7 tracking-wide  ">Lorem ipsum dolor
                        sit
                        amet consectetur. Tempus tincidunt etiam enormalget elit id imperdiet et. Cras eu sit
                        dignissim
                        lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
                </div>
            </div>
            <div class="flex rounded-lg  ml-44  md:flex-row md:max-w-xl" id="about" role="tabpanel"
                aria-labelledby="about-tab">
                <div class="flex"><button type="button"
                        class="bg-txt_color lg:mt-16 text-secondary font-medium rounded-lg text-sm md:w-24 w-24 h-14">Views
                        All</button>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="flex justify-center p-12  flex-wrap ">
    <div class="container justify-center h-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2  gap-4">
            <?php 
                
               $testimonial_params = array('post_type' => 'testimonial');
                $testimonial_posts = get_posts($testimonial_params);
                 foreach($testimonial_posts  as $testimonial){ ?>
                        <div class="flex bg-home pl-8 pt-8 pr-8  ">
                            <div class="block m-6 ">
                                <div class="text-lg font-sans font-normal text-black_30 py-8">
                                    <?php echo $testimonial->post_content;  ?>
                                </div>
                                <div class="container bg-medwhite p-8 pt-8">
                                    <div class="flex lg:pl-10 sm:pl-8  justify-between">
                                        <?php 
                                                            $featured_img_url = get_the_post_thumbnail_url($testimonial->ID);
                                                            ?>
                                        <div class="flex w-50 h-14">
                                            <img class="w-10 h-10 rounded" src="<?php echo  $featured_img_url ;?>"
                                                alt="Default avatar">
                                            <div class="pt-2 pl-4 text-lg text_black_20">
                                                <span><?php echo $testimonial->post_title;  ?></span>
                                            </div>
                                        </div>
                                        <div class="shrink w-20 h-14  "></div>
                                        <div class="flex-none flex-row-reverse w-40 h-14 pt-2">
                                            <span
                                                class="font-bold py-4 px-4  rounded text-center text-sm font-medium text-center text-secondary bg-back_color_home rounded-lg ">Read
                                                Full Story</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- end of testimonials  -->
<div class="flex justify-center  m-12">
    <div class="container inline-flex  px-4 rounded-lg ">
        <div class="flex">
            <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="container ">
                    <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Our Pricing
                    </h2>
                </div>
                <div class="flex">
                    <p class="block pt-6 text-base text-carbon_30 leading-7 tracking-wide  ">Lorem ipsum dolor sit
                        amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et.Cras eu sit dignissim
                        lorem nibh et. Ac cum eget habitasse in velit fringilla feugiatsenectus in.</p>
                </div>
            </div>
            <div class="flex rounded-lg  ml-40 md:block  md:flex-row md:max-w-xl" id="about" role="tabpanel"
                aria-labelledby="about-tab">
                <div class="flex p-2 pl-0">
                    <div class="flex bg-txt_color font-medium rounded-lg text-sm md:w-auto p-2">
                        <button type="button"
                            class="shrink bg-primary text-txt_color font-medium rounded-lg text-sm md:w-32 w-32 h-14 p-4">Monthly</button>
                        <button type="button"
                            class="shrink bg-txt_color  text-secondary font-medium rounded-lg text-sm md:w-32 w-32 h-14 p-4">yearly</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center  m-12">
    <div class="container inline-flex  px-4 rounded-lg ">
        <div class="grid grid-cols-1 md:w-full lg:grid-cols-2  gap-4 bg-txt_color p-16">
            <div class=" md:w-ful bg-medwhite pb-4 pt-8 px-10 rounded-lg ">
                <div class="bg-peach p-3 rounded-lg text-center text-secondary text-lg font-semibold ">
                    Free Plan
                </div>

                <div class="flex mt-4 justify-center ">
                    <span class="text-secondary text-7xl font-semibold font-sans ">$0</span>
                    <h6 class="pt-10 pr-0 pl-o pb-0">/month</h6>
                </div>

                <div class="p-5 mt-8 text-center  bg-txt_color rounded-lg ">
                    <span
                        class="mb-2 text-base leading-8 font-sans font-medium tracking-wide text-secondary dark:text-white">Available
                        Features</span>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Access to selected free courses.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Limited course materials and resources.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Basic community support.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">No certification upon completion..</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Ad-supported platform.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 border-2 border-wit_gray_95 rounded justify-center mt-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Access to selected free courses.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 border-2 border-wit_gray_95 rounded justify-center mt-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Access to selected free courses.</span>
                    </div>

                </div>

                <div
                    class="inline-flex w-full justify-center rounded-b-lg rounder-b-ro px-6 py-4 text-sm font-medium text-center text-txt_color bg-primary">
                    <a href="#">Get it Now</a>
                </div>
            </div>
            <div class=" md:w-ful bg-medwhite pb-4 pt-8 px-10 rounded-lg ">
                <div class="bg-peach p-3 rounded-lg text-center text-secondary text-lg font-semibold ">
                    Pro Plan
                </div>

                <div class="flex mt-4 justify-center ">
                    <span class="text-secondary text-7xl font-semibold font-sans ">$79</span>
                    <h6 class="pt-10 pr-0 pl-o pb-0">/month</h6>
                </div>

                <div class="p-5 mt-8 text-center  bg-txt_color rounded-lg ">
                    <span
                        class="mb-2 text-base leading-8 font-sans font-medium tracking-wide text-secondary dark:text-white">Available
                        Features</span>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Unlimited access to all courses.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">UnLimited course materials and resources.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Priority support from instructors.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Course completion certificates.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 text-normal border-2 border-wit_gray_95 rounded leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Ad-free experience.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Access to exclusive Pro Plan community forums.</span>
                    </div>
                    <div
                        class="flex m-4 bg-white pl-12 border-2 border-wit_gray_95 rounded text-normal leading-8 font-sans text-base tracking-wide text-secondary">
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                            </svg>
                        </button>
                        <span class="block pl-2">Early access to new courses and updates.</span>
                    </div>

                </div>

                <div
                    class="inline-flex w-full justify-center rounded-b-lg rounder-b-ro px-6 py-4 text-sm font-medium text-center text-txt_color bg-primary">
                    <a href="#">Get it Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center  m-12">
    <div class="container inline-flex  px-4 rounded-lg ">
        <div class="grid grid-cols-1 md:w-full lg:grid-cols-2  gap-4 bg-txt_color p-16">
            <div class=" md:w-ful bg-medwhite pb-4 pt-8 px-10 rounded-lg ">
                <div class="flex mt-4 ">
                    <span class="text-secondary sm:max-w-full text-5xl font-semibold font-sans">Frequently<br> Asked
                        Questions</span>
                </div>
                <div class="block w-80 p-4">Still you have any questions? Contact our Team via
                    support@skillbridge.com</div>


                <div
                    class="inline-flex justify-center rounded-lg rounder-b-ro px-6 py-4 text-sm font-medium text-center text-secondary border-2 border-wit_gray_95">
                    <a href="#">See All FAQ’s</a>
                </div>

            </div>
            <div class=" md:w-ful bg-medwhite pb-4 pt-8 px-10 rounded-lg ">
                <div class="p-5 mt-8 text-center  bg-txt_color rounded-lg ">
                    <div
                        class="flex m-4 bg-white justify-between p-4 border-2 border-wit_gray_95 rounded font-medium leading-8 font-sans text-base tracking-wide text-secondary">
                        <span class="block ">Can I enroll in multiple courses at once?</span>
                        <button class="w-8 h-8 bg-check_color justify-center mt-1 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="black_30">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg>
                        </button>

                    </div>
                    <div
                        class="flex m-6 bg-white text-normal leading-7 text-left font-sans font-normal tracking-wide text-secondary">
                        <span class="block"> Absolutely! You can enroll in multiple courses simultaneously and
                            access them at your convenience.
                        </span>
                    </div>
                    <div
                        class="flex w-full justify-between rounded-lg px-2 py-4 text-sm font-medium text-center bg-back_color_home">
                        <a href="#" class="text-black_20">Enrollment Process for Different Courses</a>
                        <button class="p-1 rounded-full w-6 h-6 bg-txt_color justify-center mt-1 p-1 ">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" width="20px" height="20px">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="flex m-4 bg-white justify-between p-4 border-2 border-wit_gray_95 rounded font-medium leading-8 font-sans text-base tracking-wide text-secondary">
                        <span class="block ">What kind of support can I expect from instructors?</span>
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                </path>
                            </svg></button>

                    </div>
                    <div
                        class="flex m-4 bg-white justify-between p-4 border-2 border-wit_gray_95 rounded font-medium leading-8 font-sans text-base tracking-wide text-secondary">
                        <span class="block  w-80 ">Are the courses self-paced or do they have specific start and end
                            dates?</span>
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                </path>
                            </svg> </button>

                    </div>
                    <div
                        class="flex m-4 bg-white justify-between p-4 border-2 border-wit_gray_95 rounded font-medium leading-8 font-sans text-base tracking-wide text-secondary">
                        <span class="block ">Are there any prerequisites for the courses?</span>
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                </path>
                            </svg> </button>

                    </div>
                    <div
                        class="flex m-4 bg-white justify-between p-4 border-2 border-wit_gray_95 rounded font-medium leading-8 font-sans text-base tracking-wide text-secondary">
                        <span class="block ">Can I download the course materials for offline access?</span>
                        <button class="w-6 h-6 bg-check_color justify-center mt-1 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                </path>
                            </svg>
                        </button>

                    </div>


                </div>

                <div
                    class="inline-flex w-full justify-center rounded-b-lg rounder-b-ro px-6 py-4 text-sm font-medium text-center text-txt_color bg-primary">
                    <a href="#">Get it Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>