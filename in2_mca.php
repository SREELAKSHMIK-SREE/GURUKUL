<?php
if (isset($_POST['btninsert'])) 
{
$c_name=$_POST['c_name'];
$c_code=$_POST['c_code'];
$email=$_POST['email'];
$m11=$_POST['m31'];
$m12=$_POST['m32'];
$m13=$_POST['m33'];
$m24=$_POST['m44'];
$m25=$_POST['m45'];
$m26=$_POST['m46'];
$m17=$_POST['m37'];
$m18=$_POST['m38'];
$m29=$_POST['m49'];
$m210=$_POST['m410'];
$db=mysqli_connect('localhost','root','','gurukul');
if ($db->connect_error){
    die("connection failed".$db->connect_error);
}
else{
if($c_name==""||$c_code=="" ||$email=="" ||$m11=="" || $m12=="" || $m13=="" || $m24=="" || $m25=="" ||  $m26=="" ||  $m17=="" || $m18=="" || $m29=="" || $m210=="" )
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into in2_mca(cor_name, cou_code, email, m31, m32, m33, m44, m45, m46, m37, m38, m49, m410) values
 ( '$c_name', '$c_code', '$email', '$m11', '$m12', '$m13', '$m24', '$m25', '$m26', '$m17', '$m18', '$m29', '$m210')");
 echo '<script>alert("Successfully inserted")</script>';
}
}
}
?>