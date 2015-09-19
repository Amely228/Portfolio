<?php include 'conn.php';
        include 'functions.php';
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

    <style>
        /*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout {
    position: absolute;
    top: -3px;
    right: 0;
}
.page-header { position: relative; }
.reviews {
    color: #555;
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date {
    position: absolute;
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before {
    content: '.';
    margin-left: -2px;
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
    background-size: 120px;
    border-radius: 120px;
}
input[type="file"]{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;
    background-color: rgba(0,0,0,.3);
    border-radius: 50px;
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
    </style>

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
                                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form" role="form">
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
                                                        <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Mobile Number" type="number" required />
                                                        <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Your Website" type="text" />
                                                        <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Your Current Email Address" type="text" />
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
                                                        <br />
                                                        <br />
                                                        <div class="wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="1s">
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

                            if ($email === $re_email) {
                                $f_email = $email;
                            }


                            $dob = "$year-$month-$date";

                            $sql = "INSERT INTO author (f_name, l_name, email, password, dob, gender)
                                    VALUES ('$f_name', '$l_name', '$f_email', '$pass', '$dob', '$gender')";

                            if (mysqli_query($conn, $sql)) {
                                ?>
                                <script>
                                    alert("Successfully sign up.");
                                </script>
                                <?php
                            }
                        }

                     ?>
            <!-- Sign up function is end here. -->



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

<!-- For Blog Section -->
        <section class="blog_sub_fild">
            <div class="container">
                <div class="row blog_sub_area">
                    <div class="col-sm-9">
                        <header class="head_section">
                            <?php

                                function single_post($var)
                                {
                                    include 'conn.php';


                                        $catch = $_GET['post'];
                                        $sql = "SELECT * FROM blog where id = $catch";

                                        $data = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($data);

                                        if($var == 'post_detail') {
                                                echo $row['post_detail'];

                                            }elseif($var == 'author') {
                                                echo $row['author'];

                                            }elseif($var == 'time') {
                                                echo $row['time'];

                                            }elseif($var == 'post_heading') {
                                                echo $row['post_heading'];

                                            }elseif($var == 'image') {
                                                echo $row['image'];
                                            }
                                            elseif($var == 'id') {
                                                echo $row['id'];
                                            }

                                        }



                             ?>
                            <h1><?php single_post('post_heading'); ?></h1>
                            <i>Posted on <a href=""><?php single_post('time'); ?></a> by <a href=""><?php single_post('author'); ?></a></i>
                            <img class="col-xs-5" src="<?php single_post('image') ?>" alt="Blog Title"/>
                            <p style="text-align:justify"><?php single_post('post_detail') ?></p>
                            <hr>
                            <a style="color: #000" href="">
                                <span style="/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f2f9fe+0,f2f9fe+32,f2f9fe+32,f2f9fe+32,f2f9fe+32,f2f9fe+32,f2f9fe+47,f2f9fe+48,f2f9fe+48,f2f9fe+48,d6f0fd+100 */
background: rgb(242,249,254); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(242,249,254,1) 0%, rgba(242,249,254,1) 32%, rgba(242,249,254,1) 32%, rgba(242,249,254,1) 32%, rgba(242,249,254,1) 32%, rgba(242,249,254,1) 32%, rgba(242,249,254,1) 47%, rgba(242,249,254,1) 48%, rgba(242,249,254,1) 48%, rgba(242,249,254,1) 48%, rgba(214,240,253,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(242,249,254,1)), color-stop(32%,rgba(242,249,254,1)), color-stop(32%,rgba(242,249,254,1)), color-stop(32%,rgba(242,249,254,1)), color-stop(32%,rgba(242,249,254,1)), color-stop(32%,rgba(242,249,254,1)), color-stop(47%,rgba(242,249,254,1)), color-stop(48%,rgba(242,249,254,1)), color-stop(48%,rgba(242,249,254,1)), color-stop(48%,rgba(242,249,254,1)), color-stop(100%,rgba(214,240,253,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(242,249,254,1) 0%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 47%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(214,240,253,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(242,249,254,1) 0%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 47%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(214,240,253,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(242,249,254,1) 0%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 47%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(214,240,253,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(242,249,254,1) 0%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 32%,rgba(242,249,254,1) 47%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(242,249,254,1) 48%,rgba(214,240,253,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f9fe', endColorstr='#d6f0fd',GradientType=0 ); /* IE6-9 */
; padding: 10px 30px 5px;">
                                    <i style="" class="fa fa-thumbs-up">

                                    </i>
                                    <kbd style="">2</kbd>
                                </span>
                            </a>
                            <a style="color: #000;" href="">
                                <span style="/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f6f8f9+0,e5ebee+50,d7dee3+51,f5f7f9+100;White+Gloss */
background: rgb(246,248,249); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(246,248,249,1) 0%, rgba(229,235,238,1) 50%, rgba(215,222,227,1) 51%, rgba(245,247,249,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(246,248,249,1)), color-stop(50%,rgba(229,235,238,1)), color-stop(51%,rgba(215,222,227,1)), color-stop(100%,rgba(245,247,249,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=0 ); /* IE6-9 */
 padding: 10px 30px 5px;">
                                    <span>
                                        <i class="glyphicon glyphicon-comment">

                                        </i> 2 comments</span>
                                </span>
                            </a>

                            <hr style="margin-top: 4px;">
                            <a href="blog.php"><button type="button" class="btn btn-default btn3d"><span class="glyphicon glyphicon-chevron-left"></span> Go back Blog Page</button></a>
                            <!--
                            <h3>Leave a Reply</h3>
                            <i>Your email address will not be published. Required fields are marked *</i>

                            <form action="" class="contact-form blog_contact">
                                <div title="Input your name" class="col-lg-4 col-sm-4 wow fadeInLeft animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <input type="text" name="" placeholder="Name*" class="form-control input-box" value />
                                </div>
                                <div title="Input your E-mail" class="col-lg-4 col-sm-4 wow fadeInDown animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <input type="email" name="" placeholder="Email*" class="form-control input-box" value />
                                </div>
                                <div title="Input your subject" class="col-lg-4 col-sm-4 wow fadeInRight animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <input type="text" name="" placeholder="Subject" class="form-control input-box" value />
                                </div>
                                <div title="Input your comment" class="col-lg-12 col-sm-12 wow bounceInUp animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <textarea name="" id="" class="form-control textarea-box" placeholder="Comment"></textarea>
                                </div>
                                <button title="Press Submit" class="btn btn-primary custom-button red-btn wow slideInLeft animated has-success" type="submit" data-wow-duration="1s" data-wow-delay="0.3s">Post Comment</button>
                            </form> -->

                        </header>

                        <!--  Comment Box Section START-->
                          <div class="row">
                            <div class="col-sm-10 col-sm-offset-1" id="logout">
                                <div class="page-header">
                                    <h3 class="reviews">Leave your comment</h3>
                                    <!-- <div class="logout">
                                        <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#logout').hide(); $('#login').show()">
                                            <span class="glyphicon glyphicon-off"></span> Logout
                                        </button>
                                    </div> -->
                                </div>
                                <div class="comment-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                                        <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="comments-logout">
                                            <ul class="media-list">
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Marco </h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        Great snippet! Thanks for sharing.
                                                      </p>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                      <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                                                  </div>
                                                </div>
                                                <div class="collapse" id="replyOne">
                                                    <ul class="media-list">
                                                        <li class="media media-replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Nice job Maria.
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                        <li class="media media-replied" id="replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Thank you Guys!
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kurafire/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Nico</h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        I'm looking for that. Thanks!
                                                      </p>
                                                      <div class="embed-responsive embed-responsive-16by9">
                                                          <iframe class="embed-responsive-item" src="//www.youtube.com/embed/80lNjkcp6gI" allowfullscreen></iframe>
                                                      </div>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        Yehhhh... Thanks for sharing.
                                                      </p>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                      <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyTwo"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
                                                  </div>
                                                </div>
                                                <div class="collapse" id="replyTwo">
                                                    <ul class="media-list">
                                                        <li class="media media-replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Lizz</h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Classy!
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="add-comment">
                                            <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Comment</label>
                                                    <div class="col-sm-10">
                                                      <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group">
                                                          <div class="input-group-addon">http://</div>
                                                          <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-10 col-sm-offset-1" id="login">
                                <div class="page-header">
                                    <h3 class="reviews">Leave your comment</h3>
                                    <div class="logout">
                                        <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#login').hide(); $('#logout').show()">
                                            <span class="glyphicon glyphicon-off"></span> Login
                                        </button>
                                    </div>
                                </div>
                                <div class="comment-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#comments-login" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                                        <li><a href="#add-comment-disabled" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                                        <li><a href="#new-account" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Create an account</h4></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="comments-login">
                                            <ul class="media-list">
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Marco</h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        Great snippet! Thanks for sharing.
                                                      </p>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                      <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyThree"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                                                  </div>
                                                </div>
                                                <div class="collapse" id="replyThree">
                                                    <ul class="media-list">
                                                        <li class="media media-replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Nice job Maria.
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                        <li class="media media-replied" id="replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Thank you Guys!
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kurafire/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Nico</h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        I'm looking for that. Thanks!
                                                      </p>
                                                      <div class="embed-responsive embed-responsive-16by9">
                                                          <iframe class="embed-responsive-item" src="//www.youtube.com/embed/80lNjkcp6gI" allowfullscreen></iframe>
                                                      </div>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <a class="pull-left" href="#">
                                                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                  <div class="well well-lg">
                                                      <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                                                      <ul class="media-date text-uppercase reviews list-inline">
                                                        <li class="dd">22</li>
                                                        <li class="mm">09</li>
                                                        <li class="aaaa">2014</li>
                                                      </ul>
                                                      <p class="media-comment">
                                                        Yehhhh... Thanks for sharing.
                                                      </p>
                                                      <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                      <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
                                                  </div>
                                                </div>
                                                <div class="collapse" id="replyFour">
                                                    <ul class="media-list">
                                                        <li class="media media-replied">
                                                            <a class="pull-left" href="#">
                                                              <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Lizz</h4>
                                                                  <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul>
                                                                  <p class="media-comment">
                                                                    Classy!
                                                                  </p>
                                                                  <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                              </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="add-comment-disabled">
                                            <div class="alert alert-info alert-dismissible" role="alert">
                                              <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                              </button>
                                              <strong>Hey!</strong> If you already have an account <a href="#" class="alert-link">Login</a> now to make the comments you want. If you do not have an account yet you're welcome to <a href="#" class="alert-link"> create an account.</a>
                                            </div>
                                            <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Comment</label>
                                                    <div class="col-sm-10">
                                                      <textarea class="form-control" name="addComment" id="addComment" rows="5" disabled></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group">
                                                          <div class="input-group-addon">http://</div>
                                                          <input type="text" class="form-control" name="uploadMedia" id="uploadMedia" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button class="btn btn-success btn-circle text-uppercase disabled" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="new-account">
                                            <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="name" id="name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                      <input type="email" class="form-control" name="email" id="email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                      <input type="password" class="form-control" name="password" id="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label for="agreeTerms" class="col-sm-offset-2 col-sm-10">
                                                            <input type="checkbox" name="agreeTerms" id="agreeTerms"> I agree all <a href="#">Terms & Conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Create an account</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- <div class="page-header text-center">
                            <h3 class="reviews"><img src="images/logo.png" alt=""> Uicomments by <a href="https://twitter.com/maridlcrmn">webzone.com</a></h3>
                          </div>
                          <div class="notes text-center"><small>webzone.com</small></div>

                    <!--  Comment Box Section END-->

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
                                        include 'conn.php';

                                        $sql = "SELECT count(id) FROM blog";

                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_row($query);

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