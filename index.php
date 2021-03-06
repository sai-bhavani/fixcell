<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fixcell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css"
          rel="stylesheet"><!-- Optional theme -->
    <link href="css/bootstrap-theme.min.css"
          rel="stylesheet"><!-- Latest compiled and minified JavaScript -->
    <script src="jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
</head>
<body>
<div class="navbar navbar-fixed-top"
     style="-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0; margin-bottom: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                    style="vertical-align: middle; margin-top: 15px">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="height: auto;">
                <img src="/images/fixcell.png" alt="fixcell"
                     style="display: inline;"/><span></span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav nav-justified navbar-right nav-over-video" style="margin-top: 10px;">
                <li></li>
                <li class="home-nav"><a href="/repair/"><strong>Repair</strong></a></li>
                <li class="home-nav"><a href="/services"><strong>Service</strong></a></li>
                <li class="dropdown home-nav">
                    <a href="/support/about/">
                        <div class="dropbtn"><strong>Support</strong></div>
                    </a>
                    <div class="dropdown-content">
                        <a href="/support/faq/">FAQ</a>
                        <a href="/support/contacts/">Contact us</a>
                        <a href="/support/feedback/">Feedback</a>
                        <a href="/support/careers/">Career</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="jumbotron">
    <div class="overlay text-center" style="display: table;">
        <div style="display: table-cell; vertical-align: middle; color: #fff;">
            <img src="images/fixcellfirst.png" style="height: 70px;width: auto; padding-bottom: ">
            <h4>FAST, CONVIENIENT, AFFORDABLE MOBILE&nbsp;REPAIRS AT YOUR DOOR STEP</h4>
            <div style="display: block;">
                <a href="/repair/">
                    <div class="btn btn-primary" style="font-size: 1.5em;  ">Fix it!</div>
                </a>
            </div>
        </div>
    </div>
    <video id="bgVideo" autoplay loop poster="/images/repair1.jpg">
        <source src="/images/video.mp4" type="video/webm">
    </video>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="padding-top: 30px;" class="text-primary">How it Works?</h2>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Generate</h5>
                        <h5 style="color: #555;">Online Order</h5>
                        <img src="images/generate_online.png"/>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Repair</h5>
                        <h5 style="color: #555;">at Doorstep</h5>
                        <img src="images/diagnosis_repair.png"/>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Pay</h5>
                        <h5 style="color: #555;">After Repair</h5>
                        <img src="images/receive_mobile.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 70px; margin-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="text-primary">Why Fixcell?</h2>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Instant Repair</h5>
                        <img src="images/instantrepair.png"/>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Data Security</h5>
                        <img src="images/datasecurity.png"/>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="panel-primary">
                        <h5>Cash On Repair</h5>
                        <img src="images/cashonrepair.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

//error_reporting(E_ALL | E_STRICT);
//ini_set("display_errors", 1);
//ini_set("html_errors", 1);

$conn = mysqli_connect('localhost', 'root', 'avi', 'fixcell');

$query = "SELECT * FROM feedbacks where selected='1'";

$result = mysqli_query($conn, $query);
$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo "<script>";
echo "var feedbacks=" . json_encode($rows);
echo "</script>";
?>

<section id="feedbacks" style="margin-top: 70px; margin-bottom: 40px;">
    <div class="text-center">
        <h2 class="text-primary">Testimonial</h2>
    </div>
    <div id="feeds" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div id="carousel-inner" class="carousel-inner">

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#feeds" data-slide="prev" style="background: transparent !important">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#feeds" data-slide="next" style="background: transparent !important">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<script>
    $carousel_inner = $("#carousel-inner");

    if (feedbacks.length == 0) {
        $("#feedbacks").hide();
    } else {

        var first_inner = $("<div/>")
            .addClass("item")
            .addClass("active")
            .appendTo($carousel_inner);

        $("<h4/>")
            .html(feedbacks[0]['name'])
            .appendTo(first_inner);

        $("<p/>")
            .html(feedbacks[0]['feedback'])
            .appendTo(first_inner);

        $.each(feedbacks, function (i) {
            if (i !== 0) {

                var first_inner = $("<div/>")
                    .addClass("item")
                    .appendTo($carousel_inner);

                $("<h4/>")
                    .html(feedbacks[i]['name'])
                    .appendTo(first_inner);

                $("<p/>")
                    .html(feedbacks[i]['feedback'])
                    .appendTo(first_inner);
            }
        });
    }
</script>

<!--footer-->
<div id="footer"></div>
<script>
    $(document).ready(function () {
        $("#footer").load("/footer.html?version=2");
    });
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('navbar-default', $(this).scrollTop() > $nav.height());
            var $nav1 = $("li");
            $nav1.toggleClass('home-nav', $(this).scrollTop() < $nav.height());
            $(".nav").toggleClass("nav-over-video", $(this).scrollTop() < $nav.height());
            if ($(this).scrollTop() > $nav.height()) {
                $(".icon-bar").css({'background-color': '#888 !important'});
                console.log($(".icon-bar"));
            }
        });
    });

</script>
</body>
</html>
<style>
    .home-nav a:hover {
        background-color: orangered !important;
    }

    .jumbotron {
        background-color: #000000;
        background-image: url(/images/back3.jpg);
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        height: 610px;
        overflow: hidden;
        padding: 0;
        position: relative;
    }

    .overlay {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: hsla(0, 0%, 0%, 0.5);
        z-index: 10;
    }

    video {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        min-width: 100%;
        min-height: 90vh;
    }

    .navbar-default {
        background-color: #F8F8F8;
        border-color: #E7E7E7;
    }

    .nav-over-video {
        /*background-color: #FF3E01 !important;*/
        border-radius: 10px;
    }

    .nav-over-video > li > a {
        /*background-color: #FF3E01 !important;*/
        color: #fff;
        border-radius: 10px;
        margin-right: 10px;
    }

    @media only screen and (max-width: 768px) {
        video {
            display: none !important;
        }
    }

    .icon-bar {
        background-color: white;
    }

    .carousel-inner div {
        margin: auto 20%;
        text-align: center;
    }

    .panel-primary img {
        height: 50px;
    }
</style>