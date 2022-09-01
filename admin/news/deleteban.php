<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM banner")
or die(mssql_error());

$IDban = $_GET['ID_ban'];
$sql = "update banner set status='0' WHERE ID_ban = '$IDban'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=1&Submenu=showdel";
</script>