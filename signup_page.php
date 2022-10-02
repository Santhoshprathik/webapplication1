<?php


@include 'connect.php';



$SUCCES=0;
$USER=0;
if(isset($_POST['signup'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password!=$cpassword)
    {
        echo "passwords dont match";
    }
    else{
        $sql="select * from usertable where
    email='$email'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $USER=1;
        }
        else{

            $sql="insert into usertable (email,password)
            values('$email','$password')";
            $result=mysqli_query($con,$sql);

            if($result){
                $SUCCES=1;
            }
            else
            {
            dir(mysli_error($con));
            }
        }
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
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
if($USER){
    echo '<div class="errorbox">
        <span> user already exist, try login! </span>                
    </div>';
}
?>
<?php
if($SUCCES){
    echo '<div class="errorbox">
        <span> account created, login now! </span>                
    </div>';
}
?>
<div class="container">

    <form action="signup_page.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">Create Account/Sign-In</h3>

                <!-- <div class="inputBox">
                    <span>User Name :</span>
                    <input type="text"name="username" placeholder="Enter your Name here">
                </div> -->

                <div class="inputBox">
                    <span>Mail Id :</span>
                    <input type="text" name = "email" placeholder="Enter your mail-id here">
                </div>

                <div class="inputBox">
                    <span>Enter Password :</span>
                    <input type="password" name = "password" placeholder="Enter new password">
                </div>

                <div class="inputBox">
                    <span>Confirm Password :</span>
                    <input type="password" name = "cpassword" placeholder="Confirm Password">
                </div>
                
                

            </div>

            
        </div>

        <input type="submit" name ="signup" value="Sign Up now" class="signup">
        

       
        <a href="login_page.php">
            
            <input type="text" value="Already have an account? Click here to LOGIN" class="login">

        </a>
        

    </form>

</div>    
    
</body>
</html>