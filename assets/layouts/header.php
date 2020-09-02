<?php 
    $server_name = $_SERVER['PHP_SELF'];
    $trimmed = str_replace("_", " ", substr($server_name, 9, -4));
    $page_name = substr($server_name, 9);
    $page_title = ucwords($trimmed);
    if($page_title=="Index"){
        $page_title = "Home";
    }

    $directoryURI =basename($_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_title; ?> - Island Telecom</title>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="refresh" content="" />
    <!-- Refreshing  content="5;url=/html_5/tags/html_meta_tag_example.cfm"-->
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="&copy;" />
    <meta name="robot" content="index, follow" , />
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="nositelinkssearchbox" />
    <!--    <base href="http://www.example.com/">-->

    <!-- Bootstrap Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">

    <meta name="application-name" content="Island Telecom">
</head>

<body>
    <!-- === HEADER STARTS === -->
    <div class="page">
        <header id="header" class="header-main">
            <div class="container-fluid">
                <div class="row" id="topBar">
                    <div class="col-md-6 col-lg-5">
                        <div class="contact_links">
                            <i class="fa fa-phone fa-rotate-270"></i> Toll Free<a href="tel:+18668307832"> +1 866 830 7832</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <ul class="top_social_links">
                            <li><a href="#"><span class="fa fa-facebook-square fa-2x"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter-square fa-2x"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus-square fa-2x"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="navigation-block">
                    <nav class="navbar navbar-default">
                        <div class="left-side">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-brand" href="./index.php">
                                    <div class="brand_name">Island Telecom</div><img src="assets/images/Island_Telecom_Logo.png"></a>
                            </div>
                        </div>

                        <div class="right-side">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                            <div class="collapse navbar-collapse" id="main-navigation">
                                <ul class="nav navbar-nav" id="nav-block">
                                    <li><a href="./index.php">Home</a></li>
                                        <?php
                                            if($directoryURI == 'index.php')
                                            {?>
                                                <li><a href="./business.php">Business</a></li>
                                            <?php
                                            }
                                        ?>
                                    <li><a href="./service.php">Service Availability</a></li>
                                    <li><a href="./status.php">Status Map</a></li>
                                    <li><a href="./about.php">About</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </header>
        <!-- === HEADER ENDS === -->