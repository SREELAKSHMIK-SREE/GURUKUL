<?php
session_start();
$email=$_POST['email'];
$pwd=$_POST['psswd'];
$dep=$_POST['dep'];
$db=mysqli_connect('localhost','root','','gurukul');
if(($email=="")&&($pwd==""))
{
 echo"Enter a valid username & password";
 }
 else
 {
 $query="SELECT * FROM stu_reg where email='$email'and psswd='$pwd' and dep='$dep'";
 $result=mysqli_query($db,$query);
 $count=mysqli_num_rows($result);
 if($count==1)
 {
 while($rows=mysqli_fetch_assoc($result))
 {
 if(($email==$rows['email'])&&($pwd==$rows['psswd']))
 {
   if($dep=='MCA'){
    header("Location: studhomem.html");
   }
   else{
      header("Location:stuhomeb.html");
   }
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