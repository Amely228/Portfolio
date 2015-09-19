<?php
    session_start();
    include 'vad.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>:|:Background||Spaces:|:</title>

        <link rel="shortcut icon" href="images/favicon.ico"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="fonts/font-awesome.css"/>
        <link rel="stylesheet" href="css/animate.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

</head>
<body id="home" data-spy="scroll" data-target=".navbar">

<!--End of Scroll to top-->
<!-- For Main Menu Nav Section -->
        <nav class="navbar navbar-inverse navbar-fixed-top custom_nav_bg" data-toggle="collapse"data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <section class="phone_meet">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs hidden-sm hidden-md col-sm-6 col-xm-4">
                            <div class="top_number">
                                <a href=""><i class="fa fa-phone fa-lg"></i> +8801717249225</a> |
                                <a href=""><i class="fa fa-mobile fa-lg"></i> +8801672175539</a>
                            </div>
                        </div>
                        <div class="hidden-xs hidden-sm hidden-md col-sm-6 col-xm-4">
                            <div class="social">
                                <ul class="social_share">
                                    <li><a href="https://www.facebook.com/shohan27" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/kenshin2727"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/pub/shohan-kenshin/100/841/63b"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                                    <li><a href="https://plus.google.com/u/0/100272604824305968018/about"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UC3enoSiiFUOwMvNBlYNeVNw"><i class="fa fa-youtube" target="_blank"></i></a></li>
                                    <li><a href="skype:shohan888?add"><i class="fa fa-skype" target="_blank"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="http://www.webzone.byethost13.com/"><img style="padding: 0px 82px;" src="images/logo.png" class="wow pulse animated animated" data-wow-iteration="3" data-wow-duration="0.5s" alt="Logo" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav custom_nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#features">Features</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="index.php#portofolio">Portofolio</a></li>
                        <li><a href="index.php#team">Team</a></li>
                        <li><a href="index.php#skills">Skills</a></li>
                        <li><a href="index.php#about">About Us</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>

                            <?php
                                if(isset($_SESSION['login']) && $_SESSION['login'] == "try_it"){?>
                                    <a href="exit.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></a>
                                <?php }else{ ?>
                                    <a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                                <?php }
                            ?>

                        </li>
            <!-- For Transitions Model - log in page -->
                <!-- Modal -->
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title">Login</h4>
                                        </div>

                                        <div class="modal-body">
                                            <!-- The form is placed inside the body of modal -->
                                            <form id="loginForm" action="login.php" method="post" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-xs-3 control-label">Email</label>
                                                    <div class="col-xs-5">
                                                        <input type="text" class="form-control" name="email" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-xs-3 control-label">Password</label>
                                                    <div class="col-xs-5">
                                                        <input type="password" class="form-control" name="password" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-xs-5 col-xs-offset-3">

                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!-- For Transitions Model - log in page END -->
                  </ul>
                </div>
              </div>
        </nav>
<!-- Profile Start here -->
<?php
    function profile_query($col)
    {
        include 'conn.php';
        $name = $_GET['name'];

        $sql = "SELECT * FROM author where email = '$name'";
        $data = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($data);

        if ($col == 'f_name') {
            echo ucfirst($row['f_name']);
        }elseif ($col == 'l_name') {
            echo ucfirst($row['l_name']);
        }elseif ($col == 'email') {
            echo $row['email'];
        }elseif ($col == 'l_name') {
            echo $row['l_name'];
        }elseif ($col == 'password') {
            echo $row['password'];
        }elseif ($col == 'dob') {
            echo $row['dob'];
        }elseif ($col == 'mobile') {
            echo $row['mobile'];
        }elseif ($col == 'website') {
            echo $row['website'];
        }elseif ($col == 'address') {
            echo $row['address'];
        }elseif ($col == 'image') {
            echo $row['image'];
        }elseif ($col == 'gender') {
            if($row['gender'] == 'm'){
                echo ucfirst('Male');
            }else{
                echo ucfirst('female');
            }

        }

    }
 ?>
        <div class="profile_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-md-2">
                        <img style="width:210px;height:220px" src="<?php profile_query('image'); ?>"
                        alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <blockquote>
                            <p><?php profile_query('f_name'); profile_query('l_name'); ?></p> <small><cite title="Source Title"><?php profile_query('address'); ?>  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                        </blockquote>
                        <p style="color: #ccc">
                            <i class="glyphicon glyphicon-envelope"></i> <?php profile_query('email') ?>
                            <br>
                            <i class="glyphicon glyphicon-phone"></i> <?php profile_query('mobile'); ?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i> <?php profile_query('website'); ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h2 style="font-family: georgia; font-weight: Bold;"><span style="color: #3ab0e2">Basic</span> <span style="color: #f7d861">Information</span></h2>
                        <div class="">
                            <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <td>First Name:</td>
                                    <td><b><?php profile_query('f_name') ?></b></td>
                                  </tr>
                                  <tr>
                                    <td>Last Name:</td>
                                    <td><b><?php profile_query('l_name') ?></b></td>
                                  </tr>
                                  <tr>
                                    <td>Date Of Birth</td>
                                    <td><b><?php profile_query('dob') ?></b></td>
                                  </tr>
                                  <tr>
                                    <td>Gender</td>
                                    <td><b><?php profile_query('gender') ?></b></td>
                                  </tr>
                                </thead>

                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- For Footer Section -->
        <?php include 'footer.php'; ?>


<!-- For All JavaScript Link INFORMATIONS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>



<!-- For Title JavaScript Link -->


</body>
</html>