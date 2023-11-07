<?php
// Include the database connection file
require_once("config.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM biodata ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nama</strong></td>
			<td><strong>Umur</strong></td>
			<td><strong>Tanggal Lahir</strong></td>
            <td><strong>Jenis Kelamin</strong></td>
            <td><strong>Alamat</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>No. Telepon</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nama']."</td>";
			echo "<td>".$res['umur']."</td>";
            echo "<td>".$res['tgl_lahir']."</td>";
            echo "<td>".$res['jenis_kelamin']."</td>";
            echo "<td>".$res['alamat']."</td>";
            echo "<td>".$res['email']."</td>";
			echo "<td>".$res['no_telp']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>