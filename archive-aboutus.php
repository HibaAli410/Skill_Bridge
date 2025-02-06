<?php //Template Name: About Us ?>
<?php get_header(); ?>
<div class="flex justify-center mt-16">
    <div class="container inline-flex rounded-lg ">
        <div class="grid grid-cols-1  lg:grid-cols-2 border-b-2 border-1 border-wit_gray_95">
            <div class="md:w-full text-5xl font-semibold align-baseline mt-8">
                <?php 
                        
                        ?>
                <?php  echo "About Skill Bridge"; ?>
            </div>
            <div class="text-sm text-gray_black ">

                <?php the_content(); ?>

            </div>
        </div>

    </div>
</div>

<div class="flex justify-center mt-24">
    <div class="container inline-flex   rounded-lg">

        <div class="md:w-full  mt-4">
            <span class="text-4xl font-semibold align-baseline">
                <?php  echo "Achievements"; ?>
            </span>
            <p class="text-base font-me align-baseline mt-2">Our commitment to excellence has led us to achieve
                significant milestones along our journey. Here are some of our notable achievements</p>
        </div>
    </div>
</div>

<div class="flex justify-center mt-16">
    <div class="container inline-flex border-b-1 border-1 border-wit_gray_95  rounded-lg">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-6">
            <?php    $about_achievements = array('post_type' => 'aboutus','numberposts'=>-1);
                        $achievements = get_posts($about_achievements);
                        
                        foreach( $achievements  as $achievement){ 
                            
                            ?>
            <div class=" border-1 border-wit_gray_95 bg-txt_color rounded-lg p-8">
                <div class="block">
                    <div>
                        <div class="p-4">
                            <?php $image = get_the_post_thumbnail_url($achievement->ID);
                             ?>
                           <div  class="w-10 h-10 bg-peach border border-1 rounded border-peach_background p-1"> 
                            <img src="<?php echo $image; ?>" alt="" ?></div>
                        </div>
                    </div>
                </div>
                <div class="block mt-4">
                    <span class="text-lg font-semibold align-baseline p-4"><?php echo $achievement->post_title; ?><span>
                </div>
                <div class="block font-sans text-sm font-carbon_30 p-4">
                    <div>
                        <span><?php echo $achievement->post_content ?></span>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>


    </div>
</div>
<div class="flex justify-center mt-24">
    <div class="container inline-flex   rounded-lg">

        <div class="md:w-full  mt-4">
            <span class="text-4xl font-semibold align-baseline">
                <?php  echo "Achievements"; ?>
            </span>
            <p class="text-base font-me align-baseline mt-2">Our commitment to excellence has led us to achieve
                significant milestones along our journey. Here are some of our notable achievements</p>
        </div>
    </div>
</div>

<div class="flex justify-center mt-16">
    <div class="container inline-flex border-b-1 border-1 border-wit_gray_95  rounded-lg">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-6">
                 <?php    $params = array('post_type' => 'aboutus','numberposts'=>-1);
                          $goal_params = get_posts($params);
                        foreach( $goal_params as $goals){ 
                            
                            ?>
            <div class=" border-1 border-wit_gray_95 bg-txt_color rounded-lg p-8">
                <div class="block">
                    <div>
                        <div class="p-4">
                            <?php $image = get_the_post_thumbnail_url($achievement->ID);
                             ?>
                           <div  class="w-10 h-10 bg-peach border border-1 rounded border-peach_background p-1"> 
                            <img src="<?php //echo $image; ?>" alt="" ?></div>
                        </div>
                    </div>
                </div>
                <div class="block mt-4">
                    <?php  ?>
                    <span class="text-lg font-semibold align-baseline p-4"><?php echo $achievement->post_title; ?><span>
                </div>
                <div class="block font-sans text-sm font-carbon_30 p-4">
                    <div>
                        <span><?php echo $achievement->post_content ?></span>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>


    </div>
</div>

<?php get_footer(); ?>