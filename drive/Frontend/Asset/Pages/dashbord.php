
<?php
    include("../init.php");
?>
<script src="https://kit.fontawesome.com/abc8e57fdb.js" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="<?php urlOf("Frontend/Asset/CSS/style.css")?>">
<div class="inline-flex h-full bg-[#F3FCFC] w-screen">
    <!-- Side bar -->
    <nav class=" flex flex-col h-full w-72 border border-black sm:hidden lg:block bg-[#F3FCFC]">
        <!-- <div class="flex items-center justify-center flex-shrink-0 py-10">
          <a href="#">
            <img class="w-24 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI">
          </a>
        </div> -->

        <!-- component -->
        <div class="flex items-center justify-center ">
          <!-- User Profile -->
          <div class="max-w-xs">
            <div class="py-3">
                <div class="photo-wrapper p-2 cursor-pointer user-profile">
                    <img class="w-32 h-32 rounded-full mx-auto" src="../Images/primevideologo.jpg" alt="John Doe">
                </div>
                <div class="p-2">
                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Primevideo</h3>
                </div>
            </div>
          </div>
        </div>

        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto ">
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
    <div class="sm:block lg:hidden fixed z-50 w-full h-24 max-w-full -translate-x-1/2 bg-[#F3FCFC] border border-gray-200 bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
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
    </div>

    <div class="m-10 lg:mx-8 lg:my-6 lg:w-full lg:overflow-x-hidden lg:overflow-y-auto">
    <!-- Main contant  -->
      <div class="grid grid-cols-3 lg:grid-cols-5 xxl:grid-cols-7 gap-5 lg:gap-x-8 lg:gap-y-3">
        <?php
          for ($i=0; $i < 20; $i++) { 
            echo '
            <div class="card p-10 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border h-fit sm:w-72 lg:w-60">
            <div class="prod-title text-center pb-5">
              <p class="text-[1.5rem] truncate ... normal-case text-gray-900 font-bold">demo.php</p>
            </div>
            <div class="prod-img pb-5">
              <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="-35 0 94 24"><path d="M8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm5,12H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM14,12H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm6.71,6.29a1,1,0,0,0-1.42,0l-.29.3V16a1,1,0,0,0-2,0v2.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2A1,1,0,0,0,20.71,18.29ZM12,18a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Z"></path></svg>
            </div>
            <div class="prod-info flex justify-center">
              <a class="text-indigo-800" href="#">
                <button class="downloade_btn border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                </button>
              </a>
              <a class="text-indigo-800 px-2" href="#">
                <button id="delete-btn" class="border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
              </a>
              <a class="text-indigo-800" href="#" target="_top">
                <button class="border border-gray-200 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path> </svg>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </button>
              </a>
            </div>
          </div>
            ';
          }
        ?>
    </div>

    <!-- toast-bottom-right  -->
      <div id="toast-bottom-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-black divide-x divide-gray-200 rounded-lg shadow right-5 bottom-5 " role="alert">  
        <div id="toast-simple" class="flex items-center w-full max-w-xs space-x-4 text-white divide-x divide-gray-200 " role="alert">
            <svg class="w-5 h-5 text-indigo-600" height="20" width="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
            <div class="pl-4 text-sm font-normal">Downloading.....</div>
        </div>
      </div>

    <!-- Logout-Model  -->

      <div id="logout-modal" tabindex="-1" class="absolute justify-center flex z-50 pt-40 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-md max-h-full">
              <div class="relative bg-black">
                  <div class="p-6 text-center">
                      <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to Logout?</h3>
                      <a href="../../../index.php">
                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                      </a>
                      <button data-modal-hide="popup-modal" type="button" class="logout-cancel text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                  </div>
              </div>
          </div>
      </div>
    <!-- User-profile--Model  -->
 
    <div id="user-profile-modal"  data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="absolute justify-center flex z-50 pt-30 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] h-fit">
          <div class="relative bg-white rounded-lg shadow">
              <div class="px-4 py-5 sm:px-6">
              <div class="flex items-start justify-between dark:border-gray-600">
                  <button id="close-user-model" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                  </button>
              </div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900 inline-flex">
                      Update Profile
                  </h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    This information will be displayed publicly so be careful what you share.
                  </p>
              </div>
              <div class="border-t border-gray-200">
                  <dl>
                      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                              Full name
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" name="floating_email" id="name" class="block px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " />
                          </dd>
                      </div>
                      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                              Old password
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="password" name="floating_email" id="name" class="block px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " />
                          </dd>
                      </div>
                      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            New password
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="password" name="floating_email" id="name" class="block px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " />
                          </dd>
                      </div>
                      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            Conform password
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="password" name="floating_email" id="name" class="block px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " />
                          </dd>
                      </div>
                  </dl>
                  <hr class="my-2 border-blueGray-300">
              </div>
              <div class="px-4 sm:px-6">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black hover:text-white rounded-md group-hover:bg-opacity-0">
                      Update changes
                  </span>
                </button>
              </div>
        </div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script src="<?= urlOf("Frontend/Asset/JS/jquery-3.6.0.min.js")?>"></script>
<script>
        $(".Add").on("click", function() {
            open("./File_uploade_dashboard.php", "_self");
        });
       
        function hide_toast() {
          $("#toast-bottom-right").hide();
        }
        hide_toast();
        $(".downloade_btn").on("click", function() {
          $("#toast-bottom-right").fadeIn();
            setTimeout(hide_toast,4000);
        });
        
        $("#logout-modal").hide();
        $(".logout-cancel").on("click", function() {
            $("#logout-modal").hide();
        });
        $(".logout").on("click", function() {
            $("#logout-modal").show();
        });

        $("#user-profile-modal").hide();
        $(".user-profile").on("click",function(){
          $("#user-profile-modal").show();
        });
        $("#close-user-model").on("click",function(){
          $("#user-profile-modal").hide();
        });
</script>
</body>
</html>