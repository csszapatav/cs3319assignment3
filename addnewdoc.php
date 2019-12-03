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
   $licennum= $_POST["licensenum"];
   $firstname = $_POST["firstname"];
   $lastname =$_POST["lastname"];
   $specialty =$_POST["specialty"];
   $worklicdate =$_POST["licensedate"];
   $imagegurl = $_POST["url"];
   $workinhospital =$_POST["hosp"];
   $query = 'INSERT INTO doctor VALUES("'.$licennum.'", "'.$firstname.'","'.$lastname.'", "'.$specialty.'","'.$worklicdate.'","'.$workinhospital.'", "' . $imagegurl . '")';

   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);
?>

</body>
</html>
