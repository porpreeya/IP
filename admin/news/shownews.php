<?
// $objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = "SELECT * FROM news where status='1' ";
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

        .th {
            width: 500px;
        }

        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
            margin-left: 150px;
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
<h1 class="glow">ข่าวประชาสัมพันธ์ด้านทรัพย์ทางปัญญา </h1>
    <a onclick="location. href='indexadmin.php';">
        <p class="outset1">ย้อนกลับ</p>
    </a>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=2&Submenu=addnews'; ">
        <p class="outset">เพิ่มข่าวประชาสัมพันธ์ด้านทรัพย์ทางปัญญา</p><br><br>
    </a>

    <table class="center">
        <tr>
            <th>ลำดับ</th>
            <th style="width: 300px;">ชื่อเรื่อง</th>
            <th class="th">ข่าว </th>
            <th style="width: 100px;">รูปข่าว</th>
            <th style="width: 100px;">ไฟล์ PDF</th>
            <th style="width: 100px;">วันที่</th>
            <th style="width: 100px;">ที่มา</th>
            <th style="width: 70px;">แก้ไขข้อมูล </th>
            <th style="width: 70px;">ลบข้อมูล </th>



        </tr>
        <?
     $i=1;
     if ($num > 0){} 
     while ($info = mssql_fetch_array($q))  {
            $news = iconv("tis-620", "utf-8", $info['news']);
            $image = iconv("tis-620", "utf-8", $info['image']);
            $pdf_news = iconv("tis-620", "utf-8", $info['pdf_news']);
            $title = iconv("tis-620", "utf-8", $info['title']);
            $datenews = iconv("tis-620", "utf-8", $info['datenews']);
            $source = iconv("tis-620", "utf-8", $info['source']);

        ?>
            <tr>
                <td valign="top" style="text-align:center ;"><?php echo $i; ?></td>
                <td valign="top"><?php echo $title; ?></td>
                <td><?php echo $news; ?></td>
                <td valign="top"><?php echo $image; ?></td>
                <td valign="top"><?php echo $pdf_news; ?></td>
                <td valign="top"><?php echo $datenews; ?></td>
                <td valign="top"><?php echo $source; ?></td>
                <td style="text-align:center ;"><a href='indexadmin.php?Menu=2&Submenu=editnews&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> </td>
                <td style="text-align:center ;"><a href='news/deletenews.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>

            </tr>
        <?php $i++; } ?>
    </table>

</body>