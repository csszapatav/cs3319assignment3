<!DOCTYPE html>
<!-- the code is from writing some php code workshop -->
<html>
<head>
<meta charset="utf-8">
<title>Dr.Queries</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Welcome to the Doctor Database</h1>
<h2>General Doctor Query</h2>
<form action="getdoc.php" method="post"enctype="multipart/form-data" >
	<fieldset id="name">
		<input type="radio" value="firstname" name="name">First Name<br>
		<input type="radio" value="lastname" name="name">Last Name<br>
	</fieldset>
	<fieldset id="order">	
		<input type="radio" value="ASC" name="order">Ascending<br>
		<input type="radio" value="DESC"name="order">Decending<br>
	</fieldset>
	<input type="submit" value="Get Doctors">
</form>
<p>
<hr>
<p>
<h2>Doctor Query by License Date</h2>
<form action="getdoctorlicensedate.php" method="post">
	<input type="date" name="licensedate">
	<input type="submit">
</form>

<p>
<hr>
<p>
<h2>Add Doctor</h2>
<form action="adddoctor.php" method="post">
	First Name: <input type="text" name="firstname"><br>
	Last Name: <input type="text" name="lastname"> <br>
	Specialty: <input type="text" name="specialty"><br>
	License Date: <input type="date" name="licensedate"><br>
	Hospital: 
	<select>
		<?php
			#include'connecttodb.php";
			#include'gethospital.php";
		?>
	</select>
</form>

<p>
<hr>
<p>
<h2>Delete a Doctor Delete</h2>
<p> to be continued...<p>

<p>
<hr>
<p>
<h2>Update Hospital's Name</h2>
<form action="updatehospitalname.php" method="post">
	Select Hospital: 
	<select>
		#include'connnecttodb.php';
	<select>
	<br>
	New Hospital Name: <input type="text" name="hospitalName"><br>	
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
<form action="" method="post" enctype="multipart/form-data">
	Enter Patient OHIP Number: <input type="text" name="ohip"><br>
	<?php
		include"connecttodb.php";
		#include"patientselection.php";

?>
	<input type="submit" value="submit"><br>
</form>

<p>
<hr>
<p>
<h2>Treatment Information</h2>
<form action="" method="post">
	Select patient: 
	<select>
		<?php
			include'connecttodb.php';
			include'patientselection.php';
		?>
	</select>
	<br>
	Select Doctor:
	<select>
		<?php
			#include'connecttodb.php'
			#include'doctordropdown.php'
		?>
	</select>
	<br>
	<input type="radio" name="option" value="treat">apply treatment<br>
	<input type="radio" name="option" value="notreat">remove treatment<br>
	<input type="submit" value="submit request"><br>
</form>

<p>
<hr>
<p>
<h2>Doctors without patients</h2>
<?php
	#include"connecttodb.php"
	#include"doctornopatient.php"

?>


<p>
<hr>
<p>
<h2>BONUS: Upload Doctor Picture</h2>
<p> to be continued...<p>
<!--
<form action="addnewpet.php" method="post">
New Pet's Name: <input type="text" name="petname"><br>
New Pet's Species: <br>
<input type="radio" name="species" value="dog">Dog<br>
<input type="radio" name="species" value="cat">Cat<br>
<input type="radio" name="species" value="bird">Bird<br>
<input type="file" name="file" id="file"><br>
For which customer: <br>
<?php
include 'getdata.php';
?>
<input type="submit" value="Add New Pet">
</form>
<?php
mysqli_close($connection);
?>
-->
</body>
</html> 
