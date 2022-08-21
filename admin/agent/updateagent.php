<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("intelle");

$ID = $_GET['ID'];
$aname= iconv( "utf-8", "tis-620",$_POST['aname']);
$consider= iconv( "utf-8", "tis-620",$_POST['consider']);


$sql = ("UPDATE consider SET aname='{$aname}',consider='{$consider}', status='1' WHERE ID={$ID}");

$objQuery = mssql_query($sql);


?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=3&Submenu=showagent";
</script>