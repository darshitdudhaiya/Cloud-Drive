<?php
session_start();
include 'Connection.php';


$data = json_decode(file_get_contents("php://input"));
$file = $data->file;


$uname = $_SESSION["user"];


$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];


if (!file_exists('../../usersdata/users-deleted-data/' . $uid)) {
    mkdir('../../usersdata/users-deleted-data/' . $uid, 0777, true);
}
if(rename("../../usersdata/users-stored-data/$uid/$file", "../../usersdata/users-deleted-data/$uid/$file"))
{
    echo 1;
}
else{
    echo 0;
}


