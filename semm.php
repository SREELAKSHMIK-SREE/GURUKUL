<?php
if (isset($_POST['btninsert'])) 
{
$c_name=$_POST['c_name'];
$c_code=$_POST['c_code'];
$email=$_POST['email'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$m9=$_POST['m9'];
$m10=$_POST['m10'];
$m11=$_POST['m11'];
$m12=$_POST['m12'];
$m13=$_POST['m13'];
$m14=$_POST['m14'];
$m15=$_POST['m15'];
$m16=$_POST['m16'];
$m17=$_POST['m17'];
$m18=$_POST['m18'];
$m19=$_POST['m19'];
$m20=$_POST['m20'];
$db=mysqli_connect('localhost','root','','gurukul');
if ($db->connect_error){
    die("connection failed".$db->connect_error);
}
else{
if($c_name==""||$c_code=="" ||$email=="" ||$m11=="" || $m12=="" || $m13=="" || $m4=="" || $m5=="" ||  $m6=="" ||  $m7=="" || $m8=="" || $m9=="" || $m10=="" )
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into mca(c_name, c_code, email, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13, m14, m15, m16, m17, m18, m19, m20) values
 ( '$c_name', '$c_code', '$email', '$m1', '$m2', '$m3', '$m4', '$m5', '$m6', '$m7', '$m8', '$m9', '$m10', '$m11', '$m12', '$m13', '$m14', '$m15', '$m16', '$m17', '$m18', '$m19', '$m20')");
 echo '<script>alert("Successfully inserted")</script>';
}
}
}
?>