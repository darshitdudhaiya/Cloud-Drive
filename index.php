<?php
include("./frontend/assets/includes/init.php");
include(pathOf('frontend/assets/components/header.php'));
?>
<!-- ============== Main content =================-->
<section id="home" class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
  <div class="grid md:grid-cols-2 sm:grid-cols-12 mt-16">
    <div class="w-4/5 h-4/5 mx-8 md:my-10">
      <img src="<?= urlOf('frontend/assets/images/img.webp') ?>" alt="" class="">
    </div>
    <div>
      <h1 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-5xl lg:text-6xl md:text-4xl">
        <span class="block xl:inline  md:inline lg:inline">Secure and simple to use<br class="md:hidden sm:hidden lg:hidden xl:block" /> cloud storage</span><br class="xl:block hidden md:block lg:block" />
        <span class="block text-indigo-600 xl:inline sm:inline md:inline lg:inline">for your Documents</span>
      </h1>
      <p class="mt-10 text-2xl md:text-2xl lg:text-2xl text-gray-500">Secure collaboration with anyone,
        <br /> anywhere, on any device
      </p>
      <div class="inline">
        <a href="<?= urlOf('frontend/assets/pages/signup') ?>">
          <button class=" mt-10 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
              Get started
            </span>
          </button>
        </a>
        <a href="<?= urlOf('frontend/assets/pages/login') ?>">
          <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
              Login
            </span>
          </button>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- ============== Features =================-->
<section id="features" class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
  <div class="grid md:grid-cols-3 sm:grid-cols-12 gap-x-5 gap-y-5">
    <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
      <div class="justify-center lg:block flex">
        <img src="<?= urlOf('frontend/assets/images/access.png') ?>" alt="" class="h-20">
      </div>
      <div class="mt-5">
        <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Access on all devices</h5>
        <p class="mb-3 text-lg md:text-lg lg:text-lg text-gray-500">Save your files and have them on your laptop , phone or the web</p>
      </div>
    </div>
    <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
      <div class="justify-center lg:block flex">
        <img src="<?= urlOf('frontend/assets/images/share.png') ?>" alt="" class="h-20">
      </div>
      <div class="mt-5">
        <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Share and collaborate</h5>
        <p class="mb-3 text-lg text-gray-500">Send, receive and work together with your friends on every file</p>
      </div>
    </div>
    <div class="max-w-sm p-6 border border-gray-200 hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
      <div class="justify-center lg:block flex">
        <img src="<?= urlOf('frontend/assets/images/security.png') ?>" alt="" class="h-20">
      </div>
      <div class="mt-5">
        <h5 class="mb-2 text-2xl md:text-xl font-semibold tracking-tight text-gray-900 dark:text-black">Unbreakable security</h5>
        <p class="mb-3 text-lg md:text-lg lg:text-lg text-gray-500">Keep your private files confidential with the highest level of encryption</p>
      </div>
    </div>
  </div>
</section>
<!-- ============== Teams =================-->
<section class="flex flex-wrap text-center justify-center md:text-left px-5 py-5 lg:py-20">
  <div class=" mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
      <div class="mx-auto mb-10 lg:max-w-xl sm:text-center">
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          Know Our Team
        </p>
      </div>
      <div class="grid gap-10 mx-auto lg:grid-cols-2 lg:max-w-screen-lg">
        <div class="grid sm:grid-cols-3 p-5 border-lg border hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
          <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
            <img class="absolute object-cover w-full h-full rounded" src="./frontend/assets/images/Darshit.jpg" alt="Person" />
          </div>
          <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
            <p class="text-lg font-bold">Darshit Dudhaiya</p>
            <p class="mb-4 text-xs text-gray-800">Graphic Designer/Web devloper</p>
            <p class="mb-4 text-sm tracking-wide text-gray-800">
              Vincent Van Gogh’s most popular painting, The Starry Night.
            </p>
            <div class="flex items-center space-x-3">
              <a href="https://www.linkedin.com/in/darshitdudhaiya/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/> </svg>
              </a>
              <a href="https://github.com/darshitdudhaiya" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg width="26" height="26" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="grid sm:grid-cols-3 p-5 border-lg border hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-200">
          <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
            <img class="absolute object-cover w-full h-full rounded" src="./frontend/assets/images/Jay.jpg" alt="Person" />
          </div>
          <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
            <p class="text-lg font-bold">Jay Patel</p>
            <p class="mb-4 text-xs text-gray-800">Graphic Designer/Web devloper</p>
            <p class="mb-4 text-sm tracking-wide text-gray-800">
              Amet I love liquorice jujubes pudding croissant I love pudding.
            </p>
            <div class="flex items-center space-x-3">
              <a href="https://www.linkedin.com/in/patel-jay-88804a260/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/> </svg>
              </a>
              <a href="https://github.com/Jay-1703" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg width="26" height="26" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
               </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php
include("./frontend/assets/components/footer.php");
?>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->


</html>
<!-- 
  https://www.pcloud.com/
  https://www.box.com/home
  https://tailwindcomponents.com/component/responsive-sidebar
 -->