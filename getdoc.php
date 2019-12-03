<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	include"connecttodb.php";
?>

<ol>
<form action="getdocinfo.php" method="post">

<?php
	$order = $_POST["order"];
	$name = $_POST["name"];
	$query = 'SELECT * FROM doctor ORDER BY '.$name.' '.$order;

	$result = mysqli_query($connection,$query);
	if (!result){
		die("database query2 failed.");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo '<li><br>'.'<input type="radio" name="doctor" value="';
		echo $row["licennum"].'">'.$row["firstname"].' '.$row["lastname"].'</li><br>';
	}
	mysqli_free_result($result);
?>

</ol>
<input type="submit" value="Get Doctor Info">
</form>

<?php
	mysqli_close($connection);
?>
</body>
</html>
