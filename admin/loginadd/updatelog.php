<?php
include("../../includes/config.inc.php");
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

// $objDB = mssql_select_db("intelle");

$ID = $_GET['ID'];
$useradd = iconv("utf-8" ,"tis-620", $_POST['useradd']);
$password = iconv( "utf-8","tis-620", $_POST['password']);
$firstname = iconv("utf-8","tis-620",  $_POST['firstname']);
$lastname = iconv("utf-8","tis-620",  $_POST['lastname']);


$sql = ("UPDATE tb_login SET useradd='{$useradd}',password='{$password}',firstname='{$firstname}',lastname='{$lastname}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);


?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=7&Submenu=showloginadd";
</script>