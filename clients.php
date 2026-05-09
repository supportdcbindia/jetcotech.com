<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <?php
$dirname = "images/clients/";
$product = glob($dirname . "*.{jpg,jpeg,webp}", GLOB_BRACE);
//print_r($product);
?>
    <title>Clients | JetcoTech - Morbi</title>
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
                    <h1>Clients</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Clients</li>
                    </ul>
                </div>
            </div>
        </section>
        <?php /*?>
        <section class="companies-section">
            <div class="lower-section">
                <div class="company-info-tabs">
                    <div class="company-tabs tabs-box">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="company-details">
                                <div class="auto-container">
                                    <div class="content">
                                        <div class="row clearfix">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="image" style="text-align: center;"><img
                                                        src="images/coming-soon.jpg" alt="" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php */?>
        <section class="services-section-eight">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">
                                <?php foreach($product as $p){?>
                                <div class="services-block-fourteen style-two col-lg-2 col-md-6 col-sm-12">
                                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><img src="<?php echo $p;?>" alt="Client-logo" /></div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-4 col-md-8 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/service-5.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h2>1000+ <span>Happy Customers</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
$('.clients').addClass(' current ');
</script>