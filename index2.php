<!DOCTYPE html>
<!-- The code is from writing some php code workshop -->
<html>
<head>
<meta charset="utf-8">
<title>A3-3319 Dr. Queries</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Welcome to the Doctor Database</h1>
<h2>General Doctor Query</h2>
<form action="getdoc.php" method="post" enctype="multipart/form-data" >
	<fieldset id="name">
		<input type="radio" value="firstname" name="name">First Name<br>
		<input type="radio" value="lastname" name="name">Last Name<br>
	</fieldset>
	<fieldset id="order">	
		<input type="radio" value="ASC" name="order">Ascending<br>
		<input type="radio" value="DESC" name="order">Decending<br>
	</fieldset>
	<input type="submit" value="Get Doctors">
</form>
<p>
<hr>
<p>
<h2>Doctor Query by License Date</h2>
<form action="getdoctorbylicensedate.php" method="post">
	<input type="date" name="licensedate">
	<input type="submit">
</form>

<p>
<hr>
<p>
<h2>Add Doctor</h2>
<form action="addnewdoc.php" method="post">
	First Name: <input type="text" name="firstname"><br>
	Last Name: <input type="text" name="lastname"> <br>
	Specialty: <input type="text" name="specialty"><br>
	License Date: <input type="date" name="licensedate"><br>
	License Num: <input type="text" name="licensenum"><br>
	<input type="text" name="url"><br>
	Hospital: 
	<br>
		<?php
			include 'connecttodb.php';
			include 'hospitallist.php';
		?>
	<input type="submit" value="add doctor"> <br>
</form>

<p>
<hr>
<p>
<h2>Delete Doctor </h2>
<?php
include 'connecttodb.php';
?>
<h1>List of Doctors:</h1>
<form action="delete.php" method="post">

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


<hr>
<p>
<h2>Update Hospital's Name</h2>
<form action="newhname.php" method="post">
	Select Hospital:<br> 
	<?php
		include'connecttodb.php';
		include'hospitallist.php';
	?>
	<br>
	New Hospital Name: <input type="text" name="newName"><br>	
	<input type="submit" value="Update"><br>
</form>
<br>


<p>
<hr>
<p>
<h2>Current Head Doctors</h2>
<?php
	include'connecttodb.php';
	include'headdoclist.php';
?>


<p>
<hr>
<p>
<h2>Patient Information</h2>
<form action="getpatientinfo.php" method="post" enctype="multipart/form-data">
	Enter Patient OHIP Number: <input type="text" name="ohip"><br>
	<?php
		include'connecttodb.php';
		#include"patientselection.php";

?>
	<input type="submit" value="submit"><br>
</form>

<p>
<hr>
<p>
<h2>Treatment Information</h2>

<h2>8.Select Doctor and Patient for Treatment</h2>
<form action="treat.php" method="post">
<ol>
<?php
   echo 'Select Doctor:';
   $query = 'SELECT * FROM doctor';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="doctor" value="';
        echo $row["licennum"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<ol>
<?php

   echo 'Select Patient:';
   $query = 'SELECT * FROM patient';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="patient" value="';
        echo $row["OHIP"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);

?>
</ol>
<input type="submit" value="Apply Treatment">
</form>



<h2>Stop Doctors and Patients from Treatment</h2>
<form action="ntreat.php" method="post">
<ol>
<?php
   echo 'Select Doctor:';
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
<ol>
<?php

   echo 'Select Patient:';
   $query = 'SELECT * FROM patient';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="patient" value="';
        echo $row["OHIP"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);

?>
</ol>
<input type="submit" value="Stop Treatment">
</form>



<p>
<hr>
<p>
<h2>Doctors without patients</h2>
<?php
	include 'connecttodb.php';
	include'chillingdoctor.php';

?>

</body>
</html> 
