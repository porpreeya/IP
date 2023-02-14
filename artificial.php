<?

$box2 = iconv("utf-8", "tis-620", $_REQUEST["title"]);
$box3 = iconv("utf-8", "tis-620", $_REQUEST["inventor"]);
$box4 = iconv("utf-8", "tis-620", $_REQUEST["team"]);
$fromDate = iconv("utf-8", "tis-620", $_REQUEST["fromDate"]);
$toDate = iconv("utf-8", "tis-620", $_REQUEST["toDate"]);
$keyword = iconv("utf-8", "tis-620", $_REQUEST["keyword"]);
$search = iconv("utf-8", "tis-620", $_POST["search"]);
$search = iconv("utf-8", "tis-620", $_REQUEST["search"]);
$type = iconv("utf-8", "tis-620", $_REQUEST["type"]);

if ($keyword == '1') {
    $key1 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where datenumregister >='$fromDate' and datenumregister <='$toDate'";
} else if ($keyword == '2') {
    $key2 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where  title like '%$box2%'";
} else  if ($keyword == '3') {
    $key3 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where inventor like '%$box3%'";
} else  if ($keyword == '4') {
    $key5 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where team like '%$box4%'";
} else  if ($search != "") {
    $key4 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where title like '%$search%' or inventor like '%$search%'";
}

if ($type != "") {
    // $key6 = "checked='true'";
    // $key7 = "checked='true'";
    // $key8 = "checked='true'";
    // $key9 = "checked='true'";
    // $key10 = "checked='true'";
    // $key11 = "checked='true'";
    // $key12 = "checked='true'";
    // $key13 = "checked='true'";
    $sql = "SELECT * FROM tb_IP where type like '%$type%'";
}

if ($type == "" && $keyword == "" && count($_POST) > 0) {
    $sql = "SELECT * FROM tb_IP ";
}
// $objDB = mssql_select_db("intelle");
// $data = mssql_query("SELECT * FROM tb_IP ");
// echo $sql;
if ($sql != "") {
    $data = mssql_query($sql);
}


?>
<style>
    .td1 {
        width: 870px;
        height: 20px;
    }

    .body {
        /* background-image: url(../IP/img/d.jpg); */
        background-color: white;
        min-height: 1500px;
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
        width: 300px;

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
        height: 300px;
        /* -webkit-backdrop-filter: blur(10px); */
        /* backdrop-filter: blur(5px); */
        background-color: rgb(255 190 167);
        border-radius: 0.25rem;
        align-items: center;
        box-shadow: 0 7px #999;
    }

    .box3 {
        width: 60%;
        height: 350px;
        /* -webkit-backdrop-filter: blur(10px); */
        /* backdrop-filter: blur(5px);
        background-color: #e77a7a66; */
        border-radius: 0.25rem;
        padding-left: 23%;
        align-items: center;

    }

    .box4 {
        height: 230px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        background-color: #008dff4d;
        border-radius: 0.25rem;
        font-size: 14px;
        align-items: center;
        box-shadow: 0 7px #999;
        margin-top: 20px;
        width: 760px;
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

    .pagination5 a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;

    }

    .pagination5 a.active5 {
        background-color: dodgerblue;
        color: white;
    }

    .pagination5 {
        margin-top: 100px;
        margin-left: 100%;
        width: 100%;

    }

    .popup_flight_travlDil {
        margin: 70px auto;
        padding: 20px;
        background: #def8e8;
        border-radius: 5px;
        width: 50%;
        position: relative;
        transition: all 2s ease-in-out;
        color: #000;
        min-height: 60%;
    }

    .popup_flight_travlDil .close_flight_travelDl {
        position: absolute;

        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup_flight_travlDil .content_flightht_travel_dil {
        min-height: 170px;
        overflow: auto;
        margin-top: 30px;
    }

    .pu {
        padding-left: 140px;
    }

    .overlay_flight_traveldil {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
        z-index: 1;

    }

    .overlay_flight_traveldil:target {
        visibility: visible;
        opacity: 1;
    }

    #myBtn {
        position: relative;
        background-color: #04AA6D;
        border: none;
        font-size: 12px;
        color: black;
        padding: 5px;
        width: 50px;
        text-align: center;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
        border-radius: 12px;
        margin-left: 610px;
    }

    #myBtn:after {
        content: "";
        /* background: #90EE90; */
        display: block;
        position: absolute;
        padding-top: 300%;
        padding-left: 350%;

        margin-top: -120%;
        opacity: 0;
        transition: all 0.8s
    }

    #myBtn:active:after {
        padding: 0;
        margin: 0;
        opacity: 1;
        transition: 0s
    }

    input,
    textarea,
    select {
        font-family: Verdana, Arial, Sans-Serif;
        font-size: 10px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        padding: 7px;

    }

    .label1 {
        color: white;
        padding: 0.5em;
        display: inline-block;
        line-height: 1.3;
        background: #878787;
        vertical-align: middle;
        border-radius: 25px 0px 0px 25px;
    }

    #main3 {
        /* background-color: #ffebcd; */
        margin-left: auto;
        margin-right: auto;
        height: 1500px;

    }

    /* .glow1 {
        font-size: 26px;
        color: black;
        height: 80px;
        color: white;
        padding: 0.5em;
        display: inline-block;
        line-height: 1.3;

        vertical-align: middle;
        border-radius: 115px 20px 115px 20px
    } */
    .th {
        font-size: 14px;
    }

    .td2 {
        width: 80px;
    }

    .td3 {
        width: 650px;
    }
</style>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="stylesheet" href="./css/style.css">
<div class="body">

    <br>


    <form action="" method="POST">

        <div class="box3">
            <div class="box">

                <h3 align="left" class="tt">เงื่อนไขการเเสดงผล </h3>
                <br>
            </div>

            <div class="box2">
                <br>


                <table>

                    <table class="container" style="margin-left: 10px;">
                        <tbody>
                            <th class="th">
                                <h3>ประเภทการจดทะเบียน</h3>
                                <input <?php if ($type == 1) {
                                            echo "checked";
                                        } ?> style="margin-top:10px;" type="radio" id="type1" name="type" value="1">
                                &nbsp; <label for="type1">สิทธิบัตรการประดิษฐ์</label>
                                &nbsp; <input <?php if ($type == 2) {
                                                    echo "checked";
                                                } ?> type="radio" id="type2" name="type" value="2">
                                &nbsp; <label for="type2">สิทธิบัตรการออกแบบผลิตภัณฑ์</label>
                                <input <?php if ($type == 3) {
                                            echo "checked";
                                        } ?> type="radio" id="type3" name="type" value="3">
                                &nbsp; <label for="type3">อนุสิทธิบัตร</label>
                                <input <?php if ($type == 4) {
                                            echo "checked";
                                        } ?> type="radio" id="type4" name="type" value="4">
                                <label for="type4">การจดทะเบียนเครื่องหมายการค้า</label>
                                <br><input <?php if ($type == 5) {
                                                echo "checked";
                                            } ?> type="radio" id="type5" name="type" value="5">
                                &nbsp; <label for="type5">การจดทะเบียนเครื่องหมายรับรอง</label>
                                <input <?php if ($type == 6) {
                                            echo "checked";
                                        } ?> type="radio" id="type6" name="type" value="6">
                                &nbsp; <label for="type6">การจดทะเบียนเครื่องหมายบริการ</label>
                                <input <?php if ($type == 7) {
                                            echo "checked";
                                        } ?> type="radio" id="type7" name="type" value="7">
                                &nbsp; <label for="type7">การขึ้นทะเบียนพันธุ์พืช</label>
                                <input <?php if ($type == 8) {
                                            echo "checked";
                                        } ?> type="radio" id="type8" name="type" value="8">
                                &nbsp; <label for="type8">เครื่องหมายร่วม</label>
                            </th>

                        </tbody>
                    </table>
                    <br>
                </table><br><br><br><br>
                <hr><br>
                <div class="container" style="margin-left: 35px;">
                    <table>

                        <tr>
                            <td><input <?php echo $key1 ?> type="radio" id="html" name="keyword" value="1">
                                <label for="html">ช่วงเวลา</label><br>
                            </td>
                            <td><input id="date2" type="date" name="fromDate" style="font-size:12px ;" value="<?php echo $_REQUEST["fromDate"] ?>"></td>
                            <td>ถึง</td>
                            <td><input id="date" type="date" name="toDate" style="font-size:12px ;" value="<?php echo $_REQUEST["toDate"] ?>"></td>
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
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td><input type="radio" id="javascript" <?php echo $key3 ?> value="3" name="keyword">
                                <label for="javascript">ค้นหาชื่อผู้ประดิษฐ์</label>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" id="inventor" name="inventor" value="<?php echo $_REQUEST["inventor"] ?>" style="width:500px; border: 1px solid black;" placeholder="">
                                </div>
                            </td>
                        </tr>
                    </table>

                    <br>
                    <br>
                    <table>
                        <tr>
                            <td><input type="radio" id="teams" <?php echo $key5 ?> value="4" name="keyword">
                                <label for="team">ค้นหากลุ่มงาน/ศูนย์</label>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" id="team" name="team" value="<?php echo $_REQUEST["team"] ?>" style="width:500px; border: 1px solid black;" placeholder="">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br><button class="button" type="submit">ค้นหา</button>
                </div>
            </div>
        </div>
    </form>
    <br>

    <br>
    <br>


    <div id="main3">
        <div class="shell4">

            <?php
            //เริ่ม
            $allData = array();
            while ($info = mssql_fetch_array($data)) {
                // $question = iconv("tis-620", "utf-8", $info['question']);
                // $date = iconv("tis-620", "utf-8", $info['date']);

                array_push($allData, $info);
            }
            //echo '<pre>'.var_dump($allData).'</pre>' ;
            $arrData = array_chunk($allData, 5);
            ?>


            <div class="slider">
                <div class="slider-holder5">
                    <div class="jcarousel-container jcarousel-container-horizontal" style="/* display: block; */">
                        <div class="jcarousel-clip jcarousel-clip-horizontal">
                            <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 3900px;  height:1400px; left: 0px;">
                                <?php for ($i = 0; $i < count($arrData); $i++) : ?>
                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="">
                                        <?php
                                        foreach ($arrData[$i] as $key => $val) {
                                            // echo '<pre>'.var_dump(iconv("tis-620", "utf-8", $val[0])).'</pre>' ;
                                        ?>
                                            <div class="box4">
                                                <table class="table">
                                                    <tr>
                                                        <td valign="top" class="td2">
                                                            <h4>ชื่อเรื่อง :</h4>
                                                        </td>
                                                        <td valign="top" class="td3"><?php echo iconv("tis-620", "utf-8", $val[10]) ?></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <br>
                                                <table class="table">
                                                    <tr>
                                                        <td valign="top" class="td2">
                                                            <h4>ผู้ทรงสิทธิ์ :</h4>
                                                        </td>
                                                        <td valign="top" class="td1"><?php echo iconv("tis-620", "utf-8", $val[11]) ?></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <br>
                                                <table class="table">
                                                    <tr>
                                                        <td valign="top" class="td2">
                                                            <h4 style="min-width: 120px;">วันที่จดเลขทะเบียน :</h4>
                                                        </td>
                                                        <td class="td1"><?php echo iconv("tis-620", "utf-8", $val[8]) ?></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <br><br><a button id="myBtn" href="#popup_flight_travlDil<?php echo $val['ID_ip']; ?>"><span>รายละเอียดเพิ่มเติม</span></a>





                                            </div>
                                            <div id="popup_flight_travlDil<?php echo $val['ID_ip']; ?>" class="overlay_flight_traveldil">
                                                <div class="popup_flight_travlDil">

                                                    <a class="close_flight_travelDl" href="# popup_flight_travlDil<?php echo $val['ID_ip']; ?>">&times;</a>
                                                    <div class="content_flightht_travel_dil">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="tr2">
                                                                    <td>
                                                                        <h4>ลำดับ :
                                                                    </td>
                                                                    <td style="width:80%;"> <?php echo $val['ID_ip']; ?> </td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>ชื่อเรื่อง :
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[10]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>ผู้ทรงสิทธิ์ :
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[11]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>ผู้ประดิษฐ์ :
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[15]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>วันที่จดเลขทะเบียน :
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[8]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>สถานะ :
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[24]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>รายละเอียด :
                                                                    </td>
                                                                    <td><a id="file" class="outset1" href="uploadpdf/<?php echo $val[4] ?>" target="-blank">
                                                                            <h4 style="text-decoration: underline; color:blue">เรียกดู</h4>
                                                                        </a></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h4>หมายเหตุ :</h4>
                                                                    </td>
                                                                    <td><?php echo iconv("tis-620", "utf-8", $val[25]) ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>

                    </div>
                    <div class="slider-navigation5">
                        <div class=" pagination5">
                            <?php for ($i = 1; $i <= count($arrData); $i++) {
                                echo '<a href="#">' . $i . '</a>';
                            } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script>
    $('#html').click(function() {
        var len = $(this).val();
        if (len == "1") {
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", false);
            $("#date2").attr("disabled", false);
            $("#team").attr("disabled", true);
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
            $("#team").attr("disabled", true);
        }
    });
    $('#javascript').click(function() {
        var len = $(this).val();
        if (len == "3") {
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", false);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#teams').click(function() {
        var len = $(this).val();
        if (len == "4") {
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", false);
        }
    });
    $('#type1').click(function() {
        var len = $(this).val();
        if (len == "1") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type2').click(function() {
        var len = $(this).val();
        if (len == "2") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type3').click(function() {
        var len = $(this).val();
        if (len == "3") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type4').click(function() {
        var len = $(this).val();
        if (len == "4") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type5').click(function() {
        var len = $(this).val();
        if (len == "5") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type6').click(function() {
        var len = $(this).val();
        if (len == "6") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type7').click(function() {
        var len = $(this).val();
        if (len == "7") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
    $('#type8').click(function() {
        var len = $(this).val();
        if (len == "8") {
            $("#type").attr("disabled", false);
            $("#title").attr("disabled", true);
            $("#inventor").attr("disabled", true);
            $("#date").attr("disabled", true);
            $("#date2").attr("disabled", true);
            $("#team").attr("disabled", true);
        }
    });
</script>