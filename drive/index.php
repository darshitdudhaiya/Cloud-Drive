<?php
include("./Frontend/Asset/init.php");
include(pathOf('Frontend/Asset/Pages/Header.php'));
?>
  <!-- ============== Main content =================-->
  <section class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
    <div class="grid md:grid-cols-2 sm:grid-cols-12">
      <div class="w-4/5 h-4/5 mx-8 md:my-10">
        <img src="./Frontend/Asset/Images/img.webp" alt="" class="">
      </div>
      <div>
        <h1 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-5xl lg:text-6xl md:text-4xl">
          <span class="block xl:inline  md:inline lg:inline">Secure and simple to use cloud storage</span><br
            class="xl:block hidden md:block lg:block" />
          <span class="block text-indigo-600 xl:inline sm:inline md:inline lg:inline">for your Documents</span>
        </h1>
        <p class="mt-10 text-2xl md:text-2xl lg:text-2xl text-gray-500">Secure collaboration with anyone,
          <br /> anywhere, on any device
        </p>
        <div class="inline">
        <a href="<?= urlOf('Frontend/Asset/Pages/Signup.php')?>">
          <button
            class=" mt-10 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                Get started
              </span>
            </button>
          </a>
        <a href="<?= urlOf('Frontend/Asset/Pages/Login.php')?>">
          <button
            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span
            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                Login
              </span>
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== Fectures =================-->
  <section class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
    <div class="grid md:grid-cols-3 sm:grid-cols-12 gap-x-5  gap-y-5">
      <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
        <div class="flex justify-center lg:block">
          <img src="./Frontend/Asset/Images/access.png" alt="" class="h-20">
        </div>
        <div class="mt-5">
          <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Access on all devices</h5>
          <p class="mb-3 text-lg md:text-lg lg:text-lg text-gray-500">Save your files and have them on your laptop , phone or the web</p>
        </div>
      </div>
      <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
        <div class="flex justify-center lg:block">
          <img src="./Frontend/Asset/Images/share.png" alt="" class="h-20">
        </div>
        <div class="mt-5">
          <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Share and collaborate</h5>
          <p class="mb-3 text-lg text-gray-500">Send, receive and work together with your friends on every file</p>
        </div>
      </div>
      <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
        <div class="flex justify-center lg:block">
          <img src="./Frontend/Asset/Images/security.png" alt="" class="h-20">
        </div>
        <div class="mt-5">
          <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Unbreakable security</h5>
          <p class="mb-3 text-lg md:text-lg lg:text-lg text-gray-500">Keep your private files confidential with the highest level of encryption</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== Teams =================-->
  <!-- <section class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
    <div class="grid md:grid-cols-2 sm:grid-cols-12 gap-x-5  gap-y-5">
      <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
          
      </div>
      <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
        
      </div>

    </div>
  </section> -->
  <?php
    include("./Frontend/Asset/Pages/Footer.php");
  ?>
</body>
</html>
<!-- 
  https://www.pcloud.com/
  https://www.box.com/home
  https://tailwindcomponents.com/component/responsive-sidebar
 -->