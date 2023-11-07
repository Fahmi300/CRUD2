<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("config.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
    $tgl_lahir = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $no_telp = mysqli_real_escape_string($mysqli, $_POST['no_telp']);
		
	// Check for empty fields
	if (empty($nama) || empty($umur) || empty($email) || empty($tgl_lahir) || empty($jenis_kelamin) || empty($no_telp)) {
		if (empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($umur)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($tgl_lahir)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if (empty($jenis_kelamin)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if (empty($no_telp)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`nama`,`umur`,`tgl_lahir`, `jenis_kelamin', `alamat`,`email`, `no_telp`) VALUES ('$nama', '$umur', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$email', '$no_telp')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>