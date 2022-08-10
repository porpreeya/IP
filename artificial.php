<?
$box2 = iconv("utf-8", "tis-620", $_REQUEST["title"]);
$box3 = iconv("utf-8", "tis-620", $_REQUEST["inventor"]);
$box4 = iconv("utf-8", "tis-620", $_REQUEST["title"]);
$box5 = iconv("utf-8", "tis-620", $_REQUEST["inventor"]);
$fromDate = iconv("utf-8", "tis-620", $_REQUEST["fromDate"]);
$toDate = iconv("utf-8", "tis-620", $_REQUEST["toDate"]);
$keyword = iconv("utf-8", "tis-620", $_REQUEST["keyword"]);
$search = iconv("utf-8", "tis-620", $_REQUEST["search"]);
$sql = "SELECT * FROM tb_IP ";
$key1 = "";
$key2 = "";
$key3 = "";
$key4 = "";
$key5 = "";
if ($keyword == '1') {
    $key1 = "checked='true'";
    $sql .= "where datenumregister >='$fromDate' and datenumregister <='$toDate'";
} else if ($keyword == '2') {
    $key2 = "checked='true'";
    $sql .= " where  title like '%$box2%'";
} else  if ($keyword == '3') {
    $key3 = "checked='true'";
    $sql .= " where inventor like '%$box3%'";
} else {
    $sql = "";
}
$objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");

if ($sql != "") {
    $data = mssql_query($sql);
}


?>
<style>
    .body {
        /* background-image: url(../IP/img/d.jpg); */
        background-color: white;
        height: 950px;
    }

    td,
    tr,
    th {
        /* width: 100%; */
        /* border: 2px solid black;
        border-collapse: collapse; */
        padding-left: 5px;
        color: black;
        padding: 5px;
    }

    table {

        margin-top: 3px;
        position: absolute;
        font-size: 16px;
    }

    .table {

        margin-top: 1px;
        position: absolute;
        font-size: 14px;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }


    .td1 {
        width: 600px;

        /* border: 1px solid black;
        border-collapse: collapse; */
    }

    .trr {
        /* border: 1px solid black;
        border-collapse: collapse; */
        text-align: center;
    }

    .box2 {
        width: 85%;
        height: 175px;
        /* -webkit-backdrop-filter: blur(10px); */
        /* backdrop-filter: blur(5px); */
        background-color: rgb(255 190 167);
        border-radius: 0.25rem;

        align-items: center;
        box-shadow: 0 7px #999;
    }

    .box3 {
        width: 75%;
        height: 900px;
        /* -webkit-backdrop-filter: blur(10px); */
        /* backdrop-filter: blur(5px);
        background-color: #e77a7a66; */
        border-radius: 0.25rem;
        padding-left: 12%;
        align-items: center;

    }

    .box4 {

        height: 175px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        background-color: #008dff4d;
        border-radius: 0.25rem;
        font-size: 14px;
        align-items: center;
        box-shadow: 0 7px #999;
        margin-top: 20px;
    }

    .tt {
        border: 3px solid #629cf2;
        width: 200px;
        border-radius: 30px;
        text-align: center;
        color: rgb(255, 255, 255);
        background-color: rgb(6, 45, 123);
        padding: 7px;
    }



    .button {
        padding: 7px 13px;
        font-size: 16px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #54b6cf;
        border: none;
        border-radius: 10px;
        box-shadow: 0 3px #999;
        margin-left: 85%;
    }

    .button:hover {
        background-color: #5a818b;
    }

    .button:active {
        background-color: #5a818b;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .pagination2 a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;

    }

    .pagination2 a.active2 {
        background-color: dodgerblue;
        color: white;
    }

    .pagination2 {
        margin-top: 100px;
        margin-left: 100%;
        width: 100%;

    }
</style>
<div class="body">

    <br>
    <div class="shell"><br>

        <form action="" method="POST">

            <div class="box3">
                <br>
                <div class="box">

                    <h3 align="left" class="tt">เงื่อนไขการเเสดงผล </h3>
                    <br>
                </div>

                <div class="box2">
                    <br>
                    <table>

                        <tr>
                            <td><input <?php echo $key1 ?> type="radio" id="html" name="keyword" value="1">
                                  <label for="html">ช่วงเวลา</label><br></td>
                            <td><input id="date2" type="date" name="fromDate" style="font-size:15px ;" value="<?php echo $_REQUEST["fromDate"] ?>"></td>
                            <td>ถึง</td>
                            <td><input id="date" type="date" name="toDate" style="font-size:15px ;" value="<?php echo $_REQUEST["toDate"] ?>"></td>
                        </tr>

                    </table>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="css" <?php echo $key2 ?> name="keyword" value="2">
                                  <label for="css">ค้นหาคำสงวน(Key word) </label><br>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" id="title" name="title" value="<?php echo $_REQUEST["title"] ?>" style="width:500px; border: 1px solid black;" placeholder="">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td><input type="radio" id="javascript" <?php echo $key3 ?> value="3" name="keyword">
                                  <label for="javascript">ค้นหาชื่อผู้ประดิษฐ์</label></td>
                            <td>
                                <div class="container">
                                    <input type="text" id="inventor" name="inventor" value="<?php echo $_REQUEST["inventor"] ?>" style="width:500px; border: 1px solid black;" placeholder="">
                            </td>
                        </tr>
                    </table>

                    <br>
                    <br>
                    <br><button class="button" type="submit">ค้นหา</button>
        </form>
        <br>

        <br>
        <br>
        <?php
        while ($info = mssql_fetch_array($data)) {
            $title = iconv("tis-620", "utf-8", $info['title']);
            $holdre = iconv("tis-620", "utf-8", $info['holdre']);
            $datenumregister = iconv("tis-620", "utf-8", $info['datenumregister']);
            $attachment = iconv("tis-620", "utf-8", $info['attachment']);

        ?>
            <!-- <div class="slider">
                <div class="slider-holder2">
                    <ul>
                        <li> -->
            <div class="box4">
                <table class="table">
                    <tr>
                        <td>
                            <h4>ลำดับ:</h4>
                        </td>
                        <td class="td1"><?php echo $info['ID_ip']; ?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4>ชื่อเรื่อง :</h4>
                        </td>
                        <td class="td1"><?php echo $title; ?></td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <table class="table">
                    <tr>
                        <td>
                            <h4>ผู้ทรงสิทธิ์ :</h4>
                        </td>
                        <td class="td1"><?php echo $holdre; ?></td>
                    </tr>
                </table>
                <br>
                <br>

                <table class="table">
                    <tr></tr>
                    <td>
                        <h4>วันที่จดเลขทะเบียน :</h4>
                    </td>
                    <td class="td1"><?php echo $datenumregister; ?></td>
                    </tr>
                </table>
                <br>
                <br>
                <table class="table">
                    <tr>
                        <td>
                            <h4>รายละเอียด:</h4>
                        </td>
                        <td class="td1"><?php echo $attachment; ?></td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <!-- </li>
                    </ul>
                </div>
            </div> -->

        <br>
        <!-- <div class="slider-navigation " ">
      <div class=" pagination2">

                <!-- <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li> -->
        <!-- <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a class="active2" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div> -->
        <!-- </div> -->


    </div>
    <script src="js/jquery-1.4.2.min.js"></script>
    <script>
        $('#html').click(function() {
            var len = $(this).val();
            if (len == "1") {
                $("#title").attr("disabled", true);
                $("#inventor").attr("disabled", true);
                $("#date").attr("disabled", false);
                $("#date2").attr("disabled", false);
            }
        });
        $('#css').click(function() {

            var len = $(this).val();
            // alert(len);
            if (len == "2") {
                $("#title").attr("disabled", false);
                $("#inventor").attr("disabled", true);
                $("#date").attr("disabled", true);
                $("#date2").attr("disabled", true);
            }
        });
        $('#javascript').click(function() {
            var len = $(this).val();
            if (len == "3") {
                $("#title").attr("disabled", true);
                $("#inventor").attr("disabled", false);
                $("#date").attr("disabled", true);
                $("#date2").attr("disabled", true);
            }
        });
    </script>
</div>