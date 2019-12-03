<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Hospital:</h1>
<ol>
<?php
   $old= $_POST["hosp"];
   $new= $_POST["newName"];
   $query = 'UPDATE hospital SET hospname = "'.$new.'" WHERE hospcode ="'.$old.'" ';
   if (!mysqli_query($connection, $query)) {
        die("Error: Update failed" . mysqli_error($connection));
    }
   echo "Update Success!";
   mysqli_close($connection);
?>
</body>
</html>
