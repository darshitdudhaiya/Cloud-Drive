<?php
include("../includes/init.php");

// session_start();
if (!isset($_SESSION["user"]))
  header("Location:../pages/error.php");


if (isset($_POST["deleted_filename"])) {
  $deleted_filename = $_POST["deleted_filename"];

  echo json_encode($deleted_filename);
  exit;
}

if (isset($_POST["shared_filename"])) {
  $shared_filename = $_POST["shared_filename"];

  echo json_encode($shared_filename);
  exit;
}

include(pathOf('backend/queries/Connection.php'));

$uname = $_SESSION["user"];

$query = "SELECT id FROM users WHERE username = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];
?>

<head>
  <script src="https://kit.fontawesome.com/abc8e57fdb.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= urlOf("frontend/assets/css/styles.css") ?>">
</head>

<div class="inline-flex h-full w-screen">
  <!-- Side bar -->
  <nav class=" flex flex-col h-full w-80 lg:w-72 shadow-xl hidden lg:block bg-[#F3FCFC] sm:absolute z-30 lg:relative translate-x-0 navbar">
    <div class="flex items-center justify-end m-2 lg:hidden">
      <button onclick="close_navbar()" type="button" class="text-white rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="black" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>
      </button>
    </div>

    <div class="flex items-center justify-center ">
      <!-- User Profile -->
      <div class="max-w-xs">
        <div class="py-3">
          <div class="photo-wrapper p-2 cursor-pointer user-profile">
            <img class="w-32 h-32 rounded-full mx-auto" src="<?= urlOf('frontend/assets/images/download.jfif') ?>" alt="John Doe">
          </div>

          <div class="p-2">
            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Primevideo</h3>
          </div>
        </div>
      </div>
    </div>
    
    <div class="flex-1 p-4 space-y-2 overflow-hidden hover:overflow-auto ">
      <button class="Add relative inline-flex items-center justify-center p-0.5 mb-2 mx-3 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span class="inline-flex relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#F3FCFC] text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
          <svg style="color: black" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="black" class="bi bi-window-plus" viewBox="0 0 16 16">
            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" fill="black"></path>
            <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z" fill="black"></path>
            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" fill="black"></path>
          </svg>
          <span class="mx-4 font-mediumf">New</span>
        </span>
      </button>

      <button class="w-full flex py-2 items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
        <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
          <i class="fa-solid fa-hard-drive"></i>
        </span>
        <span>My Drive</span>
      </button>
      <hr class="my-6 border-blueGray-300">

      <button class="w-full flex py-2 items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
        <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
          <i class="fa-solid fa-share-nodes"></i>
        </span>
        <span>Share</span>
      </button>
      <hr class="my-6 border-blueGray-300">

      <button class="w-full flex py-2 items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
        <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
          <i class="fa-solid fa-clock"></i>
        </span>
        <span>Recent</span>
      </button>
      <hr class="my-6 border-blueGray-300">

      <button class="w-full flex py-2 items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
        <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
          <i class="fa-solid fa-recycle"></i>
        </span>
        <span>Recycle Bin</span>
      </button>
      <hr class="my-6 border-blueGray-300">

      <button class="logout bg-indigo-600 flex items-center text-xl text-white font-bold py-2 px-4 mx-5 bottom-4 rounded-md absolute inset-x-0 bottom-0 w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 24 24" fill="none">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8m4-9-4-4m4 4-4 4m4-4H9"></path>
        </svg>
        <span class="mx-4 font-mediumf">Logout</span>
      </button>
    </div>
  </nav>
  <!-- Buttom navigation  -->
  <!-- <div class="sm:block lg:hidden fixed z-50 w-full h-24 max-w-full -translate-x-1/2 bg-[#F3FCFC] border border-gray-200 bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
      <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <svg class="w-6 h-6 mb-1 text-white group-hover:text-blue-600 dark:group-hover:text-indigo-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
          <path clip-rule="evenodd" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"></path>
        </svg>
        <span class="sr-only">Wallet</span>
      </button>

      <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <a href="#" class="flex py-2 items-center space-x-2 text-white transition-colors rounded-lg group hover:text-indigo-600">
          <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg">
            <i class="fa-solid fa-share-nodes"></i>
          </span>
        </a>
      </button>

      <div class="flex items-center justify-center">
        <button type="button" class="Add inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
          </svg>
          <span class="sr-only">New item</span>
        </button>
      </div>

      <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center px-5">
        <a href="#" class="flex py-2 items-center space-x-2 text-white transition-colors rounded-lg group hover:text-indigo-600">
          <span aria-hidden="true" class="p-2 mx-2 transition-colors rounded-lg">
            <i class="fa-solid fa-recycle"></i>
          </span>
        </a>
      </button>

      <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})" class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2">
          <img class="w-10 h-10 rounded-lg shadow-md" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed Kamel">
          <span class="sr-only">User menu</span>
        </button>
        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu" tabindex="-1" class="absolute w-48 py-1 mt-2 origin-bottom-left bg-[#F3FCFC] rounded-md shadow-lg left-10 bottom-14 focus:outline-none" role="menu" aria-orientation="vertical" aria-label="user menu" style="display: none;">
          <a href="#" class="user-profile block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

          <a href="#" class="logout block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
        </div>
      </div>
    </div>
  </div> -->

  <div class="mx-24 my-10 lg:mx-5 lg:my-6 lg:w-full overflow-x-hidden overflow-y-auto scroll-bar">
    <!-- Main contant  -->
    <div class="relative">
        <div class="absolute left-0 top-0 block lg:hidden">
            <button onclick="openSideBar()" type="button" class="inline-flex items-center p-2 ml-3 mt-1 text-sm text-black rounded-lg outline-none ring-2 ring-indigo-600">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <h2 class="text-2xl mb-5 font-bold tracking-tight text-gray-900 sm:text-center lg:text-left">My Drive</h2>
          <!-- Settings button -->
        <div class="flex-shrink-0 absolute top-0 right-0 mr-5">
              <button id="notificationButton" class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
                <div class="relative inline-flex">
                  <div class="absolute mt-1 bottom-auto left-auto right-0 top-0 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 skew-x-0 skew-y-0 scale-x-100 scale-y-100 rounded-full bg-pink-700 text-white p-1 text-xs z-auto">
                    <span>23</span>
                  </div>
                    <div class="p-2 flex items-center justify-center rounded-lg bg-indigo-600 text-center text-white shadow-lg dark:text-gray-200">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6"> <path   fill-rule="evenodd"   d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"   clip-rule="evenodd" /></svg>
                    </div>
                  </div>
                </button>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-5 xxl:grid-cols-7 gap-5 lg:gap-x-0 lg:gap-y-3 relative">
      <?php
      if (file_exists('../../../usersdata/users-stored-data/' . $uid)) {
        $files = array_diff(scandir("../../../usersdata/users-stored-data/" . $uid), array('.', '..'));
        foreach ($files as $file) {
          $filename = explode('.', $file);
          $file_extension = end($filename);
          $file_extension_image = true;

          if (!file_exists('../images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
          }

          if ($file_extension_image == true) {
            echo '
              <div class="card p-10 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border h-fit sm:w-96 lg:w-60">
              <div class="prod-title text-center pb-5">
                <p class="text-[1.5rem] truncate ... normal-case text-gray-900 font-bold">' . $file . '</p>
              </div>
              <div class="prod-img pb-5 flex justify-center">
                <img class="h-20 w-20" src=' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . ' alt=' . $file_extension . '/>
              </div>
              <div class="prod-info flex justify-center">
                <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                  <button value="' . $file . '" class="download_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg class="fill-current" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                  </button>
                </a>
                <a class="text-indigo-800 px-2" href="#">
                  <button value="' . $file . '" id="delete_btn" class="delete_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg>
                  </button>
                </a>
                <a class="text-indigo-800" href="#" target="_top">
                  <button value="' . $file . '" class="share_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path> </svg>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                  </button>
                </a>
              </div>
            </div>
              ';
          } else {
            echo '
              <div class="card p-10 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border h-fit sm:w-96 lg:w-60">
              <div class="prod-title text-center pb-5">
                <p class="text-[1.5rem] truncate ... normal-case text-gray-900 font-bold">' . $file . '</p>
              </div>
              <div class="prod-img pb-5 flex justify-center">
                <img class="h-20 w-20 mx-8" src=' . urlOf("frontend/assets/images/logos/none.png") . ' alt=' . $file_extension . '/>
              </div>
              <div class="prod-info flex justify-center">
                <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                  <button value="' . $file . '"  class="download_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg class="fill-current" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                  </button>
                </a>
                <a class="text-indigo-800 px-2" href="#">
                  <button value="' . $file . '" id="delete_btn"  class="delete_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg>
                  </button>
                </a>
                <a class="text-indigo-800" href="#" target="_top">
                  <button value="' . $file . '" class="share_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path> </svg>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                  </button>
                </a>
              </div>
            </div>
              ';
          }
        }
      }
      ?>
    </div>

    <!-- toast-bottom-right  -->
    <div id="toast-bottom-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-black divide-x divide-gray-200 rounded-lg shadow right-5 bottom-5 " role="alert">
      <div id="toast-simple" class="flex items-center w-full max-w-xs space-x-4 text-white divide-x divide-gray-200 " role="alert">
        <svg class="w-5 h-5 text-indigo-600" height="20" width="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path>
        </svg>
        <div class="pl-4 text-sm font-normal">Downloading.....</div>
      </div>
    </div>

    <!-- Logout-Model  -->
    <div id="logout-modal" tabindex="-1" class="absolute justify-center flex z-50 pt-40 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-black">
          <div class="p-6 text-center">
            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to Logout?</h3>
            <button id="logout" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
              Yes, I'm sure
            </button>
            <button data-modal-hide="popup-modal" type="button" class="logout-cancel text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- User-profile--Model  -->
    <div id="user-profile-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      
    </div>

    <!--Share File modal-->
    <div class="relative z-10 hidden share-model" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                  <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Enter Email</h3>
                  <div class="mt-2">
                  <p class="text-sm text-gray-500" id="share_model_details"></p>
                    <div class="relative z-0 w-[370px] mt-6 mb-6 group">
                      <input type="email" name="floating_email" id="email" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="button" id="share_model_btn" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">Share</button>
              <button type="button" id="share_model_cancel" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete File Modal -->
    <div class="relative z-10 hidden delete-model" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                  <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Are You Sure?</h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500" id="delete_model_details"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="button" id="delete_model_btn" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Delete</button>
              <button type="button" id="delete_model_cancel" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Notification bar -->
  <div class="flex flex-col">
    <div class="relative hidden" id="notificationSection">
      <div class="h-screen flex-1 p-4 space-y-8 hover:overflow-y-auto w-80 absolute top-0 right-0 shadow-2xl bg-white">
        <!-- content -->
        <div class="space-y-6">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-normal text-gray-600 dark:text-light">Notification</h3>
            <button id="notificationColseBtn" type="button" class="text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="black" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </button>
          </div>
          <?php
          $sql1 = "SELECT * FROM `shared` WHERE `sid` = $uid" and `notification_status` == 1;
          $result1 = mysqli_query($connect, $sql1);
          $rec = mysqli_fetch_all($result1, MYSQLI_ASSOC);
          $time = date('g:i A');
          $date = date("d/m/y") . " " . $time;
          $sec = strtotime($date);
          //converts seconds into a specific format  
          $newdate = date("Y/d/m H:i", $sec);
          //Appends seconds with the time  
          $newdate = $newdate . ":00";
          $time2 = new DateTime($newdate);

          if (file_exists('../../../usersdata/users-shared-data/' . $uid)) {

            $files = array_diff(scandir("../../../usersdata/users-shared-data/" . $uid), array('.', '..'));
             echo $newdate ."<br>";
            foreach ($rec as $record) {
              echo $record["sharing_hours"];
              $time1 = new DateTime($record["sharing_hours"]);
              $hours = $time2->diff($time1);
              // echo $hours->format('%y year %m month %d days %h hour %i minute %s second');

              echo '<div class="space-y-4">
                <a href="#" class="flex items-start space-x-2 group bg-gray-100 p-3 rounded-lg shadow-lg">
                  <img class="flex-shrink-0 object-cover w-12 h-12 rounded-full" src="' . urlOf('frontend/assets/images/download.jfif') . '" alt="John Doe">
                  <div class="overflow-hidden text-black">
                    <h4 class="font-semibold transition-colors group-hover:text-indigo-600">
                    ' . $record["username"] . '
                    </h4>
                    <p class="text-sm">
                    ' . $record["username"] . ' was shared <b>' . $record["filename"] . '</b> with you. 
                    </p>
                  </div>
                  <span class="text-xs text-black whitespace-nowrap dark:text-primary-light">'.$hours->format("%h").' h ago</span>
                </a>
                <hr class="border-blueGray-300">

              </div>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= urlOf("frontend/assets/js/jquery-3.6.0.min.js") ?>"></script>
  <script src="<?= urlOf('frontend/assets/js/index.js') ?>"></script>
  </body>
  <script>
   $(document).ready(function() {

$("#notificationButton").on("click", function() {
  $("#notificationSection").removeClass("hidden");
});

$("#notificationColseBtn").on("click", function() {
  $("#notificationSection").addClass("hidden");
});


// $(".download_btn").on("click", function() {
//   let download_filename = $(this).val();

//   $.ajax({
//     url: "http://localhost/drive/backend/queries/download_file.php",
//     type: "POST",
//     contentType: "application/json",
//     data: JSON.stringify({
//       "file": download_filename
//     }),
//     success: function(data) {
//       open("../../../backend/quries/download_file.php","_self");
//     }
//   });
// });

$(".delete_btn").on("click", function() {
  let delete_filename = $(this).val();

  $.ajax({
    type: "POST",
    data: {
      "deleted_filename": delete_filename
    },
    dataType: "json",
    success: function(data) {
      console.log("ok");
      $("#delete_model_details").html('Do you want to delete <b>' + JSON.stringify(data) + '</b> ?')
      $(".delete-model").removeClass("hidden");
    }
  })
});

$("#delete_model_btn").on("click", function() {
  let file = $("#delete_model_details").children("b")[0].outerHTML.replace('<b>"', "").replace('"</b>', "");

  $.ajax({
    url: "http://localhost/drive/backend/queries/delete_file.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      file: file
    }),
    success: function(data) {
      if (data == 1) {
        $(".delete-model").addClass("hidden");
        window.location.reload();
      } else {
        alert("file didn't deleted yet");
      }
    }
  });
});

$(".share_btn").on("click", function() {
  let share_filename = $(this).val();


  $.ajax({
    type: "POST",
    data: {
      "shared_filename": share_filename
    },
    dataType: "json",
    success: function(data) {
      console.log("ok");
      $("#share_model_details").html('Sharing <b>' + JSON.stringify(data) + '</b>');
      $(".share-model").removeClass("hidden");
    }
  })
});

$("#share_model_btn").on("click", function() {
  let email = $("#email").val();
  let shared_filename = $("#share_model_details").children("b")[0].outerHTML.replace('<b>"', "").replace('"</b>', "");

  $.ajax({
    url: "http://localhost/drive/backend/queries/share_file.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      email: email,
      file: shared_filename
    }),
    success: function(data) {
      if (data == 1) {
        $(".share-model").addClass("hidden");
      } else {
        alert("file didn't shared yet");
      }
    }
  });
});

;
});
  </script>
  </html>