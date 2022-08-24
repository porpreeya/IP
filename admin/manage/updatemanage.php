<?php
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข
$objDB = mssql_select_db("intelle");
$ID_ip = $_GET['ID_ip'];
$name = iconv("utf-8", "tis-620", $_POST['name']);
$type = iconv("utf-8", "tis-620", $_POST['type']);
$numfeduest = iconv("utf-8", "tis-620", $_POST['numfeduest']);
// $form= iconv("utf-8", "tis-620", $_FILES['form']['name']);
// $admin= iconv("utf-8", "tis-620", $_FILES['admin']['name']);
$agent = iconv("utf-8", "tis-620", $_POST['agent']);
$numregister = iconv("utf-8", "tis-620", $_POST['numregister']);
$datenumregister = iconv("utf-8", "tis-620", $_POST['datenumregister']);
$prapaet = iconv("utf-8", "tis-620", $_POST['prapaet']);
$kind = iconv("utf-8", "tis-620", $_POST['kind']);
$title = iconv("utf-8", "tis-620", $_POST['title']);
$holdre = iconv("utf-8", "tis-620", $_POST['holdre']);
$team = iconv("utf-8", "tis-620", $_POST['team']);
$affiliation = iconv("utf-8", "tis-620", $_POST['affiliation']);
$inventor = iconv("utf-8", "tis-620", $_POST['inventor']);
$inventors = iconv("utf-8", "tis-620", $_POST['inventors']);
$framename = iconv("utf-8", "tis-620", $_POST['framename']);
$projectcode = iconv("utf-8", "tis-620", $_POST['projectcode']);
$contract = iconv("utf-8", "tis-620", $_POST['contract']);
$genus = iconv("utf-8", "tis-620", $_POST['genus']);
// $attachment= iconv("utf-8", "tis-620", $_FILES['attachment']['name']);
$benefit = iconv("utf-8", "tis-620", $_POST['benefit']);
$lead = iconv("utf-8", "tis-620", $_POST['lead']);
$sta = iconv("utf-8", "tis-620", $_POST['sta']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$status = iconv("utf-8", "tis-620", $_POST['status']);

$tmp_name = $_FILES['form']['tmp_name'];
$temp = explode(".", $_FILES["form"]["name"]);
$newfilename = round(microtime(true)) . '1.' . end($temp);

$tmp_name2 = $_FILES['admin']['tmp_name'];
$temp2 = explode(".", $_FILES["admin"]["name"]);
$newfilename2 = round(microtime(true)) . '2.' . end($temp2);

$tmp_name3 = $_FILES['attachment']['tmp_name'];
$temp3 = explode(".", $_FILES["attachment"]["name"]);
$newfilename3 = round(microtime(true)) . '3.' . end($temp3);

$sql = ("UPDATE tb_IP SET type='{$type}', offer='{$offer}',numfeduest='{$numfeduest}', agent='{$agent}',
datenumregister='{$datenumregister}',prapaet='{$prapaet}',kind='{$kind}',title='{$title}',holdre='{$holdre}',team='{$team}',affiliation='{$affiliation}',inventor='{$inventor}',
inventors='{$inventors}',framename='{$framename}',projectcode='{$projectcode}',contract='{$contract}',genus='{$genus}',
benefit='{$benefit}',lead='{$lead}',sta ='{$sta }',note='{$note}' WHERE ID_ip='{$ID_ip}'");

$objQuery = mssql_query($sql);

//เช็คว่ามีไฟล์มั้ย
if (!empty($_FILES['form']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET form='{$newfilename}' WHERE ID_ip='{$ID_ip}'");
   
   $objQuery = mssql_query($sql);
    move_uploaded_file($_FILES["form"]["tmp_name"],  "../../uploadpdf/" . $newfilename);
}
 if(!empty($_FILES['admin']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET admin='{$newfilename2}' WHERE ID_ip='{$ID_ip}'");
   $objQuery = mssql_query($sql);
   move_uploaded_file($_FILES["admin"]["tmp_name"],  "../../uploadpdf/" . $newfilename2);
} 
if(!empty($_FILES['attachment']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET attachment='{$newfilename3}' WHERE ID_ip='{$ID_ip}'");
   $objQuery = mssql_query($sql);
   move_uploaded_file($_FILES["attachment"]["tmp_name"],  "../../uploadpdf/" . $newfilename3);
}

?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=5&Submenu=showmanage";
</script>