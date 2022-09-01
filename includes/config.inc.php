<?php
$servername = ".";
    $dbuser		= "sa";
    $dbpasswd	= "123456";
    $dbname		= "intelle";
    include("mssql.php");
    $db_tm = new sql_db($dbhost, $dbuser, $dbpasswd, $dbname, false);
    
?>