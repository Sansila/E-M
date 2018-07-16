        
    <!--End of market-->
    <style type="text/css">
    .footer-links li {
    margin: 0 0 10px;
    }
    </style>
    <?php 
        $sql = "SELECT * FROM site_profile";
        $siteprofile=$this->db->query($sql)->row();
    ?>
    <!--Start of contact-->
    <section id="contact" style="padding: 0px; min-height: 540px;">
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
                                <?php //echo form_open('class="form-horizontal contact-1" role="form" name="contactform" id="contactform"'); ?>
                                
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                            <div class="text_area">
                                                <textarea name="message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn custom-btn send-email" value="submit" name="submit" data-loading-text="Loading...">Send</button>
                                        </div>
                                    </div>
                                <?php form_close();?>
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
                        <p><?php echo date('Y')?> -  Developed By CAMBODIASOFT <span><a href="">&#9798;</a></span></p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="designer">
                        <p>Design By <a href="#">CAMBODIASOFT</a></p>
                    </div>
                </div> -->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of footer-->
    <!--Scroll to top-->
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!--End of Scroll to top-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="<?=base_url().'assets/green/js/gmaps.min.js'?>"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 11.5838592,
                    lng: 104.8997674,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 11.5838592,
                    lng: 104.8997674,
                    title: 'CambodiaSoft',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
                //action send mail form to function send in controller site
                $('.send-email').click(function(){
                    $.ajax({
                        url: 'http://enm.com/site/send',
                        type: 'post',
                        data: {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            subject: $('#subject').val(),
                            message: $('#msg').val()
                        },
                        success:function(data)
                        {
                            console.log(data);
                            alert('Your email has been sent to our HR. Thank you...!<br>Please wait for further information contact to you later.');
                            window.location.reload();
                        }
                    });
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="<?=base_url().'assets/green/js/isotope/cells-by-row.js'?>"></script>
        <script src="<?=base_url().'assets/green/js/isotope/isotope.pkgd.min.js'?>"></script>
        <script src="<?=base_url().'assets/green/js/isotope/packery-mode.pkgd.min.js'?>"></script>
        <script src="<?=base_url().'assets/green/js/isotope/scripts.js'?>"></script>


        <!--Back To Top-->
        <script src="<?=base_url().'assets/green/js/backtotop.js'?>"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="<?=base_url().'assets/green/js/jquery.localScroll.min.js'?>"></script>
        <script src="<?=base_url().'assets/green/js/jquery.scrollTo.min.js'?>"></script>
        <!--WOW With Animation-->
        <script src="<?=base_url().'assets/green/js/wow.min.js'?>"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?=base_url().'assets/green/js/bootstrap.min.js'?>"></script>
        <!-- Custom JavaScript-->
        <script src="<?=base_url().'assets/green/js/main.js'?>"></script>
    </body>

</html>