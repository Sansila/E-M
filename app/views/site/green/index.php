


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
<hr class="border">
    <section id="ourcontent">
        <div class="container">
            <div class="row">
                <?php foreach ($loadblog2 as $key) {

                    if($key->article_id % 2==0){ 
                ?>

                        <div class="col-md-6">
                            <h3 class="widget-title">
                                <?php echo $key->article_title;?>
                            </h3>
                            <div class="undertitle-line"></div>
                            <div class="textwidget">
                                <?php echo $key->content;?>
                                <h3><img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>"></h3>
                            </div>
                        </div>
                <?php }  else {?>
                        <div class="col-md-6">
                            <h3 class="widget-title">
                                <?php echo $key->article_title;?>
                            </h3>
                            <div class="undertitle-line"></div>
                            <div class="textwidget">
                                <p>
                                    <img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>">
                                </p>

                                <?php echo $key->content; ?>
                            </div>
                        </div>
             <?php  
                
                 }
             }
            ?>
             </div>
        </div>
</section>
                
                <!-- <div class="col-md-6">
                    <h3 class="widget-title">
                        How can we help you?
                    </h3>
                    <div class="undertitle-line"></div>
                    <div class="textwidget">
                        <h5><i class="fa fa-check" style="color: #002fa4;"></i> Let's talk about your goals</h5>
                        <p>
                            Welcome to MEP Engineering. Client service is our number one passion. Yes, you’re in the right place: We deliver expert mechanical, electrical and plumbing project solutions. We use the latest technology to stay on the cutting edge of sustainable design practices. However, our 350 years of combined employee experience have taught us you need and want much more. You want a MEP partner who listens to you and who will work with you to achieve your vision.
                        </p>
                        <h5><i class="fa fa-check" style="color: #002fa4;"></i> What happens when you partner with MEP?</h5>
                        <p> When you hire MEP Engineering, we take the time to discuss your project goals. We listen proactively. We ask questions. We make sure that we understand your needs. Then, we strategize with you to complete your project within budget and on time. We become your partner and you become ours.
                        </p>
                        <h3>
                            <img src="<?=base_url().'assets/images/1462416449.png'?>">
                        </h3>
                    </div>
                </div> -->
                <!-- <div class="col-md-6">
                    <h3 class="widget-title">
                        Our people are our strength
                    </h3>
                    <div class="undertitle-line"></div>
                    <div class="textwidget">
                        <p>
                            <img src="<?=base_url().'assets/images/3.jpg'?>">
                        </p>
                            <p><i class=" fa fa-check" style="color: #002fa4;"></i>
                            Our team talent runs deep and covers multiple disciplines. You’ll find all the services you need to complete your project under our roof—from boiler plant design to power distribution systems. You’ll also discover that our commitment to accomplishing your goals brings out the very best in our teams. The synergy of a true partnership sparks innovation, commands diligence and unleashes renewed excitement.
                        </p>
                        <p style="padding-top: 15px;">These qualities draw from a strong culture established by our company founders in 2004. Working in a collaborative environment energizes our teams. It enables us to go the extra mile for your project. We strive for quality and follow trusted processes that help us work efficiently. We don’t let obstacles or excuses keep us from meeting deadlines. We follow through because your goals are our goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <!--end of welcome section-->
    <!--Start of volunteer-->
    <!-- <section id="volunteer">
        <div class="container">
            <div class="row vol_area">
                <div class="col-md-8">
                    <div class="volunteer_content">
                        <h3>Become a <span>Volunteer</span></h3>
                        <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
              
                <div class="col-md-3 col-md-offset-1">
                    <div class="join_us">
                        <a href="" class="vol_cust_btn">join us</a>
                    </div>
                </div>
                
            </div>
            
        </div>
      
    </section> -->
    <!--end of volunteer-->
    <!--Start of portfolio-->
    <!-- <section id="portfolio" class="text-center">
        <div class="col-md-12">
            <div class="portfolio_title">
                <?php 
                    $sql1 = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 19 AND is_active = 1")->row();
                    echo $sql1->location_name;
                ?>
            </div>
        </div> -->
        <!--End of col-md-2-->
        <!-- <div class="colum">
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
                      
                    </form>
               
                </div>
           
            </div> -->
            <!--End of container-->
            <!-- <div class="container">
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
                       
                    </div>
                    
                </div>
               
            </div>
           
        </div>
        
    </section> -->
    <!--end of portfolio-->
    <!--Start of counter-->
    <!-- <section id="counter">
        <div class="counter_img_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="counter_header">
                            <h2>OUR achivement</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    
                </div>
             
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
             
            </div>
           
        </div>
    </section> -->
    <!--end of counter-->
    <!--start of event-->
    <hr class="border">
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

   <!--  <section id="testimonial">
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
               
                <section id="carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                    
                                    <ol class="carousel-indicators">
                                        <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    </ol>
                                
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
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    </div>
                   
                </section>
                
            </div>
        </div>
     
    </section> -->
    <!--end of testimonial-->
    <!--Start of blog-->
    <!-- <section id="blog">
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
         
        </div>
    
       
            <div class="col-md-offset-9 col-md-3"> 
                <a href="site/allitem"><button type="button" class="btn btn-default">Read More</button> </a>
            </div>
    
    </section> -->
    <!-- end of blog-->
    <!--Start of Purches-->
  <!--   <section id="purches">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="purches_title">Buy our wordpress theme</h2>
                </div>
                <div class="col-md-2 col-md-offset-4">
                    <a href="" class="purches_btn">purches</a>
                </div>
            </div>
          
        </div>
       
    </section> -->
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

