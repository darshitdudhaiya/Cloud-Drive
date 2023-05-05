<?php
include("../includes/init.php");
include("../components/header.php");
?>
<div class="flex lg:justify-left md:justify-left sm:justify-center justify-center">
    <div class="lg:mt-40 sm:mt-10 md:mt-10 mt-28 ">
        <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm text-gray-600 dark:text-gray-400">
                <a class="flex items-center hover:text-blue-600" href="#">
                    Home
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
    
            <li class="text-sm text-gray-600 dark:text-gray-400">
                <a class="flex items-center hover:text-blue-600" href="#">
                    App Center
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
    
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                Application
            </li>
        </ol>
    </div>
</div>
<div class="flex justify-center">
    <div class="mt-2">

        <form class="my-10 w-96 border border-gray-100 p-7 shadow-xl" id="form">
            <div class="relative z-0 w-full mt-6 mb-6 group text-center">
                <span class="block text-2xl font-semibold text-indigo-600 xl:inline sm:inline md:inline lg:inline">Create
                    your account</span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group text-center hidden" id="error">
                <span id="error_display" class="text-md font-bold text-rose-500 xl:inline sm:inline md:inline lg:inline">
                </span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group">
                <input type="text" name="floating_email" id="name" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-indigo-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group">
                <input type="email" name="floating_email" id="email" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-indigo-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    address</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="floating_password" id="password" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focborder peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="repeat_password" id="conform_password" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 dark:focus:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
                    password</label>
            </div>
            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="w-80 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                    Create account
                </span>
            </button>
            <div class="text-center">
                <a href="<?= urlOf('frontend/assets/pages/login.php') ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">I have an account.</a><br>
            </div>
        </form>
    </div>
</div>
<?php
include("../components/footer.php");
?>
<script>
     $("#form").on("submit", function(e) {
        e.preventDefault();
        if (
            $("#name").val() == "" ||
            $("#email").val() == "" ||
            $("#password").val() == "" ||
            $("conform_password").val() == ""
        ) {
            $("#form").trigger("reset");
        } else if ($("#password").val() != $("#conform_password").val()) {
            $("#password").addClass('dark:border-rose-500');
            $("#conform_password").addClass('dark:border-rose-500');
            $("#error_display").html("Password is not match");     
            $("#error").removeClass("hidden");     
            setTimeout(() => {
                $("#error").addClass("hidden");
            }, 3000);
        } else {
            $.ajax({
                url: "http://localhost/drive/backend/queries/adduser.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    name: $("#name").val(),
                    email: $("#email").val(),
                    password: $("#password").val()
                }),
                success: function(data) {
                    if (data == 1) {
                        open("../components/dashboard.php", "_self");
                    } else {
                        $("#error_display").html("This email is already registered on drive");
                        $("#form").trigger("reset");
                    }
                }
            });
        }
    });
</script>
</body>

</html>