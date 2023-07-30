<?php
session_start();

header('Content-Type:application/json');
include 'Connection.php';

$username = $_POST["username"];
$update_id = $_POST["uid"];

$test = explode('.', $_FILES['file']['name']);
$extension = end($test);
$name = $update_id . '.' . $extension;

$sql = "UPDATE `users` SET `username`='$username', `image`='../images/profile-pictures/$name' WHERE `id` = $update_id" ;
$result = mysqli_query($connect, $sql);
$_SESSION["user"] = $username;


if($result == 1){
    $location = '../../frontend/assets/images/profile-pictures/'.$name;
    if(move_uploaded_file($_FILES['file']['tmp_name'], $location) == true)
    {
        echo 1;
    }
}else{
    echo 0;
}