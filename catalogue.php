<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php'); ?>
    <?php
        $data = (isset($_REQUEST['data']) && $_REQUEST['data'] != '' ? $_REQUEST['data'] : '') ;
        $ttl = ($data != '' ? ucwords( str_replace('-', ' ', $data)) : 'Catalogue');
        if($data != ''){
        $dirname = "catalog/" . $data ."/";
        $product = glob($dirname . "*.{jpg,jpeg}", GLOB_BRACE);
        $product = json_encode($product);
        
        }else{
        ?>
    <style>
    .ct-block.news-section-two {
        padding: 90px 0;
    }
    </style>
    <?php
        }
        ?>
    <script type="text/javascript" src="flip/jquery.min.1.7.js"></script>
    <script type="text/javascript" src="flip/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="flip/hash.js"></script>
    <script type="text/javascript" src="flip/main.js"></script>
    <title><?php echo $ttl;?> | JetcoTech - Morbi</title>
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
        <section class="news-section-two ct-block my-cat-bx">
            <div class="auto-container">
                <div class="row clearfix justify-content-md-center ">
                    <?php if($data == ''){?>
                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="flips/catalog_img.jpg" alt="" />
                            </div>
                            <div class="lower-content">
                                <h5><a href="pdf/jetcotech-product-catalogue.pdf"
                                        pdf="pdf/jetcotech-product-catalogue.pdf" target="_blank"
                                        class="click2">Jetcotech Product Catalogue</a></h5>
                                <a href="pdf/jetcotech-product-catalogue.pdf" pdf="pdf/jetcotech-product-catalogue.pdf"
                                    target="_blank" class="theme-btn btn-style-three click2">Download</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="flips/catalog_img.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h5><a href="pdf/jetcotech-cable-tray.pdf" pdf="pdf/lighting-pole-high-mast-poles.pdf" target="_blank" class="click2">Lighting Pole & High Mast
                                    Poles</a></h5>
                                    <a href="pdf/lighting-pole-high-mast-poles.pdf" pdf="pdf/lighting-pole-high-mast-poles.pdf" target="_blank"
                                    class="theme-btn btn-style-three click2">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="flips/catalog_img.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h5><a href="pdf/jetcotech-cable-tray.pdf" pdf="pdf/jetcotech-cable-tray.pdf" target="_blank" class="click2">Cable Tray</a></h5>
                                    <a href="pdf/jetcotech-cable-tray.pdf" pdf="pdf/jetcotech-cable-tray.pdf" target="_blank"
                                    class="theme-btn btn-style-three click2">Download</a>
                                </div>
                            </div>
                        </div> -->
                    <?php }else{?>
                    <div class="news-block-two col-lg-6 ">
                        <div id="photobook"></div>
                        <div style="float: left;text-align: center;width: 100%;margin-top: 35px;">
                            <a href="pdf/jetcotech-product-catalogue.pdf" pdf="pdf/jetcotech-product-catalogue.pdf"
                                target="_blank" class="theme-btn btn-style-three">Download</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php require_once('footer.php'); ?>
    </div>
    <?php require_once('script.php'); ?>
    <script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="flips/jquery.onebook3d.min.js"></script>
    <script>
    var srcs = <?php echo $product;?>;
    </script>
    <script>
    $(document).ready(function() {
        /* var src5 = [
        "catalog/jetcotech-profile/01.jpg",
        "catalog/jetcotech-profile/02.jpg",
        "catalog/jetcotech-profile/03.jpg",
        "catalog/jetcotech-profile/04.jpg",
        "catalog/jetcotech-profile/05.jpg",
        "catalog/jetcotech-profile/06.jpg",
        ]; */
        $("#photobook").onebook(srcs, {
            skin: ["light", "dark"],
            bgDark: "#222222 url(flips/bg.jpg)",
            flip: "soft",
            border: 0,
            cesh: false,
        });
        /* var hd_ht = $('.main-header').height();
        var hd_tl = $('.page-title').height();
        var mp_ht = $('.map-info-section').height();
        var ft_ht = $('.main-footer').height();
        var ht = (hd_ht + mp_ht + ft_ht + hd_tl);
        var hts = window.innerHeight; */
        //var hts = $( window ).height();
        //$('#photobook').height((hts - ht));
        //$('#photobook').height(500);
    });
    $('#exampleModals').on('shown.bs.modal', function(e) {});
    $('#exampleModals').on('hide.bs.modal', function(e) {
        $("#photobook").html('');
    });
    </script>
</body>

</html>
<script>
$('.catalogue').addClass(' current ');
</script>