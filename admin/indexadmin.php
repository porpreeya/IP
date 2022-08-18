<?
session_start();
error_reporting(0);
include("includes/config.inc.php");
$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
  $selected2 = "class='selected'";
  if ($Submenu == "showdel") {
    $Fileshow = "news/showdel.php";
  }else if ($Submenu == "addban") {
    $Fileshow = "news/addban.php";
  }else if ($Submenu == "editban") {
    $Fileshow = "news/editban.php";
  }

} else if ($Menu == "2") {
  $selected2 = "class='selected'";
  if ($Submenu == "shownews") {
    $Fileshow = "news/shownews.php";
  } else if ($Submenu == "addnews") {
    $Fileshow = "news/addnews.php";
  } else if ($Submenu == "editnews") {
    $Fileshow = "news/editnews.php";
  }

} else if ($Menu == "3") {
  $selected3 = "class='selected'";
  if ($Submenu == "showagent") {
    $Fileshow = "agent/showagent.php";
  } else if ($Submenu == "addagent") {
    $Fileshow = "agent/addagent.php";
  }else if ($Submenu == "editagent") {
    $Fileshow = "agent/editagent.php";
  }
  
} else if ($Menu == "4") {
  $selected4 = "class='selected'";
  if ($Submenu == "showqa") {
    $Fileshow = "qa/showqa.php";
  } else if ($Submenu == "addqa") {
    $Fileshow = "qa/addqa.php";
  } 

} else if ($Menu == "5") {
  $selected4 = "class='selected'";
  if ($Submenu == "comment") {
    $Fileshow = "comment.html";
  } else if ($Submenu == "qa") {
    $Fileshow = "qa.html";
  }
  
} else {
  $Fileshow = "news2.html";
}
// $box2 = iconv("utf-8", "tis-620", $_REQUEST["title"]);
// $box3 = iconv("utf-8", "tis-620", $_REQUEST["inventor"]);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="shortcut icon" type="image/x-icon" href="css/images/Anyt.ico" />
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    table,p,a {
      font-family: 'K2D', sans-serif;
      text-decoration: none;
      margin-top:20px;
   
    }

    body,
    html {
      height: 100%;
      line-height: 1.8;
    
    }

    /* Full height image header */
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("/w3images/mac.jpg");

    }

    .w3-bar .w3-button {
      padding: 15px ;
      
    }
    .inc{
      background: #E9F8FF;
      min-height:700px;
    }
    img {
    vertical-align: middle;
    border-style: none;
    margin-left: 30px;
   
}
.menu{
  padding: 15px;
  margin-top: 30px;
}
  </style>
</head>

<body >

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <div style="float:left; "> <img src="../img/2.png" width="95" > </div>
      <a href="indexadmin.php" class="w3-bar-item w3-button w3-wide" ><h5>ฐานข้อมูลทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีเเห่งประเทศไทย</h5></a>
      <!-- Right-sided navbar links -->
      <div class="menu">
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=1&Submenu=showdel';"><i class='fas fa-certificate'>&nbsp</i>เเบนเนอร์</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=2&Submenu=shownews';"><i class='fas fa-book-open'>&nbsp</i>ข่าว</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=3&Submenu=showagent';"><i class='fas fa-address-card'>&nbsp</i>ข้อมูลตัวเเทน</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=4&Submenu=showqa';"><i class='fas fa-comments'>&nbsp</i>ถาม-ตอบ</a>
        
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <!-- <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a> -->
    </div>
  </div>


  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">


  </header>


  <div class="inc" style="padding:128px 16px" id="about">
    <?
    include($Fileshow);
    ?>
  </div>










  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }
  </script>

</body>

</html>