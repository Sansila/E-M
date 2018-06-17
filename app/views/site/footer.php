<style type="text/css">
    .footer-links li {
        margin: 0 0 10px;
    }
</style>
<?php $sql = "SELECT * FROM site_profile";
  $siteprofile=$this->db->query($sql)->row();

 ?>
<footer id="footer"> 

        <!-- Footer columns -->
        <div class="footer-columns">
            <div class="container">

                <!-- Add banner -->
               <!--  <div class="footer-ad-banner">
                    <a href="#"><img src="<?=base_url().'assets/images/footer-ad-banner.jpg'?>" alt=""></a>
                </div> -->
                <!-- Add banner -->

                <!-- Columns Row -->
                <div class="row">
                    
                    <!-- Footer Column -->
                    <div class="col-lg-4 col-sm-6"> 
                        <div class="footer-column logo-column">
                            <a href="<?=base_url()?>"><img src="<?=base_url().'assets/images/logo_footer.png'?>" alt="" style=""></a>
                           <!--  <p>Find out how to prepare your book for an editor with these 4 writing tips! The editing process can be a wonderful opportunity for writers.</p> -->
                            <ul class="address-list">
                                <li><i class="fa fa-home"></i><div id=""></div><?=$siteprofile->address?></li>
                                <li><i class="fa fa-phone"></i><?=$siteprofile->phone?></li>
                                <li><i class="fa fa-envelope"></i><?=$siteprofile->email?></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-column footer-links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="<?=base_url();?>">Home</a></li>
                                <?php $menu = $this->db->query("SELECT * FROM tblmenus WHERE parentid=0 AND layout_id <> 1 AND is_active=1 ORDER BY tblmenus.order ASC")->result();
                                    $sl = "";
                                    $i = 0;
                                    foreach ($menu as $men) {
                                        $active = '';
                                        $men_name = $men->menu_name;
                                        $parentid = $men->menu_id;
                                        $menu_type=$men->menu_type;
                                        
                                         $link = '#';
                                            if($menu_type == 10) {
                                                $link = site_url('site/allcustomer/'.$men->menu_id);
                                            }else if($menu_type == 9) {
                                                $link = site_url('site/allservice/'.$men->menu_id);
                                            }else if($menu_type == 3) {
                                                $link = site_url('site/requestquote/'.$men->menu_id);
                                            }else if($menu_type == 4) {
                                                $link = site_url('site/contactus/'.$men->menu_id);
                                            }else if($menu_type == 6) {
                                                $link = site_url('site/allproduct/'.$men->menu_id);
                                            }else if($menu_type == 7) {
                                                $link = site_url('site/aboutus/'.$men->menu_id);
                                            }else if($menu_type == 11) {
                                                $link = site_url('site/templates/'.$men->menu_id);
                                            }
                                            $active = $this->uri->segment(3) == $men->menu_id ? 'background-color: #ff851d; color: #fff;' : '';
                                        ?>
                                
                                <li><a href="<?=$link?>"><?=$men_name?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-2 col-sm-6 hide">
                        <div class="footer-column footer-links">
                            <h4>Shipping info</h4>
                            <ul>
                                <li><a href="#">New Products</a></li>
                                <li><a href="#">top Sellers</a></li>
                                <li><a href="#">Manufactirers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Imported</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                        <!-- Footer Column -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-column newsletter">
                                <!-- <h4>Weekly Newsletter</h4> -->
                                <div class="fb-page" data-href="https://www.facebook.com/855solution/" data-width="390" data-height="280" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/855solution/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/855solution/">855 solution</a></blockquote></div>
                            </div>
                        </div>
                        <!-- Footer Column -->

                </div>
                <!-- Columns Row -->

            </div>
        </div>
        <!-- Footer columns -->
        
        <!-- Sub Footer -->
        <div class="sub-foorer" style="background-color: #6c9b2a;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9" style="text-align: center;">
                        <p>Copyright <i class="fa fa-copyright"></i> 2018 <span class="theme-color">855Solution</span> All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-3">
                        <a class="back-top" href="#">Back to Top<i class="fa fa-caret-up"></i></a>
                        <!-- <ul class="cards-list"> -->
                            <!-- <li><img src="<?=base_url().'assets/images/cards/img-01.jpg'?>" alt=""></li> -->
                           <!--  <li><img src="images/cards/img-02.jpg" alt=""></li>
                            <li><img src="images/cards/img-03.jpg" alt=""></li>
                            <li><img src="images/cards/img-04.jpg" alt=""></li> -->
                        <!-- </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sub Footer -->

    </footer>
    <!-- Footer -->

</div>
<!-- Wrapper -->
<?php 
$active=!$this->uri->segment(3) ? 'background-color: #ff851d; color: #fff;' : '';
?>
<!-- $active='background-color: #ff851d; color: #fff;';?> -->
<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
     <a class="r-nav-logo" href="<?=base_url()?>"><img src="<?=base_url().'assets/images/logo.png'?>" alt=""></a>
    <ul class="respoinve-nav-list" style="font-family: '';">
        <!--<li><a href="<?=base_url()?>"><img src="<?=base_url().'assets/images/MoEYS.png'?>" alt="" style="width: 100%;"></a></li>-->
        <li>
            <a class="triple-eff"  href="<?=base_url();?>" style="<?php echo $active; ?>"><i class="pull-right " ></i>HOME</a>
          <!--   <ul class="collapse" id="list-1">
                <li><a href="index.html">home 1</a></li>
                <li><a href="index-2.html">home 2</a></li> #ff851d
            </ul> -->
        </li>
         <?php
        $sl = "";
        $i = 0;
        foreach ($menu as $men) {
            $active = '';
            $men_name = $men->menu_name;
            $parentid = $men->menu_id;
            $menu_type=$men->menu_type;
            
             $link = '#';
                if($menu_type == 10) {
                    $link = site_url('site/allcustomer/'.$men->menu_id);
                }else if($menu_type == 9) {
                    $link = site_url('site/allservice/'.$men->menu_id);
                }else if($menu_type == 3) {
                    $link = site_url('site/requestquote/'.$men->menu_id);
                }else if($menu_type == 4) {
                    $link = site_url('site/contactus/'.$men->menu_id);
                }else if($menu_type == 6) {
                    $link = site_url('site/allproduct/'.$men->menu_id);
                }else if($menu_type == 7) {
                    $link = site_url('site/aboutus/'.$men->menu_id);
                }else if($menu_type == 11) {
                    $link = site_url('site/templates/'.$men->menu_id);
                }
                $active = $this->uri->segment(3) == $men->menu_id ? 'background-color: #ff851d; color: #fff;' : '';
            ?>
        <li>
            <?php  $sql_sub = "SELECT * FROM tblmenus WHERE is_active=1 AND level=1 AND parentid ='$parentid' ORDER BY tblmenus.order ASC "; 
                $sub_menus = $this->db->query($sql_sub)->result();
                $fafa='';
                $triple='';
                $collapse='';
                $href=$link;
                if (count($sub_menus)>0){
                    $fafa='fa fa-angle-down';
                    $triple='triple-eff';
                    $collapse='collapse';
                    $href="#".str_replace(' ', '', $men_name);
                }
            ?>
            <a class="<?=$triple?>" data-toggle="<?=$collapse?>" href="<?= $href?>" style="<?=$active?>"><i class="pull-right <?=$fafa?>" style=""></i><?=$men_name?></a>
            <?php 
                if(count($sub_menus)>0){ 
                 ?>
            <ul class="collapse" id="<?=str_replace(' ', '', $men_name)?>">
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
                            <li >
                                <a href='".$link."' style='<?=$fontfamily?>'>
                                ".$submenuname." 
                                </a>
                              </li>
                        ";
                        echo $s;
                        
                    }
                
                    
            ?>
                                       
            </ul>
            <?php } ?>
        </li>
        <?php }?>                
    </ul>
</nav>
<!-- Slide Menu -->

<!-- View Pages -->
<!-- <div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="magazine">
                <div style="background-image:url(images/pages/01.jpg);"></div>
                <div style="background-image:url(images/pages/02.jpg);"></div>
                <div style="background-image:url(images/pages/03.jpg);"></div>
                <div style="background-image:url(images/pages/04.jpg);"></div>
                <div style="background-image:url(images/pages/04.jpg);"></div>
                <div style="background-image:url(images/pages/05.jpg);"></div>
                <div style="background-image:url(images/pages/05.jpg);"></div>
                <div style="background-image:url(images/pages/06.jpg);"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- View Pages -->

<!-- Login Modal -->
<div class="modal fade login-modal" id="login-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>Register</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="social-options">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Register with facebook</a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Register with twitter</a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i>Register with gmail+</a></li>
                </ul>
            </div>
            <form class="sending-form">
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Full name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Email Address">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" required="required" placeholder="Password">
                    <i class="fa fa-user"></i>
                </div>
                <p class="terms">You agree to the hldy.hr <a href="#">Terms &amp; Conditions</a></p>
                <button class="btn-1 shadow-0 full-width">Register account</button>
            </form>
        </div>
    </div>
</div>
<!-- Login Modal -->

<!-- Quick View -->

<!-- Quick View -->

<!-- Switcher  Panel -->
<!-- <div class="switcher"></div>   -->
<!-- Switcher Panel  \jsbookstore-->

<!-- Java Script -->
<script src="<?=base_url().'assets/jsbookstore/vendor/jquery.js'?>"></script>        
<script src="<?=base_url().'assets/jsbookstore/vendor/bootstrap.min.js'?>"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?=base_url().'assets/jsbookstore/gmap3.min.js'?>"></script>                 
<script src="<?=base_url().'assets/jsbookstore/datepicker.js'?>"></script>                    
<script src="<?=base_url().'assets/jsbookstore/contact-form.js'?>"></script>                  
<script src="<?=base_url().'assets/jsbookstore/bigslide.js'?>"></script>                  
<script src="<?=base_url().'assets/jsbookstore/3d-book-showcase.js'?>"></script>                  
<script src="<?=base_url().'assets/jsbookstore/turn.js'?>"></script>                          
<script src="<?=base_url().'assets/jsbookstore/jquery-ui.js'?>"></script>                             
<script src="<?=base_url().'assets/jsbookstore/mcustom-scrollbar.js'?>"></script>                 
<script src="<?=base_url().'assets/jsbookstore/timeliner.js'?>"></script>                 
<script src="<?=base_url().'assets/jsbookstore/parallax.js'?>"></script>               
<script src="<?=base_url().'assets/jsbookstore/countdown.js'?>"></script> 
<script src="<?=base_url().'assets/jsbookstore/countTo.js'?>"></script>       
<script src="<?=base_url().'assets/jsbookstore/owl-carousel.js'?>"></script>  
<script src="<?=base_url().'assets/jsbookstore/bxslider.js'?>"></script>  
<script src="<?=base_url().'assets/jsbookstore/appear.js'?>"></script>                
<script src="<?=base_url().'assets/jsbookstore/sticky.js'?>"></script>                    
<script src="<?=base_url().'assets/jsbookstore/prettyPhoto.js'?>"></script>           
<script src="<?=base_url().'assets/jsbookstore/isotope.pkgd.js'?>"></script>                   
<script src="<?=base_url().'assets/jsbookstore/wow-min.js'?>"></script>           
<script src="<?=base_url().'assets/jsbookstore/classie.js'?>"></script>                   
<script src="<?=base_url().'assets/jsbookstore/main.js'?>"></script>  

<!-- Switcher JS -->
<script type="text/javascript" src="<?=base_url().'assets/switcher/cookie.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assets/switcher/colorswitcher.js'?>"></script>
<!-- Switcher JS -->
                        
</body>

<!-- Mirrored from techlinqs.com/html/bookstore-0.2/bookstore-ltr/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 04:20:02 GMT -->
</html>