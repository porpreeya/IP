<?php
include("../../includes/config.inc.php");

$aname= iconv("utf-8", "tis-620", $_POST['aname']);
$patent= iconv("utf-8", "tis-620", $_POST['patent']);



// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO consider ";
$strSQL .= "(aname,patent,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $aname . "','" . $patent . "','1')";
$objQuery = mssql_query($strSQL);



?>

 <script type="text/javascript">
    window.location = "../indexadmin.php?Menu=3&Submenu=showagent";
</script> 