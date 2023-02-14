<?
// $objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = "SELECT * FROM tb_enroll";
$q = mssql_query( $data );
$num = mssql_num_rows( $q );
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .h5,
        h5 {
            font-size: 1.25rem;
            margin-top: 20px;

        }

        .w3-bar .w3-button {
            padding: 15px;
            text-decoration: none;

        }

        table,
        td {
            border-collapse: collapse;
            background-color: #bebebe;
            border-radius: 30px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            color: black;
            border-bottom: 1px solid black;
            text-left: 5px;


        }

        th {
            border-collapse: collapse;
            background: #F68B71;
            text-align: center;
            border-radius: 3px 4px 0 0;
            padding: 10px
        }


        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
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
            width: 40%;
            margin-left: 450px;
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

        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
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
            margin-left: 930px;
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

        .outset1:active {
            background-color: #442bd1;
            box-shadow: 0 4px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>
    <h1 class="glow">คำยื่นขอจดทะเบียนทรัพย์สินทางปัญญา </h1>
    <a onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage';">
        <p class="outset1">ย้อนกลับ</p> <br>
    </a>

    <table class="center">
        <tr>
            <th>ลำดับ</th>
            <th style="width:10%;">ชื่อ</th>
            <th style="width:10%;">นามสกุล </th>
            <th style="width:5%; ">ตำเเหน่ง</th>
            <th style="width:10%;">อีเมล</th>
            <th style="width:10%;">เบอร์โทรศัพท์</th>
            <th style="width:5%;">ตัวเเทนสังกัด</th>
            <th style="width:15%;">ชื่อสิ่งประดิษฐ์ </th>
            <th style="width:10%;">ประเภทที่ยื่นจด </th>
            <th style="width:5%;">ไฟล์ที่เกี่ยวข้อง </th>
            <th style="width:15%;">หมายเหตุ </th>
            <th style="width:15%;">เเก้ไขข้อมูล </th>
            <th style="width:10%;">เพิ่มเข้าระบบทรัพย์สินทางปัญญา วว.</th>
            <th style="width:10%;">ลบข้อมูล </th>

        </tr>
        <?
        $i=1;
        if ($num > 0){} 
        while ($info = mssql_fetch_array($q)) {
            $name = iconv("tis-620", "utf-8", $info['name']);
            $lastname = iconv("tis-620", "utf-8",  $info['lastname']);
            $rank = iconv("tis-620", "utf-8",  $info['rank']);
            $mail = iconv("tis-620", "utf-8", $info['mail']);
            $phonenumber = iconv("tis-620", "utf-8",  $info['phonenumber']);
            $patent = iconv("tis-620", "utf-8",  $info['patent']);
            $note = iconv("tis-620", "utf-8", $info['note']);
            $type = iconv("tis-620", "utf-8",  $info['type']);
            $inventionname = iconv("tis-620", "utf-8",  $info['inventionname']);
            $affiliation = iconv("tis-620", "utf-8",  $info['affiliation']);
            $pdf_enroll = iconv("tis-620", "utf-8",  $info['pdf_enroll']);
        ?>
            <tr>
                <td valign="top" style="text-align:center ;"><?php echo $i; ?></td>
                <td valign="top"><?php echo $name; ?></td>
                <td><?php echo $lastname; ?></td>
                <td valign="top"><?php echo $rank; ?></td>
                <td valign="top"><?php echo $mail; ?></td>
                <td valign="top"><?php echo $phonenumber; ?></td>
                <td valign="top"><?

                                    $result1 = mssql_query("SELECT * FROM tb_affiliation where ID='$affiliation'");
                                    //$result = mssql_query($data);
                                    $info1 = mssql_fetch_array($result1);
                                    echo iconv("TIS-620", "UTF-8", $info1["affiliation"]);

                                    ?></td>
                <td valign="top"><?php echo $inventionname; ?></td>
                <td valign="top"><?

                                    $result2 = mssql_query("SELECT * FROM tb_type where ID='$type'");
                                    //$result = mssql_query($data);
                                    $info2 = mssql_fetch_array($result2);
                                    echo iconv("TIS-620", "UTF-8", $info2["type"]);

                                    ?>
                </td>
                <td valign="top"><?php echo $pdf_enroll; ?></td>
                <td valign="top"><?php echo $note; ?></td>

                <td style="text-align:center ;"><a href='indexadmin.php?Menu=10&Submenu=editenroll&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">edit</button></a> </td>
                <td style="text-align:center ;"><a href='indexadmin.php?Menu=5&Submenu=addmanage&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">insert </button></a> </td>
                <td style="text-align:center ;"><a href='enroll/deleteenroll.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>

            </tr>
        <?php $i++; }?>
    </table>

</body>