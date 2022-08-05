<?
$sql       = "SELECT *FROM tb_IP ";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
?>
<style>
    .body {
        background-image: url(../IP/img/d.jpg);
        /* background-color: wheat; */
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
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        background-color: rgb(255 190 167);
        border-radius: 0.25rem;

        align-items: center;
        box-shadow: 0 7px #999;
    }

    .box3 {
        width: 75%;
        height: 900px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        background-color: #e77a7a66;
        border-radius: 0.25rem;
        padding-left: 12%;
        align-items: center;
        box-shadow: 0 7px #999;
    }

    .box4 {
        width: 85%;
        height: 175px;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        background-color:rgb(255 238 209);
        border-radius: 0.25rem;
        font-size: 14px;
        align-items: center;
        box-shadow: 0 7px #999;
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

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;

    }

    .pagination a.active {
        background-color: dodgerblue;
        color: white;
    }

    .pagination {

        margin-left: 62%;
        width: 40%;
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
</style>
<div class="body">

    <br>
    <div class="shell"><br>
        <form action="/action_page.php">

            <div class="box3">
                <br>
                <div class="box">

                    <h3 align="left" class="tt">เงื่อนไขการเเสดงผล</h3>
                    <br>
                </div>

                <div class="box2">
                    <br>
                    <table>
                        <tr>
                            <td><input type="radio" id="html" name="fav_language" value="HTML">
                                  <label for="html">ช่วงเวลา</label><br></td>
                            <td ><input type="date" style="font-size:15px ;"></td>
                            <td >ถึง</td>
                            <td><input type="date" style="font-size:15px ;"></td>
                        </tr>

                    </table>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td ><input type="radio" id="css" name="fav_language" value="CSS">
                                  <label for="css">ค้นหาคำสงวน(Key word) </label><br></td>
                            <td >
                                <div class="container">
                                    <input type="text" id="number" style="width:500px; border: 1px solid black;" placeholder="" name="name" required>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td ><input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                  <label for="javascript">ค้นหาชื่อผู้ประดิษฐ์</label></td>
                            <td >
                                <div class="container">
                                    <input type="text" id="number" style="width:500px; border: 1px solid black;" placeholder="" name="name" required>
                            </td>
                        </tr>
                    </table>

                    <br>
                    <br>
                    <br><button class="button">ค้นหา</button>
                    <br>
                </div>
                <br>
                <br>
                <div class="box4">
                    <table class="table">
                        <tr>
                            <td >
                                <h4>ลำดับ:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['ID_ip']); ?></td>
                        </tr>

                        <tr>
                            <td >
                                <h4>ชื่อเรื่อง :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['name']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>ผู้ทรงสิทธิ์ :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['holdre']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr></tr>
                            <td >
                                <h4>วันที่จดเลขทะเบียน :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['datenumregister']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>รายละเอียด:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['attachment']); ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="box4">
                    <table class="table">
                        <tr>
                            <td >
                                <h4>ลำดับ:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['ID_ip']); ?></td>
                        </tr>

                        <tr>
                            <td >
                                <h4>ชื่อเรื่อง :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['name']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>ผู้ทรงสิทธิ์ :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['holdre']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>วันที่จดเลขทะเบียน :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['datenumregister']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>รายละเอียด:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['attachment']); ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="box4">
                    <table class="table">
                        <tr>
                            <td >
                                <h4>ลำดับ:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['ID_ip']); ?></td>
                        </tr>

                        <tr>
                            <td >
                                <h4>ชื่อเรื่อง :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['name']); ?></td>
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
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['holdre']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>วันที่จดเลขทะเบียน :</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['datenumregister']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td >
                                <h4>รายละเอียด:</h4>
                            </td>
                            <td class="td1"><? echo iconv("tis-620", "utf-8", $rows['attachment']); ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

        </form>

    </div>
</div>
</div>