<?php
session_start();
$email=$_POST['f_email'];
$pwd=$_POST['psswd'];
$db=mysqli_connect('localhost','root','','gurukul');
if(($email=="")&&($pwd==""))
{
 echo"Enter a valid username & password";
 }
 else
 {
 $query="SELECT * FROM fac_reg where f_email='$email' and psswd='$pwd'";
 $result=mysqli_query($db,$query);
 $count=mysqli_num_rows($result);
 if($count==1)
 {
 while($rows=mysqli_fetch_assoc($result))
 {
 if(($email==$rows['f_email'])&&($pwd==$rows['psswd']))
 {
    echo '<script>alert("Successfully inserted")</script>';
    header("Location:fachome.html");
 }
 }
 }
 else
 {
 echo"<h1>Cannot login....</h1>";
 echo"<h1>Invalid Username and Password...</h1>";
 }
 }
?>