<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Online Course</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
   
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            primary: '#FF9500',
            hover_pro: '#f1f1f3',
            txt_color: '#ffffff',
            secondary: '#262626',
            home: 'white',
            medwhite: '#FCFCFD',
            back_color_home: '#f7f7f8',
            third_font_co: '#333333',
            forth_font_co:'#59595A',
            ffith_font:'$4C4C4D',
            }
        }
      }
    }
  </script>
    
</head>
<body class="bg-back_color_home">
  <?php wp_head(); 
 ?>
 
 <div class=" px-4   flex flex-wrap items-center justify-center bg-primary rounded-lg items-center mx-5">
    <p class="py-3 text-gray-500 text-white align-center " >
    Free Courses 🌟 Sale Ends Soon, Get It Now
    </p>

</div>
<nav class="bg-transparent border-gray-200 dark:bg-gray-900">
<div class="container flex flex-wrap items-center mx-auto p-4">
                <a href="<?php site_url();  ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!--<img src=" <?php echo get_template_directory_uri(); ?>/images/logo_icon.png" class="h-12" >-->
                    <?php  the_custom_logo(); ?>
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
        </button>
  <div class="hidden w-full md:block md:w-auto" id="navbar-default">
<!-- <?php
// $minenav = array(
//   'theme_location'  => 'headermenu',
//   'menu'            => '',
//   'container'       => false,
//   'container_id'    => '',
//   'menu-item'       =>'', 
//   'menu_class'      => 'menu-li px-5 py-3 ',
//   'menu_id'         => 'px-5 py-3',
//   'items_wrap'      => '<ul class="font-large  flex flex-col p-4 md:p-0 mt-4  rounded-lg font-sans md:flex-row md:space-x-8 md:mt-0 md:border-0 >%3$s</ul>',
//   'after_item'     => '<a class="block py-2 px-1 rounded text-xl text-secondary md:hover:bg-transparent md:border-0  md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">%3$s</a>'
// ); -->
$select_menu_title = wp_get_nav_menu_items( "header menu" );
 //var_dump($select_menu_title);
 //var_dump($select_menu_title['0']);
 //var_dump($select_menu_title['1']);
 //var_dump($select_menu_title['2']);
 //var_dump($select_menu_title['3']);
//  var_dump($select_menu_title[1]->title);
//  var_dump($select_menu_title[3]->title);
//  var_dump($select_menu_title[0]->title);
//  var_dump($select_menu_title[1]->url);
//  var_dump($select_menu_title[4]->url);
//  var_dump($select_menu_title[3]->url);
//var_dump($select_menu_title[3]->post_title);

//var_dump($select_menu_title[1]->id); ?>
<ul class="font-medium flex flex-col p-4 m-4 md:p-0 mt-4 align-center  rounded-lg  md:flex-row md:space-x-8 md:dark:bg-gray-900 dark:border-gray-700">
<?php $homepage = site_url();

 foreach ($select_menu_title as $title) {
  
   
  if($title->url==$homepage){
    echo "<li class='bg-home px-8 py-3 rounded-lg '>";
  }
  else{
    echo "<li class=' px-5 py-3 rounded-lg'>";
  }
    echo "<a href = '".$title->url."' class='block w-100 h-55 py-2 px-1 text-Xl font-bold font-normal text-secondary md:border-0 rounded md:bg-transparent md:p-0 dark:text-white ' >" ;
        echo $title->title."</a></li>";
 }
 ?>
</ul>
<!--<a class="block w-100 h-55 py-2 px-1 text-xl text-secondary md:border-0 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">  <?php  //wp_nav_menu( $minenav ); ?></a>
 <ul class="font-medium flex flex-col p-4 md:p-0 mt-4  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
  <li class="bg-hover_pro px-5 py-3 border rounded-lg">
      <a href="#" class="block w-100 h-55 py-2 px-1 text-xl text-secondary md:border-0 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
  </li>
  <li class="px-5 py-3">
      <a href="#" class="block py-2 px-1 text-xl text-secondary rounded md:border-0  md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Courses</a>
  </li>
  <li class="px-5 py-3">
      <a href="#" class="block py-2 px-1 rounded text-xl text-secondary md:hover:bg-transparent md:border-0  md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About Us</a>
  </li>
  <li class="px-5 py-3">
      <a href="#" class="block py-2 px-1 rounded text-xl text-secondary md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
  </li>
  <li class="px-5 py-3">
      <a href="#" class="block py-2 px-2 rounded text-xl text-secondary md:hover:bg-transparent md:border-0  md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
  </li>
</ul>  -->
</div>


<div class="inline-flex ms-auto rounded-md shadow-sm" role="group">
  <button type="button"  onclick="window.location.href = '<?php echo get_template_directory_uri(); ?>/rejistration_page.php';"  class="px-8 py-3 text-center font-semibold font-large text-xl text-secondary bg-transparent rounded-lg tracking-wide">Sign Up</button>

  <button type="button"  onclick="window.location.href = '<?php echo get_template_directory_uri(); ?>/login_page.php';" class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">Login</button>
</div>

</nav>
<!-- end of header -->


   <div id="defaultTabContent" class="text-center py-12"  >
         <div class="inline-flex bg-home rounded-lg">
            <div class="flex flex-row justify-center p-4 leading-normal ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_container.png">
            </div>
            <div class="flex flex-row justify-center text-3xl p-4 leading-normal">
                  <h1 class="mb-3 text-4xl font-bold tracking-tight text-gray-900 dark:text-white leading-loose">Unlock Your Creative Potential</h1>
            </div>
        </div>
      <div id="defaultTabContent" class="text-center">
          <div class=" p-2 rounded-lg md:p-8 " id="about" role="tabpanel" aria-labelledby="about-tab">
              <h2 class="mb-3 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">with Online Design and Development Courses.</h2>
              <p class="mb-3 text-gray-500 dark:text-gray-400">Learn from Industry Experts and Enhance Your Skills.</p>
            </div>
          <div class="inline-flex ms-auto rounded-md shadow-sm" role="group">
                <button type="button" onclick="" class="px-8 py-3 text-center font-medium font-large text-xl text-txt_color  bg-primary border border-primary rounded-lg ">Explore Courses</button>
                <button type="button"class="px-8 py-3 text-center font-semibold font-large text-xl text-secondary bg-transparent rounded-lg tracking-wide">View Pricing</button>
          </div>
        </div>
  </div>

<div  class="flex justify-center py-4  flex-wrap ">
  <div class="container inline-flex bg-home h-32 px-4 rounded-lg">
      <div class=" px-8 pr-5 pt-12   pb-0 bg-transparent dark:border-gray-700 ">
        <div class="inline-flex pr-12 border-r-2 border-home-500 ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/zapier.png">
        </div>
      </div>

      <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
        <div class="inline-flex pr-12 border-r-2 border-home-500 ">
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

      <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
        <div class="inline-flex pr-12 border-r-2 border-home-500 ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/spotify.png">
        </div>
      </div>

      <div class=" px-8 pr-5 pt-12  pb-0 bg-transparent dark:border-gray-700 ">
        <div class="inline-flex pr-12 border-r-2 border-home-500 ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/zoom.png">
        </div>
      </div>
  </div>
</div>


<div  class="flex justify-center py-4  flex-wrap ">
<div class="container inline-flex  h-50 px-4 rounded-lg">
    <video class="h-large w-full rounded-lg" controls>
      <source
        src="https://docs.material-tailwind.com/demo.mp4"
        type="video/mp4"
      />
      Your browser does not support the video tag.
    </video>
    </div>
  </div>

<div  class="flex justify-center py-4  flex-wrap ">
    <div class="container inline-flex  h-50 px-4 rounded-lg pt-12">
        <div class="rounded-lg  " id="about" role="tabpanel" aria-labelledby="about-tab">
        <h2 class="mb-3 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Benefits</h2>
        <p class="text-gray-500 text-base text-forth_font_co tracking-loose font-lg w-auto h-20 leading-7 w-50 m-2">Lorem ipsum dolor sit amet consectetur. 
        Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
        </div>
        <div class = "flex inlne-flex pt-12 pl-40 pr-0 p-4 ">
        <button class="bg-home text-secondary  focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 h-auto w-auto" > Views All</button>
        </div>
    </div>
</div>
<div  class="flex justify-center py-4  flex-wrap ">
<div class="container justify-center p-4  h-autow-full"> 
<div class ="grid grid-rows-2  grid-flow-col gap-2">
<div class="grid grid-cols-3 gap-4">
  <div class="flex">
      <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
            <div class="block p-2  text-right">
              <h2 class="mb-3 pt-4 pr-8 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block mt-6">
              <h6 class=" text-xl text-third_font_co font-semibold tracking-tight pl-8 pb-0 ">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="mb-3 p-0 pl-6 text-gray-500  leading-3 tracking-tight w-100 h-20 leading-6">Fit your coursework around your existing commitments and obligations.</p>
            </div>
            <div class="block p-2">
              <div class="">
              <button type="button" class=" mr-4  text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
              <h2 class="mb-3 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block p-4">
              <h6 class=" text-xl text-bolder tracking-tight p-4">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="text-gray-500  leading-3 tracking-tight w-100 h-20 leading-7">Lorem ipsum dolor sit amet consectetur. 
              Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="block p-2">
              <button type="button" class=" text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
              <span class="sr-only">Icon description</span>
              </button>
              </div>
        </div>
  </div>
  <div>
    <div class="flex">
      <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
            <div class="block p-2 text-right">
              <h2 class="mb-3 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block p-4">
              <h6 class=" text-xl text-bolder tracking-tight p-4">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="text-gray-500  leading-3 tracking-tight w-100 h-20 leading-7">Lorem ipsum dolor sit amet consectetur. 
              Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="block p-2">
              <button type="button" class=" text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
              <span class="sr-only">Icon description</span>
              </button>
              </div>
        </div>
  </div>
</div>
  </div>
  <div class="grid grid-cols-3 gap-4">
  <div> 
  <div class="flex">
  <div class="rounded-lg bg-home" id="about" role="tabpanel" aria-labelledby="about-tab">
            <div class="block p-2 text-right">
              <h2 class="mb-3 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block p-4">
              <h6 class=" text-xl text-bolder tracking-tight p-4">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="text-gray-500  leading-3 tracking-tight w-100 h-20 leading-7">Lorem ipsum dolor sit amet consectetur. 
              Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="block p-2">
              <button type="button" class=" text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
              <h2 class="mb-3 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block p-4">
              <h6 class=" text-xl text-bolder tracking-tight p-4">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="text-gray-500  leading-3 tracking-tight w-100 h-20 leading-7">Lorem ipsum dolor sit amet consectetur. 
              Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="block p-2">
              <button type="button" class=" text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
              <h2 class="mb-3 text-6xl font-bold tracking-tight font-bold  text-gray-900 dark:text-white">01</h2>
            </div>
            <div class="block p-4">
              <h6 class=" text-xl text-bolder tracking-tight p-4">Flexible Learning Schedule</h6>
            </div>
            <div class="block p-2">
              <p class="text-gray-500  leading-3 tracking-tight w-100 h-20 leading-7">Lorem ipsum dolor sit amet consectetur. 
              Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et.Ac cum eget habitasse in velit fringilla feugiat senectus in.</p>
            </div>
            <div class="block p-2">
              <button type="button" class=" text-white justify-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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






</body>
</html>


  