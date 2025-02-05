<?php get_header(); ?>
<?php

 $url = get_permalink();
 $postid = url_to_postid( $url );
// $i = 0;
// $zero = 0;
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
<?php 
// $f = get_sub_field('lesson_number');
// echo $f;
// var_dump($f);
$col = "culumone";
 $field = acf_get_field("$col");
var_dump($field);
$images = get_field('culumone'); // Get the repeater field
if( have_rows('culumone') ): // Loop through the repeater field
    while( have_rows('culumone') ): the_row();
        $image = get_sub_field('lesson_name'); // Get the subfield value
        echo $image;
    endwhile;
endif;


$post = get_page_by_title('lessons detail h2', 'OBJECT', 'acf-field-group');

if ($post) {
    $field_group_id = $post->ID;
    $sub_fields = acf_get_fields($field_group_id);
  //var_dump($sub_fields);
                    foreach ($sub_fields as $sub_field) 
                    {

                        if ($sub_field['type'] == 'group') 
                            {
                                $sub_group_id = $sub_field['ID'];
                                $sub_group_name = $sub_field['name'];
                                echo "<br>".$sub_group_id;
                                echo $sub_group_name."<br>";
                                $col =  $sub_group_name;
                               
                                $hhh = acf_get_field("$sub_group_name");
                               //var_dump($hhh); //print_r($hhh);
                               foreach($hhh as $key=>$values){
                                            //var_dump($values);
                                        if( have_rows($values) ): 
                                            while( have_rows($values) ): the_row(); 
                                           
                                           echo "<br> helloW";        
                                                    
                                            endwhile;
                                        endif; 
                                    }

                                    }
                                }
                   
                        }




       
    //     $culums = array('culumone', 'culumtwo', 'culumthree');
    //     foreach($culums as $key){
    //        $culums =  acf_get_field($key);
    //        //var_dump($fields);
        
         
    //     foreach($culums as $key=>$values){
           
    //         if( have_rows($values) ): 
    //             while( have_rows($values) ): the_row(); 

    //                     $fields = array('lesson_number','lesson_name','lesson_duration');
                        
    //                     foreach($fields as $detail){
    //                         $show = get_sub_field("$detail");
    //                        // var_dump($show);
    //                         echo "<br>".$show ;
    //                     }
                        
               
    //             endwhile;
    //         endif; 
    //     }
    // }
   

    }}

 ?>


<?php get_footer(); ?>