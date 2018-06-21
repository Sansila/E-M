<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>M&E</title>

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('assets/images/settings.png')?> ">

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="<?=base_url().'assets/green/css/font-awesome.min.css'?>">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/green/css/animate.min.css'?>">

        <!-- Bootstrap -->
        <link href="<?=base_url().'assets/green/css/bootstrap.min.css'?>" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="<?=base_url().'assets/green/css/carousel.css'?>" />

        <link rel="stylesheet" href="<?=base_url().'assets/green/css/isotope/style.css'?>">

        <!--Main Stylesheet-->
        <link href="<?=base_url().'assets/green/css/style.css'?>" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="<?=base_url().'assets/green/css/responsive.css'?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style type="text/css">
        .collapse ul li > ul {
            list-style: none;
            margin: 0;
            padding: 5px 0;
            top: 80%;
            border-radius: 0 0 4px 4px;
            position: absolute;
            width: 230px;
            visibility: hidden;
            opacity: 0;
            background: #fff;
            z-index: 100;
            border-bottom: 3px solid;
            -webkit-box-shadow: inset 0px 2px 3px 0px rgba(50, 50, 50, 0.24);
            -moz-box-shadow: inset 0px 2px 3px 0px rgba(50, 50, 50, 0.24);
            box-shadow: inset 0px 2px 3px 0px rgba(50, 50, 50, 0.24);
            }
            .collapse ul li:hover > ul {
            visibility: visible;
            opacity: 1;
            top: 100%;
            }
            .collapse ul li > ul li{
                width: 100%;
                text-align: center;
                padding: 10px 0px 0 0;
            }
    </style>
