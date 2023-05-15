<?php
session_start();
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$file = $data->file;
// Define file name and path 
include 'Connection.php';

$uname = $_SESSION["user"];

$query = "SELECT id FROM users WHERE username = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$userid = $row["id"];
$source = "../../usersdata/users-stored-data/$userid/$file";
$sql = "SELECT id FROM users WHERE email='{$email}' ";

$result = mysqli_query($connect, $sql);
$sid = mysqli_fetch_assoc($result);
$opposite_userid = $sid["id"];



$time = date('g:i A');
$date = date("d/m/y") . " " . $time;
$sec = strtotime($date);
//converts seconds into a specific format
$newdate = date("Y/d/m H:i", $sec);
//Appends seconds with the time
$newdate = $newdate . ":00";

// echo $time;

if (!file_exists('../../usersdata/users-shared-data/' . $opposite_userid)) {
    mkdir('../../usersdata/users-shared-data/' . $opposite_userid, 0777, true);
}

if (!file_exists('../../usersdata/users-stored-data/' . $opposite_userid)) {
    mkdir('../../usersdata/users-stored-data/' . $opposite_userid, 0777, true);
}

$destination = "../../usersdata/users-shared-data/$opposite_userid/$file";
$destination2 = "../../usersdata/users-stored-data/$opposite_userid/$file";

copy($source, $destination);
copy($source, $destination2);



if (copy($source, $destination) == 1 && copy($source, $destination2) == 1) {
    $Sql1 = "INSERT INTO sharing (filename, userid, opposite_userid,notification_status,sharing_hours) VALUES ('$file',$userid,$opposite_userid,true,'$newdate')";
    $Result = mysqli_query($connect, $Sql1);
    echo $Result;
} else {
    echo 0;
}
