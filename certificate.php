<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <title>Certificate | JetcoTech - Morbi</title>
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
        <section class="page-title" style="background-image:url(images/background/certificate.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Certificate</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Certificate</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="blog-grid-section">
            <div class="auto-container">
                <div class="inner-column">
                    <h3>CERTIFICATION</h3>
                    <div class="text">
                        <p class="font-20 mb-25">Jetco Group is in compliance with all international standards and
                            standards. We believe in creating products that have utmost quality, we make sure that our
                            group follows all pertinent parameters in a production process.</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="news-block-three col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/c-1.jpg" alt="" />
                                <a href="images/c-1.jpg" class="lightbox-image overlay-box"><span
                                        class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-three col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/c-2.jpg" alt="" />
                                <a href="images/c-2.jpg" class="lightbox-image overlay-box"><span
                                        class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-three col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/c-3.jpg" alt="" />
                                <a href="images/c-3.jpg" class="lightbox-image overlay-box"><span
                                        class="fa fa-plus"></span></a>
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
$('.about').addClass(' current ');
$('.certificate').addClass(' current ');
</script>