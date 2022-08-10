<?
$sql        = "SELECT *FROM tb_IP WHERE ID_ip ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

$sql2        = "SELECT *FROM tb_IP WHERE ID_ip ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2      = $db_tm->sql_fetchrow($result2);

$sql3        = "SELECT *FROM tb_IP WHERE ID_ip ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($result3);

$sql4        = "SELECT *FROM tb_IP WHERE ID_ip ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($result4);

$sql5        = "SELECT *FROM tb_IP WHERE ID_ip ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);

$sql6        = "SELECT * FROM tb_IP ORDER BY ID_ip asc";
$result6     = $db_tm->sql_query($sql);
$rows6       = $db_tm->sql_fetchrow($result);
?>
<style>
    table {
        width: 70%;
        height: 200px;
        position: absolute;

        margin-top: 40px;
        margin-left: 180px;

        border-collapse: collapse;
        background-color: white;

    }

    th,
    td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid black;
        height: 30px;
        color: black;
        justify-content: center;
        background-color:#ffffff;
        
    }

    tr:hover {
        background-color: whitesmoke;
    }

    .b {
        color: black;
        text-align: center;
        padding-top: 35px;
        font-family: "Trebuchet MS";
    }

    .collapsible {
        cursor: pointer;
        padding: 18px;
        border: none;
        text-align: left;
        outline: none;
    }

    .d1 {
        padding: 8px;
    }

    .p {
        padding-left: 50px;
        padding-top: 20px;
        font-size: 20px;

    }

    .c {
        height: 500px;
        color: black;
        text-align: center;
        background-color:#fff3dc;
        /* background-image: url(../IP/img/d1.jpg); */
        padding-left: 30px;
    }

    .l {
        color: black;
        padding-top: 20px;
    }
    form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  margin-top:350px;
}

form.example .button {
    background-color: #4CAF50; /* Green */
    border: 1px solid green;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: left;
   
    
}

.button:hover {
    background-color: #3e8e41;
}

form.example button {
    float: left;
    width: 11%;
    padding: 12px  ;
    background: black;
    color: white;
    font-size: 17px;
    border: 1px solid black;
    border-left: none;
    cursor: pointer;
    margin-top:350px;
   
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.fa-search:before {
    content: "\f002";
    margin:center;
}
</style>
</style>
</head>

<body>

    <div class="c">
        <div class="l">
            <h2>ตัวแทนสิทธิบัตรวว.(Patent Agent)</h2>
        </div>
        <table class="bb">
            <tr>
                <th>ชื่อตัวแทน</th>
                <th>พิจารณา</th>

            </tr>
            <tr>
                <td><? echo iconv("tis-620", "utf-8", $rows['agent']) ?></td>
                <td>ศน. และ ศนพ.</td>

            </tr>
            <tr>
                <td><? echo iconv("tis-620", "utf-8", $rows2['agent']) ?></td>
                <td>พิจารณาศนย. และเครื่องจักร</td>

            </tr>
            <tr>
                <td><? echo iconv("tis-620", "utf-8", $rows3['agent']) ?></td>
                <td>ศดช และ ศนก.</td>

            </tr>
            <tr>
                <td><? echo iconv("tis-620", "utf-8", $rows4['agent']) ?></td>
                <td>ศนก. และ ศนอ.</td>

            </tr>
            <tr>
                <td><? echo iconv("tis-620", "utf-8", $rows5['agent']) ?></td>
                <td>ศนท.</td>
            </tr>
            </div>
        </table>
  
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>

</form>
</body>

</html>