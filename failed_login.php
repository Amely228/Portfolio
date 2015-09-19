<?php session_start(); ?>
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
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

    <style>
        #login {
    padding-top: 200px;
    padding-bottom: 100px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
    margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
    text-align: center;
    display: block;
}

/*    --------------------------------------------------
    :: Inputs & Buttons
    -------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
    background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
    -------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
    </style>

</head>
<body style="background: url('images/failed_log_bg.jpg')">
    <!-- For Main Menu Nav Section -->
        <nav class="navbar navbar-inverse navbar-fixed-top custom_nav_bg" data-toggle="collapse"data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <section class="phone_meet">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xm-4">
                            <div class="top_number">
                                <a href=""><i class="fa fa-phone fa-lg"></i> +8801717249225</a> |
                                <a href=""><i class="fa fa-mobile fa-lg"></i> +8801672175539</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xm-4">
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
                  <a href="#"><img style="padding: 0px 82px;" src="images/logo.png" class="wow pulse animated animated" data-wow-iteration="3" data-wow-duration="0.5s" alt="Logo" /></a>
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
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
                                                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign Up</legend>
                                            <form action="#" method="post" class="form" role="form">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">
                                                        <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                                            required autofocus />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6">
                                                        <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                                                    </div>
                                                </div>
                                                <input style="margin-bottom: 7px;" class="form-control" name="youremail" placeholder="Your Email" type="email" />
                                                <input style="margin-bottom: 7px;" class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                                                <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Mobile Number" type="number" required />
                                                <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Your Website" type="text" />
                                                <input class="form-control" style="margin-bottom: 7px;" name="" placeholder="Your Current Email Address" type="text" />
                                                <input class="form-control" name="password" placeholder="New Password" type="password" />
                                                <label for="">
                                                    Birth Date</label>
                                                <div class="row">
                                                    <div class="col-xs-4 col-md-4">
                                                        <select class="form-control">
                                                            <option value="Month">Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select class="form-control">
                                                            <option value="Day">Day</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select class="form-control">
                                                            <option value="Year">Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                                                    Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
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
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                    Sign up</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- For Transitions Model - Sign up page  END -->


                  </ul>
                </div>
              </div>
        </nav>


    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                    <h1>Log in with your email account</h1>
                        <form role="form" action="login.php" method="POST" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                            </div>
                            <div class="form-group">
                                <label for="key" class="sr-only">Password</label>
                                <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <span class="character-checkbox" onclick="showPassword()"></span>
                                <span class="label">Show password</span>
                            </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                        </form>
                        <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                        <hr>
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Recovery password</h4>
                </div>
                <div class="modal-body">
                    <p>Type your email account</p>
                    <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-custom">Recovery</button>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->





            <!-- For All JavaScript Link INFORMATIONS -->
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/wow.js"></script>
                <script src="js/script.js"></script>

<!-- For Model Simple -->
<script>
    function showPassword() {

    var key_attr = $('#key').attr('type');

    if(key_attr != 'text') {

        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');

    } else {

        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');

    }

}
</script>


</body>
</html>