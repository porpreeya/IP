<!DOCTYPE html>
<html>

<head>
    <title>เพิ่มข่าว</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        * {
            box-sizing: border-box;
        }
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 250px;
            margin-top: 30px;
        }

        input[type=reset] {
            background-color: red;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 100px;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            border-radius: 5px;
            background-color: burlywood;
            margin-left: 200px;
            margin-right: 200px;
            padding: 20px ;
            padding-bottom: 20px;
        }

        .col-25 {
            float: center;
            width: 10%;
            margin-top: 6px;
            margin-left: 200px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .glow {
            font-size: 26px;
            color: black;
            margin-left: 200px;      
            color: white;
            padding: 0.5em;
            display: inline-block;
            line-height: 1.3;
            background: #878787;
            vertical-align: middle;
            border-radius: 25px 0px 0px 25px;
            
}
        .glow:before {
            content: '●';
            color: black;
            margin-right: 8px;
}
        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #f7d2e5, 0 0 25px #f7d2e5, 0 0 30px #f7d2e5, 0 0 40px #f7d2e5, 0 0 50px #f7d2e5;
            }

            to {
                text-shadow: 0 0 10px #fff, 0 0 15px #ffffff, 0 0 20px #ffffff, 0 0 25px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff, 0 0 50px #ffffff;
            }
        }
        .form{
            margin-left: 150px;
        }
        .heading{
            padding: 0.25em 0.9em ;
            color: #494949;
            background: white;
            border-left: solid 7px #7db4e6;
            width:12%;  
        }
        
    </style>
</head>

<body class="body">
<?
    $image = iconv("tis-620", "utf-8", $info['image']);
    $objDB = mssql_select_db("intelle");
    $data = mssql_query("SELECT * FROM banner ")
        or die(mssql_error()); ?>
    <h2 class="glow">เพิ่มเเบนเนอร์</h2>

    <div class="container">
   
    <div class="heading"><h5>เพิ่มไฟล์รูป:</h5></div><br>
        <form action="news/storeban.php" method="post" enctype="multipart/form-data" class="form">
        
            <input type="file" name="image" id="addimg"  onchange="loadFile(event)">
            <img id="showimg" src="../uploads/<?php echo $image?>" style="height:250px; width:100;">
        <div class="row">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
       </form>
    </div>
    <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showimg');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
</body>

</html>