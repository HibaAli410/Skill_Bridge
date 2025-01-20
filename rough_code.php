echo get_permalink();
$url = get_permalink();
$postid = url_to_postid( $url );
echo "This is post URL ID".$postid;



<?php 
            $url = get_permalink();
            //echo $url;
            $postid = url_to_postid( $url );
            
                                    
                                    $course_terms = get_the_terms( $postid , 'course-tags');
                                    if($course_terms) {
                                        foreach($course_terms as $course_term) {
                                ?>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">
                   <?php $course_term->name; ?></span>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">
                    <?php $course_term->name; ?></span>
                    <?php
                                       }
                                } ?>

if( have_rows('heading_1') ){

while( have_rows('heading_1') ){
    the_row();

$lesson_1 = get_sub_field('lesson_1');
$lesson_2 = get_sub_field('lesson_2');
$lesson_3  = get_sub_field('lesson_3');
echo $lesson_1;
echo $lesson_2;
echo $lesson_3;
// var_dump($lesson_1);
// var_dump($lesson_2);
// var_dump($lesson_3);

}}

?>

<?php  for($i = 1; $i<=5; $i++){ ?>
             <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">0<?php echo $i ; ?></span>
                    <span class="flex text-lg font-medium text-black_20 m-2 "><?php 
                    if($i===1){
                        the_field('heading_1') ;
                        }
                        elseif($i===2){the_field('heading_2') ;} 
                        elseif($i===3){the_field('heading_3') ;} 
                        elseif($i===4) {the_field('heading_4') ;}
                        elseif($i===5){the_field('heading_5') ; }?></span>
                </div>
                <?php } ?>
                explore-courses