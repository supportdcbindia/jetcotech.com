<?php

// ================== ERROR + HEADERS ==================
error_reporting(0);
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type, Authorization");

// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     http_response_code(200);
//     exit();
// }

header("Content-Type: application/json");

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// echo "<pre>"; print_r($_POST);

// ================== LOG ==================
$myfile = fopen("logs.txt", "a+") or die("Unable to open file!");
fwrite($myfile, json_encode($_SERVER));
fwrite($myfile, json_encode($_POST));

// ================== API SPAM CHECK ==================
function send_request($data)
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}

// ================== INPUT (SECOND CODE FIELDS) ==================
$name     = htmlspecialchars(trim($_POST['name']));
$email    = htmlspecialchars(trim($_POST['email']));
$message  = htmlspecialchars(trim($_POST['requirement']));
$city     = htmlspecialchars(trim($_POST['city']));
$phone    = htmlspecialchars(trim($_POST['phone']));
$company     = htmlspecialchars(trim($_POST['company']));
$country     = htmlspecialchars(trim($_POST['country']));

$logData = [
  "time"     => date("Y-m-d H:i:s"),
  "ip"       => $_SERVER['REMOTE_ADDR'],
  "name"     => $name,
  "email"    => $email,
  "phone"    => $phone,
  "company_name"  => $company,
  "city"     => $city,
  "message"  => $message,
  "user_agent" => $_SERVER['HTTP_USER_AGENT']
];

$logFile = fopen("inquiry-log.txt", "a+");
fwrite($logFile, json_encode($logData) . PHP_EOL);
fclose($logFile);

// ================== API CHECK ==================
$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['save'] = false;

$response = send_request($curlArr);

if ($response->result) {
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API FAIL";
  $curlArr['status'] = "FAIL";
  send_request($curlArr);

  echo json_encode(["success" => false]);
  exit;
}

// ================== REQUIRED VALIDATION ==================
if (
  empty($name) ||
  empty($email) ||
  empty($phone)
) {
  echo json_encode(["success" => false]);
  exit;
}

// ================== EMAIL VALIDATION ==================
if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
  echo json_encode(["success" => false]);
  exit;
}

// ================== JUNK CHECK ==================
preg_match_all('#\bhttps?://#', $message, $links);
preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $emails);

if (count($links[0]) > 0 || count($emails[0]) > 0) {
  echo json_encode(["success" => false]);
  exit;
}


$form_type = htmlspecialchars(trim($_POST['form_type']));

$subject = "Lead From Jetco Industries Cable Tray Manufacturer Landing Page";

  $message_body = '
    <html>
    <body>
    <div style="font-family:arial;font-size:12px;border:10px solid #ccc;width:600px;padding:20px;margin:auto;">
    <table border="1" cellpadding="5" style="width:100%;border-collapse:collapse;">
    <tr><td colspan="2"><b>Enquiry Details</b></td></tr>

    <tr><td>Name:</td><td><b>' . $name . '</b></td></tr>
    <tr><td>Company Name:</td><td><b>' . $company . '</b></td></tr>
    <tr><td>Email:</td><td><b>' . $email . '</b></td></tr>
    <tr><td>Mobile:</td><td><b>' . $phone . '</b></td></tr>
    <tr><td>City:</td><td><b>' . $city . '</b></td></tr>
    <tr><td>Country :</td><td><b>' . $country . '</b></td></tr>
    <tr><td>Message:</td><td><b>' . $message . '</b></td></tr>

    </table>
    </div>
    </body>
    </html>';

// ================== SMTP2GO ==================
$apiKey = "api-336F1C35E5E7462CBB33B544EA1D2B7F";

$emailArr = array("dcbindia@dcbindia.in", "dcb@dcbindia.in");

$toEmails = [];
$bccEmails = [];

if (in_array($email, $emailArr)) {
  $toEmails[] = "dcbrainsinquiry@gmail.com";
} else {
  $toEmails[] = "sales@jetcotech.in";
  $bccEmails[] = "marketing@jetcotech.in";
}

$data = [
  "api_key"   => $apiKey,
  "to"        => $toEmails,
  "sender"    => "support@jetcotech.com",
  "subject"   => $subject,
  "html_body" => $message_body,
  "text_body" => strip_tags($message_body),
  "reply_to"  => $email
];

if (!empty($bccEmails)) {
  $data["bcc"] = $bccEmails;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.smtp2go.com/v3/email/send");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$result = json_decode($response, true);

$url = "https://jetcotech.teknovatecrm.in/lead?" . http_build_query([
  'name' => $name,
  'mobile' => $phone,
  'email' => $email,
  'brancharea' => $message,
  'source' => '10',
  'company' => '1'
]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error: ' . curl_error($ch);
// } else {
//     echo 'Response: ' . $response;
// }

curl_close($ch);

// ================== RESPONSE ==================
if (isset($result['data']['succeeded']) && $result['data']['succeeded'] > 0) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false]);
}
