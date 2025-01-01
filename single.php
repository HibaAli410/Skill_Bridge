<?php get_header(); ?>
<?php

$url = get_permalink();
$postid = url_to_postid( $url );
$i = 0;
$zero = 0;
if (have_posts()) {
    while (have_posts()) {
        the_post();
 ?>

<div class="flex justify-center ">
    <div class="container inline-flex  rounded-lg mt-24 ">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="md:w-full text-5xl font-semibold ">
                <?php the_title(); ?>
            </div>
            <div class="text-sm text-gray_black ">

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</div>
<div id="defaultTabContent" class="text-center py-8 mt-12">
    <div class="flex inline-flex bg-home rounded-lg">
        <?php   
                                $featured_img_url = get_the_post_thumbnail_url();
                                $curriculum_head = get_post_meta($postid);
                                
                            ?>
        <div class="md:w-ful p-3 leading-normal h-auto lg:max-w-full mt-5">
            <img class=" object-cover" src="<?php echo $featured_img_url ;?> ">
        </div>
    </div>
</div>
<?php } } ?>
<div class="flex justify-center py-4  flex-wrap ">
    <div class="container justify-center p-4  h-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2  gap-4">
            <div class=" bg-txt_color">
                <div class=" rounded-lg bg-txt_color">
                    <div class="block p-2 text-right">
                        <h2
                            class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                            <?php
                                if($i >= 10) {echo $i;} else {echo $zero.$i;} 
                                ?>
                        </h2>
                    </div>
                    <div class="block mt-6">
                        <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-12 pb-0 ">
                            <?php the_field('heading_1') ?></h6>
                    </div>
                    <div class="block p-2 p-0 pl-8 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">

                        <div class="grid grid-cols-1 lg:grid-cols-2 border border-1 border-text-black_20 p-4">

                            <div class="grid grid-cols-1">
                                <div>
                                    Understanding UI/UX Design Principles
                                </div>
                                <div>
                                    Lesson 1
                                </div>
                            </div>
                            <div
                                class="inline-flex text-center px-3 py-2 text-sm font-normal text-right text-carbon_30 justify-start">
                                <div class="bg-txt_color border-2 border-wit_gray_95 rounded-lg px-4 py-2">
                                    45 Minutes
                                </div>
                            </div>

                        </div>
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
            <div class="flex ">
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
                            <?php the_field('heading_2') ?></h6>
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
            <div class="flex ">
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
                            <?php the_field('heading_3') ?></h6>
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
            <div class="flex ">
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
                            <?php the_field('heading_4') ?></h6>
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
            <div class="flex ">
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
                            <?php the_field('heading_5') ?></h6>
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


        </div>
    </div>
</div>


<?php get_footer(); ?>