<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['sendEmail']) && (boolean)$_GET['sendEmail'] === true) {

  $baseUrl = $_GET['baseUrl'];
  $siteName = $_GET['siteName'];
  $name = $_GET['name'];
  $email = $_GET['email'];
  $text = $_GET['text'];

  if(!empty($name) && !empty($email) && !empty($text)) {

    require '../lib/PHPMailer/src/Exception.php';
    require '../lib/PHPMailer/src/PHPMailer.php';
    require '../lib/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $mailBody = '
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>'.$siteName.'</title>
      </head>
      <body bgcolor="#ffffff" style="margin: 0; padding: 0;">
      
        <table bgcolor="#ffffff" align="center" width="600" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <table border="0" width="100%" cellpadding="0" cellspacing="0" style="padding: 30px 0;">
                <tr>
                  <td align="center">
                    <a href="'.$baseUrl.'" target="_blank">
                      <img src="'.$baseUrl.'assets/img/logo.png" alt="logo" />
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <table border="0" width="100%" cellpadding="0" cellspacing="0" style="padding: 20px 0; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc;">
                <tr>
                  <td align="center" style="color: #111111; font-size: 24px; font-family: Arial, sans-serif; font-weight: bold; padding-bottom: 30px;">წერილი საკონტაქტო ფორმიდან</td>
                </tr>
                <tr>
                  <td style="color: #111111; font-size: 16px; font-family: Arial, sans-serif; padding-bottom: 10px;"><strong>სახელი:</strong> '.$name.'</td>
                </tr>
                <tr>
                  <td style="color: #111111; font-size: 16px; font-family: Arial, sans-serif; padding-bottom: 10px;"><strong>ელ-ფოსტა:</strong> '.$email.'</td>
                </tr>
                <tr>
                  <td style="color: #111111; font-size: 16px; font-family: Arial, sans-serif; padding-bottom: 10px; line-height: 22px;"><strong>ტექსტი:</strong> '.$text.'</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <table border="0" width="100%" cellpadding="0" cellspacing="0" style="padding: 20px 0;">
                <tr>
                  <td align="center" style="color: #111111; font-size: 16px; font-family: Arial, sans-serif;">&copy; '.$siteName.'</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      
      </body>
      </html>
    ';

    try {

      $mail->SMTPOptions = ['ssl' => [
          'verify_peer' => false, 
          'verify_peer_name' => false, 
          'allow_self_signed' => true
        ]
      ];
      $mail->isSMTP();
      $mail->Host = 'mail.samu.ge';
      $mail->SMTPAuth = true;
      $mail->Username = 'noreply@samu.ge';
      $mail->Password = '321321';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
      $mail->CharSet = 'UTF-8';
    
      $mail->setFrom('noreply@samu.ge', $siteName);
      $mail->addAddress('ik.dzandzava@gmail.com');
    
      $mail->isHTML(true);
      $mail->Subject = 'წერილი საკონტაქტო ფორმიდან';
      $mail->Body = $mailBody;
    
      $mail->send();
      
      exit(json_encode(['emailSent' => true]));
    
    } catch (Exception $e) {
    
      exit(json_encode(['emailSent' => false]));
    
    }

  } else {

    exit(json_encode(['emailSent' => false]));

  }

}