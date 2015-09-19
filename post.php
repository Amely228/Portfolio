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
<body id="" style="background: url('images/post/postBG.jpg') 50% 0 no-repeat fixed;">
        <div id="scrollTop" style="display: none;">
            <a href="#"><img class="up_arrow" src="images/arrow.gif" alt="" /></a>
        </div>
<!--End of Scroll to top-->

        <section class="post_section_fild">
            <div class="container">
                <div class="post_navbar pull-right">
                  <ul class=" navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="exit.php">LOG OUT</a></li>
                  </ul>
                </div>
                <header class="post_header">
                    <h1>Thinking your <span style="color: #3ab0e2">right</span> <span style="color: #f7d861">choices</span></h1>
                </header>
                <div style="padding-top: 20px; padding-bottom: 20px;" class="row post_area">
                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="contact-form blog_contact">
                        <div title="Input your E-mail" class="col-lg-6 col-sm-6 wow fadeInDown animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                            <input type="text" name="name" placeholder="name" class="form-control input-box" required />
                        </div>
                        <div title="Input your subject" class="col-lg-6 col-sm-6 wow fadeInDown animated has-success" data-wow-duration="1s" data-wow-delay="0.3s">
                            <input type="text" name="subject" placeholder="Subject" class="form-control input-box" required />
                        </div>
                        <div class="col-lg-12 col-sm-12" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                            <textarea name="text" id="" class="form-control textarea-box" placeholder="Text" required ></textarea>
                        </div>
                        <button class="btn btn-primary custom-button red-btn wow slideInLeft animated has-success" type="submit" data-wow-duration="1s" data-wow-delay="0.3s">Post Comment</button>
                        <div class="col-sm-8 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="1s">
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
                    </form>
                </div>
            </div>
        </section>

<?php
    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'conn.php';
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

        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $text = $_POST['text'];
        date_default_timezone_set("Asia/Dhaka");
        $time = date('Y-m-d h:i:s');

        $sql = "INSERT INTO blog (author,post_heading,post_detail,image,time)
                VALUES ('$name', '$subject', '$text', '$file', '$time')";
        $query = mysqli_query($conn, $sql);
    }

 ?>


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