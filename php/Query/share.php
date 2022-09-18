<?php
session_start();
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$file = $data->file;
// Define file name and path 
include("./connect.php");

$uname = $_SESSION["user"];


$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];

$source="../Files/Userdata/$uid/$file";



$sql = "SELECT `id` FROM `users` WHERE email='{$email}' ";

$result = mysqli_query($connect,$sql);
$sid = mysqli_fetch_assoc($result);
print_r($sid);
echo $file;
$id=$sid["id"];

$destination="../Files/Userdata/$id/$file";   

copy($source,$destination);


