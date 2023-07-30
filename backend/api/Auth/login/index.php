<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');
include("../../../../frontend/assets/includes/init.php");

require_once '../../../../vendor/autoload.php';

use Firebase\JWT\JWT;

// JWT secret
define('JWT_SECRET', 'this-is-the-secret');

$key = JWT_SECRET;
$alg = 'HS256';

$data = json_decode(file_get_contents("php://input"));
include "../../../queries/Connection.php";

$email = $data->email;
$password = $data->password;

$sql = "SELECT * FROM `users` WHERE email='{$email}'";

$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1 && password_verify($password, $row['password']) == 1) {
    http_response_code(200);

    $uid = $row['id'];

    $usedSpace = "0 B";


    //------------- Get length of folder ----------------
    if (file_exists('../../../../usersdata/users-stored-data/' . $uid)) {
        $folder = "../../../../usersdata/users-stored-data/" . $uid;
        $usedSpace = sizeFormat(folderSize($folder));
    }


    $_SESSION["user"] = $row["username"];

    $issuedAt = time();
    $expirationTime = $issuedAt + 86400;
    $payload = array( // Any random data
        'userid' => $row['id'],
        'name' => $row['username'],
        'email' => $row['email'],
        'image' => $row['image'],
        'iat' => $issuedAt,
        'exp' => $expirationTime,
    );

    $jwt = JWT::encode($payload, $key, $alg);

    $response = new stdClass();

    $response->jwtToken = $jwt;

    print_r(json_encode($response));
} else {
    http_response_code(201);

    // echo json_encode(array('status' => false, 'data not found!!' => $count));
    echo 0;
}
