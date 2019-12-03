<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	include 'connecttodb.php';
	$ohipnumero = $_POST["ohip"];

	$query = "SELECT * FROM patient WHERE ohip = ".$ohipnumero;
	
	$result = mysqli_query($connection, $query);

	if (!$result){
		die("database query failed");
	}

	while($row = mysqli_fetch_assoc($result)){
	echo 'First Name: '.$row["firstname"].'<br> Last Name:'.$row["lastname"].'<br> OHIP number: '.$row["ohip"];
	}
	mysqli_free_result($result);
	mysqli_close($connection);

?>


</body>
</html>

