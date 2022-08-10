<? 

$data = mssql_query("SELECT * FROM ques ")
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'K2D', sans-serif;
        }

        .input1[type=text],
        select,
        textarea,.input1[type=mail] {
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
            width: 100%;
            justify-content: center;
            border-spacing: 30px;
        }

        .td1 {
            background-color: #d2d2d2;
            border: 1px solid rgb(0, 0, 0);
            padding-left: 30px;
            font-size: 16px;
            height: 80px;
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
            height: 80px;
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
            height: 550px;
            color: black;
             background-color:blanchedalmond;
            /* background-image: url(../IP/img/d1.jpg); */

        }
    </style>
</head>

<body>
    <div class="c">

        <br>
        <br>
        <br>
        <div class="box3">
            <form action="../IP/question/question.php" method="post">
                <div class="container">
                    <h3 >สอบถาม</h3><br>
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
        while ($info = mssql_fetch_array($data)) {
            $question = iconv("tis-620", "utf-8", $info['question']);
          

        ?>
                    <table class="tb">
                        <tr>
                            <td class="td1">คำถาม :<a class="a1"><?php echo  $question; ?></a>
                                <hr width="95%">
                                <div class="ddiv">
                                    <p>ถามเมื่อ:06/07/2565</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="tb">
                        <tr>
                            <td class="td3">คำตอบ :<a class="a1"></a>
                                <hr width="95%">
                                <div class="ddiv">
                                    <p>ตอบเมื่อ:06/07/2565</p>
                                </div>
                            </td>
                        </tr>
                    </table><br>
                    <?php } ?>
                    
                </div>
        </div>
    </div>
</body>