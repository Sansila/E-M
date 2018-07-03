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
        <script src="<?=base_url().'assets/green/js/jquery-1.12.3.min.js'?>"></script>

        <!--Counter UP Waypoint-->
        <script src="<?=base_url().'assets/green/js/waypoints.min.js'?>"></script>
        <!--Counter UP-->
        <script src="<?=base_url().'assets/green/js/jquery.counterup.min.js'?>"></script>

    </head>
   
    <style type="text/css">
        .truncate{
        width: 300px;
        height: 150px;
        white-space: pre-wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 15px;
    }
    .dropdown-ul {
        text-decoration-color: black;
    }
    </style>
<!-- <body data-spy="scroll" data-target="#header"> -->
    <body>
    <!--Start Hedaer Section-->
    <section id="header">
        <div class="header-area">
            <div class="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                            <div class="address">
                                <i class="fa fa-home floatleft"></i>
                                <p>Elephant Road, Dhaka 1205, Bangladesh</p>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                            <div class="phone">
                                <i class="fa fa-phone floatleft"></i>
                                <p>+ 8801532-987039</p>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                        <div class="col-md-4">
                            <div class="social_icon text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of top header-->
            <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                <div class="container">
                    <nav class="navbar navbar-default zero_mp ">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand custom_navbar-brand" href="<?=base_url('site/index')?>"><img src="<?=base_url().'assets/green/img/logo.png'?>" alt=""></a>
                        </div>
                        <!--End of navbar-header-->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu">
                                <!-- <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li> -->
                                <!-- <li><a href="#welcome">about</a></li>
                                <li><a href="#portfolio">project</a></li>
                                <li><a href="#counter">achivment</a></li>
                                <li><a href="#event">event</a></li>
                                <li><a href="#testimonial">testimonial</a></li>
                                <li><a href="#blog">blog</a></li>
                                <li><a href="#contact">contact us</a></li> -->
                                <?php
                                $menu = $this->db->query("SELECT * FROM tblmenus WHERE parentid=0 AND layout_id <> 1 AND  is_active=1 ORDER BY tblmenus.order ASC")->result();
                                $sl = "";
                                $i = 0;
                                foreach ($menu as $men) {
                                $active = '';
                                $men_name = $men->menu_name;
                                $parentid = $men->menu_id;
                                $menu_type=$men->menu_type;
                                if ($menu_type > 1){
                                $menu_type=$men->menu_type;
                                }else{
                                $menu_type='';
                                }

                                if($men->link !="")
                                {
                                    $link = site_url($men->link.'/'.$men->menu_id);
                                }else
                                {
                                    $link = "";
                                }
                                //$link = '#';
                                if($menu_type == 10) {
                                $link = $link;
                                }else if($menu_type == 9) {
                                $link = $link;
                                }else if($menu_type == 3) {
                                $link = $link;
                                }else if($menu_type == 4) {
                                $link = $link;
                                }else if($menu_type == 6) {
                                $link = $link;
                                }else if($menu_type == 7) {
                                $link = $link;
                                }else if($menu_type == 11) {
                                $link = $link;
                                }
                                
                                // $b=$this->uri->segment(3);
                                // $a= preg_replace("/[^1-9]/", '', $b);
                                // $c=trim($a,"2");
                                $active = $this->uri->segment(3) == $men->menu_id ? 'active' : '';
                                // alert("ljtrmht");
                                // $link = '#';
                                $Countparent = $this->db->query("SELECT count(menu_id) as count from tblmenus where parentid ='$parentid' ")->row()->count;
                                if ($Countparent > 1) {
                                //$link = '#';
                                }
                                ?>
                                <li class="<?=$active?> dropdown-icon">
                                    <?php 
                                        if($men->link !="")
                                        {
                                    ?>
                                        <a href="<?=$link?>">
                                    <?php
                                        }else{
                                    ?>
                                        <a>
                                    <?php
                                        }
                                    ?>
                                    
                                    <i class="" ></i><?=$men_name?></a>
                                    <?php
                                    $sql_sub = "SELECT * FROM tblmenus WHERE is_active=1 AND level=1 AND parentid ='$parentid' ORDER BY tblmenus.order ASC ";
                                    $sub_menus = $this->db->query($sql_sub)->result();
                                    if(count($sub_menus)>0){
                                    ?>
                                    <ul class="dropdown-ul">
                                        <?php
                                        
                                        foreach($sub_menus as $l_1){
                                        $submenuname=$l_1->menu_name;
                                        $link = '#';
                                        if($l_1->article_id != 0){
                                        $link = site_url($l_1->link).'/'.$parentid;
                                        }else{
                                        $link = site_url($l_1->link).'/'.$parentid;
                                        }
                                        $s = "
                                        <li>
                                            <a href='".$link."'>
                                                ".$submenuname."
                                            </a>
                                        </li>
                                        ";
                                        echo $s;
                                        
                                        }
                                        
                                        
                                        ?>
                                        
                                    </ul>
                                    <?php }?>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!--End of nav-->
                </div>
                <!--End of container-->
            </div>
            <!--End of header menu-->
        </div>
        <!--end of header area-->
    </section>
