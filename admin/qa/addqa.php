<!DOCTYPE html>
<html>

<head>
    <title>เพิ่มข่าว</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; " />
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    
</head>
<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
$ID_q = $_GET['ID_q'];
// $objDB = mssql_select_db("intelle");
$data = mssql_query("SELECT * FROM ques WHERE ID_q='$ID_q'")
    or die(mssql_error());

?>
<style>
    * {
        box-sizing: border-box;
        
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 250px;
        margin-top: 30px;
    }

    input[type=reset] {
        background-color: red;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 100px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: burlywood;
        margin-left: 200px;
        margin-right: 200px;
        padding: 20px;
        padding-bottom: 20px;
    }

    .col-25 {
        float: center;
        width: 10%;
        margin-top: 6px;
        margin-left: 200px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    .glow {
        font-size: 26px;
        color: black;
        animation: glow 1s ease-in-out infinite alternate;
        margin-left: 200px;
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #f7d2e5, 0 0 25px #f7d2e5, 0 0 30px #f7d2e5, 0 0 40px #f7d2e5, 0 0 50px #f7d2e5;
        }

        to {
            text-shadow: 0 0 10px #fff, 0 0 15px #ffffff, 0 0 20px #ffffff, 0 0 25px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff, 0 0 50px #ffffff;
        }
    }

    .form {
        margin-left: 150px;
    }
    p.outset {
            width: 130px;
            border-style: outset;
            background: #2615b1;
            margin-left: 1160px;
            text-align: center;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color: red;
            border-radius: 10px;
        }
</style>
<body class="body">

<br>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=4&Submenu=showqa'; ">
        <p class="outset">ย้อนกลับ</p></a>

    <div class="container">
        <?php
        while ($info = mssql_fetch_array($data)) {
            $question = iconv("tis-620", "utf-8", $info['question']);
            $response = iconv("tis-620", "utf-8", $info['response']);
            $nameans = iconv("tis-620", "utf-8", $info['nameans']);
        ?>
            <form action="qa/updateqa.php?ID_q=<?php echo $info['ID_q']; ?>" class="form" method="POST" enctype="multipart/form-data">
                <h5><label for="subject">คำถาม</label></h5>
                <div class="col-25">
                </div>
                <div class="row">
                    <div class="col-75">
                    <input class="w3-input w3-border" name="question" type="text" value="<?php echo $question; ?>" />
                    </div>
                </div>
                <h5><label for="subject">คำตอบ</label></h5>
                <div class="col-25">
                </div>
                <div class="row">
                    <div class="col-75">
                        <textarea id="subject" name="response" placeholder="พิมพ์อะไรบางอย่าง" style="height:100px; width:750px"></textarea>
                    </div>
                </div>
                <label for="fname"><i class="fa fa-user"></i>ชื่อผู้ตอบ</label><br>
                <input type="text" id="fname" name="nameans" placeholder="..." style="width:84%;">
                <div class="row">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </form><?php } ?>
    </div>

</body>

</html>