<body data-spy="scroll" data-target="#header">
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
                            <a class="navbar-brand custom_navbar-brand" href="#"><img src="<?=base_url().'assets/green/img/logo.png'?>" alt=""></a>
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
                                $link = '#';
                                if($menu_type == 10) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 9) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 3) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 4) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 6) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 7) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }else if($menu_type == 11) {
                                $link = site_url($men->link.''.$men->menu_id);
                                }
                                
                                // $b=$this->uri->segment(3);
                                // $a= preg_replace("/[^1-9]/", '', $b);
                                // $c=trim($a,"2");
                                $active = $this->uri->segment(3) == $men->menu_id ? 'active' : '';
                                // alert("ljtrmht");
                                // $link = '#';
                                $Countparent = $this->db->query("SELECT count(menu_id) as count from tblmenus where parentid ='$parentid' ")->row()->count;
                                if ($Countparent > 1) {
                                $link = '#';
                                }
                                ?>
                                <li class="<?=$active?> dropdown-icon">
                                    <a href="<?=$link?>"><i class="" ></i><?=$men_name?></a>
                                    <?php
                                    $sql_sub = "SELECT * FROM tblmenus WHERE is_active=1 AND level=1 AND parentid ='$parentid' ORDER BY tblmenus.order ASC ";
                                    $sub_menus = $this->db->query($sql_sub)->result();
                                    if(count($sub_menus)>0){
                                    ?>
                                    <ul>
                                        <?php
                                        
                                        foreach($sub_menus as $l_1){
                                        $submenuname=$l_1->menu_name;
                                        $link = '#';
                                        if($l_1->article_id != 0){
                                        $link = site_url('site/templates').'/'.$parentid;
                                        }else{
                                        $link = site_url('site/templates').'/'.$parentid;
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
    <!--End of Hedaer Section-->
    <!--Start of slider section-->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php 
                    $i=0;
                    foreach ($loadbanner as $slide) 
                    {  
                        $active = "";
                        if($i==0){
                            $active .= "active"; 
                        }
                ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php echo $active?>"></li>
                <?php 
                    $i++;
                    }
                ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php 
                    $i = 0;
                    foreach ($loadbanner as $slide) 
                    { 
                        $active = "";
                        if($i==0){
                            $active .= "active"; 
                        }
                        
                ?>
                    <div class="item <?php echo $active;?>">
                        <div class="slider_overlay">
                            <img src="<?=base_url().'assets/upload/banner/'.$slide->banner_id.'.png'?>" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <?php echo $slide->title?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++; 
                    }
                ?>
            </div>
            <!--End of Carousel Inner-->
        </div>
    </section>
    <!--end of slider section-->
    <!--Start of welcome section-->
    <section id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wel_header">
                        <?php 
                            $sql = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 18 AND is_active = 1")->row();
                            echo $sql->location_name;
                        ?>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <?php
                    $sql = $this->db->query("SELECT * FROM tblarticle WHERE location_id = 18 AND is_active = 1 ")->result();
                    foreach ($sql as $item) {
                ?>

                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <?php 
                                    echo $item->article_title;
                                    echo $item->content;
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of welcome section-->
    <!--Start of volunteer-->
    <section id="volunteer">
        <div class="container">
            <div class="row vol_area">
                <div class="col-md-8">
                    <div class="volunteer_content">
                        <h3>Become a <span>Volunteer</span></h3>
                        <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
                <!--End of col-md-8-->
                <div class="col-md-3 col-md-offset-1">
                    <div class="join_us">
                        <a href="" class="vol_cust_btn">join us</a>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row and vol_area-->
        </div>
        <!--End of container-->
    </section>
    <!--end of volunteer-->
    <!--Start of portfolio-->
    <section id="portfolio" class="text-center">
        <div class="col-md-12">
            <div class="portfolio_title">
                <?php 
                    $sql1 = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 19 AND is_active = 1")->row();
                    echo $sql1->location_name;
                ?>
            </div>
        </div>
        <!--End of col-md-2-->
        <div class="colum">
            <div class="container">
                <div class="row">
                    <form action="/">
                        <ul id="portfolio_menu" class="menu portfolio_custom_menu">
                            <?php
                                $sql1 = $this->db->query("SELECT * FROM tblarticle WHERE location_id = 19 AND is_active = 1 ")->result();
                                foreach ($sql1 as $item1) {
                            ?>
                                <li>
                                    <?php echo $item1->article_title;?>
                                </li>
                            <?php 
                                }
                            ?>

                        </ul>
                        <!--End of portfolio_menu-->
                    </form>
                    <!--End of Form-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="notes">
                            <div class="note blue">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="<?=base_url().'assets/green/'?>img/environment.jpg" alt="">
                            </div>
                            <div class="note red">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="<?=base_url().'assets/green/'?>img/portfolio_1.jpg" alt="">
                            </div>
                            <div class="note green">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="<?=base_url().'assets/green/'?>img/cliemate.jpg" alt="">
                            </div>
                            <div class="note yellow">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="<?=base_url().'assets/green/'?>img/photography.jpg" alt="">
                            </div>
                            <div class="note black">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="<?=base_url().'assets/green/'?>img/species.jpg" alt="">
                            </div>
                        </div>
                        <!--End of notes-->
                    </div>
                    <!--End of col-lg-12-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
        <!--End of colum-->
    </section>
    <!--end of portfolio-->
    <!--Start of counter-->
    <section id="counter">
        <div class="counter_img_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="counter_header">
                            <h2>OUR achivement</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <!--End of col-md-12-->
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="<?=base_url().'assets/green/'?>img/tree.png" alt="">
                                <div class="counter_text">
                                    <span class="counter">1542</span>
                                    <p>tree cut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="<?=base_url().'assets/green/'?>img/hand.png" alt="">
                                <div class="counter_text">
                                    <span class="counter">1458</span>
                                    <p>animal lost</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="<?=base_url().'assets/green/'?>img/tuhnder.png" alt="">
                                <div class="counter_text">
                                    <span class="counter">9854</span>
                                    <p>blubs collected</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="<?=base_url().'assets/green/'?>img/cloud.png" alt="">
                                <div class="counter_text">
                                    <span class="counter">5412</span>
                                    <p>water level</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
    </section>
    <!--end of counter-->
    <!--start of event-->
    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="event_header text-center">
                        <?php 
                            $sql = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 21 AND is_active = 1")->row();
                            echo $sql->location_name;
                        ?>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-8">

                    <?php
                        $sql2 = $this->db->query("SELECT * FROM tblarticle as a 
                            inner join tblgallery as g on a.article_id = g.article_id
                            WHERE a.location_id = 21 AND a.is_active = 1 ")->result();
                        $i = 1;
                        foreach ($sql2 as $item2) {
                        if($i == 1)
                        {
                    ?>
                    <div class="row">
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_img">
                                    <img src="<?=base_url().'assets/upload/article/'.$item2->article_id.'_'.$item2->url?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_text text-center">
                                    <?php 
                                        echo $item2->article_title;
                                        echo $item2->content;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                        }else{
                    ?>
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_text text-center">
                                    <?php 
                                        echo $item2->article_title;
                                        echo $item2->content;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_img">
                                    <img src="<?=base_url().'assets/upload/article/'.$item2->article_id.'_'.$item2->url?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        $i++;
                        }
                    ?>

                    <!--End of row-->
                </div>
                <!--End of col-md-8-->
                <div class="col-md-4">
                    <?php
                        $sql4 = $this->db->query("SELECT * FROM tblarticle as a 
                            inner join tblgallery as g on a.article_id = g.article_id
                            WHERE a.location_id = 22 AND a.is_active = 1 ")->result();
                        foreach ($sql4 as $item4) {
                    ?>
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="<?=base_url().'assets/upload/article/'.$item4->article_id.'_'.$item4->url?>" alt="">
                            </div>
                            <div class="event_news_text">
                                <?php 
                                    echo $item4->article_title;
                                    echo $item4->content;
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <!--End of col-md-4-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of event-->
    <!--Start of testimonial-->
    <section id="testimonial">
        <div class="testimonial_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_header text-center">
                            <h2>testimonials</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <section id="carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    </ol>
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="profile-circle">
                                                        <img src="<?=base_url().'assets/green/'?>img/tree_cut_3.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial_content">
                                                        <i class="fa fa-quote-left"></i>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <h5>Sadequr Rahman Sojib</h5>
                                                        <p>CEO, Fourder</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="profile-circle">
                                                        <img src="<?=base_url().'assets/green/'?>img/tree_cut_3.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial_content">
                                                        <i class="fa fa-quote-left"></i>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <h5>Sadequr Rahman Sojib</h5>
                                                        <p>CEO, Fourder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of item with active-->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="profile-circle">
                                                        <img src="<?=base_url().'assets/green/'?>img/tree_cut_3.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial_content">
                                                        <i class="fa fa-quote-left"></i>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <h5>Sadequr Rahman Sojib</h5>
                                                        <p>CEO, Fourder</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="profile-circle">
                                                        <img src="<?=base_url().'assets/green/'?>img/tree_cut_3.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial_content">
                                                        <i class="fa fa-quote-left"></i>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                    </div>
                                                    <div class="testimonial_author">
                                                        <h5>Sadequr Rahman Sojib</h5>
                                                        <p>CEO, Fourder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--ENd of item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </section>
                <!--End of carousel-->
            </div>
        </div>
        <!--End of container-->
    </section>
    <!--end of testimonial-->
    <!--Start of blog-->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest_blog text-center">
                        <?php 
                            $sql = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 20 AND is_active = 1")->row();
                            echo $sql->location_name;
                        ?>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <?php
                    $sql3 = $this->db->query("SELECT * FROM tblarticle as a 
                        inner join tblgallery as g on a.article_id = g.article_id
                        WHERE a.location_id = 20 AND a.is_active = 1 ")->result();
                    foreach ($sql3 as $item3) {
                ?>
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="<?=base_url().'assets/upload/article/'.$item3->article_id.'_'.$item3->url?>" alt="">
                            </div>
                            <div class="blog_content">
                                <?php 
                                    echo $item3->article_title;
                                    echo $item3->content;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    }
                ?>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!-- end of blog-->
    <!--Start of Purches-->
    <section id="purches">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="purches_title">Buy our wordpress theme</h2>
                </div>
                <div class="col-md-2 col-md-offset-4">
                    <a href="" class="purches_btn">purches</a>
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of purches-->
    <!--Start of Market-->
    <section id="market">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="market_area text-center">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="market_logo">
                                    <a href=""><img src="<?=base_url().'assets/green/'?>img/audiojungle.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="market_logo">
                                    <a href=""><img src="<?=base_url().'assets/green/'?>img/codecanyon.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="market_logo">
                                    <a href=""><img src="<?=base_url().'assets/green/'?>img/graphicriver.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="market_logo">
                                    <a href=""><img src="<?=base_url().'assets/green/'?>img/audiojungle.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of market Area-->
                </div>
                <!--End of col-md-12-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of market-->
    <style type="text/css">
    .footer-links li {
    margin: 0 0 10px;
    }
    </style>
    <?php $sql = "SELECT * FROM site_profile";
    $siteprofile=$this->db->query($sql)->row();
    ?>
    <!--Start of contact-->
    <section id="contact">
        <div class="container">
            <!--End of row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="office">
                        <div class="title">
                            <h5>our office info</h5>
                        </div>
                        <div class="office_location">
                            <div class="address">
                                <i class="fa fa-home"><span><?=$siteprofile->address?></span></i>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"><span><?=$siteprofile->phone?></span></i>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope"><span><?=$siteprofile->email?></span></i>
                            </div>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="msg">
                        <div class="msg_title">
                            <h5>Drop A Message</h5>
                        </div>
                        <div class="form_area">
                            <!-- CONTACT FORM -->
                            <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                <div id="message"></div>
                                <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                            <div class="text_area">
                                                <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-6-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of contact-->
    <!--Start of footer-->
    <section id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>@ 2016 - Design By <span><a href="">&#9798;</a></span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="designer">
                        <p>A Design By <a href="#">XpeedStudio</a></p>
                    </div>
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of footer-->
    <!--Scroll to top-->
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!--End of Scroll to top-->