<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(-1);

    /*?>
<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords"
    content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<?php */ ?>
    <?php

    $typeName = $type = strtolower(trim($_GET['type'] ?? 'manufacturer'));
    $cityName = $city = str_replace('-', ' ', trim($_GET['city'] ?? 'India'));

    /* Product name can come dynamically from your existing product/category variable */
    $productName = "High Mast Poles";

    /* Make type grammatically clean */
    $typeLabel = ucwords($type);

    ?>
    <?php

    $siteUrl = "https://www.jetcotech.com";
    $companyName = "Jetcotech";
    $brandName = "Jetcotech";
    $logoUrl = $siteUrl . "/images/logo-2.png"; // update logo path if needed
    $phone = "+91 75750 07163"; // update phone
    $email = "info@jetcotech.in"; // update email

    $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $currentPage = basename($requestPath);

    if ($currentPage == "" || $currentPage == "index.php" || $currentPage == "index.html") {
        $currentPage = "index.php";
    }

    $currentUrl = $siteUrl . $requestPath;

    /* ---------------------------------------------
   Dynamic City + Type Meta
--------------------------------------------- */

    if (1) {
        $productName = "Lighting Poles";
        // Clean values
        $cityName = ucwords(str_replace("-", " ", trim($cityName)));
        $typeName = ucwords(str_replace("-", " ", trim($typeName)));

        // Main Product Category
        if (empty($productName)) {
            $productName = "Industrial Products";
        }

        $pageTitle =
            $productName . " " . $typeName . " in " . $cityName .
            " | " . $companyName;

        $pageDescription =
            $companyName .
            " is a manufacturer, supplier and exporter of " .
            strtolower($productName) . " in " .
            $cityName .
            ", offering cable trays, lighting poles, mast poles and FRP products for industrial and commercial applications.";

        $pageKeywords =
            $productName . " " . $typeName . " in " . $cityName . ", " .
            $productName . " in " . $cityName . ", " .
            $productName . " Manufacturer in " . $cityName . ", " .
            $productName . " Supplier in " . $cityName . ", " .
            $productName . " Exporter in " . $cityName;

        $pageSubject =
            $productName . " " . $typeName . " in " . $cityName;

        $pageType = "product";
    } else {

        /* ---------------------------------------------
       Fallback Meta For Unknown Pages
    --------------------------------------------- */

        if (!isset($pageMeta[$currentPage])) {

            $slug = preg_replace('/\.(php|html)$/i', '', $currentPage);

            $pageName = ucwords(
                str_replace("-", " ", $slug)
            );

            $pageMeta[$currentPage] = [

                "title" =>
                $pageName .
                    " Manufacturer & Supplier in India | " .
                    $companyName,

                "description" =>
                $companyName .
                    " is a trusted manufacturer, supplier and exporter of " .
                    $pageName .
                    ", cable trays, lighting poles, mast poles and FRP products.",

                "keywords" =>
                $pageName .
                    " Manufacturer, " .
                    $pageName .
                    " Supplier, " .
                    $pageName .
                    " Exporter, " .
                    $companyName,

                "subject" =>
                $pageName .
                    " Manufacturer & Supplier in India",

                "type" => "product"
            ];
        }

        $meta = $pageMeta[$currentPage];

        $pageTitle       = $meta['title'];
        $pageDescription = $meta['description'];
        $pageKeywords    = $meta['keywords'];
        $pageSubject     = $meta['subject'];
        $pageType        = $meta['type'];
    }
    ?>


    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8'); ?>" />

    <link rel="canonical" href="<?= htmlspecialchars($currentUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="robots" content="index, follow" />

    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:url" content="<?= htmlspecialchars($currentUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:image" content="<?= htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:type" content="<?= ($pageType == 'product') ? 'product' : 'website'; ?>" />

    <meta property="og:site_name" content="<?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="twitter:image" content="<?= htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="publisher" content="<?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="subject" content="<?= htmlspecialchars($pageSubject, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="Robots" content="all" />
    <meta name="Yahoobot" content="Index, Follow" />
    <meta name="MSNbot" content="index, follow" />
    <meta name="allow-search" content="yes" />
    <meta name="rating" content="General" />
    <meta name="distribution" content="global" />
    <meta name="author" content="<?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="copyright" content="jetcotech.com" />
    <meta name="document-rating" content="Safe for Kids" />
    <meta name="geo.region" content="IN-GJ" />
    <meta name="geo.placename" content="Morbi, Gujarat, India" />
    <meta name="document-type" content="Public" />

    <!-- Add your Google verification code here -->
    <meta name="google-site-verification" content="ADD_GOOGLE_SITE_VERIFICATION_CODE_HERE" />


    <script type="application/ld+json">
        <?= json_encode([
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => [
                [
                    "@type" => "Question",
                    "name" => "What products does Jetcotech manufacture?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Jetcotech manufactures and supplies cable trays, perforated cable trays, ladder cable trays, wire mesh cable trays, raceway cable trays, lighting poles, high mast poles, earthing solutions, solar structures and related industrial electrical infrastructure products."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Which industries use Jetcotech products?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Jetcotech products are used in industrial projects, infrastructure projects, commercial buildings, residential projects, solar plants, electrical installations, power distribution and cable management applications."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Does Jetcotech provide customized products?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Yes, Jetcotech provides customized cable trays, lighting poles, high mast poles and support structures based on project specifications, size, finish, load requirement and application needs."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What finishes are available for cable trays?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Cable trays are commonly available in finishes such as hot dip galvanized, pre-galvanized, powder coated, mild steel and stainless steel options depending on project requirements."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "How can I request a quotation from Jetcotech?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "You can contact Jetcotech with your product requirement, size, quantity, finish, application and project details to receive a quotation."
                    ]
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>


    <script type="application/ld+json">
        <?= json_encode([
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => $companyName,
            "legalName" => $companyName,
            "url" => $siteUrl . "/",
            "logo" => $logoUrl,
            "description" => "Jetcotech is a manufacturer, supplier and exporter of cable trays, lighting poles, high mast poles, earthing solutions, solar structures and industrial electrical infrastructure products.",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Morbi",
                "addressRegion" => "Gujarat",
                "addressCountry" => "IN"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => $phone,
                "email" => $email,
                "contactType" => "Sales",
                "areaServed" => "IN",
                "availableLanguage" => ["English", "Hindi", "Gujarati"]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>


    <?php if ($pageType == "product") { ?>
        <script type="application/ld+json">
            <?= json_encode([
                "@context" => "https://schema.org",
                "@type" => "Product",
                "name" => str_replace(" | " . $companyName, "", $pageTitle),
                "description" => $pageDescription,
                "image" => $logoUrl,
                "brand" => [
                    "@type" => "Brand",
                    "name" => $brandName
                ],
                "manufacturer" => [
                    "@type" => "Organization",
                    "name" => $companyName,
                    "url" => $siteUrl
                ],
                "category" => $pageSubject,
                "url" => $currentUrl
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
        </script>
    <?php } ?>


    <script type="application/ld+json">
        <?= json_encode([
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $siteUrl . "/"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => trim(str_replace(["| " . $companyName, "Manufacturer & Supplier in India"], "", $pageTitle)),
                    "item" => $currentUrl
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <link rel="stylesheet" href="<?= $siteUrl; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $siteUrl; ?>/js/slider/ubislider.css">
    <link rel="stylesheet" href="<?= $siteUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?= $siteUrl; ?>/css/responsive.css">
    <link rel="stylesheet" href="<?= $siteUrl; ?>/css/model-custom.css">
    <link rel="stylesheet" href="<?= $siteUrl; ?>/css/sidebar-btn.css">

    <link rel="shortcut icon" src="<?= $siteUrl; ?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" src="<?= $siteUrl; ?>/images/favicon.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1006297605673775');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1006297605673775&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

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
    <style>
        /* =========================================================
   PRODUCTS INTRO SECTION
========================================================= */

        .products-intro-section {
            position: relative;
            padding: 90px 0 80px;
            background: #f7f9fb;
            overflow: hidden;
        }

        .products-intro-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 150px;
            background: #ff7043;
        }

        .products-intro-section::after {
            content: "";
            position: absolute;
            right: -100px;
            top: -100px;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(18, 57, 88, 0.08);
            border-radius: 50%;
        }

        .products-intro-content {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            z-index: 1;
        }

        /* Small Label */

        .products-intro-content .section-tag,
        .products-seo-inner .section-tag {
            display: inline-block;
            position: relative;
            margin-bottom: 14px;
            padding-left: 18px;

            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ff7043;
        }

        .products-intro-content .section-tag::before,
        .products-seo-inner .section-tag::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 8px;
            height: 8px;
            background: #ff7043;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        /* Heading */

        .products-intro-content h2 {
            position: relative;
            max-width: 850px;
            margin: 0 auto 28px;

            font-size: 42px;
            line-height: 1.18;
            font-weight: 700;
            color: #123957;
            letter-spacing: -0.5px;
        }

        .products-intro-content h2::after {
            content: "";
            display: block;
            width: 58px;
            height: 4px;
            margin: 20px auto 0;
            border-radius: 10px;
            background: #ff7043;
        }

        /* Paragraph */

        .products-intro-content p {
            max-width: 900px;
            margin: 0 auto 17px;

            font-size: 16px;
            line-height: 1.85;
            color: #607286;
        }

        .products-intro-content p:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
   SEO CONTENT SECTION
========================================================= */

        .products-seo-content {
            position: relative;
            padding: 85px 0 95px;
            background: #ffffff;
            overflow: hidden;
        }

        .products-seo-content::before {
            content: "JETCOTECH";
            position: absolute;
            right: -30px;
            top: 35px;

            font-size: 90px;
            font-weight: 800;
            letter-spacing: 4px;
            color: rgba(18, 57, 88, 0.025);
            pointer-events: none;
        }

        .products-seo-inner {
            position: relative;
            max-width: 1050px;
            margin: 0 auto;
            padding: 48px 55px;

            background: #f7f9fb;
            border: 1px solid #e4eaf0;
            border-radius: 18px;

            box-shadow: 0 15px 45px rgba(18, 57, 88, 0.06);
            z-index: 1;
        }

        /* Orange top accent */

        .products-seo-inner::before {
            content: "";
            position: absolute;
            left: 55px;
            top: 0;

            width: 65px;
            height: 4px;

            background: #ff7043;
            border-radius: 0 0 5px 5px;
        }

        /* SEO Heading */

        .products-seo-inner h2 {
            margin: 0 0 25px;

            font-size: 34px;
            line-height: 1.25;
            font-weight: 700;
            color: #123957;
        }

        /* SEO Paragraph */

        .products-seo-inner p {
            margin: 0 0 18px;

            font-size: 15.5px;
            line-height: 1.85;
            color: #5e7184;
        }

        .products-seo-inner p:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
   HOVER / VISUAL DETAIL
========================================================= */

        .products-intro-content,
        .products-seo-inner {
            transition: all 0.35s ease;
        }

        .products-seo-inner:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 55px rgba(18, 57, 88, 0.09);
        }


        /* =========================================================
   RESPONSIVE
========================================================= */

        @media (max-width: 991px) {

            .products-intro-section {
                padding: 70px 0 65px;
            }

            .products-intro-content h2 {
                font-size: 36px;
            }

            .products-seo-content {
                padding: 70px 0;
            }

            .products-seo-inner {
                padding: 40px;
            }

            .products-seo-inner::before {
                left: 40px;
            }

            .products-seo-inner h2 {
                font-size: 30px;
            }
        }


        @media (max-width: 767px) {

            .products-intro-section {
                padding: 55px 0 50px;
            }

            .products-intro-section::before {
                width: 4px;
                height: 100px;
            }

            .products-intro-content {
                padding: 0 15px;
            }

            .products-intro-content h2 {
                font-size: 29px;
                line-height: 1.25;
                margin-bottom: 22px;
            }

            .products-intro-content h2::after {
                width: 48px;
                height: 3px;
                margin-top: 16px;
            }

            .products-intro-content p {
                font-size: 14px;
                line-height: 1.75;
            }

            .products-seo-content {
                padding: 50px 0 60px;
            }

            .products-seo-inner {
                padding: 32px 25px;
                border-radius: 14px;
            }

            .products-seo-inner::before {
                left: 25px;
                width: 50px;
            }

            .products-seo-inner h2 {
                font-size: 26px;
                line-height: 1.3;
                margin-bottom: 20px;
            }

            .products-seo-inner p {
                font-size: 14px;
                line-height: 1.75;
            }

            .products-seo-content::before {
                font-size: 55px;
                right: -20px;
            }

        }


        @media (max-width: 480px) {

            .products-intro-content h2 {
                font-size: 25px;
            }

            .products-intro-content .section-tag,
            .products-seo-inner .section-tag {
                font-size: 10px;
                letter-spacing: 1.5px;
            }

            .products-seo-inner {
                padding: 28px 20px;
            }

            .products-seo-inner::before {
                left: 20px;
            }

            .products-seo-inner h2 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper product">
        <div class="preloader"></div>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCRG5N2H" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php include("pop-model.php"); ?>
        <header class="main-header header-style-two">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="upper-inner clearfix">
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="index.html"><img src="/images/logo-2.png" alt="" title=""></a></div>
                        </div>
                        <div class="upper-right clearfix">
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-e-mail-envelope"></span></div>
                                <ul>
                                    <li><a href="mailto:sales@jetcotech.in"> sales@jetcotech.in</a> | <a
                                            href="mailto:marketing@jetcotech.in">marketing@jetcotech.in</a>

                                    </li>
                                </ul>
                            </div>
                            <div class="upper-column info-box ">
                                <div class="icon-box"><span class="flaticon-phone-receiver"></span></div>
                                <ul>
                                    <li><a href="tel:+917575007163">+91 75750
                                            07163</a> | <a href="tel:+916351897900">+91 63518 97900</a></li>
                                </ul>
                            </div>
                            <div class="upper-column info-box pl-0">
                                <ul class="social-icon-one">
                                    <li><a href="https://www.facebook.com/JetcotechEngineeringLLP" target="_blank"><span
                                                class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="https://www.instagram.com/jetcotechengineering/" target="_blank"><span
                                                class="fa fa-instagram"></span></a></li>
                                    <li><a href="https://www.linkedin.com/company/jetcotech-engineering" target="_blank"><span
                                                class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="https://www.youtube.com/@jetcotechengineering2226" target="_blank"><span
                                                class="fa fa-youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="social-box"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <div class="nav-outer clearfix">
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="home"><a href="index.html">Home</a></li>
                                        <li class="dropdown about">
                                            <a href="javascript:;">Company Profile</a>
                                            <ul>
                                                <li class="aboutus"><a href="about-us.html">About Us</a></li>
                                                <li class="certificate"><a href="certificate.html">Certificate</a></li>
                                            </ul>
                                        </li>
                                        <li class="product dropdown">
                                            <a onclick="productfunc()" href="product.php">Products </a>
                                            <ul>
                                                <li class="dropdown CableTray">
                                                    <a onclick="cablefunc()" href="cable-tray.php">Cable Tray</a>
                                                    <ul>
                                                        <li class="PerforattedCableTray"><a
                                                                href="perforated-cable-tray.html">Perforated Cable Tray</a></li>
                                                        <li class="LadderCableTray"><a href="ladder-cable-tray.html">Ladder
                                                                Cable Tray</a>
                                                        </li>
                                                        <li class="WireMeshCableTray"><a href="wire-mesh-cable-tray.html">Wire
                                                                Mesh Cable Tray</a>
                                                        </li>
                                                        <li class="RacewayCableTray"><a href="raceway-cable-tray.html">Raceway
                                                                Cable Tray</a>
                                                        </li>
                                                        <li class="EmbossedPerforatedCableTray"><a
                                                                href="embossed-perforated-cable-tray.html">Embossed Perforated
                                                                Cable Tray</a>
                                                        </li>
                                                        <li class="HeavyDutyLadderCableTray"><a
                                                                href="heavy-duty-ladder-cable-tray.html">Heavy Duty Ladder Cable
                                                                Tray</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown LightingPoles">
                                                    <a onclick="lightingfun()" href="lighting-poles.php">Lighting Poles</a>
                                                    <ul>
                                                        <li class="OctagonalLightingPoles"><a
                                                                href="polygonal-octagonal-lighting-poles.html">Polygonal /
                                                                Octagonal Lighting Poles</a>
                                                        </li>
                                                        <li class="SwagedLightingPoles"><a
                                                                href="swaged-lighting-poles.html">Swaged Lighting Poles</a></li>
                                                        <li class="ConicalPoles"><a href="conical-poles.html">Conical Poles</a>
                                                        </li>
                                                        <li class="DecorativeCustomisedPoles"><a
                                                                href="decorative-poles.html">Decorative / Customised Poles</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown MastPoles">
                                                    <a onclick="mastfun()" href="mast-poles.php">Mast Poles</a>
                                                    <ul>
                                                        <li class="HighMastPoles"><a href="high-mast-poles.html">High Mast
                                                                Poles</a>
                                                        </li>
                                                        <li class="FlagMastPoles"><a href="flag-mast-poles.html">Flag Mast
                                                                Poles</a>
                                                        </li>
                                                        <li class="StadiumMastPoles"><a href="stadium-mast-poles.html">Stadium
                                                                Mast Poles</a>
                                                        </li>
                                                        <li class="SignageMastPoles"><a href="signage-mast-pole.html">Signage
                                                                Mast Poles</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown FrpProducts">
                                                    <a onclick="frpfun()" href="frp-products.html">Frp Products</a>
                                                    <ul>
                                                        <li class="FrpPerforatedCableTray"><a
                                                                href="frp-perforated-cable-tray.php">Frp Perforated Cable
                                                                Tray</a></li>
                                                        <li class="FrpLadderCableTray"><a href="frp-ladder-cable-tray.php">Frp
                                                                Ladder Cable Tray</a></li>
                                                        <li class="FrpMouldedPultrudedGratings"><a
                                                                href="frp-moulded-&-pultruded-gratings.html">Frp Moulded &amp;
                                                                Pultruded Gratings</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="catalogue"><a href="catalogue.html">Catalogue</a></li>
                                        <li class="clients"><a href="clients.html">Clients</a></li>
                                        <li class="faculty"><a href="facility.html">Facilities</a></li>
                                        <li class="dropdown contact">
                                            <a href="javascript:;">Contact Us</a>
                                            <ul>
                                                <li class="contactus"><a href="contact-us.html">Contact Us</a></li>
                                                <li class="becomeadealer"><a href="become-a-dealer.html">Become A Dealer</a>
                                                </li>
                                                <li class="career"><a href="career.html">Career</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <div class="logo pull-left"> <a href="index.html" class="img-responsive"><img src="/images/logo-small.png"
                                alt="" title=""></a> </div>
                    <div class="right-col pull-right">
                        <nav class="main-menu navbar-expand-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li class="home"><a href="index.html">Home</a></li>
                                    <li class="dropdown about">
                                        <a href="javascript:;">Company Profile</a>
                                        <ul>
                                            <li class="aboutus"><a href="about-us.html">About Us</a></li>
                                            <li class="certificate"><a href="certificate.html">Certificate</a></li>
                                        </ul>
                                    </li>
                                    <li class="product dropdown">
                                        <a onclick="productfunc()" href="product.php">Products</a>
                                        <ul>
                                            <li class="dropdown CableTray">
                                                <a onclick="cablefunc()" href="cable-tray.html">Cable Tray</a>
                                                <ul>
                                                    <li class="PerforattedCableTray"><a
                                                            href="perforated-cable-tray.html">Perforatted Cable Tray</a></li>
                                                    <li class="LadderCableTray"><a href="ladder-cable-tray.html">Ladder Cable
                                                            Tray</a>
                                                    </li>
                                                    <li class="WireMeshCableTray"><a href="wire-mesh-cable-tray.html">Wire Mesh
                                                            Cable Tray</a>
                                                    </li>
                                                    <li class="RacewayCableTray"><a href="raceway-cable-tray.html">Raceway Cable
                                                            Tray</a>
                                                    </li>
                                                    <li class="EmbossedPerforatedCableTray"><a
                                                            href="embossed-perforated-cable-tray.html">Embossed Perforated Cable
                                                            Tray</a>
                                                    </li>
                                                    <li class="HeavyDutyLadderCableTray"><a
                                                            href="heavy-duty-ladder-cable-tray.html">Heavy Duty Ladder Cable
                                                            Tray</a>
                                                    </li>
                                                    <!-- <li class="CableTrayAccessories"><a href="cable-tray-accessories.html">Cable
                                    Tray Accessories</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="dropdown LightingPoles">
                                                <a onclick="lightingfun()" href="lighting-poles.php">Lighting Poles</a>
                                                <ul>
                                                    <li class="OctagonalLightingPoles"><a
                                                            href="polygonal-octagonal-lighting-poles.html">Polygonal / Octagonal
                                                            Lighting Poles</a>
                                                    </li>
                                                    <li class="SwagedLightingPoles"><a href="swaged-lighting-poles.html">Swaged
                                                            Lighting Poles</a>
                                                    </li>
                                                    <li class="ConicalPoles"><a href="conical-poles.html">Conical Poles</a></li>
                                                    <li class="DecorativeCustomisedPoles"><a
                                                            href="decorative-poles.html">Decorative / Customised Poles</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown MastPoles">
                                                <a onclick="mastfun()" href="mast-poles.php">Mast Poles</a>
                                                <ul>
                                                    <li class="HighMastPoles"><a href="high-mast-poles.html">High Mast Poles</a>
                                                    </li>
                                                    <li class="FlagMastPoles"><a href="flag-mast-poles.html">Flag Mast Poles</a>
                                                    </li>
                                                    <li class="StadiumMastPoles"><a href="stadium-mast-poles.html">Stadium Mast
                                                            Poles</a>
                                                    </li>
                                                    <li class="SignageMastPoles"><a href="signage-mast-pole.html">Signage Mast
                                                            Poles</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown FrpProducts">
                                                <a onclick="frpfun()" href="frp-products.html">Frp Products</a>
                                                <ul>
                                                    <li class="FrpPerforatedCableTray"><a
                                                            href="frp-perforated-cable-tray.php">Frp Perforated Cable Tray</a>
                                                    </li>
                                                    <li class="FrpLadderCableTray"><a href="frp-ladder-cable-tray.php">Frp
                                                            Ladder Cable Tray</a></li>
                                                    <li class="FrpMouldedPultrudedGratings"><a
                                                            href="frp-moulded-&-pultruded-gratings.html">Frp Moulded &amp;
                                                            Pultruded Gratings</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="catalogue"><a href="catalogue.html">Catalogue</a></li>
                                    <li class="faculty"><a href="facility.html">Facilities</a></li>
                                    <li class="clients"><a href="clients.html">Clients</a></li>
                                    <li class="dropdown contact">
                                        <a href="javascript:;">Contact Us</a>
                                        <ul>
                                            <li class="contactus"><a href="contact-us.html">Contact Us</a></li>
                                            <li class="becomeadealer"><a href="become-a-dealer.html">Become A Dealer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-title" style="background-image:url(images/background/high-mast-poles-bg.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>High Mast Poles <?= ucfirst($type); ?> in <?= ucfirst($city); ?></h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Mast Poles</li>
                        <li>High Mast Poles</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
                            <div class="sidebar-widgets sidebar-blog-categorys">
                                <div class="clearfix">
                                    <div class="ubislider-image-container left" data-ubislider="#pdrzoom"
                                        id="imageSlider3" data-image="5">
                                        <img src="images/pdr/mast-poles/high-mast-poles/01.jpg">
                                    </div>
                                    <div id="pdrzoom" class="ubislider right ecommerce" data-slidetime="0">
                                        <a class="arrow prev pasive pro_prev"></a>
                                        <a class="arrow next pro_next"></a>
                                        <ul id="gal1" class="ubislider-inner">
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/01.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/02.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/03.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/04.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/05.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/06.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/07.jpg"> </a> </li>
                                            <li> <a> <img class="product-v-img"
                                                        src="images/pdr/mast-poles/high-mast-poles/08.jpg"> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php include('get-quote.php'); ?>

                            <div class="sidebar-widget banner-widget">
                                <div class="widget-content"
                                    style="background-image:url(images/resource/service-15.jpg)">
                                    <div class="logo"><img src="images/logo-white.jpg" alt=""></div>
                                    <h2>Request Catalogue </h2>
                                    <a href="catalogue.html" class="theme-btn btn-style-seventen">Download Now <span
                                            class="icon flaticon-link"></span></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-single">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="text text-justify">
                                        <p>High mast lighting is preferred over conventional lighting this day.
                                            Especially where large areas are to be illuminated. This system eliminates
                                            the need for numerous lighting columns which, under certain circumstances,
                                            can pose hazardous to movement. This is possible because the high mast
                                            lighting system achieves very large space to height ratios.</p>
                                        <p>High-mast lighting is ideal for industrial or commercial areas, docks,
                                            airports, flyovers, sta􀆟ons, car parks and even some hazardous areas. All
                                            of these require the best possible lighting with minimum interference from
                                            the installation itself combined with ease of maintenance.</p>
                                        <p>Jetcotech high mast is provided with accessories as per customer
                                            requirements. Generally, these include a raising and lowering system,
                                            trailing cable, power tool, feeder pillar for automatic switching operation
                                            of luminaries, lighting finial, and aviation obstruction warning light.</p>

                                        <blockquote>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Code</th>
                                                            <th scope="col">Height</th>
                                                            <th scope="col">Bottom A/F</th>
                                                            <th scope="col">Top</th>
                                                            <th scope="col" colspan="3">Sheet Thickness</th>
                                                            <th scope="col" rowspan="2">Base Plate-PCD</th>
                                                            <th scope="col" colspan="3">Foundation Bolts</th>
                                                            <th scope="col" rowspan="2">Luminary Capacity</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col">T</th>
                                                            <th scope="col">M</th>
                                                            <th scope="col">B</th>
                                                            <th scope="col">Dia</th>
                                                            <th scope="col">Length</th>
                                                            <th scope="col">Qty.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>JEHM1201</td>
                                                            <td>12</td>
                                                            <td>360</td>
                                                            <td>150</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>520x20-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1202</td>
                                                            <td>12</td>
                                                            <td>360</td>
                                                            <td>150</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>520x20-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1203</td>
                                                            <td>12</td>
                                                            <td>310</td>
                                                            <td>105</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>445x20-380</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1204</td>
                                                            <td>12</td>
                                                            <td>360</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>520x20-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1205</td>
                                                            <td>12</td>
                                                            <td>360</td>
                                                            <td>105</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>520x20-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1251</td>
                                                            <td>12.5</td>
                                                            <td>360</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>520x25-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1252</td>
                                                            <td>12.5</td>
                                                            <td>360</td>
                                                            <td>105</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>520x25-445</td>
                                                            <td colspan="3">M24*700X6</td>
                                                            <td>4, 6, 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1601</td>
                                                            <td>16</td>
                                                            <td>360</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>520x25-445</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>4, 6, 8, 10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1602</td>
                                                            <td>16</td>
                                                            <td>410</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>630X25-530</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>4, 6, 8, 10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1603</td>
                                                            <td>16</td>
                                                            <td>410</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td>630X25-530</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>4, 6, 8, 11</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM1604</td>
                                                            <td>16</td>
                                                            <td>460</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td>670x25-580</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>4, 6, 8, 10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2001</td>
                                                            <td>20</td>
                                                            <td>410</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td>630X30-580</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2002</td>
                                                            <td>20</td>
                                                            <td>460</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>670X30-580</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2003</td>
                                                            <td>20</td>
                                                            <td>460</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td>670X30-580</td>
                                                            <td colspan="3">M30*850X8</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2501</td>
                                                            <td>25</td>
                                                            <td>460</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>670X30-580</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2502</td>
                                                            <td>25</td>
                                                            <td>540</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>730X30-650</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM2503</td>
                                                            <td>25</td>
                                                            <td>540</td>
                                                            <td>150</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>730X30-650</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>6, 8, 10, 12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM3001</td>
                                                            <td>30</td>
                                                            <td>540</td>
                                                            <td>150</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>750X30-650</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>8, 10, 12, 16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM3002</td>
                                                            <td>30</td>
                                                            <td>540</td>
                                                            <td>150</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>750X30-650</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>8, 10, 12, 16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM3003</td>
                                                            <td>30</td>
                                                            <td>610</td>
                                                            <td>200</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>840x30-740</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>8, 10, 12, 16, 20</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM3004</td>
                                                            <td>30</td>
                                                            <td>610</td>
                                                            <td>200</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>840x30-740</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>8, 10, 12, 16, 20, 24</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM3005</td>
                                                            <td>30</td>
                                                            <td>610</td>
                                                            <td>200</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>6</td>
                                                            <td>840x30-740</td>
                                                            <td colspan="3">M30*1000X12</td>
                                                            <td>8, 10, 12, 16, 20, 24</td>
                                                        </tr>
                                                        <tr>
                                                            <td>JEHM4001</td>
                                                            <td>40</td>
                                                            <td>740</td>
                                                            <td>200</td>
                                                            <td>4</td>
                                                            <td>5-6</td>
                                                            <td>8</td>
                                                            <td>950x40-850</td>
                                                            <td colspan="3">M30*1000X16</td>
                                                            <td>10, 12, 16, 20, 24</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </blockquote>
                                        <h5><span>Note : </span>Above all sizes are standard, Tailor-made sizes can be
                                            manufactured.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="products-intro-section">
            <div class="auto-container">
                <div class="products-intro-content">

                    <span class="section-tag">
                        HIGH MAST LIGHTING SOLUTIONS
                    </span>

                    <h2>
                        <?= htmlspecialchars($productName); ?>
                        <?= htmlspecialchars($typeName); ?>
                        in <?= htmlspecialchars($cityName); ?>
                    </h2>

                    <p>
                        JETCOTECH is a trusted
                        <?= strtolower(htmlspecialchars($productName)); ?>
                        <?= strtolower(htmlspecialchars($typeName)); ?>
                        in <?= htmlspecialchars($cityName); ?>, offering high mast
                        lighting solutions for applications where large areas need
                        to be illuminated effectively with minimum interference from
                        the lighting installation.
                    </p>

                    <p>
                        High mast lighting is particularly suitable for industrial
                        and commercial areas, docks, airports, flyovers, stations,
                        car parks and other large outdoor spaces where efficient
                        illumination and convenient maintenance are important.
                    </p>

                </div>
            </div>
        </section>
        <section class="products-seo-content">
            <div class="auto-container">

                <div class="products-seo-inner">

                    <span class="section-tag">
                        JETCOTECH HIGH MAST POLES
                    </span>

                    <h2>
                        <?= htmlspecialchars($productName); ?>
                        <?= htmlspecialchars($typeName); ?>
                        in <?= htmlspecialchars($cityName); ?> for Large Area Lighting
                    </h2>

                    <p>
                        Looking for a reliable
                        <?= strtolower(htmlspecialchars($productName)); ?>
                        <?= strtolower(htmlspecialchars($typeName)); ?>
                        in <?= htmlspecialchars($cityName); ?>? JETCOTECH provides
                        high mast lighting solutions for projects requiring
                        illumination across large outdoor areas. High mast systems
                        can reduce the need for numerous conventional lighting
                        columns while providing a practical lighting arrangement.
                    </p>

                    <p>
                        High mast lighting is suitable for industrial and commercial
                        areas, docks, airports, flyovers, stations, car parks and
                        other locations where large spaces require effective
                        illumination with minimum interference from the supporting
                        installation.
                    </p>

                    <p>
                        JETCOTECH high mast poles can be provided with accessories
                        according to customer requirements. These may include a
                        raising and lowering system, trailing cable, power tool,
                        feeder pillar for automatic switching operation of
                        luminaires, lighting finial and aviation obstruction
                        warning light.
                    </p>

                    <p>
                        The appropriate high mast configuration can be selected
                        according to the application, site requirements and project
                        specifications. Customers in
                        <?= htmlspecialchars($cityName); ?>
                        can discuss their requirements with JETCOTECH for a suitable
                        high mast lighting solution.
                    </p>

                    <p>
                        With its focus on engineered lighting solutions, JETCOTECH
                        serves customers looking for
                        <?= strtolower(htmlspecialchars($productName)); ?>
                        in <?= htmlspecialchars($cityName); ?> as well as across
                        India.
                    </p>

                    <p>
                        If you are looking for a
                        <?= strtolower(htmlspecialchars($productName)); ?>
                        <?= strtolower(htmlspecialchars($typeName)); ?>
                        in <?= htmlspecialchars($cityName); ?>, contact JETCOTECH
                        for product specifications, project requirements and
                        quotations.
                    </p>

                </div>

            </div>
        </section>
        <?php require_once('footer.php'); ?>
    </div>
    <?php require_once('script.php'); ?>
</body>

</html>
<script>
    $('.product').addClass(' current ');
    $('.MastPoles').addClass(' current ');
    $('.HighMastPoles').addClass(' current ');
</script>