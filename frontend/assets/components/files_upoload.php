<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <form enctype="multipart/form-data" action="../includes/upload_files.php" method="post">
        <input name="file[]" type="file" />
        <button class="add_more">Add More Files</button>
        <input type="button" id="upload" value="Upload File" />
    </form>
</body>
<script src="<?= urlOf("frontend/assets/js/jquery-3.6.0.min.js") ?>"></script>

<script>
    $(document).ready(function(){
    $('.add_more').click(function(e){
        e.preventDefault();
        $(this).before("<input name='file[]' type='file' />");
    });
});

    $('body').on('click', '#upload', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents('form')[0]);

        $.ajax({
            url: '/drive/frontend/assets/includes/upload_files.php',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                alert("Data Uploaded: "+data);
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
});
</script>
</html>
