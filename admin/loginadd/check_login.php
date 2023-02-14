<?php
include("../../includes/config.inc.php");
$strSQL = "SELECT * FROM tb_login WHERE useradd='".$_POST["useradd"]."' and password='".$_POST["password"]."'";
//$log = [$_POST["useradd"],$_POST["password"]];
$objQuery = $db_tm->sql_query($strSQL);
//$objResult = sqlsrv_fetch_array($objQuery,SQLSRV_FETCH_ASSOC);
$objResult = $db_tm->sql_fetchrow($objQuery);
if(!$objResult){

    echo "Username and Password Incorrect!";
}else{

    $_SESSION["ID"] = $objResult["ID"];

    $_SESSION["status"] = $objResult["status"];


    session_write_close();


    if ($objResult["status"] == "Admin"){

        header("location:../indexadmin.php");
    }else{

        header("location:user_page.php");
    }
}

$db_tm->sql_close();
?>
