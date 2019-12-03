<?php	
	$query = 'SELECT * from doctor';

	$result = mysqli_query($connection,$query);
	if(!$result){
		die("database query failed");
	}

	while ($row = mysqli_fetch_assoc($result)){
		echo '<option value="'.$row["licensenum"].'">';
		echo $row["firstname"].' '.$row["lastname"];
		echo '</option>';
	}
	mysqli_free_result($result);

?>

