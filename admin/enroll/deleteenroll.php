<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query("SELECT * FROM tb_enroll")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM tb_enroll WHERE ID = '$ID'";
  mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=10&Submenu=showenroll";
</script>