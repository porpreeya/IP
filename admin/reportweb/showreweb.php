

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        .h5,
        h5 {
            font-size: 1.25rem;
            margin-top: 20px;
        }

        .w3-bar .w3-button {
            padding: 15px;
            text-decoration: none;
        }

        img {
            margin-top: 30px;
            vertical-align: middle;
            border-style: none;
            margin-left: 30px;
        }

        table,
        td {
            border-collapse: collapse;
            background-color: #bebebe;
            border-radius: 30px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            color: black;
            padding: 10px;
            border-bottom: 1px solid black;

        }

        th {
            border-collapse: collapse;
            background: darksalmon;
            text-align: center;
            border-radius: 3px 4px 0 0;
            padding: 10px
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            width: 40%;
        }

        .glow {
            font-size: 26px;
            color: black;
            text-align: center;
            animation: glow 1s ease-in-out infinite alternate;
            color: black;
            padding: 0.5em 0;
            border-top: solid 3px black;
            border-bottom: solid 3px black;
            width: 40%;
            margin-inline: auto;
            border-radius: 10px;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #f7d2e5, 0 0 25px #f7d2e5, 0 0 30px #f7d2e5, 0 0 40px #f7d2e5, 0 0 50px #f7d2e5;
            }

            to {
                text-shadow: 0 0 10px #fff, 0 0 15px #ffffff, 0 0 20px #ffffff, 0 0 25px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff, 0 0 50px #ffffff;
            }
        }

        .th {
            width: 500px;
        }


        p.outset {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #c32da9;
            text-align: center;
            margin-left: 350px;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color: red;
            border-radius: 10px;
        }

        .outset:active {
            background-color: #e356ca;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .btn-warning {
            color: black;
            background-color: #ffc107;
            border-color: #ffc107;
            border-radius: 10px;
        }

        .btn-danger {
            color: black;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 10px;
        }

        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
            margin-left: 480px;
            margin-top: 10%;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color: red;
            border-radius: 8px;
        }

        .outset1:active {
            background-color: #442bd1;
            box-shadow: 0 4px #666;
            transform: translateY(4px);
        }

        .td {
            background-color: cadetblue;
        }

        .button4 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

        .button4:hover {
            background-color: #e7e7e7;
        }
    </style>
</head>

<body></body>
<h1 class="glow">รายงานสรุปภาพรวมของเว็บไชต์ทรัพย์สินทางปัญญา<br>สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย</h1>
<br>
<br>
<a onclick="location. href='indexadmin.php';">
    <p class="outset1">ย้อนกลับ</p>
</a>
<br><br>
<table class="center">
    <tr>
        <th>ลำดับ</th>
        <th>ข้อมูล</th>
        <th>สรุปจำนวน</th>




    </tr>
  <?
// $strSQL = ("SELECT SUM(ID_ban) AS  SUMID_ban FROM banner GROUP BY ID_ban");
// $objQuery = mssql_query($strSQL) or die("Error Query [" . $strSQL . "]");
// while ($objResult = mssql_fetch_array($objQuery)) {
//     echo $objResult["SUMID_ban"];
//     echo "<br>";
    $sqlb = " SELECT * FROM banner ";
    $b = mssql_query( $sqlb );
    $numb = mssql_num_rows( $b );

    $sqln = " SELECT * FROM news ";
    $n = mssql_query( $sqln );
    $numn = mssql_num_rows( $n );

    $sqlip = " SELECT * FROM tb_ip ";
    $ip = mssql_query( $sqlip );
    $numip = mssql_num_rows( $ip );

    $sqlp = " SELECT  * FROM consider ";
    $p = mssql_query( $sqlp );
    $nump = mssql_num_rows( $p );

    $sqlq = " SELECT * FROM ques ";
    $q = mssql_query( $sqlq );
    $numq = mssql_num_rows( $q );

    $sqlr = "SELECT status from ques WHERE status = '1' ";
    $r = mssql_query( $sqlr );
    $numr = mssql_num_rows( $r );
 
   

    $sqla = " SELECT * FROM tb_login ";
    $a = mssql_query( $sqla );
    $numa = mssql_num_rows( $a );

    $sqlenroll = " SELECT * FROM tb_enroll ";
    $enroll = mssql_query( $sqlenroll);
    $numenroll = mssql_num_rows( $enroll );
?>
    <tr>
        <td valign="top" style="text-align:center ;">1</td>
        <td valign="top">เเบนเนอร์</td>
        <td valign="top" style="text-align:center ;"><? echo $numb;?></td>
    </tr>
  
    <tr>
        <td valign="top" style="text-align:center ;">2</td>
        <td valign="top">ข่าวเกี่ยวกับทรัพย์สินทางปัญญา</td>
        <td valign="top" style="text-align:center ;"><? echo $numn;?></td>
    </tr>
    <tr>
        <td valign="top" style="text-align:center ;">3</td>
        <td valign="top">ข้อมูลการจดทะเบียนทรัพย์สินทางปัญญา</td>
        <td valign="top" style="text-align:center ;"><? echo $numip;?></td>
    </tr>
    <tr>
        <td valign="top" style="text-align:center ;">4</td>
        <td valign="top">ข้อมูลตัวเเทน</td>
        <td valign="top" style="text-align:center ;"><? echo $nump;?></td>
    </tr>
    <tr>
        <td valign="top" style="text-align:center ;">5</td>
        <td valign="top">ข้อมูลคำถาม</td>
        <td valign="top" style="text-align:center ;"><? echo $numq;?></td>
    </tr>
    <tr>
        <td valign="top" style="text-align:center ;">6</td>
        <td valign="top">ข้อมูลคำตอบ</td>
        <td valign="top" style="text-align:center ;"><? echo $numr;?></td>
    </tr>
    <tr>
        <td valign="top" style="text-align:center ;">8</td>
        <td valign="top">ข้อมูลคำยื่นขอจดทะเบียนทรัพย์สินทางปัญญา</td>
        <td valign="top" style="text-align:center ;"><? echo $numenroll;?></td>
    </tr>




</table>
<!-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [90, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
$chart = "SELECT DATE_FORMAT(booking.datecreate, '%M-%Y') AS month_name, SUM(course.price) as total_mounth, COUNT(booking.id_course) AS Total FROM booking LEFT JOIN course ON course.id = booking.id_course GROUP BY DATE_FORMAT(booking.datecreate, '%M-%Y') ORDER BY DATE_FORMAT(booking.datecreate, '%m-%Y') ASC;";
	$r = mysqli_query($conn, $chart); -->
</body>