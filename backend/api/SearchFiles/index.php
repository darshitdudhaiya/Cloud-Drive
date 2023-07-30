<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');
include "../../../frontend/assets/includes/init.php";

$data = json_decode(file_get_contents("php://input"));
include "../../queries/Connection.php";

$jwt = $data->jwtToken;

$search_string = $data->search_string;
$layout = $data->layout;

$userData = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwt)[1]))));

$sql2 = "SELECT * FROM `sharing` WHERE `opposite_userid` = $userData->userid";
$result2 = mysqli_query($connect, $sql2);
$rec4 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

$Cards = [];
$Rows = [];

if ($layout == "My Drive") {
    $files = array_diff(scandir("../../../usersdata/users-stored-data/" . $userData->userid), array('.', '..'));
    $expr = '/' . preg_quote($search_string, '/') . '/i';
    $files = preg_grep($expr, $files);
    foreach ($files as $file) {
        $filename = explode('.', $file);
        $file_extension = end($filename);
        $file_extension_image = true;

        if (!file_exists('../../../frontend/assets/images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
        }
        if ($file_extension_image == true) {
            array_push($Cards, '<div class="card bg-[#F3FCFC] text-black rounded-lg shadow-lg border-gray-200 border mb-8 lg:mb-0 sm:w-96 lg:w-52"  oncontextmenu="dropDown(`' . $file . '`,this,event,`my_drive`)">
                                  <div class="flex justify-end mt-3 mr-3">
                                      <a class="text-indigo-800">
                                        <button value="' . $file . '"  onclick="renameFile(this)" class="rename_btn text-gray-800 font-bold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"> <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </sv>
                                        </button>
                                      </a>
                                  </div>

                                  <div class="p-5">
                                    <div class="prod-title text-center pb-5">
                                          <p class="text-[2rem] lg:text-[1.5rem]  truncate ... normal-case font-bold">' . $file . '</p>
                                      </div>
                                      <div class="prod-img pb-5 flex justify-center">
                                        <img class="h-28 w-28 lg:h-20 lg:w-20  mx-8" src=' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . ' alt=' . $file_extension . '/>
                                      </div>
                                      <div class="prod-info flex justify-center">
                                        <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                                          <button value="' . $file . '"  class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                              <svg class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                                          </button>
                                        </a>
                                        <a class="text-indigo-800 px-2" >
                                          <button value="' . $file . '" onclick="deleteFile(this)"  class="mx-3 lg:mx-0 delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                              <svg xmlns="http://www.w3.org/2000/svg" class=" h-7 lg:h-5 w-7 lg:w-5 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                              </svg>
                                          </button>
                                        </a>
                                        <a class="text-indigo-800"  target="_top">
                                          <button value="' . $file . '" onclick="share(this)" class="border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class=" h-7 lg:h-5 w-7 lg:w-5 bi bi-share icon" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path> </svg>
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                          </button>
                                        </a>
                                      </div>
                                    </div>
                                  </div>');
        } else {
            array_push($Cards, '<div class="card bg-[#F3FCFC] text-black rounded-lg shadow-lg border-gray-200 border mb-8 lg:mb-0 sm:w-96 lg:w-52"  oncontextmenu="dropDown(`' . $file . '`,this,event,`my_drive`)">
                          <div class="flex justify-end mt-3 mr-3">
                              <a class="text-indigo-800">
                                <button value="' . $file . '"  onclick="renameFile(this)" class="rename_btn text-gray-800 font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"> <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </sv>
                                </button>
                              </a>
                          </div>

                          <div class="p-5">
                            <div class="prod-title text-center pb-5">
                                  <p class="text-[2rem] lg:text-[1.5rem]  truncate ... normal-case font-bold">' . $file . '</p>
                              </div>
                              <div class="prod-img pb-5 flex justify-center">
                                <img class="h-28 w-28 lg:h-20 lg:w-20  mx-8" src=' . urlOf("frontend/assets/images/logos/none.png") . ' alt=' . $file_extension . '/>
                              </div>
                              <div class="prod-info flex justify-center">
                                <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                                  <button value="' . $file . '"  class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                      <svg class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                                  </button>
                                </a>
                                <a class="text-indigo-800 px-2" >
                                  <button value="' . $file . '" onclick="deleteFile(this)" class="mx-3 lg:mx-0 delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" class=" h-7 lg:h-5 w-7 lg:w-5 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                      </svg>
                                  </button>
                                </a>
                                <a class="text-indigo-800"  target="_top">
                                  <button value="' . $file . '" onclick="share(this)" class="border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class=" h-7 lg:h-5 w-7 lg:w-5 bi bi-share icon" viewBox="0 0 16 16"> <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path> </svg>
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                  </button>
                                </a>
                              </div>
                            </div>
                          </div>
                ');
        }
    }

    foreach ($files as $file) {
        $filename = explode('.', $file);
        $file_extension = end($filename);
        $file_extension_image = true;

        if (!file_exists('../../../frontend/assets/images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
        }

        if ($file_extension_image == true) {
            array_push($Rows, '<tr>
                          <td class="flex justify-center">
                            <img class="h-12 w-12" src="' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . '" />
                          </td>
                          <td>' . $file . '</td>
                          <td>
                            <a class="text-indigo-800 lg:px-2">
                              <button value="' . $file . '" onclick="renameFile(this)" class="rename_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                              <button value="' . $file . '" class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg class="fill-current py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path>
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2">
                              <button value="' . $file . '" onclick="deleteFile(this)" class="delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2" target="_top">
                              <button value="' . $file . '" onclick="share(this)" class="border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class=" py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5 bi bi-share icon" viewBox="0 0 16 16">
                                  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path>
                                </svg>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                              </button>
                            </a>
                          </td>
                        </tr>
                      ');
        } else {
            array_push($Rows, '<tr>
                          <td class="flex justify-center">
                            <img class="h-12 w-12" src="' . urlOf("frontend/assets/images/logos/none.png") . '" />
                          </td>
                          <td>' . $file . '</td>
                          <td>
                            <a class="text-indigo-800 lg:px-2">
                              <button value="' . $file . '" onclick="renameFile(this)" class="rename_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2" href="' . urlOf("backend/queries/download_file.php?file=" . $file . "") . '">
                              <button value="' . $file . '" class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg class="fill-current py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path>
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2">
                              <button value="' . $file . '" onclick="deleteFile(this)" class="delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                              </button>
                            </a>
                            <a class="text-indigo-800 lg:px-2" target="_top">
                              <button value="' . $file . '" onclick="share(this)" class="border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-1 px-0 lg:py-2 lg:px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class=" py-1 px-1 lg:py-0 lg:px-0 h-7 lg:h-5 w-7 lg:w-5 bi bi-share icon" viewBox="0 0 16 16">
                                  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path>
                                </svg>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                              </button>
                            </a>
                          </td>
                        </tr>');
        }
    }
} else if ($layout == "Shared") {

    $rec4 = array_filter($rec4, function ($item) use ($search_string) {
        return stripos($item['filename'], $search_string) !== false;
    });
    foreach ($rec4 as $record) {
        $sql3 = 'SELECT * FROM `users` WHERE `id` = ' . $record["userid"] . '';
        $result2 = mysqli_query($connect, $sql3);
        $rec1 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

        $filename = explode('.', $record["filename"]);
        $file_extension = end($filename);
        $file_extension_image = true;

        if (!file_exists('../../../frontend/assets/images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
        }

        if ($file_extension_image == true) {
            array_push($Cards, '
                      <div class="card p-5 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border sm:w-96 lg:w-52" oncontextmenu="dropDown(`' . $record["filename"] . '`,this,event,`shared`)">
                        <div class="prod-title text-center pb-5">
                          <p class="text-[2rem] lg:text-[1.5rem] truncate ... normal-case  font-bold">' . $record["filename"] . '</p>
                          <h2 class="mb-1 text-[0.8rem] font-medium ">Shared by ' . $rec1[0]["username"] . '</h2>
                        </div>
                        <div class="prod-img pb-5 flex justify-center">
                          <img class="h-28 w-28 lg:h-20 lg:w-20 " src=' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . ' alt=' . $file_extension . '/>
                        </div>
                        <div class="prod-info flex justify-center">
                          <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $record["filename"] . "") . '">
                            <button value="' . $record["filename"] . '" class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                            </button>
                          </a>
                        </div>
                      </div>
                      ');
        } else {
            array_push($Cards, '
                      <div class="card p-5 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border sm:w-96 lg:w-52" oncontextmenu="dropDown(`' . $record["filename"] . '`,this,event,`shared`)">
                        <div class="prod-title text-center pb-5">
                          <p class="text-[2rem] lg:text-[1.5rem]  truncate ... normal-case  font-bold">' . $record["filename"] . '</p>
                          <h2 class="mb-1 text-[0.8rem] font-medium ">Shared by ' . $rec1[0]["username"] . '</h2>
                        </div>
                        <div class="prod-img pb-5 flex justify-center">
                          <img class="h-28 w-28 lg:h-20 lg:w-20  mx-8" src=' . urlOf("frontend/assets/images/logos/none.png") . ' alt=' . $file_extension . '/>
                        </div>
                        <div class="prod-info flex justify-center">
                          <a class="text-indigo-800" href="' . urlOf("backend/queries/download_file.php?file=" . $record["filename"] . "") . '">
                            <button value="' . $record["filename"] . '" class="download_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current h-7 lg:h-5 w-7 lg:w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg>
                            </button>
                          </a>
                        </div>
                      </div>
                      ');
        }
    }
    array_push($Cards, '</div>');
} elseif ($layout == "Recycle Bin") {
    $files = array_diff(scandir("../../../usersdata/users-deleted-data/" . $userData->userid), array('.', '..'));
    $expr = '/' . preg_quote($search_string, '/') . '/i';
    $files = preg_grep($expr, $files);
    foreach ($files as $file) {
        $filename = explode('.', $file);
        $file_extension = end($filename);
        $file_extension_image = true;

        if (!file_exists('../../../frontend/assets/images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
        }

        if ($file_extension_image == true) {
            array_push($Cards, '
            <div class="card p-5 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border mb-8 lg:mb-0 h-80 lg:h-fit sm:w-96 lg:w-52" oncontextmenu="dropDown(`' . $file . '`,this,event,`recycle_bin`)">
            <div class="prod-title text-center pb-5">
              <p class="text-[2rem] lg:text-[1.5rem] truncate ... normal-case font-bold">' . $file . '</p>
            </div>
            <div class="prod-img pb-5 flex justify-center">
              <img class="h-28 w-28 lg:h-20 lg:w-20 " src=' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . ' alt=' . $file_extension . '/>
            </div>
            <div class="prod-info flex justify-centr">
              <a class="text-indigo-800 px-2"  target="_top">
                <button value="' . $file . '" onclick="restore(this)" class="mr-3  border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5 icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                  </svg>
                </button>
              </a>
              <a class="text-indigo-800" >
                <button value="' . $file . '" onclick="deletePermenantly(this)" class=" delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
              </a>
            </div>
          </div>
            ');
        } else {
            array_push($Cards, '
            <div class="card p-5 bg-[#F3FCFC] rounded-lg shadow-lg border-gray-200 border mb-8 lg:mb-0 h-80 lg:h-fit sm:w-96 lg:w-52" oncontextmenu="dropDown(`' . $file . '`,this,event,`recycle_bin`)">
            <div class="prod-title text-center pb-5">
              <p class="text-[2rem] lg:text-[1.5rem]  truncate ... normal-case font-bold">' . $file . '</p>
            </div>
            <div class="prod-img pb-5 flex justify-center">
              <img class="h-28 w-28 lg:h-20 lg:w-20  mx-8" src=' . urlOf("frontend/assets/images/logos/none.png") . ' alt=' . $file_extension . '/>
            </div>
            <div class="prod-info flex justify-center">
              <a class="text-indigo-800 px-2"  target="_top">
                <button value="' . $file . '" onclick="restore(this)" class=" mr-3 border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                  </svg>
                </button>
              </a>
              <a class="text-indigo-800" >
                <button value="' . $file . '" onclick="deletePermenantly(this)"  class=" delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-7 lg:h-5 w-7 lg:w-5 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
              </a>
            </div>
          </div>
            ');
        }
    }
    array_push($Cards, '</div>');
    foreach ($files as $file) {
        $filename = explode('.', $file);
        $file_extension = end($filename);
        $file_extension_image = true;

        if (!file_exists('../../../frontend/assets/images/logos/' . $file_extension . '.png')) {
            $file_extension_image = false;
        }

        if ($file_extension_image == true) {
            array_push($Rows, '<tr>
    <td class="flex justify-center">
      <img class="h-12 w-12" src="' . urlOf("frontend/assets/images/logos/" . $file_extension . ".png") . '"/>
    </td>
    <td>' . $file . '</td>
    <td>
      <a class="text-indigo-800 px-2"  target="_top">
        <button value="' . $file . '" onclick="restore(this)" class="mr-3  border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
          </svg>
        </button>
      </a>
      <a class="text-indigo-800" >
        <button value="' . $file . '" onclick="deletePermenantly(this)" class=" delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
        </button>
      </a>
    </td>
  </tr>
                ');
        } else {
            array_push($Rows, '<tr>
    <td class="flex justify-center">
      <img class="h-12 w-12" src="' . urlOf("frontend/assets/images/logos/none.png") . '"/>
    </td>
    <td>' . $file . '</td>
    <td>
        <a class="text-indigo-800 px-2"  target="_top">
          <button value="' . $file . '" onclick="restore(this)" class="mr-3  border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
          </button>
        </a>
        <a class="text-indigo-800" >
          <button value="' . $file . '" onclick="deletePermenantly(this)" class=" delete_btn border border-gray-600 lg:border-gray-200  text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-5 w-7 lg:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
          </button>
        </a>
    </td>
  </tr>');
        }
    }
}

$noDataResponse = [];
array_push($noDataResponse, '<div>
<div class="flex justify-center">
  <img class="w-96" src="../images/no-data-concept-illustration_114360-616.avif" alt="no data" />
</div>
</div>');

$response = new stdClass();
$response->Cards = $Cards;
$response->Rows = $Rows;

if (sizeof($Cards) == 0) {
    $response->noDataResponese = $noDataResponse;
}
print_r(json_encode($response));
