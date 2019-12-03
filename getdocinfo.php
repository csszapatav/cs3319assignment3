<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<ol>
<?php
   $doctor= $_POST["doctor"];
   $query = 'SELECT * FROM doctor INNER JOIN hospital ON worksinhospitalcode = hospcode  AND licennum = "' . $doctor . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo 'License number is: '.$row["licennum"].' <br> ';
        echo 'First name is: '.$row["firstname"].' <br>';
        echo 'Last name is: '.$row["lastname"].' <br>';
        echo 'Specialty is: '.$row["specialty"].' <br>';
        echo 'Date of the license: '.$row["datelicense"].' <br>';
        echo 'Working hospital: '. $row["hospname"].'<br> ';
	echo 'Doctor image: <img src= "'.$row["docimage"].'" height="60" width="60">';
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
