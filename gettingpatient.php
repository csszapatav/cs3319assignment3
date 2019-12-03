<?php

   $patient= $_POST["ohip"];
   $query = 'SELECT patient.firstname, patient.lastname, doctor.firstname AS "f", doctor.lastname AS "l" FROM doctor, patient WHERE ohip = '.$patient.' AND licennum IN (SELECT doclicensenum FROM doctorpatient WHERE patientOHIP = '.$patient.')';
	echo $query;
   $result=mysqli_query($connection,$query);
   if (!mysqli_query($connection, $query)) {
        die("Error: Search failed" . mysqli_error($connection));
   }
   
   while ($row=mysqli_fetch_assoc($result)) {
        echo '<br>Patient is '.$row["firstname"].' ';
        echo ' '.$row["lastname"].' <br>';
        echo 'Doctor is: '.$row["f"].' ';
        echo ' '.$row["l"].' <br>';
        
     }   
  
   mysqli_free_result($result); 
   mysqli_close($connection);
?>
