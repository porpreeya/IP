<?php
include("../../includes/config.inc.php");
// print_r($_POST);
// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข
// $objDB = mssql_select_db("intelle");
$ID_ip = $_GET['ID_ip'];
$name = iconv("utf-8", "tis-620", $_POST['name']);
$type = iconv("utf-8", "tis-620", $_POST['type']);
$numfeduest = iconv("utf-8", "tis-620", $_POST['numfeduest']);
// $form= iconv("utf-8", "tis-620", $_FILES['form']['name']);
// $admin= iconv("utf-8", "tis-620", $_FILES['admin']['name']);
$offer = iconv("utf-8","tis-620",  $_POST['offer']);
$agent = iconv("utf-8", "tis-620", $_POST['agent']);
$numregister = iconv("utf-8", "tis-620", $_POST['numregister']);
$datenumregister = iconv("utf-8", "tis-620", $_POST['datenumregister']);
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
$agency= iconv("utf-8", "tis-620", $_POST['agency']);
$benefit = iconv("utf-8", "tis-620", $_POST['benefit']);
$lead = iconv("utf-8", "tis-620", $_POST['lead']);
$sta = iconv("utf-8", "tis-620", $_POST['sta']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$status = iconv("utf-8", "tis-620", $_POST['status']);
$con = iconv("utf-8", "tis-620", $_POST['con']);

$tmp_name = $_FILES['form']['tmp_name'];
$temp = explode(".", $_FILES["form"]["name"]);
$newfilename = round(microtime(true)) . '1.' . end($temp);

// $tmp_name2 = $_FILES['admin']['tmp_name'];
// $temp2 = explode(".", $_FILES["admin"]["name"]);
// $newfilename2 = round(microtime(true)) . '2.' . end($temp2);

// $tmp_name3 = $_FILES['attachment']['tmp_name'];
// $temp3 = explode(".", $_FILES["attachment"]["name"]);
// $newfilename3 = round(microtime(true)) . '3.' . end($temp3);
$countfilesAdmin = count($_FILES['admin']["name"]);
$allFileAdmin = null;
for ($i = 0; $i < $countfilesAdmin; $i++) {
    $tmp_name2 = $_FILES['admin']['tmp_name'][$i];
    $temp2 = explode(".", $_FILES["admin"]["name"][$i]);
    $newfileAdmin = round(microtime(true)) . $i . '2.' . end($temp2);
    $allFileAdmin[] = $newfileAdmin;

    if (!move_uploaded_file($_FILES['admin']['tmp_name'][$i], '../../uploadpdf/' . $newfileAdmin)) {
        // echo 'error';
    }
}
$fileAdmin = join(',', $allFileAdmin);

$countfilesAttachment = count($_FILES['attachment']["name"]);
$allFileAttachment = null;
for ($i = 0; $i < $countfilesAttachment; $i++) {
    $tmp_name3 = $_FILES['attachment']['tmp_name'][$i];
    $temp3 = explode(".", $_FILES["attachment"]["name"][$i]);
    $newfileAttachment = round(microtime(true)) . $i . '3.' . end($temp3);
    $allFileAttachment[] = $newfileAttachment;

    if (!move_uploaded_file($_FILES['attachment']['tmp_name'][$i], '../../uploadpdf/' . $newfileAttachment)) {
        // echo 'error';
    }
}
$fileAttachment = join(',', $allFileAttachment);
//คู่สัญญาโครงการ
$data = mssql_query("SELECT * FROM tb_contract where contract ='$con' ");

$cons = mssql_fetch_array($data);
// var_dump($cons); 
if( empty($cons['ID'])) {
    echo "ไม่มีข้อมูล {$con} ในตาราง aaamember";
 
    $strSQLcon = mssql_query("INSERT INTO tb_contract (contract) VALUES('$con') ");
    // var_dump($strSQLcon);
    $data = mssql_query("SELECT * FROM tb_contract where contract ='$con' ");
    $cons = mssql_fetch_array($data);
    
} else{

}

$sql = ("UPDATE tb_IP SET type='{$type}', offer='{$offer}',numfeduest='{$numfeduest}',numregister='{$numregister}', agent='{$agent}',
datenumregister='{$datenumregister}',kind='{$kind}',title='{$title}',holdre='{$holdre}',team='{$team}',affiliation='{$affiliation}',inventor='{$inventor}',
inventors='{$inventors}',framename='{$framename}',projectcode='{$projectcode}',contract='{$cons['ID']}',genus='{$genus}',
benefit='{$benefit}',lead='{$lead}',sta ='{$sta }',note='{$note}',agency ='{$agency }' WHERE ID_ip='{$ID_ip}'");

$objQuery = mssql_query($sql);

//เช็คว่ามีไฟล์มั้ย
if (!empty($_FILES['form']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET form='{$newfilename}' WHERE ID_ip='{$ID_ip}'");
   
   $objQuery = mssql_query($sql);
    move_uploaded_file($_FILES["form"]["tmp_name"],  "../../uploadpdf/" . $newfilename);
}
 if(!empty($_FILES['admin']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET admin='{$fileAdmin}' WHERE ID_ip='{$ID_ip}'");
   $objQuery = mssql_query($sql);
   move_uploaded_file($_FILES["admin"]["tmp_name"],  "../../uploadpdf/" . $fileAdmin);
} 
if(!empty($_FILES['attachment']['tmp_name'])) {
   $sql = ("UPDATE tb_IP SET attachment='{$fileAttachment}' WHERE ID_ip='{$ID_ip}'");
   $objQuery = mssql_query($sql);
   move_uploaded_file($_FILES["attachment"]["tmp_name"],  "../../uploadpdf/" . $fileAttachment);
}

?>
<script type="text/javascript">
   window.location = "../indexadmin.php?Menu=5&Submenu=showmanage";
</script>