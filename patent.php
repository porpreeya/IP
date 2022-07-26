<meta charset="UTF-8">


<style>
    table {
        width: 70%;
        height: 200px;
        position: absolute;

        margin-top: 40px;
        margin-left: 150px;

        border-collapse: collapse;
        background-color: white;

    }

    th,
    td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid black;
        height: 30px;
        color: black;
        justify-content: center;

    }

    tr:hover {
        background-color: whitesmoke;
    }

    .b {
        color: black;
        text-align: center;
        padding-top: 35px;
        font-family: "Trebuchet MS";
    }

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

    .c {
        height: 500px;

        color: black;
        text-align: center;
        background-image: url(../IP/img/d1.jpg);

    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #0000cd;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        /*Change the width as much as you like, but make sure 
    margin-left and margin-right + width = 100%*/
        margin-right: 20px;
        margin-top: 360px;
    }

    .button:hover {
        background-color: #000080;
    }

    .button:active {
        background-color: #000080;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button1 {
        display: inline-block;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: red;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        /*Change the width as much as you like, but make sure 
    margin-left and margin-right + width = 100%*/
        margin-top: 350px;
    }

    .button1:hover {
        background-color: red;
    }

    .button1:active {
        background-color: #d90d19;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button2 {
        display: inline-block;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #ff9933;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        /*Change the width as much as you like, but make sure 
    margin-left and margin-right + width = 100%*/
        margin-left: 20px;
        margin-top: 350px;
    }

    .button2:hover {
        background-color: #f26122;
    }

    .button2:active {
        background-color: #f26122;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .l {
        color: black;
        padding-top: 20px;
    }
    
</style>
</style>
</head>

<body>

    <div class="c">
        <div class="l">
            <h2>ตัวแทนสิทธิบัตรวว.(Patent Agent)</h2>
        </div>
        <table class="bb">
            <tr>
                <th>ชื่อตัวแทน</th>
                <th>พิจารณา</th>

            </tr>
            <tr>
                <td>ดร.วาสนา ฆ้องวงศ์</td>
                <td>ศน. และ ศนพ.</td>

            </tr>
            <tr>
                <td>นายเอกชัย ธรรมสัตย์</td>
                <td>พิจารณาศนย. และเครื่องจักร</td>

            </tr>
            <tr>
                <td>ดร.ฉัตรฤดี สุวรรณชาติ</td>
                <td>ศดช และ ศนก.</td>

            </tr>
            <tr>
                <td>นางธัญวรัตน์ การสงคราม</td>
                <td>ศนก. และ ศนอ.</td>

            </tr>
            <tr>
                <td>นายนิติศักดิ์ พัครัมย์</td>
                <td>ศนท.</td>
            </tr>
        </table>

        <a href="index.php?mm=6" class="<? echo $class6; ?>"> <button class="button">เพิ่ม</button></a>
        <button class="button1">ลบ</button>
        <button class="button2">แก้ไข</button>

    </div>
</body>

</html>