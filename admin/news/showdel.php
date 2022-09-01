<?



// $objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM banner where status='1' ");

?>

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
        img {
            margin-top: 30px;
            vertical-align: middle;
             border-style: none;
            margin-left: 30px;
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
            background: #67eb89;
            text-align: center;
             border-radius:3px 4px 0 0;
             padding:10px
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            text-align: left;
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
            margin-left:610px;
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
            display: inline;
            width: 130px;
            border-style: outset;
            background: #c32da9;
            text-align: center;
            margin-left: 800px;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color:red;
            border-radius:10px ;
        }
        .outset:active {
            background-color: #e356ca;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        .btn-warning {
            color:black;
           background-color: #ffc107;
           border-color: #ffc107;
           border-radius: 10px;
        }
        .btn-danger {
            color:black;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 10px;
        }
        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
            margin-left: 250px;
            margin-top: 10%;
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
    </style>
</head>


<h1 class="glow">Banner </h1>
<a onclick="location. href='indexadmin.php';">
        <p class="outset1">ย้อนกลับ</p>
    </a>
<a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=1&Submenu=addban'; ">
    <p class="outset">เพิ่มเเบนเนอร์</p>
</a><br><br>
<table class="center">
    <tr>
        <th>ลำดับ</th>
        <th class="th" >ชื่อรูปเเบนเนอร์ </th>
        <th>ตัวอย่าง</th>
        <th>แก้ไขข้อมูล </th>

        <th>ลบข้อมูล </th>



    </tr>
    <?
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['image']);


    ?>
        <tr>
            <td valign="top" style="text-align:left ;"><?php echo $info['ID_ban']; ?></td>
            <td valign="top"><?php echo $image; ?></td>
            <td valign="top"> <img id="showimg" src="../uploads/<?php echo $image ?>" style="height:150px; width:200px;  white;border:3px solid; border-radius: 25px;"></td>
            <td style="text-align:center ;"><a href='indexadmin.php?Menu=1&Submenu=editban&ID_ban=<?php echo $info['ID_ban']; ?>''><button type="button" class="btn btn-warning">Edit</button></a> </td>
            <td style="text-align:center ;"><a href='news/deleteban.php?ID_ban=<?php echo $info['ID_ban']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>

        </tr>
    <?php } ?>
</table>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>