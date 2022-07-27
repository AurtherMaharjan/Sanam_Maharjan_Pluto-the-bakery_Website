<?php
session_start();
if(isset($_SESSION['ticket'])){
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <style>
        .alignment{
            margin-left: 15px;
        }

        body{
          margin-top: -200px;
          background: url("images/loign.jpg");
          height: 1000px;
        }
        .container{
            margin-top: -370px;
            padding-top: 20px;
            padding-left: 300px;
            height: 250px;
        }
        .height{
          height: 600px;
          padding-left: 20px; 
          padding-right: 100px;
          margin-top: 600px;
          width: 550px;
          height: 200px;
          background-color: rgb(51,42,46, 0.8);
          border-radius: 25px;
        }
    </style>
    <div class="container">
        <div class="row height">
<form class="form-inline" action="register.php" method="post">
  <div class="form-group form">
    <label class="color">E-mail</label>
    <input type="email" name="mail" class="form-control mx-sm-3" required>
    <label class="color">Password</label>
    <input type="password" name="pass" class="form-control mx-sm-3 " required>
    <label class="color">
      Must be 8-20 characters long.</label>
  </div>
  <div class="alignment">
  <input type="submit" class="btn btn-success" name="login" value="Login" />
    </div>
</form>
  <a href="firstpage.php"><button type="submit" class="btn btn-success back" >Jump to Home</button></a>
  <label> Don't have an account? </label>
<a href="signup.php">sign-up</a>

</div>
      </div>
      
      
<style>
  .back{
    margin-left: 105px;
    margin-top: -66px;
  }
  .color{
    color: white;
  }
  
  </style>

</body>
</html>