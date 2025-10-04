<?php
if(isset($_FILES['file'])){
    $target_dir = "videos/";
    if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }
    $uploadfile = $target_dir . basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
        echo "Success! File uploaded: $uploadfile";
    } else {
        echo "Error: File upload failed.";
    }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" accept="video/mp4" required/>
    <button type="submit">Upload MP4</button>
</form>
