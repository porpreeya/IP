<meta charset="UTF-8">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    table,
    p,
    a {
        font-family: 'K2D', sans-serif;
        text-decoration: none;
        margin-top: 10px;
        margin-right: auto;
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
        margin-left: 100px;
    }


    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-left: 1050px;
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
        margin-left: 550px;
        border-radius: 10px;
    }

    p.outset1 {
        display: inline;
        width: 130px;
        border-style: outset;
        background: #2c15b1;
        text-align: center;
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



    .form {
        width: 1500px;
        height: 950px;
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
        margin-left: auto;
        margin-right: auto;

    }

    .box2 {

        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: #f99f37;
        border-radius: 0.25rem;
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

    input[type=date],
    [type=number],
    input[type=ddmmyy] {
        margin: 10px;
        text-align: center;
        min-width: 200px;
        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 14px;
        font-weight: 400;
        margin-top: 20px;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type=text] {

        height: 39px;
        padding: 0px 10px;
        background-color: rgb(255 255 255);
        border: none;
        display: inline;
        color: #303030;
        font-size: 14px;
        font-weight: 400;
        float: left;
        text-align: center;
        border-radius: 5px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type="file"i] {
        margin: 20px;
        width: 190px;
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
        margin-top: 20px;
        display: inline;
        text-align: center;
    }


    label:before,
    select option,
    select {
        min-width: 200px;
        text-align: center;
        padding: 1em;
        line-height: 1.4;
        float: left;
        background-color: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        text-align: center;
        font-size: 13px;
        display: inline;
    }
</style>

<body>

    <script type="text/javascript">
        // window.top === window && ! function() {
        //     var e = document.createElement("script"),
        //         t = document.getElementsByTagName("head")[0];
        //     e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e)

        // }();
        function selectday() {}
    </script>
    <div class="body">
        <h1 class="glow">การจดทะเบียนทรัพย์สินทางปัญญา</h1>
        <br>
        <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage'; ">
            <p class="outset1">ย้อนกลับ</p>
        </a><br><br><br>
        <form action="manage/storemanage.php" method="post" enctype="multipart/form-data">
            <div class="form">
                <br>
                <table class="center">
                    <table class="center1">
                        <tbody>
                            <tr>
                                <th align="left" width="70%" class="glow1"> &nbsp; &nbsp;ประเภทการจดทะเบียน</th>
                                <th class="th">
                                    <input type="radio" id="html" name="type" value="1">
                                    &nbsp; <label for="html">สิทธิบัตรการประดิษฐ์</label>
                                    &nbsp; <input type="radio" id="css" name="type" value="2">
                                    &nbsp; <label for="css">สิทธิบัตรการออกแบบผลิตภัณฑ์</label>
                                    <input type="radio" id="css" name="type" value="3">
                                    &nbsp; <label for="css">อนุสิทธิบัตร</label>
                                    <input type="radio" id="css" name="type" value="4">
                                    <label for="css">การจดทะเบียนเครื่องหมายการค้า</label>
                                    <br><input type="radio" id="css" name="type" value="5">
                                    &nbsp; <label for="css">การจดทะเบียนเครื่องหมายรับรอง</label>
                                    <input type="radio" id="css" name="type" value="6">
                                    &nbsp; <label for="css">การจดทะเบียนเครื่องหมายบริการ</label>
                                    <input type="radio" id="css" name="type" value="7">
                                    &nbsp; <label for="css">การขึ้นทะเบียนพันธุ์พืช</label>
                                    <input type="radio" id="css" name="type" value="8">
                                    &nbsp; <label for="css">เครื่องหมายร่วม</label>
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
                                    <div class="container" style=" margin-right:10px; ">
                                        <input type="number" id="number" c placeholder="000000" name="numfeduest" required="" value="2">
                                    </div>
                                </td>

                                <th>วันที่ยื่นขอ:</th>
                                <td>
                                    <div class="container" style=" margin-right:30px; ">
                                        <input type="date" id="ddmmyy" name="offer" onchange="selectday()" value="04/09/2022">
                                        <div id="result"></div>
                                </td>

                                <th>เเบบพิมพ์คำขอสิทธิบัตร<br>/อนุสิทธิบัตร จดทะเบียน: </th>
                                <td>
                                    <div class="container" style="text-align:center; margin-right:30px; margin-left: 20px;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                        <input type="file" id="myfile" name="form">
                                </td>
                                <th>สำหรับแอดมิน</th>
                                <td>
                                    <div class="container" style="text-align:center;">
                                        <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                        <input type="file" id="myfile" name="admin[]" multiple="multiple">
                                </td>
                            </div>
                        </tr>
                    </table>


                    <table>
                        <tr class="tr"><br>
                            <div class="container">

                                <th>ตัวเเทน</th>
                                <td>
                                    <div class="container" style=" margin-left: 40px; margin-right:20px">
                                        <input type="text" id="number" placeholder="" name="agent" required="" value="5545">
                                    </div>
                                </td>

                                <th>เลขทะเบียน</th>
                                <td>
                                    <div class="container" style=" margin-right:30px">
                                        <input type="number" id="number" placeholder="000000" name="numregister" required="" value="2">
                                    </div>
                                </td>

                                <th>วันที่ออกเลขทะเบียน</th>
                                <td>
                                    <div class="container" style="margin-left: 40px; margin-right: 70px;">
                                        <input type="date" id="ddmmyy" onchange="selectday()" value="04/09/2022">
                                        <div id="result"></div>
                                </td>
                                <?
                                $data = mssql_query("SELECT * FROM tb_kind");
                                ?>
                                <th>ชนิด</th>
                                <td class="tr">
                                    <div class="container" style="margin-left: 45px;">
                                        <select name="kind">

                                            <option selected="" value="">--กรุณาเลือก-- </option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['kinds']) ?></option>
                                            <?php } ?>
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
                                    <div class="container" style=" margin-left: 40px; margin-right:20px">
                                        <input type="text" id="number" placeholder="" name="title" required="" value="มา">
                                    </div>
                                </td>

                                <th>ผู้ทรงสิทธิ</th>
                                <td>
                                    <div class="container" style=" margin-left: 20px; margin-right:90px">
                                        <input type="text" id="number" placeholder="xxx" name="holdre" required="" value="มา">
                                    </div>
                                </td>

                                <th>กลุ่ม</th>
                                <td>
                                    <?
                                    $data = mssql_query("SELECT * FROM tb_team  ");
                                    ?>
                                    <div class="container" style="margin-left: 100px; margin-right:75px">
                                        <select name="team">

                                            <option selected="" value="">--กรุณาเลือก-- </option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['team']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>

                                <th>สังกัด</th>
                                <td>
                                    <div class="container" style="margin-left: 45px;">
                                        <?
                                        $data = mssql_query("SELECT * FROM tb_affiliation");
                                        ?>
                                        <select name="affiliation">
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['affiliation']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>

                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">
                                <th>หน่วยงาน<br>ภายนอก</th>
                                <td>
                                    <div class="container" style="  margin-left:30px; margin-right:20px; ">
                                        <input type="text" id="number" placeholder="" name="agency" value="มา">
                                    </div>
                                </td>
                                <th>ผู้ประดิษฐ์<br>(1คน)</th>
                                <td>
                                    <div class="container" style=" margin-left: 20px; margin-right:72px">
                                        <?
                                        $data = mssql_query("SELECT * FROM tb_inventor");
                                        ?>
                                        <select name="inventor">
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['inventor']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>

                                <th>ผู้ประดิษฐ์<br>(1-15)</th>
                                <td>

                                    <div class="container" style=" margin-left: 75px; margin-right:48px">
                                        <?
                                        $data = mssql_query("SELECT * FROM tb_inventors");
                                        ?>
                                        <select name="inventors">
                                            <option selected="" value="">--กรุณาเลือก--
                                            </option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['inventors']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>

                                <th>ชื่อโครงการ<br>(กตป.)</th>
                                <td>
                                    <div class="container" style=" margin-left: 38px; margin-right:33px">
                                        <input type="text" id="number" placeholder="" name="framename" required="" value="มา">
                                    </div>
                                </td>
                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">
                                <th>รหัสโครง<br>การวิจัย<br>บริการวิจัย</th>
                                <td>
                                    <div class="container" style=" margin-left:15px; margin-right:18px;">
                                        <input type="number" id="number" placeholder="0" name="projectcode" required="" value="5">
                                    </div>
                                </td>
                                <th>คู่สัญญา<br>โครงการ</th>
                                <script>
                                    //เรียกใช้ฟังก์ชั่น
                                    function fn_post_value() {
                                        //รับค่าจากตัวเลือก
                                        var value_select = $("#select_value").val();
                                      
                                        //พ่นค่าของตัวเลือกไปที่เป้าหมาย
                                        //#get_value ไอดีของเป้าหมาย
                                        $("#get_value").val(value_select);
                                    }
                                </script>
                                <td>
                                    <div id="box" class="container" style="  margin-left:25px; margin-right:70px;">
                                        <input type="text" id="get_value"" placeholder="" name=" contract" required="" value="">

                                    </div>
                                    <?
                                    $data = mssql_query("SELECT * FROM tb_contract");
                                    ?>
                                    <div class="container" style="margin-left: 70px; margin-right:75px min-width:20px; ">
                                        <span><select id="select_value" onchange="fn_post_value()" name="team" style="width:20px; min-width: 20px; height:39px;">
                                                <option selected="" value="">--กรุณาเลือก-- </option>
                                                <?
                                                while ($info = mssql_fetch_array($data)) {
                                                ?>
                                                    <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['contract']) ?></option>
                                                <?php } ?>
                                            </select></span>
                                </td>

                                <th>ประเภท<br>โครงการ</th>
                                <td>
                                    <?
                                    $data = mssql_query("SELECT * FROM tb_genus");
                                    ?>
                                    <div class="container" style="  margin-left:75px; margin-right:60px">
                                        <select name="genus">
                                            <option selected="" value="">กรุณาเลือก</option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['genus']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>

                                <th>เเนบเอกสาร<br>โครงการ</th>
                                <td>
                                    <div class="container" style="text-align:center;">
                                        <div class="container" style=" margin-left:10px; ">
                                            <label for="myfile">กรุณาเลือกไฟล์</label><br>
                                            <input type="file" id="myfile" name="attachment[]" multiple="multiple">
                                </td>



                            </div>
                        </tr>
                    </table>

                    <table>
                        <tr class="tr"><br>
                            <div class="container">
                                <th>ประเภทการ<br>ใช้ประโยชน์</th>
                                <td>
                                    <?
                                    $data = mssql_query("SELECT * FROM tb_benefit");
                                    ?>
                                    <div class="container" style=" margin-left:25px; margin-right:25px">
                                        <select name="benefit">
                                            <option selected="" value="">--กรุณาเลือก--</option>
                                            <?
                                            while ($info = mssql_fetch_array($data)) {

                                            ?>
                                                <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['benefit']) ?></option>
                                            <?php } ?>
                                        </select>
                                </td>
                                <th>ผู้นำผลงาน<br>วิจัยไปใช้<br>ประโยชน์</th>
                                <class="tr">
                                    <td>
                                        <div class="container" style="  margin-left:15px; margin-right:40px">
                                            <input type="text" id="number" placeholder="" name="lead" required="" value="มา">
                                        </div>
                                    </td>

                                    <th>สถานะอัพเดท<br>ปัจจุบัน</th>
                                    <td>
                                        <?
                                        $data = mssql_query("SELECT * FROM tb_sta");
                                        ?>
                                        <div class="container" style="  margin-left:60px; margin-right:35px">
                                            <select name="sta">
                                                <option selected="" value="">--กรุณาเลือก--
                                                </option>
                                                <?
                                                while ($info = mssql_fetch_array($data)) {

                                                ?>
                                                    <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['sta']) ?></option>
                                                <?php } ?>

                                            </select>
                                    </td>

                                    <th>หมายเหตุ</th>
                                    <td>
                                        <div class="container" style="  margin-left:47px; ">
                                            <input type="text" id="number" placeholder="" name="note" required="" value="มา">
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
    </div>
    </table>

</body>