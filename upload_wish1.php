<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $item_id=$_POST['itemid'];
    $user_id=$_SESSION['id'];
    $gender=$_SESSION['gender'];
    $minprice=$_POST['minprice'];
    $maxprice=$_POST['maxprice'];
    $add_to_cart_query="insert into wishlist(user_id,item_id,minprice,maxprice) values ($user_id,$item_id,$minprice,$maxprice)";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    $cat=$_SESSION['cat'];
    header('location: products_'.$gender.'.php?'.$cat.'=true');
 ?>