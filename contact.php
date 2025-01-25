<?php //Template Name: Contact US?>
<?php get_header(); ?>
<div class="flex justify-center mt-16">
    <div class="container inline-flex  rounded-lg">
        <div class="grid grid-cols-1 lg:grid-cols-2 ">
            <div class="md:w-full text-5xl font-semibold align-baseline mt-8">
                <?php the_title(); ?>
            </div>
            <div class="text-sm text-gray_black ">

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</div>
<div class="flex justify-center mt-24">
    <div class="container  bg-txt_color ">
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 w-full">
            <div class="block w-full justify-center">
                <?php
                
                
                $fname = '[custom_textfield type="text" label="Enter First Name" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="fname" placeholder="Enter First name"]';
                $lname = '[custom_textfield type="text" label="Enter Last Name" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="lname" placeholder="Enter Last name"]';
                $email = '[custom_textfield type="email" label="Enter Your Email" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="email" placeholder="Enter your Email"]';
                $phone = '[custom_textfield type="number" label="Enter Phone Number" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="phone" placeholder="Enter Phone Number"]';
                $subject = '[custom_textfield type="text" label="Enter Phone Number" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="subject" placeholder="Enter Your Subject"]';
                $message = '[custom_textfield type="massage" label="Enter Phone Number" class="border-1 border-wit_gray_95 bg-wit_gray_95 w-full p-2 hover:border-wit_gray_95 h-40 rounded" name="massage" placeholder="Enter your Massage Here"]';
                $submit_button = '[submit_button   class="button-primary border-1 text-center border-primary bg-primary h-10 rounded justify-center w-40 align-center text-home" name="submit" text="Send Your Massage" ]';
                $contant = [$fname,$lname,$email,$phone,$subject,$message,$submit_button];
                $form = '[form id="contact_form" action="abc.php"]';
                    echo do_shortcode($form);
                 ?>
                <div class="grid lg:grid-cols-2 grid-cols-1 w-full pt-10  gap-4 justify-end pl-10">
                    <div class="block">
                        <span class="block text-base font-semibold">First Name </span>
                        <span class="block pt-2"><?php echo do_shortcode($fname); ?></span>
                    </div>
                    <div class="block">
                        <span class="block text-base font-semibold">Last Name </span>
                        <span class="block pt-2"><?php echo do_shortcode($lname); ?></span>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1  w-full pt-5  gap-4 justify-end pl-10">
                    <div class="block">
                        <span class="block text-base font-semibold">Email </span>
                        <span class="block pt-2"><?php echo do_shortcode($email); ?></span>
                    </div>
                    <div class="block">
                        <span class="block text-base font-semibold">Phone Number</span>
                        <span class="block pt-2"><?php echo do_shortcode($phone); ?></span>
                    </div>
                </div>
                <div class="grid lg:grid-cols-1  w-full pt-5  gap-4 justify-end pl-10">
                    <div class="block">
                        <span class="block text-base font-semibold">Subject </span>
                        <span class="block pt-2"><?php echo do_shortcode($subject); ?></span>
                    </div>
                </div>
                <div class="grid lg:grid-cols-1  w-full pt-5  gap-4 justify-end pl-10">
                    <div class="block">
                        <span class="block text-base font-semibold">Message </span>
                        <span class="block pt-2"><?php echo do_shortcode($message); ?></span>
                    </div>
                </div>
                <div class="grid lg:grid-cols-1  w-full pt-5  gap-4 justify-end pl-10">
                    <div class="block">

                        <span
                            class="block pt-2 w-full  p-2 hover:border-wit_gray_95 text-center "><?php echo do_shortcode($submit_button); ?></span>
                    </div>
                </div>
                </form>
                <!-- <?php //echo do_shortcode([form]); ?> -->
            </div>
            <div class="flex w-full text-secondary justify-center ">

                <?php
                   $contact_params = array('post_type' => 'contact');
                   $contacts = get_posts($contact_params);
                    
                    ?>
                <div class=" border-l-2 border-wit_gray_95 p-10 mt-6 ">
                    <?php
                       foreach($contacts as $contact){
                        $featured_img_url = get_the_post_thumbnail_url($contact->ID);
                        ?>
                    <div class="grid lg:grid-cols-1 bg-medwhite p-6 border-2 border-wit_gray_95 mb-8 rounded-lg justify-items-center">
                        <div>

                            <img src="<?php echo $featured_img_url ;?>" alt="" width="20" height="20" />
                        </div>
                        <div>

                            <h4><?php echo $contact->post_content; ?> </h4>
                        </div>
                    </div>
                    <?php } ?>
                    <?php
                     $profile_params = array('post_type' => 'social-profile', 'numberposts' => -1);
                    $social_profiles = get_posts($profile_params);
                    
                    ?>
                    <div class="grid lg:grid-cols-1 bg-medwhite p-6 border-2 border-wit_gray_95 mb-8 rounded-lg ">

                        <div class=" flex w-full justify-items-center">
                            <?php
                                    foreach($social_profiles as $social_profile)
                                    { 
                                        $featured_img_url = get_the_post_thumbnail_url($social_profile->ID); ?>

                            <img src="<?php echo  $featured_img_url; ?> " class="w-6 h-6 rounded m-auto mt-2"
                                alt="Default avatar">


                            <?php } ?>
                        </div>
                        <div>


                            <h4> Social Profiles</h4>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<div class="mt-24"></div>

<?php get_footer(); ?>