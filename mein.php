<?
// $objDB = mssql_select_db("intelle");
$data = mssql_query("SELECT TOP 7 * from banner ORDER BY ID_ban DESC");

?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<style>
  #main2 {
    background-color: #808080;
  }

  table {
    width: auto;
  }

  td,
  tr {
    /* border: 2px solid black;
    border-collapse: collapse; */
    padding-left: 5px;
    color: black;

  }

  table {
    width: auto;
    position: absolute;


  }

  table.center {
    margin-left: auto;
    margin-right: auto;
  }

  .p1 {
    text-indent: 20px;
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
    width: 20%;

  }

  .pagination2 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;

  }

  .pagination2 a.active2 {
    background-color: dodgerblue;
    color: white;
  }

  .pagination2 {
    margin-top: 100px;
    margin-left: 150%;
    width: 100%;

  }

  .pagination3 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;


  }

  .pagination3 a.active2 {
    background-color: dodgerblue;
    color: white;

  }

  .pagination3 {
    margin-top: 150px;
    margin-left: 150%;
    width: 100%;

  }

  .td1 {
    width: 870px;
    height: 20px;
  }

  .box2 {
    width: 85%;
    height: 180px;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(5px);
    background-color: #FFE8E8;
    border-radius: 0.25rem;

    align-items: center;
    box-shadow: 0 7px #999;
  }

  #myBtn {
    position: relative;
    background-color: #04AA6D;
    border: none;
    font-size: 10px;
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
    margin-left: 200px;
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

  .popup_flight_travlDil {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 2s ease-in-out;
    color: #000;
  }

  .popup_flight_travlDil .close_flight_travelDl {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }

  .popup_flight_travlDil .content_flightht_travel_dil {
    max-height: 30%;
    overflow: auto;

  }

  .pu {
    padding-left: 140px;
  }

  .pagination3 a.active3 {
    background-color: dodgerblue;
    color: white;
  }
</style>

<div class="shell2">
  <div class="slider">
    <div class="slider-holder">
      <ul>
        <?
        while ($info = mssql_fetch_array($data)) {
          $image = iconv("tis-620", "utf-8", $info['image']);


        ?>
          <li><img id="showimg" src="uploads/<?php echo $image ?>" style="width: 100%; height:100%"></li>

        <?php } ?>
        <script>
          var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
              var output = document.getElementById('showimg');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };
        </script>
      </ul>
    </div>
    <div class="slider-navigation">
      <ul>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>

      </ul>
    </div>
  </div>

  <div class="cl">&nbsp;</div>
</div>
<br>
<?

$data2 = mssql_query("SELECT TOP 18 * from news where status ='1' ORDER BY ID DESC ");
?>
<div id="main">
  <div class="shell">
    <div class="box">
      <h3>ข่าวประชาสัมพันธ์ด้านทรัพย์สินทางปัญญา</h3>
      <br>

    </div>
    <?
    $allData = array();
    while ($info = mssql_fetch_array($data2)) {
      $news = iconv("utf-8", "tis-620",  $info['news']);
      // $date = iconv("tis-620", "utf-8", $info['date']);

      array_push($allData, $info);
    }
    //echo '<pre>'.var_dump($allData).'</pre>' ;
    $arrData = array_chunk($allData, 6);
    ?>
    <div class="slider">
      <div class="slider-holder2">
        <ul>

          <?php for ($i = 0; $i < count($arrData); $i++) : ?>
            <li>
              <?php
              foreach ($arrData[$i] as $key => $val) {
                // echo '<pre>'.var_dump(iconv("tis-620", "utf-8", $val[0])).'</pre>' ;
              ?>
                <div class="box5">
                  <br>

                  <div class="entry">
                    <center>
                      <img id="showimg" src="uploads/<?php echo $val[2] ?> " height="120px">

                    </center><br>

                    <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $val[1]), "", 501); ?><br><a button id="myBtn" href="#popup_flight_travlDil<? echo$val["ID"]; ?>"><span>อ่านต่อ </span></a></p>
                  </div>
                  <div id="popup_flight_travlDil<? echo $val["ID"]; ?>" class="overlay_flight_traveldil">
                    <div class="popup_flight_travlDil">
                      <p class="pu"><img id="showimg" src="uploads/<?php echo $val[2] ?> " width="60%"></p>
                      <a class="close_flight_travelDl" href="# popup_flight_travlDil<? echo $val["ID"]; ?>">&times;</a>
                      <div class="content_flightht_travel_dil">
                        <? echo iconv("tis-620", "utf-8", $val[1]) ?>
                      </div>
                    </div>
                  </div>

                </div>
              <?php } ?>
            </li>
          <?php endfor; ?>
        </ul>


      </div>
      <div class="slider-navigation2">

        <div class=" pagination2">

          <!-- <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li> -->
          <!-- <a href="#">&laquo;</a> -->
          <a href="#">1</a>
          <a class="active2" href="#">2</a>
          <a href="#">3</a>

          <!-- <a href="#">&raquo;</a> -->

        </div>
      </div>
    </div>
  </div>


</div>
<?

$data3 = mssql_query("SELECT TOP 9 * from tb_IP where status ='1' ORDER BY ID_ip DESC");
?>
</div>
<div>
  <?php
  //เริ่ม
  $allData = array();
  while ($info = mssql_fetch_array($data3)) {
    // $question = iconv("tis-620", "utf-8", $info['question']);
    // $date = iconv("tis-620", "utf-8", $info['date']);

    array_push($allData, $info);
  }
  //echo '<pre>'.var_dump($allData).'</pre>' ;
  $arrData = array_chunk($allData, 3);
  ?>

</div>
<!-- ทรัพย์สินที่จดใหม่ -->
<div id="main1">
  <div class="shell">
    <div class="box">
      <h3>รายการทรัพย์สินทางปัญญาที่ได้รับการขึ้นทะเบียนแล้ว</h3>
      <br>
    </div>
    <div class="slider">
      <div class="slider-holder3">
        <div class="jcarousel-container jcarousel-container-horizontal" style="/* display: block; */">
          <div class="jcarousel-clip jcarousel-clip-horizontal">

            <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 3900px;  height:580px; left: 0px;">

              <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 3900px;  height:800px; left: 0px;">

                <?php for ($i = 0; $i < count($arrData); $i++) : ?>
                  <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="">
                    <?php
                    foreach ($arrData[$i] as $key => $val) {
                      // echo '<pre>'.var_dump(iconv("tis-620", "utf-8", $val[0])).'</pre>' ;
                    ?>
                      <div class="box2">
                        <br>
                        <table>
                          <tbody>
                            <tr>
                              <td style="width:auto;">ชื่อเรื่อง :</td>
                              <td class="td1"> <? echo iconv("tis-620", "utf-8", $val[11]) ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <br>
                        <br>
                        <table>
                          <tbody>
                            <tr>
                              <td>ผู้ทรงสิทธิ์ :</td>
                              <td class="td1"><? echo iconv("tis-620", "utf-8", $val[12]) ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <br>
                        <br>
                        <table>
                          <tbody>
                            <tr>
                              <td>ผู้ประดิษฐ์ :</td>
                              <td class="td1"><? echo iconv("tis-620", "utf-8", $val[15]) ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <br>
                        <br>
                        <table>
                          <tbody>
                            <tr>
                              <td>วันที่จดเลขทะเบียน :</td>
                              <td class="td1"><? echo iconv("tis-620", "utf-8", $val[8]) ?></td>
                            </tr>
                          </tbody>
                        </table> <br><br>
                        <table>
                          <tbody>
                            <tr>
                              <td>เเบบพิมพ์คำขอสิทธิบัตร :</td>
                              <td class="td1"><a id="file" class="outset1" href="uploadpdf/<?php echo $val[20] ?>" target="-blank">
                                  <h3>ดาวน์โหลด</h3>
                                </a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <br>
                    <?php } ?>
                  </li>
                <?php endfor; ?>
              </ul>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="slider-navigation3 ">
          <div class=" pagination3">

            <!-- <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li> -->

            <a href="#">1</a>
            <a class="active3" href="#">2</a>
            <a href="#">3</a>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<br>
<br>