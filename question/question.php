<?php
$mail = iconv("utf-8", "tis-620", $_POST['mail']);
$response = iconv("utf-8", "tis-620", $_POST['response']);
$question = iconv("utf-8", "tis-620", $_POST['question']);

$objDB = mssql_select_db("intelle");
$strSQL = "INSERT INTO ques";
$strSQL .= "(mail,response,question)";
$strSQL .= "VALUES";
$strSQL .= "('" . $mail . "','" . $response . "','" . $question . "')";
$strSQL .= mssql_query($strSQL);

//upload file in folder


?>

<script type="text/javascript">
    window.location = "../index.php?mm=4";
</script>