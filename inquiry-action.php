<?php
session_start();
error_reporting(0);
$myfile = fopen("logs.txt", "a+") or die("Unable to open file!");
fwrite($myfile, json_encode($_SERVER));
fwrite($myfile, json_encode($_POST));
$contact_page = "https://www.jetcotech.in/contact-us.html";

$subject_line= "Lead From Jetco Industries Corporate Website";

$from_email = "support@dcbindia.in";

$to_email = "sales@jetcotech.in";

$to_email1 = "marketing@jetcotech.in";

$thanks_page = "https://www.jetcotech.in/thankyou.html";



function send_request($data){

  $curl = curl_init();

  curl_setopt_array($curl, array(

  CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_ENCODING => '',

  CURLOPT_MAXREDIRS => 10,

  CURLOPT_TIMEOUT => 0,

  CURLOPT_FOLLOWLOCATION => true,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_CUSTOMREQUEST => 'POST',

  CURLOPT_POSTFIELDS => $data,

  ));

  $response = json_decode(curl_exec($curl));

  curl_close($curl);

  return $response;

}

$fname= htmlspecialchars(stripslashes(trim($_POST['name'])));

$email= htmlspecialchars(stripslashes(trim($_POST['email'])));

$message = htmlspecialchars(stripslashes(trim($_POST['message'])));

$phone= htmlspecialchars(stripslashes(trim($_POST['number'])));

$country= htmlspecialchars(stripslashes(trim($_POST['city'])));



$allowed_origins = array('https://jetcotech.in/', 'https://www.jetcotech.in/', 'http://jetcotech.in/', 'http://www.jetcotech.in/','https://jetcotech.in', 'https://www.jetcotech.in', 'http://jetcotech.in', 'http://www.jetcotech.in');

if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {

    header('location:'.$contact_page);

}

$curlArr = array_merge($_POST,$_SERVER);

$curlArr['sitename'] = $_SERVER['HTTP_HOST'];

/*$curlArr['type'] = "catalogue";*/

$curlArr['save'] = false;

$response = send_request($curlArr);

if($response->result){

  $curlArr = array_merge($_POST,$_SERVER);

  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

  $curlArr['save'] = true;

  $curlArr['bcoz'] = "API CONDITION FAIL";

  $curlArr['status'] = "FAIL";

  $response = send_request($curlArr);

  header('location:'.$contact_page);

}else{

  try{

  if(isset($fname) && trim($fname)!=='' && isset($email) && trim($email)!=='' && isset($message) && trim($message)!=='' && isset($phone) && trim($phone)!=='' && isset($country) && trim($country)!==''){

      if ($_SESSION["code"]==$_POST['captcha'] && $_POST['captcha'] != "!UNKNOWN_TYPE!" && $_POST['captcha'] != "" && $_SESSION["code"] !="" ){

          if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {

              //echo "ERROR junk email detact";

              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

              $curlArr['save'] = true;

              $curlArr['bcoz'] = "JUNK DETACT";

              $curlArr['status'] = "FAIL";

              $response = send_request($curlArr);

              header('location:'.$contact_page);

              

          } else {

              preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);

              preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);

              $junk_word = "#\b(DarrellRomLL|MADARCHOD|fuck|Fuck|Hey|Body|Revolution|Medico|Postura|Posture|Corrector|50%|OFF|FREE|Worldwide|Shipping|Shipping|medicopostura|online|Thank|CAREDOGBEST|Website|Re-designing|SEO|optimization|promotion|marketing|Marketing|Search|Optimization|advertisements|advertisement|advertising|adversement|Advertisement|graphic|design|traffic|advertisers|advertise|Advertising|campaigns|Domain|Domains|cheap|dollar|poker|Websites|redesigning|WordPress|newspapers|Eric|sunglasses|Girls|masturbating|porn|Nude|Sex|Naked|Women|website|fantastic|sorry|Google|doc|ADELIAPUTRI|blog|Petr|Velkov|Moscow|Cryptaxbot|http|https|errors|Joe|Celine|Bhoshdiwalo|Bhoshdi|Bhoshd|Bhosh|Madarchod|Madar|madarchod|madar|bhoshdiwalo|bhoshdi|bhoshd|bhosh)\b#";

              preg_match_all($junk_word, $message, $matches_words);

              //print_r($msg_match_email[0]);

              //echo count($msg_match_email[0]);exit;

              if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {

                  //echo "ERROR junk msg";

                  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

                  $curlArr['save'] = true;

                  $curlArr['bcoz'] = "JUNK DETACT";

                  $curlArr['status'] = "FAIL";

                  $response = send_request($curlArr);

                  header('location:'.$contact_page);

              } else {

                  require_once ('phpmailer/class.phpmailer.php');

                  $message_body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

  <head>

    <meta http-equiv="content-type" content="text/html; charset=windows-1250">

    <meta name="generator" content="PSPad editor, www.pspad.com">

    <title></title>

    <style type="text/css">span.go{display:none} .go{display:none}</style>

  </head>

  <body>

    <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">

      <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">

        <tbody>

          <tr>

            <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>

          </tr>

          

          <tr>

            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>

            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$fname.'</b></td>

          </tr>

          

          

          <tr>

            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>

            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$email.'</b></td>

          </tr>

          

          <tr>

            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>

            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$phone.'</b></td>

          </tr>

          

          <tr>

            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>

            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$country.'</b></td>

          </tr>

          

          

          <tr>

            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>

            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>'.$message.'</b></td>

          </tr>

          <tr>

          </tr>

        </tbody>

      </table>

    </div>

  </body>

</html>

';

                  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

                  $mail->IsSMTP(); // telling the class to use SMTP

                  try {
                      
                   $url = "https://jetcotech.teknovatecrm.in/lead?" . http_build_query([
    'name' => $fname,
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
//exit;
//                   $curl = curl_init();
// $resArr = array();
// $resArr["name"] = $fname;
// $resArr["phone"] = $phone;
// $resArr["email" ]= $email;
// $resArr["city" ]= $country;
// $resArr["requirement"] = $message;
// $resArr["source"] = 10;
// $resArr["company"] = 1;
// curl_setopt_array($curl, array(
// CURLOPT_URL => ' https://jetcotech.teknovatecrm.in/en_IN/lead',
// CURLOPT_RETURNTRANSFER => true, 
// CURLOPT_HTTPHEADER => array(
//             "Content-Type: application/json",
//         ),
// CURLOPT_ENCODING => '',
// CURLOPT_MAXREDIRS => 10,
// CURLOPT_TIMEOUT => 0,
// CURLOPT_FOLLOWLOCATION => true,
// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// CURLOPT_CUSTOMREQUEST => 'POST',
// CURLOPT_POSTFIELDS => json_encode($resArr),
// ));
// $res = curl_exec($curl);

// $response = json_decode(curl_exec($curl));
// curl_close($curl);   
                      

                    $mail->Host= "mail.smtp2go.com"; // SMTP server

                    $mail->SMTPDebug= 0;                     // enables SMTP debug information (for testing)

                    $emailArr = array("dcbindia@dcbindia.in","dcb@dcbindia.in");

                    if(in_array($email,$emailArr)){

                        $mail->AddAddress('dcbrainsinquiry@gmail.com', $subject_line);

                        $mail->SetFrom($from_email, $subject_line);

                        $mail->addReplyTo($email, $subject_line);

                        

                    }else{

                        $mail->AddAddress($to_email, $subject_line);

                        $mail->SetFrom($from_email, $subject_line);

                        $mail->AddCC($to_email1, $subject_line);

                        $mail->AddBCC('dcbrainsinquiry@gmail.com', $subject_line);

                        $mail->addReplyTo($email, $subject_line);

                    }



                  //   $mail->SMTPOptions = array(
                  //     'ssl' => array(
                  //         'verify_peer' => false,
                  //         'verify_peer_name' => false,
                  //         'allow_self_signed' => true
                  //     )
                  // );

                    // $mail->Port = 8025;
                    $mail->Port = 80;

                    $mail->Subject = $subject_line;

                    $mail->SMTPAuth = true;

                    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail

                    $mail->Username = "jetcotech";  

                    $mail->Password = "1X6JUN1HS5rTixGe"; 

                    $mail->MsgHTML($message_body);

                    //$mail->AddAttachment('images/phpmailer.gif');      // attachment

                   // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment

                    $mail->Send();

                    $cookie_name = "inquierymodel";

                    $cookie_value = "inquiryset";

                    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day

                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

                    $curlArr['save'] = true;

                    $curlArr['bcoz'] = "MAIL SEND SUCCUSS";

                    $curlArr['status'] = "SUCCESS";

                    $response = send_request($curlArr);

                    header('location:'.$thanks_page);

                    //echo "Message Sent OK<p></p>\n";

                  }

                  catch(phpmailerException $e) {

                      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

                      $curlArr['save'] = true;

                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";

                      $curlArr['Exception'] = $e->errorMessage();

                      $curlArr['status'] = "FAIL";

                      $response = send_request($curlArr);

                      echo $e->errorMessage(); //Pretty error messages from PHPMailer

                      

                  }

                  catch(Exception $e) {

                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

                      $curlArr['save'] = true;

                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";

                      $curlArr['Exception'] = $e->getMessage();

                      $curlArr['status'] = "FAIL";

                      $response = send_request($curlArr);

                      echo $e->getMessage(); //Boring error messages from anything else!

                      

                  }

              }

          }

      } else { 

        $curlArr = array_merge($_POST,$_SERVER);

        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

        $curlArr['save'] = true;

        $curlArr['bcoz'] = "CAPTCHA MISMATCH";

        $curlArr['status'] = "FAIL";

        $response = send_request($curlArr);

        ?>

<script>

if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {

    window.location.href = "<?=$contact_page;?>";

} else {

    window.location.href = "<?=$contact_page;?>";

}

</script>

<?php

      }

  } else { 

    $curlArr = array_merge($_POST,$_SERVER);

    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

    $curlArr['save'] = true;

    $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";

    $curlArr['status'] = "FAIL";

    $response = send_request($curlArr);

    

    ?>

<script>

if (confirm("Please Enter All Details Correct..")) {

    window.location.href = "<?=$contact_page;?>";

} else {

    window.location.href = "<?=$contact_page;?>";

}

</script>



<?php

  }

 }catch(Exception $e) {

      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];

      $curlArr['save'] = true;

      $curlArr['bcoz'] = "PHPMAILER NOT WORKING OR 500 INTERNAL ERROR";

      $curlArr['Exception'] = $e->getMessage();

      $curlArr['status'] = "FAIL";

      $response = send_request($curlArr);

      //echo $e->getMessage(); //Boring error messages from anything else!

      

  }

}

?>