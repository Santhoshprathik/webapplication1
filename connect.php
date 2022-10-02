<?php
$HOSTNAME='********';
$USERNAME='************';
$PASSWORD='************';
$DATABASE='epiz_32710230_usersdetails';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die(mysqli_error($con));
}

?>
