<?php
include("../../includes/config.inc.php");
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

// $objDB = mssql_select_db("intelle");

$ID = $_GET['ID'];
$hashtag= iconv( "utf-8", "tis-620",$_POST['hashtag']);
$sql = ("UPDATE tb_hashtag SET hashtag='{$hashtag}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);


?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=4&Submenu=showhashtag";
</script>