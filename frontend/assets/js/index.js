/*-----------------------------theme Changing--------------------------------- */
const switchToggle = document.querySelector("#switch-toggle");
const sidebarTheme = document.querySelector(".customTheme");
const customThemeBody = document.querySelector(".customThemeBody");
const customThemeModel = document.querySelector(".customThemeModel");
const customThemeModelShare = document.querySelector(".customThemeModelShare");
const customThemeModelDelete = document.querySelector(
  ".customThemeModelDelete"
);
const customThemeModelRestore = document.querySelector(
  ".customThemeModelRestore"
);
const customThemeModelDeletePermenantly = document.querySelector(
  ".customThemeModelDeletePermenantly"
);
const customThemeModelRename = document.querySelector(
  ".customThemeModelRename"
);
const customThemeModelUser = document.querySelector(".customThemeModelUser");
const customThemeModelMenu = document.querySelector(".customThemeModelMenu");
let isDarkmode = false;

const darkIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
</svg>`;

const lightIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
</svg>`;

function toggleTheme() {
  isDarkmode = !isDarkmode;
  localStorage.setItem("isDarkmode", isDarkmode);
  switchTheme();
}

function switchTheme() {
  if (isDarkmode) {
    switchToggle.classList.remove("bg-yellow-500", "-translate-x-2");
    switchToggle.classList.add("bg-gray-700", "translate-x-full");
    sidebarTheme.classList.remove("bg-[#F3FCFC]");
    sidebarTheme.classList.add(
      "bg-[#061b2e]",
      "text-white",
      "shadow-white",
      "shadow-md"
    );
    customThemeBody.classList.remove("bg-white", "text-black");
    customThemeBody.classList.add("bg-[#061b2e]", "text-white");
    customThemeModel.classList.remove("bg-white", "text-black");
    customThemeModel.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelShare.classList.remove("bg-white", "text-black");
    customThemeModelShare.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelDelete.classList.remove("bg-white", "text-black");
    customThemeModelDelete.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelRestore.classList.remove("bg-white", "text-black");
    customThemeModelRestore.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelDeletePermenantly.classList.remove(
      "bg-white",
      "text-black"
    );
    customThemeModelDeletePermenantly.classList.add(
      "bg-[#142f4c]",
      "text-white"
    );
    customThemeModelRename.classList.remove("bg-white", "text-black");
    customThemeModelRename.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelUser.classList.remove("bg-white", "text-black");
    customThemeModelUser.classList.add("bg-[#142f4c]", "text-white");
    customThemeModelMenu.classList.remove("bg-white", "text-black");
    customThemeModelMenu.classList.add("bg-[#142f4c]", "text-white");
    $(".card").removeClass("bg-[#F3FCFC]");
    $(".card").removeClass("text-black");
    $(".card").addClass("bg-[#142f4c]");
    $(".card").addClass("text-white");
    $(".icon").addClass("text-white");
    $("#list").removeClass("bg-gray-300");
    $("#list").addClass("bg-[#142f4c]");
    $(".btn-text").removeClass("text-gray-800");
    $(".btn-text").addClass("text-white");

    setTimeout(() => {
      switchToggle.innerHTML = darkIcon;
    }, 250);
  } else {
    switchToggle.classList.add("bg-yellow-500", "-translate-x-2");
    switchToggle.classList.remove("bg-gray-700", "translate-x-full");
    sidebarTheme.classList.add("bg-[#F3FCFC]");
    sidebarTheme.classList.remove(
      "bg-[#061b2e]",
      "text-white",
      "shadow-white",
      "shadow-md"
    );
    customThemeBody.classList.add("bg-white", "text-black");
    customThemeBody.classList.remove("bg-[#061b2e]", "text-white");
    customThemeModel.classList.add("bg-white", "text-black");
    customThemeModel.classList.remove("bg-[#142f4c]", "text-white");
    customThemeModelShare.classList.add("bg-white", "text-black");
    customThemeModelShare.classList.remove("bg-[#142f4c]", "text-white");
    customThemeModelDelete.classList.add("bg-white", "text-black");
    customThemeModelDelete.classList.remove("bg-[#142f4c]", "text-white");
    customThemeModelRestore.classList.add("bg-white", "text-black");
    customThemeModelRestore.classList.remove("bg-[#142f4c]", "text-white");
    customThemeModelDeletePermenantly.classList.add("bg-white", "text-black");
    customThemeModelDeletePermenantly.classList.remove(
      "bg-[#142f4c]",
      "text-white"
    );
    customThemeModelRename.classList.add("bg-white", "text-black");
    customThemeModelRename.classList.remove("bg-[#142f4c]", "text-white");
    customThemeModelUser.classList.add("bg-white", "text-black");
    customThemeModelUser.classList.remove("bg-[#142f4c]", "text-white");
    $(".card").removeClass("bg-[#142f4c]");
    $(".card").removeClass("text-white");
    $(".card").addClass("bg-[#F3FCFC]");
    $(".card").addClass("text-black");
    $(".icon").removeClass("text-white");
    $("#list").addClass("bg-gray-300");
    $("#list").removeClass("bg-[#142f4c]");
    $("#list").addClass("text-black");
    $(".btn-text").addClass("text-gray-800");
    $(".btn-text").removeClass("text-white");

    setTimeout(() => {
      switchToggle.innerHTML = lightIcon;
    }, 250);
  }
}

function storage() {
  let maxStorage = parseFloat(
    document
      .getElementById("usedDataSize")
      .innerText.replace(" KB", "")
      .replace(" MB", "")
      .replace(" GB", "")
  );
  let str = document.getElementById("usedDataSize").innerText;
  console.log(str);
  if (str.includes("KB") == true) {
    let data = parseInt(
      document.getElementById("usedDataSize").innerText.replace(" KB", "")
    );
    let percentage = Math.ceil((100 * data) / 3000000);
    document.getElementById("usedStorage").style.width = `${percentage}%`;
  } else if (str.includes("MB") == true) {
    let data = parseInt(
      document.getElementById("usedDataSize").innerText.replace(" MB", "")
    );
    let percentage = Math.ceil((100 * data) / 3000);
    document.getElementById("usedStorage").style.width = `${percentage}%`;
  } else if (str.includes("GB") == true) {
    let data = parseInt(
      document.getElementById("usedDataSize").innerText.replace(" GB", "")
    );
    let percentage = Math.ceil((100 * data) / 3);
    document.getElementById("usedStorage").style.width = `${percentage}%`;
  } else {
    document.getElementById("usedStorage").style.width = `0%`;
  }

  if (str.includes("GB") == true) {
    if (maxStorage >= 2.5) {
      $("#storageAlert").removeClass("hidden");
    } else if (maxStorage < 2.5) {
      $("#storageAlert").addClass("hidden");
    }
  }
}

$("#loading-image")
  .bind("ajaxStart", function () {
    $(this).show();
  })
  .bind("ajaxStop", function () {
    $(this).hide();
  });

$(document).ready(function () {
  var fullBoxWidth = $(".box").height();
  $("#toggleBtn").click(function () {
    var boxWidth = $(".box").height();
    if (boxWidth != 0) {
      $(".box").animate({
        height: 0,
      });
      $(".box").addClass("hidden");
      $(".box").css("display", "none ");
    } else if (boxWidth == fullBoxWidth) {
      $(".box").removeClass("hidden");
      $(".box").css("display", "block");
    } else {
      $(".box").removeClass("hidden");
      $(".box").animate({
        height: fullBoxWidth,
      });
      $(".box").css("display", "block");
    }
  });
  filesload("My Drive");
  switchTheme();
  loadUserDetails();
  storage();
});

/*----------------------------- User-details --------------------------------- */
let userData;

function loadUserDetails() {
  if ("token" in localStorage) {
    token = localStorage.getItem("token");
    userData = JSON.parse(atob(token.split(".")[1]));
    $("#userImage").attr("src", userData.image);
    $("#userName").text(userData.name);
    $("#username").attr("value", userData.name);
    $("#userimage-update-model").attr("src", userData.image);
  } else {
    if (
      window.location ==
      "http://localhost/drive/frontend/assets/components/dashboard"
    ) {
      window.location.href =
        "http://localhost/drive/frontend/assets/pages/error.php";
    }
  }
}
/*-----------------------------ajax calls on first load--------------------------------- */

function notificationLoad() {
  $.ajax({
    url: "/drive/backend/api/ui/notification/",
    method: "POST",
    data: JSON.stringify({
      jwtToken: localStorage.getItem("token"),
    }),
    success: function (res, textStatus, jqXHR) {
      let data = JSON.parse(jqXHR.responseText);
      if (data.notificationCount > 0) {
        data.Cards.forEach((element) => {
          $("#notificationBar").append(element);
        });
        $("#notificationCount").text(data.notificationCount);
      } else {
        $("#notificationCount").parent().remove();
        $("#notificationBar").html($("#notificationBar")[0].children[0]);
      }
    },
  });
}
notificationLoad();
function filesload(String) {
  $("#filesdata").html("");
  $("#filesdataRow").html("");
  $.ajax({
    url: "/drive/backend/api/ui/dashboard/",
    method: "POST",
    data: JSON.stringify({
      layout: String,
      jwtToken: localStorage.getItem("token"),
    }),
    success: function (res, textStatus, jqXHR) {
      let data = JSON.parse(jqXHR.responseText);
      $("#usedDataSize").text(data.UsedSpace);
      if (data.Cards.length > 0) {
        data.Cards.forEach((element) => {
          $("#filesdata").append(element);
        });
        data.Rows.forEach((element) => {
          $("#filesdataRow").append(element);
        });
        data.Menu.forEach((element) => {
          $("#list").html("");
          $("#list").append(element);
        });
        switchTheme();
        localStorage.setItem("layout", String);
        $("#currentLayout").text(String);
        $("#searchedFilename").val("");
      } else {
        $("#filesdata").parent().append(data.noDataResponese[0]);
        $("#filesdataRow").parent().parent().remove();
      }
    },
  });
}
/*-----------------------------dashboard--------------------------------- */

let form_data1 = new FormData();

function openSideBar() {
  $(".navbar").removeClass("hidden");
}

function close_navbar() {
  $(".navbar").addClass("hidden");
}

function close_notification_bar() {
  $(".notificationBar").addClass("hidden");
}

function notificationShareBtn() {
  $("#filesdata").html("");
  $("#filesdataRow").html("");
  filesload("Shared");
  $("#notificationSection").addClass("hidden");
}

function notificationClose() {
  $("#notificationSection").addClass("hidden");
  $(".navbar").addClass("z-10");
}

function notificationButtonOpen() {
  $("#notificationSection").removeClass("hidden");
  $(".navbar").removeClass("z-10");
}

function getFileExtension(filename) {
  const extension = filename.split(".").pop();
  return extension;
}

function changeLayout(e) {
  let layout = e.children[0].getAttribute("data-layout");
  if (layout == "table") {
    $("#changeLayout").html(
      `<svg data-layout="grid" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-grid-3x3-gap-fill w-7 h-7" viewBox="0 0 16 16"> <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/> </svg>`
    );
    $(".listLayout").addClass("hidden");
    $(".gridLayout").removeClass("hidden");
    $("#searchBar").removeClass("hidden");
  }
  if (layout == "grid") {
    $("#changeLayout").html(
      `<svg data-layout="table" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-layout-text-sidebar-reverse w-7 h-7" viewBox="0 0 16 16"> <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/> <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z"/> </svg>`
    );
    $(".listLayout").removeClass("hidden");
    $(".gridLayout").addClass("hidden");
    $("#searchBar").addClass("hidden");
  }
}

function deletePermenantly(e) {
  $("#list").css("display", "none");
  let filename = e.value;
  $("#delete_permenantly_model_details").html(
    "Do you want to delete permenantly" + "<b>" + filename + "</b>"
  );
  $(".delete-permenantly-model").removeClass("hidden");
}

function restore(e) {
  $("#list").css("display", "none");
  let restoreFilename = e.value;
  $("#restore_model_details").html(
    "Do you want to restore <b>" + restoreFilename + "</b> ?"
  );
  $(".restore-model").removeClass("hidden");
}

function deleteFile(e) {
  $("#list").css("display", "none");
  let delete_filename = e.value;
  $("#delete_model_details").html(
    "Do you want to delete <b>" + delete_filename + "</b> ?"
  );
  $(".delete-model").removeClass("hidden");
}

function share(e) {
  $("#list").css("display", "none");
  let share_filename = e.value;
  $("#share_model_details").html("Sharing <b>" + share_filename + "</b>");
  $(".share-model").removeClass("hidden");
}

function renameFile(e) {
  let rename_filename = e.value;
  $("#rename_model_details").html("Renaming <b>" + rename_filename + "</b>");
  $(".rename-model").removeClass("hidden");
}

function update_profile() {
  form_data1.append("username", $("#username").val());
  form_data1.append("uid", userData.userid);

  $.ajax({
    url: "/drive/backend/queries/update_profile.php",
    method: "POST",
    processData: false,
    contentType: false,
    data: form_data1,
    success: function (data) {
      if (data == 1) {
        loadUserDetails();
        $("#userImage").attr("src", "");
        var image = document.getElementById("userImage");
        var timestamp = new Date().getTime();
        var queryString = "?t=" + timestamp;
        image.src = userData.image + queryString;
        // $("#userImage").attr("src?t=", src);
        $(".profile-model").addClass("hidden");

        // window.location.reload();
      } else {
        alert("user profile was not update.........");
      }
    },
  });
}

function dismissNotification(e) {
  let id = e.value;
  $.ajax({
    url: "/drive/backend/queries/change_notification_status.php",
    type: "POST",
    data: JSON.stringify({
      record_id: id,
    }),
    dataType: "json",
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if ((data = 1)) {
        $("#notificationBar").html($("#notificationBar")[0].children[0]);
        notificationLoad();
        // $(id).remove();
        // window.location.reload();
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
}

function searchFile(e) {
  let searchString = e.value;
  let layout = localStorage.getItem("layout");

  if (searchString == "") {
    if (layout == "My Drive") {
      filesload("My Drive");
    }
    if (layout == "Shared") {
      filesload("Shared");
    }
    if (layout == "Recycle Bin") {
      filesload("Recycle Bin");
    }
  } else {
    $.ajax({
      url: "/drive/backend/api/SearchFiles/",
      method: "POST",
      data: JSON.stringify({
        jwtToken: localStorage.getItem("token"),
        layout: layout,
        search_string: searchString,
      }),
      contentType: "application/json",
      success: function (res, textStatus, jqXHR) {
        let data = JSON.parse(jqXHR.responseText);
        if (data.Cards.length > 0) {
          $("#filesdata").html("");
          $("#filesdataRow").html("");
          data.Cards.forEach((element) => {
            $("#filesdata").append(element);
          });
          data.Rows.forEach((element) => {
            $("#filesdataRow").append(element);
          });
          switchTheme();
        } else {
          // $("#filesdata").parent().append(data.noDataResponese[0]);
          // $("#filesdataRow").parent().parent().remove();
        }
      },
    });
  }
}

$("#my_drive").on("click", function () {
  $("#filesdata").html("");
  filesload("My Drive");
  $(".navbar").addClass("hidden");
});

$("#recycle_bin").on("click", function () {
  $("#filesdata").html("");
  $("#filesdataRow").html("");
  filesload("Recycle Bin");
  $(".navbar").addClass("hidden");
});

$("#recent").on("click", function () {
  $("#filesdata").html("");
  $("#filesdataRow").html("");
  filesload("My Drive");
  $(".navbar").addClass("hidden");
});

$("#share").on("click", function () {
  $("#filesdata").html("");
  $("#filesdataRow").html("");
  filesload("Shared");
  $(".navbar").addClass("hidden");
});

$("#loading-image").hide();

// $('#myTable').dataTable({
//   "autoWidth": false,
//   columns: [{
//       "width": "0%"
//     },
//     {
//       "width": "20%"
//     },
//     {
//       "width": "10%"
//     },
//   ],
// });

$(".Add").on("click", function () {
  $("#uploadDropdown").removeClass("hidden");
  // document.addEventListener("click", onClickOutside);
});

$("#addFile").on("click",function (){
    open("./file_upload_dashboard", "_self");
})
$("#addFolder").on("click",function (){
  $(".folder-model").removeClass("hidden");
})

$("#folder_model_cancel").on("click", function () {
  $(".folder-model").addClass("hidden");
});

$("#close-user-model").on("click", function () {
  $("#user-profile-modal").hide();
});

$("#delete_model_cancel").on("click", function () {
  $(".delete-model").addClass("hidden");
});

$("#share_model_cancel").on("click", function () {
  $(".share-model").addClass("hidden");
});

$("#delete_permenantly_model_cancel").on("click", function () {
  $(".delete-permenantly-model").addClass("hidden");
});

$("#restore_model_cancel").on("click", function () {
  $(".restore-model").addClass("hidden");
});

$("#rename_model_cancel").on("click", function () {
  $(".rename-model").addClass("hidden");
});

$("#notificationButton").on("click", function () {
  $("#notificationSection").removeClass("hidden");
});

$("#notificationColseBtn").on("click", function () {
  $("#notificationSection").addClass("hidden");
});

$(".logout_btn").on("click", function () {
  $(".logout-model").removeClass("hidden");
});

$(".logout_model_cancel").on("click", function () {
  $(".logout-model").addClass("hidden");
});

$(".logout_model_btn").on("click", function () {
  open("../includes/logout.php", "_self");
});

$(".user-profile").on("click", function () {
  $(".profile-model").removeClass("hidden");
});

$(".profile_update_cancel_btn").on("click", function () {
  $(".profile-model").addClass("hidden");
});

$("#settingColseBtn").on("click", function () {
  $("#settingSection").addClass("hidden");
});

$("#restore_model_btn").on("click", function () {
  let restored_filename = $("#restore_model_details")
    .children("b")[0]
    .outerHTML.replace('<b class="text-black">', "")
    .replace("</b>", "");
  $.ajax({
    url: "/drive/backend/queries/deleted_file_restore.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      file: restored_filename,
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if (data == 1) {
        $(".restore-model").addClass("hidden");
        $("#filesdata").html("");
        $("#filesdataRow").html("");
        filesload("Recycle Bin");
        // window.location.reload();
      } else {
        alert("file didn't restored yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});

$("#delete_permenantly_model_btn").on("click", function () {
  let deletedPermenantlyFilename = $("#delete_permenantly_model_details")
    .children("b")[0]
    .outerHTML.replace('<b class="text-black">', "")
    .replace("</b>", "");

  $.ajax({
    url: "/drive/backend/queries/delete_file_permenantly.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      file: deletedPermenantlyFilename,
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if (data == 1) {
        $(".delete-permenantly-model").addClass("hidden");
        $("#filesdata").html("");
        $("#filesdataRow").html("");
        filesload("Recycle Bin");
        // window.location.reload();
      } else {
        alert("file didn't deleted Permenantly yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});

$("#delete_model_btn").on("click", function () {
  let file = $("#delete_model_details")
    .children("b")[0]
    .outerHTML.replace("<b>", "")
    .replace("</b>", "");

  $.ajax({
    url: "/drive/backend/queries/delete_file.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      file: file,
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if (data == 1) {
        $(".delete-model").addClass("hidden");
        $("#filesdata").html("");
        $("#filesdataRow").html("");
        filesload("My Drive");
        // window.location.reload();
      } else {
        alert("file didn't deleted yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});

$("#share_model_btn").on("click", function () {
  let shared_filename = $("#share_model_details")
    .children("b")[0]
    .outerHTML.replace("<b>", "")
    .replace("</b>", "");
  let email = $("#email").val();

  $.ajax({
    url: "/drive/backend/queries/share_file.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      email: email,
      file: shared_filename,
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if (data == 1) {
        $(".share-model").addClass("hidden");
        $(".navbar").removeClass("lg:hidden");
      } else {
        alert("file didn't shared yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});

$("#folder_model_btn").on("click", function () {
  // let shared_filename = $("#share_model_details")
  //   .children("b")[0]
  //   .outerHTML.replace("<b>", "")
  //   .replace("</b>", "");
  let folderName = $("#folderName").val();

  $.ajax({
    url: "/drive/backend/queries/new_folder.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      folderName: folderName,
      userId:userData.userid
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (jqXHR) {
      if (jqXHR.status == 200) {
        $(".folder-model").addClass("hidden");
        $(".navbar").removeClass("lg:hidden");
      } else {
        alert("folder didn't created yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});

$("#rename_model_btn").on("click", function () {
  let renamed_filename = $("#rename_model_details")
    .children("b")[0]
    .outerHTML.replace("<b>", "")
    .replace("</b>", "");
  let new_name = $("#name").val();

  $.ajax({
    url: "/drive/backend/queries/rename_file.php",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      new_name: new_name,
      file: renamed_filename,
    }),
    beforeSend: function () {
      $("#loading-image").show();
    },
    success: function (data) {
      if (data == 1) {
        $("#filesdata").html("");
        $("#filesdataRow").html("");
        filesload("My Drive");
        $(".delete-model").addClass("hidden");
      } else {
        alert("file didn't renamed yet");
      }
    },
    complete: function () {
      $("#loading-image").hide();
    },
  });
});
/*-----------------------------Drop-down Menu--------------------------------- */
const elements = document.getElementsByClassName("card");

const listElement = document.getElementById("list");

const uploadDropdown = document.getElementById("uploadDropdown");

const onClickOutside = (event) => {
  listElement.style.display = "none";
  // uploadDropdown.style.display = "none";
};

listElement.addEventListener("contextmenu", (event) => {
  event.stopPropagation();
});

document.addEventListener("contextmenu", (event) => {
  listElement.style.display = "none";
});

listElement.addEventListener("click", (event) => {
  event.stopPropagation();
});

function dropDown(String, e, event, cardType) {
  event.preventDefault();
  event.stopPropagation();
  document.addEventListener("click", onClickOutside);
  const x = event.offsetX;
  const y = event.offsetY - 15;
  if (cardType == "my_drive") {
    document
      .getElementById("download-link")
      .setAttribute(
        "href",
        `../../../backend/queries/download_file.php?file=${String}`
      );
    document
      .getElementById("delete-context")
      .setAttribute("value", `${String}`);
    document.getElementById("share-context").setAttribute("value", `${String}`);
  } else if (cardType == "shared") {
    $("#download-link").attr(
      "href",
      `../../../backend/queries/download_file.php?file=${String}`
    );
  } else if (cardType == "recycle_bin") {
    $("#restore-context").attr("value", `${String}`);
    $("#delete-permenently-context").attr("value", `${String}`);
  }
  listElement.style.display = "block";
  listElement.style.zIndex = 9999;
  listElement.style.top = mouseY(event) + "px";
  listElement.style.left = mouseX(event) + "px";
}

function mouseX(evt) {
  if (evt.pageX) {
    return evt.pageX;
  } else if (evt.clientX) {
    return (
      evt.clientX +
      (document.documentElement.scrollLeft
        ? document.documentElement.scrollLeft
        : document.body.scrollLeft)
    );
  } else {
    return null;
  }
}

function mouseY(evt) {
  if (evt.pageY) {
    return evt.pageY;
  } else if (evt.clientY) {
    return (
      evt.clientY +
      (document.documentElement.scrollTop
        ? document.documentElement.scrollTop
        : document.body.scrollTop)
    );
  } else {
    return null;
  }
}
