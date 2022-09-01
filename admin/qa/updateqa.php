<?php
include("../../includes/config.inc.php");
//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข

// $objDB = mssql_select_db("intelle");


$ID_q = $_GET['ID_q'];

$response = iconv("utf-8", "tis-620", $_POST['response']);
$question = iconv("utf-8", "tis-620", $_POST['question']);
$dateans= iconv("utf-8", "tis-620", $_POST['dateans']);
$nameans = iconv("utf-8","tis-620",  $_POST['nameans']);

// echo $details."<br>";
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";
$dateans=date("Y-m-d");
$sql = ("UPDATE ques SET response='{$response}', dateans='$dateans',nameans='$nameans',status='1' WHERE ID_q={$ID_q}");

// echo $sql."<br>";
$objQuery = mssql_query($sql);



?>

<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=4&Submenu=showqa";
</script>