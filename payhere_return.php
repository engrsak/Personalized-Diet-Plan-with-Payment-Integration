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

    <?php 
$statusMsg='';
require_once 'config.php'; 
if(!empty($_GET['order_id'])){ 

    $statusMsg='Payments has been Succussfully <br> <span style="font-size:14px;">Please check your e-mail to download the diet plan.</span> <br> <img src="img/pay-yes.png" style="width:100px;height:auto;">';
   
    }else{

    $statusMsg='Payments has been Failed <br> <img src="img/pay-no.png" style="width:100px;height:auto;">'; 
    }
?>
<div class="container">
    <div class="row justify-content-center" style="padding: 10px 10px 10px 10px;margin-bottom: 20px;">
        <div class=" col-lg-12 text-center">
            <img src="img/logo.png" class="logo"><br><br>
            <div class="side-viewcontent">
            <h3><?php echo $statusMsg; ?></h3>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<style type="text/css">
@media print {
    .hidden-print {
        display :  none;
    }
}
</style>
</body>
</html>