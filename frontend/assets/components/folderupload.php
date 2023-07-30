<!DOCTYPE html>
<html>
<head>
  <title>Folder Upload</title>
  <style>
    /* Add your CSS styles here */
  </style>
</head>
<body>
  <h1>Folder Upload</h1>
  <form id="uploadForm" method="POST" enctype="multipart/form-data">
    <label for="folder">Select a folder to upload:</label>
    <input type="file" id="folder" name="folder" webkitdirectory directory multiple>
    <br>
    <input type="submit" value="Upload">
  </form>

  <script>
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log('Folder uploaded successfully!');
      } else {
        console.log('Failed to upload the folder.');
      }
    }
  };

  xhr.open('POST', '/drive/frontend/assets/includes/upload_folder.php', true);
  xhr.send(formData);
});

  </script>
</body>
</html>
