<?php
include './connect.php';

header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"));

session_start();
$uname = $_SESSION["user"];

$query = "SELECT * FROM `users` WHERE `username` = '$uname'";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0)
{
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
?>