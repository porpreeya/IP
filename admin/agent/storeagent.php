<?php


$name= iconv("utf-8", "tis-620", $_POST['name']);
$consider= iconv("utf-8", "tis-620", $_POST['consider']);



$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO consider ";
$strSQL .= "(name,consider,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $name . "','" . $consider . "','1')";
$objQuery = mssql_query($strSQL);



?>

 <script type="text/javascript">
    window.location = "../indexadmin.php?Menu=3&Submenu=showagent";
</script> 