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
echo $postid;
$fields_groups = acf_get_field_groups(array( 'post_id' => $postid ) );

// Loop through each field group
foreach ($fields_groups as $field_group) {
    // Get the field group ID
    $field_group_id = $field_group['ID'];
    $fields = acf_get_fields($field_group_id);
    echo "<br>".$field_group_id;
  
    
    
}


// $group_fields = get_group_fields('lessons detail h1');

// foreach($group_fields as $field){
//    $label = $field['label'];
//    $value = $field['value'];
//    echo $label."is ".$value;
//    // etc...
// }


} }

 ?>


<?php get_footer(); ?>