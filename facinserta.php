<?php
if (isset($_POST['btninsert'])) 
{
$fname=$_POST['f_name'];
$pass=$_POST['psswd'];
$f_pass=$_POST['f_cpsswd'];
$f_email=$_POST['f_email'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$phone=$_POST['phone'];
$db=mysqli_connect('localhost','root','','gurukul');
if($fname==""||$pass==""||$f_pass=="" || $f_email=="" || $c1=="" || $phone=="")
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into fac_reg(f_name, psswd, f_cpsswd, f_email, c1, c2, c3, phone) values
 ('$fname','$pass','$f_pass','$f_email','$c1','$c2','$c3','$phone')");
 echo '<script>alert("Successfully inserted")</script>';
 header("Location:Facoperation.html");
}
}
?>