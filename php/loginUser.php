<?php
    include 'controller.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    $validationLogin=mysqli_query($connection,"SELECT * FROM users WHERE email='$email' and password='$password'");
    if(mysqli_num_rows($validationLogin)>0){
         header("location: ../pokeGym.php");
        exit;
    }else{
        echo'
        <script>
        alert("losiento no se encontro el usuario, intentelo nuevamente o registrese");
        window.location="../index.php";
        </script>
        ';
        exit;
    }
?>