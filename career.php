<!DOCTYPE html>
<html>

<head>
    <?php require_once('head.php');?>
    <title>Career | JetcoTech - Morbi</title>
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
                    <h1>Career</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Career</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="case-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-side col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-single">
                            <div class="comment-form my-custom-modal">
                                <form class="form-horizontal form7" action="career-action.php" method="post"
                                    novalidate="novalidate" enctype="multipart/form-data">
                                    <!-- Form Name -->
                                    <!-- Text input-->
                                    <div class="form-group has-feedback">

                                        <input name="name" id="name" type="text" placeholder="Name"
                                            class="form-control">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                            class="form-control">


                                    </div>
                                    <!--<div class="form-group has-feedback">-->

                                    <!--    <input name="city" id="city" type="text" placeholder="City"-->
                                    <!--        class="form-control">-->


                                    <!--</div>-->
                                    <div class="form-group has-feedback">

                                        <input name="number" id="number" type="tel" placeholder="Contact Number" maxlength="15"
                                            minlength="10" class="form-control number21">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="department" id="department" type="text" placeholder="Department"
                                            class="form-control">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="post" id="post" type="text" placeholder="Post"
                                            class="form-control">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="experience" id="experience" type="text" placeholder="Experience"
                                            class="form-control">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="preferredlocation" id="preferredlocation" type="text" placeholder="Preferred Location"
                                            class="form-control">


                                    </div>
                                    <div class="form-group has-feedback">

                                        <input name="expectedctc" id="expectedctc" type="text" placeholder="Expected CTC"
                                            class="form-control">


                                    </div>
                                    <!--<div class="levv_inn form-group has-feedback">-->
                                    <!--    <label for="file-upload" class="custom-file-upload">-->
                                    <!--        <i class="fa fa-cloud-upload iclass"></i>Upload Resume-->
                                    <!--    </label>-->
                                    <!--    <input id="file-upload" class="form-control" name="userFile" type="file">-->
                                    <!--    <p style="color:#E10000">Use Only:pdf,doc,docx</p>-->
                                    <!--</div>-->
                                    <!--<div class="form-group has-feedback">-->
                                    <!--    <textarea class="form-control" name="message" id="message"-->
                                    <!--        placeholder="Message"></textarea>-->


                                    <!--</div>-->
                                    <div class="form-group has-feedback">
                                        <div class="row">
                                            <div class="col-md-8 ">
                                                <input name="captcha" id="captcha" placeholder="Captcha Code:"
                                                    class="form-control" type="text">

                                            </div>
                                            <div class="col-md-4">
                                                <img src="captcha.php"
                                                    style="float:left;margin-top: 5px;margin-bottom: 15px;">
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
                </div>
            </div>
        </section>
        <?php require_once('footer.php');?>
    </div>
    <?php require_once('script.php');?>
</body>

</html>
<script>
$('.career').addClass(' current ');
$('.career').addClass(' current ');
$('.career').addClass(' active ');
</script>