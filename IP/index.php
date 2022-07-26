<?
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
  $page = "search.php";
  $class4 = "active";
} else if ($mm == '5') {
  $page = "login.php";
  $class5 = "active";
}  else if ($mm == '6') {
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

    .body {
      padding: auto;
    }
  </style>
</head>

<body class="body">
  <!-- START PAGE SOURCE -->
  <div id="header">
    <div class="shell">
      <div style="float:left"> <img src="../IP/img/2.png" width="69"> </div>
      <h1 class="p">ทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์และเทศไทย วว.</h1>
    </div>
  </div>
  </div>

  <div id="navigation">
    <div class="shell">
      <ul>
        <li><a href="index.php" class="<? echo $class1; ?>"><span>หน้าหลัก</span></a></li>
        <li><a href="index.php?mm=2" class="<? echo $class2; ?>"><span>ฐานข้อมูลการจดทะเบียน</span></a></li>
        <li><a href="index.php?mm=3" class="<? echo $class3; ?>"><span>ข้อมูลตัวแทน</span></a></li>
        <li><a href="index.php?mm=4" class="<? echo $class4; ?>"><span>ค้นหา</span></a></li>
        <li><a href="index.php?mm=5" class="<? echo $class5; ?>"><span>เข้าสู่ระบบ</span></a></li>
      </ul>
    </div>
  </div>
  <div class="c">
    <div id="intro">
      <?
      include($page);
      ?>
    </div>
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