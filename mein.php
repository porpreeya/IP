<?

$sql2        = "SELECT *FROM news WHERE type ='1'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);


$sql5        = "SELECT * FROM news WHERE type ='1'";
$result5    = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);
$image1      = $rows5['img'];
$path1       = '../IP/img/';

$sql6        = "SELECT * FROM news WHERE type ='2'";
$result6    = $db_tm->sql_query($sql6);
$rows6      = $db_tm->sql_fetchrow($result6);
$image2      = $rows6['img'];
$path2       = '../IP/img/';

$sql7        = "SELECT * FROM news WHERE type ='3'";
$result7    = $db_tm->sql_query($sql7);
$rows7      = $db_tm->sql_fetchrow($result7);
$image3      = $rows7['img'];
$path3       = '../IP/img/';


$sql8        = "SELECT *FROM tb_IP ";
$result8     = $db_tm->sql_query($sql8);
$rows8       = $db_tm->sql_fetchrow($result8);
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
    margin-left: 100%;
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
    color: #FFFFFF;
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
    background: #90EE90;
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
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  color: #000;
  justify-content: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.pu{
  padding-left: 200px;
}
</style>
<div class="shell2">
  <div class="slider">
    <div class="slider-holder">
      <ul>
        <li><img src="<? echo $path1 . $image1; ?> " style="width: 100%;"></li>
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
            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><br><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div><!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p class="pu"><img src="<? echo $path1 . $image1; ?> " width="60%" ></p>
                  <p><? echo iconv("tis-620", "utf-8", $rows2['news']); ?></p>
                </div>

              </div>
            </div>

            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><br><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>


            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><br><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>
          </li>
          <li>
            <div class=" box">
                    <br>
                    <br>
                    <br>
                    <div class="entry">
                      <center>
                        <img src="<? echo $path1 . $image1; ?> " width="60%">

                      </center><br>
                      <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
                    </div>
              </div>

              <div class="box">
                <br>
                <br>
                <br>
                <div class="entry">
                  <center>
                    <img src="<? echo $path1 . $image1; ?> " width="60%">

                  </center><br>
                  <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
                </div>
              </div>


              <div class="box">
                <br>
                <br>
                <br>
                <div class="entry">
                  <center>
                    <img src="<? echo $path1 . $image1; ?> " width="60%">

                  </center><br>
                  <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
                </div>
              </div>
          </li>
          <li>
            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>

            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>


            <div class="box">
              <br>
              <br>
              <br>
              <div class="entry">
                <center>
                  <img src="<? echo $path1 . $image1; ?> " width="60%">

                </center><br>
                <p class="p1"><? echo substr_replace(iconv("tis-620", "utf-8", $rows2['news']), "", 501); ?><button id="myBtn"><span>อ่านต่อ </span></button></p>
              </div>
            </div>
          </li>
        </ul><br>
        <br>
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
    <br>

    <br>
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


  </div>
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
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>