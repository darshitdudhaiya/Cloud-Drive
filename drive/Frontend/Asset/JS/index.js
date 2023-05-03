/*-----------------------------dashboard--------------------------------- */

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

$(".logout-cancel").on("click", function () {
    $("#logout-modal").hide();
});

$(".logout").on("click", function () {
    $("#logout-modal").removeClass('hidden');
    $("#logout-modal").addClass('block');
});

$("#logout").on("click", function () {
    open("../includes/logout.php", "_self");
})

$("#user-profile-modal").hide();
$(".user-profile").on("click", function () {
    // open("../Pages/profile.php", "_self");
    $("#user-profile-modal").show();
});
$("#close-user-model").on("click", function () {
    $("#user-profile-modal").hide();
});

/*-----------------------------file_upload_dashboard--------------------------------- */
$("#cancel").on("click", function () {
    open("./dashboard.php", "_self");
});
$('#submit').on('click', function (e) {
    e.preventDefault();
    let form_data = new FormData();
    let no = $("li").length - 1;

    for (i = 0; i < no; i++) {
        form_data.append('file', FILES[Object.keys(FILES)[i]]);
        $.ajax({
            method: 'POST',
            url: '/php/Files/upload.php',
            processData: false,
            contentType: false,
            data: form_data,
            success: (response) => {
                open("./home.php", "_self");
            }
        });
    }
});


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