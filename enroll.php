<!DOCTYPE html>
<html>
<style>
    .input[type=text],
    select {
        width: 45%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 2%;
    }

    .input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 5%;
        font-size: 16px;
    }

    .input[type=submit]:hover {
        background-color: #45a049;
    }

    .cancel[type=reset]:hover {
        background-color: #af4c4c;
    }

    .cancel[type=reset] {
        width: 100%;
        background-color: #af4c4ce8;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 7%;
        color: black;
    }

    label {
        font-size: 15px;
    }

    h2 {
        padding: 0.5em;
        color: #494949;
        background: #fff5e9;
        border-left: solid 5px #ffaf58;
        width: 35%;
    }
</style>

<body>
    <div class="div">
        <h2>ยื่นคำขอจดทะเบียนทรัพย์สินทางปัญญา</h2><br>
        <form action="./admin/enroll/storaenroll.php" method="post" enctype="multipart/form-data">
            <label for="fname">ชื่อ</label>
            <input class="input" type="text" id="fname" name="name" placeholder="" required>

            <label for="lname">นามสกุล</label>
            <input class="input" type="text" id="lname" name="lastname" placeholder="" required>

            <label for="fname">ตำเเหน่ง</label>
            <input class="input" type="text" id="fname" name="rank" placeholder="" required>

            <label for="fname">E-mail</label>
            <input class="input" type="text" id="fname" name="mail" placeholder="" required>

            <label for="fname">เบอร์โทรศัพท์</label>
            <input class="input" type="text" style=" width: 25%;" id="fname" name="phonenumber" placeholder="" required>

            <label for="country">ตัวเเทนสังกัด</label>

            <?
            $data = mssql_query("SELECT * FROM tb_affiliation"); ?>
            <select name="patent" style=" width: 25%; font: size 16px;">
                <option selected="" value="" required>--กรุณาเลือก--</option>
                <?
                while ($info = mssql_fetch_array($data)) {

                ?>
                    <option value="<? echo $info['ID'] ?>"><? echo iconv("tis-620", "utf-8", $info['affiliation']) ?></option>
                <?php } ?>
            </select>

            <label>ประเภทที่ยื่นจด</label>
            <?
            $data2 = mssql_query("SELECT * FROM tb_type"); ?>
            <select name="type" style=" width: 25%; font: size 16px;">
                <option selected="" value="" required>--กรุณาเลือก--</option>
                <?
                while ($info2 = mssql_fetch_array($data2)) {

                ?>
                    <option value="<? echo $info2['ID_type'] ?>"><? echo iconv("tis-620", "utf-8", $info2['type']) ?></option>
                <?php } ?>
            </select>

            <br>
            <label for="fname">ชื่อที่เเสดงถึงผลิตภัณฑ์/การประดิษฐ์</label>
            <input class="input" type="text" style=" width: 40%;" id="fname" name="inventionname" placeholder="" required>

            <label for="country">เอกสารยื่นจดทะเบียน</label> <label for="country" style="font-size:12px; color:red;">*สเเกนเป็นไฟล์PDF*</label>
            <!-- <p style="font-size:12px; color:red;">*สเเกนเป็นไฟล์PDF*</p> -->

            <input type="file" name="pdf_enroll" multiple>
            <br><label for="country">หมายเหตุ</label> <label for="country" style="font-size:12px; color:red;">*ถ้ามี*</label>
            <input class="input" type="text" style=" width: 40%;" id="fname" name="note" placeholder="" required>

            <input class="input" type="submit" value="Submit" onclick="myFunction ()" value="display a warning box">
            <input class="cancel" type="reset" value="cancel">
        </form>
    </div>
    <script>
        function myFunction() {
            var x;
            var r = confirm("กรุณาตรวจสอบข้อมูลของคุณให้ครบถ้วน หากมีข้อผิดพลาดจะไม่สามารถเเก้ไขได้");
            if (r == true) {
                x = "\"ตกลง\"!";
            } else {
                x = "\"ตรวจสอบอีกครั้ง\"!";
            }
            document.getElementById("demo").innerHTML = x;
        }
    </script>

</body>

</html>