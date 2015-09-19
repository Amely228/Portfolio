<!DOCTYPE html>
<html>
<body>

<form action="test.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fupload" id="fuplfoad">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conn.php';
    $upload_dir = "upload";
    if (isset($_FILES['fupload'])){
        $file_name = $_FILES['fupload']['name'];
        $file_type = $_FILES['fupload']['type'];
        $file_temp = $_FILES['fupload']['tmp_name'];
        $file_size = $_FILES['fupload']['size']/1024;




        if ($file_type == "image/jpeg" or $file_type == "image/png" or $file_type == "image/gif"){
            copy($file_temp, "$upload_dir/$file_name") or die("couldn't copy");
            $file = "$upload_dir/$file_name";
            echo $file_name."<br>";
            echo $file_type."<br>";
            echo $file_size." KB"."<br>";
            echo $file_temp."<br>";
        }else{
            echo "Please chose right format.";
        }
    }
    }
    ?>