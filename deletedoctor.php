<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Here are your doctors:</h1>
<form action="delete.php" method="post">

<h2>Which you want to delete?</h2>
<ol>
<?php
   
   $query = 'SELECT * FROM doctor';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="doctor" value="';
        echo $row["licensenum"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<input type="submit" value="Delete this doctor">
</form>
<?php
   mysqli_close($connection);
?>
</body>
</html>
