<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Here are your Doctors Before the Date you enter:</h1>
<ol>
<?php

   $date= $_POST["licensedate"];
   $query = 'SELECT * FROM doctor WHERE datelicense < "'.$date.'"';
   $result=mysqli_query($connection,$query);
   if (!mysqli_query($connection, $query)) {
        die("Error: Search failed" . mysqli_error($connection));
    }
 
   while ($row=mysqli_fetch_assoc($result)) {
        echo '<br><li>';
        echo ''.$row["firstname"].' '.$row["lastname"].' <br>';
	echo 'Specialty is : '.$row["specialty"].' <br>';
	echo 'License date is : '.$row["datelicense"].' <br>';
        
     }
   mysqli_close($connection);
?>
</body>
</html>
