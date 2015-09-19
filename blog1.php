<?php

    include 'conn.php';
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
                                <a href=""><i class="fa fa-phone fa-lg"></i> +35315417217 |</a>
                                <a href=""><i class="fa fa-mobile fa-lg"></i> +353877165988</a>
                            </div>
                        </div>
                        <div class="hidden-xs hidden-sm hidden-md col-sm-6 col-xm-4">
                            <div class="social">
                                <ul class="social_share">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
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

                        // $perpage = 3;

                        // if(isset($_GET["page"])){
                        //     $page = intval($_GET["page"]);
                        // }
                        // else {
                        // $page = 1;
                        // }
                        // $calc = $perpage * $page;
                        // $start = $calc - $perpage;
                        $result = mysqli_query($conn, "select * from blog");

                        $rows = mysqli_num_rows($result);










                                    $row = mysqli_fetch_row($result);
                                    while($look = mysqli_fetch_assoc($result))  {  ?>
                                        <h2 style="font-family:Georgia;color:#9B8C8C;text-transform: capitalize;"><?php echo $look['post_heading']; ?></h2>
                                        <div class="hrJn_color"><hr ></div>
                                        <i>Posted on <span style="color:#2891BE;font-weight:bold"><?php echo $look['time']; ?></span> by <a style="text-transform: capitalize;color:#2891BE;font-weight:bold" href=""><?php echo $look['author']; ?></a></i>
                                        <br><br>
                                        <a href="./single.html"><img class="col-xs-12" style="width:100%;height:250px" src="<?php echo $look['image']; ?>" alt="Blog Title"/></a>
                                        <p><?php echo $look['post_detail']; ?></p>
                                        <hr><?php


                                    }


                             ?>
                            <!--  -->


                            <!-- <nav>
                              <ul class="pager">
                                <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                                <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                              </ul>
                            </nav> -->

                        </header>
                    </div>
                    <br>
                    <div class="col-sm-3 colum_left_border">
                        <div class="create_post_menu">
                            <a href="./post.php" target="_blank"><button type="button" class="btn btn-info btn-block raised btn3d"><i>Post</i></button></a>
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
                            <div class="hrJn_color"><hr ></div>
                            <ul>
                            <!-- Show sidebar heading -->
                                <?php

                                    for($i=$row[0]; $i>=1; $i--){ $_SESSION['var'] = $i; ?>
                                        <li><a href=""><?php post_query('post_heading') ?></a></li> <?php
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
        <footer class="footer">
            <div class="container">
                <div class="row pad_LR">
                    <div class="footer_box_wrap">
                        <div class="col-md-3 footer-box four-cell company-details">
                            <div class="icon-top red-text">
                                <img src="images/map25-redish.png" alt="Map">
                            </div>
                            <p>San Francisco - Address - 128 California Street 3200.</p>
                        </div>
                        <div class="col-md-3 footer-box four-cell company-details">
                            <div class="icon-top red-text">
                                <img src="images/envelope4-green.png" alt="Map">
                            </div>
                            <a href="">friends@themeisle.com</a>
                        </div>
                        <div class="col-md-3 footer-box four-cell company-details">
                            <div class="icon-top red-text">
                                <img src="images/telephone65-blue.png" alt="Map">
                            </div>
                            <p>0 332 548 954</p>
                        </div>
                        <div class="col-md-3 footer-box four-cell copyright">
                            <ul class="sociall">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-android"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-linux"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                <li><a href=""><i class="fa fa-tumblr"></i></a></li>
                                <li><a href=""><i class="fa fa-btc"></i></a></li>
                            </ul>
                            <p id="amy_copyright">&copy; 2014 <a href=""><i>WebZone</i></a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


<!-- For All JavaScript Link INFORMATIONS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/script.js"></script>

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
            else if (event.detail) delta = -event.detail / 3;

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