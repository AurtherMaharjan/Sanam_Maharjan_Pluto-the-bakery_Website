<?php session_start();
include('database.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Myproducts</title>
</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container">
<div class="row">  

<?php $qq = "select * from items";
$result = $conn->query($qq);
while($data = $result->fetch_assoc()){ ?>
    <div class="col-md-4 div">
                <p><img src="itemimages/<?php echo $data['picture'] ?>" class="img-thumbnail" /></p>
                <h2>Name: <?php echo $data['name']?></h2>
                <p>Price : $<?php echo $data['price']?> </p>
                <p>Type : <?php echo $data['type']?> </p>
                <p> Description : <?php echo $data['description']?></p>

                <?php if(isset($_SESSION['ticket']) && $_SESSION['userid']==$data['userid']){ ?>
                    <button type="button" name="delete" class="button" style="color:white;">
                    <a href="register.php?productid=<?php echo $data['id']?>" style="text-decoration:none; color:green;" >Delete</a></button>
                    <button type="button" name="update" class="button" style="color:white;">
                    <a href="update.php?id=<?php echo $data['id']; ?>" style="text-decoration:none; color:green;">Update</a></button></br></br>
                    <?php }
                    if(isset($_SESSION['ticket'])){ ?>
                    <form action='register.php' method='post'>
                    <input name='nameofcommenter' placeholder='Your Name!!' />
                    <input name='addcomment' placeholder='Your feedback!!' />
                    <input name='prid' hidden value="<?php echo $data['id'] ?>" />
                    <input type='submit' value='submit' name='feedbacking'/>
                    </form>

<?php }
                     ?>
                    <h4>Feedbacks:</h4>
                    <?php     
                    $proid = $data['id'];
                    $query = "select * from feedback where productid='$proid'";
                    $out = $conn->query($query);
                    while($fb = $out->fetch_assoc()){ ?>
                    <small>By <?php echo $fb['name']?>: <?php echo $fb['comment'] ?> </small></br> <?php } ?>
                    
                    </br>
                    </div>
                    <?php } ?>


<style>
    .div{
        width: 350px;
        float: left;
        margin-left: 30px;

    }

</style>

<?php

?>

</div>
</body>
</html>
