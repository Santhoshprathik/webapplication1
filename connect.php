<?php
$HOSTNAME='sql212.epizy.com';
$USERNAME='epiz_32710230';
$PASSWORD='psfgJ13fZQK';
$DATABASE='epiz_32710230_usersdetails';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

$sql="CREATE TABLE `payment_app`.`usertable` (`id` INT(255) NOT NULL AUTO_INCREMENT ,
 `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`),
  UNIQUE (`email`))"

$result=mysqli_query($con,$sql);
if(!$con){
    die(mysqli_error($con));
}

?>