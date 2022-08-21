<?php
$news= iconv( "tis-620","utf-8", $_POST['news']);
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO news ";
$strSQL .= "(news,image,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $news . "','" . $newfilename . "','1')";
$objQuery = mssql_query($strSQL);

// echo $newfilename ;
//upload file in folder
move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $newfilename);

?>
<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>