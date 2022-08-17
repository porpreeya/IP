<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["agent"]);

$objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM ques ");

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        table{
            border: 0.5px solid black;
            border-collapse: collapse;
            background-color: white;
            width: 90%;
           
        }
        td {
            border: 0.5px solid black;
            border-collapse: collapse;
            background-color: white;
            
            
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            background: #ed9898;
            text-align: center;
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
            text-align: center;
        }

        p.outset {
            width: 130px;
            border-style: outset;
            background: #5cf2bf;
            text-align: center;
            margin-left: 63%;
            color: black;
            height: 40px;
            padding: 5px;
            outline-color: red;
        }
    </style>
</head>

<body>
    <h1 class="glow">ถาม-ตอบ</h1>
    <!-- <a href="#">
        <p class="outset">เพิ่มข้อมูลตัวเเทน</p>
    </a> -->
    <table class="center">
        <tr>
            <th>รหัส</th>
            <th style="width:300px;">อีเมล</th>
            <th class="th">คำถาม</th>
            <th style="width: 130px;">วันที่ถาม</th>
            <th class="th">คำตอบ</th>
            <th class="th">ชื่อผู้ตอบ </th>
            <th style="width: 130px;"> ตอบคำถาม </th>
            <th style="width: 100px;">ลบข้อมูล</th>

        </tr>
        <?
        while ($info = mssql_fetch_array($data)) {
            $mail = iconv("tis-620", "utf-8", $info['mail']);
            $question = iconv("tis-620", "utf-8", $info['question']);
            $response = iconv("tis-620", "utf-8", $info['response']);
            $date = iconv("tis-620", "utf-8", $info['date']);
            $nameans = iconv("tis-620", "utf-8", $info['nameans']);
            
        ?>
            <tr>
                <td style="text-align:center ;"><?php echo $info['ID_q']; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $question; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $response; ?></td>
                <td><?php echo $nameans; ?></td>
                 <td style="text-align:center ;"><a href='indexadmin.php?Menu=4&Submenu=addqa&ID_q=<?php echo $info['ID_q']; ?>'><button type="button" class="btn btn-warning">ตอบกลับ</button></a> </td>
                <td style="text-align:center ;"><a href='qa/deleteqa.php?ID_q=<?php echo $info['ID_q']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
               
            </tr>
        <?php } ?>
    </table>

</body>