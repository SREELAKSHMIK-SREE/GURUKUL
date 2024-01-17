<html>
<head>
<title>
Accessement
</title>
<style>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    td {
        text-align: center;
    }
    
</style>

</head>
<body>




<?php
$db = mysqli_connect('localhost', 'root', '', 'gurukul');

$sql2 = mysqli_query($db, "select * from in1_btech");
while ($row = mysqli_fetch_assoc($sql2)) {
    $f_email = $row['email'];
    $m1 = $row['m11'] + $row['m12'] + $row['m13'] + $row['m17'] + $row['m18'];
    $m2 = $row['m14'] + $row['m15'] + $row['m16'] + $row['m19'] + $row['m110'];
}

$sql3 = mysqli_query($db, "select * from in2_btech");
while ($row = mysqli_fetch_assoc($sql3)) {
    $f_email = $row['email'];
    $m3 = $row['m21'] + $row['m22'] + $row['m23'] + $row['m27'] + $row['m28'];
    $m4 = $row['m24'] + $row['m25'] + $row['m26'] + $row['m29'] + $row['m210'];
}

echo "<h1 align=center>Internal Assessment</h1>";
echo "<table align=center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>M1:</th>";
echo "<th>M2</th>";
echo "<th>M3:</th>";
echo "<th>M4:</th>";
echo "</tr>";
echo "<td>$f_email</td>";
echo "<td>$m1</td>";
echo "<td>$m2</td>";
echo "<td>$m3</td>";
echo "<td>$m4</td></tr>";
echo "</table>";
echo"<br><br>";

$sql4 = mysqli_query($db, "select * from m_btech");
while ($row = mysqli_fetch_assoc($sql4)) {
    $f_email = $row['email'];
    $m1 = $row['m1'] + $row['m2'] + $row['m11'] + $row['m12'];
    $m2 = $row['m3'] + $row['m4'] + $row['m13'] + $row['m14'];
    $m3 = $row['m5'] + $row['m6'] + $row['m15'] + $row['m16'];
    $m4 = $row['m7'] + $row['m8'] + $row['m17'] + $row['m18'];
    $m5 = $row['m9'] + $row['m10'] + $row['m19'] + $row['m20'];
}
echo "<h1 align=center>Model Assessment</h1>";
echo "<table align=center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>M1:</th>";
echo "<th>M2</th>";
echo "<th>M3:</th>";
echo "<th>M4:</th>";
echo "<th>M5:</th>";
echo "</tr>";
echo "<td>$f_email</td>";
echo "<td>$m1</td>";
echo "<td>$m2</td>";
echo "<td>$m3</td>";
echo "<td>$m4</td>";
echo "<td>$m5</td></tr>";
echo "</table>";
echo"<br><br>";
$sql5 = mysqli_query($db, "select * from btech");
while ($row = mysqli_fetch_assoc($sql5)) {
    $f_email = $row['email'];
    $m1 = $row['m1'] + $row['m2'] + $row['m11'] + $row['m12'] ;
    $m2 = $row['m3'] + $row['m4'] + $row['m13'] + $row['m14'] ;
    $m3 = $row['m5'] + $row['m6'] + $row['m15'] + $row['m16'] ;
    $m4 = $row['m7'] + $row['m8'] + $row['m17'] + $row['m18'] ;
    $m5 = $row['m9'] + $row['m10'] + $row['m19'] + $row['m20'] ;
}

echo "<h1 align=center>Public Assessment</h1>";
echo "<table align=center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>M1:</th>";
echo "<th>M2</th>";
echo "<th>M3:</th>";
echo "<th>M4:</th>";
echo "<th>M5:</th>";
echo "</tr>";
echo "<td>$f_email</td>";
echo "<td>$m1</td>";
echo "<td>$m2</td>";
echo "<td>$m3</td>";
echo "<td>$m4</td>";
echo "<td>$m5</td></tr>";
echo "</table>";
?>
