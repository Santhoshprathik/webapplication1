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


    <div class="subscription">

        <form action="">
            <h3 class="title">Choose a plan</h3>

            <div class="row">
                
                <div class="column">
                    
                    


                    <table>
                        <tr>
                            <th>Plan Name</th>
                            <th>Basic</th>
                            <th>Standard</th>
                            <th>Premium</th>
                            <th>Regular</th>
                        </tr>
                        <tr>
                            <td>
                                <h2>Monthly Price</h2>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="100 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="200 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="500 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="700 INR" class="stylebutton">
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <h2>Yearly Price</h2>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="1000 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="2000 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="5000 INR" class="stylebutton">
                                </a>
                            </td>
                            <td>
                                <a href="pay.php">
                                    <input type="button" value="7000 INR" class="stylebutton">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Video Quality</td>
                            <td>Good</td>
                            <td>Good</td>
                            <td>Better</td>
                            <td>Best</td>
                        </tr>
                        <tr>
                            <td>Resolution</td>
                            <td>480p</td>
                            <td>720p</td>
                            <td>1080p</td>
                            <td>4K+HDR</td>
                        </tr>
                        <tr>
                            <td>Streaming Devices</td>
                            <td>Phone</td>
                            <td>Phone+Tablet</td>
                            <td>Phone+Tablet+Computer</td>
                            <td>Phone+Tablet+TV</td>
                        </tr>
                        <tr>
                            <td>Number of active screens at one time</td>
                            <td>1</td>
                            <td>3</td>
                            <td>5</td>
                            <td>10</td>
                        </tr>


                    </table>
                </div>

            </div>

            <!-- <a href="monthlypayment.html">
            <input type="text" value="Sign Up" class="signup">
        </a>

       
        <a href="login.html">
            
            <input type="text" value="Already have an account? Click here to LOGIN" class="login">

        </a> -->


        </form>

    </div>

</body>

</html>
