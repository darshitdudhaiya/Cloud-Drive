<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drive/fileupload</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hasImage:hover section {
            background-color: #F3FCFC;
        }

        .hasImage:hover button:hover {
            background: rgba(5, 5, 5, 0.45);
        }

        #overlay p,
        i {
            opacity: 0;
        }

        #overlay.draggedover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        #overlay.draggedover p,
        #overlay.draggedover i {
            opacity: 1;
        }

        .group:hover .group-hover\:text-blue-800 {
            color: #2b6cb0;
        }
    </style>
</head>

<body>
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
    <!-- ------------ File not upload Modal -------------- -->
    <div class="relative z-10 hidden" id="warningModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="absolute my-40 lg:my-40 inset-0 flex max-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="fixed z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <div class="text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h2 class="mt-2 font-bold text-gray-900" id="modal-title">Do you not upload more then 1GB of document !!!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Modal" class="flex hidden justify-center mt-8">
        <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
            <div class="m-4">
                <label class="inline-block mb-2 text-gray-500">Upload Image(jpg,png,svg,jpeg)</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                            </svg>
                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                Select a photo
                            </p>
                        </div>
                        <!-- <form id="form" enctype="multipart/form-data"> -->
                        <input type="file" class="opacity-0" id="file" multiple />
                    </label>
                </div>
            </div>
            <div class="flex p-2 space-x-4">
                <button class="px-4 py-2 text-white bg-indigo-500 rounded shadow-xl">
                    Cannel
                </button>
                <button class="px-4 py-2 text-white bg-indigo-500 rounded shadow-xl">
                    Create
                </button>
            </div>
        </div>
    </div>

    <!-- component -->
    <div class="bg-[#F3FCFC] h-screen w-screen sm:px-8 md:px-16 sm:py-8">
        <main class="container mx-auto max-w-screen-lg h-full">
            <!-- file upload modal -->
            <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                <!-- overlay -->
                <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                    <i>
                        <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                        </svg>
                    </i>
                    <p class="text-lg text-blue-700">Drop files to upload</p>
                </div>

                <!-- scroll area -->
                <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                    <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                        <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                            <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                        </p>
                        <input id="hidden-input" type="file" multiple class="hidden" />
                        <button id="button" class="my-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                            Upload a file
                        </button>
                        <!-- <p class="text-lg font-bold text-rose-500">Note : <span class="text-gray-700 font-semibold "> You can not upload document up to 1GB </span></p> -->
                    </header>

                    <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                        To Upload
                    </h1>

                    <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                        <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                            <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                            <span class="text-small text-gray-500">No files selected</span>
                        </li>
                    </ul>
                </section>

                <!-- sticky footer -->
                <footer class="flex justify-end px-8 pb-8 pt-4">
                    <button id="submit" type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mx-3 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span class="inline-flex relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#F3FCFC] text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                            Upload now
                        </span>
                    </button>

                    <button id="cancel" class="relative inline-flex items-center justify-center p-0.5 mb-2 mx-3 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span class="inline-flex relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#F3FCFC] text-black rounded-md group-hover:bg-opacity-0 hover:text-white">
                            Cancel
                        </span>
                    </button>
                </footer>
            </article>
        </main>
    </div>
    <!-- </form> -->

    <!-- using two similar templates for simplicity in js code -->
    <template id="file-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
            <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                    <h1 class="flex-1 group-hover:text-blue-800"></h1>
                    <div class="flex">
                        <span class="p-1 text-blue-800">
                            <i>
                                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                </svg>
                            </i>
                        </span>
                        <p class="p-1 size text-xs text-gray-700"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </article>
        </li>
    </template>

    <template id="image-template">
        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
            <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                    <h1 class="flex-1"></h1>
                    <div class="flex">
                        <span class="p-1">
                            <i>
                                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                </svg>
                            </i>
                        </span>

                        <p class="p-1 size text-xs"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </article>
        </li>
    </template>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/index.js"></script>
    <script>
        $('#loading-image').hide();
        let fileLength = [];

        const fileTempl = document.getElementById("file-template"),
            imageTempl = document.getElementById("image-template"),
            empty = document.getElementById("empty");

        // use to store pre selected files
        let FILES = {};

        // check if file is of type image and prepend the initialied
        // template to the target element
        // function addFile(target, file) {
        //     const isImage = file.type.match("image.*"),
        //         objectURL = URL.createObjectURL(file);

        //     const clone = isImage ?
        //         imageTempl.content.cloneNode(true) :
        //         fileTempl.content.cloneNode(true);

        //     clone.querySelector("h1").textContent = file.name;
        //     clone.querySelector("li").id = objectURL;
        //     clone.querySelector(".delete").dataset.target = objectURL;
        //     clone.querySelector(".delete").id = file.name;
        //     clone.querySelector(".size").textContent =
        //         file.size > 1024 ?
        //         file.size > 1048576 ?
        //         Math.round(file.size / 1048576) + "mb" :
        //         Math.round(file.size / 1024) + "kb" :
        //         file.size + "b";

        //     isImage &&
        //         Object.assign(clone.querySelector("img"), {
        //             src: objectURL,
        //             alt: file.name,
        //         });

        //     empty.classList.add("hidden");
        //     target.prepend(clone);

        //     FILES[objectURL] = file;
        // }


        function addFile(target, file) {
            const isImage = file.type && file.type.match("image.*");
            const objectURL = URL.createObjectURL(file);

            const clone = isImage ?
                imageTempl.content.cloneNode(true) :
                fileTempl.content.cloneNode(true);

            clone.querySelector("h1").textContent = file.name;
            clone.querySelector("li").id = objectURL;
            clone.querySelector(".delete").dataset.target = objectURL;
            clone.querySelector(".delete").id = file.name;
            clone.querySelector(".size").textContent = file.size > 1024 ?
                file.size > 1048576 ?
                Math.round(file.size / 1048576) + "mb" :
                Math.round(file.size / 1024) + "kb" :
                file.size + "b";


            isImage &&
                Object.assign(clone.querySelector("img"), {
                    src: objectURL,
                    alt: file.name,
                });

            empty.classList.add("hidden");
            target.prepend(clone);

            FILES[objectURL] = file;
        }

        // function handleFolderUpload(folder) {
        //     const files = [];
        //     const reader = new FileReader();
        //     reader.onloadend = function (event) {
        //         const zip = new JSZip();
        //         zip.loadAsync(event.target.result)
        //             .then(function (zip) {
        //                 zip.forEach(function (relativePath, zipEntry) {
        //                     if (!zipEntry.dir) {
        //                         files.push(zipEntry);
        //                     }
        //                 });
        //             })
        //             .then(function () {
        //                 // Handle the extracted files
        //                 for (const file of files) {
        //                     file.async("blob").then(function (blob) {
        //                         const fileName = file.name;
        //                         const fileObj = new File([blob], fileName);
        //                         addFile(gallery, fileObj);
        //                     });
        //                 }
        //             });
        //     };
        //     reader.readAsArrayBuffer(folder);
        // }

        function handleFolderUpload(folder) {
            const traverseFolder = (item, path) => {
                path = path || '';
                if (item.isFile) {
                    item.file((file) => {
                        addFile(gallery, file);
                    });
                } else if (item.isDirectory) {
                    const directoryReader = item.createReader();
                    directoryReader.readEntries((entries) => {
                        for (let entry of entries) {
                            traverseFolder(entry, path + item.name + '/');
                        }
                    });
                }
            };

            const reader = new FileReader();

            reader.onloadend = function(event) {
                const items = event.target.result.webkitGetAsEntry();
                traverseFolder(items);
            };

            reader.readAsDataURL(folder);
        }


        const gallery = document.getElementById("gallery"),
            overlay = document.getElementById("overlay"),
            size = document.getElementsByClassName("size");

        // click the hidden input of type file if the visible button is clicked
        // and capture the selected files
        const hidden = document.getElementById("hidden-input");
        document.getElementById("button").onclick = () => hidden.click();
        // hidden.onchange = (e) => {
        //     for (const file of e.target.files) {
        //         addFile(gallery, file);
        //         let fileName = file.name;
        //         fileLength.push({
        //             size: file.size,
        //             name: file.name
        //         });
        //     }
        // };
        hidden.onchange = (e) => {
            for (const fileOrFolder of e.target.files) {
                if (fileOrFolder.type === undefined) {
                    // Handle folder upload
                    handleFolderUpload(fileOrFolder);
                } else {
                    // Handle file upload
                    addFile(gallery, fileOrFolder);
                    let fileName = file.name;
                    fileLength.push({
                        size: file.size,
                        name: file.name
                    });
                    // ...
                }
            }
        };




        // use to check if a file is being dragged
        const hasFiles = ({
                dataTransfer: {
                    types = []
                }
            }) =>
            types.indexOf("Files") > -1;

        // use to drag dragenter and dragleave events.
        // this is to know if the outermost parent is dragged over
        // without issues due to drag events on its children
        let counter = 0;

        // reset counter and append file to gallery when file is dropped
        function dropHandler(ev) {
            ev.preventDefault();
            for (const file of ev.dataTransfer.files) {
                addFile(gallery, file);
                overlay.classList.remove("draggedover");
                counter = 0;
                let fileName = file.name;
                fileLength.push({
                    size: file.size,
                    name: file.name
                });
            }
        }

        // only react to actual files being dragged
        function dragEnterHandler(e) {
            e.preventDefault();
            if (!hasFiles(e)) {
                return;
            }
            ++counter && overlay.classList.add("draggedover");
        }

        function dragLeaveHandler(e) {
            1 > --counter && overlay.classList.remove("draggedover");
        }

        function dragOverHandler(e) {
            if (hasFiles(e)) {
                e.preventDefault();
            }
        }

        // event delegation to caputre delete events
        // fron the waste buckets in the file preview cards
        gallery.onclick = ({
            target
        }) => {
            if (target.classList.contains("delete")) {
                const ou = target.dataset.target;
                document.getElementById(ou).remove(ou);
                gallery.children.length === 1 && empty.classList.remove("hidden");
                delete FILES[ou];
                const indexOfObject = fileLength.findIndex(object => {
                    return object.name === target.id;
                });
                fileLength.splice(indexOfObject, 1);
            }
        };

        document.getElementById("cancel").onclick = () => {
            while (gallery.children.length > 0) {
                gallery.lastChild.remove();
            }
            FILES = {};
            empty.classList.remove("hidden");
            gallery.append(empty);
        };
        //------------- Convert bit length of all files ----------------
        function sizeFormat(bytes) {
            let kb = 1024;
            let mb = kb * 1024;
            let gb = mb * 1024;
            let tb = gb * 1024;

            if ((bytes >= 0) && (bytes < kb)) {
                return bytes, 'B';

            } else if ((bytes >= kb) && (bytes < mb)) {
                return (bytes / kb, 'KB');

            } else if ((bytes >= mb) && (bytes < gb)) {
                return (bytes / mb, 'MB');

            } else if ((bytes >= gb) && (bytes < tb)) {
                return (bytes / gb, 'GB');

            } else if (bytes >= tb) {
                return (bytes / tb, 'TB');
            } else {
                return bytes, 'B';
            }
        }

        $('#submit').on('click', function(e) {

            e.preventDefault();
            let sumOfFiles = 0;

            for (let index = 0; index < fileLength.length; index++) {
                sumOfFiles += fileLength[index].size;
            }


            let form_data = new FormData();
            let no = $("li").length - 1;
            let totalFileSize = sizeFormat(sumOfFiles);

            if (totalFileSize == 'B' || totalFileSize == 'KB' || totalFileSize == 'MB') {
                for (i = 0; i < no; i++) {
                    console.log(FILES[Object.keys(FILES)[i]]);
                    form_data.append('file', FILES[Object.keys(FILES)[i]]);
                    $.ajax({
                        method: 'POST',
                        url: '/drive/frontend/assets/includes/upload_file.php',
                        processData: false,
                        contentType: false,
                        data: form_data,
                        beforeSend: function() {
                            $('#loading-image').show();
                        },
                        success: (response) => {
                            open("./dashboard", "_self");
                        },
                        complete: function() {
                            $('#loading-image').hide();
                        }
                    });
                }
            } else if (totalFileSize == 'GB' || totalFileSize == 'TB') {
                $("#warningModal").removeClass('hidden');
                setTimeout(() => {
                    $("#warningModal").addClass('hidden');
                }, 2000);

            }
        });

        // $('#submit').on('click', function(e) {
        //     e.preventDefault();

        //     let sumOfFiles = 0;
        //     for (let index = 0; index < fileLength.length; index++) {
        //         sumOfFiles += fileLength[index].size;
        //     }
        //     let totalFileSize = sizeFormat(sumOfFiles);

        //     if (totalFileSize == 'B' || totalFileSize == 'KB' || totalFileSize == 'MB') {
        //         const form_data = new FormData();

        //         // Check if folder is being uploaded
        //         if (FILES.folder) {
        //             form_data.append('folder', FILES.folder, FILES.folder.name);
        //         } else {
        //             for (let i = 0; i < Object.keys(FILES).length; i++) {
        //                 form_data.append('file[]', FILES[Object.keys(FILES)[i]]);
        //             }
        //         }

        //         $.ajax({
        //             method: 'POST',
        //             url: '/drive/frontend/assets/includes/upload_file.php',
        //             processData: false,
        //             contentType: false,
        //             data: form_data,
        //             beforeSend: function() {
        //                 $('#loading-image').show();
        //             },
        //             success: (response) => {
        //                 // open("./dashboard", "_self");
        //             },
        //             complete: function() {
        //                 $('#loading-image').hide();
        //             }
        //         });
        //     } else if (totalFileSize == 'GB' || totalFileSize == 'TB') {
        //         $("#warningModal").removeClass('hidden');
        //         setTimeout(() => {
        //             $("#warningModal").addClass('hidden');
        //         }, 2000);
        //     }
        // });

        $("#cancel").on("click", function() {
            open("./dashboard", "_self");
        });
    </script>
</body>

</html>