<?php
include 'authenticate.php';
include 'login.php';

?>


<!DOCTYPE html>
<html>
  <head>
    
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }
      form {
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px #f4511e;
        width: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px #f4511e;
      }
      input[type="submit"] {
        background-color: #f4511e;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      h1 {
        color: #f4511e;
        margin-bottom: 20px;
      }
    </style>
    <!--Bootstrap Link-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">

    <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">ABOUT</a></li>
            <li><a href="index.html">FEATURES</a></li>
            <li><a href="login.html">LOGIN & SIGNUP</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <form method="post" action="#">
        <h1>Login</h1>
        <input type="text" placeholder="Username" name="email" required />
        <input type="password" placeholder="Password" name="password" required />
        <input type="submit" name="submit" value="Login"/>
        <a href="signup.html">New here? Sign up </a>
      </form>
    </div>
  </body>
</html>