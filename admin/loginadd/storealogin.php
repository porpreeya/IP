<?php
include("../../includes/config.inc.php");
$useradd = iconv("utf-8" ,"tis-620", $_POST['useradd']);
$password = iconv( "utf-8","tis-620", $_POST['password']);
$firstname = iconv("utf-8","tis-620",  $_POST['firstname']);
$lastname = iconv("utf-8","tis-620",  $_POST['lastname']);


// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO tb_login ";
$strSQL .= "(useradd,password,firstname,lastname,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $useradd . "','" . $password . "','" . $firstname . "','" . $lastname . "','Admin')";
$objQuery = mssql_query($strSQL);



?>

 <script type="text/javascript">
    window.location = "../indexadmin.php?Menu=7&Submenu=showloginadd";
</script> 