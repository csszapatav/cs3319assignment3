<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$ohipnumero = $_POST["ohip"];

	$query = "SELECT * FROM patient WHERE ohip = " .$ohipnumero;

	$result = mysqli_query($connection, $query);

	if (!$result){
		die("database query failed");
	}

	echo " First Name: ".$row["firstname"]." Last Name:".$row["lastname"]." OHIP number: ".$row[ohip];

	mysqli_free_result($result);
	mysqli_close($connection);

?>


</body>
</html>

