<?php //Template Name: sign up ?>
<?php get_header(); ?>

<div class="flex justify-center  flex-wrap ">
    <div class="container justify-center h-auto w-full ">
        <div class="grid grid-cols-1 lg:grid-cols-2  gap-4 p-4 back_color_home">
            <div class="flex mt-4">
                <div class="Block p-6 back_color_home mt-16">
                    <h2 class="font-semibold text-3xl">Students Testimonials</h2>
                    <p class="pt-4 pr-4 pb-4 pl-0">
                        Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et.
                        Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus
                        in.
                    </p>
                    <div class="flex w-full">
                        <div class="grid grid-cols-1 gap-4">
                            <div class="p-8">
                                <div class="block  ">
                                    <div
                                        class="text-lg font-sans font-normal rounded text-black_30 lg:pt-4 sm:pt-4  lg:pl-10  sm:pl-8  bg-home ">
                                        <p class="p-4">
                                            The web design course provided a solid foundation for me. The instructors
                                            were knowledgeable and supportive,
                                            and the interactive learning environment was engaging. I highly recommend
                                            it!
                                        </p>
                                    </div>
                                    <div class="bg-medwhite p-8 pt-8 ">
                                        <div class="flex lg:pl-10 sm:pl-8  justify-between">

                                            <div class="flex w-50 h-14">
                                                <img class="w-10 h-10 rounded"
                                                    src="<?php echo get_template_directory_uri() ;?>/images/mach"
                                                    alt="Default avatar">
                                                <div class="pt-2 pl-4 text-lg text_black_20">
                                                    <span>Sarah L</span>
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
                                    <div class="flex justify-end mt-4 pr-5 ">
                                        <button
                                            class="w-10 h-auto m-2 p-2 bg-txt_color  rounded border-1 border-wit_gray_95">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                transform="rotate(0)">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z"
                                                        fill="#000000">

                                                    </path>
                                                </g>
                                            </svg></button>
                                        <button
                                            class="w-10 h-auto m-2 p-2  bg-txt_color rounded border-1 border-wit_gray_95">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="flex justify-left m-2 p-8">
                <div class="container bg-home pt-4">
                    <div class="Block bg-home rounded-lg">

                        <div class="text-4xl font-semibold text-center">Sign Up </div>
                        <div class="text-sm mt-4 text-carbon_30 text-center">Create an account to unlock exclusive
                            features.</div>
                    </div>
                    <?php $form = '[form id="signup_form" action="abc.php"]';
                    echo do_shortcode($form); ?>
                    <div class="block m-4 p-4">
                        <span>Full Name</span>
                        <?php $fname = '[custom_textfield type="text" label="Enter First Name" class="mt-2 border-1 border-wit_gray_95 bg-medwhite w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="fname" placeholder="Enter Your Name"]';
                 ?>
                        <span class="block-inline "><?php echo do_shortcode($fname); ?></span>
                    </div>
                    <div class="block m-4 pt-0 pl-4 pb-4 pr-4">
                        <span>Email</span>
                        <?php $email = '[custom_textfield type="email" label="Enter Your Email" class="mt-2  border-1 border-wit_gray_95 bg-medwhite w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="email" placeholder="Enter your Email"]';
                   ?>
                        <span class="block-inline "><?php echo do_shortcode($email); ?></span>
                    </div>
                    <div class="block m-4 pt-0 pl-4 pb-4 pr-4">
                        <span>Password</span>
                        <?php $password = '[custom_textfield type="password" class="mt-2  border-1 border-wit_gray_95 bg-medwhite w-full p-2 hover:border-wit_gray_95 h-10 rounded" name="password" placeholder="Enter your Password"]';
                   ?>
                        <span class="block-inline "><?php echo do_shortcode($password); ?></span>
                    </div>
                    <div class="block m-4 pt-0 pl-4 pb-4 pr-4">

                        <?php $Check = '[custom_textfield type="checkbox" class="mt-2 w-4 h-4 border-1 border-wit_gray_95 bg-medwhite w-full hover:border-wit_gray_95  rounded" name="done" ]';
                   ?>
                        <span class="inline-block "><?php echo do_shortcode($Check); ?></span>
                        <span>I agree with Terms of Use and Privacy Policy</span>
                    </div>

                    <div class="block m-4 mt-0 pt-0 pl-4 pb-4 pr-4 justify-center">
                        <?php $button = '[submit_button type="submit" text = "Sign Up" class=" h-12 border-1 w-full bg-primary text-me text-home font-medium text-center rounded-lg" name ="sign_up" ]';
                   ?>
                        <span><?php echo do_shortcode($button); ?></span>

                    </div>
                    <div class="flex m-4 pt-0 pl-4 pb-4 pr-4 ">
                        <div class="flex-auto w-49 border-1 border-b-2 border-wit_gray_95"></div>
                        <div>OR</div>
                        <div class="flex-auto w-49 border-1 border-b-2 border-wit_gray_95"> </div>
                    </div>
                    <div class="block m-4 pt-0 pl-4 pb-4 pr-4 ">
                        <?php $google_button = '[submit_button type="submit" text = "Sign Up With Google" class="text-secondary h-12 border-1 w-full bg-back_color_home text-me text-home font-medium text-center rounded-lg" name ="google_button" ]';
                   ?>
                        <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                viewBox="0 0 48 48">
                                <path fill="#fbc02d"
                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                                <path fill="#e53935"
                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                </path>
                                <path fill="#4caf50"
                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                </path>
                                <path fill="#1565c0"
                                    d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                            </svg>
                        </span>
                        <span><?php echo do_shortcode($google_button); ?></span>

                    </div>
                    <div class="block m-4 pt-0 pl-4 pb-4 pr-4  text-center" >
                        <span>Already have an account? <u>Login</u></span><span> <i class="material-symbols-outlined font-sm">north_east</i></span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<?php get_footer(); ?>