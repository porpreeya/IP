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
            border-collapse: collapse;
            background-color: #bebebe;
            border-radius: 30px;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
             border-radius:10px;
             color:black;   
        }

        th {
            border-collapse: collapse;
            background: #F68B71;
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
        }

        p.outset {
            width: 130px;
            border-style: outset;
            background: #8eff72;
            text-align: center;
            margin-left: 63%;
            color: black;
            height: 40px;
            padding: 5px;
            outline-color:red;
            border-radius:10px ;
        }
        .outset:active {
            background-color: #78d162;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
}
        .btn-warning {
            color:black;
           background-color: #ffc107;
           border-color: #ffc107;
           border-radius: 10px;
           padding: 10px 15px 10px 15px;
        }
        .btn-danger {
            color:black;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 10px;
            padding: 10px 12px 10px 12px;
            margin-right: 5px;
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
                <td style="text-align:center ;"><a href='indexadmin.php?Menu=2&Submenu=editnews&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> </td>
                <td style="text-align:center ;"><a href='news/deletenews.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
                
            </tr>
        <?php } ?>
    </table>

</body>