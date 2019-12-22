<?php
if(isset($_POST['Send'])){
$name=$_POST['name'];
$email=$_POST['name'];
$message=$_POST['message'];

$to='prayaasnitj@gmail.com';
$subject='Query or Suggestion';
$message="Name: ".$name."\n\n" ."Message: ".$message;
$headers="From: ".$email;

if(mail($to,$subject,$message,$headers)){
    echo "<h1> Sent Sucessfully<br> Thank You!! For Submission</h1>";
    }
else{
    echo "Something went Wrong";
    }
 }
?>