    </body>

    <!-- jQuery v1.10.2  -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <!-- <script src="<?php echo base_url(); ?>/assets/js/royal_preloader.js"></script> -->

    <!-- Bootstrap v3.1.0-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
    <!-- jQuery REVOLUTION Slider -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.revslider.plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.js"></script>
    <!-- Scroll Top-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.js"></script>
    <!-- Easing Effect-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.js"></script>
    <!-- Knob-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.js"></script>
    <!-- One Page Nav-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
    <!-- Scroll To-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
    <!-- Sticky Nav-->
    <script src="<?php echo base_url(); ?>assets/js/waypoints.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/waypoints-sticky.js"></script>
    <!-- Elements Animation On Scroll -->
    <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
    <!-- jQuery Fittext -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.fittext.js"></script>
    <!-- Appear Animation -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
    <!-- Masonry Grid -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script>
    <!-- Smooth Scroll Effect -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.smooth-scroll.js"></script>
    <!-- Google Map Api -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
    <!-- MEGAFOLIO GALLERY  JS FILES  -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.megafolio.plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.megafoliopro.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js"></script>
    <!-- jQuery OwlCarousel -->
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
    <!-- Drop Down Menu -->
    <script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
    <!-- Syntax Highlighter -->
    <script src="<?php echo base_url(); ?>assets/js/prettify.js"></script>
    <!-- Flickr Feed -->
    <script src="<?php echo base_url(); ?>assets/js/jflickrfeed.js"></script>
    <!-- Plugins Initialize Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- Include required JS files -->
    <script src="<?php echo base_url(); ?>assets/Scripts/SyntaxHighlighter/scripts/shCore.js"></script>
    <script src="<?php echo base_url(); ?>assets/Scripts/SyntaxHighlighter/scripts/shBrushJScript.js"></script>
    

<script>
    $('.filter').click(function () {
        if ($(this).text() == "HOT COFFEES") {
            $("#hotCoffees").removeClass("hideIt");
            $("#coldCoffees").addClass("hideIt");
        }
        else {
            $("#coldCoffees").removeClass("hideIt");
            $("#hotCoffees").addClass("hideIt");
        }
    });
</script>
</html>