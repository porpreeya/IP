<?php
include("../includes/config.inc.php");
$mail = iconv("utf-8", "tis-620", $_POST['mail']);
$question = iconv("utf-8", "tis-620", $_POST['question']);
$date= iconv("utf-8", "tis-620", $_POST['date']);
$date=date("Y-m-d");
// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO ques";
$strSQL .= "(mail,question,date,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $mail . "','" . $question . "','" . $date . "','0')";
$strSQL .= mssql_query($strSQL);

//upload file in folder


?>

<script type="text/javascript">
    window.location = "../index.php?mm=4";
</script>