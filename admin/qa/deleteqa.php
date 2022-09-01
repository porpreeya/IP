<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM ques")
or die(mssql_error());

$ID_q = $_GET['ID_q'];
$sql = "DELETE FROM ques WHERE ID_q = '$ID_q'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=4&Submenu=showqa";
</script>