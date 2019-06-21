<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: .1px solid white;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','myband');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM agenda WHERE dag = '$q'";
$result = mysqli_query($con,$sql);

echo "
<div class='dayBox'>
<table>
<tr>
<th>Day</th>
<th>Time</th>
<th>Information</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Titel'] . "</td>";
    echo "<td>" . $row['Tijd'] . "</td>";
    echo "<td>" . $row['Inhoud'] . "</td>";
    echo "</tr>";
}
echo "</table>
</div>";
mysqli_close($con);
?>
</body>
</html>
