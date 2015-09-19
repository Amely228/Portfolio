
<?php
    session_start();
    include 'conn.php';

    if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $sql = "SELECT * FROM author
                    WHERE email = '$email'";
            $data = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($data);

            if ($row['password'] === $pass) {

                $_SESSION['login'] = 'try_it';
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['f_name'] = $row['f_name'];
                $_SESSION['l_name'] = $row['l_name'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['website'] = $row['website'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['image'] = $row['image'];
                $sleep = 1;
                header('location: blog.php');
            }else {
                echo "Your email or password is wrong.";


            }
        }
    }




 ?>