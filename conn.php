

<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "my_web";

    $conn = mysqli_connect($host, $username, $password, $db);

    if(!$conn) {
        die("Couldn't connect.");
    }

 ?>