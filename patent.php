<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["aname"]);
$box2 = iconv("utf-8", "tis-620", $_REQUEST["aname"]);
// $objDB = mssql_select_db("intelle");
$data = mssql_query("SELECT * FROM consider where aname like '%$box2%' or patent like '%$box2%' ");

?>
<style>
    table {
        width: 30%;
        height: 200px;
        position: absolute;
        margin-top: 20px;
        margin-left: 565px;
        border-collapse: collapse;
        background-color: white;

    }

    th{
        padding: 8px;
        text-align: center;
        border-bottom: 2px solid black;
        height: 30px;
        color: black;
        justify-content: center;
        font-size: 16px;
        background-color: #ffffff;
    }
    td {
        padding: 5px;
        text-align: center;
        border-bottom: 1px solid black;
        height: 30px;
        color: black;
        justify-content: center;
        background-color: #ffffff;

    }

    tr:hover {
        background-color: whitesmoke;
    }

    .b {
        color: black;
        text-align: center;
        padding-top: 35px;
        font-family: "Trebuchet MS";
    }

    .collapsible {
        cursor: pointer;
        padding: 18px;
        border: none;
        text-align: left;
        outline: none;
    }

    .d1 {
        padding: 8px;
    }

    .p {
        padding-left: 50px;
        padding-top: 20px;
        font-size: 20px;

    }

    .c {
        height: 650px;
        color: black;
        text-align: center;
        background-color: #fff3dc;
        /* background-image: url(../IP/img/d1.jpg); */
        padding-left: 30px;
    }

    .l {
        color: black;
        padding-top: 20px;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
        margin-top:20px;
    }

    form.example .button {
        background-color: #4CAF50;
        /* Green */
        border: 1px solid green;
        color: white;
        padding: 15px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        float: left;


    }

    .button:hover {
        background-color: #3e8e41;
    }

    form.example button {
        float: left;
        width: 12%;
        padding: 12px;
        background: black;
        color: white;
        font-size: 17px;
        border: 1px solid black;
        border-left: none;
        cursor: pointer;
        margin-top:20px;

    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    .fa-search:before {
        content: "\f002";
        margin: center;
    }
</style>
</style>
</head>

<body>

    <div class="c">
    <form class="example" action="" style="margin-left: 650px; margin:auto;max-width:300px" method="POST">
            <input type="text" placeholder="ค้นหา" name="aname" id="aname"value="<?php echo $_REQUEST["aname"] ?>">
            
            <button type="submit" ><i class="fa fa-search"></i></button>

        </form>   
        <div class="l">
            <h2>ตัวแทนสิทธิบัตร วว. (Patent Agent)</h2>
        </div>

        <table class="bb">

            <tr>
                <th>ชื่อตัวแทน</th>
                <th>พิจารณา</th>

            </tr>
            <tr>
                <?
                while ($info = mssql_fetch_array($data)) {
                    $aname = iconv("tis-620", "utf-8", $info['aname']);
                    $patent = iconv("tis-620", "utf-8", $info['patent']);

                ?>
                    <td style=" text-align:left ;"><?php echo iconv("tis-620", "utf-8", $info['aname']); ?></td>
                    <td><?php echo iconv("tis-620", "utf-8", $info['patent'])?></td>

            </tr>

        <?php } ?>
        </table>


       
    </div>
</body>

</html>