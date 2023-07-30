<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');
include "../../../../frontend/assets/includes/init.php";

require_once '../../../../vendor/autoload.php';

use Firebase\JWT\JWT;

// JWT secret
define('JWT_SECRET', 'this-is-the-secret');

$key = JWT_SECRET;
$alg = 'HS256';

$data = json_decode(file_get_contents("php://input"));
include "../../../queries/Connection.php";

$jwt = $data->jwtToken;

$userData = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwt)[1]))));
$uid = $userData->userid;
/*----------------------------notification bar---------------------------------*/
$sql1 = "SELECT * FROM `sharing` WHERE `opposite_userid` = $uid AND `notification_status` = true";
$result1 = mysqli_query($connect, $sql1);
$rec = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$count = mysqli_num_rows($result1);
$time = date('g:i:s A');
$date = date("y-m-d") . " " . $time;
$newdate = $date;
$time2 = new DateTime($newdate);

$notificationCards = [];
if (file_exists('../../../../usersdata/users-shared-data/' . $uid)) {
    $files = array_diff(scandir("../../../../usersdata/users-shared-data/" . $uid), array('.', '..'));
    //  print_r($newdate) . "<br>";
    foreach ($rec as $record) {
        $sql3 = 'SELECT * FROM `users` WHERE `id` = ' . $record["userid"] . '';
        $result2 = mysqli_query($connect, $sql3);
        $rec1 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

        $time1 = new DateTime($record["sharing_hours"]);
        $hours = $time2->diff($time1);
        //  echo $hours->format('%y year %m month %d days %h hour %i minute %s second');
        array_push($notificationCards, '
                <div class="flex justify-end">
                  <button onclick="dismissNotification(this)" value=' . $record["id"] . ' class="text-black z-50 text-[1.5rem]">
                    ⨉
                  </button>
                </div>');
        if ($hours->format("%i") > 0 && $hours->format("%h") == 0 && $hours->format("%d") == 0) {
            array_push($notificationCards, '
                  <div class="" onclick="notificationShareBtn()" id="' . $record["id"] . '">
                    <a  class="flex items-start space-x-2 group bg-gray-100 p-4 rounded-lg shadow-lg">
                      <img class="flex-shrink-0 object-cover w-12 h-12 rounded-full" src="' . $rec1[0]["image"] . '" alt="John Doe">
                      <div class="inline-flex">
                          <div class="overflow-hidden text-black ">
                              <h4 class="text-[1.7rem] lg:text-sm font-semibold transition-colors group-hover:text-indigo-600">
                              ' . $rec1[0]["username"] . '
                              </h4>
                              <p class="text-[1.5rem] lg:text-sm font-thin">
                              ' . $rec1[0]["username"] . ' was shared <span class="text-[1.5rem] lg:text-sm text-blue-500">' . $record["filename"] . '</span> with you.
                              </p>

                          </div>
                          <div class="relative">
                              <span class="text-md lg:text-xs text-black whitespace-nowrap dark:text-primary-light">' . $hours->format("%i") . ' minutes ago</span>
                          </div>
                      </div>
                    </a>
                  </div>
                  <hr class="border-blueGray-300">');
        } elseif ($hours->format("%h") > 0 && $hours->format("%i") > 0 && $hours->format("%d") == 0) {
            array_push($notificationCards, '
                  <div class="" onclick="notificationShareBtn()" id="' . $record["id"] . '">
                    <a  class="flex items-start space-x-2 group bg-gray-100 p-4 rounded-lg shadow-lg">
                      <img class="flex-shrink-0 object-cover w-12 h-12 rounded-full" src="' . $rec1[0]["image"] . '" alt="John Doe">
                      <div class="inline-flex">
                          <div class="overflow-hidden text-black ">
                              <h4 class="text-[1.7rem] lg:text-sm font-semibold transition-colors group-hover:text-indigo-600">
                              ' . $rec1[0]["username"] . '
                              </h4>
                              <p class="text-[1.5rem] lg:text-sm font-thin">
                              ' . $rec1[0]["username"] . ' was shared <span class="text-[1.5rem] lg:text-sm text-blue-500">' . $record["filename"] . '</span> with you.
                              </p>

                          </div>
                          <div class="relative">
                              <span class="text-md lg:text-xs text-black whitespace-nowrap dark:text-primary-light">' . $hours->format("%h") . ' h ago</span>
                          </div>
                      </div>
                    </a>
                  </div>
                  <hr class="border-blueGray-300">');
        } elseif ($hours->format("%d") > 0 && $hours->format("%h") > 0 && $hours->format("%i") > 0) {
            array_push($notificationCards, '
                  <div class="" onclick="notificationShareBtn()" id="' . $record["id"] . '">
                    <a  class="flex items-start space-x-2 group bg-gray-100 p-4 rounded-lg shadow-lg">
                      <img class="flex-shrink-0 object-cover w-12 h-12 rounded-full" src="' . $rec1[0]["image"] . '" alt="John Doe">
                      <div class="inline-flex">
                          <div class="overflow-hidden text-black ">
                              <h4 class="text-[1.7rem] lg:text-sm font-semibold transition-colors group-hover:text-indigo-600">
                              ' . $rec1[0]["username"] . '
                              </h4>
                              <p class="text-[1.5rem] lg:text-sm font-thin">
                              ' . $rec1[0]["username"] . ' was shared <span class="text-[1.5rem] lg:text-sm text-blue-500">' . $record["filename"] . '</span> with you.
                              </p>

                          </div>
                          <div class="relative">
                              <span class="text-md lg:text-xs text-black whitespace-nowrap dark:text-primary-light">' . $hours->format("%d") . ' days ago</span>
                          </div>
                      </div>
                    </a>
                  </div>
                  <hr class="border-blueGray-300">');
        } elseif ($hours->format("%s") > 0 && $hours->format("%h") == 0 && $hours->format("%i") == 0) {
            array_push($notificationCards, '
                  <div class="" onclick="notificationShareBtn()" id="' . $record["id"] . '">
                    <a  class="flex items-start space-x-2 group bg-gray-100 p-4 rounded-lg shadow-lg">
                      <img class="flex-shrink-0 object-cover w-12 h-12 rounded-full" src="' . $rec1[0]["image"] . '" alt="John Doe">
                      <div class="inline-flex">
                          <div class="overflow-hidden text-black ">
                              <h4 class="text-[1.7rem] lg:text-sm font-semibold transition-colors group-hover:text-indigo-600">
                              ' . $rec1[0]["username"] . '
                              </h4>
                              <p class="text-[1.5rem] lg:text-sm font-thin">
                              ' . $rec1[0]["username"] . ' was shared <span class="text-[1.5rem] lg:text-sm text-blue-500">' . $record["filename"] . '</span> with you.
                              </p>

                          </div>
                          <div class="relative">
                              <span class="text-md lg:text-xs text-black whitespace-nowrap dark:text-primary-light">' . $hours->format("%s") . ' sec ago</span>
                          </div>
                      </div>
                    </a>
                  </div>
                  <hr class="border-blueGray-300">');
        }
    }
}

$response = new stdClass();
$response->Cards = $notificationCards;
$response->notificationCount = $count;
print_r(json_encode($response));
