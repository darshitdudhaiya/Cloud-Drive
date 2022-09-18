<?php

$file=$_GET["file"];
$location="./Files/Userdata/User_deleted_data/$file";

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


    <div class="relative  z-10" id="model" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Enter email</h2>
                        <div class="sm:flex sm:items-start">
                            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="sharebtn" class="mt-3 bg-blue-500 hover:bg-blue-600 inline-flex w-full justify-center rounded-md border px-4 py-2 text-base font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Share</button>
                        <button type="button" id="cancel" class="inline-flex w-full justify-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./Asset/js/jquery-3.6.0.min.js"></script>
    <script>
    
        $("#cancel").on("click", function() {
            open("./home.php","_self");
        });

        $("#sharebtn").on("click", function() {
            let email = $("#email").val();
            let file = "<?php echo $file?>";
            console.log(file);

            $.ajax({
                url: "/php/Query/share.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    email: email,
                    file: file
                }),
                success: function(data) {
                    console.log(data);
                }
            });

            open("./home.php","_self");
            

        });
    </script>


</body>

</html>