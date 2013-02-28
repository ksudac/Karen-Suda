<html>
<head>
<title>Photo Uploader</title>
</head>
<body>
<h2>Photo Uploader</h2>
<h4>

<?php

$MAX_FILE_SIZE = $_POST['MAX_FILE_SIZE'];
$count = 1;
$newpath = "images/" . "img0" . $count . ".gif";
$filelist = glob("images/img*.gif");
if ($filelist != false) {
    foreach ($filelist as $file) {
        $count = $count + 1;
        $newpath = "images/" . substr($file, strrpos($file, '/'), + 0)  . "img0" . $count . ".gif";
    }
}


if (isset($_FILES['upfile'])) {
    if($_FILES['upfile']['error'] != UPLOAD_ERR_OK || $_FILES['upfile']['type'] != "image/gif" || $_FILES['upfile']['size'] > $MAX_FILE_SIZE) {
        print "<p>Files were not uploaded successfully, please try again</p>";
        print "<p><a href='projects_php.html'>Try Uploading Again</a> | " . "<a href='gallery.php'>View Gallery</a></p>";
    }

    else {
        move_uploaded_file($_FILES['upfile']['tmp_name'], $newpath) 
            or die("Can't move file to $newpath");
        chmod($newpath, 0644);
        print "<p>Success!</p>";
        print "<a href='gallery.php'>View Gallery</a>";
    }    
}
  
?>

</h4>
</body>
</html>