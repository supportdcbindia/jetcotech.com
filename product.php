<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
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
        <?php require_once('header.php');?>
        <section class="page-title" style="background-image:url(images/background/perforatted-cable-tray-bg.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Product</h1>
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
                    <div class="col-md-6 col-lg-4">
                        <div class="case-study-single-box ">
                            <div class="case-study-thumb">
                                <img src="images/pdr/cable-tray/perforated-cable-tray/01.jpg" alt="">
                                <div class="case-study-content">
                                    <div class="case-text">

                                        <div class="case-study-title">
                                            <h3><a href="cable-tray.php">Cable Tray</a></h3>
                                        </div>
                                    </div>
                                    <div class="case-right-btn">
                                        <a href="cable-tray.php"> <i class="flaticon flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="case-study-single-box" style="border:1px solid #e5e5e5;">
                            <div class="case-study-thumb">
                                <img src="images/pdr/lighting-poles/polygonal-octagonal-lighting-poles/01.jpg" alt="">
                                <div class="case-study-content">
                                    <div class="case-text">
                                        <div class="case-study-title">
                                            <h3><a href="lighting-poles.php">Lighting Poles</a></h3>
                                        </div>
                                    </div>
                                    <div class="case-right-btn">
                                        <a href="lighting-poles.php"><i class="flaticon flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="case-study-single-box ">
                            <div class="case-study-thumb">
                                <img src="images/pdr/mast-poles/stadium-mast-poles/01.jpg" alt="">
                                <div class="case-study-content">
                                    <div class="case-text">
                                        <div class="case-study-title">
                                            <h3><a href="mast-poles.php">Mast Poles</a></h3>
                                        </div>
                                    </div>
                                    <div class="case-right-btn">
                                        <a href="mast-poles.php"><i class="flaticon flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="case-study-single-box" style="border:1px solid #e5e5e5;">
                            <div class="case-study-thumb">
                                <img src="images/pdr/frp-products/frp-perforated-cable-tray/frp-perforated-cable-tray.webp"
                                    alt="">
                                <div class="case-study-content">
                                    <div class="case-text">
                                        <div class="case-study-title">
                                            <h3><a href="frp-products.html">Frp Products</a></h3>
                                        </div>
                                    </div>
                                    <div class="case-right-btn">
                                        <a href="frp-products.html"><i class="flaticon flaticon-right-arrow"></i></a>
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
jQuery('.product').addClass(' current ');
</script>