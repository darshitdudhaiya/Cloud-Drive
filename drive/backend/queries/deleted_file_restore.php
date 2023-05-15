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


if (rename("../../usersdata/users-deleted-data/$uid/$file", "../../usersdata/users-stored-data/$uid/$file") == 1) {
    echo 1;
} else {
    echo 0;
}
