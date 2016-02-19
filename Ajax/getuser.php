<?php
$q=$_GET["q"];

$con = mysql_connect('192.168.199.109', 'admin', 'huiju2015');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("tkt_db", $con);

$sql="SELECT * FROM Ajax WHERE id = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1' style="color:red">
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['FirstName'] . "</td>";
 echo "<td>" . $row['LastName'] . "</td>";
 echo "<td>" . $row['Age'] . "</td>";
 echo "<td>" . $row['Hometown'] . "</td>";
 echo "<td>" . $row['Job'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysql_close($con);
?>