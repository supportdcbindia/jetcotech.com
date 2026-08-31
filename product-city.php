<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
<?php

    $siteUrl = "https://www.jetcotech.com";
    $companyName = "Jetcotech";
    $brandName = "Jetcotech";
    $logoUrl = $siteUrl . "/images/logo-2.png"; // update logo path if needed
    $phone = "+91 75750 07163"; // update phone
    $email = "info@jetcotech.in"; // update email

    $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $currentPage = basename($requestPath);
    ?>
    <link src="<?=$siteUrl;?>/css/bootstrap.css"  type="text/css">
    <link src="<?=$siteUrl;?>/js/slider/ubislider.css" type="text/css">
    <link src="<?=$siteUrl;?>/css/style.css"  type="text/css">
    <link src="<?=$siteUrl;?>/css/responsive.css"  type="text/css">
    <link src="<?=$siteUrl;?>/css/model-custom.css"  type="text/css">
    <link src="<?=$siteUrl;?>/css/sidebar-btn.css"  type="text/css">

    <link rel="shortcut icon" src="<?=$siteUrl;?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" src="<?=$siteUrl;?>/images/favicon.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1006297605673775');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1006297605673775&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <title>Product | JetcoTech - Morbi</title>
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
    <div class="page-wrapper product">
        <?php require_once('header.php'); ?>
        <section class="page-title" style="background-image:url(/images/background/perforatted-cable-tray-bg.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Industrial Cable Management & Lighting Solutions</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Product</li>

                    </ul>
                </div>
            </div>
        </section>
        <section class="landing-sec same-space">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- =========================
                 Cable Tray
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/cable-tray/perforated-cable-tray/01.jpg"
                                    alt="Cable Tray">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="cable-tray.php">Cable Tray</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="cable-tray.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 Lighting Poles
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/lighting-poles/polygonal-octagonal-lighting-poles/01.jpg"
                                    alt="Lighting Poles">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="lighting-poles.php">Lighting Poles</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="lighting-poles.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 Mast Poles
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/mast-poles/stadium-mast-poles/01.jpg"
                                    alt="Mast Poles">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="mast-poles.php">Mast Poles</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="mast-poles.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 FRP Products
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/frp-products/frp-perforated-cable-tray/frp-perforated-cable-tray.webp"
                                    alt="FRP Products">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="frp-products.html">FRP Products</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="frp-products.html"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="products-intro-section">
            <div class="auto-container">
                <div class="products-intro-content">

                    <span class="section-tag">ENGINEERED FOR PERFORMANCE</span>

                    <h2>
                        Industrial Cable Management & Lighting Solutions
                    </h2>

                    <p>
                        JETCOTECH offers a comprehensive range of engineered products for
                        cable management, industrial lighting and specialized infrastructure
                        requirements. Our product portfolio includes Cable Trays, Lighting
                        Poles, Mast Poles and FRP Products designed for diverse industrial
                        and commercial applications.
                    </p>

                    <p>
                        With a focus on manufacturing capabilities, product quality and
                        application-specific requirements, JETCOTECH provides reliable
                        solutions for projects requiring efficient cable management,
                        lighting pole systems and high-performance FRP products.
                    </p>

                </div>
            </div>
        </section>
        <section class="products-seo-content">
            <div class="auto-container">

                <div class="products-seo-inner">

                    <span class="section-tag">WHY JETCOTECH</span>

                    <h2>
                        Engineered Products for Industrial Applications
                    </h2>

                    <p>
                        JETCOTECH is a manufacturer, supplier and exporter of industrial
                        products including cable trays, lighting poles, mast poles and FRP
                        products. Our portfolio is developed to address different cable
                        management, lighting and infrastructure requirements across
                        industrial and commercial projects.
                    </p>

                    <p>
                        From standard product requirements to tailor-made solutions,
                        JETCOTECH focuses on dependable manufacturing, consistent quality
                        and application-oriented engineering. Our products are suitable
                        for a wide range of project requirements where reliable industrial
                        infrastructure solutions are essential.
                    </p>

                    <p>
                        Explore our complete product range to find the right cable
                        management, lighting pole, mast pole or FRP solution for your
                        application.
                    </p>

                </div>

            </div>
        </section>
        <!-- <footer class="main-footer footer">
    <div class="upper-box">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget about-widget">
                        <h4 class="widget_title">About</h4>
                        <div class="text">JETCOTECH is a Manufacturer, Supplier & Exporter with a dominant
                            presence in Cable Trays, Lighting Poles, High mast Pole, Earthing Solutions, Solar
                            Structures & Hot Dip Galvanizing.
                        </div>
                        <ul class="social-links">
                            <li><a href="https://www.facebook.com/JetcotechEngineeringLLP"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/jetcotechengineering/"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/jetcotech-engineering"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/@jetcotechengineering2226"><i
                                        class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget links-widget">
                        <h4 class="widget_title">Quick Links</h4>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="product.php">Products</a></li>
                                        <li><a href="catalogue.html">Catalogue</a></li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="clients.html">Clients</a></li>
                                        <li><a href="facility.html">Facilities</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-widget widget">
                        <h4 class="widget_title">Get In Touch</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Opp. Old Pipli Bus-Station,<br> Jetpar
                                Road, Morbi-363642, <br>Gujarat, India
                            </li>
                            <li><i class="fa fa-phone"></i><a href="tel:+917575007163">+91 75750 07163</a><br><a
                                    href="tel:+916351897900">+91 63518 97900</a>
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                <a href="mailto:sales@jetcotech.in">sales@jetcotech.in</a><br>
                                <a href="mailto:marketing@jetcotech.in">marketing@jetcotech.in</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row m-0 align-items-center justify-content-center">
                <div class="copyright-text">Copyright ©<?php echo date("Y"); ?> Jetcotech. All
                    Rights Reserved.
                </div>

            </div>
        </div>
    </div>
</div>
</div> -->
        <footer class="main-footer footer footer-modern">

            <!-- Top CTA -->
            <div class="footer-top-cta">
                <div class="auto-container">
                    <div class="footer-top-cta-inner">
                        <div>
                            <span>LET'S BUILD SOMETHING RELIABLE</span>
                            <h3>Looking for Lighting Poles, Cable Trays or Custom Engineering Solutions?</h3>
                        </div>

                        <a href="contact-us.html" class="footer-cta-btn">
                            Get In Touch
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Main Footer -->
            <div class="upper-box">
                <div class="auto-container">

                    <div class="row">

                        <!-- About -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget about-widget">

                                <h4 class="widget_title">About JETCOTECH</h4>

                                <div class="text">
                                    JETCOTECH is a Manufacturer, Supplier &amp; Exporter
                                    with a strong presence in Cable Trays, Lighting Poles,
                                    High Mast Poles, Earthing Solutions, Solar Structures
                                    &amp; Hot Dip Galvanizing.
                                </div>

                                <div class="footer-social-title">
                                    Follow Us
                                </div>

                                <ul class="social-links">
                                    <li>
                                        <a href="https://www.facebook.com/JetcotechEngineeringLLP">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/jetcotechengineering/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.linkedin.com/company/jetcotech-engineering">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.youtube.com/@jetcotechengineering2226">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>


                        <!-- Quick Links -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget links-widget">

                                <h4 class="widget_title">Quick Links</h4>

                                <div class="widget-content">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="product.php">Products</a></li>
                                                <li><a href="catalogue.html">Catalogue</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li><a href="clients.html">Clients</a></li>
                                                <li><a href="facility.html">Facilities</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Contact -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget">

                                <h4 class="widget_title">Get In Touch</h4>

                                <ul class="footer-contact-list">

                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>

                                        <div>
                                            <span>Address</span>
                                            <p>
                                                Opp. Old Pipli Bus-Station,<br>
                                                Jetpar Road, Morbi-363642,<br>
                                                Gujarat, India
                                            </p>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <div>
                                            <span>Call Us</span>
                                            <p>
                                                <a href="tel:+917575007163">+91 75750 07163</a><br>
                                                <a href="tel:+916351897900">+91 63518 97900</a>
                                            </p>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>

                                        <div>
                                            <span>Email Us</span>
                                            <p>
                                                <a href="mailto:sales@jetcotech.in">sales@jetcotech.in</a><br>
                                                <a href="mailto:marketing@jetcotech.in">marketing@jetcotech.in</a><br>
                                                <a href="mailto:exports@jetcotech.in">exports@jetcotech.in</a>
                                            </p>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Bottom Footer -->
            <div class="footer-bottom">
                <div class="auto-container">

                    <div class="footer-bottom-inner">

                        <p>
                            © <?php echo date('Y'); ?> JETCOTECH Engineering. All Rights Reserved.
                        </p>

                        <div class="footer-bottom-links">
                            <a href="privacy-policy.html">Privacy Policy</a>
                            <a href="terms-condition.html">Terms &amp; Conditions</a>
                        </div>

                    </div>

                </div>
            </div>

        </footer>

        <div id="help-button">
            <a href="https://api.whatsapp.com/send?phone=917575007163" target="_blank">
                <img src="/images/whatsup.png" class="img-responsive mhide">
                <img src="/images/whatsup.png" class="dhide">
            </a>
        </div>
        <style>
            #help-button {
                position: fixed;
                width: auto;
                bottom: 4px;
                right: 25px;
                cursor: pointer;
                z-index: 1000;
            }

            .mhide {
                width: 60px;
            }

            @media only screen and (max-width: 667px) {
                .mhide {
                    display: block;
                }

                .dhide {
                    display: none;
                    width: 50px !important;
                    float: left;


                }

                #help-button {
                    left: 20px;
                }

                .mhide {
                    display: none !important;
                }

                .dhide {
                    display: block !important;
                }
            }

            .dhide {
                display: none;
            }
        </style>
    </div>
    <script src="/js/jquery.js"></script>
<script src="/js/slider/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>


<script src="/js/sticky.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/main.js"></script>
<link href="/js/slider/ubislider.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/js/slider/jqueryElevateZoom.js"></script>
<script src="/js/slider/ubislider.js"></script>
<script src="/js/index.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/form-buzz.js"></script>
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

</body>

</html>
<script>
    jQuery('.product').addClass(' current ');
</script>