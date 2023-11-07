<?php

require_once("config.php");

if (isset($_POST['update'])) {

	$ID = mysqli_real_escape_string($mysqli, $_POST['ID']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
    $tgl_lahir = mysqli_real_escape_string($mysqli, $_POST['tgl_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$no_telp = mysqli_real_escape_string($mysqli, $_POST['no_telp']);	
    
	if (empty($nama) || empty($umur) || empty($email) || empty($tgl_lahir) || empty($jenis_kelamin) || empty($no_telp)) {
		if (empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($umur)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($tgl_lahir)) {
			echo "<font color='red'>tgl field is empty.</font><br/>";
		}
		if (empty($jenis_kelamin)) {
			echo "<font color='red'>jenis kel field is empty.</font><br/>";
		}
        if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if (empty($no_telp)) {
			echo "<font color='red'>notelp field is empty.</font><br/>";
		}

	} else {
	
		$result = mysqli_query($mysqli, "UPDATE biodata SET `nama` = '$nama', `umur` = '$umur', `tgl_lahir` = '$tgl_lahir', `jenis_kelamin` = '$jenis_kelamin', `email` = '$email', `alamat` = '$alamat',`no_telp` = '$no_telp' WHERE `ID` = '$ID'");
		
		echo "<p><font color='green'>Data berhasil dirubah!</p>";
		echo "<a href='index.php'>Kembali ke halaman utama</a>";
	}
}