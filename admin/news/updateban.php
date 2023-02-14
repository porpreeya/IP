<?php
include("../../includes/config.inc.php");
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข
// $objDB = mssql_select_db("intelle");
$ID_ban = $_GET['ID_ban'];
$date = iconv("utf-8", "tis-620", $_POST['date']);
$end_date = iconv("utf-8", "tis-620", $_POST['end_date']);
//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    $path = "uploads/";
    $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);

    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    // move_uploaded_file($tmp_name, "../../uploads/" . $newfilename );
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
    $sql = ("UPDATE banner SET image='{$newfilename}' WHERE ID_ban='{$ID_ban}'");
    $objQuery = mssql_query($sql);
}
$sql = ("UPDATE banner SET  date='{$date}',end_date='{$end_date}' WHERE ID_ban='{$ID_ban}'");
$objQuery = mssql_query($sql);
?>
<script type="text/javascript">
</script>