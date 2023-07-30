<?php

$files = array_diff(scandir("../../../usersdata/users-stored-data/57"), array('.', '..'));

// $indir = array_filter(scandir("../../../usersdata/users-stored-data/57"), function($item) {
//     return !is_dir('../../../usersdata/users-stored-data/57' . $item);
// });

// $indir = array_filter(scandir("../../../usersdata/users-stored-data/57"), function($item) {
//     return $item[0] !== '.';
// });

$filesonly = [];
// $foldersonly= [];

// foreach($files as $file){
//     if (is_dir($file)) {
//         echo "folder";
//         array_push($foldersonly,$file);
//     } else {
//         array_push($foldersonly,$file);
//     }

// }

// echo "files:<br/>";
// print_r($filesonly);

// echo "folder:<br/>";
// print_r($foldersonly);
function dirToArray($dir)
{

    $result = array();

    $cdir = scandir($dir);

    foreach ($cdir as $key => $value) {

        if (!in_array($value, array(".", ".."))) {

            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {

                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                

            } else {

                $result[] = $value;

            }

        }

    }

    return $result;

}

print_r(dirToArray("../../../usersdata/users-stored-data/57"));