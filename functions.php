<?php
    $number=$_GET["number"];
    function randomPassword($number){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?/\.";
    $password ="";
    for ($i=0; $i < $number ; $i++) { 
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
    }
 ?>