<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Skill Bridge</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=north_east" />
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                    primary: '#FF9500',
                    wit_gray_95: '#f1f1f3',
                    txt_color: '#ffffff',
                    secondary: '#262626',
                    home: 'white',
                    medwhite: '#FCFCFD',
                    back_color_home: '#f7f7f8',
                    black_20: '#333333',
                    carbon_30: '#59595A',
                    black_30: '$4C4C4D',
                }
            }
        }
    }
    </script>

</head>

<body class="bg-back_color_home">
    <div
        class="px-4 py-3 flex flex-wrap items-center justify-center space-between bg-primary rounded-lg items-center mx-5 mt-4 text-gray-500 text-white align-center">
        Free Courses 🌟 Sale Ends Soon, Get It Now
    </div>
    <nav class="sm:px-4 py-3 justify-items-center bg-transparent border-gray-200 dark:bg-gray-900 sm:w-full">
        <div class="container flex flex-wrap items-center mx-auto">
            <a href="<?php site_url();  ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                <?php  the_custom_logo(); ?>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <?php $menu_items = wp_get_nav_menu_items("header menu"); ?>
                <ul
                    class="font-medium flex flex-col p-4 m-4 md:p-0 mt-4 align-center rounded-lg md:flex-row md:space-x-8 md:dark:bg-gray-900 dark:border-gray-700">
                    <?php $homepage = site_url(); ?>
                    <?php foreach ($menu_items as $menu_item) { ?>
                    <?php if ($menu_item->url == $homepage) { ?>
                    <li class='bg-wit_gray_95 px-8 py-3 rounded-lg '>
                        <?php } else { ?>
                    <li class='px-5 py-3 rounded-lg'>
                        <?php } ?>
                        <a href="<?php echo $menu_item->url; ?>"
                            class='block w-100 h-55 py-2 px-1 text-Xl font-bold font-normal text-secondary md:border-0 rounded md:bg-transparent md:p-0 dark:text-white'>
                            <?php echo $menu_item->title; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="inline-flex ms-auto rounded-md shadow-sm" role="group">
                <button type="button"
                    onclick="window.location.href = '<?php echo get_template_directory_uri(); ?>/rejistration_page.php';"
                    class="px-8 py-3 text-center font-semibold font-large text-xl text-secondary bg-transparent rounded-lg tracking-wide">Sign
                    Up</button>
                <button type="button"
                    onclick="window.location.href = '<?php echo get_template_directory_uri(); ?>/login_page.php';"
                    class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">Login</button>
            </div>
    </nav>
    <!-- end of header -->


    <div id="defaultTabContent" class="text-center py-8 mt-12">
        <div class="flex inline-flex bg-home rounded-lg">
            <div class="p-3 leading-normal h-auto max-w-full mt-5">
                <img class=" object-cover" src="<?php echo get_template_directory_uri(); ?>/images/Icon_container.png">
            </div>
            <div class="flex justify-center text-4xl p-3 leading-normal  ">
                <span class="font-bold text-secondary dark:text-white text-5xl sm:3xl leading-loose"><span
                        class="text-primary">Unlock</span> Your Creative Potential </span>
            </div>
        </div>
        <div id="defaultTabContent" class="text-center">
            <div class=" p-2 rounded-lg md:p-8 " id="about" role="tabpanel" aria-labelledby="about-tab">
                <h2 class="mb-3 text-3xl font-bold tracking-wide text-gray-900 font-sans dark:text-white">with Online
                    Design and Development Courses.</h2>
                <div class="mb-3 text-gray-500 dark:text-gray-400">Learn from Industry Experts and Enhance Your Skills.
                </div>
            </div>
            <div class="inline-flex ms-auto rounded-md shadow-sm" role="group">
                <button type="button" onclick=""
                    class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">Explore
                    Courses</button>
                <button type="button"
                    class="px-8 py-3 text-center font-semibold font-large text-xl text-secondary bg-transparent rounded-lg tracking-wide">View
                    Pricing</button>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-4  flex-wrap ">
        <div class="container flex justify-between bg-home h-32 px-4 rounded-lg">
            <div class=" px-8 pr-5 pt-12   pb-0 bg-transparent dark:border-gray-700 ">
                <div class="flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zapier.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/spotify.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zoom.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/adobe.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/notion.png">
                </div>
            </div>

            <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
                <div class="inline-flex pr-12 border-r-2 border-home-500 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/netflix.png">
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="flex justify-center py-4  flex-wrap ">
        <div class="container inline-flex  h-50 px-4 rounded-lg">
            <video class="h-large w-full rounded-lg" controls>
                <source src="https://docs.material-tailwind.com/demo.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="flex justify-center py-4  flex-wrap ">
        <div class="container inline-flex  h-50 px-4 rounded-lg pt-8">
            <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                <h2 class="mb-3 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Benefits</h2>
                <p class="text-gray-500 text-base text-carbon_30 tracking-loose font-lg w-auto h-20 leading-7 w-50 m-2">
                    Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu
                    sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="flex inlne-flex pt-12 pl-20 pr-0 p-4 ">
                <button type="button" class="bg-home text-secondary font-medium rounded-lg text-sm w-24 min-h-0 ">Views
                    All</button>
            </div>
        </div>
    </div>
    <div class="flex justify-center py-4  flex-wrap ">
        <div class="container justify-center p-4  h-auto w-full">
            <div class="grid grid-rows-2  grid-flow-col gap-2">
                <div class="grid grid-cols-1 lg:grid-cols-3  gap-4">
                    <div class="flex">
                        <div class="rounded-lg bg-txt_color" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="block p-2  text-right">
                                <h2
                                    class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                    01</h2>
                            </div>
                            <div class="block mt-6">
                                <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0 ">Flexible
                                    Learning Schedule</h6>
                            </div>
                            <div class="block p-2">
                                <p class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20 ">
                                    Fit your coursework around your existing commitments and obligations.</p>
                            </div>
                            <div class="block p-2">
                                <div class="text-right  mb-5">
                                    <button type="button"
                                        class=" mr-4  text-white justify-right bg-wit_gray_95  font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 10">
                                            <path stroke="orange" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="block p-2 text-right">
                                <h2
                                    class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                    02</h2>
                            </div>
                            <div class="block mt-6">
                                <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0">Expert
                                    Instruction</h6>
                            </div>
                            <div class="block p-2">
                                <p class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">
                                    Learn from industry experts who have hands-on experience in design and development.
                                </p>
                            </div>
                            <div class="block p-2 ">
                                <div class="text-right mb-5">
                                    <button type="button"
                                        class=" mr-4  text-white justify-right bg-wit_gray_95 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 10">
                                            <path stroke="orange" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="block p-2 text-right">
                                    <h2
                                        class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                        03</h2>
                                </div>
                                <div class="block mt-6">
                                    <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0">
                                        Diverse Course Offerings</h6>
                                </div>
                                <div class="block p-2">
                                    <p
                                        class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">
                                        Explore a wide range of design and development courses covering various topics.
                                    </p>
                                </div>
                                <div class="block p-2">
                                    <div class="text-right mb-5">
                                        <button type="button"
                                            class=" mr-4  text-white justify-right bg-wit_gray_95  font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">

                                            <i class="material-symbols-outlined font-xl ">north_east</i>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3  gap-4">
                    <div>
                        <div class="flex">
                            <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="block p-2 text-right">
                                    <h2
                                        class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                        04</h2>
                                </div>
                                <div class="block mt-6">
                                    <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0">
                                        Updated Curriculum</h6>
                                </div>
                                <div class="block p-2">
                                    <p
                                        class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">
                                        Access courses with up-to-date content reflecting the latest trends and industry
                                        practices..</p>
                                </div>
                                <div class="block p-2">
                                    <div class="text-right mb-5">
                                        <button type="button"
                                            class=" mr-4  text-white justify-right bg-wit_gray_95 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 10">
                                                <path stroke="orange" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="block p-2 text-right">
                                    <h2
                                        class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                        05</h2>
                                </div>
                                <div class="block mt-6 ">
                                    <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0">
                                        Practical Projects and Assignments</h6>
                                </div>
                                <div class="block p-2">
                                    <p
                                        class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">
                                        Develop a portfolio showcasing your skills and abilities to potential employers.
                                    </p>
                                </div>
                                <div class="block p-2">
                                    <div class="text-right mb-5">
                                        <button type="button"
                                            class=" mr-4  text-white justify-right bg-wit_gray_95  font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 10">
                                                <path stroke="orange" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="block p-2 text-right">
                                    <h2
                                        class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-secondary dark:text-white">
                                        06</h2>
                                </div>
                                <div class="block mt-6 ">
                                    <h6 class=" text-xl text-black_20 font-semibold tracking-tight pl-8 pb-0">
                                        Interactive Learning Environment</h6>
                                </div>
                                <div class="block p-2">
                                    <p
                                        class="mb-3 p-0 pl-6 text-black_30 font-normal leading-7 tracking-tight w-100 h-20">
                                        Collaborate with fellow learners, exchanging ideas and feedback to enhance your
                                        understanding.</p>
                                </div>
                                <div class="block p-2">
                                    <div class="text-right mb-5 ">
                                        <button type="button"
                                            class=" mr-4 text-white justify-right bg-wit_gray_95  font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 10">
                                                <path stroke="orange" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of benifits section  -->
    <div class="flex justify-center flex-wrap ">
        <div class="container inline-flex  h-50 px-4 rounded-lg ">
            <div class="flex">
                <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="container pl-4 ">
                        <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">Our Courses
                        </h2>
                    </div>
                    <div class="flex pl-4">
                        <p class="block text-carbon_30 font-normal leading-7 tracking-tight h-20 ">Lorem ipsum dolor
                            sit amet consectetur.
                            Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum
                            eget habitasse in velit fringilla feugiat senectus in.</p>
                    </div>
                </div>
                <div class="flex rounded-lg  ml-44  md:flex-row md:max-w-xl" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    <div class="flex"><button type="button"
                            class="bg-txt_color mt-16 text-secondary font-medium rounded-lg text-sm w-24 h-12 ">Views
                            All</button>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php 
        $course = array('post_type' => 'course');         
     $my_posts = get_posts($course);?>
    <div class="flex justify-center">
        <div class="container">
            <div class="flex flex-row gap-4">
                <div>
                    <div class="lg:w-2/2 md:w-ful bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                        <div>
                            <img class="rounded-t-lg"
                                src="<?php echo get_template_directory_uri(); ?>/images/web_de_fun.png" alt="" />
                        </div>
                        <div class="flex mt-4 gap-4">
                            <div
                                class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                            <div
                                class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                            <div
                                class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                        </div>
                        <div class="p-5">
                            <h5
                                class="mb-2 text-xl leading-8 font-sans font-bold tracking-wide text-secondary dark:text-white">
                                Web Design Fundamentals</h5>
                            <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Learn the fundamentals of web
                                design, including HTML, CSS, and responsive design principles. Develop the skills to
                                create
                                visually appealing and user-friendly websites.</p>
                        </div>

                        <div
                            class="inline-flex w-full justify-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Get it Now
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="lg:w-2/2 md:w-ful bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                        <div>
                            <img class="rounded-t-lg"
                                src="<?php echo get_template_directory_uri(); ?>/images/web_de_fun.png" alt="" />
                        </div>
                        <div class="flex mt-4 gap-4">
                            <div
                                class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                            <div
                                class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                            <div
                                class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="#">Read more
                                </a>
                            </div>
                        </div>
                        <div class="p-5">
                            <h5
                                class="mb-2 text-xl leading-8 font-sans font-bold tracking-wide text-secondary dark:text-white">
                                Web Design Fundamentals</h5>
                            <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Learn the fundamentals of web
                                design, including HTML, CSS, and responsive design principles. Develop the skills to
                                create
                                visually appealing and user-friendly websites.</p>
                        </div>

                        <div
                            class="inline-flex w-full justify-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Get it Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- <div class="flex justify-center">
        <div class="container ">
            <div class="flex space-x-4">
                <div class="lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg"
                            src="<?php echo get_template_directory_uri(); ?>/images/web_de_fun.png" alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-2 text-xl leading-8 font-sans font-bold tracking-wide text-secondary dark:text-white">
                            Web Design Fundamentals</h5>
                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Learn the fundamentals of web
                            design, including HTML, CSS, and responsive design principles. Develop the skills to create
                            visually appealing and user-friendly websites.</p>
                    </div>

                    <div
                        class="inline-flex w-full justify-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Get it Now
                        </a>
                    </div>
                </div>

                <div class=" lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg" src="<?php echo get_template_directory_uri(); ?>/images/ui_ux.png"
                            alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-2 text-xl font-bold font-sans leading-8 tracking-wide text-secondary dark:text-white">
                            UI/UX Design</h5>

                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Master the art of creating
                            intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles,
                            wireframing, prototyping, and usability testing techniques.</p>
                    </div>

                    <div
                        class="inline-flex w-full text-center contant-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="flex justify-center">
        <div class="container ">
            <div class="flex space-x-4">
                <div class="mt-4 lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg" src="<?php echo get_template_directory_uri(); ?>/images/mob_app.png"
                            alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 p-5">
                        <h5
                            class="mb-4 text-xl leading-8 font-sans font-bold tracking-wide text-secondary dark:text-white">
                            Mobile App Development</h5>
                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Dive into the world of mobile app
                            development. Learn to build native iOS and Android applications using industry-leading
                            frameworks like Swift and Kotlin..</p>
                    </div>

                    <div
                        class="inline-flex w-full justify-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Get it Now
                        </a>
                    </div>
                </div>

                <div class="mt-4 lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg"
                            src="<?php echo get_template_directory_uri(); ?>/images/graphic_design.png" alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-2 text-xl font-bold font-sans leading-8 tracking-wide text-secondary dark:text-white">
                            Graphic Design for Beginners</h5>

                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Discover the fundamentals of
                            graphic design, including typography, color theory, layout design, and image manipulation
                            techniques. Create visually stunning designs for print and digital media.</p>
                    </div>

                    <div
                        class="inline-flex w-full text-center contant-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Read more
                        </a>
                    </div>
                </div>




            </div>
        </div>
    </div> -->
    <!-- <div class="flex justify-center">
        <div class="container ">
            <div class="flex space-x-4">
                <div class="mt-4 lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg"
                            src="<?php echo get_template_directory_uri(); ?>/images/f_edevelopment.png" alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-4 text-xl leading-8 font-sans font-bold tracking-wide text-secondary dark:text-white">
                            Front-End Web Development</h5>
                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Become proficient in front-end web
                            development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React.
                            Build interactive and responsive websites.</p>
                    </div>

                    <div
                        class="inline-flex w-full text-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Read more
                        </a>
                    </div>
                </div>

                <div class="mt-4 lg:max-w-1/2 sm:w-full bg-txt_color pb-4 pt-8 px-20 rounded-lg ">
                    <div>
                        <img class="rounded-t-lg"
                            src="<?php echo get_template_directory_uri(); ?>/images/advance_java.png" alt="" />
                    </div>
                    <div class="flex mt-4 gap-4">
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex  text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                        <div
                            class="inline-flex text-center px-3 py-2 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="#">Read more
                            </a>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-2 text-xl font-bold font-sans leading-8 tracking-wide text-secondary dark:text-white">
                            Advanced JavaScript</h5>

                        <p class="mb-3 font-normal text-black_30 dark:text-gray-400">Take your JavaScript skills to the
                            next level. Explore advanced concepts like closures, prototypes, asynchronous programming,
                            and ES6 features. Build complex applications with confidence.</p>
                    </div>

                    <div
                        class="inline-flex w-full text-center contant-center px-6 py-4 text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="#">Read more
                        </a>
                    </div>
                </div>




            </div>
        </div>
    </div> -->
    <!-- end of the cources -->
    <div class="flex justify-center flex-wrap m-12">
        <div class="container inline-flex  px-4 rounded-lg ">
            <div class="flex">
                <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="container ">
                        <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">Our
                            Testimonials
                        </h2>
                    </div>
                    <div class="flex">
                        <p class="block pt-6 text-base text-carbon_30 leading-7 tracking-wide  ">Lorem ipsum dolor
                            sit
                            amet consectetur. Tempus tincidunt etiam enormalget elit id imperdiet et. Cras eu sit
                            dignissim
                            lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
                    </div>
                </div>
                <div class="flex rounded-lg  ml-44  md:flex-row md:max-w-xl" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    <div class="flex"><button type="button"
                            class="bg-txt_color lg:mt-16 text-secondary font-medium rounded-lg text-sm md:w-24 w-24 h-14">Views
                            All</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="flex justify-center p-12  flex-wrap ">
        <div class="container justify-center h-auto w-full">
            <div class="grid grid-rows-2  grid-flow-col gap-4">
                <div class="grid grid-cols-1 lg:grid-cols-2  gap-4">
                    <div class="flex bg-home  ">
                        <div class="block">
                            <p class="m-6 text-lg font-sans font-normal text-black_30 px-6 ">
                                The web design course provided a solid foundation for me. The instructors were
                                knowledgeable
                                and supportive, and the interactive learning environment was engaging. I highly
                                recommend
                                it!
                            </p>
                            <div class="container bg-medwhite">
                                <div class="flex lg:pl-10 sm:pl-8  justify-between ">
                                    <div class="flex w-50 h-14">
                                        <img class="w-10 h-10 rounded"
                                            src="<?php echo get_template_directory_uri();?>/images/sara.png"
                                            alt="Default avatar">
                                        <div class="pt-2 pl-4 text-lg text_black_20">
                                            <span>Sara L</span>

                                        </div>
                                    </div>
                                    <div class="shrink w-20 h-14  ">

                                    </div>
                                    <div class="flex-none flex-row-reverse w-40 h-14 pt-2">
                                        <span
                                            class="font-bold py-4 px-4  rounded text-center text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read
                                            Full Story</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex bg-home  ">
                        <div class="block">
                            <p class="m-6 text-lg font-sans font-normal text-black_30 px-6 ">
                                The web design course provided a solid foundation for me. The instructors were
                                knowledgeable
                                and supportive, and the interactive learning environment was engaging. I highly
                                recommend
                                it!
                            </p>
                            <div class="container bg-medwhite">
                                <div class="flex lg:pl-10 sm:pl-8  justify-between">
                                    <div class="flex w-50 h-14">
                                        <img class="w-10 h-10 rounded"
                                            src="<?php echo get_template_directory_uri();?>/images/jason.png"
                                            alt="Default avatar">
                                        <div class="pt-2 pl-4 text-lg text_black_20">
                                            <span>Jason M</span>

                                        </div>
                                    </div>
                                    <div class="shrink w-20 h-14  ">

                                    </div>
                                    <div class="flex-none flex-row-reverse w-40 h-14 pt-2">
                                        <span
                                            class="font-bold py-4 px-4  rounded text-center text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read
                                            Full Story</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 mt-2 gap-4">
                    <div class="flex bg-home  ">
                        <div class="block">
                            <p class="m-6 text-lg font-sans font-normal text-black_30 px-6 ">
                                The web design course provided a solid foundation for me. The instructors were
                                knowledgeable
                                and supportive, and the interactive learning environment was engaging. I highly
                                recommend
                                it!
                            </p>
                            <div class="container bg-medwhite">
                                <div class="flex lg:pl-10 sm:pl-8  justify-between">
                                    <div class="flex w-50 h-14">
                                        <img class="w-10 h-10 rounded"
                                            src="<?php echo get_template_directory_uri();?>/images/sara.png"
                                            alt="Default avatar">
                                        <div class="pt-2 pl-4 text-lg text_black_20">
                                            <span>Sara L</span>

                                        </div>
                                    </div>
                                    <div class="shrink w-20 h-14  ">

                                    </div>
                                    <div class="flex-none flex-row-reverse w-40 h-14 pt-2">
                                        <span
                                            class="font-bold py-4 px-4  rounded text-center text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read
                                            Full Story</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex bg-home  ">
                        <div class="block">
                            <p class="m-6 text-lg font-sans font-normal text-black_30 px-6 ">
                                The web design course provided a solid foundation for me. The instructors were
                                knowledgeable
                                and supportive, and the interactive learning environment was engaging. I highly
                                recommend
                                it!
                            </p>
                            <div class="container bg-medwhite">
                                <div class="flex lg:pl-10 sm:pl-8  justify-between">
                                    <div class="flex w-50 h-14">
                                        <img class="w-10 h-10 rounded"
                                            src="<?php echo get_template_directory_uri();?>/images/jason.png"
                                            alt="Default avatar">
                                        <div class="pt-2 pl-4 text-lg text_black_20">
                                            <span>Jason M</span>

                                        </div>
                                    </div>
                                    <div class="shrink w-20 h-14  ">

                                    </div>
                                    <div class="flex-none flex-row-reverse w-40 h-14 pt-2">
                                        <span
                                            class="font-bold py-4 px-4  rounded text-center text-sm font-medium text-center text-secondary bg-wit_gray_95 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read
                                            Full Story</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- end of testimonials  -->
    <div class="flex justify-center flex-wrap m-12">
        <div class="container inline-flex  px-4 rounded-lg ">
            <div class="flex">
                <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="container ">
                        <h2 class="mb-3 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">Our
                            Testimonials
                        </h2>
                    </div>
                    <div class="flex">
                        <p class="block pt-6 text-base text-carbon_30 leading-7 tracking-wide  ">Lorem ipsum dolor
                            sit
                            amet consectetur. Tempus tincidunt etiam enormalget elit id imperdiet et. Cras eu sit
                            dignissim
                            lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
                    </div>
                </div>
                <div class="flex rounded-lg   md:flex-row md:max-w-xl" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    <div class="flex h-auto"><button type="button"
                            class="bg-txt_color mt-16 text-secondary font-medium rounded-lg text-sm  h-12 ">Views
                            All</button>
                    </div>
                </div>


            </div>
        </div>
    </div>


    // $course = array('post_type' => 'course');
    // $my_posts = get_posts($course);
    // foreach($my_posts as $post){

    // echo $post->post_title;

    // }
    // $args = array( 'post_type' => 'course', 'posts_per_page' => 10 );
    // $loop = new WP_Query( $args );
    // while ( $loop->have_posts() ) : $loop->the_post();
    // the_title();
    // echo '<div class="entry-content">';
        // the_content();
        // echo '</div>';
    // endwhile;

</body>

</html>