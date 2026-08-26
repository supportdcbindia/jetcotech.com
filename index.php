<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('head.php');
    ?>
    <title>Home | JetcoTech - Morbi</title>
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
        <?php require_once('header.php'); ?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/homepage/banners/jetcotech-b1.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/homepage/banners/jetcotech-b2.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/homepage/banners/jetcotech-b3.webp" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/homepage/banners/jetcotech-b4.webp" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="about-section-three">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="img-box4 me-xl-5 pe-xl-2">
                            <div class="img1"><img src="images/homepage/about-us.webp" alt="About"> </div>
                            <div class="th-experience">
                                <div class="th-experience_content">
                                    <h2 class="experience-year"><span class="counter-number">100</span>%</h2>
                                    <p class="experience-text">Inhouse Facility<br> Lighting Pole & Cable Tray</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-25">
                            <h2 class="sec-title mb-20 text-left">An Innovative Trendsetter</h2>
                        </div>
                        <p class="sec-text">JETCOTECH is a Manufacturer, Supplier & Exporter with a dominant
                            presence in Cable Trays, Lighting Poles, High mast Pole, Earthing Solutions, Solar
                            Structures & Hot Dip Galvanizing. Led by JETCO group, the company's enviable success story
                            has been scripted essentially by its resolve to innovate, set new standards, enhance
                            capabilities, enrich lives and to ensure that it stays true to its cherished value system.
                        </p>
                        <p class="sec-text mb-30">Jetcotech is trying build up our company on the rock of faith in
                            today's competitive market. We cordially expect your kind co-operation in achieving our
                            milestone. We dedicate ourselves in supplying wide range of Products from one stop.
                        </p>
                        <div>
                            <a href="about-us.html" class="th-btn th-style th-icon">More About Us
                                <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="case-study-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title style1 pb-10">
                            <h4>PRODUCT HIGHLIGHT</h4>
                            <h1>Our Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="constre-btn">
                            <a href="product.html">All Products<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-slider" class="owl-carousel area-carousel">
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/conical-poles.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="conical-poles.php"> Conical Poles</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="conical-poles.php">
                                                            <i class="flaticon flaticon-right-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/high-mast-poles.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="high-mast-poles.php"> High Mast Poles</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="high-mast-poles.php">
                                                            <i class="flaticon flaticon-right-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/ladder-cable-tray.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="ladder-cable-tray.php"> Ladder Cable Tray</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="ladder-cable-tray.php"><i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/perforated-cable-tray.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="perforated-cable-tray.php"> Perforated Cable
                                                            Tray</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="perforated-cable-tray.php"><i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/polygonal-lighting-poles.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="polygonal-octagonal-lighting-poles.php"> Polygonal
                                                            Lighting Poles</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="polygonal-octagonal-lighting-poles.php"><i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/stadium-mast-poles.webp" alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="stadium-mast-poles.php"> Stadium Mast Poles</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="stadium-mast-poles.php"><i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/frp-moulded-&-pultruded-gratings.webp"
                                                alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="frp-moulded-&-pultruded-gratings.php">Frp Moulded
                                                                & Pultruded
                                                            Gratings</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="frp-moulded-&-pultruded-gratings.php">
                                                        <i class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="col-lg-12">
                                        <div class="case-study-single-box ">
                                            <div class="case-study-thumb">
                                                <img src="images/homepage/product/wiremesh-cable-tray.webp"
                                                alt="">
                                                <div class="case-study-content">
                                                    <div class="case-text">
                                                        <div class="case-study-title">
                                                            <h3> <a href="wire-mesh-cable-tray.html">Wire Mesh
                                                            Cable Tray</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="case-right-btn">
                                                        <a href="wire-mesh-cable-tray.html">
                                                        <i class="flaticon flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <div class="container">
                <div class="row product-grid">

                    <!-- Product 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="conical-poles.php" class="product-card-image">
                                <img src="images/homepage/product/conical-poles.webp" alt="Conical Poles">
                                <span class="product-number">01</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="conical-poles.php">Conical Poles</a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="conical-poles.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="high-mast-poles.php" class="product-card-image">
                                <img src="images/homepage/product/high-mast-poles.webp" alt="High Mast Poles">
                                <span class="product-number">02</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="high-mast-poles.php">High Mast Poles</a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="high-mast-poles.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="ladder-cable-tray.php" class="product-card-image">
                                <img src="images/homepage/product/ladder-cable-tray.webp" alt="Ladder Cable Tray">
                                <span class="product-number">03</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="ladder-cable-tray.php">Ladder Cable Tray</a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="ladder-cable-tray.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="perforated-cable-tray.php" class="product-card-image">
                                <img src="images/homepage/product/perforated-cable-tray.webp" alt="Perforated Cable Tray">
                                <span class="product-number">04</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="perforated-cable-tray.php">
                                        Perforated Cable Tray
                                    </a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="perforated-cable-tray.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="polygonal-octagonal-lighting-poles.php" class="product-card-image">
                                <img src="images/homepage/product/polygonal-lighting-poles.webp" alt="Polygonal Lighting Poles">
                                <span class="product-number">05</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="polygonal-octagonal-lighting-poles.php">
                                        Polygonal Lighting Poles
                                    </a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="polygonal-octagonal-lighting-poles.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="stadium-mast-poles.php" class="product-card-image">
                                <img src="images/homepage/product/stadium-mast-poles.webp" alt="Stadium Mast Poles">
                                <span class="product-number">06</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="stadium-mast-poles.php">
                                        Stadium Mast Poles
                                    </a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="stadium-mast-poles.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 7 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="frp-moulded-&amp;-pultruded-gratings.php" class="product-card-image">
                                <img
                                    src="images/homepage/product/frp-moulded-&amp;-pultruded-gratings.webp"
                                    alt="FRP Moulded &amp; Pultruded Gratings">
                                <span class="product-number">07</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="frp-moulded-&amp;-pultruded-gratings.php">
                                        FRP Moulded &amp; Pultruded Gratings
                                    </a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="frp-moulded-&amp;-pultruded-gratings.php" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Product 8 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <a href="wire-mesh-cable-tray.html" class="product-card-image">
                                <img src="images/homepage/product/wiremesh-cable-tray.webp" alt="Wire Mesh Cable Tray">
                                <span class="product-number">08</span>
                            </a>

                            <div class="product-card-content">
                                <h3>
                                    <a href="wire-mesh-cable-tray.html">
                                        Wire Mesh Cable Tray
                                    </a>
                                </h3>

                                <div class="product-card-actions">

                                    <a href="wire-mesh-cable-tray.html" class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="contact-us.php" class="product-quote-btn">
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
        <!-- <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner">
                    <div class="counter-one__bg-shape" style="background-image:url(./images/counter-bg.png"></div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <img src="images/homepage/icons/years-experiences.webp" alt="icon">
                                </div>
                                <div class="counter-one__count-list-content">
                                    <div class="counter-one__count count-box">
                                        <span class="count-text" id="number1">15</span> <span>+</span>
                                    </div>
                                    <p class="counter-one__text">Years Experiences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <img src="images/homepage/icons/export-country.webp" alt="icon">
                                </div>
                                <div class="counter-one__count-list-content">
                                    <div class="counter-one__count count-box">
                                        <span class="count-text" id="number2">17</span>
                                    </div>
                                    <p class="counter-one__text">Export Country</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <img src="images/homepage/icons/square-area.webp" alt="icon">
                                </div>
                                <div class="counter-one__count-list-content">
                                    <div class="counter-one__count count-box">
                                        <span class="count-text" id="number1">112170</span> <span>+</span>
                                    </div>
                                    <p class="counter-one__text">Sqaure Feet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="counter-one">
    <div class="container">

        <div class="counter-heading text-center">
            <span>OUR STRENGTH IN NUMBERS</span>

            <h2>Experience, Infrastructure & Global Reach</h2>

            <p>
                Strong manufacturing capabilities, international presence and
                years of engineering expertise make JETCOTECH a dependable
                partner for industrial projects.
            </p>
        </div>


        <div class="row counter-grid">

            <!-- Item 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="counter-card">

                    <div class="counter-card-top">
                        <div class="counter-icon">
                            <img
                                src="images/homepage/icons/years-experiences.webp"
                                alt="Years of Experience"
                            >
                        </div>

                        <span class="counter-card-number">01</span>
                    </div>

                    <div class="counter-value">
                        <span class="count-text" id="number1">15</span>
                        <span>+</span>
                    </div>

                    <h3>Years of Experience</h3>

                    <p>
                        Proven engineering and manufacturing expertise across
                        demanding industrial applications.
                    </p>

                    <div class="counter-line"></div>

                </div>
            </div>


            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="counter-card">

                    <div class="counter-card-top">
                        <div class="counter-icon">
                            <img
                                src="images/homepage/icons/export-country.webp"
                                alt="Export Countries"
                            >
                        </div>

                        <span class="counter-card-number">02</span>
                    </div>

                    <div class="counter-value">
                        <span class="count-text" id="number2">17</span>
                        <span>+</span>
                    </div>

                    <h3>Export Countries</h3>

                    <p>
                        Serving international markets with engineered products
                        designed for quality and reliable performance.
                    </p>

                    <div class="counter-line"></div>

                </div>
            </div>


            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="counter-card">

                    <div class="counter-card-top">
                        <div class="counter-icon">
                            <img
                                src="images/homepage/icons/square-area.webp"
                                alt="Manufacturing Facility"
                            >
                        </div>

                        <span class="counter-card-number">03</span>
                    </div>

                    <div class="counter-value">
                        <span class="count-text" id="number3">112170</span>
                        <span>+</span>
                    </div>

                    <h3>Square Feet Facility</h3>

                    <p>
                        Large-scale in-house infrastructure supporting production,
                        quality control and project execution.
                    </p>

                    <div class="counter-line"></div>

                </div>
            </div>

        </div>

    </div>
</section>
        <section class="projects-section industries-modern-section">
    <div class="container">

        <div class="industries-heading text-center">
            <span>INDUSTRIES WE SERVE</span>
            <h2>Engineered Solutions Across Diverse Industries</h2>
            <p>
                Supporting critical infrastructure and industrial applications with
                dependable products, engineered performance and application-focused solutions.
            </p>
        </div>

        <div class="row industries-grid">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/automobile-industry.webp" alt="Automobile Industry">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">01</span>

                        <div class="industry-content">
                            <span class="industry-small">INDUSTRY</span>
                            <h3>Automobile</h3>
                            <p>Solutions supporting modern automotive and manufacturing infrastructure.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/commercial-industry.webp" alt="Chemical Industry">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">02</span>

                        <div class="industry-content">
                            <span class="industry-small">INDUSTRY</span>
                            <h3>Chemical</h3>
                            <p>Reliable engineering support for demanding chemical process environments.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/pharma-industry.webp" alt="Pharma Industry">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">03</span>

                        <div class="industry-content">
                            <span class="industry-small">INDUSTRY</span>
                            <h3>Pharma</h3>
                            <p>Solutions designed for controlled, quality-focused pharmaceutical facilities.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 4 -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="industry-card industry-card-wide">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/lighting-pole.webp" alt="Road and Highway">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">04</span>

                        <div class="industry-content">
                            <span class="industry-small">INFRASTRUCTURE</span>
                            <h3>Road &amp; Highway</h3>
                            <p>Supporting roadways, public infrastructure and large outdoor lighting projects.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 5 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/construction-industry.webp" alt="Construction Industry">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">05</span>

                        <div class="industry-content">
                            <span class="industry-small">INDUSTRY</span>
                            <h3>Construction</h3>
                            <p>Solutions for commercial, industrial and infrastructure projects.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 6 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="images/homepage/industry-we-serve/telecom-industry.webp" alt="Telecom Industry">
                    </div>

                    <div class="industry-overlay">
                        <span class="industry-number">06</span>

                        <div class="industry-content">
                            <span class="industry-small">INDUSTRY</span>
                            <h3>Telecom</h3>
                            <p>Dependable infrastructure solutions for telecom networks and installations.</p>
                        </div>

                        <a href="javascript:;" class="industry-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <div class="industries-footer text-center">
            <a href="javascript:;" class="industries-view-btn">
                View All Industries
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
        <section class="groupcompany groupcompany-modern">
    <div class="container">

        <div class="groupcompany-heading text-center">
            <span>OUR GROUP</span>
            <h2>Group of Companies</h2>
            <p>
                A diversified group built on engineering expertise, manufacturing strength
                and a shared commitment to quality, reliability and long-term growth.
            </p>
        </div>

        <div class="row justify-content-center">

            <!-- Company 1 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="group-company-card">
                    <span class="group-company-number">01</span>

                    <div class="group-company-logo">
                        <img
                            src="images/homepage/group-of-companies/jetco-industries.webp"
                            alt="Jetco Industries"
                        >
                    </div>

                    <div class="group-company-line"></div>
                </div>
            </div>


            <!-- Company 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="group-company-card">
                    <span class="group-company-number">02</span>

                    <div class="group-company-logo">
                        <img
                            src="images/homepage/group-of-companies/jetco-overseas.webp"
                            alt="Jetco Overseas"
                        >
                    </div>

                    <div class="group-company-line"></div>
                </div>
            </div>


            <!-- Company 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="group-company-card">
                    <span class="group-company-number">03</span>

                    <div class="group-company-logo">
                        <img
                            src="images/homepage/group-of-companies/jetco-tech.webp"
                            alt="Jetco Tech"
                        >
                    </div>

                    <div class="group-company-line"></div>
                </div>
            </div>


            <!-- Company 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="group-company-card">
                    <span class="group-company-number">04</span>

                    <div class="group-company-logo">
                        <img
                            src="images/homepage/group-of-companies/jteco-busbar.webp"
                            alt="JETCO Busbar"
                        >
                    </div>

                    <div class="group-company-line"></div>
                </div>
            </div>

        </div>

    </div>
</section>
        <section class="cta-modern-section">
    <div class="container">

        <div class="cta-modern-box">

            <div class="cta-modern-pattern"></div>

            <div class="row align-items-center">

                <div class="col-lg-8 col-md-8">

                    <div class="cta-modern-content">

                        <span class="cta-small-title">
                            COMPLETE IN-HOUSE CAPABILITY
                        </span>

                        <h3>
                            100% Inhouse Facility for
                            Lighting Poles &amp; Cable Trays
                        </h3>

                        <p>
                            From manufacturing to quality control, our integrated
                            facility enables reliable production, consistent quality
                            and dependable project execution.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4">

                    <div class="cta-modern-action">

                        <a href="javascript:;" class="cta-modern-btn click1">
                            <span>Inquire Now</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
        <section class="logo-sec trusted-companies-section">
    <div class="container">

        <div class="trusted-heading text-center">
            <span>TRUSTED BY INDUSTRY</span>

            <h2>Companies Who Trust Us</h2>

            <p>
                Proud to work with organizations across diverse industries
                that rely on our engineering, manufacturing and project capabilities.
            </p>
        </div>


        <div class="trusted-logo-grid">

            <?php

            $nb_elem_per_page = 200;

            $page = isset($_GET['page'])
                ? max(0, intval($_GET['page']) - 1)
                : 0;

            $data = glob("images/homepage/client-logo/*.*");

            $logos = array_slice(
                $data,
                $page * $nb_elem_per_page,
                $nb_elem_per_page
            );

            ?>

            <?php foreach ($logos as $index => $p) { ?>

                <div class="trusted-logo-card">

                    <span class="trusted-logo-number">
                        <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                    </span>

                    <div class="trusted-logo-image">
                        <img
                            src="<?php echo htmlspecialchars($p); ?>"
                            alt="Trusted Client"
                            loading="lazy"
                        >
                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>
    </div>
    <?php require_once('footer.php'); ?>
    <?php require_once('script.php'); ?>
</body>

</html>
<script>
    jQuery('.home').addClass(' current ');
</script>