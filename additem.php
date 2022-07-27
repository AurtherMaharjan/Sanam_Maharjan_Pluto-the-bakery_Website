<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bodyimage">
<style>
    .bodyimage{
        display: inline-block; 
          margin-bottom: -200px;
          background: url("images/loign.jpg");
          height: 635px;
          width: 1362px;
          
        }
        </style>
    <?php include('navbar.php'); ?>
    

    <form method="post" action="register.php" enctype="multipart/form-data" class="backgr">
        <style>
        .backgr{
          width: 400px;
          height: 500px;
          background-color: rgb(51,42,46, 0.9);
          border-radius: 25px;
        }
        </style>

<div class="additem">
    
<br>
    <b><label>Name</label></b></br>
    <input name="addname">
</br></br>

    <b><label>Type</label></b></br>
    <input name="addtype">
</br></br>

    <b><label>Price</label></b></br>
    <input name="addprice">
    <br></br>

    <b><label>Add the Description of the Item</label></b></br>
    <textarea name="adddesc"></textarea>
<br></br>

<div>
    <b><label>Picture</label></b></br>
    <input type="file" name="picture" />
</div>
<br>



    <input type="submit" name="add" value="Add">
</div>
<style>
    .additem{
        margin-left: 20px;
        margin-top: 30px;
        width: 350px;
        height: 500px;
    }
    </style>
    
    







</body>
</html>