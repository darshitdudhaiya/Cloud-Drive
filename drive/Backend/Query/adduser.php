<?php
session_start();

header('Content-Type:application/json');
$data = json_decode(file_get_contents("php://input"));

include 'Connection.php';

$username = $data->name;
$email = $data->email;
$password = $data->password;

$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql_for_check = "SELECT * FROM `users` WHERE email='{$email}'";
$result = mysqli_query($connect, $sql_for_check);

if ($result == 0) {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username','$email', '$hash_password');";

    if (mysqli_query($connect, $sql)) {
        echo 1;
        $_SESSION["user"] = $username;
    } else {
        echo json_encode(array('massage' => 'Data not inserted successfully!!!', 'status' => false));
    }
}
else{
    echo json_encode(array('massage' => $email . 'is already registered on drive', 'status' => false));
}
