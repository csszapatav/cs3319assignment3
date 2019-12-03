<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Treat:</h1>
<ol>
<?php
   $doctor= $_POST["doctor"];
   $patient = $_POST["patient"];
   
   $query = 'INSERT INTO doctorpatient VALUES ("'.$doctor.'", '.$patient.' )';
   if (!mysqli_query($connection, $query)) {
        die("Error: Assign failed" . mysqli_error($connection));
    }
   echo "Your doctor and patient were assigned!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
