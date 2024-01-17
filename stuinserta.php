<?php
if (isset($_POST['btninsert'])) 
{
$name=$_POST['uname'];
$pass=$_POST['psswd'];
$c_pass=$_POST['c_psswd'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dep=$_POST['dep'];
$db=mysqli_connect('localhost','root','','gurukul');
if($name==""||$pass==""||$c_pass=="" || $email=="" || $gender=="" || $dep=="")
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into stu_reg(uname, psswd, c_psswd, email, gender, dep) values
 ('$name','$pass','$c_pass','$email','$gender','$dep')");
 echo '<script>alert("Successfully inserted")</script>';
 header("Location:Stuoperation.html");
}
}
?>