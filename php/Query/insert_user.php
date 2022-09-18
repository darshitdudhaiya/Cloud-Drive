<?php
session_start();

header('Content-Type:application/json');
// header('Access-Control-Allow-Origin:*');
$data = json_decode(file_get_contents("php://input"));

include 'connect.php';

$fname = $data->name;
$email = $data->email;
$password = $data->password;

$sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$fname','$email', '$password');";


if(mysqli_query($connect,$sql))
{    
    echo json_encode(array('massage'=>'Data inserted successfully!!','status' => true));
    $_SESSION["user"] = $fname;                    
}
else
{
    echo json_encode(array('massage'=>'Data not inserted successfully!!!','status' => false));
}
?>