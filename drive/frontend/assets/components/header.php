<?php
$url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drive</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <div id="g_id_onload" data-client_id="420303382904-322is7uidpj096f823uvm3c189i1luh3.apps.googleusercontent.com" data-callback="handleCredentialResponse">
  </div>
  <script src="https://kit.fontawesome.com/abc8e57fdb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= urlOf('frontend/assets/css/styles.css') ?>">
  <script src="<?= urlOf('frontend/assets/js/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= urlOf('frontend/assets/js/index.js') ?>"></script>
</head>

<body class="bg-[#f3fcfc]">
  <Header>
    <nav class="shadow-md fixed w-screen bg-[#F3FCFC] z-30">
      <div class="relative max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Drive</span>
        </a>
        <div class="flex md:order-2 gap-2">
          <a href='<?= urlOf('frontend/assets/pages/signup.php') ?>'>
            <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                Sign up
              </span>
            </button>
          </a>
          <button onclick="openNav()" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-right justify-between hidden w-full md:flex md:w-auto md:order-1 box bg-[#F3FCFC]">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:border-gray-700">
            <?php
            if ($url == "/drive/" || $url == "/drive/index.php" || $url == "/drive/index.php/#features") {
            ?>
              <li>
                <a href='#home' class="block py-2 pl-3 pr-4 text-indigo-600 rounded md:bg-transparent md:text-indigo-600 md:p-0 md:dark:text-indigo-600" aria-current="page">Home</a>
              </li>
            <?php
            } else {
            ?>
              <li>
                <a href='<?= urlOf('index.php') ?>' class="block py-2 pl-3 pr-4  text-indigo-600 rounded md:bg-transparent md:text-indigo-600 md:p-0 md:dark:text-indigo-600" aria-current="page">Home</a>
              </li>
            <?php
            }
            ?>
            <li>
              <a href='../../../index.php' class=" block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">About</a>
            </li>
            <?php
            if ($url == "/drive/" || $url == "/drive/index.php" || $url == "/drive/index.php/#home") {
            ?>
              <li>
                <a href='#features' class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Features</a>
              </li>
            <?php
            } else {
            ?>
              <li>
                <a href='<?= urlOf('index.php#features') ?>' class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Features</a>
              </li>
            <?php
            }
            ?>
            <li>
              <a href='../../../index.php' class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- =========================== Mobile Navbar ====================== -->

    <div class="flex flex-col">
      <div class="relative hidden" id="mobileNav">
        <div class="h-screen flex-1 md:p-4 w-40 md:w-60 fixed top-0 right-0 shadow-2xl bg-white z-30">
          <div class="space-y-6">
            <div class="flex items-center justify-end">
              <button id="navColseBtn" type="button" class="text-white rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="black" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </div>
            <div>
              <ul class="flex flex-col text-md mt-4">
                <?php
                if ($url == "/drive/" || $url == "/drive/index.php" || $url == "/drive/index.php/#features") {
                ?>
                  <li class="navItem">
                    <a href='#home' class=" block py-2 pl-3 pr-4 text-indigo-600 rounded md:bg-transparent md:text-indigo-600 md:p-0 md:dark:text-indigo-600" aria-current="page">Home</a>
                    <hr class="my-1 md:my-2 border-blueGray-300">
                  </li>
                <?php
                } else {
                ?>
                  <li class="navItem">
                    <a href='<?= urlOf('index.php') ?>' class=" block py-2 pl-3 pr-4  text-indigo-600 rounded md:bg-transparent md:text-indigo-600 md:p-0 md:dark:text-indigo-600" aria-current="page">Home</a>
                    <hr class="my-1 md:my-2 border-blueGray-300">
                  </li>
                <?php
                }
                ?>
                <li class="navItem">
                  <a href='../../../index.php' class=" block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">About</a>
                  <hr class="my-1 md:my-2 border-blueGray-300">
                </li>
                <?php
                if ($url == "/drive/" || $url == "/drive/index.php" || $url == "/drive/index.php/#home") {
                ?>
                  <li class="navItem">
                    <a href='#features' class=" block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Features</a>
                    <hr class="my-1 md:my-2 border-blueGray-300">
                  </li>
                <?php
                } else {
                ?>
                  <li class="navItem">
                    <a href='<?= urlOf('index.php#features') ?>' class=" block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Features</a>
                  </li>
                <?php
                }
                ?>
                <li class="navItem">
                  <a href='../../../index.php' class=" block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 hover:text-indigo-600">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Header>