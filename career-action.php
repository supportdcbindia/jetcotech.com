<?php
session_start();
error_reporting(0);
function send_request($data) {
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

$fname = htmlspecialchars(stripslashes(trim($_POST['name'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$phone = htmlspecialchars(stripslashes(trim($_POST['number'])));
$department = htmlspecialchars(stripslashes(trim($_POST['department'])));
$post = htmlspecialchars(stripslashes(trim($_POST['post'])));
$experience = htmlspecialchars(stripslashes(trim($_POST['experience'])));
$preferred_location = htmlspecialchars(stripslashes(trim($_POST['preferredlocation'])));
$expected_ctc = htmlspecialchars(stripslashes(trim($_POST['expectedctc'])));

// if (!empty($_FILES['userFile']['name'])) {
//     $allowedExts = array("pdf", "doc", "docx");
//     $temp = explode(".", $_FILES["userFile"]["name"]);
//     $extension = end($temp);
//     if (
//         $_FILES["userFile"]["size"] < 200000
//         && in_array($extension, $allowedExts)
//     ) {
//         $target_Path = "attechment/";
//         $target_Path = $target_Path . basename($_FILES['userFile']['name']);
//         move_uploaded_file($_FILES['userFile']['tmp_name'], $target_Path);
//     } else {
//         $_session['invalid'] = "Invalid File, Please Upload Pdf or Doc File Only";
//         header('location:career.php');
//     }
// }

$allowed_origins = array('https://jetcotech.com/', 'https://www.jetcotech.com/', 'http://jetcotech.com/', 'http://www.jetcotech.com/', 'http://jetcotech.com', 'http://www.jetcotech.com', 'https://jetcotech.com', 'https://www.jetcotech.com');
if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('location:https://jetcotech.com/contact-us.html');
}
$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
/*$curlArr['type'] = "catalogue";*/
$curlArr['save'] = false;
$response = send_request($curlArr);
if ($response->result) {
    $curlArr = array_merge($_POST, $_SERVER);
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "API CONDITION FAIL";
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    header('location:https://jetcotech.com/contact-us.html');
} else {
    if (
        isset($fname) && trim($fname) !== '' && 
        isset($email) && trim($email) !== '' && 
        isset($phone) && trim($phone) !== '' && 
        isset($department) && trim($department) !== '' && 
        isset($post) && trim($post) !== '' && 
        isset($experience) && trim($experience) !== '' && 
        isset($preferred_location) && trim($preferred_location) !== '' && 
        isset($expected_ctc) && trim($expected_ctc) !== '' 
    ) {
        if ($_SESSION["code"] == $_POST['captcha'] && $_POST['captcha'] != "!UNKNOWN_TYPE!" && $_POST['captcha'] != "" && $_SESSION["code"] != "") {
            if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
                //echo "ERROR junk email detact";
                $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                $curlArr['save'] = true;
                $curlArr['bcoz'] = "JUNK DETACT";
                $curlArr['status'] = "FAIL";
                $response = send_request($curlArr);
                header('location:https://jetcotech.com/contact-us.html');
            } else {
                // preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
                // preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);
                // $junk_word = file_get_contents('https://dcbindia.in/junk-word.php?ver=1.2');
                // preg_match_all($junk_word, $message, $matches_words);
                //print_r($msg_match_email[0]);
                //echo count($msg_match_email[0]);exit;
                // if ((!empty($msg_match) && count($msg_match[0]) > 0) || (!empty($msg_match_email) && count($msg_match_email[0]) > 0) || (!empty($matches_words) && count($matches_words[0]) > 0)) {
                //     //echo "ERROR junk msg";
                //     $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                //     $curlArr['save'] = true;
                //     $curlArr['bcoz'] = "JUNK DETACT";
                //     $curlArr['status'] = "FAIL";
                //     $response = send_request($curlArr);
                //     header('location:https://jetcotech.com/contact-us.html');
                // } else {
                    require_once('phpmailer/class.phpmailer.php');
                    $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
                                              <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Career Enquiry Details</b></td>
                                            </tr>
                                            
                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $fname . '</b></td>
                                            </tr>
                                            
                                           <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                                            </tr>
                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $phone . '</b></td>
                                            </tr>
                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Department:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $department . '</b></td>
                                            </tr>

                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Post:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $post . '</b></td>
                                            </tr>

                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Experience:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $experience . '</b></td>
                                            </tr>

                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Preferred Location:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $preferred_location . '</b></td>
                                            </tr>

                                            <tr>
                                              <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Expected CTC:</td>
                                              <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $expected_ctc . '</b></td>
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
                        $mail->Host = "mail.smtp2go.com"; // SMTP server
                        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
                        $mail->AddAddress('hr@jetcotech.com', 'New Career Enquiry From Jetco Industries Corporate Website');
                        $mail->SetFrom('support@jetcotech.com', 'New Career Enquiry From Jetco Industries Corporate Website');
                        $mail->AddBCC('dcbrainsinquiry@gmail.com', 'New Career Enquiry From Jetco Industries Corporate Website');
                        // $mail->Port = 443;
                        $mail->Port = 80;
                        $mail->Subject = 'New Career Enquiry From Jetco Industries Corporate Website';
                        $mail->SMTPAuth = true;
                        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
                        $mail->Username = "jetcotech";
                        $mail->Password = "1X6JUN1HS5rTixGe";
                        $mail->MsgHTML($message_body);

                        if (file_exists($target_Path)) {
                            $mail->AddAttachment($target_Path);
                        }

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
                        header('location:https://www.jetcotech.com/thankyou-career.html');
                        //echo "Message Sent OK<p></p>\n";
                    } catch (phpmailerException $e) {
                        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                        $curlArr['save'] = true;
                        $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                        $curlArr['Exception'] = $e->errorMessage();
                        $curlArr['status'] = "FAIL";
                        $response = send_request($curlArr);
                        echo $e->errorMessage(); //Pretty error messages from PHPMailer

                    } catch (Exception $e) {
                        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                        $curlArr['save'] = true;
                        $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                        $curlArr['Exception'] = $e->getMessage();
                        $curlArr['status'] = "FAIL";
                        $response = send_request($curlArr);
                        echo $e->getMessage(); //Boring error messages from anything else!

                    }
                // }
            }
        } else {
            $curlArr = array_merge($_POST, $_SERVER);
            $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
            $curlArr['save'] = true;
            $curlArr['bcoz'] = "CAPTCHA MISMATCH";
            $curlArr['status'] = "FAIL";
            $response = send_request($curlArr);
?>
            <script>
                if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
                    window.location.href = "https://jetcotech.com/contact-us.html";
                } else {
                    window.location.href = "https://jetcotech.com/contact-us.html";
                }
            </script>
        <?php
        }
    } else {
        $curlArr = array_merge($_POST, $_SERVER);
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);

        ?>
        <script>
            if (confirm("Please Enter All Details Correct..")) {
                window.location.href = "https://jetcotech.com/contact-us.html";
            } else {
                window.location.href = "https://jetcotech.com/contact-us.html";
            }
        </script>

<?php
    }
}
?>