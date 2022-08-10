<?
session_start();
// error_reporting(0);
include("includes/config.inc.php");
$mm = $_REQUEST['mm'];
if ($mm == '') {
  $page = "mein.php";
  $class1 = "active";
} else if ($mm == '2') {
  $page = "artificial.php";
  $class2 = "active";
} else if ($mm == '3') {
  $page = "patent.php";
  $class3 = "active";
} else if ($mm == '4') {
  $page = "qa.php";
  $class5 = "active";
} else if ($mm == '6') {
  $page = "insertname.php";
  $class6 = "active";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>ทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์และเทศไทย</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
  <script type="text/javascript" src="js/jquery-func.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="css/images/Anyt.ico" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--[if IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->

  <style>
    .collapsible {
      cursor: pointer;
      padding: 18px;
      border: none;
      text-align: left;
      outline: none;
    }

    .d1 {
      padding: 8px;
    }

    .p {
      padding-left: 50px;
      padding-top: 20px;
      font-size: 20px;

    }

    .x {
      color: white;
      padding-top: 10px;
      height: 100px;
      font-size: 13px;
      background-color: black;
      ;
    }

    .c {
      height: 500px;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 26px;
      text-decoration: none;
      display: block;
    }


    .example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
      padding-top: 0px 10px;

    }

    form.example button {
      float: left;
      width: 15%;
      padding: 10px;
      background: black;
      color: white;
      font-size: 17px;
      border: 1px solid black;
      border-left: none;
      cursor: pointer;

    }

    form.example button:hover {
      background: black;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }

    .h2 {
      margin: center;
    }


    .bb {
      color: black;
      text-align: center;
      font-family: "Trebuchet MS";
      margin: center;
    }

    .search-container {
      float: right;
      padding-top: 0px;
    }

    input[type=text] {
      padding: 2px;
      margin-top: 4px;
      font-size: 14px;
      border: none;
    }

    .search-container button {
      float: right;
      padding: 2px;
      margin-top: 4px;
      margin-right: px;
      background: #CD5C5CFF;
      font-size: 14px;
      border: none;
      cursor: pointer;
    }

    .search-container button:hover {
      background: black;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;

      }
    }

    .from1 {
      padding-right: 180px;
    }
  </style>
</head>

<body>
  <!-- START PAGE SOURCE -->
  <div id="header">
    <div class="shell">
      <div style="float:left"> <img src="../IP/img/2.png" width="69"> </div>
      <h1 class="p">ทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีเเห่งประเทศไทย (วว.)
        <div class="search-container">
       
          <form class="from1" action="search.php" method="POST">
            <input type="text" placeholder="ใส่คำค้นหา.." name="search">

            <button type="submit">ค้นหา <i class="fa fa-search" style="font-size:16px ; color:#f1f1f1"></i></button>
          </form>
        </div>
      </h1>

    </div>

  </div>


  <div id="navigation">
    <div class="shell">
      <ul>
        <li><a href="index.php" class="<? echo $class1; ?>"><span>หน้าหลัก</span></a></li>
        <li><a href="index.php?mm=2" class="<? echo $class2; ?>"><span>ฐานข้อมูลการจดทะเบียน</span></a></li>
        <li><a href="index.php?mm=3" class="<? echo $class3; ?>"><span>ข้อมูลตัวแทน</span></a></li>
        <li><a href="index.php?mm=4" class="<? echo $class5; ?>"><span>สอบถาม</span></a></li>
      </ul>
    </div>
  </div>


  <div id="intro">
    <?
    include($page);
    ?>
  </div>


  <footer>
    <div class="x">
      <div class="shell">
        <p class="lf">
        <p>Copyright ©2022 วว•TISTR<br>
          วว. เป็นองค์กรของรัฐ ที่จัดตั้งขึ้นเพื่อการวิจัยวิทยาศาสตร์และเทคโนโลยี<br> เพื่อการพัฒนาประเทศ โดยไม่มีวัตถุประสงค์เพื่อแสวงหากำไร <br>หากพบการละเมิดทรัพย์สินทางปัญญาในเว็บไซต์นี้ <br>โปรดแจ้ง วว. แก้ไขโดยเร็วที่สุดต่อไป.
          (TISTR is a non-profit organization)</p>
        <p class="rf"></p>

      </div>
    </div>
    <!-- END PAGE SOURCE -->
  </footer>
</body>

</html>