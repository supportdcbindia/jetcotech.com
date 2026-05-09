<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <title>Facilities | JetcoTech - Morbi</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NCRG5N2H');
    </script>
    <!-- End Google Tag Manager -->
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    </script>
</head>

<body>
    <div class="page-wrapper">
        <?php require_once('header.php');?>
        <section class="page-title" style="background-image:url(images/background/8.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Facilities</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Facilities</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="services-section-eight">
            <div class="auto-container">
                <div class="row clearfix ">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title mb-10">
                                <h2>List of Machineries</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix ">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <ul class="blog-cat-two">
                            <?php 
						$arr = array(
							'Automatic Wire Mesh Machine - 3 Meter width (wire size- Up to 6mm)',
							'Automatic Roll Forming Machine - 6 Mtr / Min.',
							'Plasma Machine - 13mtr X 3mtr (350 Watt)',
							'Automatic Hydraulic Press Break - 450 Ton 13 Mtr Length',
							'Automatic Pole Welding Machine',
							'Shearing Machine - 3 Meter 8mm Cutting Capacity',
							'Radial Drill - 40 mm',
							'Cutting Bench Saw - 200 mm',
							'Hydraulic Press Break semi auto - 100 Ton',
							'Pole Swaging Machine - 200 mm',
							'Pipe banding Machine - 2 Nos.',
							'E.O.T. Crane - 5 Nos.',
							'Hot Dip Galvanizing Plant - 8 Meter Length',
							'Quality Testing Lab'
						);
						foreach($arr as $a){
							echo '<li><a href="javascript:;">'.$a.'</a></li>';
						}?>
                        </ul>
                    </div>
                    <div class="image-column col-lg-4 col-md-8 col-sm-12 hide_facility_count">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/service-5.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h2>Advanced <span>Technology</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="auto-container mt-5">
                <div class="row clearfix">
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/2.webp" data-fancybox="gallery">
                                <img src="images/facility/2.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/3.webp" data-fancybox="gallery">
                                <img src="images/facility/3.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/4.webp" data-fancybox="gallery">
                                <img src="images/facility/4.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/5.webp" data-fancybox="gallery">
                                <img src="images/facility/5.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/6.webp" data-fancybox="gallery">
                                <img src="images/facility/6.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/7.webp" data-fancybox="gallery">
                                <img src="images/facility/7.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/8.webp" data-fancybox="gallery">
                                <img src="images/facility/8.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/9.webp" data-fancybox="gallery">
                                <img src="images/facility/9.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-2">
                        <div class="facility-img">
                            <a href="images/facility/10.webp" data-fancybox="gallery">
                                <img src="images/facility/10.webp" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auto-container mt-5">
                <div class="row clearfix">
                    <div class="col-md-4 col-lg-4 mb-2">
                        <a href="https://www.youtube.com/@jetcotechengineering2226"
                            class="th-btn th-style th-icon mb-3 mt-3">Click Here For Youtube Channel
                            <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>

                </div>
            </div>
        </section>
        <?php require_once('footer.php');?>
    </div>
    <?php require_once('script.php');?>
</body>

</html>
<script>
$('.faculty').addClass(' current ');
</script>