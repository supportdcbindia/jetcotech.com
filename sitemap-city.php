<?php
// sitemap.php

header("Content-Type: application/xml; charset=utf-8");

$baseUrl = "https://www.jetcotech.com";

function addUrl(&$urls, $loc, $priority = "0.80", $changefreq = "monthly") {
    global $baseUrl;

    $urls[] = [
        "loc" => rtrim($baseUrl, "/") . "/" . ltrim($loc, "/"),
        "lastmod" => date("Y-m-d"),
        "changefreq" => $changefreq,
        "priority" => $priority
    ];
}


/* Product City SEO Pages */
$productPages = [

    "cable-tray",
    "lighting-poles",
    "mast-poles",
    "frp-products",

    "high-mast-poles",
    "flag-mast-poles",
    "stadium-mast-poles",
    "signage-mast-pole",

    "perforated-cable-tray",
    "ladder-cable-tray",
    "wire-mesh-cable-tray",
    "raceway-cable-tray",
    "embossed-perforated-cable-tray",
    "heavy-duty-ladder-cable-tray",

    "polygonal-octagonal-lighting-poles",
    "swaged-lighting-poles",
    "conical-poles",
    "decorative-poles",

    "frp-perforated-cable-tray",
    "frp-ladder-cable-tray",
    "frp-moulded-&-pultruded-gratings"

];

/* Add/Remove Cities As Per Your Targeting */
$cities = [
    // Gujarat
    "ahmedabad",
    "vadodara",
    "surat",
    "rajkot",
    "gandhinagar",
    "jamnagar",
    "bhavnagar",
    "junagadh",
    "anand",
    "nadiad",
    "mehsana",
    "palanpur",
    "morbi",
    "vapi",
    "valsad",
    "navsari",
    "bharuch",
    "ankleshwar",
    "dahej",
    "halol",
    "sanand",
    "changodar",
    "naroda",
    "odhav",
    "vatva",
    "makarpura",
    "hazira",
    "porbandar",
    "gandhidham",
    "mundra",
    "bhuj",

    // Maharashtra
    "mumbai",
    "thane",
    "navi-mumbai",
    "pune",
    "chakan",
    "pimpri-chinchwad",
    "bhosari",
    "talegaon",
    "nashik",
    "aurangabad",
    "chhatrapati-sambhajinagar",
    "nagpur",
    "kolhapur",
    "sangli",
    "satara",
    "solapur",
    "ahmednagar",
    "jalgaon",
    "amravati",
    "akola",
    "latur",
    "ratnagiri",
    "raigad",

    // Delhi NCR
    "delhi",
    "new-delhi",
    "noida",
    "greater-noida",
    "ghaziabad",
    "gurgaon",
    "gurugram",
    "faridabad",
    "bahadurgarh",
    "manesar",

    // Haryana
    "faridabad",
    "gurugram",
    "manesar",
    "sonipat",
    "panipat",
    "karnal",
    "ambala",
    "yamunanagar",
    "hisar",
    "rohtak",
    "rewari",
    "bahadurgarh",
    "kundli",

    // Punjab
    "ludhiana",
    "amritsar",
    "jalandhar",
    "patiala",
    "mohali",
    "bathinda",
    "hoshiarpur",
    "mandi-gobindgarh",
    "khanna",
    "phagwara",

    // Rajasthan
    "jaipur",
    "jodhpur",
    "udaipur",
    "kota",
    "ajmer",
    "alwar",
    "bhiwadi",
    "neemrana",
    "bhilwara",
    "sikar",
    "bharatpur",
    "pali",
    "beawar",

    // Madhya Pradesh
    "indore",
    "bhopal",
    "gwalior",
    "jabalpur",
    "ujjain",
    "dewas",
    "pithampur",
    "ratlam",
    "sagar",
    "satna",
    "rewa",

    // Uttar Pradesh
    "lucknow",
    "kanpur",
    "agra",
    "meerut",
    "varanasi",
    "prayagraj",
    "bareilly",
    "aligarh",
    "moradabad",
    "saharanpur",
    "gorakhpur",
    "mathura",
    "firozabad",
    "ghaziabad",
    "noida",
    "greater-noida",

    // Karnataka
    "bangalore",
    "bengaluru",
    "mysore",
    "mysuru",
    "hubli",
    "dharwad",
    "belgaum",
    "belagavi",
    "mangalore",
    "tumkur",
    "shivamogga",
    "davangere",
    "ballari",

    // Tamil Nadu
    "chennai",
    "coimbatore",
    "madurai",
    "tiruchirappalli",
    "trichy",
    "salem",
    "tiruppur",
    "erode",
    "hosur",
    "vellore",
    "thoothukudi",
    "tuticorin",
    "tirunelveli",
    "kanchipuram",
    "sriperumbudur",

    // Telangana
    "hyderabad",
    "secunderabad",
    "warangal",
    "karimnagar",
    "nizamabad",
    "khammam",
    "patancheru",

    // Andhra Pradesh
    "visakhapatnam",
    "vizag",
    "vijayawada",
    "guntur",
    "nellore",
    "tirupati",
    "kurnool",
    "rajahmundry",
    "kakinada",
    "anantapur",

    // Kerala
    "kochi",
    "ernakulam",
    "thiruvananthapuram",
    "trivandrum",
    "kozhikode",
    "calicut",
    "thrissur",
    "kollam",
    "kannur",
    "palakkad",

    // West Bengal
    "kolkata",
    "howrah",
    "durgapur",
    "asansol",
    "siliguri",
    "kharagpur",
    "haldia",
    "bardhaman",

    // Odisha
    "bhubaneswar",
    "cuttack",
    "rourkela",
    "sambalpur",
    "berhampur",
    "jharsuguda",

    // Chhattisgarh
    "raipur",
    "bhilai",
    "durg",
    "bilaspur",
    "korba",
    "raigarh",

    // Jharkhand
    "ranchi",
    "jamshedpur",
    "dhanbad",
    "bokaro",
    "deoghar",

    // Bihar
    "patna",
    "gaya",
    "muzaffarpur",
    "bhagalpur",
    "darbhanga",

    // Uttarakhand
    "dehradun",
    "haridwar",
    "rudrapur",
    "haldwani",
    "roorkee",
    "kashipur",

    // Himachal Pradesh
    "baddi",
    "solan",
    "parwanoo",
    "una",
    "mandi",
    "shimla",

    // Jammu & Kashmir
    "jammu",
    "srinagar",

    // Goa
    "goa",
    "panaji",
    "margao",
    "vasco-da-gama",

    // Assam & North East
    "guwahati",
    "dibrugarh",
    "silchar",
    "jorhat",
    "imphal",
    "agartala",
    "shillong",
    "aizawl",
    "kohima",
    "itanagar",
    
    "andhra-pradesh",
    "arunachal-pradesh",
    "assam",
    "bihar",
    "chhattisgarh",
    "goa",
    "gujarat",
    "haryana",
    "himachal-pradesh",
    "jharkhand",
    "karnataka",
    "kerala",
    "madhya-pradesh",
    "maharashtra",
    "manipur",
    "meghalaya",
    "mizoram",
    "nagaland",
    "odisha",
    "punjab",
    "rajasthan",
    "sikkim",
    "tamil-nadu",
    "telangana",
    "tripura",
    "uttar-pradesh",
    "uttarakhand",
    "west-bengal",

    // Union Territories
    "andaman-and-nicobar-islands",
    "chandigarh",
    "dadra-and-nagar-haveli-and-daman-and-diu",
    "delhi",
    "jammu-and-kashmir",
    "ladakh",
    "lakshadweep",
    "puducherry"
];

$types = [
    "manufacturer",
    "supplier"
];
$urls =[];
foreach ($productPages as $productSlug) {
    foreach ($types as $type) {
        foreach ($cities as $city) {
            addUrl($urls,  $productSlug."-" . $type . "-in-" . $city.".php", "0.85", "monthly");
        }
    }
}

?>

<?php foreach ($urls as $url) { ?>
    <url>
        <loc><?= htmlspecialchars($url["loc"], ENT_XML1, "UTF-8"); ?></loc>
        <lastmod><?= $url["lastmod"]; ?></lastmod>
        <changefreq><?= $url["changefreq"]; ?></changefreq>
        <priority><?= $url["priority"]; ?></priority>
    </url>
<?php } ?>
