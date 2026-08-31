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

    $type = strtolower(trim($_GET['type'] ?? 'manufacturer'));
    $city = ucwords(str_replace('-', ' ', trim($_GET['city'] ?? 'India')));

    /* Product name can come dynamically from your existing product/category variable */
    $productName = $productName ?? 'Industrial Products';

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
   City + Type SEO URL Detection
   Example:
   /cable-tray-manufacturer-in-ahmedabad.php
   /high-mast-pole-supplier-in-mumbai.php
--------------------------------------------- */

    $isCityTypePage = false;
    $typeSlug = "";
    $typeName = "";
    $citySlug = "";
    $cityName = "";
    $productSlug = "";
    $productName = "";

    $pageSlug = preg_replace('/\.(php|html)$/i', '', $currentPage);

    if (preg_match('/^(.+)-(manufacturer|supplier|exporter)-in-([a-zA-Z0-9-]+)$/i', $pageSlug, $matches)) {
        $isCityTypePage = true;

        $productSlug = strtolower($matches[1]);
        $typeSlug = strtolower($matches[2]);
        $citySlug = strtolower($matches[3]);

        $productName = ucwords(str_replace('-', ' ', $productSlug));
        $typeName = ucwords(str_replace('-', ' ', $typeSlug));
        $cityName = ucwords(str_replace('-', ' ', $citySlug));
    }

    /* ---------------------------------------------
   Page Meta Data
--------------------------------------------- */

    $pageMeta = [

        "index.php" => [
            "title" => "Jetcotech | Cable Tray, Lighting Pole & High Mast Pole Manufacturer",
            "description" => "Jetcotech is a trusted manufacturer, supplier and exporter of cable trays, lighting poles, high mast poles, earthing solutions, solar structures and industrial electrical infrastructure products.",
            "keywords" => "Cable Tray Manufacturer, Lighting Pole Manufacturer, High Mast Pole Manufacturer, Earthing Solutions, Solar Structure Manufacturer, Jetcotech",
            "subject" => "Cable Tray, Lighting Pole and Electrical Infrastructure Manufacturer",
            "type" => "website"
        ],

        "about-us.html" => [
            "title" => "About Jetcotech | Cable Tray & Lighting Pole Manufacturer",
            "description" => "Know more about Jetcotech, a manufacturer, supplier and exporter of cable trays, lighting poles, high mast poles, earthing solutions and solar structures.",
            "keywords" => "About Jetcotech, Cable Tray Manufacturer, Lighting Pole Manufacturer, High Mast Pole Manufacturer, Electrical Infrastructure Manufacturer",
            "subject" => "About Cable Tray and Lighting Pole Manufacturer",
            "type" => "website"
        ],

        "about-us.php" => [
            "title" => "About Jetcotech | Cable Tray & Lighting Pole Manufacturer",
            "description" => "Know more about Jetcotech, a manufacturer, supplier and exporter of cable trays, lighting poles, high mast poles, earthing solutions and solar structures.",
            "keywords" => "About Jetcotech, Cable Tray Manufacturer, Lighting Pole Manufacturer, High Mast Pole Manufacturer, Electrical Infrastructure Manufacturer",
            "subject" => "About Cable Tray and Lighting Pole Manufacturer",
            "type" => "website"
        ],

        "cable-tray.php" => [
            "title" => "Cable Tray Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech is a leading Cable Tray Manufacturer and Supplier in India offering perforated cable tray, ladder cable tray, wire mesh cable tray, raceway cable tray and cable tray accessories.",
            "keywords" => "Cable Tray Manufacturer, Cable Tray Supplier, Perforated Cable Tray, Ladder Cable Tray, Wire Mesh Cable Tray, Raceway Cable Tray, Cable Tray Accessories",
            "subject" => "Cable Tray Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "perforated-cable-tray.php" => [
            "title" => "Perforated Cable Tray Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech manufactures Perforated Cable Trays with durable construction, corrosion resistance and reliable support for industrial, commercial and infrastructure cable management applications.",
            "keywords" => "Perforated Cable Tray Manufacturer, Perforated Cable Tray Supplier, GI Perforated Cable Tray, MS Cable Tray, Industrial Cable Tray",
            "subject" => "Perforated Cable Tray Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "ladder-cable-tray.php" => [
            "title" => "Ladder Cable Tray Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech offers Ladder Cable Tray systems for heavy cable support, power cables, control cables and industrial cable management applications with strong design and easy installation.",
            "keywords" => "Ladder Cable Tray Manufacturer, Ladder Cable Tray Supplier, Heavy Duty Ladder Cable Tray, Industrial Ladder Cable Tray, Cable Tray System",
            "subject" => "Ladder Cable Tray Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "wire-mesh-cable-tray.php" => [
            "title" => "Wire Mesh Cable Tray Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech manufactures Wire Mesh Cable Trays for flexible, ventilated and lightweight cable management solutions used in commercial, industrial and electrical projects.",
            "keywords" => "Wire Mesh Cable Tray Manufacturer, Wire Mesh Cable Tray Supplier, Basket Cable Tray, Cable Management Tray, Industrial Cable Tray",
            "subject" => "Wire Mesh Cable Tray Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "raceway-cable-tray.php" => [
            "title" => "Raceway Cable Tray Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech provides Raceway Cable Tray and cable trunking systems for safe routing, protection and organization of electrical wiring in industrial and commercial buildings.",
            "keywords" => "Raceway Cable Tray Manufacturer, Raceway Cable Tray Supplier, Cable Trunking System, Raceway Cable Tray, Electrical Raceway",
            "subject" => "Raceway Cable Tray Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "embossed-perforated-cable-tray.php" => [
            "title" => "Embossed Perforated Cable Tray Manufacturer in India | Jetcotech",
            "description" => "Jetcotech manufactures Embossed Perforated Cable Trays for strong, reliable and well-ventilated cable management in industrial and infrastructure projects.",
            "keywords" => "Embossed Perforated Cable Tray Manufacturer, Embossed Cable Tray, Perforated Cable Tray Supplier, Heavy Duty Cable Tray",
            "subject" => "Embossed Perforated Cable Tray Manufacturer in India",
            "type" => "product"
        ],

        "heavy-duty-ladder-cable-tray.php" => [
            "title" => "Heavy Duty Ladder Cable Tray Manufacturer in India | Jetcotech",
            "description" => "Jetcotech offers Heavy Duty Ladder Cable Trays designed for high strength, heavy cable load, industrial power distribution and large infrastructure cable routing applications.",
            "keywords" => "Heavy Duty Ladder Cable Tray Manufacturer, Heavy Duty Cable Tray, Industrial Ladder Cable Tray, Cable Tray Manufacturer India",
            "subject" => "Heavy Duty Ladder Cable Tray Manufacturer in India",
            "type" => "product"
        ],

        "lighting-poles.php" => [
            "title" => "Lighting Pole Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech is a trusted Lighting Pole Manufacturer in India offering polygonal lighting poles, octagonal lighting poles, conical poles, signage mast poles and stadium mast poles.",
            "keywords" => "Lighting Pole Manufacturer, Lighting Pole Supplier, Octagonal Pole Manufacturer, Polygonal Pole, Conical Pole, Street Light Pole Manufacturer",
            "subject" => "Lighting Pole Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "polygonal-octagonal-lighting-poles.php" => [
            "title" => "Polygonal & Octagonal Lighting Pole Manufacturer | Jetcotech",
            "description" => "Jetcotech manufactures Polygonal and Octagonal Lighting Poles for street lighting, industrial lighting, commercial lighting and infrastructure lighting projects.",
            "keywords" => "Polygonal Lighting Pole Manufacturer, Octagonal Lighting Pole Manufacturer, Street Light Pole Manufacturer, Lighting Pole Supplier",
            "subject" => "Polygonal and Octagonal Lighting Pole Manufacturer",
            "type" => "product"
        ],

        "conical-poles.php" => [
            "title" => "Conical Pole Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech manufactures Conical Poles for lighting, street lighting, industrial lighting and outdoor infrastructure applications with durable structure and quality finish.",
            "keywords" => "Conical Pole Manufacturer, Conical Pole Supplier, Street Light Pole, Lighting Pole Manufacturer, GI Conical Pole",
            "subject" => "Conical Pole Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "high-mast-poles.php" => [
            "title" => "High Mast Pole Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech is a reliable High Mast Pole Manufacturer and Supplier in India offering high mast lighting pole solutions for highways, yards, ports, industrial areas and large outdoor spaces.",
            "keywords" => "High Mast Pole Manufacturer, High Mast Pole Supplier, High Mast Lighting Pole, High Mast Light Pole, Industrial Lighting Pole",
            "subject" => "High Mast Pole Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "signage-mast-pole.html" => [
            "title" => "Signage Mast Pole Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech manufactures Signage Mast Poles for outdoor advertising, highway signage, commercial signage and infrastructure signage applications.",
            "keywords" => "Signage Mast Pole Manufacturer, Signage Pole Supplier, Outdoor Signage Pole, Highway Signage Pole, Mast Pole Manufacturer",
            "subject" => "Signage Mast Pole Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "stadium-mast-poles.php" => [
            "title" => "Stadium Mast Pole Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech offers Stadium Mast Poles for stadium lighting, sports ground lighting, large area lighting and outdoor lighting infrastructure projects.",
            "keywords" => "Stadium Mast Pole Manufacturer, Stadium Lighting Pole, High Mast Stadium Pole, Sports Lighting Pole, Mast Pole Manufacturer",
            "subject" => "Stadium Mast Pole Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "earthing-solutions.php" => [
            "title" => "Earthing Solution Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech provides Earthing Solutions for electrical safety, industrial projects, solar projects, infrastructure and power distribution applications.",
            "keywords" => "Earthing Solution Manufacturer, Earthing System Supplier, Electrical Earthing, Industrial Earthing, Earthing Material Manufacturer",
            "subject" => "Earthing Solution Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "solar-structures.php" => [
            "title" => "Solar Structure Manufacturer & Supplier in India | Jetcotech",
            "description" => "Jetcotech manufactures Solar Structures for solar panel mounting, rooftop solar projects, ground mounted solar plants and industrial solar installations.",
            "keywords" => "Solar Structure Manufacturer, Solar Mounting Structure, Solar Panel Structure, Solar Structure Supplier, Solar Support Structure",
            "subject" => "Solar Structure Manufacturer & Supplier in India",
            "type" => "product"
        ],

        "frp-moulded-pultruded.php" => [
            "title" => "FRP Moulded & Pultruded Products Manufacturer | Jetcotech",
            "description" => "Jetcotech supplies FRP moulded and pultruded products for industrial, electrical, infrastructure and corrosion resistant applications.",
            "keywords" => "FRP Moulded Products, FRP Pultruded Products, FRP Product Manufacturer, Industrial FRP Products, FRP Supplier",
            "subject" => "FRP Moulded and Pultruded Products Manufacturer",
            "type" => "product"
        ],

        "become-a-dealer.html" => [
            "title" => "Contact Jetcotech | Cable Tray & Lighting Pole Manufacturer",
            "description" => "Contact Jetcotech for cable trays, lighting poles, high mast poles, earthing solutions, solar structures and electrical infrastructure product requirements.",
            "keywords" => "Contact Jetcotech, Cable Tray Manufacturer Contact, Lighting Pole Manufacturer Contact, High Mast Pole Supplier, Become Dealer Jetcotech",
            "subject" => "Contact Cable Tray and Lighting Pole Manufacturer",
            "type" => "website"
        ],

        "contact-us.php" => [
            "title" => "Contact Jetcotech | Cable Tray & Lighting Pole Manufacturer",
            "description" => "Contact Jetcotech for cable trays, lighting poles, high mast poles, earthing solutions, solar structures and electrical infrastructure product requirements.",
            "keywords" => "Contact Jetcotech, Cable Tray Manufacturer Contact, Lighting Pole Manufacturer Contact, High Mast Pole Supplier",
            "subject" => "Contact Cable Tray and Lighting Pole Manufacturer",
            "type" => "website"
        ]
    ];

    /* ---------------------------------------------
   Dynamic City + Type Meta
--------------------------------------------- */

    if ($isCityTypePage) {

        $pageTitle = $productName . " " . $typeName . " in " . $cityName . " | " . $companyName;

        $pageDescription = $companyName . " is a trusted " . $productName . " " . $typeName . " in " . $cityName . " offering high quality cable trays, lighting poles, high mast poles, earthing solutions, solar structures and industrial electrical infrastructure products.";

        $pageKeywords = $productName . " " . $typeName . " in " . $cityName . ", " .
            "Best " . $productName . " " . $typeName . " in " . $cityName . ", " .
            "Top " . $productName . " " . $typeName . " in " . $cityName . ", " .
            $productName . " Manufacturer in " . $cityName . ", " .
            $productName . " Supplier in " . $cityName . ", " .
            $productName . " Exporter in " . $cityName . ", " .
            $productName . " Price in " . $cityName;

        $pageSubject = $productName . " " . $typeName . " in " . $cityName;
        $pageType = "product";
    } else {

        /* ---------------------------------------------
       Fallback Meta For Unknown Pages
    --------------------------------------------- */

        if (!isset($pageMeta[$currentPage])) {

            $slug = preg_replace('/\.(php|html)$/i', '', $currentPage);
            $pageName = ucwords(str_replace("-", " ", $slug));

            $pageMeta[$currentPage] = [
                "title" => $pageName . " Manufacturer & Supplier in India | " . $companyName,
                "description" => $companyName . " is a trusted manufacturer, supplier and exporter of " . $pageName . ", cable trays, lighting poles, high mast poles, earthing solutions and solar structures.",
                "keywords" => $pageName . " Manufacturer, " . $pageName . " Supplier, " . $pageName . " Exporter, Cable Tray Manufacturer, Lighting Pole Manufacturer, High Mast Pole Manufacturer, " . $companyName,
                "subject" => $pageName . " Manufacturer & Supplier in India",
                "type" => "product"
            ];
        }

        $meta = $pageMeta[$currentPage];

        $pageTitle = $meta['title'];
        $pageDescription = $meta['description'];
        $pageKeywords = $meta['keywords'];
        $pageSubject = $meta['subject'];
        $pageType = $meta['type'];
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
        <section class="page-title" style="background-image:url(/images/background/perforatted-cable-tray-bg.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1>Industrial Cable Management & Lighting Solutions</h1>
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

                    <!-- =========================
                 Cable Tray
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/cable-tray/perforated-cable-tray/01.jpg"
                                    alt="Cable Tray">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="cable-tray.php">Cable Tray</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="cable-tray.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 Lighting Poles
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/lighting-poles/polygonal-octagonal-lighting-poles/01.jpg"
                                    alt="Lighting Poles">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="lighting-poles.php">Lighting Poles</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="lighting-poles.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 Mast Poles
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/mast-poles/stadium-mast-poles/01.jpg"
                                    alt="Mast Poles">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="mast-poles.php">Mast Poles</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="mast-poles.php"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- =========================
                 FRP Products
            ========================== -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="case-study-single-box">

                            <div class="case-study-thumb">
                                <img src="/images/pdr/frp-products/frp-perforated-cable-tray/frp-perforated-cable-tray.webp"
                                    alt="FRP Products">
                            </div>

                            <div class="case-study-content">

                                <div class="case-study-title">
                                    <h3>
                                        <a href="frp-products.html">FRP Products</a>
                                    </h3>
                                </div>

                                <div class="product-card-actions">

                                    <a href="frp-products.html"
                                        class="product-view-btn">
                                        View Details
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                    <a href="javascript:;"
                                        class="product-quote-btn click1">
                                        Get a Quote
                                        <i class="fa fa-envelope"></i>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="products-intro-section">
            <div class="auto-container">
                <div class="products-intro-content">

                    <span class="section-tag">
                        ENGINEERED FOR PERFORMANCE
                    </span>

                    <h2>
                        <?= htmlspecialchars($productName); ?>
                        <?= htmlspecialchars($typeLabel); ?>
                        in <?= htmlspecialchars($city); ?>
                    </h2>

                    <p>
                        JETCOTECH is a trusted
                        <?= htmlspecialchars($type); ?>
                        of <?= htmlspecialchars($productName); ?>
                        in <?= htmlspecialchars($city); ?>, offering engineered solutions
                        for cable management, industrial lighting and specialized
                        infrastructure requirements.
                    </p>

                    <p>
                        Our range of
                        <?= htmlspecialchars($productName); ?>
                        is designed for diverse industrial and commercial applications,
                        with a focus on dependable manufacturing, consistent quality
                        and application-specific requirements.
                    </p>

                </div>
            </div>
        </section>


        <section class="products-seo-content">
            <div class="auto-container">

                <div class="products-seo-inner">

                    <span class="section-tag">
                        WHY JETCOTECH
                    </span>

                    <h2>
                        <?= htmlspecialchars($productName); ?>
                        <?= htmlspecialchars($typeLabel); ?>
                        in <?= htmlspecialchars($city); ?> for Industrial Applications
                    </h2>

                    <p>
                        JETCOTECH is a leading
                        <?= htmlspecialchars($type); ?>
                        of <?= htmlspecialchars($productName); ?>
                        in <?= htmlspecialchars($city); ?>. Our product range is developed
                        to meet different cable management, lighting and infrastructure
                        requirements across industrial and commercial projects.
                    </p>

                    <p>
                        With a focus on dependable manufacturing, product quality and
                        application-oriented engineering, JETCOTECH provides
                        <?= htmlspecialchars($productName); ?>
                        solutions for projects requiring reliable industrial
                        infrastructure. Customers in <?= htmlspecialchars($city); ?>
                        can choose from standard as well as application-specific
                        product requirements.
                    </p>

                    <p>
                        Explore our range of
                        <?= htmlspecialchars($productName); ?>
                        in <?= htmlspecialchars($city); ?> and find a suitable solution
                        for your project requirements.
                    </p>

                </div>

            </div>
        </section>
        <footer class="main-footer footer footer-modern">

            <!-- Top CTA -->
            <div class="footer-top-cta">
                <div class="auto-container">
                    <div class="footer-top-cta-inner">
                        <div>
                            <span>LET'S BUILD SOMETHING RELIABLE</span>
                            <h3>Looking for Lighting Poles, Cable Trays or Custom Engineering Solutions?</h3>
                        </div>

                        <a href="contact-us.html" class="footer-cta-btn">
                            Get In Touch
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Main Footer -->
            <div class="upper-box">
                <div class="auto-container">

                    <div class="row">

                        <!-- About -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget about-widget">

                                <h4 class="widget_title">About JETCOTECH</h4>

                                <div class="text">
                                    JETCOTECH is a Manufacturer, Supplier &amp; Exporter
                                    with a strong presence in Cable Trays, Lighting Poles,
                                    High Mast Poles, Earthing Solutions, Solar Structures
                                    &amp; Hot Dip Galvanizing.
                                </div>

                                <div class="footer-social-title">
                                    Follow Us
                                </div>

                                <ul class="social-links">
                                    <li>
                                        <a href="https://www.facebook.com/JetcotechEngineeringLLP">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/jetcotechengineering/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.linkedin.com/company/jetcotech-engineering">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.youtube.com/@jetcotechengineering2226">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>


                        <!-- Quick Links -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget links-widget">

                                <h4 class="widget_title">Quick Links</h4>

                                <div class="widget-content">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="product.php">Products</a></li>
                                                <li><a href="catalogue.html">Catalogue</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li><a href="clients.html">Clients</a></li>
                                                <li><a href="facility.html">Facilities</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Contact -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="widget">

                                <h4 class="widget_title">Get In Touch</h4>

                                <ul class="footer-contact-list">

                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>

                                        <div>
                                            <span>Address</span>
                                            <p>
                                                Opp. Old Pipli Bus-Station,<br>
                                                Jetpar Road, Morbi-363642,<br>
                                                Gujarat, India
                                            </p>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <div>
                                            <span>Call Us</span>
                                            <p>
                                                <a href="tel:+917575007163">+91 75750 07163</a><br>
                                                <a href="tel:+916351897900">+91 63518 97900</a>
                                            </p>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>

                                        <div>
                                            <span>Email Us</span>
                                            <p>
                                                <a href="mailto:sales@jetcotech.in">sales@jetcotech.in</a><br>
                                                <a href="mailto:marketing@jetcotech.in">marketing@jetcotech.in</a><br>
                                                <a href="mailto:exports@jetcotech.in">exports@jetcotech.in</a>
                                            </p>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Bottom Footer -->
            <div class="footer-bottom">
                <div class="auto-container">

                    <div class="footer-bottom-inner">

                        <p>
                            © <?php echo date('Y'); ?> JETCOTECH Engineering. All Rights Reserved.
                        </p>

                        <div class="footer-bottom-links">
                            <a href="privacy-policy.html">Privacy Policy</a>
                            <a href="terms-condition.html">Terms &amp; Conditions</a>
                        </div>

                    </div>

                </div>
            </div>

        </footer>

        <div id="help-button">
            <a href="https://api.whatsapp.com/send?phone=917575007163" target="_blank">
                <img src="/images/whatsup.png" class="img-responsive mhide">
                <img src="/images/whatsup.png" class="dhide">
            </a>
        </div>
        <style>
            #help-button {
                position: fixed;
                width: auto;
                bottom: 4px;
                right: 25px;
                cursor: pointer;
                z-index: 1000;
            }

            .mhide {
                width: 60px;
            }

            @media only screen and (max-width: 667px) {
                .mhide {
                    display: block;
                }

                .dhide {
                    display: none;
                    width: 50px !important;
                    float: left;


                }

                #help-button {
                    left: 20px;
                }

                .mhide {
                    display: none !important;
                }

                .dhide {
                    display: block !important;
                }
            }

            .dhide {
                display: none;
            }
        </style>
    </div>
    <script src="/js/jquery.js"></script>
    <script src="/js/slider/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>


    <script src="/js/sticky.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/main.js"></script>
    <link href="/js/slider/ubislider.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/js/slider/jqueryElevateZoom.js"></script>
    <script src="/js/slider/ubislider.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/form-buzz.js"></script>
    <script type="text/javascript">
        $('#pdrzoom').ubislider({
            arrowsToggle: true,
            type: 'ecommerce',
            hideArrows: true,
            autoSlideOnLastClick: true,
            modalOnClick: false,
            position: 'vertical',
            onTopImageChange: function() {
                $('#imageSlider3 img').elevateZoom();
            }
        });


        $(document).ready(function() {

            var total_li_node = $('.ubislider-inner li').length;
            var current_li_node = 0;
            var slider_height = -85;

            thumbAutoSlide(current_li_node);

            function thumbAutoSlide(current_li_node) {

                var h = (slider_height * current_li_node) + 'px';
                //gal1 top -85 set karvu
                $('#gal1').css('top', h);
                current_li_node++;

                if (current_li_node == total_li_node) {
                    current_li_node = 0;
                }

                setTimeout(function() {
                    thumbAutoSlide(current_li_node);
                }, 2000);
            }

        });
    </script>


    <script>
        function productfunc() {
            window.location.href = 'product.html';
        }
    </script>

    <script>
        function cablefunc() {
            window.location.href = 'cable-tray.html';
        }
    </script>
    <script>
        function lightingfun() {
            window.location.href = 'lighting-poles.html';
        }
    </script>
    <script>
        function mastfun() {
            window.location.href = 'mast-poles.html';
        }
    </script>
    <script>
        function frpfun() {
            window.location.href = 'frp-products.html';
        }
    </script>

</body>

</html>
<script>
    jQuery('.product').addClass(' current ');
</script>