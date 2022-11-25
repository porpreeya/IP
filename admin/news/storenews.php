<?php
include("../../includes/config.inc.php");
//มีทั้งไฟล์เเละรูป
if (!empty($_FILES['image']['tmp_name'])&&!empty($_FILES['pdf_news']['tmp_name'])){
$news = iconv("utf-8", "tis-620", $_POST['news']);
$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$pdf_news = iconv("utf-8", "tis-620", $_FILES['pdf_news']['name']);
$tmp_name2 = $_FILES['pdf_news']['tmp_name'];
$temp2 = explode(".", $_FILES["pdf_news"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);
$strSQL = "INSERT INTO news ";
$strSQL .= "(news,image,pdf_news,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $news . "','" . $newfilename . "','" . $newfilename2 . "','1')";
$objQuery = mssql_query($strSQL);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
move_uploaded_file($_FILES["pdf_news"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
} else if(!empty($_FILES['image']['tmp_name'])){
    $news = iconv("utf-8", "tis-620", $_POST['news']);
$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$strSQL = "INSERT INTO news ";
$strSQL .= "(news,image,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $news . "','" . $newfilename . "','1')";
$objQuery = mssql_query($strSQL);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
} else if(!empty($_FILES['pdf_news']['tmp_name'])){
$news = iconv("utf-8", "tis-620", $_POST['news']);
$pdf_news = iconv("utf-8", "tis-620", $_FILES['pdf_news']['name']);
$tmp_name2 = $_FILES['pdf_news']['tmp_name'];
$temp2 = explode(".", $_FILES["pdf_news"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);
$strSQL = "INSERT INTO news ";
$strSQL .= "(news,pdf_news,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $news . "','" . $newfilename2 . "','1')";
$objQuery = mssql_query($strSQL);
move_uploaded_file($_FILES["pdf_news"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
}


?>
<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>