<?php

$USERNOTFOUND=0;
@include 'connect.php';

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    

    $sql="select * from usertable where
    email='$email' && password='$password'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            header('location:user_page.php');
        }
        else{
            $USERNOTFOUND=1; 
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
if($USERNOTFOUND){
    echo '<div class="errorbox">
        <span> user not found, try signup! </span>                
    </div>';
}
?>


<div class="container">

    <form action="login_page.php" method="post">
      <?php
           if(isset($error)){
           foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <div class="row">

            <div class="col">

                <h3 class="title">Login</h3>

                <div class="inputBox">
                    <span> user name:</span>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>


                <div class="inputBox">
                    <span>Password :</span>
                    <input type="password" name="password" placeholder="Enter Password">
                </div>

                
                
                

            </div>

            
        </div>


        <input type="submit" name ="login" value="login in " class="login">
        
        <a href="signup_page.php">
            <input type="text" value="New account? Click here to SIGN UP" class="signin">

        </a>
        
        

    </form>

</div>    
    
</body>
</html>