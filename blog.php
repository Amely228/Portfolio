<?php
    session_start();
    include ('functions.php');?>
<!DOCTYPE HTML>
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
        <div id="scrollTop" style="display: none;">
            <a href="#"><img class="up_arrow" src="images/arrow.gif" alt="" /></a>
        </div>
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
                                    <li><a href="https://twitter.com/kenshin2727" target="_blank"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/pub/shohan-kenshin/100/841/63b" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                                    <li><a href="https://plus.google.com/u/0/100272604824305968018/about" target="_blank"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UC3enoSiiFUOwMvNBlYNeVNw" target="_blank"><i class="fa fa-youtube" target="_blank"></i></a></li>
                                    <li><a href="skype:shohan888?add"><i class="fa fa-skype" target="_blank" target="_blank"></i></a></li>
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
                            <a href="#" data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li>
            <!-- For Transitions Model - Sign up -->
                <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Webzone <code>LOGO</code></h4>
                                                            <i>It's free and always will be.</i>

                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xs-8  well well-sm">
                                                                        <legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Sign Up</legend>
                                                                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form" role="form">
                                                                        <div class="row">
                                                                            <div class="col-xs-6 col-md-6">
                                                                                <input class="form-control" name="f_name" placeholder="First Name" type="text"
                                                                                    required autofocus />
                                                                            </div>
                                                                            <div class="col-xs-6 col-md-6">
                                                                                <input class="form-control" name="l_name" placeholder="Last Name" type="text" required />
                                                                            </div>
                                                                        </div>
                                                                        <input id="email" style="margin-bottom: 7px;" class="form-control" name="email" placeholder="Your Email" type="email" required  /><p id="email_err" style="text-align:center;"></p>
                                                                        <input id="re_email" style="margin-bottom: 7px;" class="form-control" name="re_email" placeholder="Re-enter Email" type="email" required onblur="checkEmail()" />
                                                                        <input class="form-control" style="margin-bottom: 7px;" name="mobile" placeholder="Mobile Number" type="text" required />
                                                                        <input class="form-control" style="margin-bottom: 7px;" name="website" placeholder="Your Website" type="text" />
                                                                        <input class="form-control" style="margin-bottom: 7px;" name="address" placeholder="Your Current Address" type="text" />
                                                                        <input class="form-control" name="password" placeholder="New Password" type="password" required />

                                                                        <label for="">
                                                                            Birth Date</label>
                                                                        <div class="row">
                                                                            <div class="col-xs-4 col-md-4">
                                                                                <select class="form-control" name="mon">
                                                                                    <option value="Month">Month</option>
                                                                                    <option value="01">January</option>
                                                                                    <option value="02">February</option>
                                                                                    <option value="03">March</option>
                                                                                    <option value="04">April</option>
                                                                                    <option value="05">May</option>
                                                                                    <option value="06">June</option>
                                                                                    <option value="07">July</option>
                                                                                    <option value="08">August</option>
                                                                                    <option value="09">September</option>
                                                                                    <option value="10">October</option>
                                                                                    <option value="11">November</option>
                                                                                    <option value="12">December</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xs-4 col-md-4">
                                                                                <select class="form-control" name="date">
                                                                                    <option value=>Day</option>
                                                                                    <option value="01">01</option>
                                                                                    <option value="02">02</option>
                                                                                    <option value="03">03</option>
                                                                                    <option value="04">04</option>
                                                                                    <option value="05">05</option>
                                                                                    <option value="06">06</option>
                                                                                    <option value="07">07</option>
                                                                                    <option value="08">08</option>
                                                                                    <option value="09">09</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="22">22</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="26">26</option>
                                                                                    <option value="27">27</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="29">29</option>
                                                                                    <option value="30">30</option>
                                                                                    <option value="31">31</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xs-4 col-md-4">
                                                                                <select class="form-control" name="year">
                                                                                    <option value="Year">Year</option>
                                                                                    <option value="2000">2000</option>
                                                                                    <option value="2001">2001</option>
                                                                                    <option value="2002">2002</option>
                                                                                    <option value="2003">2003</option>
                                                                                    <option value="2004">2004</option>
                                                                                    <option value="2005">2005</option>
                                                                                    <option value="2006">2006</option>
                                                                                    <option value="2007">2007</option>
                                                                                    <option value="2008">2008</option>
                                                                                    <option value="2009">2009</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="gender" id="inlineCheckbox1" value="m" />
                                                                            Male
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="gender" id="inlineCheckbox2" value="f" />
                                                                            Female
                                                                        </label>
                                                                        <br><br>
                                                                        <div>
                                                                            <div>
                                                                                <input type="file" name="fupload" class="filestyle" data-buttontext="Find file" id="filestyle-2" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);" required >
                                                                                    <div class="bootstrap-filestyle input-group">
                                                                                            <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                                                                <label for="filestyle-2" class="btn btn-default">
                                                                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                                                                    Find file
                                                                                                </label>
                                                                                            </span>

                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <br />
                                                                        <button id="butt" class="btn btn-lg btn-primary btn-block" type="submit">
                                                                            Sign up</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            <!-- For Transitions Model - Sign up page  END -->
                            <!-- Sign up function is start here. -->
                                    <?php

                                        include("conn.php");

                                        //  Collect data from user

                                        if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
                                        {
                                            $f_name = $_POST['f_name'];
                                            $l_name = $_POST['l_name'];
                                            $email = $_POST['email'];
                                            $re_email = $_POST['re_email'];
                                            $pass = $_POST['password'];
                                            $month = $_POST['mon'];
                                            $date = $_POST['date'];
                                            $year = $_POST['year'];
                                            $gender = $_POST['gender'];
                                            $mobile = $_POST['mobile'];
                                            $website = $_POST['website'];
                                            $address = $_POST['address'];


                                                    $upload_dir = "upload";
                                                        if (isset($_FILES['fupload'])){
                                                            $file_name = $_FILES['fupload']['name'];
                                                            $file_type = $_FILES['fupload']['type'];
                                                            $file_temp = $_FILES['fupload']['tmp_name'];
                                                            $file_size = $_FILES['fupload']['size']/1024;



                                                            // echo $file_name."<br>";
                                                            // echo $file_type."<br>";
                                                            // echo $file_size." KB"."<br>";
                                                            // echo $file_temp."<br>";
                                                            if ($file_type == "image/jpeg" or $file_type == "image/png" or $file_type == "image/gif"){
                                                                copy($file_temp, "$upload_dir/$file_name") or die("couldn't copy");
                                                                $file = "$upload_dir/$file_name";
                                                            }else{
                                                                echo "Please chose right format.";
                                                            }
                                                        }

                                            if ($email === $re_email) {
                                                $f_email = $email;
                                            }


                                            $dob = "$year-$month-$date";

                                            $sql = "INSERT INTO author (f_name, l_name, email, password, dob, gender, mobile, website, address, image)
                                                    VALUES ('$f_name', '$l_name', '$f_email', '$pass', '$dob', '$gender', '$mobile', '$website', '$address', '$file')";

                                            if (mysqli_query($conn, $sql)) {
                                                ?>
                                                <script>
                                                    alert("Successfully sign up.");
                                                </script>
                                                <?php
                                            }else{
                                                echo mysqli_error($conn);
                                            }
                                        }

                                     ?>
            <!-- Sign up function is end here. -->



                        <li>
                            <!-- Login button replace Logout -->
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

<!-- For Blog Section -->
        <section class="blog_sub_fild">
            <div class="container">
                <div class="row blog_sub_area">
                    <div class="col-sm-9">
                        <header class="head_section">
                                <!-- Show blog post -->
                                <?php
                                    include 'conn.php';

                                    $sql = "SELECT count(id) FROM blog";

                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_row($query);
                                    for($i=$row[0]; $i>=1; $i--) { $_SESSION['var'] = $i;  ?>
                                        <h2 style="font-family:Georgia;color:#9B8C8C;text-transform: capitalize;"><a style="text-decoration:none; text-align: justify;" href="single.php?post=<?php post_query('id') ?>"><?php post_query('post_heading'); ?></a></h2>

                                        <i>Posted on <span style="color:#2891BE;font-weight:bold"><?php post_query('time'); ?></span> by <a style="text-transform: capitalize;color:#2891BE;font-weight:bold" href=""><?php post_query('author'); ?></a></i>
                                        <br><br>
                                        <a href="single.php?post=<?php post_query('id') ?>"><img class="col-xs-5" src="<?php post_query('image'); ?>" alt="Blog Title"/></a>
                                        <p><?php post_query('post_detail'); ?></p>
                                        <hr><?php
                                    }
                                 ?>
                                <!--  -->

                                <nav>
                                  <ul class="pager">
                                    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                                  </ul>
                                </nav>
                        </header>
                    </div>
                    <br>
                    <div class="col-sm-3 colum_left_border">

                        <!-- Show person name -->
                        <?php

                            if(isset($_SESSION['login']) && $_SESSION['login'] == "try_it") {
                            echo '<div class="person">';
                                echo ('<img width="60px" height="60px" src='.$_SESSION['image'].' alt="PROFILE PICTURE"> <a href="profile.php?name='.$_SESSION['email'].'">'.ucfirst($_SESSION['f_name']).' '.ucfirst($_SESSION['l_name']).'</a>');
                            echo '</div>';
                            }

                         ?>


                        <div class="create_post_menu">
                            <a href="./post.php" target="_blank"><button type="button" class="btn btn-info btn-block raised btn3d"><i>Create Post</i></button></a>
                        </div>
                        <div class="search_from_fild">
                            <form action="" class="search-form">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                        </div>
                        <div class="side_bar_fild">
                            <h4>RECENT POSTS</h4>
                            <ul>
                            <!-- Show sidebar heading -->
                                <?php

                                    for($i=$row[0]; $i>=1; $i--){ $_SESSION['var'] = $i; ?>
                                        <li><a href="single.php?post=<?php post_query('id') ?>"><?php post_query('post_heading') ?></a></li> <?php
                                    }
                                 ?>
                                 <!--  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- For Footer Section -->
        <?php include 'footer.php'; ?>


<!-- For All JavaScript Link INFORMATIONS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/script.js"></script>



<!-- For Title JavaScript Link -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>