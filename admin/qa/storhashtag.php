<?php
include("../../includes/config.inc.php");

$hashtag= iconv("utf-8", "tis-620", $_POST['hashtag']);




// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO tb_hashtag ";
$strSQL .= "(hashtag)";
$strSQL .= "VALUES";
$strSQL .= "('" . $hashtag . "')";
$objQuery = mssql_query($strSQL);



?>

 <script type="text/javascript">
    window.location = "../indexadmin.php?Menu=4&Submenu=showhashtag";
</script> 