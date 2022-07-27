<?php
session_start();
include('database.php');    
?>

<?php
if(isset($_POST['register']))
{
$user = $_POST["username"];
$pass = md5 ($_POST["pass"]);
$add = $_POST["address"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$count = $_POST["country"];



$insert = "insert into register (id, username, password, address, age, phone, gender, email, country)
values (NULL, '$user', '$pass', '$add', '$age', '$phone','$gender', '$email', '$count')";

$conn->query($insert);
header("location:firstpage.php");
}
if(isset($_POST['login']))
{
    $email = $_POST['mail'];
    $password = md5($_POST['pass']);
    $query = "select * from register where email = '$email' and password = '$password'";
    $result = $conn->query($query);
    $userdata = $result->fetch_assoc();
    $count = $result->num_rows;
if($count== 0){
    echo "Invalid login details";
}
else{
    $_SESSION['ticket'] ='ok';
    $_SESSION['userid'] = $userdata['id']; 
    header('location:dashboard.php');
}
}

if(isset($_POST['add']))
{
$name=$_POST['addname'];
$type=$_POST['addtype'];
$price=$_POST['addprice'];
$description=$_POST['adddesc'];
$picture=$_FILES['picture'] ['name'];
$ext=pathinfo($_FILES['picture'] ['name'], PATHINFO_EXTENSION);
$random=rand(1,1000000000);
$newpicname=$random. "_myitem_.".$ext;
$userid = $_SESSION['userid'];

if($ext=='jpg' || $ext =='png' || $ext=='jpeg' || $ext=='raw' || $ext=='eps')
{
move_uploaded_file($_FILES['picture']['tmp_name'], "itemimages/$newpicname");
$query = "insert into items (name, type, price, description, picture,userid)
values ('$name', '$type', '$price', '$description', '$newpicname','$userid')";
$conn->query($query);
header("location:myproduct.php");
}

else {
    echo " ....invalid image format or type please check before upload.";
}
}

if(isset($_POST['update']))
{
$name=$_POST['upname'];
$type=$_POST['uptype'];
$price=$_POST['upprice'];
$description=$_POST['updesc'];
$id=$_POST['id'];

$query = "update items set name='$name', type='$type', price='$price', description='$description' where id='$id'";
$conn->query($query);

header("location:myproduct.php");
}
if(isset($_GET['productid'])){
$id=$_GET['productid'];
$query = "delete from items where id='$id'";
$conn->query($query);
header('location:myproduct.php');
}

if(isset($_POST['feedbacking'])){
    $name=$_POST['nameofcommenter'];
    $comment=$_POST['addcomment'];
    $prid=$_POST['prid'];
    $query= "insert into feedback(name,comment,productid) values('$name','$comment', '$prid')";
    $conn->query($query);
    header("location:myproduct.php");


}








?>