<?

$sql        = "SELECT *FROM news WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
$image      = $rows['img'];
$path      = '../IP/img/';

$sql2        = "SELECT * FROM news WHERE ID ='2'";
$result2    = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$image2      = $rows2['img'];
$path2       = '../IP/img/';

$sql3       = "SELECT * FROM news WHERE ID ='3'";
$result3    = $db_tm->sql_query($sql3);
$rows3      = $db_tm->sql_fetchrow($result3);
$image3      = $rows3['img'];
$path3       = '../IP/img/';

$sql4        = "SELECT * FROM news WHERE ID ='4'";
$result4    = $db_tm->sql_query($sql4);
$rows4      = $db_tm->sql_fetchrow($result4);
$image4      = $rows4['img'];
$path4       = '../IP/img/';


$sql5        = "SELECT * FROM news WHERE ID ='5'";
$result5    = $db_tm->sql_query($sql5);
$rows5      = $db_tm->sql_fetchrow($result5);
$image5      = $rows5['img'];
$path5       = '../IP/img/';

$sql6        = "SELECT * FROM news WHERE ID ='6'";
$result6    = $db_tm->sql_query($sql6);
$rows6      = $db_tm->sql_fetchrow($result6);
$image6      = $rows6['img'];
$path6       = '../IP/img/';


$sql7        = "SELECT *FROM news WHERE ID ='7'";
$result7     = $db_tm->sql_query($sql7);
$rows7       = $db_tm->sql_fetchrow($result7);
$image7      = $rows7['img'];
$path7       = '../IP/img/';
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
    height: 150px;
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
</style>
<div class="shell2">
  <div class="slider">
    <div class="slider-holder">
      <ul>
        <li><img src="<? echo $path . $image; ?> " style="width: 100%;"></li>
        <li><img src="<? echo $path2 . $image2; ?>" style="width: 100%;"></li>
        <li><img src="<? echo $path3 . $image3; ?>" style="width: 100%;"></li>
      </ul>
    </div>
    <div class="slider-navigation">
      <ul>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>

      </ul>
    </div>
  </div>

  <div class="cl">&nbsp;</div>
</div>
<br>

<div id="main">
  <div class="shell">
    <div class="box">
      <h3>ข่าวทรัพย์สินทางปัญญา</h3>
      <br>
    </div>
    <div class="slider">
      <div class="slider-holder2">
        <ul>
          <li>
            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path . $image; ?> " width="60%">

                </center><br>

                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows['news']), "", 501); ?><br><a button id="myBtn" href="#popup_flight_travlDil1"><span>อ่านต่อ </span></a></p>
              </div>
              <div id="popup_flight_travlDil1" class="overlay_flight_traveldil">
                <div class="popup_flight_travlDil">
                  <p class="pu"><img src="<? echo $path . $image; ?> " width="60%"></p>
                  <a class="close_flight_travelDl" href="# popup_flight_travlDil1">&times;</a>
                  <div class="content_flightht_travel_dil">
                    <? echo iconv("tis-620", "utf-8", $rows['news']) ?>
                  </div>
                </div>
              </div>

            </div>
            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path2 . $image2; ?> " width="40%">
                </center><br>

                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><br><a button id="myBtn" href="#popup_flight_travlDil2"><span>อ่านต่อ </span></a></p>
              </div>
              <div id="popup_flight_travlDil2" class="overlay_flight_traveldil">
                <div class="popup_flight_travlDil">
                  <p class="pu"><img src="<? echo $path2 . $image2; ?> " width="40%"></p>
                  <a class="close_flight_travelDl" href="# popup_flight_travlDil2">&times;</a>
                  <div class="content_flightht_travel_dil">
                    <? echo iconv("tis-620", "utf-8", $rows2['news']) ?>
                  </div>
                </div>
              </div>

            </div>
            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path3 . $image3; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows3['news']), "", 501); ?><br><a button id="myBtn" href="#popup_flight_travlDil3"><span>อ่านต่อ </span></a></p>
              </div>
              <div id="popup_flight_travlDil3" class="overlay_flight_traveldil">
                <div class="popup_flight_travlDil">
                  <p class="pu"><img src="<? echo $path3 . $image3; ?> " width="40%"></p>
                  <a class="close_flight_travelDl" href="# popup_flight_travlDil3">&times;</a>
                  <div class="content_flightht_travel_dil">
                    <? echo iconv("tis-620", "utf-8", $rows3['news']) ?>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li>
            <div class=" box5">
              <br>
             
              <div class="entry">
                <center>
                  <img src="<? echo $path4 . $image4; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows4['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>

            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path5 . $image5; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows5['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>


            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path6 . $image6; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows6['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>
          </li>
          <li>
            <div class="box5">
              <br>
             
              <div class="entry">
                <center>
                  <img src="<? echo $path7 . $image7; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows7['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>

            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path . $image; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>


            <div class="box5">
              <br>
              
              <div class="entry">
                <center>
                  <img src="<? echo $path2 . $image2; ?> " width="40%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>
          </li>
        </ul>
  
        <div class="slider-navigation " ">
       
      <div class=" pagination2">

          <!-- <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li> -->
          <a href="#">&laquo;</a>
          <a href="#">1</a>
          <a class="active2" href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">&raquo;</a>

        </div>
      </div>
    </div>
  </div>


</div>

</div>
<!-- ทรัพย์สินที่จดใหม่ -->
<div id="main1">
  <div class="shell">
    <div class="box">
      <h3>รายการทรัพย์สินทางปัญญาที่ขึ้นทะเบียนใหม่</h3>
      <br>
    </div>
    <div class="slider">
      <div class="slider-holder2">
      <div class="jcarousel-container jcarousel-container-horizontal" style="/* display: block; */"><div class="jcarousel-clip jcarousel-clip-horizontal"><ul class="jcarousel-list jcarousel-list-horizontal" style="width: 3900px;  height:500px; left: 0px;">
          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="">
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td>ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <br>




          </li>
          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="">
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td>ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <br>



          </li>
          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="">
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td style="width:auto;">ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <div class="box2">
              <br>
              <table>
                <tbody><tr>
                  <td>ชื่อเรื่อง :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ทรงสิทธิ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>ผู้ประดิษฐ์ :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
              <br>
              <br>
              <table>
                <tbody><tr>
                  <td>วันที่จดเลขทะเบียน :</td>
                  <td class="td1"></td>
                </tr>
              </tbody></table>
            </div>
            <br>
            <br>


      
      </li>
      </ul></div></div>
      <br>
      <br>
      <br>
      <div class="slider-navigation " ">
      <div class=" pagination3">

        <!-- <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li> -->
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a class="active2" href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
<br>

<br>
<br>
<!-- <div class="box2">
      <br>
      <table>
        <tr>
          <td style="width:auto;">ชื่อเรื่อง :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['name']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ทรงสิทธิ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['holdre']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ประดิษฐ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['inventor']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>วันที่จดเลขทะเบียน :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['datenumregister']); ?></td>
        </tr>
      </table>
    </div>
    <br>
    <div class="box2">
      <br>
      <table>
        <tr>
          <td style="width:auto;">ชื่อเรื่อง :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['name']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ทรงสิทธิ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['holdre']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ประดิษฐ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['inventor']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>วันที่จดเลขทะเบียน :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['datenumregister']); ?></td>
        </tr>
      </table>
    </div>
    <br>
    <div class="box2">
      <br>
      <table>
        <tr>
          <td>ชื่อเรื่อง :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['name']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ทรงสิทธิ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['holdre']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>ผู้ประดิษฐ์ :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['inventor']); ?></td>
        </tr>
      </table>
      <br>
      <br>
      <table>
        <tr>
          <td>วันที่จดเลขทะเบียน :</td>
          <td class="td1"><? echo iconv("tis-620", "utf-8", $rows8['datenumregister']); ?></td>
        </tr>
      </table>
    </div>
    <br>
    <br>


  </div> -->
<!-- <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">&raquo;</a>
</div> -->