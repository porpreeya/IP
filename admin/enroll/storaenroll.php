<?php
include("../../includes/config.inc.php");
$name = iconv("utf-8", "tis-620", $_POST['name']);
$lastname = iconv("utf-8", "tis-620", $_POST['lastname']);
$rank = iconv("utf-8", "tis-620", $_POST['rank']);
$mail = iconv("utf-8", "tis-620", $_POST['mail']);
$phonenumber = iconv("utf-8", "tis-620", $_POST['phonenumber']);
$affiliation = iconv("utf-8", "tis-620", $_POST['affiliation']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$type = iconv("utf-8", "tis-620", $_POST['type']);
$inventionname = iconv("utf-8", "tis-620", $_POST['inventionname']);
$dmy= iconv("utf-8", "tis-620", $_POST['dmy']);
$dmy = date("Y-m-d");

//ไฟล์ 
$pdf_enroll = iconv("utf-8", "tis-620", $_FILES['pdf_enroll']['name']);
$tmp_name = $_FILES['pdf_enroll']['tmp_name'];
$temp = explode(".", $_FILES["pdf_enroll"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
// $objDB = mssql_select_db("intelle");
$SQL = "INSERT INTO tb_enroll";
$SQL .= "(name,lastname,rank,mail,phonenumber,affiliation,type,inventionname,pdf_enroll,dmy,note)";
$SQL .= "VALUES";
$SQL .= "('" . $name . "','" . $lastname . "','" . $rank . "','" . $mail . "',
'" . $phonenumber . "','" . $affiliation . "','" . $type . "','" . $inventionname . "',
'" . $newfilename  . "','" .$dmy. "','" . $inventionname . "')";
move_uploaded_file($_FILES["pdf_enroll"]["tmp_name"], "../../uploadpdf/" . $newfilename);
$objQuery = mssql_query($SQL);

?>

<script type="text/javascript">
    window.location = "../../../IP/index.php?mm=6";
</script>