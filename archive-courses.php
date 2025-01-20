<?php get_header(); ?>
<div class="flex justify-center ">
    <div class="container inline-flex  rounded-lg mt-24 ">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="md:w-full text-5xl font-semibold ">
                Online Courses on Design and Development
            </div>
            <div class="text-4xl">
                <p class="text-sm text-gray_black  ">
                    Online Courses on Design and DevelopmentWelcome to our online course page, where you can enhance
                    your skills in design and development. Choose from our carefully curated selection of 10 courses
                    designed to provide you with comprehensive knowledge and practical experience. Explore the courses
                    below and find the perfect fit for your learning journey.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
$url = get_permalink();
//echo $url;
$postid = url_to_postid( $url );
//echo "This is post URL ID".$postid;
if (have_posts()) {
    while (have_posts()) {
        the_post();

    ?>
<div class="flex justify-center pb-10">
    <div class="container rounded-lg bg-txt_color ">
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <div class="text-xl font-semibold">
                    <?php the_title(); ?>
                </div>
                <div class="text-sm mt-4">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="flex lg:justify-end sm:mt-12 justify-start">
                <div class="text-base">
                <?php $url = get_permalink(); 
                         ?>
                    <span class="w-20 h-10 bg-medwhite border-2 border-wit_gray_95 m-2 p-4 rounded">
                        <a href="<?php the_permalink()  ; ?>">View Course  </a>
                    </span>
                </div>
            </div>
            <div class="flex  gap-2 mt-12 w-full">

                <img src="<?php echo get_template_directory_uri(); ?>/images/course_images/wdf1.png ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/course_images/wdf2.png ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/course_images/wdf3.png ?>">

            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <?php 
                                    $url = get_permalink();
                                    $postid = url_to_postid( $url );
                                    $course_terms = get_the_terms($postid, 'course-tags');
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
                                } ?>
            </div>
            <?php 
                  $url = get_permalink();
                  $postid = url_to_postid( $url );
                $course_terms = get_the_terms($postid , 'course-instructor');
                if($course_terms) { ?>
            <div
                class="flex lg:justify-end justify-start text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ">
                <span> <?php
                                           foreach($course_terms as $course_term) {
                                           echo  "By ".$course_term->name;        

                                                } ?></span>
            </div>
            <?php }
            ?>

        </div>
        <div class="inline-flex w-full">
            <div
                class="inline-flex border border-t-1 border-r-1 border-l-1 border-b-0 border-wit_gray_95 rounded-t-lg w-full ml-10 mr-10">
                <span class="font-semibold text-xl m-6">Curriculum</span>
            </div>
        </div>

        <div class="w-full mb-10">
            <div
                class="grid grid-cols-1 lg:grid-cols-5  border border-1 border-wit_gray_95 rounded-b-lg ml-10 mr-10 mb-10">
                <?php  for($i = 1; $i<=5; $i++){ ?>
             <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">0<?php echo $i ; ?></span>
                    <span class="flex text-lg font-medium text-black_20 m-2 "><?php
                     
                    if($i===1){
                        the_field('heading_1') ;
                        }
                        elseif($i===2){the_field('heading_2') ;} 
                        elseif($i===3){the_field('heading_3') ;} 
                        elseif($i===4){the_field('heading_4') ;}
                        elseif($i===5){the_field('heading_5') ; }
                        elseif($i===6){the_field('heading_6') ; }
                        elseif($i===7){the_field('heading_7') ; }
                        elseif($i===8){the_field('heading_8') ; }?>
                        </span>
                </div>
                <?php } ?>
               
            </div>
            
        </div>



    </div>
</div>
<?php
}
}
?>

<?php get_footer(); ?>
