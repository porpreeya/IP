<?php
include("../../includes/config.inc.php");
$response = iconv("utf-8", "tis-620", $_POST['response']);
$dateans = iconv("utf-8", "tis-620", $_POST['dateans'], GETDATE());
$nameans = iconv("utf-8", "tis-620", $_POST['nameans']);
$hashtag = iconv("utf-8", "tis-620", $_POST['hashtag']);
$dateans = date("Y-m-d");
// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO ques";
$strSQL .= "(response,dateans,nameans,hashtag)";
$strSQL .= "VALUES";
$strSQL .= "('" . $response . "','" . $dateans . "','" . $nameans . "','" . $nameans . "','" . $hashtag . "')";
$strSQL .= mssql_query($strSQL);

?>

<script type="text/javascript">
    window.location = "../index.php?Menu=4&Submenu=showqa";
</script>