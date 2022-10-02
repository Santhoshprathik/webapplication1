<?php

@include 'config.php';

session_start();



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

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Enter card details for payment</h3>

                <div class="inputBox">
                    <span>cardnumber</span>
                    <input type="text" placeholder="Enter your card number" required>
                </div>


                <div class="inputBox">
                    <span>valid upto </span>
                    <input type="text" placeholder="MM/YYYY" required>
                </div>

                <div class="inputBox">
                    <span>Name on the card </span>
                    <input type="text" placeholder="Name on the card" required>
                </div>
                <div class="inputBox">
                    <span>CVV </span>
                    <input type="text" placeholder="cvv" required>
                </div>

                
                
                

            </div>

            
        </div>

        <div class="inputBox">
            
            <input type="checkbox" >
            <span>Remember card</span>
        </div>

        <input type="text" value="make payment" class="login">
        
       
        
        

    </form>

</div>    
    
</body>
</html>