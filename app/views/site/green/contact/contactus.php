<div class="main-title" style="background-color: #154360; ">
    <div class="container">
        <?php $title = $this->db->query("SELECT * FROM tblmenus where menu_id = 66")->row();?>
        <h1 class="main-title__primary style" align="center"><?php echo $title->menu_name;?></h1>
    </div>
</div>
<?php 
        $sql = "SELECT * FROM site_profile";
        $siteprofile=$this->db->query($sql)->row();
    ?>
<section id="contentcontactus">
         <div class="tc-padding">
            <div class="container">

                <!-- Contact Map -->
                <div class="tc-padding-bottom" style="padding-bottom: 20px;">
                    <!-- <div id="contant-map" class="contant-map"> -->
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69425.25809105227!2d104.91882251926587!3d11.53685956462248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMyJzAyLjIiTiAxMDTCsDU2JzI5LjUiRQ!5e0!3m2!1sen!2skh!4v1519719665217" width="100%" height="660" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                        <div id="mapcontactus"></div>
                    <!-- </div> -->
                </div>
                <!-- Contact Map -->
                <!-- Address Columns -->
                <div class="tc-padding-bottom">
                    <div class="row">
                
                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-map-marker"></i></span>
                                <h6>Address</h6>
                                <strong>CAMBODIASOFT</strong>
                                <p><?=$siteprofile->address?></p>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-volume-control-phone"></i></span>
                                <h6>Hotline</h6>
                                <strong><?=$siteprofile->phone?></strong>
                               
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-envelope"></i></span>
                                <h6>Email</h6>
                                <strong><?=$siteprofile->email?></strong>
                                
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-calendar"></i></span>
                                <h6>Calendar</h6>
                                <strong>WORKING HOURS</strong>
                                <p>Mon – Fri : 8:00 AM – 17:00 PM Saturday : 8:00 AM – 12:00 PM</p>
                            </div>
                        </div>
                        <!-- Column -->

                    </div>
                </div>
                <!-- Address Columns -->
                <!-- Form -->
               
                <!-- Form -->

            </div>
        </div>

</section>