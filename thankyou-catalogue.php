<!DOCTYPE html>
<html>
    <head>
        <?php require_once('head.php');?>
        <title>Thank You | JetcoTech - Morbi</title>
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
            <section class="page-title" style="background-image:url(images/background/contact.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <h1>Thank <span>You</span></h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Thank You</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="case-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="content-side col-lg-12 col-md-12 col-sm-12">
                            <a id="lnnk" href="pdf/<?php echo  $_REQUEST['varname']; ?>" target="_blank" download>
                                <h4 class="text-center" style="color: #000;"><b>" Thank You For Inquiry We Will Reply You
                                Within 24 Hours"</b></h4>
                                <div class="message" style="display:grid;margin:0px 0 100px;text-align:center;color: #000;">
                                    <img src="images/download_gif.gif" class="mx-auto"><b>Click Here For Your Requested
                                    Catalogue Download</b>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('footer.php');?>
        </div>
        <?php require_once('script.php');?>
        <script>
        var hreff = $("#lnnk").attr('href');
        setTimeout(
        function() {
        window.location = hreff;
        }, 5000);
        </script>
    </body>
</html>