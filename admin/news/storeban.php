<?php
include("../../includes/config.inc.php");
$date = iconv("utf-8", "tis-620", $_POST['date']);
$end_date = iconv("utf-8", "tis-620", $_POST['end_date']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO banner ";
$strSQL .= "(image,status,date,end_date)";
$strSQL .= "VALUES";
$strSQL .= "('" . $newfilename . "','1','" . $date . "','" . $end_date . "')";
$objQuery = mssql_query($strSQL);

// echo $newfilename ;
//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
?>
<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=1&Submenu=showdel";
</script> 