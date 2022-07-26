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

    .tb {
        background-color: #FFDAB9;
        height: 700px;
        color: #000;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
        font-size: 14px;
        color: black;
        text-align: center;
        height: 20px;
    }

    .tr {

        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .body {
        background-image: url(../IP/img/d.jpg);
        height: 600px;
        ;
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
        box-shadow: 0 5px #999;
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
        box-shadow: 0 5px #999;
        margin-left: 400px;
        margin-top: 5px;
    }

    .box {
        width: 80%;
        height: 500px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 0.25rem;
        margin: auto;
        align-items: center;
    }
</style>
<div class="body">
    <br>
    <br>
    <br>
    <div class="box">
        <br>
        <br>
        <br>
        <table class="center">
            <tr class="tr">
                <th align="left" width="70%" class="tt">ประเภทการจดทะเบียน</th>
                <th class="th">
                    <input type="radio" id="html" name="fav_language" value="HTML">
                      <label for="html">สิทธิบัตร</label>
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">อนุสิทธิบัตร</label>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">เครื่องหมายการค้า</label>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">พันธุ์พืช</label>
                <th>
            </tr>
        </table>
        <table style="width:60%" class="center">
            <tr class="tr">
                <th>วันที่ยื่นขอ</th>
                <th>เลขที่คำขอ</th>
                <th>เเบบพิมพ์คำขอสิทธิบัตร<br>/อนุสิทธิบัตร จดทะเบียน</th>
                <th>สำหรับแอดมิน</th>
                <th>ตัวเเทน</th>

            </tr>
            <tr class="tr">

                <td>
                    <input type="date" id="ddmmyy" onchange="selectday()" class="width:80% center">
                    <div id="result"></div>
                </td>
                <td>
                    <div class="container">
                        <input type="number" id="number" class="width:80% center" placeholder="000000" name="name" required>
                </td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                    <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                    <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required>
                </td>
            </tr>
            <tr class="tr">
                <th>เลขทะเบียน</th>
                <th>วันที่ออกเลขทะเบียน</th>
                <th>ชนิด</th>
                <th>ชื่อเรื่อง</th>
                <th>ผู้ทรงสิทธิ</th>
            </tr>
            <tr class="tr">
                <td>
                    <div class="container">
                        <input type="number" id="number" placeholder="000000" name="name" required class="width:80% center">
                </td>
                <td>
                    <input type="date" id="ddmmyy" onchange="selectday()" class="width:80% center">
                    <div id="result"></div>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">--กรุณาเลือก--
                        <OPTION value="1">การประดิษฐ์
                        <OPTION value="2">การออกแบบ
                        <OPTION value="3">การรับรอง
                        <OPTION value="4">การบริการ
                        <OPTION value="5">การขึ้นทะเบียน
                    </SELECT>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required>
                </td>

                <td>
                    <div class="container">
                        <input type="text" id="number" placeholder="xxx" name="name" required class="width:80% center">
                </td>
                </td>
            </tr>
            <tr class="tr">
                <th>กลุ่ม</th>
                <th>สังกัด</th>
                <th>ผู้ประดิษฐ์(1คน)</th>
                <th>ผู้ประดิษฐ์(1-15)</th>
                <th>ชื่อโครงการ(กตป.)</th>
            </tr>
            <tr class="tr">
                <td><SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">--กรุณาเลือก--
                        <OPTION value="1">อช.
                        <OPTION value="2">พช.
                        <OPTION value="3">บอ.
                    </SELECT>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">--กรุณาเลือก--
                        <OPTION value="1">ศนก.
                        <OPTION value="2">ศคช.
                        <OPTION value="3">ศนอ.
                        <OPTION value="3">ศนส.
                        <OPTION value="3">ศนพ.
                        <OPTION value="3">ศนว.
                        <OPTION value="3">ศนย.
                        <OPTION value="3">ศบท.
                        <OPTION value="3">ศพว.
                    </SELECT>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">ช่องกรอก
                        <OPTION value="1">คนที่1
                        <OPTION value="2">คนที่2
                        <OPTION value="3">คนที่3
                    </SELECT>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">ช่องกรอก
                        <OPTION value="1">คนที่1
                        <OPTION value="2">คนที่2
                        <OPTION value="3">คนที่3
                    </SELECT>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required>
                </td>
            </tr>
            <tr>
                <th>รหัสโครงการวิจัย บริการวิจัย</th>
                <th>คู่สัญญาโครงการ</th>
                <th>ประเภทโครงการ</th>
                <th>เเนบเอกสารโครงการ</th>
                <th>ประเภทการใช้ประโยชน์</th>
            </tr>
            <tr class="tr">
                <td>
                    <div class="container">
                        <input type="number" id="number" placeholder="0" name="name" required class="width:80% center">
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">กรุณาเลือก</OPTION>
                        <OPTION value="1">คนที่1
                        <OPTION value="2">คนที่2
                        <OPTION value="3">คนที่3
                    </SELECT>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">กรุณาเลือก</OPTION>
                        <OPTION value="1">การบริการวิจัย
                        <OPTION value="2">การบริการวิจัยจากแหล่งทุน
                        <OPTION value="3">mou
                        <OPTION value="3">เงินทุน วว.
                        <OPTION value="3">การถ่ายทอดเทคโนโลยี
                    </SELECT>
                </td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                    <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:80% center"> Answer 1
                        <OPTION SELECTED value="VANI">กรุณาเลือก</OPTION>
                        <OPTION value="1">การบริการวิจัย
                        <OPTION value="2">การถ่ายทอดเทคโนโลยี
                        <OPTION value="3">การอนุญาตให้ใช้สิทธิ
                        <OPTION value="3">mou
                    </SELECT>
                </td>



            </tr>
            <tr class="tr">
                <th>ผู้นำผลงานวิจัยไปใช้ประโยชน์</th>
                <th>สถานะอัพเดทปัจจุบัน</th>
                <th>หมายเหตุ</th>
            </tr>
            <tr class="tr">
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required>
                </td>
                <td>
                    <SELECT name="ICECREAM" class="width:70% center"> Answer 1
                        <OPTION SELECTED value="VANI">ช่องกรอก
                        <OPTION value="1">แก้ไข
                        <OPTION value="2">ชำระค่าธรรมเนียมประกาศโฆษณา
                        <OPTION value="3">ประกาศโฆษณา
                        <OPTION value="3">ยื่นตรวจสอบการประดิษฐ์
                        <OPTION value="3">ชำระค่าออกสิทธิบัตร
                        <OPTION value="3">ชำระค่าออกอนุสิทธิบัตร
                        <OPTION value="3">ออกสิทธิบัตร
                        <OPTION value="3">ออกอนุสิทธิบัตร
                        <OPTION value="3">ชำระค่าธรรมเนียมสิทธิบัตรรายปี
                        <OPTION value="3">ชำระค่าธรรมเนียมอนุสิทธิบัตรรายปี
                        <OPTION value="3">ไม่มีขั้นการประดิษฐ์ที่สูงขึ้น
                        <OPTION value="3">ชี้แจงข้อโต้แย้ง
                        <OPTION value="3">เปลี่ยนแปลงสิทธิ
                        <OPTION value="3">ละทิ้งคำขอ
                        <OPTION value="3">สิ้นอายุ
                    </SELECT>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required>
                </td>
            </tr>


    </div><br>
    <br>
    <br>
    </table>
    <table table style="width:20%" class="center">

        <th><button class="button">บันทึก</button></th>
        <th><button class="button1">ยกเลิก</button></th>

    </table>
    