<?php
include("../Query/connect.php");
session_start();
    $uname=$_SESSION["user"];

    $query="SELECT `id` FROM `users` WHERE `username` = '$uname'";
    $r=mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($r);
    $uid = $row["id"];
    echo $uid;

    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);    
    $name = $_FILES['file']['name'] ;

    if (!file_exists('./Userdata/'.$uid)) {
        mkdir('./Userdata/'.$uid, 0777, true);
    }
    
    // $location = $uid.'/'.$name;
    // move_uploaded_file($_FILES['file']['tmp_name'], $location);
    
    $location = './Userdata/'.$uid.'/'.$name;
    move_uploaded_file($_FILES['file']['tmp_name'], $location);

    echo "success";


  
    
    // mkdir("./php/Files/Userdata/")

  

    // $sql = "INSERT INTO `user_data`(`file_name`,`uid`) VALUES('$name',$uid) ";

    // $result = mysqli_query($connect,$sql);

    // echo $result;

?>