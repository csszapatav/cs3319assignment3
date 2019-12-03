<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Not Treating:</h1>
<ol>
<?php
   $doctor= $_POST["doctor"];
   $patient = $_POST["patient"];
   
   $query = 'DELETE FROM doctorpatient WHERE doclicensenum ="'.$doctor.'" AND patientOHIP = '.$patient;
   if (!mysqli_query($connection, $query)) {
        die("Error: Assign failed" . mysqli_error($connection));
    }
   echo "Your doctor and patient were stopped!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>

