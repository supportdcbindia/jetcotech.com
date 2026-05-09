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
        <section class="page-title" style="background-image:url(images/background/contact.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Contact <span>Us</span></h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="case-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="sec-title mb-25">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h2 style="padding-bottom: 0px;">Send Message Us </h2>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single">
                            <div class="comment-form my-custom-modal">
                                <form class="form-horizontal form3" action="inquiry-action.php" method="post"
                                    novalidate="novalidate">
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12">
                                            <input name="name" id="name" type="text" placeholder="Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12">
                                            <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback class-feedback">
                                        <div class="col-md-12">
                                            <input name="city" id="city" type="text" placeholder="City"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12">
                                            <input name="number" id="number" type="tel" placeholder="Phone"
                                                maxlength="15" minlength="10" class="form-control number21">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="message" id="message"
                                                placeholder="Requirement"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8 col position-relative">
                                                    <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                        class="form-control" type="text">
                                                </div>
                                                <div class="col-md-4 col">
                                                    <img src="captcha.php" class="capside">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-md-12 col-sm-3 col-xs-12">
                                            <input name="submit" class="submit submitbutton" type="submit"
                                                value="Submit Now!">
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
$('.contactus').addClass(' current ');
$('.contact').addClass(' active ');
</script>