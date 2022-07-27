<?php
include('database.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<div class="updatepage">
<?php include("navbar.php"); ?>

<?php 
$id = $_GET['id'];
$query = "select * from items where id='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

    <form method="post" action="register.php" enctype="multipart/form-data"> 
<div>
    <label>Picture</label>
    <input type="file" name="uppicture" />
</div>
    <br>

    <label>Name</label>
    <input name="upname" value="<?php echo $data['name'] ?>" />
</br></br>

    <label>Type</label>
    <input name="uptype" value="<?php echo $data['type'] ?>" />
</br></br>

    <label>Price</label>
    <input name="upprice" value="<?php echo $data['price'] ?>" />
    <br></br>

    <label>Description</label>
    <textarea name="updesc"><?php echo $data['description'] ?></textarea>
    <br></br>

    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">


    <input type="submit" name="update" value="Update">
    

    <style>
        .updatepage{
            color: ;
        }
        </style>
    
</div>






</body>
</html>