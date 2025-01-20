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
                    gray_black: '#000000',
                    carbon_30: '#59595A',
                    black_30: '$4C4C4D',
                    peach: '#FFF9F0',
                    check_color: '#FFF4E5',
                }
            }
        }
    }
    </script>

</head>

<body class="bg-back_color_home">
    <header>
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
                <?php $menu_buttons = wp_get_nav_menu_items("registration"); ?>
                <?php
                 foreach ( $menu_buttons as $menu_button) { 
                                if($menu_button->title === "Sign Up"){
                                    ?>
                <a href="<?php echo $menu_button->url;// get_post_type_archive_link('signup');?>"
                    class="px-8 py-3 text-center font-semibold font-large text-xl text-secondary bg-transparent rounded-lg tracking-wide">
                    <?php echo $menu_button->title; ?></a>

                <?php } 
                            else {?>

                <a href="<?php echo $menu_button->url; //get_post_type_archive_link('login');  ?>"
                    class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">
                    <?php  echo $menu_button->title; ?></a>
                <?php } }?>
            </div>
    </nav>
    <!-- end of header -->
                            </header>