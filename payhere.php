<?php 

require_once 'config.php'; 

$mail_id_for_update="";
$file_id_for_update="";
    if (isset($_GET["mail_id"])) {
            $mail_id_for_update = $_GET["mail_id"];
    }
    if (isset($_GET["file_id"])) {
            $file_id_for_update = $_GET["file_id"];
    }

    $q_pat = mysqli_query($conn, "SELECT * FROM plans WHERE d_id='$file_id_for_update' ");
             while($res = mysqli_fetch_array($q_pat)) {
            $dfile=$res['dfile'];
        }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Diet Plan</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="css/main-pay.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center" style="padding: 10px 10px 10px 10px;margin-bottom: 20px;">
        <div class=" col-lg-6 text-left">
            <img src="img/logo.png" class="logo">
        </div>
        <div class=" col-lg-6 text-right">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class=" col-lg-6 text-center">
            <div class="side-viewcontent">
                <table width="100%">
                    <tr>
                        <td><h5>Your Plan is Ready</h5></td>
                        <td><h4 class="text-center">250LKR</h4></td>
                    </tr>
                </table>               
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                <h6>Free E-Book</h6>
                <img src="img/b-1.jpg" style="height: 200px; width: auto;margin-right: 5px;">
            </div>
        </div>
        <div class=" col-lg-6 text-center">
            <form method="post" action="https://sandbox.payhere.lk/pay/checkout" id="msform">   
                <input type="hidden" name="merchant_id" value="#">    <!-- Replace your Merchant ID -->
                <input type="hidden" name="return_url" value="http://localhost/diet/payhere_return.php">
                <input type="hidden" name="cancel_url" value="http://localhost/diet/payhere_cancel.php">
                <input type="hidden" name="notify_url" value="http://localhost/diet/payhere_notify.php">  
                <input type="hidden" name="order_id" value="<?php echo $file_id_for_update; ?>">
                <input type="hidden" name="items" value="<?php echo $dfile; ?>"><br>
                <input type="hidden" name="currency" value="LKR">
                <input type="hidden" name="amount" value="200"> 
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="first_name" placeholder="Enter Your First Name" required="">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="last_name" placeholder="Enter Your Last Name" required=""><br>
                    </div>
                </div> 
                <input type="text" name="email" value="<?php echo $mail_id_for_update;?>" readonly>
                <input type="text" name="phone" placeholder="Enter Telephone"><br>
                <input type="text" name="address" placeholder="Enter Billing Address" required="">
                <input type="text" name="city" placeholder="City" required="">
                <input type="hidden" name="country" value="Sri Lanka"><br>
                <div style="text-align: center;"><img src="img/2.png" style="width: 200px; height: auto;"></div><br>
                <input type="submit" value="Pay Now" class="next action-button" style="width: 100%;">   
            </form> 
        </div>
    </div>

</div>
        
 <script src="js/jquery-3.5.1.min.js"></script>

</body>
</html>