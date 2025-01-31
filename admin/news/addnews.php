<head>
    <title>เพิ่มข่าว</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
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
            margin-left: 2px;
        }

        label {
            padding: 5px 5px 5px 0;
            width: 300px;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-left: 300px;
            margin-top: 30px;
        }

        input[type=reset] {
            background-color: red;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
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
            padding: 20px;
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

        .form {
            margin-left: 10px;
        }

        .heading {

            color: #494949;
            background: white;
            border-left: solid 7px #7db4e6;
            width: 15%;
        }

        .heading1 {

            color: #494949;
            background: white;
            border-left: solid 7px #7db4e6;
            width: 11%;
        }
        .heading2 {

color: #494949;
background: white;
border-left: solid 7px #7db4e6;
width: 8%;
}

        button,
        input,
        select,
        textarea,
        optgroup {
            font: inherit;
            margin-left: 10%;
            margin-right: 20%;
        }

        p.outset1 {
            display: inline;
            width: 130px;
            border-style: outset;
            background: #2c15b1;
            text-align: center;
            margin-left: 285px;
            margin-top: 2%;
            color: white;
            height: 40px;
            padding: 10px;
            outline-color: red;
            border-radius: 8px;
        }

        p.outset {
            width: 130px;
            border-style: outset;
            background: #2615b1;
            margin-left: 1160px;
            text-align: center;
            color: white;
            height: 40px;
            padding: 5px;
            outline-color: red;
            border-radius: 10px;
        }
    </style>
</head>

<body class="body">
    <?
    $image = iconv("tis-620", "utf-8", $info['image']);
    // $objDB = mssql_select_db("intelle");
    $data = mssql_query("SELECT * FROM news ")
        or die(mssql_error()); ?>
    <h2 class="glow">เพิ่มข่าวทรัพย์สินทางปัญญา</h2><br>
    <br>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=2&Submenu=shownews'; ">
        <p class="outset ">ย้อนกลับ</p>
    </a>
    <div class="container">

        <form action="news/storenews.php" method="post" enctype="multipart/form-data" class="form">
            <h5><label for="subject" class="heading2">หัวข่าว :</label></h5>
            <div class="col-25">
            </div>
            <div class="row">
                <div class="col-75">
                    <input class="w3-input w3-border" name="title" type="text" value="" />
                </div>
            </div>
            <div class="heading1">
                <h5>รายละเอียด:</h5>
            </div><br>
            <textarea name="news" id="detail" style="width:100px;"></textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('detail');

                function CKupdate() {
                    for (instance in CKEDITOR.instances)
                        CKEDITOR.instances[instance].updateElement();
                }
            </script>
            <br><br><br>
            <div class="heading">
                <h5>เเนบไฟล์รูป:</h5>
            </div>
            <input type="file" name="image" id="addimg" onchange="loadFile(event)">
            <img id="showimg" src="../uploads/<?php echo $image ?>" style="height:200px; width:50;">
            <div class="heading">
                <h5>เเนบไฟล์เพิ่มเติม:</h5>
            </div>
            <label for="myfile">กรุณาเลือกไฟล์</label><br>
            <input type="file" id="myfile" name="pdf_news">
            <h5><label for="subject" class="heading2">ที่มา :</label></h5>
            <div class="col-25">
            </div>
            <div class="row">
                <div class="col-75">
                    <input class="w3-input w3-border" name="source" type="text" value="" />
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>

        </form>

    </div>
    <!-- <script>
        $("#addimg").change(function(e) {
            console.log('event', $("#addimg").val());

            var id = $('#idnews').val();
            var file_data = $('#addimg').prop('files')[0];
            var form_data = new FormData();
            form_data.append('image', file_data);
            form_data.append('id', id);
            console.log(form_data);
             $.ajax({
            //     url: 'news/uploadimage.php', // <-- point to server-side PHP script 
            //     dataType: 'text', // <-- what to expect back from the PHP script, if anything
            //     cache: false,
            //     contentType: false,
            //     processData: false,
            //     data: form_data,
            //     type: 'post',
              success: function(php_script_response) {
                //('../uploads/'.php_script_response); 
                   $('#showimg').attr('src', function(i, val) {
                    return '../uploads/' + php_script_response;
              });
              }
            });

        });
    </script> -->
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
</body>

</html>