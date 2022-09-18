<?php

include ('./connect.php');

session_start();
if (!isset($_SESSION["user"]))
    die("no");
include("./Query/connect.php");

$uname = $_SESSION["user"];

$query = "SELECT `id` FROM `users` WHERE `username` = '$uname'";
$r = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($r);
$uid = $row["id"];

header('Content-Type:application/json');
$data = json_decode(file_get_contents("php://input"));


$name = $data->name;
$email = $data->email;
$password = $data->password;       

$sql="UPDATE `users` SET `username` = '{$name}', `email` = '{$email}', `password` = '{$password}' WHERE `users`.`id` = $uid";
$result = mysqli_query($connect,$sql);
if($result)
{    
    session_start();
    $_SESSION["user"] = $name;
    echo json_encode(array('massage'=>'Data updated successfully!!','status' => true));
}
else
{
    echo json_encode(array('massage'=>'Data not updated successfully!!!','status' => false));
}
?>