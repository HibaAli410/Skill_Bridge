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
                                var_dump($hhh);
                                
                             }

                       
                    }
                    
                    
                   
            }




       
   
   

    }}

 ?>


<?php get_footer(); ?>