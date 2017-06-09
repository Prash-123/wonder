
		  
	<?php	   
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "adduser";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$Email=$_POST['Email'];
$radio=$_POST['rad'];
$tarea=$_POST['tarea'];



if(isset($_POST['rad']))
	$radio = $_POST['rad'];
	
	if(isset($_POST['dropdown']))
	$dropdown = $_POST['dropdown'];
	

$sql = "INSERT INTO `adduser` (`First name`,`Last name`,`Email`,`Gender`,`Education`,`Skills`)
VALUES ('$fname','$lname','$Email','$radio','$dropdown','$tarea')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
    <head>
        <title>Add User</title>
</head>
<body>
<input type="button" Value ="go to list user page" onclick =" window.location.href = 'userlistings.php'">

</body>