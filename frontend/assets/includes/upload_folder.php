<?php
function moveFiles($source, $destination) {
  if (is_dir($source)) {
    $files = scandir($source);
    if ($files !== false) {
      foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
          moveFiles($source . '/' . $file, $destination . '/' . $file);
        }
      }
    }
  } elseif (file_exists($source)) {
    rename($source, $destination);
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['folder'])) {
    $folderName = $_FILES['folder']['name'];
    $folderTmpName = $_FILES['folder']['tmp_name'];
    $uploadPath = 'uploads/' . $folderName;

    // Create the destination folder if it doesn't exist
    if (!file_exists($uploadPath) && !is_dir($uploadPath)) {
      mkdir($uploadPath, 0777, true);
    }

    // Move the uploaded files to the destination folder
    moveFiles($folderTmpName, $uploadPath);

    // Send a response back to the client
    http_response_code(200);
    echo 'Folder uploaded successfully!';
    exit();
  }
}

// If the request method or parameters are invalid, return an error response
http_response_code(400);
echo 'Invalid request.';
exit();
?>
