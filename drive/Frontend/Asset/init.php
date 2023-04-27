<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/drive");
define("BASE_URL", "/drive");

date_default_timezone_set('Asia/Kolkata');

// $connection = new PDO("mysql:host=localhost;port=3306;dbname=ssip", "root", "");

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}

// function execute($query, $params = null)
// {
//     global $connection;

//     $statement = $connection->prepare($query);
//     return $statement->execute($params);
// }

// function selectOne($query, $params = null)
// {
//     global $connection;

//     $statement = $connection->prepare($query);
//     $statement->execute($params);

//     $row = $statement->fetch(PDO::FETCH_ASSOC);
//     return $row;
// }

// function select($query, $params = null)
// {
//     global $connection;

//     $statement = $connection->prepare($query);
//     $statement->execute($params);

//     $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }

// function lastInsertId()
// {
//     global $connection;
//     return $connection->lastInsertId();
// }

// function getLastError()
// {
//     global $connection;
//     return $connection->errorInfo();
// }

session_start();