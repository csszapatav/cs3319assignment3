<?php
	$query = "SELECT firstname,lastname,licennum, headdoclicensenum FROM doctor, hospital WHERE licennum = headdoclicensenum" ;

	$result = mysqli_query($connection, $query);

	if(!$result){
		die("database query failed");
	}

	while ($row = mysqli_fetch_assoc($result)){
		echo $row["firstname"]." ".$row["lastname"]."<br>";
	}

	mysqli_free_result($result);
	mysqli_close($connection);
?>

