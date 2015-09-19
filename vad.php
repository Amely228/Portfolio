


<?php


    if(!(isset($_SESSION['login']) && $_SESSION['login'] == "try_it")) {
        header('Location: failed_login.php');
        exit;
    }
 ?>