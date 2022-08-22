<?

$data = mssql_query("SELECT * FROM ques WHERE status ='1' ");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .body {
            /* background-image: url(../IP/img/d.jpg); */
            background-color: white;
            height: 950px;
        }

        .input1[type=text],
        select,
        textarea,
        .input1[type=mail] {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(64, 170, 216);
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #fa4848f7;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #49c31d;
        }

        .container {
            border-radius: 5px;
            background-color: rgb(118 50 50 / 58%);
            padding: 20px;
            background: linear-gradient(rgb(224 204 184 / 48%));
        }

        .centered {
            text-align: center;
            width: 40%;
            height: 4%;
            border: double 5px rgb(241, 160, 160);
            border-radius: 5px;
        }

        .tb {
            border-collapse: collapse;
            width: 80%;
            justify-content: center;
            border-spacing: 30px;
            color: #000;
        }

        .td1 {
            background-color: #d2d2d2;
            border: 1px solid rgb(0, 0, 0);
            padding-left: 30px;
            font-size: 16px;
            height: 70px;
            width: 80%;
            color: #000;
        }

        .td2 {
            background-color: #ffffff;
            border: 1px solid rgb(0, 0, 0);
        }

        .ddiv {
            font-size: 12px;
        }

        .a1 {
            font-size: 14px;
        }

        .td3 {
            background-color: #ffffff;
            border: 1px solid rgb(0, 0, 0);
            padding-left: 30px;
            font-size: 16px;
            height: 70px;
            width: 80%;
            color: #000;
        }

        .box3 {
            width: 75%;
            height: 500px;
            /* -webkit-backdrop-filter: blur(10px); */
            /* backdrop-filter: blur(5px); */

            border-radius: 0.25rem;
            padding-left: 12%;
            align-items: center;
            /* box-shadow: 0 7px #999; */
            margin-top: 10px;
        }

        .c {
            height: 330px;
            color: black;
            background-color: blanchedalmond;
            /* background-image: url(../IP/img/d1.jpg); */

        }

        #main3 {
            background-color: #ffebcd;
            margin-left: auto;
            margin-right: auto;
            height: 600px;

        }

        .pagination4 a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;

        }

        .pagination4 a.active2 {
            background-color: dodgerblue;
            color: white;
        }

        .pagination4 {
            margin-top: 450px;
            margin-left: 150%;
            width: 100%;

        }
    </style>
</head>
<link rel="stylesheet" href="./css/style.css">

<body>
    <div class="c">

        <br>
        <br>
        <br>
        <div class="box3">
            <form action="../IP/question/question.php" method="post">
                <div class="container">
                    <h3>สอบถาม</h3><br>
                    <label for="text">อีเมล</label>
                    <input class="input1" type="mail" name="mail" placeholder="พิมพ์อีเมล...">
                    <label for="text">คำถาม</label>
                    <input class="input1" type="text" name="question" placeholder="พิมพ์คำถาม...">
                    <input type="submit" value="ส่ง">
                </div>
                <br>
                <br>
                <br>
                <div>
                    <?php
                    //เริ่ม
                    $allData = array();
                    while ($info = mssql_fetch_array($data)) {
                        // $question = iconv("tis-620", "utf-8", $info['question']);
                        // $date = iconv("tis-620", "utf-8", $info['date']);

                        array_push($allData, $info);
                    }
                    //echo '<pre>'.var_dump($allData).'</pre>' ;
                    $arrData = array_chunk($allData, 3);
                    ?>

                </div>
        </div>
    </div>
    <div id="main3">
        <br>

        <div class="shell">

            <div class="slider">
                <div class="slider-holder2">
                    <div class="jcarousel-container jcarousel-container-horizontal" style="/* display: block; */">
                        <div class="jcarousel-clip jcarousel-clip-horizontal">
                            <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 3900px;  height:550px; left: 0px;">
                                <?php for ($i = 0; $i < count($arrData); $i++) : ?>
                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="">
                                        <?php
                                        foreach ($arrData[$i] as $key => $val) {
                                            // echo '<pre>'.var_dump(iconv("tis-620", "utf-8", $val[0])).'</pre>' ;
                                        ?>
                                            <div class="box2">
                                                <table class="td1">
                                                    <tr>
                                                        <th>คำถาม</th>
                                                    </tr>
                                                    <tr>
                                                        <td>คำถาม :<a class="a1"><?php echo iconv("tis-620", "utf-8", $val[2]) ?></a>
                                                            <hr width="95%">
                                                            <div class="ddiv">
                                                                <p>วันที่สอบถาม:<?php echo  iconv("tis-620", "utf-8", $val[4]); ?></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <table class="td3">
                                                    <tr>
                                                        <th>คำตอบ</th>
                                                    </tr>
                                                    <tr>
                                                        <td>คำตอบ :<a class="a1"><?php echo  iconv("tis-620", "utf-8", $val[3]); ?></a>
                                                            <hr width="95%">
                                                            <div class="ddiv">
                                                                <p>วันที่ตอบ:<?php echo  iconv("tis-620", "utf-8", $val[6])  ?></p>
                                                            </div>
                                                            <div class="ddiv">
                                                                <p>ผู้ตอบ:<?php echo  iconv("tis-620", "utf-8", $val[7])  ?></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                            </div>
                                        


                                        <?php } ?>

                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
</body>
<div class="slider-navigation " ">
      <div class=" pagination4">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a class="active2" href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">&raquo;</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- จบ -->