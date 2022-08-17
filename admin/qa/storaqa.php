<?php

$question = iconv("utf-8", "tis-620", $_POST['question']);
$response = iconv("utf-8", "tis-620", $_POST['response']);
$dateans= iconv("utf-8", "tis-620", $_POST['dateans'],GETDATE());
$nameans = iconv("utf-8","tis-620", $_POST['nameans']);
$dateans = date("Y-m-d");
$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO ques";
$strSQL .= "(response,question,dateans,nameans)";
$strSQL .= "VALUES";
$strSQL .= "('" . $response . "','" . $question . "','" . $dateans . "','" . $nameans . "')";
$strSQL .= mssql_query($strSQL);

?>

<script type="text/javascript">
    window.location = "../index.php?Menu=4&Submenu=showqa";
</script>