<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <title>Gallery | JetcoTech - Morbi</title>
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
        <section class="page-title" style="background-image:url(images/background/5.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Gallery</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="case-section-three">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>We are here to manage your <br> finance with <span>experience</span></h2>
                </div>
                <div class="row clearfix">
                    <?php for($i=1;$i<16;$i++){?>
                    <div class="case-block-two col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box wow pulse" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="images/tray/<?php echo $i;?>.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/tray/<?php echo $i;?>.jpg" data-fancybox="news"
                                            class="plus flaticon-plus-symbol"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php require_once('footer.php');?>
    </div>
    <?php require_once('script.php');?>
</body>

</html>
<script>
$('.gallery').addClass(' current ');
</script>