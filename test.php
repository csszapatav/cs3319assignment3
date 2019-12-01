<?php
   $query = "SELECT * FROM owner"; // put query here
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

  # http://cs3319.gaul.csd.uwo.ca/vm188/phpworkshop/index2.php

   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) { // play here to change output
        echo '<input type="radio" name="petowners" value="';
        echo $row["ownerid"];
        echo '">' . $row["fname"] . " " . $row["lname"] . "<br>";
   }
   mysqli_free_result($result);
?>
