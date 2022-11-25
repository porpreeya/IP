<?php
include("../../includes/config.inc.php");
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

// $objDB = mssql_select_db("intelle");
$ID = $_GET['ID'];
$news= iconv( "utf-8", "tis-620",$_POST['news']);
//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    $path = "uploads/";
    $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    // move_uploaded_file($tmp_name, "../../uploads/" . $newfilename );
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
    $sql = ("UPDATE news SET image='{$newfilename}' WHERE ID='{$ID}'");
    $objQuery = mssql_query($sql);
}
//เช็คว่ามีไฟล์มั้ย
if (!empty($_FILES['pdf_news']['tmp_name'])) {
    $path2 = "uploadpdf/";
    $pdf_news = iconv("utf-8", "tis-620", $_FILES['pdf_news']['name']);
    $tmp_name2 = $_FILES['pdf_news']['tmp_name'];
    $temp2 = explode(".", $_FILES["pdf_news"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' . end($temp2);
    // move_uploaded_file($tmp_name, "../../uploads/" . $newfilename );
    move_uploaded_file($_FILES["pdf_news"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
    $sql = ("UPDATE news SET pdf_news='{$newfilename2}' WHERE ID='{$ID}'");
    $objQuery = mssql_query($sql);
}

$sql = ("UPDATE news SET news='{$news}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);


?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>