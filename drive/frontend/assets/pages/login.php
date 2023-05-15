<?php
include("../includes/init.php");
include("../components/header.php");
?>
<!-- ------------ Loader -------------- -->
<div class="relative z-10" id="loading-image" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="absolute my-40 lg:my-80 inset-0 flex max-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
        <div aria-label="Loading..." role="status" class="">
            <svg class="h-10 w-10 animate-spin" viewBox="3 3 18 18">
                <path class="fill-indigo-200" d="M12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5ZM3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12Z"></path>
                <path class="fill-indigo-800" d="M16.9497 7.05015C14.2161 4.31648 9.78392 4.31648 7.05025 7.05015C6.65973 7.44067 6.02656 7.44067 5.63604 7.05015C5.24551 6.65962 5.24551 6.02646 5.63604 5.63593C9.15076 2.12121 14.8492 2.12121 18.364 5.63593C18.7545 6.02646 18.7545 6.65962 18.364 7.05015C17.9734 7.44067 17.3403 7.44067 16.9497 7.05015Z"></path>
            </svg>
        </div>
    </div>
</div>
<div class="flex justify-center">
    <div class="mt-20">
        <form class="my-20 w-96 border border-gray-100 p-7 pb-1 shadow-xl" id="form">
            <div class="relative z-0 w-full mt-6 mb-6 group text-center">
                <span class="block text-2xl font-semibold text-indigo-600 xl:inline sm:inline md:inline lg:inline">Login to your account</span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group text-center hidden" id="error">
                <span id="error_display" class="text-md font-bold text-rose-500 xl:inline sm:inline md:inline lg:inline">
                </span>
            </div>
            <div class="relative z-0 w-full mt-6 mb-6 group">
                <input type="email" name="floating_email" id="email" class="block  py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-indigo-600 focus:outline-none focus:ring-0  peer" placeholder=" " onkeypress="check()" required />
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
                <a href="<?= urlOf('frontend/assets/pages/signup.php') ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Don't have an account? Sign up</a><br>
                <a href="<?= urlOf('frontend/assets/pages/forgot_password_form.php') ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reset password</a>
            </div>
            <div class="flex justify-center">
                <div class="g_id_signin p-5" data-type="standard"></div>
            </div>
        </form>
    </div>
</div>

<?php
include("../components/footer.php");
?>
<script>
    function decodeJwtResponse(token) {
        let base64Url = token.split('.')[1]
        let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        let jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        return JSON.parse(jsonPayload)
    }

    let responsePayload;

    function handleCredentialResponse(response) {
        // decodeJwtResponse() is a custom function defined by you
        // to decode the credential response.
        responsePayload = decodeJwtResponse(response.credential);

        // console.log("ID: " + responsePayload.sub);
        // console.log('Full Name: ' + responsePayload.name);
        // console.log('Given Name: ' + responsePayload.given_name);
        // console.log('Family Name: ' + responsePayload.family_name);
        // console.log("Image URL: " + responsePayload.picture);
        // console.log("Email: " + responsePayload.email);

        $("#email").val(responsePayload.email);
    }

    $('#loading-image').hide();

    function check() {
        let email = $("#email").val();
        $("#email").val(email.replace("+", "").replace("-", "").replace("|", "").replace("&", "").replace('"', "").replace("'", "").replace("`", ""));
    }

    $("#form").on("submit", function(e) {
        e.preventDefault();

        if (
            $("#email").val() == "" ||
            $("#password").val() == ""
        ) {
            $("#password").addClass('dark:border-rose-500');
            $("#form").trigger("reset");
        } else {
            $.ajax({
                url: "http://localhost/drive/backend/queries/login_check.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    email: $("#email").val(),
                    password: $("#password").val()
                }),
                beforeSend: function() {
                    $('#loading-image').show();
                },
                success: function(data) {
                    if (data == 1) {
                        open("../components/dashboard.php", "_self");
                    } else {
                        $("#error_display").html("Email or Password is worng");
                        $("#error").removeClass("hidden");
                        setTimeout(() => {
                            $("#error").addClass("hidden");
                        }, 3000);
                        $("#email").addClass('dark:border-rose-500');
                        $("#password").addClass('dark:border-rose-500');
                        $("#form").trigger("reset");
                    }
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }
    });
</script>