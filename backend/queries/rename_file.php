<?php
session_start();
include 'Connection.php';


$data = json_decode(file_get_contents("php://input"));
$new_name = $data->new_name;
$file = $data->file;


$uname = $_SESSION["user"];
$filename = explode('.', $file);
$file_extension = end($filename);

$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];

if (rename("../../usersdata/users-stored-data/$uid/$file", "../../usersdata/users-stored-data/$uid/$new_name.$file_extension")) {
    echo 1;
} else {
    echo 0;
}
