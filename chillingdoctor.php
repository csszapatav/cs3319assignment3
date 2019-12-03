<?php
   $query = 'SELECT * FROM doctor WHERE licennum NOT IN (SELECT doclicensenum FROM doctorpatient GROUP BY doclicensenum HAVING COUNT(*)>0)';
   $result=mysqli_query($connection,$query);

   if (!mysqli_query($connection, $query)) {
        die("Error: Search failed" . mysqli_error($connection));
    }
   while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo ''. $row["firstname"] .'  '. $row["lastname"] . '<br>';
     }

   mysqli_free_result($result);
   mysqli_close($connection);
?>
