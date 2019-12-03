<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h2> Deleted</h2>
<ol>
<?php
   $deletedDoctor= $_POST["doctor"];
   $query = 'DELETE FROM doctor WHERE licennum = "'.$deletedDoctor.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was deleted";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
