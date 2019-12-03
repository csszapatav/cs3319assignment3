<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
   include 'connecttodb.php';
?>
<h1>Here are your Doctor:</h1>
<ol>
<?php
   $licensenum= $_POST["licensenum"];
   $firstname = $_POST["firstname"];
   $lastname =$_POST["lastname"];
   $specialty =$_POST["specialty"];
   $workingdate =$_POST["licensedate"];
   $workinhos =$_POST["hosp"];
   $query = 'INSERT INTO doctor VALUES("'.$licensenum.'", "'.$firstname.'","'.$lastname.'", "'.$specialty.'","'.$workingdate.'","'.$workinhos.'", "' . $docpic . '")';

   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);
?>

</body>
</html>
