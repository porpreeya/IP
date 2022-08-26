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
        color: black;
        background-color: #22a128;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px white;
        /*Change the width as much as you like, but make sure 
margin-left and margin-right + width = 100%*/
        margin-left: 330px;
        margin-top: 5px;
        margin-right: 180px;
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
        color: black;
        background-color: red;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px white;
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
        height: 470px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color:#bebebe;
        border-radius: 20px;
        margin: auto;
        align-items: center;
        padding:30px;
    }
    .box2 {
        width: 90%;
        height: 400px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color:burlywood;
        border-radius: 20px;
        margin: auto;
        align-items: center;
        
    }
    .glow {
        font-size: 26px;
        color: black;
        margin-left: 200px;      
        color: white;
        padding: 0.5em;
        display: inline-block;
        line-height: 1.3;
        background: #878787;
        vertical-align: middle;
        border-radius: 25px 0px 0px 25px;
        
    }
    .glow:before {
        content: '●';
        color: black;
        margin-right: 8px;
    }
    button, input, select, textarea, optgroup {
        font: inherit;
        margin: 0;
        padding: 10px;
    }
    th {
        display: table-cell;
        vertical-align: inherit;
         font-weight: bold;
        text-align: internal-center;
        font-size: 24px;
    }
    p.outset {
    width: 130px;
    border-style: outset;
    background: #2615b1;
    margin-left: 1200px;
    text-align: center;
    color: white;
    height: 40px;
    padding: 5px;
    outline-color: red;
    border-radius: 10px;
}
    
</style>
    <h2 class="glow">ข้อมูลตัวแทน</h2><br><br>
    <a href="indexadmin.php?Menu=3&Submenu=showagent" style="text-decoration: none;" ">
    <p class="outset">ย้อนกลับ</p></a>
<div class="tb">
    <div class="box">
        
    <div class="box2">
        <!-- //ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข -->
           <?php $ID = $_GET['ID'];
            $objDB = mssql_select_db("intelle");
            $data = mssql_query("SELECT * FROM consider WHERE ID='$ID'")
                or die(mssql_error());

            ?>
            <?php
            while ($info = mssql_fetch_array($data)) {
                $aname = iconv("tis-620", "utf-8", $info['aname']);
                $consider = iconv("tis-620", "utf-8", $info['consider']);

            ?>
        <form action="agent/updateagent.php?ID=<?php echo $info['ID']; ?>" method="post" enctype="multipart/form-data" class="form">
            <table class="center">
                <tr class="tr">
                    
                    <th>
                </tr>
            </table>
            
            <table style="width:80%" class="center">
                <tr><br><br><br>
                    <th>ชื่อตัวแทน</th>
                    <th>พิจารณา</th>
                </tr>
                <tr class="tr">
                    <td><br>
                        <div class="container">
                            <input type="text" id="text" class="width:100% " placeholder="กรุณากรอกชื่อ" name="aname" required value="<?php echo $aname; ?>">
                    </td>
                    <td><br>
                        <input type="text" id="text" class="width:100% " placeholder="กรุณากรอกกลุ่ม" name="consider" required value="<?php echo $consider; ?>">
                    </td>

                </tr>
            </table>
            <br><br>
            <table>

                <th><button class="button" type="submit">บันทึก</button></th>
                <th><button class="button1" type="reset">ยกเลิก</button></th>

            </table>
        </form>
        <?php } ?>
    </div>
</div></div>
</div>



</html>