<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["agent"]);

$objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM ques ");

?>
<br>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .h5, h5 {
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
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
             border-radius:10px;
             color:black;   
             padding: 10px;
             border-bottom: 1px solid black;  
        }

        th {
            border-collapse: collapse;
            background:#679ceb;
            text-align: center;
             border-radius:3px 4px 0 0;
             padding:10px
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
            margin-left:600px;
            border-radius:10px ;
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


        .outset:active {
            background-color: #78d162;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>
    <h1 class="glow">ถาม-ตอบ</h1>
    <!-- <a href="#">
        <p class="outset">เพิ่มข้อมูลตัวเเทน</p>
    </a> -->
    <a onclick="location. href='indexadmin.php';">
        <p class="outset1">ย้อนกลับ</p>
    </a><br><br>
    <table class="center">
        <tr>
            <th>ลำดับ</th>
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
                
                
                 <td style="text-align:center ;">
                 <?
                if ($info["status"]=="0") {
                    ?>
                 <a href='indexadmin.php?Menu=4&Submenu=addqa&ID_q=<?php echo $info['ID_q']; ?>'><button type="button" class="btn btn-warning">ตอบกลับ</button></a> 
                 <?
                 }
                 ?>
                </td>
                <td style="text-align:center ;"><a href='qa/deleteqa.php?ID_q=<?php echo $info['ID_q']; ?>'><button type="button" class="btn btn-danger">ลบ</button></a></td>
               
            </tr>
        <?php } ?>
    </table>

</body>