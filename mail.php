<?php



                                $name = $_POST["name"];
                                $sub = $_POST["subject"];
                                $email = $_POST["email"];
                                $massage =$_POST["text"];
                                $headers = "From: ".$name."<".$email.">\r\n" ;

                                if(isset($_POST["submit"]) && !empty($_POST["email"]) && $_SERVER['REQUEST_METHOD'] == 'POST'){

                                    mail("shohan.st27@gmail.com" ,$sub,$massage,$headers);
                                    echo "your message successfully sent.";
                                    echo '<a href="index.php">Go back</a>';


                                }else{

                                    echo "Something missing.";
                                    echo '<a href="index.php#contact">Go back</a>';
                                }
                                // header('Location: index.php#contact');

 ?>