<?php
include("../includes/init.php");
include("../components/header.php");
?>
<div class="flex justify-center">
    <div class="mt-20">
        <form class="my-20 w-96 border border-gray-100 p-7 shadow-xl" id="form">
            <div class="relative z-0 w-full mt-6 mb-6 group text-center">
                <span class="block text-2xl font-semibold text-indigo-600 xl:inline sm:inline md:inline lg:inline">Login to your account</span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group text-center hidden" id="error">
                <span id="error_display" class="text-md font-bold text-rose-500 xl:inline sm:inline md:inline lg:inline">
                </span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group">
                <input type="email" name="floating_email" id="email" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="floating_password" id="new_password" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">New password</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="floating_password" id="conform_new_password" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " required />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Conform new password</label>
            </div>

            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="w-80 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                    <a href="#">
                        Login
                    </a>
                </span>
            </button>
            <div class="text-center">
                <a href="<?= urlOf('frontend/assets/pages/signup') ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Don't have an account? Sign up</a><br>
            </div>
        </form>
    </div>
</div>
<?php
include("../components/footer.php");
?>
<script>
    $("#email").on("change", () => {
        let email = $("#email").val();
        if(email.includes("+") || email.includes("-") || email.includes("|") || email.includes("&")){
            $("#form").trigger("reset");
        }
        console.log(email)
    })

     $("#form").on("submit", function (e) {
        e.preventDefault();

        if (
            $("#email").val() == "" ||
            $("#new_password").val() == "" ||
            $("#conform_new_password").val() == "" 
        ) {
            alert("Fill the all filds !!");
            $("#form").trigger("reset");
        }
        else if($("#new_password").val() != $("#conform_new_password").val()){
            $("#error_display").html("Password is not match");     
            $("#error").removeClass("hidden");     
            setTimeout(() => {
                $("#error").addClass("hidden");
            }, 3000);
            $("#new_password").addClass('dark:border-rose-500');
            $("#conform_new_password").addClass('dark:border-rose-500');
        }
        else {
            $.ajax({
                url: "/drive/backend/queries/forgot_password.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    email: $("#email").val(),
                    password: $("#new_password").val()
                }),
                success: function (data) {
                    if (data == 1) {
                        open("../components/dashboard.php", "_self");
                    } else {
                        $("#error_display").html("Email not found");     
                        $("#error").removeClass("hidden");     
                        setTimeout(() => {
                            $("#error").addClass("hidden");
                        }, 3000);
                        $("#form").trigger("reset");
                    }
                }
            });
        }
    });
</script>