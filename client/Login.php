<?php
  
       
   session_start();
   if(isset( $_SESSION['uname'])){

    header('location:home.php');
   }

     if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'dbcon.php'; 
      $username = $_POST['uname'];
      $password = $_POST['pass'];

       $sql=" SELECT * FROM `signups` where username='$username' && password='$password'";

        $res=mysqli_query($con,$sql);
             if($res)
             {
              $num=mysqli_num_rows($res);
              if($num>0)
              {
                     
                      $_SESSION['uname']=$username;
                      header('location:home.php');
              }
              else{
                      echo 'INVALID INPUTS';
              }
        }
     }   

?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>LOGIN</title>
</head>
<body>

<form action="" method="POST">

            <div class="container">
                <div id="login-box">
                    <div class="logo">
                        <img src="ht.png" class="img img-responsive img-circle center-block"/>
                        <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
                    </div>
                    <div class="controls">
                        <input type="text" name="uname" placeholder="Username" class="form-control" /> <br>
                        <input type="password" name="pass" placeholder="Password" class="form-control" /> <br>

                        <button type="Login" name="Submit" class="btn btn-default btn-block btn-custom">Login</button>
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
                </div>
     </form>         
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="th.js"></script>
</body>
</html>
<style>
            @import url('https://fonts.googleapis.com/css?family=Nunito');
            @import url('https://fonts.googleapis.com/css?family=Poiret+One');

            body, html {
                height: 100%;
                background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
                background:black;
                position: relative;
            }
            #login-box {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translateX(-50%);
                width: 350px;
                margin: 0 auto;
                border: 1px solid black;
                background: rgba(48, 46, 45, 1);
                min-height: 500px;
                padding: 20px;
                z-index: 9999;
                border-radius: 20px;
            }
            #login-box .logo .logo-caption {
                font-family: 'Poiret One', cursive;
                color: white;
                text-align: center;
                margin-bottom: 0px;
            }
            #login-box .logo .tweak {
                color: #ff5252;
            }
            #login-box .controls {
                padding-top: 30px;
            }
            #login-box .controls input {
                border-radius: 0px;
                background: rgb(98, 96, 96);
                
                border: 0px;
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box .controls input:focus {
                box-shadow: none;
            }
            #login-box .controls input:first-child {
                border-top-left-radius: 8px;
                border-top-right-radius: 10px;
            }
            #login-box .controls input:last-child {
                border-bottom-left-radius: 8px;
                border-bottom-right-radius: 10px;
            }
            #login-box button.btn-custom {
                border-radius: 2px;
                margin-top: 8px;
                background:#ff5252;
                border-color: rgba(48, 46, 45, 1);
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box button.btn-custom:hover{
                -webkit-transition: all 500ms ease;
                -moz-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
                transition: all 500ms ease;
                background: rgba(48, 46, 45, 1);
                border-color: #ff5252;
            }
            #particles-js{
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: 50% 50%;
                position: fixed;
                top: 0px;
                z-index:1;
            }
</style>