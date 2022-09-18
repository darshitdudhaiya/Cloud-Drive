<?php
session_start();
if (!isset($_SESSION["user"]))
    die("no");
include("./Query/connect.php");

$uname = $_SESSION["user"];

$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./Asset/css/styles.css" rel="stylesheet" />
    <title>Drive/home</title>
</head>

<body>
    <div class="flex flex-col bg-gray-800 w-64 h-screen py-4 float-left fixed border-r  ">
        <div class="flex-shrink-0 ml-10 px-10 flex items-center cursor-pointer">
            <p class='text-blue-400 font-bold text-4xl'>D</p>
            <p class='text-white font-bold text-4xl'>rive</p>
        </div>

        <div class="flex flex-col items-center mt-5">
            <button id="settings">
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-8" height="75" weigth="75" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" fill="white" />
                    </g>
                </svg>
                <h4 class="mx-2 mt-2 font-medium text-white dark:text-gray-200 "><?php echo $uname ?></h4>
            </button>

        </div>

        <div class="flex px-3 flex-col  justify-between flex-1 mt-6">
            <nav class="sticky fixed left-0 right-0">

                <button id="Add" class="bg-blue-500 hover:bg-blue-700 flex items-center text-xl text-white font-bold py-2 px-4 rounded-full">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
                        <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" fill="white"></path>
                        <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z" fill="white"></path>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" fill="white"></path>
                    </svg>
                    <span class="mx-4 font-mediumf">New</span>
                </button>

                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hard-drive">
                        <line x1="22" y1="12" x2="2" y2="12"></line>
                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                        <line x1="6" y1="16" x2="6.01" y2="16"></line>
                        <line x1="10" y1="16" x2="10.01" y2="16"></line>
                    </svg>

                    <span class="mx-4 font-medium">My Drive</span>
                </a>

                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium" href="#">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                        <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="white"></path>
                    </svg>
                    <span class="mx-4 font-medium">Share</span>
                </a>

                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium" href="#">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" fill="white"></path>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" fill="white"></path>
                    </svg>
                    <span class="mx-4 font-medium">Recent</span>
                </a>

                <a class="hover:bg-gray-700  flex items-center hover:text-white text-gray-300 px-4 py-2 mt-5 transition-colors duration-300 transform rounded-md text-sm font-medium" href="#">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                        <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" fill="white"></path>
                    </svg>

                    <span class="mx-4 font-medium">Recycle Bin</span>
                </a>
                <button id="logout" class="bg-blue-700 mt-10 ml-10 hover:bg-blue-700 flex items-center text-xl text-white font-bold py-2 mt-5 px-4 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 24 24" fill="none">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8m4-9-4-4m4 4-4 4m4-4H9" />
                    </svg>
                    <span class="mx-4 font-mediumf">Logout</span>
                </button>
            </nav>
        </div>
    </div>

    <div class="float-left " style="margin-left:275px;">
        <div style="width:705px" class="ml-32 flex items-center p-3  space-x-3  rounded-lg bg-gray-700 ">
            <div style="height:45px" class="flex bg-gray-200 p-4 space-x-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 mb-5 pb-2 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input style="width: 500px;" class="bg-gray-200 outline-none" type="text" placeholder="Article name or keyword..." />
            </div>

            <button type="submit" style="height:45px;" class="bg-gray-300  text-gray-800 font-sm rounded border-b-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span>Search</span>
            </button>
        </div>
        <div class="bg-white">

            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Recent</h2>

            <div class="mt-10 grid grid-rows-2 grid-cols-3 gap-5">

                <?php
                if (file_exists('./Files/Userdata/' . $uid)) {

                    $files = array_diff(scandir("./Files/Userdata/" . $uid), array('.', '..'));

                    foreach ($files as $record) {
                        echo '
                    <div  class="  max-w-sm bg-white  rounded-lg border border-gray-200 shadow-xl dark:bg-gray-800 dark:border-gray-700" style="width:275px">
                    
                    
                        <div class="flex flex-col items-center pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-10" viewBox="-35 0 94 24"><path d="M8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm5,12H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM14,12H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm6.71,6.29a1,1,0,0,0-1.42,0l-.29.3V16a1,1,0,0,0-2,0v2.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2A1,1,0,0,0,20.71,18.29ZM12,18a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Z"/></svg>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">' . $record . '</h5>
                            <div class="flex space-x-1 md:mt-6">
                            <a class="text-indigo-800"  href="download.php?file=' . $record . '">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                    <svg class="fill-current" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                </button>
                            </a>
                            <br class="xl:block hidden md:block lg:block" />
                            <a class="text-indigo-800"  href="delete.php?file=' . $record . '">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </a>
                            <br class="xl:block hidden md:block lg:block" />
                            
                            <a class="text-indigo-800"  href="share_model.php?file=' . $record . '" target="_top">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/> </svg>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </a>
                            </div>
                        </div>
                    </div>
                    ';
                    }
                } else {
                    echo "";
                }
                ?>


                





            </div>
        </div>
    </div>
    <script src="./Asset/js/jquery-3.6.0.min.js"></script>
    <script>
        $("#Add").on("click", function() {
            open("./file.php", "_self");
        });

        $("#button").on("click", function() {
            $("#dropdown").toggle();
        });

        $("#settings").on("click", function() {
            open("./setting.php", "_self");
        });

        $("#logout").on("click", function() {
            open("./logout.php", "_self");
        });

        
    </script>

</body>

</html>