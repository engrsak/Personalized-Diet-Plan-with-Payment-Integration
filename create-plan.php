<?php
include("config.php");

$num="";
$reglogErr="";
$defweight="";

if (isset($_POST['submit'])) {

  $gender=$_POST['gender'];
  $veg=$_POST['veg'];
  $fish=$_POST['fish'];
  $diary=$_POST['diary'];
  $act=$_POST['act'];
  $typ=$_POST['typ'];
  $age=$_POST['age'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $tweight=$_POST['tweight'];
  $mail=$_POST['mail'];
  
  $defweight= $weight-$tweight;
 
  $sql = "INSERT INTO diet(gen,meat,fish,diary,activity,tday,age,height,weight,tweight,mail) VALUES ('$gender','$veg','$fish','$diary','$act','$typ','$age','$height','$weight','$tweight','$mail')";
 	mysqli_query($conn, $sql);

 if ($gender='male') {
 	
 	if ($veg='veg') {
 		
 		if ($fish='fish') {
 			
 			if ($diary='diary') {

 				if ($act='5-7' || $act='3-5') {

 					if ($typ='at-office' || $typ='home') {

 						if ($age>=18 && $age<=30 ) {

 							if ($defweight>=0 && $defweight<=50) {

 								$result = mysqli_query($conn, "UPDATE diet SET file_id='1' WHERE mail='".$mail."'");
 								header('refresh:5; url=payhere.php?mail_id='.$mail.'&file_id=1');

 							}else{

 							} 							
 						}else if($age>=31 && $age<=50){



 						}else{

 						}						
 					}else{

 					}					
 				}else{

 				} 				
 			}else{

 			}
 		}else{

 		}
 	}else{

 	}
 }else{

 }

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creating Plan</title>
</head>
<body style="text-align: center;">
<img src="img/try-3.gif">
</body>
</html>
