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

    h3 {
        padding: 0.5em;
        color: #494949;
        background: #fff5e9;
        border-left: solid 5px #ffaf58;
        width: 50%;
    }
</style>

<body>
    <?php
    //ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไข
    $ID = $_GET['ID'];
    // $objDB = mssql_select_db("intelle");
    $data = mssql_query("SELECT * FROM tb_enroll WHERE ID='$ID'")
        or die(mssql_error());

    ?>
    <div class="div">
        <h3>แก้ไขยื่นคำขอจดทะเบียนทรัพย์สินทางปัญญา</h3><br><?php
         while ($info = mssql_fetch_array($data)) {
            $name = iconv("tis-620", "utf-8", $info['name']);
            $lastname = iconv("tis-620", "utf-8", $info['lastname']);
            $rank = iconv("tis-620", "utf-8", $info['rank']);
            $mail = iconv("tis-620", "utf-8", $info['mail']);
            $phonenumber = iconv("tis-620", "utf-8", $info['phonenumber']);
            $affiliation = iconv("tis-620", "utf-8", $info['affiliation']);
            $note = iconv("tis-620", "utf-8", $info['note']);
            $type = iconv("tis-620", "utf-8", $info['type']);
            $inventionname = iconv("tis-620", "utf-8", $info['inventionname'])
                                                            ?>
            <form action="./enroll/updateenroll.php?ID=<?php echo $info['ID']; ?>" method="post" enctype="multipart/form-data">
                <label for="fname">ชื่อ</label>
                <input class="input" type="text" id="fname" name="name" required value="<?php echo $name; ?>">

                <label for="lname">นามสกุล</label>
                <input class="input" type="text" id="lname" name="lastname" required value="<?php echo $lastname; ?>">

                <label for="fname">ตำเเหน่ง</label>
                <input class="input" type="text" id="fname" name="rank" required value="<?php echo $rank; ?>">

                <label for="fname">E-mail</label>
                <input class="input" type="text" id="fname" name="mail" required value="<?php echo $mail; ?>">

                <label for="fname">เบอร์โทรศัพท์</label>
                <input class="input" type="text" style=" width: 20%;" name="phonenumber" required value="<?php echo $phonenumber; ?>">

                <label for="country">ตัวเเทนสังกัด</label>



                <select name="affiliation" style=" width: 25%; font: size 16px;" id="id_affiliation" onchange="fm_ID_affiliation(this.value)"> Answer 1
                    <option value="">--กรุณาเลือก--</option>
                    <?
                                                                $data3 = mssql_query("SELECT * FROM tb_affiliation");
                                                                while ($info3 = mssql_fetch_array($data3)) {
                                                                    $ss = "";
                                                                    if ($affiliation == $info3["ID"]) {
                                                                        $ss = "selected";
                                                                    }

                                                                    echo '<option value="' . $info3["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info3["affiliation"]) . '</option>';
                                                                } ?>

                </select>

                <label>ประเภทที่ยื่นจด</label>
                <select name="type" style=" width: 25%; font: size 16px;" id="id_type " onchange="fm_ID_type(this.value)">
                    <option selected="" value="" required>--กรุณาเลือก--</option>
                    <?
                                                                $data2 = mssql_query("SELECT * FROM tb_type");
                                                                while ($info2 = mssql_fetch_array($data2)) {
                                                                    $ss = "";
                                                                    if ($type == $info2["ID"]) {
                                                                        $ss = "selected";
                                                                    }

                                                                    echo '<option value="' . $info2["ID"] . '"  ' . $ss . '>' . iconv("tis-620", "utf-8", $info2["type"]) . '</option>';
                                                                } ?>

                </select>

                <br>
                <label for="fname">ชื่อที่เเสดงถึงผลิตภัณฑ์/การประดิษฐ์</label>
                <input class="input" type="text" style=" width: 30%;" id="fname" name="inventionname" required value="<?php echo $inventionname; ?>">

                <label for=" country">เอกสารยื่นจดทะเบียน</label> <label for="country" style="font-size:12px; color:red;">*สเเกนเป็นไฟล์PDF*</label>
                <!-- <p style="font-size:12px; color:red;">*สเเกนเป็นไฟล์PDF*</p> -->

                <input type="file" name="pdf_enroll" multiple>
                <br><label for="country">หมายเหตุ</label> <label for="country" style="font-size:12px; color:red;">*ถ้ามี*</label>
                <input class="input" type="text" style=" width: 40%;" id="fname" name="note" value="<?php echo $note; ?>">

                <input class="input" type="submit" value="Submit">
                <input class="cancel" type="reset" value="cancel">
            </form>
        <?php } ?>
    </div>


</body>

</html>