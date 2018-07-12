        
   
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
                    el: '#mapcontactus',
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