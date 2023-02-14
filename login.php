<?
session_start();
?>
<style>
     .form2 {
         border: 3px solid #f1f1f1;
         width: 50%;
         margin-left: 25%;
         height: 400px;
     }

     .form2 input[type=text],
     input[type=password] {
         width: 100%;
         padding: 12px 20px;
         margin: 35px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
         font-size: 16px;

     }

     .bt {
         background-color: #04AA6D;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 30%;
         margin-left: 70px;
     }

     button:hover {
         opacity: 0.8;
     }

     .cancelbtn {
         width: 30%;
         padding: 14px 20px;
         background-color: #f44336;
         border: none;
         margin-left: 170px;
     }

     .imgcontainer {
         text-align: center;
         margin: 24px 0 12px 0;
     }

     img.avatar {
         width: 10%;
         border-radius: 50%;
     }

     .container {
         padding: 20px;
         justify-content: center;
         color: #000;
         background-color: #FFF5EE;
         height: 360px;
     }

     span.psw {
         float: right;
         padding-top: 16px;
     }

     /* Change styles for span and cancel button on extra small screens */
     @media screen and (max-width: 300px) {
         span.psw {
             display: block;
             float: none;
         }

         .cancelbtn {
             width: 100%;
         }
     }

     .div1 {
         padding-top: 8%;
         padding-bottom: 9%;
         background: #763232;
         height: 400px;
     }
 </style>
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 </head>

 <body>
     <div class="div1">
         <form action="./admin/loginadd/check_login.php" method="post" class="form2">
             <div class="container">
                 <label for="uname"><b style="font-size: 20px;">Username</b></label>
                 <input type="text"  name="useradd" id="useradd" required>

                 <label for="psw"><b style="font-size: 20px;">Password</b></label>
                 <input type="password"  name="password"  id="password" required>

                 <button type="submit" value="Login" class="bt" onclick = "myFunction ()">Login</button>
                 <button type="reset" value="Reset" class="cancelbtn">Cancel</button>

             </div>


         </form>
     </div>
 </body>
 <script>
    function myFunction ()
{
alert ( "ยินดีต้อนรับ Admin");
}
 </script>