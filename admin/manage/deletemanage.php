<?php 
$objDB = mssql_select_db("intelle");
$data = mssql_query(" SELECT * FROM tb_IP")
or die(mssql_error());

$ID_ip = $_GET['ID_ip'];
$sql = "update tb_IP set status='0' WHERE ID_ip = '$ID_ip'";

  mssql_query($sql);


?>
<script type="text/javascript">
     window.location = "../indexadmin.php?Menu=5&Submenu=showmanage";
</script>