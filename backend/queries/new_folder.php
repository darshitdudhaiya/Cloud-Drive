<?php
session_start();
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$folderName = $data->folderName;
$userid = $data->userId;

if (!file_exists('../../usersdata/users-stored-data/' . $userid)) {
    mkdir('../../usersdata/users-stored-data/' . $userid, 0777, true);
}

if(mkdir("../../usersdata/users-stored-data/" . $userid. "/". $folderName,0777,true)){
    http_response_code(200);
}
else{
    http_response_code(302);
}

?>