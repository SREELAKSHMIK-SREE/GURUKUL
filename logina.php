<?php
session_start();
$email=$_POST['name'];
$pwd=$_POST['psswd'];
if(($email=="")&&($pwd==""))
    {
        echo"Enter a valid username & password";
    }
else if(($email=="Admin")&&($pwd=="Admin"))
    {
        header("Location:Adminhome.html");
    } 
else{
        echo"Invalid Username or Password";
}   

