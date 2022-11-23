¿<?php
    include 'controller.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
    

    $execute =mysqli_query($connection,$query);
    
?>