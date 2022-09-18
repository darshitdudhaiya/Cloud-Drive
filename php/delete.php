<?php 

session_start();
// Define file name and path 
include("./Query/connect.php");

$uname = $_SESSION["user"];


$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];


$file=$_GET["file"];
$location="./Files/Userdata/User_deleted_data/$file";


// $cmd = 'mv "/Files/Userdata/$uid/Cleanliness_drive.xls" "/Files/Userdata/User_deleted_data/Cleanliness_drive.xls"';
// exec($cmd, $output, $return_val);

unlink("./Files/Userdata/$uid/$file");

// rename("./Files/Userdata/$uid/$file",$location);


// move_uploaded_file($file, $location);
header("Location:home.php");

?>