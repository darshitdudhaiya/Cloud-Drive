<?php
session_start();

header('Content-Type:application/json');
$data = json_decode(file_get_contents("php://input"));

include 'Connection.php';

$fname = $data->name;
$email = $data->email;
$password =$data->password;

$sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$fname','$email', '$password');";

if(mysqli_query($connect,$sql))
{    
    echo 1;
    $_SESSION["user"] = $fname;                    
}
else
{
    echo json_encode(array('massage'=>'Data not inserted successfully!!!','status' => false));
}
?>