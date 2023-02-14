<?php 
include("../../includes/config.inc.php");
// $objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM tb_hashtag")
or die(mssql_error());

$ID = $_GET['ID'];
$sql = "DELETE FROM tb_hashtag WHERE ID = '$ID'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=4&Submenu=showhashtag";
</script>