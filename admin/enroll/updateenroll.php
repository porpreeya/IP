<?php
include("../../includes/config.inc.php");
$ID = $_GET['ID'];
$name = iconv("utf-8", "tis-620", $_POST['name']);
$lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
$rank = iconv("utf-8", "tis-620", $_POST['rank']);
$mail = iconv("utf-8", "tis-620", $_POST['mail']);
$phonenumber = iconv("utf-8", "tis-620", $_POST['phonenumber']);
$affiliation = iconv("utf-8", "tis-620", $_POST['affiliation']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$type = iconv("utf-8", "tis-620", $_POST['type']);
$inventionname = iconv("utf-8", "tis-620", $_POST['inventionname']);
$dmy = iconv("utf-8", "tis-620", $_POST['dmy']);
$dmy = date("Y-m-d");

//ไฟล์ 
//เช็คว่ามีไฟล์มั้ย
if (!empty($_FILES['pdf_enroll']['tmp_name'])) {
    $path2 = "uploadpdf/";
    $pdf_enroll = iconv("utf-8", "tis-620", $_FILES['pdf_enroll']['name']);
    $tmp_name2 = $_FILES['pdf_enroll']['tmp_name'];
    $temp2 = explode(".", $_FILES["pdf_enroll"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' . end($temp2);
    // move_uploaded_file($tmp_name, "../../uploads/" . $newfilename );
    move_uploaded_file($_FILES["pdf_enroll"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
    $sql = ("UPDATE  tb_enroll SET pdf_enroll='{$newfilename2}' WHERE ID='{$ID}'");
    $objQuery = mssql_query($sql);
}

// $objDB = mssql_select_db("intelle");
$sql = ("UPDATE tb_enroll SET name='{$name}',lastname='{$lastname}',rank='{$rank}',mail='{$mail}',
phonenumber='{$phonenumber}',affiliation='{$affiliation}',type='{$type}',inventionname='{$inventionname}',note='{$note}'
,dmy='{$dmy}' WHERE ID='{$ID}'");
$objQuery = mssql_query($sql);

?>

<script type="text/javascript">
    window.location = "indexadmin.php?Menu=10&Submenu=showenroll";
</script>