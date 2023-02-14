<?php
include("../../includes/config.inc.php");
require './mailfn/sendmail.php';
//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

// $objDB = mssql_select_db("intelle");


$ID_q = $_GET['ID_q'];

$response = iconv("utf-8", "tis-620", $_POST['response']);
$question = iconv("utf-8", "tis-620", $_POST['question']);
$dateans= iconv("utf-8", "tis-620", $_POST['dateans']);
$nameans = iconv("utf-8","tis-620",  $_POST['nameans']);
$hashtag = iconv("utf-8", "tis-620", $_POST['hashtag']);
$mail = iconv("utf-8", "tis-620", $_POST['mail']);
// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";
$dateans=date("Y-m-d");
$sql = ("UPDATE ques SET response='{$response}', dateans='$dateans',nameans='$nameans', hashtag='$hashtag',status='1' WHERE ID_q={$ID_q}");

//ส่งเมล 
// $to = $mail;
// $subject = "Adminได้ตอบกลับคำถามเกี่ยวกับการจดทะเบียนของคุณเเล้ว";
// $message = "ดูคำตอบได้ที่เว็บไซต์ทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์เเละเทคโนโลยีเเห่งประเทศไทย";
// // $headers = "Adminได้ตอบกลับคำถามเเล้ว\n";
// // $headers.= "Content-type:text/html;charset=UTF-8"."\n";
// // $headers.= 'From: <admin@gmail.com>'."\n";
// // $headers.= 'Cc: <admin@gmail.com>'."\n";
// // SendMail($nameans,'preeyanuchseedama@gmail.com');
// // the message
// $headers = "From: preeyanuchseedama@gmail.com" . "\n" .
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// ini_set('SMTP', 'gmail-smtp-in.l.google.com'); // Force GMail to be the server.
// $test= mail("preeyanuchseedama@gmail.com","My subject",$msg,$headers);
// var_dump($test);
//mail($to,$subject,$message,$headers);
// echo $sql."<br>";
$objQuery = mssql_query($sql);



?>

<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=4&Submenu=showqa";
</script>