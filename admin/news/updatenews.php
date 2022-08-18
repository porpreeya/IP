<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("intelle");

$ID = $_GET['ID'];

$news= iconv( "utf-8", "tis-620",$_POST['news']);
$image = iconv( "utf-8","tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

$sql = ("UPDATE news SET news='{$news}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);

//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    move_uploaded_file($tmp_name, "../../uploads/" . $_FILES['image']['name']);
}

?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>