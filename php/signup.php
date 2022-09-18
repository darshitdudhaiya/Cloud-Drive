<?php
include("./nav.php");
?>





<!-- component -->
<div class="bg-grey-400 min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <div class="flex-shrink-0 flex items-center cursor-pointer">
                <p class='text-blue-400 font-bold text-5xl'>D</p>
                <p class='text-gray-800 font-bold text-5xl'>rive</p>
            </div>
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <form id="form-data">
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="name" placeholder="Full Name" />
                
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="email" placeholder="Email" />
                
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" id="password" placeholder="Password" />
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
            </form>


            <button type="submit" id="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500""
            >Create Account</button>

            
    </div>

    <div class="text-grey-dark mt-6">
        <a class="no-underline border-b border-blue text-blue" href="./login.php">
            Already have an account?
            Log in
        </a>.
    </div>
</div>
</div>
<script src="./Asset/js/jquery-3.6.0.min.js"></script>
<script>
    $("#submit").on("click", function(e) {
        e.preventDefault();
        if (
            $("#name").val() == "" ||
            $("#email").val() == "" ||
            $("#password").val() == "" ||
            $("#confirm_password").val() == "" 
            // !$("#password").val() == $("#confirm_password").val()
            ) {
            alert(" Requeire to fill all filds!!");
            $("#form-data").trigger("reset");

        } 
        else if ($("#password").val() != $("#confirm_password").val())
        {
            $("#form-data").trigger("reset");
            alert("worng password!!");
        }
        else {

             $.ajax({
                 url: "/php/Query/insert_user.php",
                 type: "POST",
                 contentType: "application/json",
                 data:JSON.stringify({
                     name: $("#name").val(),
                     email: $("#email").val(),
                     password: $("#password").val()
                 }),
                 success: function(data) {
                     if (data.status) {
                        open("./home.php","_self");
                        
                    }
                 }
             });
        }
    });
</script>
</body>

</html>