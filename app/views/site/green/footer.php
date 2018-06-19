        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="<?=base_url().'assets/green/js/jquery-1.12.3.min.js'?>"></script>

        <!--Counter UP Waypoint-->
        <script src="<?=base_url().'assets/green/js/waypoints.min.js'?>"></script>
        <!--Counter UP-->
        <script src="<?=base_url().'assets/green/js/jquery.counterup.min.js'?>"></script>

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
                    lat: 23.6911078,
                    lng: 90.5112799,
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
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
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