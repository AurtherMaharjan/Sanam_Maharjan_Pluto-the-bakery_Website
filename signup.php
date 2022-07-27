<!DOCTYPE html>
<html>
<head>
    <title>sign-up</title>
    <link type="text/css" rel="stylesheet" href="register.css" >
    
</head>
<body>
    <style>
        .containing{
            margin-left: 300px;
            background:  rgb(61,68,59, 0.8);
            padding: 40px 250px 40px 100px;
            border-radius: 25px;
            width: 700px;
        }
        body{
          background: url('images/signup.jpg') no-repeat;
          object-fit: contain;
          margin-top: -10px;
        }
        </style>


    <?php include("navbar.php")?>
    
    <div class="containing">
    <h1>Sign-up</h1>
    <form action="register.php" method="post">
        <!-- <p>Username<input  type="text" name="username" required/></p> -->
        <div class="form-group">
      <label>Username</label>
      <input class="form-control" name="username" placeholder="Username" required>
    </div>

        <!-- <p>Password<input type="password" name="pass" required/></p> -->
        <div class="form-group">
      <label>Password</label>
      <input type='password' class="form-control" name="pass" placeholder="Password" required>
    </div>

        <!-- <p>Address<input type="text" name="address" required/></p> -->
        <div class="form-group">
      <label>Address</label>
      <input class="form-control" name="address" placeholder="Address" required>
    </div>

        <!-- <p>Age<input type="text" name="age" required/></p> -->
        <div class="form-group">
      <label>Age</label>
      <input class="form-control" name="age" placeholder="Age" required>
    </div>

        <!-- <p>Phone number<input type="text" name="phone" required/></p> -->
        <div class="form-group">
      <label>Phone Number</label>
      <input class="form-control" name="phone" placeholder="Phone Number" required>
    </div>

        <!-- <p>Gender<input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female</p> -->
        <div class="form-group">
      <label>Gender</label>
      <input class="form-control" name="gender" placeholder="Gender" required>
    </div>
<!-- 
        <div class="col-md-5">
        <p>Email<input type="text" name="email" required /></p>
        </div> -->

        <div class="form-group">
      <label>Email</label>
      <input class="form-control" type="email" name="email" placeholder="Email" required>
    </div>


<!-- <p>Country</p>
        <select id="country" name="country" required>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Sri lanka">Srilanka</option>
        </select>-->

        <div class="form-group">
      <label>Country</label>
      <select name="country" id="country" class="form-control">
        <option selected disabled hidden>Choose...</option>
        <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Sri lanka">Srilanka</option>
      </select>
    </div>
    </br>
    <p><input type="submit" name="register" value="Submit"/></p> 
</form>
<label>Already an account?</label></br>
<a href="login.php">Login</a>
</div>

</body>
</html>
