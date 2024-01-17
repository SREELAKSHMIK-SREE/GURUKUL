<?php
if (isset($_POST['btninsert'])) 
{
$c_name=$_POST['c_name'];
$c_code=$_POST['c_code'];
$email=$_POST['email'];
$m21=$_POST['m21'];
$m22=$_POST['m22'];
$m23=$_POST['m23'];
$m24=$_POST['m24'];
$m25=$_POST['m25'];
$m26=$_POST['m26'];
$m27=$_POST['m27'];
$m28=$_POST['m28'];
$m29=$_POST['m29'];
$m210=$_POST['m210'];
$db=mysqli_connect('localhost','root','','gurukul');
if ($db->connect_error){
    die("connection failed".$db->connect_error);
}
else{
if($c_name==""||$c_code=="" ||$email=="" ||$m21=="" || $m22=="" || $m23=="" || $m24=="" || $m25=="" ||  $m26=="" ||  $m27=="" || $m28=="" || $m29=="" || $m210=="" )
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into in2_btech(c_name, c_code, email, m21, m22, m23, m24, m25, m26, m27, m28, m29, m210) values
 ( '$c_name', '$c_code', '$email', '$m21', '$m22', '$m23', '$m24', '$m25', '$m26', '$m27', '$m28', '$m29', '$m210')");
 echo '<script>alert("Successfully inserted")</script>';
}
}
}
?>