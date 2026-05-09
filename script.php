<script src="js/jquery.js"></script>
<script src="js/slider/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/sticky.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>
<link href="js/slider/ubislider.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/slider/jqueryElevateZoom.js"></script>
<script src="js/slider/ubislider.js"></script>
<script src="js/index.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/form-buzz.js"></script>
<script type="text/javascript">
$('#pdrzoom').ubislider({
    arrowsToggle: true,
    type: 'ecommerce',
    hideArrows: true,
    autoSlideOnLastClick: true,
    modalOnClick: false,
    position: 'vertical',
    onTopImageChange: function() {
        $('#imageSlider3 img').elevateZoom();
    }
});


$(document).ready(function() {

    var total_li_node = $('.ubislider-inner li').length;
    var current_li_node = 0;
    var slider_height = -85;

    thumbAutoSlide(current_li_node);

    function thumbAutoSlide(current_li_node) {

        var h = (slider_height * current_li_node) + 'px';
        //gal1 top -85 set karvu
        $('#gal1').css('top', h);
        current_li_node++;

        if (current_li_node == total_li_node) {
            current_li_node = 0;
        }

        setTimeout(function() {
            thumbAutoSlide(current_li_node);
        }, 2000);
    }

});
</script>


    <script>
    function productfunc() {
        window.location.href = 'product.html';
    }
</script>

    <script>
    function cablefunc() {
        window.location.href = 'cable-tray.html';
    }
</script>
    <script>
    function lightingfun() {
        window.location.href = 'lighting-poles.html';
    }
</script>
    <script>
    function mastfun() {
        window.location.href = 'mast-poles.html';
    }
</script>
<script>
    function frpfun() {
        window.location.href = 'frp-products.html';
    }
</script>
