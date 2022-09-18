<?php
    session_start();

    header('Content-Type: application/json');

    $data = json_decode(file_get_contents("php://input"));
    include("./connect.php");

    $email = $data->email;
    $password = $data->password;   
    
    $sql = "SELECT * FROM `users` WHERE email='{$email}' && password = '{$password}'";

    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
        echo 1;
        $_SESSION["user"]  = $row["username"];
        
        // echo json_encode(array('status' => true, 'data' => $count));
    }
    else
    {
        echo json_encode(array('status' => false, 'data not found!!' => $count));
    }
?>