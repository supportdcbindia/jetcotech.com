<!DOCTYPE html>
<html lang="en">
<head>
<link href="slider/font-awesome.css" rel="stylesheet" type="text/css">
<link href="slider/bootstrap.css" rel="stylesheet" type="text/css">
<link href="slider/ubislider.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="slider/screen.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body cz-shortcut-listen="true" class="">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <h4>Example 3 | Vertical on the right</h4>
      <div class="clearfix">
        <div class="ubislider-image-container left" data-ubislider="#slider3" id="imageSlider3" data-image="5">
					<img src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample3.jpg">
				</div>
        <div id="slider3" class="ubislider right ecommerce" data-slidetime="0"> 
					<a class="arrow prev pasive"></a> 
					<a class="arrow next"></a>
          <ul id="gal1" class="ubislider-inner">
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample5.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample4.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample3.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample1.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample2.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample3.jpg"> </a> </li>
          </ul>
        </div>
      </div>
			
		</div>
    <div class="col-sm-4">
      
      <h4>Example 4 | Integration with ElevateZoom</h4>
      <div class="clearfix">
        <div class="ubislider-image-container" data-ubislider="#slider4" id="imageSlider4" data-image="4">
					<img src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample2.jpg">
				</div>
        <div id="slider4" class="ubislider ecommerce" data-slidetime="2"> 
					<a class="arrow prev pasive"></a> 
					<a class="arrow next"></a>
          <ul id="gal1" class="ubislider-inner">
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample5.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample4.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample3.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample1.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample2.jpg"> </a> </li>
            <li> <a> <img class="product-v-img" src="Lightweight%20eCommerce%20product%20jQuery%20plugin%20Ubislider_files/sample3.jpg"> </a> </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!--  JavaScript
================================================== -->
<script src="slider/jquery.js"></script>
<script type="text/javascript" src="slider/jqueryElevateZoom.js"></script>
<script src="slider/ubislider.js"></script>
<script type="text/javascript">
    $('#slider1').ubislider({
        arrowsToggle: true,
        type: 'ecommerce',
        hideArrows: true,
        autoSlideOnLastClick: true,
        modalOnClick: true,
    });
    $('#slider2').ubislider({
        arrowsToggle: true,
        type: 'ecommerce',
        hideArrows: true,
        autoSlideOnLastClick: true,
        modalOnClick: true,
        position: 'vertical'
    });
    $('#slider3').ubislider({
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
    $('#slider4').ubislider({
        arrowsToggle: true,
        type: 'ecommerce',
        hideArrows: true,
        autoSlideOnLastClick: true,
        modalOnClick: true,
        onTopImageChange: function () {
            $('#imageSlider4 img').elevateZoom();
        }
    });
    $('#slider5').ubislider({
        bullets: true
    });
    $('#slider6').ubislider({
        bullets: true
    });
</script>
</body>
</html>
