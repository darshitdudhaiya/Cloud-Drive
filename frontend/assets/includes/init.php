<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/drive");
define("BASE_URL", "/drive");

$theme_mode = "dark";

date_default_timezone_set('Asia/Kolkata');

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}

function changeThemeMode($current_theme_mode)
{
    if ($current_theme_mode == "dark") {
        $theme_mode = "light";
    } else {
        $theme_mode = "dark";
    }
}

// function searchInFiles($filename)
// {
//     include pathOf('backend/queries/Connection.php');
//     $uname = $_SESSION["user"];
//     $query = "SELECT * FROM users WHERE username = '$uname'";
//     $r = mysqli_query($connect, $query);
//     $row = mysqli_fetch_assoc($r);
//     $uid = $row["id"];

//     if (file_exists('../../../usersdata/users-stored-data/' . $uid)) {
//         $files = array_diff(scandir("../../../usersdata/users-stored-data/" . $uid), array('.', '..'));
//         print_r($files);
//         $m_array = preg_grep('/^green\s.*/', $array);
//     }
// }

function folderSize($folder)
{
    $count_size = 0;
    $count = 0;
    $dir_array = scandir($folder);
    foreach ($dir_array as $key => $filename) {
        if ($filename != ".." && $filename != ".") {
            if (is_dir($folder . "/" . $filename)) {
                $new_foldersize = foldersize($folder . "/" . $filename);
                $count_size = $count_size + $new_foldersize;
            } else if (is_file($folder . "/" . $filename)) {
                $count_size = $count_size + filesize($folder . "/" . $filename);
                $count++;
            }
        }
    }
    $global_count_size = $count_size;
    return $count_size;
}

function sizeFormat($bytes)
{
    $kb = 1024;
    $mb = $kb * 1024;
    $gb = $mb * 1024;
    $tb = $gb * 1024;

    if (($bytes >= 0) && ($bytes < $kb)) {
        return $bytes . ' B';
    } elseif (($bytes >= $kb) && ($bytes < $mb)) {
        return ceil($bytes / $kb) . ' KB';
    } elseif (($bytes >= $mb) && ($bytes < $gb)) {
        return ceil($bytes / $mb) . ' MB';
    } elseif (($bytes >= $gb) && ($bytes < $tb)) {
        return round(abs($bytes / $gb), 2) . ' GB';
    } elseif ($bytes >= $tb) {
        return round(abs($bytes / $tb), 2) . ' TB';
    } else {
        return $bytes . ' B';
    }
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
