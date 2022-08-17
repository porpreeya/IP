<?php
$image = iconv( "tis-620","utf-8", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];
$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO banner ";
$strSQL .= "(image,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $image . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name, "../../uploads/" . $_FILES['image']['name']);

?>
<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=1&Submenu=showdel";
</script> 