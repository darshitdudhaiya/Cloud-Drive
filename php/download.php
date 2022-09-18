

<?php  

session_start();
// Define file name and path 
include("./Query/connect.php");

$uname = $_SESSION["user"];


$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];

$fileName = basename($_GET["file"]);


$file_url = 'http://localhost/php/Files/Userdata/'.$uid.'/'. $fileName;  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
?>  