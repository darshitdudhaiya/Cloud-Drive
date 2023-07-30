<?php
session_start();

header('Content-Type:application/json');

require_once '../../../../vendor/autoload.php';

use Firebase\JWT\JWT;

// JWT secret
define('JWT_SECRET', 'this-is-the-secret');

$key = JWT_SECRET;
$alg = 'HS256';

// $data = json_decode(file_get_contents("php://input"));

include "../../../queries/Connection.php";
$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// $image = $data->image;

$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql_for_check = "SELECT * FROM `users` WHERE email='{$email}'";
$result = mysqli_query($connect, $sql_for_check);
$count = mysqli_num_rows($result);

$sql = "SELECT MAX(id) FROM `users`";
$result2 = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result2);


$test = explode('.', $_FILES['file']['name']);
$extension = end($test);
$name = $row['MAX(id)']+1 . '.' . $extension;


if ($count == 1) {
    echo json_encode(array('massage' => $email . 'is already registered on drive', 'status' => false));
} else {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`,`image`) VALUES ('$username','$email', '$hash_password','../images/profile-pictures/$name');";

    if (mysqli_query($connect, $sql)) {
        http_response_code(200);

        $location = '../../../../frontend/assets/images/profile-pictures/'.$name;
        move_uploaded_file($_FILES['file']['tmp_name'], $location);
        
        $sql = "SELECT * FROM `users` WHERE email='{$email}'";

        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);

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

        $_SESSION["user"] = $username;
    } else {
        http_response_code(201);
        echo json_encode(array('massage' => 'Data not inserted successfully!!!', 'status' => false));
    }
}
