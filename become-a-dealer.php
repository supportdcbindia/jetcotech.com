<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <title>Contact Us | JetcoTech - Morbi</title>
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
        <section class="page-title" style="background-image:url(images/background/dealer.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Become A Dealer</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Become A Dealer</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="case-section pb-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="sec-title mb-25">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h2 style="padding-bottom: 0px;">Send Message Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single">
                            <div class="comment-form">
                                <form method="post" action="#">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 form-group"> First Name*
                                            <input type="text" name="username" required>
                                        </div>
                                        <div class="col-lg-6 form-group"> Last Name*
                                            <input type="text" name="username" required>
                                        </div>
                                        <div class="col-lg-6 form-group"> Email*
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="col-lg-6 form-group"> Phone*
                                            <input type="text" name="text" required>
                                        </div>
                                        <div class="col-lg-6 form-group"> City
                                            <input type="text" name="text" required>
                                        </div>
                                        <div class="col-lg-6 form-group"> State
                                            <input type="text" name="text" required>
                                        </div>
                                        <div class="col-lg-12 form-group"> Message
                                            <textarea name="message"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Submit
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 hide_contact_sidebar">
                        <?php require_once('widget-contact.php');?>
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
$('.contact').addClass(' current ');
$('.becomeadealer').addClass(' current ');
$('.become-a-dealer').addClass(' active ');
</script>