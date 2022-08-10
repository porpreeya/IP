<?
$name = $_POST["name"];
$sql        = "SELECT *FROM tb_IP WHERE inventor like '%$name%' ORDER BY fname ASC";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
 
print_r($rows);
?>