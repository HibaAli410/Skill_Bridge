<?php get_header(); ?>
<?php

echo get_permalink();
$url = get_permalink();
$postid = url_to_postid( $url );
echo "This is post URL ID".$postid;
if (have_posts()) {
    while (have_posts()) {
        the_post();

        // Display post content
        the_title();
        the_content();

        // Optional: Display post metadata
        the_date();
        the_author();
        the_category();
        the_tags();
       
        

        // Optional: Display comments
        comments_template();
    }
}
?>

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
<div class="flex justify-center mt-10 pb-10">
    <div class="container rounded-lg bg-txt_color mt-24 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <div class="text-xl font-semibold">
                    Web Design Fundamentals
                </div>
                <div class="text-sm mt-4">
                    Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop
                    the
                    skills to create visually appealing and user-friendly websites.
                </div>
            </div>
            <div class="flex lg:justify-end sm:mt-12 justify-start">
                <div class="text-base">

                    <span class="w-20 h-10 bg-medwhite border-2 border-wit_gray_95 m-2 p-4 rounded">
                        View Course
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
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">4
                    weeks</span>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">Advance</span>
            </div>
            <div
                class="flex lg:justify-end justify-start text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ">
                <span>By Course Instructor</span>
            </div>
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
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">01</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to HTML</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">02</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Styling with CSS</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">03</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to Responsive Design</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">04</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Design Principles for Web</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">05</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Building a Basic Website</span>
                </div>
                <!-- <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class=" ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div> -->
            </div>
        </div>

    </div>
</div>
<div class="flex justify-center pb-10">
    <div class="container rounded-lg bg-txt_color ">
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <div class="text-xl font-semibold">
                    Web Design Fundamentals
                </div>
                <div class="text-sm mt-4">
                    Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop
                    the
                    skills to create visually appealing and user-friendly websites.
                </div>
            </div>
            <div class="flex lg:justify-end sm:mt-12 justify-start">
                <div class="text-base">

                    <span class="w-20 h-10 bg-medwhite border-2 border-wit_gray_95 m-2 p-4 rounded">
                        View Course
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
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">4
                    weeks</span>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">Advance</span>
            </div>
            <div
                class="flex lg:justify-end justify-start text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ">
                <span>By Course Instructor</span>
            </div>
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
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">01</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to HTML</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">02</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Styling with CSS</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">03</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to Responsive Design</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">04</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Design Principles for Web</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">05</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Building a Basic Website</span>
                </div>
                <!-- <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class=" ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div> -->
            </div>
        </div>

    </div>
</div>
<div class="flex justify-center pb-10">
    <div class="container rounded-lg bg-txt_color ">
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <div class="text-xl font-semibold">
                    Web Design Fundamentals
                </div>
                <div class="text-sm mt-4">
                    Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop
                    the
                    skills to create visually appealing and user-friendly websites.
                </div>
            </div>
            <div class="flex lg:justify-end sm:mt-12 justify-start">
                <div class="text-base">

                    <span class="w-20 h-10 bg-medwhite border-2 border-wit_gray_95 m-2 p-4 rounded">
                        View Course
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
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">4
                    weeks</span>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">Advance</span>
            </div>
            <div
                class="flex lg:justify-end justify-start text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ">
                <span>By Course Instructor</span>
            </div>
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
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">01</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to HTML</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">02</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Styling with CSS</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">03</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to Responsive Design</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">04</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Design Principles for Web</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">05</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Building a Basic Website</span>
                </div>
                <!-- <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class=" ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div> -->
            </div>
        </div>

    </div>
</div>
<div class="flex justify-center pb-10">
    <div class="container rounded-lg bg-txt_color ">
        <div class="grid grid-cols-1 lg:grid-cols-2 m-10">
            <div>
                <div class="text-xl font-semibold">
                    Web Design Fundamentals
                </div>
                <div class="text-sm mt-4">
                    Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop
                    the
                    skills to create visually appealing and user-friendly websites.
                </div>
            </div>
            <div class="flex lg:justify-end sm:mt-12 justify-start">
                <div class="text-base">

                    <span class="w-20 h-10 bg-medwhite border-2 border-wit_gray_95 m-2 p-4 rounded">
                        View Course
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
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">4
                    weeks</span>
                <span
                    class="inline-flex text-center px-3 py-2 text-sm font-normal text-center text-carbon_30 bg-txt_color border-2 border-wit_gray_95 rounded-lg ">Advance</span>
            </div>
            <div
                class="flex lg:justify-end justify-start text-center font-bold px-3 py-2 font-semibold text-lg text-secondary bg-txt_color rounded-lg ">
                <span>By Course Instructor</span>
            </div>
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
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">01</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to HTML</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">02</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Styling with CSS</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">03</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Introduction to Responsive Design</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">04</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Design Principles for Web</span>
                </div>
                <div class="ml-10 mr-10 mb-8 mt-6 border-r-2 border-wit_gray_95">
                    <span class="font-extrabold text-5xl m-2 text-secondary">05</span>
                    <span class="flex text-lg font-medium text-black_20 m-2 ">Building a Basic Website</span>
                </div>
                <!-- <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class=" ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div>
                <div class="ml-10 mr-10 mb-2">
                    <span class="font-semibold text-xl m-2">Curriculum</span>
                </div> -->
            </div>
        </div>

    </div>
</div>
            <?php get_footer(); ?>