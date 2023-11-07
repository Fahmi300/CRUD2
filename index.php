<?php
// Include the database connection file
require_once("config.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM biodata ORDER BY ID DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2 style="text-align: center;">Homepage</h2>
	<p>
        <button>
            <a href="add.php" style="text-decoration: none; color:black; ">Tambah</a>
        </button>
	</p>
	<table width='100%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nama Lengkap</strong></td>
			<td><strong>Umur</strong></td>
			<td><strong>Tanggal Lahir</strong></td>
            <td><strong>Jenis Kelamin</strong></td>
            <td><strong>Alamat lengkap</strong></td>
            <td><strong>Email Aktif</strong></td>
            <td><strong>Nomor Telepon</strong></td>
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
			echo "<td><a href=\"edit.php?ID=$res[ID]\">Edit</a> | 
			<a href=\"delete.php?ID=$res[ID]\" onClick=\"return confirm('Apakah Yakin ingin Dihapus?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>