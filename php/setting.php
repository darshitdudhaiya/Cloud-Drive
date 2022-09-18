<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Asset/css/styles.css">
    <title>Drive</title>
</head>

<body>
    <div class="flex flex-col bg-gray-800 w-64 h-screen py-4 float-left border-r ">
        <div class="flex-shrink-0 ml-10 px-10 flex items-center cursor-pointer">
            <p class='text-blue-400 font-bold text-4xl'>D</p>
            <p class='text-white font-bold text-4xl'>rive</p>
        </div>
        <div class="flex px-5 flex-col justify-between flex-1 mt-6">
            <nav>
                <a id="profile"
                    class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium"
                    href="#">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="mx-4 font-medium">Profile</span>
                </a>
                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg>
                    <span class="mx-4 font-medium">Settings</span>
                </a>
                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-key"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>

                    <span class="mx-4 font-medium">Password</span>
                </a>
            </nav>
        </div>
    </div>

    <div class="float-left" id="update-profile">
        <p class="text-2xl ml-10 tracking-tight font-extrabold text-gray-900 sm:text-5xl lg:text-7xl md:text-5xl">
            <span class="block xl:inline font-medium text-3xl md:inline lg:inline">Update Profile</span><br
                class="xl:block hidden md:block lg:block" />
            <span class="block text-xl text-gray-700 font-normal xl:block sm:block md:block ">This information will be
                displayed publicly so be careful what you share.</span>
        </p>
        <div class="w-full bg-gray-800 h-1 rounded ml-10 flex"></div>

        <!-- ========================= update form ================================ -->
        <!-- <div class="bg-grey-400 min-h-screen flex flex-col"> -->
        <div class="container max-w-sm my-3 mx-64 flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-4 py-8 rounded shadow-md text-black w-full">
                <!-- <h1 class="mb-8 text-3xl text-center">Update</h1> -->
                <div class="flex flex-col items-center mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" height="75" weigth="75" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/> </g> </svg>
                    <!-- <h4 class="mx-2 mt-2 font-medium text-white dark:text-gray-200 hover:underline">John Doe</h4> -->
                </div>
                <form id="form-data" class="mt-3">

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="name"
                        placeholder="Full Name" />

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="email"
                        placeholder="Email" />

                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" id="password"
                        placeholder="Password" />

                    <!-- <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="confirm_password" id="confirm_password" placeholder="Confirm Password" /> -->
                </form>
                <button type="submit" id="update-btn"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update
                    Account</button>
            </div>
        </div>
        <script src="./Asset/js/jquery-3.6.0.min.js"></script>
        <script>
            
            // =============================== fetch data ======================================
            $.ajax({
                url: "/php/Query/fetch-single-data.php",
                type: "POST",
                contentType: "application/json",
                success: function (data) {
                    console.log(data);
                    $("#id").val(data[0]['id']);
                    $("#name").val(data[0]['username']);
                    $("#email").val(data[0]['email']);
                    $("#password").val(data[0]['password']);
                }
            });
            // ================================== update data ==================================
            $("#update-btn").click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/php/Query/update_data.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        uid: $("#id").val(),
                        name: $("#name").val(),
                        email: $("#email").val(),
                        password: $("#password").val(),
                    }),
                    success: function (data) {
                        if (data.status) {
                            open("./setting.php", "_self");
                        }
                    }
                });
            });
        </script>
</body>

</html>