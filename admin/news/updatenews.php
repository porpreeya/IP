<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("intelle");
$ID = $_GET['ID'];
$news= iconv( "utf-8", "tis-620",$_POST['news']);
$image = iconv( "utf-8","tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    // move_uploaded_file($tmp_name, "../../uploads/" . $newfilename );
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);
}

$sql = ("UPDATE news SET news='{$news}',image='{$newfilename}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);


?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>