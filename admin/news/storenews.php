<?php


$news= iconv( "tis-620","utf-8", $_POST['news']);
$image = iconv( "tis-620","utf-8", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];



// echo $details."<br>";
 
// echo $day."<br>";
// echo $_FILES['image']['tmp_name']."<br>";
// echo $_FILES['image']['name']."<br>";
// echo $_FILES['filename']['name']."<br>";

$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO news ";
$strSQL .= "(news,image,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $news . "','" . $image . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name, "../../uploads/" . $_FILES['image']['name']);

?>

<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=2&Submenu=shownews";
</script>