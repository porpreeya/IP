<?php
include("../../includes/config.inc.php");
$name = iconv("utf-8", "tis-620", $_POST['name']);
$type = iconv("utf-8", "tis-620", $_POST['type']);
$numfeduest = iconv("utf-8", "tis-620", $_POST['numfeduest']);
// $form= iconv("utf-8", "tis-620", $_FILES['form']['name']);
// $admin= iconv("utf-8", "tis-620", $_FILES['admin']['name']);
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
$agency = iconv("utf-8", "tis-620", $_POST['agency']);
$genus = iconv("utf-8", "tis-620", $_POST['genus']);
// $attachment= iconv("utf-8", "tis-620", $_FILES['attachment']['name']);
$benefit = iconv("utf-8", "tis-620", $_POST['benefit']);
$lead = iconv("utf-8", "tis-620", $_POST['lead']);
$sta = iconv("utf-8", "tis-620", $_POST['sta']);
$note = iconv("utf-8", "tis-620", $_POST['note']);
$status = iconv("utf-8", "tis-620", $_POST['status']);
$con = iconv("utf-8", "tis-620", $_POST['con']);

$tmp_name = $_FILES['form']['tmp_name'];
// var_dump($tmp_name);
$temp = explode(".", $_FILES["form"]["name"]);
$newfilename = round(microtime(true)) . '1.' . end($temp);
//คู่สัญญาโครงการ
$data = mssql_query("SELECT * FROM tb_contract where contract ='$con' ");
$cons = mssql_fetch_array($data);
if( empty($cons['ID'])) {
    // echo "ไม่มีข้อมูล {$con} ในตาราง aaamember";
    $strSQLcon = mssql_query("INSERT INTO tb_contract (contract) VALUES('$con') ");
    $data = mssql_query("SELECT * FROM tb_contract where contract ='$con' ");
    $cons = mssql_fetch_array($data);
    
} else {
    // echo "มีข้อมูล {$con} ในตารางccc member";
}
// print_r($con);

// $objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO tb_IP ";
$strSQL .= "(type,offer,numfeduest,form,admin,agent,numregister,datenumregister,kind,title,holdre,team,affiliation,
inventor,inventors,framename,projectcode,contract,genus,attachment,benefit,lead,sta,note,agency,status)";
$strSQL .= "VALUES";

//upload file in folder
move_uploaded_file($_FILES["form"]["tmp_name"], "../../uploadpdf/" . $newfilename);
//move_uploaded_file($_FILES["admin"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
// move_uploaded_file($_FILES["attachment"]["tmp_name"], "../../uploadpdf/" . $newfilename3);

$countfilesAdmin = count($_FILES["admin"]["name"]);
// var_dump($countfilesAdmin );
$allFileAdmin = null;
for ($i = 0; $i < $countfilesAdmin; $i++) {
    $tmp_name2 = $_FILES['admin']['tmp_name'][$i];
    // var_dump($_FILES['admin']);
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

$strSQL .= "('" . $type . "','" . $offer . "','" . $numfeduest . "','" . $newfilename . "','" . $fileAdmin . "','" . $agent . "','" . $numregister . "',
'" . $datenumregister . "','" . $kind . "','" . $title . "','" . $holdre . "','" . $team . "','" . $affiliation . "',
'" . $inventor . "','" . $inventors . "','" . $framename . "','" . $projectcode . "','" . $cons['ID'] . "','" . $genus . "','" . $fileAttachment . "','" . $benefit . "','" . $lead . "',
'" . $sta . "','" . $note . "','" . $agency . "','1')";
// var_dump($strSQL);
$objQuery = mssql_query($strSQL);
?>


<script type="text/javascript">
    window.location = "../indexadmin.php?Menu=5&Submenu=showmanage";
</script> 