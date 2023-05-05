/*-----------------------------header--------------------------------- */
$(document).ready(function () {
    var fullBoxWidth = $(".box").height();

    $("#toggleBtn").click(function () {
        var boxWidth = $(".box").height();
        if (boxWidth != 0) {
            $(".box").animate({
                height: 0
            });
            $(".box").addClass("hidden");
            $(".box").css("display", "none ");
        } else if (boxWidth == fullBoxWidth) {
            $(".box").removeClass("hidden");
            $(".box").css("display", "block");
        } else {
            $(".box").removeClass("hidden");
            $(".box").animate({
                height: fullBoxWidth
            });
            $(".box").css("display", "block");
        }
    });
});

/*-----------------------------dashboard--------------------------------- */
function openSideBar(){
    $(".navbar").removeClass('hidden');
}
function close_navbar(){
    $(".navbar").addClass('hidden'); 
}
function open_notification_bar() {
    $(".notificationBar").removeClass('hidden');    
}
function close_notification_bar(){
    $(".notificationBar").addClass('hidden');    
}

$(".Add").on("click", function () {
    open("./file_upload_dashboard.php", "_self");
});

function hide_toast() {
    $("#toast-bottom-right").hide();
}
hide_toast();
$(".downloade_btn").on("click", function () {
    $("#toast-bottom-right").fadeIn();
    setTimeout(hide_toast, 4000);
});

$("#logout-modal").hide();
$(".logout-cancel").on("click", function () {
    $("#logout-modal").hide();
});
$(".logout").on("click", function () {
    $("#logout-modal").show();
});

$("#logout").on("click", function () {
    open("../includes/logout.php", "_self");
})
$("#user-profile-modal").hide();
$(".user-profile").on("click", function () {
    $("#user-profile-modal").show();
});

$("#close-user-model").on("click", function () {
    $("#user-profile-modal").hide();
});
$("#delete_model_cancel").on("click", function () {
    $(".navbar").addClass('lg:block');
    $(".delete-model").addClass("hidden");
});
$("#share_model_cancel").on("click", function () {
    $(".navbar").removeClass('hidden');
    $(".share-model").addClass("hidden");
});
/*-----------------------------file_upload_dashboard--------------------------------- */
$("#cancel").on("click", function () {
    open("./dashboard.php", "_self");
});

// /*-----------------------------login--------------------------------- */
// $("#loginForm").on("submit", function (e) {
//     e.preventDefault();

//     if (
//         $("#loginEmail").val() == "" ||
//         $("#loginPassword").val() == ""
//     ) {
//         alert("Fill the all filds !!");
//         $("#loginForm").trigger("reset");
//     }
//     else {
//         $.ajax({
//             url: "http://localhost/drive/Backend/Query/login_check.php",
//             type: "POST",
//             contentType: "application/json",
//             data: JSON.stringify({
//                 email: $("#loginEmail").val(),
//                 password: $("#loginPassword").val()
//             }),
//             success: function (data) {
//                 if (data == 1) {
//                     open("../Components/dashboard.php", "_self");
//                 } else {
//                     // $("#modal1").show();
//                 }
//                 $("#loginForm").trigger("reset");
//             }
//         });
//     }
// });

// function check() {
//     let email = $("#email").val();
//     if (email.includes("+") || email.includes("-") || email.includes("|") || email.includes("&")) {
//         $("#form").trigger("reset");
//     }
//     console.log(email);
// }

// /*-----------------------------signup--------------------------------- */
// $("#signupForm").on("submit", function (e) {
//     e.preventDefault();

//     if (
//         $("#name").val() == "" ||
//         $("#email").val() == "" ||
//         $("#password").val() == "" ||
//         $("conform_password").val() == ""
//     ) {
//         alert("Fill the all filds !!");
//         $("#form").trigger("reset");
//     } else if ($("#password").val() != $("#conform_password").val()) {
//         //   $("#modal1").show();
//         alert("password is not match");
//         $("#password").html();
//         $("#conform_password").html();
//     } else {
//         $.ajax({
//             url: "http://localhost/drive/Backend/Query/adduser.php",
//             type: "POST",
//             contentType: "application/json",
//             data: JSON.stringify({
//                 name: $("#name").val(),
//                 email: $("#email").val(),
//                 password: $("#password").val()
//             }),
//             success: function (data) {
//                 if (data == 1) {
//                     open("../Components/dashboard.php", "_self");
//                 } else {
//                     // $("#modal1").show();
//                 }
//                 $("#form-data").trigger("reset");
//             }
//         });
//     }
// });