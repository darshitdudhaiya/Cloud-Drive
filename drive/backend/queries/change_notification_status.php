<?php

session_start();
include 'Connection.php';


$data = json_decode(file_get_contents("php://input"));
$id = $data->record_id;

$sql = "UPDATE `sharing` SET `notification_status`= false WHERE `id` = $id";
$Result = mysqli_query($connect, $sql);

echo $Result;
