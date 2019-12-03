<?php

	$query = 'SELECT * FROM hospital';

	$result = mysqli_query($connection, $query);

	if (!$result){
		die("database query failed");
	}
	while ($row = mysqli_fetch_assoc($result)){
		echo '<input type="radio" name="hosp" value="'.$row["hospcode"].'">'.$row["hospcode"].' - '.$row["hospname"].'<br>';
	}

	mysqli_free_result($result);
	mysqli_close($connection);
?>

