<?
// $objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM tb_IP where status='1' ");

?>
<meta charset="UTF-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        table,
        td {
            border-collapse: collapse;
            background-color: #bebebe;
            border-radius: 30px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            color: black;
            padding: 20px;
            border-bottom: 2px solid black;
        }

        th {
            border-collapse: collapse;
            background: #ff3f3f;
            text-align: center;
            border-radius: 3px 3px 0 0;
            padding: 25px;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
        }

        .glow {
            font-size: 26px;
            color: black;
            text-align: center;
            animation: glow 1s ease-in-out infinite alternate;
            color: black;
            padding: 0.5em 0;
            border-top: solid 3px black;
            border-bottom: solid 3px black;
            width: 20%;
            margin-left: 600px;
            border-radius: 10px;
        }


        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #f7d2e5, 0 0 25px #f7d2e5, 0 0 30px #f7d2e5, 0 0 40px #f7d2e5, 0 0 50px #f7d2e5;
            }

            to {
                text-shadow: 0 0 10px #fff, 0 0 15px #ffffff, 0 0 20px #ffffff, 0 0 25px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff, 0 0 50px #ffffff;
            }
        }

        .th {
            width: 500px;
        }


        p.outset {
            width: 130px;
            border-style: outset;
            background: #2615b1;
            text-align: center;
            margin-left: 63%;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color: red;
            border-radius: 10px;
        }

        .outset:active {
            background-color: #e356ca;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .btn-warning {
            color: black;
            background-color: #ffc107;
            border-color: #ffc107;
            border-radius: 10px;
        }

        .btn-danger {
            color: black;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 10px;
        }

        .a {
            text-decoration: none;
        }

        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
            margin-left: 10px;
            margin-top: 2%;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color: red;
            border-radius: 8px;
        }

        .outset1:active {
            background-color: #442bd1;
            box-shadow: 0 4px #666;
            transform: translateY(4px);
        }

        p.outset {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #c32da9;
            text-align: center;
            margin-left: 1210px;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color: red;
            border-radius: 10px;
        }

        .outset:active {
            background-color: #f169da;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>

    <h1 class="glow">ข้อมูลทรัพย์สินทางปัญญา </h1>
    <a onclick="location. href='indexadmin.php';">
        <p class="outset1">ย้อนกลับ</p>
    </a>
    <a onclick="location. href='indexadmin.php?Menu=5&Submenu=addmanage'; ">
        <p class="outset">เพิ่มทรัพย์สินทางปัญญา</p><br><br>
    </a>
    <table class="center">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อทรัพย์สินทางปัญญา</th>
            <th>ชื่อผู้ประดิษฐ์ </th>
            <th>ชื่อตัวแทน</th>
            <th>โครงการ</th>
            <th>ประเภท</th>
            <th>สถานะ</th>
            <th>หน่วยงาน</th>
            <th>แก้ไขข้อมูล </th>
            <th>ลบข้อมูล </th>
        </tr>
        <?
        while ($info = mssql_fetch_array($data)) {

            $title = iconv("tis-620", "utf-8", $info['title']);
            $inventor = iconv("tis-620", "utf-8", $info['inventor']);
            $agent = iconv("tis-620", "utf-8", $info['agent']);
            $framename = iconv("tis-620", "utf-8", $info['framename']);
            $genus = iconv("tis-620", "utf-8", $info['genus']);
            $sta = iconv("tis-620", "utf-8", $info['sta']);
            $affiliation = iconv("tis-620", "utf-8", $info['affiliation']);


        ?>
            <tr>
                <td valign="top" style="text-align:left ;"><?php echo $info['ID_ip']; ?></td>
                <td><?php echo $title; ?></td>
                <td> <?
                        $result3 = mssql_query("SELECT * FROM tb_inventor where ID='$inventor'");
                        //$result = mssql_query($data);
                        $info3 = mssql_fetch_array($result3);
                        echo iconv("TIS-620", "UTF-8", $info3["inventor"]);

                        ?></td>
                <td>

                    <?php echo $agent; ?></td>
                <td><?php echo $framename; ?></td>
                <td>
                    <?
                    $result5 = mssql_query("SELECT * FROM tb_genus where ID='$genus'");
                    //$result = mssql_query($data);
                    $info5 = mssql_fetch_array($result5);
                    echo iconv("TIS-620", "UTF-8", $info5["genus"]);

                    ?>
                </td>

                <td> <?
                        $result = mssql_query("SELECT * FROM tb_sta where ID='$sta'");
                        //$result = mssql_query($data);
                        $info2 = mssql_fetch_array($result);
                        echo iconv("TIS-620", "UTF-8", $info2["sta"]);

                        ?></td>
                <td><?
                    $result4 = mssql_query("SELECT * FROM tb_affiliation where ID='$affiliation'");
                    //$result = mssql_query($data);
                    $info4 = mssql_fetch_array($result4);
                    echo iconv("TIS-620", "UTF-8", $info4["affiliation"]);

                    ?></td>
                   
                <td style="text-align:center ;"><a href='indexadmin.php?Menu=5&Submenu=editmanage&ID_ip=<?php echo $info['ID_ip']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> </td>
                <td style="text-align:center ;"><a href='manage/deletemanage.php?ID_ip=<?php echo $info['ID_ip']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
            </tr>
        <?php } ?>
    </table>

</body>