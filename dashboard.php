<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:firstpage.php');
}
$userid = $_SESSION['userid'];
include('database.php');
$query = "select * from register where id='$userid'";
$result = $conn->query($query);
$datauser  = $result->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head> 
<body>
    <style>
        body{
            background: url('images/dash.jpg') no-repeat;
            background-size: cover;
        }
        .button{
            margin-left: 630px;
            padding-top: 20px;
            font-size: 20px;
        }
        .label{
            margin-left: 560px;
            padding-top: 150px;
            font-size: 30px;
        }
        </style>
    <?php include('navbar.php')?>
    <div class="cointainer">
        <label class='label'>Welcome, <?php echo $datauser['username'] ?> </label>
        <div class="button">
           <a href="additem.php"> <input type="submit" name="additem" value="Add Item"/></a>
    </div>
</div>
</div>
</body>
</html>