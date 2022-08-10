<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["agent"]);

$objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
$data = mssql_query("SELECT * FROM tb_IP where agent like '%$box2%' or affiliation like '%$box2%'");

?>
<style>
    table {
        width: 30%;
        height: 200px;
        position: absolute;
        margin-top: 20px;
        margin-left: 515px;
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
        margin-top: 550px;
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
        width: 11%;
        padding: 12px;
        background: black;
        color: white;
        font-size: 17px;
        border: 1px solid black;
        border-left: none;
        cursor: pointer;
        margin-top: 550px;

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
        <div class="l">
            <h2>ตัวแทนสิทธิบัตรวว.(Patent Agent)</h2>
        </div>

        <table class="bb">

            <tr>
                <th>ชื่อตัวแทน</th>
                <th>พิจารณา</th>

            </tr>
            <tr>
                <?
                while ($info = mssql_fetch_array($data)) {
                    $agent = iconv("tis-620", "utf-8", $info['agent']);
                    $affiliation = iconv("tis-620", "utf-8", $info['affiliation']);

                ?>
                    <td style=" text-align:left ;"><?php echo $agent; ?></td>
                    <td><?php echo $affiliation; ?></td>

            </tr>

        <?php } ?>
        </table>


        <form class="example" action="" style="margin:auto;max-width:300px" method="POST">
            <input type="text" placeholder="Search.." name="agent">
            
            <button type="submit" ><i class="fa fa-search"></i></button>

        </form>
    </div>
</body>

</html>