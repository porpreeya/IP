<?
session_start();
// error_reporting(0);
include("../includes/config.inc.php");

$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
  $selected2 = "class='selected'";
  if ($Submenu == "showdel") {
    $Fileshow = "news/showdel.php";
  } else if ($Submenu == "addban") {
    $Fileshow = "news/addban.php";
  } else if ($Submenu == "editban") {
    $Fileshow = "news/editban.php";
  } else if ($Submenu == "indexadmin") {
    $Fileshow = "indexadmin.php";
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
  } else if ($Submenu == "editagent") {
    $Fileshow = "agent/editagent.php";
  }
} else if ($Menu == "4") {
  $selected4 = "class='selected'";
  if ($Submenu == "showqa") {
    $Fileshow = "qa/showqa.php";
  } else if ($Submenu == "addqa") {
    $Fileshow = "qa/addqa.php";
  }else if ($Submenu == "addhashtag") {
    $Fileshow = "qa/addhashtag.php";
  }else if ($Submenu == "showhashtag") {
    $Fileshow = "qa/showhashtag.php";
  }
  else if ($Submenu == "edithashtag") {
    $Fileshow = "qa/edithashtag.php";
  }

} else if ($Menu == "5") {
  $selected5 = "class='selected'";
  if ($Submenu == "showmanage") {
    $Fileshow = "manage/showmanage.php";
  } else if ($Submenu == "addmanage") {
    $Fileshow = "manage/addmanage.php";
  } else if ($Submenu == "editmanage") {
    $Fileshow = "manage/editmanage.php";
  }
} else if ($Menu == "7") {
  $selected7 = "class='selected'";
  if ($Submenu == "showloginadd") {
    $Fileshow = "loginadd/showloginadd.php";
  } else if ($Submenu == "addlog") {
    $Fileshow = "loginadd/addlog.php";
  } else if ($Submenu == "editlogin") {
    $Fileshow = "loginadd/editlogin.php";
  }
}else if ($Menu == "8") {
  $selected8 = "class='selected'";
  if ($Submenu == "showreport") {
    $Fileshow = "report/showreport.php";
  } 
}else if ($Menu == "9") {
  $selected8 = "class='selected'";
  if ($Submenu == "showreweb") {
    $Fileshow = "reportweb/showreweb.php";
  } 
}
else if ($Menu == "10") {
  $selected8 = "class='selected'";
  if ($Submenu == "showenroll") {
    $Fileshow = "enroll/showenroll.php";
  } else if ($Submenu == "editenroll") {
    $Fileshow = "enroll/editenroll.php";
  }
}
 else {
  $Fileshow = "home.php";
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style2.css" type="text/css" media="all" />
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <link rel="shortcut icon" type="image/x-icon" href="css/images/Anyt.ico" />
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h6,
    table,
    p,
    a {
      font-family: 'K2D', sans-serif;
      text-decoration: none;
      margin-top: 10px;

    }

    .h5,
    h5 {
      font-family: 'K2D', sans-serif;
      text-decoration: none;
      font-size: 1.25rem;
      margin-top: 32px;

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

    /* .w3-bar .w3-button {
      padding: 15px ;
      
    } */
    .inc {
      background: #E9F8FF;
      min-height: 700px;
    }

    img {
      margin-top: 30px;
      vertical-align: middle;
      border-style: none;
      margin-left: 30px;
    }

    .menu {
      float: right;
    }
  </style>
</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <div style="float:left; "> <img src="../img/2.png" width="95">
      </div>
      <a href="indexadmin.php" class="sub-menu w3-bar-item w3-button">
        <h5>ฐานข้อมูลทรัพย์สินทางปัญญาสถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีเเห่งประเทศไทย</h5>
      </a>
      <!-- Right-sided navbar links -->
      <div class="menu">
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=1&Submenu=showdel';"><i class='fas fa-certificate'>&nbsp</i>เเบนเนอร์</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=2&Submenu=shownews';"><i class='fas fa-book-open'>&nbsp</i>ข่าว</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=3&Submenu=showagent';"><i class='	fas fa-user-friends'>&nbsp</i>ข้อมูลตัวเเทน</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=4&Submenu=showqa';"><i class='fas fa-comments'>&nbsp</i>ถาม-ตอบ</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=5&Submenu=showmanage';"><i class='fas fa-file-alt'>&nbsp</i>บริหารจัดการทรัพย์สินทางปัญญา</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=7&Submenu=showloginadd';"><i class='fas fa-id-badge'>&nbsp</i>ข้อมูลAddmin</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=8&Submenu=showreport';"><i class='fas fa-address-card'>&nbsp</i>รายงานสรุป</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='indexadmin.php?Menu=9&Submenu=showreweb';"><i class='fas fa-chart-line'>&nbsp</i>ภาพรวมเว็บไซต์</a>
        <a class="sub-menu w3-bar-item w3-button" onclick="location. href='loginadd/logout.php';"><i class='fas fa-sign-out-alt'>&nbsp</i>Logout</a>
      </div>
    </div>
  </div>

  <div class="inc" style="padding:128px 16px" id="about">
    <br>
    <br>
    <?php include($Fileshow); ?>
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