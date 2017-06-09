<?php

$con=mysqli_connect("localhost","root","12345","adduser");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM adduser");
echo "<table border='2' style='width:90%'>
<tr>
<th>First name</th>
    <th>Last name</th> 
    <th>Email</th>
    <th>Gender</th>
    <th>Education</th>
    <th>Skills</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['First name'] . "</td>";
echo "<td>" . $row['Last name'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Education'] . "</td>";
echo "<td>" . $row['Skills'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>