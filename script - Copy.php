<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js" ></script>
	<script type="text/javascript" src="flips/jquery.onebook3d.min.js"></script>
<script>
	$('#exampleModals').on('shown.bs.modal', function (e) {
		var src5 = [
			"flips/002.jpg",
			"flips/003.jpg",
			"flips/007.jpg",
			"flips/008.jpg",
			"flips/009.jpg",
			"flips/010.jpg",
		];

		$("#photobook").onebook(src5, {
			skin: ["light", "dark"],
			bgDark: "#222222 url(flips/bg.jpg)",
			flip: "soft",
			border: 25,
			cesh: false,
		});
	});
	$('#exampleModals').on('hide.bs.modal', function (e) {
		$("#photobook").html('');
	});
</script>
<script src="js/sticky.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>

<link href="js/slider/ubislider.css" rel="stylesheet" type="text/css">
<script src="js/slider/jquery.js"></script>
<script type="text/javascript" src="js/slider/jqueryElevateZoom.js"></script>
<script src="js/slider/ubislider.js"></script>
<script type="text/javascript">
    $('#pdrzoom').ubislider({
        arrowsToggle: true,
				type: 'ecommerce',
        hideArrows: true,
        autoSlideOnLastClick: true,
        modalOnClick: false,
        position: 'vertical',
				onTopImageChange: function () {
            $('#imageSlider3 img').elevateZoom();
        }
    });
	

$(document).ready(function(){

	var total_li_node = $('.ubislider-inner li').length;
	var current_li_node = 0;
	var slider_height = -85;
	
	thumbAutoSlide(current_li_node);	
	
	function thumbAutoSlide(current_li_node){
	
		var h = (slider_height * current_li_node) +'px';
		//gal1 top -85 set karvu
		$('#gal1').css('top',h);
		current_li_node++;
		
		if(current_li_node == total_li_node){
			current_li_node = 0;	
		}
		
		setTimeout(function(){ thumbAutoSlide(current_li_node); }, 2000);
	} 

});  
</script>
