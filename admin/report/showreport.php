<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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

<body>
    <h1 class="glow">รายงานสรุปประเภทการจดทะเบียนทรัพย์สินทางปัญญา</h1>
    <br>
    <br>
    <a onclick="location. href='indexadmin.php';">
        <p class="outset1">ย้อนกลับ</p>
    </a>
    <br><br>


    <table class="center">
        <tr>
            <th>รหัส</th>
            <th>ประเภทการจดทะเบียนทรัพย์สินทางปัญญา </th>
            <th>สรุปจำนวน</th>




        </tr>
        <?
        $sqla = "SELECT type from tb_IP WHERE type  = '1' ";
        $a = mssql_query($sqla);
        $numa = mssql_num_rows($a);

        $sqlb = "SELECT type from tb_IP WHERE type  = '2' ";
        $b = mssql_query($sqlb);
        $numb = mssql_num_rows($b);

        $sqlc = "SELECT type from tb_IP WHERE type  = '3' ";
        $c = mssql_query($sqlc);
        $numc = mssql_num_rows($c);

        $sqld = "SELECT type from tb_IP WHERE type  = '4' ";
        $d = mssql_query($sqld);
        $numd = mssql_num_rows($d);

        $sqle = "SELECT type from tb_IP WHERE type  = '5' ";
        $e = mssql_query($sqle);
        $nume = mssql_num_rows($e);

        $sqlf = "SELECT type from tb_IP WHERE type  = '6' ";
        $f = mssql_query($sqlf);
        $numf = mssql_num_rows($f);

        $sqlg = "SELECT type from tb_IP WHERE type  = '7' ";
        $g = mssql_query($sqlg);
        $numg = mssql_num_rows($g);

        $sqlh = "SELECT type from tb_IP WHERE type  = '8' ";
        $h = mssql_query($sqlh);
        $numh = mssql_num_rows($h);
        ?>
        <!-- <tr>
            <td valign="top" style="text-align:left ;">1</td>
            <td valign="top">สิทธิบัตรการประดิษฐ์</td>
            <td valign="top" style="text-align: center;"><? echo $numa; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">2</td>
            <td valign="top">สิทธิบัตรการออกแบบผลิตภัณฑ์</td>
            <td valign="top" style="text-align: center;"><? echo $numb; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">3</td>
            <td valign="top">อนุสิทธิบัตร </td>
            <td valign="top" style="text-align: center;"><? echo $numc; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">4</td>
            <td valign="top">การจดทะเบียนเครื่องหมายการค้า</td>
            <td valign="top" style="text-align: center;"><? echo $numd; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">5</td>
            <td valign="top">การจดทะเบียนเครื่องหมายรับรอง</td>
            <td valign="top" style="text-align: center;"><? echo $nume; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">6</td>
            <td valign="top">การจดทะเบียนเครื่องหมายบริการ</td>
            <td valign="top" style="text-align: center;"><? echo $numf; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">7</td>
            <td valign="top">การขึ้นทะเบียนพันธุ์พืช</td>
            <td valign="top" style="text-align: center;"><? echo $numg; ?></td>
        </tr>
        <tr>
            <td valign="top" style="text-align:left ;">8</td>
            <td valign="top">เครื่องหมายร่วม</td>
            <td valign="top" style="text-align: center;"><? echo $numh; ?></td>
        </tr>
    </table> -->
    <canvas id="myChart" width="30%" height="10%"></canvas>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    $chart = "SELECT DATE_FORMAT(booking.datecreate, '%M-%Y') AS month_name, SUM(course.price) as total_mounth, COUNT(booking.id_course) AS Total FROM booking LEFT JOIN course ON course.id = booking.id_course GROUP BY DATE_FORMAT(booking.datecreate, '%M-%Y') ORDER BY DATE_FORMAT(booking.datecreate, '%m-%Y') ASC;";
    $r = mysqli_query($conn, $chart);
</body>