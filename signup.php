<!DOCTYPE html>
<?php
    include "dbconnection.php";
    if (isset($_REQUEST['submit'])){
        $fname = $_REQUEST['firstname'];
        $lname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $cpassword = $_REQUEST['confirmpassword'];


        try{
            $sql = "INSERT INTO user VALUES (NULL,'$fname', '$lname', '$email', '$password', '$cpassword' )"; 
            $stmt = $con->prepare($sql);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Cannot enter data";
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="css/signup.css">

</head>
<body>
<div class="login-form-container">
       
    
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" name="loginForm" onsubmit="return validateForm()">
        <h3>sign up</h3>

        <p id="errorMessage" style="color: red;"></p>
        <span>first name</span>
        <input type="text" name="firstname" class="box" placeholder="enter your first name" id="">
        <span>last name</span>
        <input type="text" name="lastname" class="box" placeholder="enter your second name" id="">
        <span>email</span>
        <input type="email" name="email" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="password" class="box" placeholder="enter your password" id="">
        <span>confirm password</span>
        <input type="password" name="confirmpassword" class="box" placeholder="enter your password" id="">

        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign up" class="btn" name="submit">
        <p>Already have an account ? <a href="signup.php">sign in</a></p>
    </form>

    <script src="js/signup.js"></script>

</div>
</body>