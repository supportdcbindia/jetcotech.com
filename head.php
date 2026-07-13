<meta charset="utf-8">
<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);

/*?>
<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords"
    content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<?php */?>
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

<link href="css/bootstrap.css" rel="stylesheet">
<link href="js/slider/ubislider.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/model-custom.css" rel="stylesheet">
<link href="css/sidebar-btn.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1006297605673775');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1006297605673775&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
