<?php
require_once 'config.php';

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];
$md5sig                = $_POST['md5sig'];
$custom_1                = $_POST['email'];
$custom_2                = $_POST['items'];

$merchant_secret = '#'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if (($local_md5sig === $md5sig) AND ($status_code == 2) ){


	 						  $to=$custom_1;
                              $subject='Diet Plan';
                              $headers = array("From: Healthfirst"."<info@healthfirstfamilycare.com>",
                              "Reply-To: info@healthfirstfamilycare.com",
                              "X-Mailer: PHP/" . PHP_VERSION
                              );
                              $headers .= 'MIME-Version: 1.0' . "\r\n";
                              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                              $message = '<html><body style="text-align:center;">';
                              $message .= '<table style="border:none; margin-top:10px; margin-bottom:10px; width:100%;" rules="none">';
                              $message .= '<tr style="background: #9b121c;"><td style="text-align:center; padding:50px; color:#fff; font-weight:700; font-size:20px;">Thanks for your order.</td></tr>';
                              $message .= '</table>';
                              $message .= '<table style="border:none; margin-top:10px; margin-bottom:10px; width:100%;" rules="none">';
                              $message .= '<tr><td style="padding-top:8px;">Here we have attached a link to your diet plan.</td></tr>';
                              $message .= '<tr><td style="padding-top:30px;"><a href="https://zatacryptware.dilshansoftlab.com/online/" style="background:#9b121c; color:#fff; padding:10px 25px 10px 25px;">Download Now</a></td></tr>';
                              $message .= '<tr><td style="text-align:center; padding:10px; padding-top:30px;">Fitness is The Sucess</td></tr>';
                               $message .= '<tr><td style=" font-size:8px; text-align:center; padding:10px;">© Diet Plans</td></tr>';
                              $message .= '<tr><td style="margin-top:20px; height:10px;background:#348400;"></td></tr>';
                              $message .= '</table>';
                              $message .= '</body></html>';

                               if(mail($to, $subject, $message, $headers)){
                                  echo "<alert>E-mail Sent!</alert>";
                               }else{
                                  echo "<alert>Something went wrong!</alert>";
                               }

}

?>