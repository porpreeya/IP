<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM tb_login")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM tb_login WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=7&Submenu=showloginadd";
</script>