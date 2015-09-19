<?php
    session_start();
    include ('functions.php');
    ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Web World</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="fonts/font-awesome.css"/>
        <link rel="stylesheet" href="css/jquery.circliful.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.lighter.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>
        <link rel="stylesheet" href="css/animate.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/styles.css" type="text/css"/>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <!-- Owl Carousel -->
        <link href="owl/owl.carousel.css" rel="stylesheet"/>
        <link href="owl/owl.theme.css" rel="stylesheet"/>
        <link href="owl/owl-basic.css" rel="stylesheet"/>
        <link href="owl/custom.css" rel="stylesheet"/>
        <script src="js/myself.js"></script>

</head>
<body id="home"  data-spy="scroll" data-target=".navbar">
        <div id="scrollTop" style="display: none;">
            <a href="#"><img class="up_arrow" src="images/arrow.gif" alt="" /></a>
        </div>
<!--End of Scroll to top-->
<!-- For Main Menu Nav Section -->
        <nav class="navbar navbar-inverse navbar-fixed-top custom_nav_bg" data-toggle="collapse"data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <section class="phone_meet">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs hidden-sm hidden-md col-sm-6">
                            <div class="top_number">
                                <a href=""><i class="fa fa-phone fa-lg"></i> +8801717249225</a> |
                                <a href=""><i class="fa fa-mobile fa-lg"></i> +8801672175539</a>
                            </div>
                        </div>
                        <div class="hidden-xs hidden-sm hidden-md col-sm-6">
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
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portofolio">Portofolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
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
                            <a href="#" data-toggle="modal" data-target="#loginModal">
                            <span class="glyphicon glyphicon-log-in"></span> Login</a>
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
                                            <form id="loginForm" action="login.php" method="POST" class="form-horizontal">
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

<!-- For Video Section -->
        <div class="bg_container" style="background: #000;">
            <video class="bg" src="video/background.mp4" autoplay="true" loop="true"></video><!-- loop="true" muted="false"-->
            <section class="video_text_fild">
                <div class="video_text_area pad_LR">
                    <div class="container hidden-xs hidden-sm hidden-md">
                        <div class="row">
                            <div class="col-sm-12 video_header wow fadeInDown animated" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h1>TARAY BOGRILOYAT SRIANS</h1>
                            </div>
                            <div class="col-sm-12 video_text wow slideInDown animated" data-wow-duration="2s" data-wow-delay="0.5s">
                                <p>CRAS URNA LEO, FRINGILLA NEC ALIQUAM AC, VARIUS IN ENIM. MAECENAS NON FELIS AUGUE, QUIS SAGITTIS JUSTO. DONEC GRAVIDA, ARCU IN ALIQUET CONVALLIS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<!-- For Features Section -->
        <section id="features" class="features_fild">
            <div class="container">
                <div class="features wow fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="1s">
                    <h1>FEATURES</h1>
                    <p>What makes this single-page WordPress theme unique.</p>
                </div>
                <div class="row pad_LR features_area">
                    <div class="col-lg-3 col-sm-3 focus-box wow fadeInLeft animated">
                        <div class="service-icon">
                            <a href=""><i class="pixeden our-focus-widget-image" style="background: url('images/PARALLAX EFFECT.png') no-repeat center;"></i></a>
                        </div>
                        <h5>PARALLAX EFFECT</h5>
                        <hr id="red-border-bottom">
                        <p>Create memorable pages with smooth parallax effects that everyone loves. Also, use our lightweight content slider offering you smooth and great-looking animations.</p>
                    </div>
                    <div class="col-lg-3 col-sm-3 focus-box wow fadeInLeft animated" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <a href=""><i class="pixeden our-focus-widget-image" style="background: url('images/MOVABLE SECTIONS.png') no-repeat center;"></i></a>
                        </div>
                        <h5>MOVABLE SECTIONS</h5>
                        <hr id="pink-border-bottom">
                        <p>Change the sections order and display each block exactly where you need it. Use the options panel to customize any given element with the exact color that you desire.</p>
                    </div>
                    <div class="col-lg-3 col-sm-3 focus-box wow fadeInLeft animated" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <a href=""><i class="pixeden our-focus-widget-image" style="background: url('images/WOOCOMMERCE.png') no-repeat center;"></i></a>
                        </div>
                        <h5>WOOCOMMERCE</h5>
                        <hr id="sky-border-bottom">
                        <p>Build a front page for your WooCommerce store in a matter of minutes. The neat and clean presentation will help your sales and make your store accessible to everyone.</p>
                    </div>
                    <div class="col-lg-3 col-sm-3 focus-box wow fadeInLeft animated" data-wow-delay="0.9s">
                        <div class="service-icon">
                            <a href=""><i class="pixeden our-focus-widget-image" style="background: url('images/CUSTOM CONTENT BLOCKS.png') no-repeat center;"></i></a>
                        </div>
                        <h5>CUSTOM CONTENT BLOCKS</h5>
                        <hr id="green-border-bottom">
                        <p>Showcase your portfolio, team, products, clients, about info, testimonials, pricing plans, address and map, blog, contact form, newsletter subscription form. Everything translation ready.</p>
                    </div>
                </div>
            </div>
            <div class="features_fild" style="background: url('images/bg-two.jpg') 50% 0 no-repeat fixed">
                <div class="container">
                    <div class="row pad_LR">
                        <div class="features_plan wow bounce animated" data-wow-duration="2.5s" data-wow-delay="0s">
                            <div class="features_plan_header">
                                <h3>Check out this cool parallax scrolling effect. Plus, you can put the background images in a slider sequence.</h3>
                            </div>
                            <div class="features_plan_button ">
                                <a href="" class="btn btn-primary green_button green-btn">button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- For Services Section -->
        <section id="services" class="services_fild" style="background: #000 url('images/bg_services.png') 50% 0 no-repeat fixed;">
            <div class="container">
                <div class="services">
                    <div class="wow fadeInDown animated" data-wow-duration="1.3s" data-wow-delay="1s">
                        <h1>Our Services</h1>
                    </div>
                    <div class="wow fadeInDown animated" data-wow-duration="1.7s" data-wow-delay="1.3s">
                        <p>process conserves your budget and delivers measurable success. Our clients value the strong relationships that they build with us and our focus on validated results.</p>
                    </div>
                </div>
                <div class="row pad_LR btn-new">
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInUp animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/webdv.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Web Design</h3>
                                <p>Enetfirms passionate about what we do and have the skills to deliver on time</p>
                                <button data-toggle="tooltip" data-placement="top" title="Web Design" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInDown animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/webd.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Web Development</h3>
                                <p>Web site is your key to digital marketing success. Enetfirms develop static, dynamic,</p>
                                <button data-toggle="tooltip" data-placement="top" title="Web Development" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInUp animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/app.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Web Application</h3>
                                <p>Web Application Development for wide range of uses like; Online Accounting ERP,</p>
                                <button data-toggle="tooltip" data-placement="top" title="Web Application" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInDown animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Creative Design</h3>
                                <p>Enetfirms can give you high quality Corporate Logo Design & Graphic Design Services.</p>
                                <button data-toggle="tooltip" data-placement="top" title="Creative Design" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInUp animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services5.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Apps Development</h3>
                                <p>With our expertise in mobile architecture and design, our App developers</p>
                                <button data-toggle="tooltip" data-placement="top" title="Apps Development" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInDown animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/ecom.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>E-commerce Solution</h3>
                                <p>We offer a complete solution to help grow your business online. </p>
                                <button data-toggle="tooltip" data-placement="top" title="E-commerce Solution" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInUp animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/hosting.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Domain & Hosting</h3>
                                <p>Enetfirms is a leading provider of Doamin & Web hosting services</p>
                                <button data-toggle="tooltip" data-placement="top" title="Domain & Hosting" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInDown animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Maintenance</h3>
                                <p>Enetfirms support team make your Website changes and update for you.</p>
                                <button data-toggle="tooltip" data-placement="top" title="Maintenance" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services_wrap wow fadeInUp animated">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/socialmedia.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Social Media</h3>
                                <p>Enetfirms offer social media marketing services that are to put your company</p>
                                <button data-toggle="tooltip" data-placement="top" title="Social Media" class="btn-new btn-primary custom_red_button btn-lg"> Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </section>

<!-- For Portofolio Section -->
        <section class="works" id="portofolio">
            <div class="container">
                <div class="section-header">
                    <div class="wow fadeInDown animated" data-wow-duration="1.3s" data-wow-delay="1s">
                        <h1 class="dark-text">Portofolio</h1>
                    </div>
                    <div class="wow fadeInDown animated" data-wow-duration="1.7s" data-wow-delay="1.3s">
                        <p>Showcase your work effectively and in an attractive form that your prospective clients will love.</p>
                    </div>
                </div>
                <div class="row pad_LR projects">
                    <div id="loader">
                        <div class="loader-icon"></div>
                    </div>
                    <div class="col-md-12 projects_fild wow bounceInDown animated" id="portfolio-list" data-wow-duration="1.5s">
                        <ul class="cbp-rfgrid">
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/1.jpg" alt="dribbble_235" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Dribbble 235</h5>
                                            <div class="details white-text "> Designer</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/2.png" alt="sushio_businesscards_800" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Sush.io Business Cards</h5>
                                            <div class="details white-text"> Developer</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/3.jpg" alt="8_days_eat_dribbble" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> 8 Days Eat Dribbble</h5>
                                            <div class="details white-text"> Web Application</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/4.jpg" alt="dribbble-shot" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Branding Mock-up PSD</h5>
                                            <div class="details white-text"> Apps Development</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/5.png" alt="dribbbleicon" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> iOS Game icon</h5>
                                            <div class="details white-text"> Creative Design</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/6.png" alt="pathfinder-presentation" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Pathfinder Character App</h5>
                                            <div class="details white-text"> Apps Development</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/7.jpg" alt="mints" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Creative Mints</h5>
                                            <div class="details white-text"> Maintenance</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li data-scrollreveal="enter left after 0s over 1s">
                                <a href="" class="more">
                                    <img width="285" height="214" src="images/portofolio/8.jpg" alt="dirt2" />
                                    <div class="project-info">
                                        <div class="project-details">
                                            <h5 class="white-text red-border-bottom"> Idea</h5>
                                            <div class="details white-text"> Domain & Hosting</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <div id="loaded-content"></div>
                    <a id="back-button" class="red-btn" href="#"><i class="icon-fontawesome-webfont-27"></i>Go Back</a>
            </div>
        </section>

<!-- For Team Section -->
        <section id="team" class="team" style="background: url('images/team_bg.jpg') 50% 0 no-repeat fixed">
            <div class="container">
                <div class="row pad_LR">
                    <div class="col-xs-12 wow fadeInDown animated" data-wow-duration="1.3s" data-wow-delay="1s">
                        <h2 class="team_header text-center">MEET OUR EXPERT TEAM</h2>

                        <div class="line"></div>
                    </div>
                </div>
                <div class="row pad_LR">
                    <div class="col-xs-12 wow fadeInDown animated" data-wow-duration="1.7s" data-wow-delay="1.3s">
                        <p class="text-center header_desc">We are a small team of designers and developers, who help brands with big ideas.</p>
                    </div>
                </div>
                <div class="row pad_LR">
                    <div class="col-sm-6 col-md-3 text-center mb_15 wow fadeInLeft">
                        <div class="members">
                            <img class="img-responsive img-circle center" src="images/amy.JPG" alt="Branding"/>

                            <h3 class="team_title">AMY AOVENOB</h3>
                            <span class="team_designation">CEO / Marketing Guru</span>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna.
                            </p>
                        </div>
                        <div class="social_section">
                            <ul class="social_ul">
                                <li><a class="#" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-envelope"></i> </a></li>
                            </ul>
                        </div>
                        <!--End of social_section-->
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb_15 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="members">
                            <img class="img-responsive img-circle center" src="images/shohan.jpg" alt="Branding"/>

                            <h3 class="team_title">SHOHAN</h3>
                            <span class="team_designation">Creative Director</span>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna.
                            </p>
                        </div>
                        <div class="social_section">
                            <ul class="social_ul">
                                <li><a class="#" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-envelope"></i> </a></li>
                            </ul>
                        </div>
                        <!--End of social_section-->
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb_15 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="members">
                            <img class="img-responsive img-circle center" src="images/member3.jpg" alt="Branding"/>

                            <h3 class="team_title">Olivia Wilde</h3>
                            <span class="team_designation">Lead Designer</span>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna.
                            </p>
                        </div>
                        <div class="social_section">
                            <ul class="social_ul">
                                <li><a class="#" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-envelope"></i> </a></li>
                            </ul>
                        </div>
                        <!--End of social_section-->
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb_15 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="members">
                            <img class="img-responsive img-circle center" src="images/member4.jpg" alt="Branding"/>

                            <h3 class="team_title">Ashley Greene</h3>
                            <span class="team_designation">SEO / Developer</span>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna.
                            </p>
                        </div>
                        <div class="social_section">
                            <ul class="social_ul">
                                <li><a class="#" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                <li><a class="#" href="#"> <i class="fa fa-envelope"></i> </a></li>
                            </ul>
                        </div>
                        <!--End of social_section-->
                    </div>

                </div>
                <!--End of row-->
            </div>

        </section>
<!--End of team-->
<!-- For Skills Section -->
        <section id="skills" class="skills">
            <div class="container">
                <div class="row pad_LR">
                    <div class="col-xs-12 wow fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="1s">
                        <h2 class="skills_header text-center">WE GOT SKILLS!</h2>

                        <div class="line"></div>
                    </div>
                    <div class="col-xs-12 wow fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="1s">
                        <p class="text-center header_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                            aperiam aspernatur assumenda aut corporis delectus deserunt et fuga hic ipsa nesciunt nobis, numquam
                            optio provident quaerat rem sit temporibus, veritatis?</p>
                    </div>
                </div>
                <div class="row pad_LR span3 wow flipInX center animated" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Web Design</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="89%" data-width="30"
                             data-fontsize="38" data-percent="89" data-fgcolor="#40c1eb" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Web Development</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="87%" data-width="30"
                             data-fontsize="38" data-percent="87" data-fgcolor="#db5b8e" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Web Application</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="60%" data-width="30"
                             data-fontsize="38" data-percent="60" data-fgcolor="#15C7A8" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Creative Design</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="80%" data-width="30"
                             data-fontsize="38" data-percent="80" data-fgcolor="#EB7D4B" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>
                </div>
                <!-- @end .row -->
               <div class="row pad_LR span3 wow flipInX center animated" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Apps Development</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="65%" data-width="30"
                             data-fontsize="38" data-percent="65" data-fgcolor="#4ab584" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>E-commerce Solution</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="70%" data-width="30"
                             data-fontsize="38" data-percent="70" data-fgcolor="#d7c446" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Social Media</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="85%" data-width="30"
                             data-fontsize="38" data-percent="85" data-fgcolor="#4170c5" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>

                    <div class="circle-container col-sm-6 col-md-3">
                        <h3>Maintenance</h3>

                        <div class="circlestat circle_anim center" data-dimension="200" data-text="80%" data-width="30"
                             data-fontsize="38" data-percent="80" data-fgcolor="#67ca36" data-bgcolor="#eee"
                             data-fill="#ddd"></div>
                    </div>
                </div>
                <br><br>
                <!-- @end .row -->
            </div>
        </section>
<!--End of skills-->
<!-- for About Section -->
        <section id="about" class="about_fild" style="background: url('images/abut_tex.jpg')">
            <div class="container">
                <div class="row pad_LR">
                    <div class="col-xs-12 about_us wow slideInRight animated" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <h1>About Us</h1>
                    </div>
                    <div class="col-xs-12 col-md-8 biography_fild wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h3>Biography</h3>
                        <p style="font-size: 13px">Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus. Fusce porta facilisis luctus. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis.Mauris porta odio eu risus scelerisque id facilisis ipsum dictum vitae volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar neque eu purus sollicitudin et sollicitudin dui ultricies. Maecenas cursus auctor tellus sit amet blandit. Maecenas a erat ac nibh molestie interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed lorem enim, ultricies sed sodales id, convallis molestie ipsum. Morbi eget dolor ligula. Vivamus accumsan rutrum nisi nec elementum. Pellentesque at nunc risus. Phasellus ullamcorper bibendum varius. Quisque quis ligula sit amet felis ornare porta. Aenean viverra lacus et mi elementum mollis. Praesent eu justo elit.</p>
                    </div>
                    <div class="col-xs-12 col-md-4 personal_info_fild wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="1s">
                        <h3>Personal Info</h3>
                        <i class="fa fa-phone"></i> +880 1672175539<br>
                        <i class="fa fa-map-marker"></i> Pallabi,Mirpur-12,Dhaka-1216<br>
                        <i class="fa fa-envelope-o"></i> <a href="">shohan.st27@gmail.com</a><br>
                        <i class="fa fa-laptop"></i> <a href="http://www.shohan27.byethost33.com/" target="_blank">shohan27.byethost33.com</a>
                    </div>
                </div>
            </div>
        </section>

<!-- For Google Map Section -->
        <section class="google_map_fild">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12" style="margin:0;padding:0;border-bottom:3px solid rgb(182, 187, 160)">
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:350px;width:100%;margin:0;padding:0"><div id="gmap_canvas" style="height:350px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none;margin:0;padding:0!important}</style><a class="google-map-code" href="http://wpzio.com" id="get-map-data">premium wordpress themes</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(23.8283088,90.36071370000002),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.8283088, 90.36071370000002)});infowindow = new google.maps.InfoWindow({content:"<b>MD.Tawhiduzzaman</b><br/>Pallabi<br/> Dhaka" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div>
                </div>
            </div>
        </section>

<!-- For Contact Section -->
        <section id="contact" class="contact_fild" style="background: #000 url('images/bgcontact.png') 50% 0 no-repeat fixed">
            <div class="container">
                <div class="row pad_LR">
                    <div class="contact_us wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" >
                        <h1>GET IN TOUCH</h1>
                        <p>INTEGER ALIQUET ARCU SIT AMET SEM PORTA FACILISIS. CURABITUR SAPIEN SAPIEN, BLANDIT IN MOLESTIE ET, SAGITTIS ID LOREM. NULLA MALESUADA MAURIS ID TURPIS</p>
                    </div>
                    <form action="mail.php" class="contact-form">
                        <div class="col-lg-4 col-sm-4 wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.3s">
                            <input type="text" name="name" placeholder="Your Name" class="form-control input-box" value />
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.3s">
                            <input type="email" name="email" placeholder="Your Email" class="form-control input-box" value />
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInRight animated" data-wow-duration="1s" data-wow-delay="0.3s">
                            <input type="text" name="subject" placeholder="Subject" class="form-control input-box" value />
                        </div>
                        <div class="col-lg-12 col-sm-12 wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s">
                            <textarea name="text" id="" class="form-control textarea-box" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn btn-primary custom-button red-btn wow slideInLeft animated" type="submit" name="submit" data-wow-duration="1s" data-wow-delay="0.3s">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

<!-- For Blogs Section -->
        <section id="blog" class="blog_fild">
            <div class="container">
                <div class="row pad_LR">
                    <div class="blog_area span3 wow bounceInDown center animated" data-wow-delay="1s">
                        <h1>BLOG / LATEST NEWS</h1>
                        <p>Your latest posts displayed inside a nice slider. You can customize what the slider looks like.</p>
                    </div>
                </div>
                <div id="demo">
                        <div class="row">
                          <div class="col-sm-12">
                            <div id="owl-demo" class="owl-carousel">
                                <?php
                                    include 'conn.php';
                                    $sql = "SELECT count(id) FROM blog";

                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_row($query);
                                    for($i=$row[0]; $i>=1; $i--) { $_SESSION['var'] = $i;?>
                                    <div class="item">
                                        <a href="./blog.html"><img class="col-xs-12" style="border: 3px solid #F1F1F1; border-radius: 6px; width:250px; height:220px; padding-top: 15px;" src="<?php post_query('image')?>" alt=""></a>
                                        <p style="font-family: sans-serif;"><?php post_query('post_heading'); ?></p>
                                    </div> <?php
                                    }
                                ?>
                            </div>
                            <div class="customNavigation">
                                <button class="btn prev btn-success btn-xs">Previous</button>
                                <button  class="btn next pad_LR btn-success btn-xs">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
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
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/jquery.lighter.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.js"></script>
    <script src="js/script.js"></script>

<!-- FOR Owl Carousel -->
    <script src="owl/owl.carousel.js"></script>
    <script src="owl/owl-basic.js"></script>

    <!-- THE SCRIPT INITIALISATION -->
<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->

<script>

    $(document).ready(function () {
        $('#features').parallax("50%", 0.4);
        $('#services').parallax("50%", 0.4);
        $('#portofolio').parallax("50%", 0.4);
        $('#team').parallax("50%", 0.4);
        $('#skills').parallax("50%", 0.4);
        $('#about').parallax("50%", 0.4);
        $('#contact').parallax("50%", 0.4);
        $('#blog').parallax("50%", 0.4);


        $(".filter_link:first-child").addClass("mix_active");
        $("#filter_clickarea li").click(function () {
            $(this).addClass("mix_active").siblings().removeClass("mix_active");
        });
    });


    $(window).load(function () {
        if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
        window.onmousewheel = document.onmousewheel = wheel;

        function wheel(event) {
            var delta = 0;
            if (event.wheelDelta) delta = event.wheelDelta / 120;
            else if (event.detail) delta = -event.detail / 40;

            handle(delta);
            if (event.preventDefault) event.preventDefault();
            event.returnValue = false;
        }

        function handle(delta) {
            var time = 1700;
            var distance = 350;

            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - (distance * delta)
            }, time, "easeOutCubic");
        }
    });//]]>
</script>

<!-- For Title JavaScript Link -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>