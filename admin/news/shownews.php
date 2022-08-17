<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["agent"]);

$objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM news where status='1' ");

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        table,
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
    outline-color:red;
        }
    </style>
</head>

<body>
    <h1 class="glow">News </h1>
    <a  onclick="location. href='indexadmin.php?Menu=2&Submenu=addnews';">
        <p class="outset">เพิ่มข่าว</p>
    </a>
    <table class="center">
        <tr>
            <th>รหัส</th>
            <th class="th">ข่าว </th>
            <th>รูปข่าว</th>
            <th>แก้ไขข้อมูล </th>
            <th>ลบข้อมูล </th>
            


        </tr>
        <?
        while ($info = mssql_fetch_array($data)) {
            $news = iconv("tis-620", "utf-8", $info['news']);
            $image = iconv("tis-620", "utf-8", $info['image']);


        ?>
            <tr>
                <td style="text-align:center ;"><?php echo $info['ID']; ?></td>
                <td><?php echo $news; ?></td>
                <td><?php echo $image; ?></td>
                <td style="text-align:center ;"><a href='#'><button type="button" class="btn btn-warning">Edit</button></a> </td>
                <td style="text-align:center ;"><a href='news/deletenews.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
                
            </tr>
        <?php } ?>
    </table>

</body>