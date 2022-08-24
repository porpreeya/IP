<?php
$name= iconv("utf-8", "tis-620", $_POST['name']);
$type= iconv("utf-8", "tis-620", $_POST['type']);
$numfeduest= iconv("utf-8", "tis-620", $_POST['numfeduest']);
// $form= iconv("utf-8", "tis-620", $_FILES['form']['name']);
// $admin= iconv("utf-8", "tis-620", $_FILES['admin']['name']);
$agent= iconv("utf-8", "tis-620", $_POST['agent']);
$numregister= iconv("utf-8", "tis-620", $_POST['numregister']);
$datenumregister= iconv("utf-8", "tis-620", $_POST['datenumregister']);
$prapaet= iconv("utf-8", "tis-620", $_POST['prapaet']);
$kind= iconv("utf-8", "tis-620", $_POST['kind']);
$title= iconv("utf-8", "tis-620", $_POST['title']);
$holdre= iconv("utf-8", "tis-620", $_POST['holdre']);
$team= iconv("utf-8", "tis-620", $_POST['team']);
$affiliation= iconv("utf-8", "tis-620", $_POST['affiliation']);
$inventor= iconv("utf-8", "tis-620", $_POST['inventor']);
$inventors= iconv("utf-8", "tis-620", $_POST['inventors']);
$framename= iconv("utf-8", "tis-620", $_POST['framename']);
$projectcode= iconv("utf-8", "tis-620", $_POST['projectcode']);
$contract= iconv("utf-8", "tis-620", $_POST['contract']);
$genus= iconv("utf-8", "tis-620", $_POST['genus']);
// $attachment= iconv("utf-8", "tis-620", $_FILES['attachment']['name']);
$benefit= iconv("utf-8", "tis-620", $_POST['benefit']);
$lead= iconv("utf-8", "tis-620", $_POST['lead']);
$sta= iconv("utf-8", "tis-620", $_POST['sta']);
$note= iconv("utf-8", "tis-620", $_POST['note']);
$status= iconv("utf-8", "tis-620", $_POST['status']);

$tmp_name=$_FILES['form']['tmp_name'];
$temp = explode(".", $_FILES["form"]["name"]);
$newfilename = round(microtime(true)) . '1.' . end($temp);

$tmp_name2=$_FILES['admin']['tmp_name'];
$temp2 = explode(".", $_FILES["admin"]["name"]);
$newfilename2 = round(microtime(true)) . '2.' . end($temp2);

$tmp_name3=$_FILES['attachment']['tmp_name'];
$temp3 = explode(".", $_FILES["attachment"]["name"]);
$newfilename3 = round(microtime(true)) . '3.' . end($temp3);

$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO tb_IP ";
$strSQL .= "(type,offer,numfeduest,form,admin,agent,numregister,datenumregister,prapaet,kind,title,holdre,team,affiliation,
inventor,inventors,framename,projectcode,contract,genus,attachment,benefit,lead,sta,note,status)";
$strSQL .= "VALUES";
$strSQL .= "('" . $type . "','" . $offer. "','" . $numfeduest . "','" . $newfilename . "','" . $newfilename2 . "','" . $agent . "','" . $numregister . "',
'" . $datenumregister . "','" . $prapaet . "','" . $kind . "','" . $title . "','" . $holdre . "','" . $team . "','" . $affiliation . "',
'" . $inventor . "','" . $inventors . "','" . $framename . "','" . $projectcode . "','" . $contract . "','" . $genus . "','" . $newfilename3 . "','" . $benefit . "','" . $lead . "',
'" . $sta . "','" . $note . "','1')";
$objQuery = mssql_query($strSQL);

//upload file in folder
move_uploaded_file($_FILES["form"]["tmp_name"], "../../uploadpdf/" . $newfilename);
move_uploaded_file($_FILES["admin"]["tmp_name"], "../../uploadpdf/" . $newfilename2);
move_uploaded_file($_FILES["attachment"]["tmp_name"], "../../uploadpdf/" . $newfilename3);
?>



  <script type="text/javascript">
    window.location = "../indexadmin.php?Menu=5&Submenu=showmanage";
</script>  