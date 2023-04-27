<?php
include("../init.php");
include("../Components/Header.php");
?>
<div class="flex justify-center">
    <div class="mt-20">
        <form class="my-20 w-96 border border-gray-100 p-7 shadow-xl" id="form">
            <div class="relative z-0 w-full mt-6 mb-6 group text-center">
                <span class="block text-2xl font-semibold text-indigo-600 xl:inline sm:inline md:inline lg:inline">Login to your account</span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group">
                <input type="email" name="floating_email" id="email" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="floating_password" id="password" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
            
            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="w-80 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                    <a href="#">
                        Login
                    </a>
                </span>
            </button>
            <div class="text-center">
                <a href="<?= urlOf('Frontend/Asset/Pages/Signup.php') ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Don't have an account? Sign up</a><br>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reset password</a>
            </div>
        </form>
    </div>
</div>
<?php
include("../Components/Footer.php");
?>
<script>
     $("#form").on("submit", function (e) {
        e.preventDefault();

        if (
            $("#email").val() == "" ||
            $("#password").val() == "" 
        ) {
            alert("Fill the all filds !!");
            $("#form").trigger("reset");
        }
        else {
            $.ajax({
                url: "http://localhost/drive/Backend/Query/login_check.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    email: $("#email").val(),
                    password: $("#password").val()
                }),
                success: function (data) {
                    if (data == 1) {
                        open("../../../index.php", "_self");
                    } else {
                        // $("#modal1").show();
                    }
                    $("#form-data").trigger("reset");
                }
            });
        }
    });
</script>