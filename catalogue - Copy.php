<!DOCTYPE html>
<html>
<head>
	<?php require_once('head.php'); ?>
	<script type="text/javascript" src="flip/jquery.min.1.7.js"></script>
	<script type="text/javascript" src="flip/modernizr.2.5.3.min.js"></script>
	<script type="text/javascript" src="flip/hash.js"></script>
	<script type="text/javascript" src="flip/main.js"></script>
	<title>Catalogue | JetcoTech - Morbi</title>
</head>
<body>
	<div class="page-wrapper">
		<?php require_once('header.php'); ?>
		<section class="page-title" style="background-image:url(images/background/catalog.jpg)">
			<div class="auto-container">
				<div class="content">
					<h1>Catalogue</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Catalogue</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="news-section-two">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="flips/catalog_img.jpg" alt="" />
							</div>
							<div class="lower-content">
								<h5><a href="#">Jetcotech Profile</a></h5>
								<a href="javascript:;" class="theme-btn btn-style-three open_profile" data-toggle="modal" data-target="#exampleModals">View</a>
								<a href="catalog/jetcotech-profile.pdf" target="_blank" class="theme-btn btn-style-three pull-right">Download</a>
							</div>
						</div>
					</div>
					<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="flips/catalog_img.jpg" alt="" />
							</div>
							<div class="lower-content">
								<h5><a href="#">Lighting Pole & High Mast Poles</a></h5>
								<a href="#" class="theme-btn btn-style-three">View</a>
								<a href="catalog/lighting-pole-high-mast-poles.pdf" target="_blank" class="theme-btn btn-style-three pull-right">Download</a>
							</div>
						</div>
					</div>
					<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="flips/catalog_img.jpg" alt="" />
							</div>
							<div class="lower-content">
								<h5><a href="#">Cable Tray</a></h5>
								<a href="#" class="theme-btn btn-style-three">View</a>
								<a href="catalog/jetcotech-cable-tray.pdf" target="_blank" class="theme-btn btn-style-three pull-right">Download</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<style type="text/css">
			.magazine-viewport {
				position: initial !important;
			}
		</style>

	<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Jetcotech Profile</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div style="padding: 30px">
						<div id="photobook" style="height: 100px"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

		<?php require_once('footer.php'); ?>
	</div>
	<?php require_once('script.php'); ?>
	



	
</body>


</html>
<script>
	$('.catalogue').addClass(' current ');
</script>