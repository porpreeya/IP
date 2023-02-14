<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; " />
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />

</head>
<style>
    * {
        box-sizing: border-box;

    }

    input[type=text],
    select,
    textarea {
        width: 90%;
        padding: 12px;
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

    .container1 {
        border-radius: 5px;
        background-color: burlywood;
        margin-inline: auto;
        padding: 20px;
        padding-bottom: 20px;
        width: 60%;
        height: 400px;
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
        animation: glow 1s ease-in-out infinite alternate;
        margin-left: 300px;
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
        margin-left: 20px;
    }

    p.outset {
        width: 130px;
        border-style: outset;
        background: #2615b1;
        margin-left: 1060px;
        text-align: center;
        color: white;
        height: 40px;
        padding: 5px;
        outline-color: red;
        border-radius: 10px;
        
    }

    .glow {
        font-size: 26px;
        color: black;
        margin-left: 200px;
        padding: 0.5em;
        display: inline-block;
        line-height: 1.3;
        background: #878787;
        vertical-align: middle;
        border-radius: 25px 0px 0px 25px;
        color: black;
        animation: glow 1s ease-in-out infinite alternate;
        margin-left: 300px;

    }

    .center {
        margin-inline: auto;
        font-size: 16px;
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
</style>

<body class="body">

    <br>
    <h2 class="glow">เพิ่มข้อมูลAdmin</h2><br><br>
    <a style="text-decoration: none;" onclick="location. href='indexadmin.php?Menu=7&Submenu=showloginadd'; ">
        <p class="outset">ย้อนกลับ</p>
    </a>

    <div class="container1">

        <form action="loginadd/storealogin.php" class="form" method="POST" enctype="multipart/form-data">
            <table style="width:80%" class="center">
                <tr>
                    <th style="font-size:16px; text-align: left;">ชื่อ</th>
                    <th style="font-size:16px; text-align: left;">นามสกุล</th>

                </tr>
                <tr class="tr">
                    <td>
                        <div class="container">
                            <input type="text" id="text" class="width:100% " placeholder="" name="firstname" required>
                    </td>
                    <td>
                        <input type="text" id="text" class="width:100% " placeholder="" name="lastname" required>
                    </td>

                </tr>
            </table>
            <table style="width:80%" class="center">
                <tr>
                    <th style="font-size:16px; text-align: left;">Username</th>
                    <th style="font-size:16px; text-align: left;">Password</th>

                </tr>
                <tr class="tr">
                    <td>
                        <div class="container">
                            <input type="text" id="text" class="width:100% " placeholder="" name="useradd" required>
                    </td>
                    <td>
                        <input type="text" id="text" class="width:100% " placeholder="" name="password" required>
                    </td>

                </tr>
            </table>
            <div class="row">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>

        </form>
    </div>

</body>

</html>