<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM consider")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "update consider set status='0' WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=3&Submenu=showagent";
</script>