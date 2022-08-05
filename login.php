 <style>
     .form2 {
         border: 3px solid #f1f1f1;
         width: 30%;
         margin-left: 35%;

     }

     .form2 input[type=text],
     input[type=password] {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
     }

     .bt {
         background-color: #04AA6D;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 30%;
     }

     button:hover {
         opacity: 0.8;
     }

     .cancelbtn {
         width: 30%;
         padding: 14px 20px;
         background-color: #f44336;
         border: none;
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
         padding: 16px;
         justify-content: center;
         color: #000;
         background-color: #FFF5EE;
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
     }
 </style>
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 </head>

 <body>
     <div class="div1">
         <form action="/action_page.php" method="post" class="form2">
             <div class="container">
                 <label for="uname"><b>Username</b></label>
                 <input type="text" placeholder="Enter Username" name="uname" required>

                 <label for="psw"><b>Password</b></label>
                 <input type="password" placeholder="Enter Password" name="psw" required>

                 <button type="submit" class="bt">Login</button>
                 <button type="button" class="cancelbtn">Cancel</button>
             </div>
         </form>
     </div>
 </body>