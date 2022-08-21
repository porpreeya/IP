<meta charset="UTF-8">

<style>
    .tt {
        border: 8px solid #629cf2;
        width: 200px;
        border-radius: 45px;
        text-align: center;
        color: rgb(255, 255, 255);

        background-color: rgb(6, 45, 123);
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        margin: 0 auto;
    }

    .p {
        padding-left: 50px;
        padding-top: 10px;
        font-size: 20px;

    }

    .x {
        color: white;
        padding-top: 10px;
        height: 100px;
        font-size: 12px;
        background-color: black;
        ;
    }



    .dropdown-content a {
        color: black;
        padding: 12px 26px;
        text-decoration: none;
        display: block;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: black;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    .bg {
        margin-right: 10px;

        width: 30%;
        height: auto;
    }

    .c {


        color: black;
        text-align: center;


    }

    .tb {
        height: 500px;
        color: #000;
        background-image: url(../IP/img/d.jpg);
        padding-top: 50px;

    }

    .center {
        margin-left: auto;
        margin-right: auto;
        font-size: 16px;

    }

    .tr {

        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }


    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        /*Change the width as much as you like, but make sure 
    margin-left and margin-right + width = 100%*/
        margin-left: 400px;
        margin-top: 5px;
        margin-right: 130px;




    }

    .button:hover {
        background-color: #3e8e41
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button1 {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: red;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        /*Change the width as much as you like, but make sure 
    margin-left and margin-right + width = 100%*/
        margin-left: 200%;
        margin-top: 6px;
        margin: auto;
    }

    .button1:hover {
        background-color: red;
    }

    .button1:active {
        background-color: #d90d19;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .box {
        width: 80%;
        height: 450px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 0.25rem;
        margin: auto;
        align-items: center;
    }
    p.outset {
            width: 130px;
            border-style: outset;
            background: #2615b1;
            margin-left: 1000px;
            text-align: center;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color: red;
            border-radius: 10px;
        }
</style>

<div class="tb">
    <div class="box">

        <table class="center">
            <tr class="tr"><br>
                <th align="left" width="70%" class="tt">ข้อมูลตัวแทน</th>
                <th>
            </tr>
        </table>
        <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=3&Submenu=showagent'; ">
        <p class="outset    ">ย้อนกลับ</p>
        <?php
        //ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
        $ID = $_GET['ID'];
        $objDB = mssql_select_db("intelle");
        $data = mssql_query("SELECT * FROM consider WHERE ID='$ID'")
            or die(mssql_error());

        ?>
        <?php
        while ($info = mssql_fetch_array($data)) {
            $aname = iconv( "utf-8","tis-620", $info['aname']);
            $consider = iconv( "utf-8","tis-620", $info['consider']);

        ?>
        <form action="agent/updateagent.php?ID=<?php echo $info['ID']; ?>" method="post" enctype="multipart/form-data" class="form">
        <table style="width:80%" class="center">
            <tr>
                <th>ชื่อตัวแทน</th>
                <th>พิจารณา</th>

            </tr>

            <tr class="tr">
                <td><br>
                    <div class="container">
                    <input class="w3-input w3-border" name="aname" type="text" value="<?php echo $aname; ?>" />
                </td>
                <td><br>
                <input class="w3-input w3-border" name="consider" type="text" value="<?php echo $consider; ?>" />
                </td>

            </tr>
        </table>
        <br><br><br>
        <table>

            <th><button class="button">บันทึก</button></th>
            <th><button class="button1">ยกเลิก</button></th>

        </table>
        </form>
        <?php } ?>
    </div>
</div>



</html>