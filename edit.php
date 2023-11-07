<?php
// Include the database connection file
require_once("config.php");

// Get id from URL parameter
$ID = $_GET['ID'];

// Select data associated with this particular ID
$result = mysqli_query($mysqli, "SELECT * FROM biodata WHERE ID = $ID");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nama = $resultData['nama'];
$umur = $resultData['umur'];
$tgl_lahir = $resultData['tgl_lahir'];
$jenis_kelamin = $resultData['jenis_kelamin'];
$alamat = $resultData['alamat'];
$email = $resultData['email'];
$no_telp = $resultData['no_telp'];
?>
<html>
<head>	
	<title>Edit Data</title>
    <style>
            body {
                background-color: #fff;
                padding: 20px 20px 20px 20px;
                border-radius: 5px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                margin: 20px auto;
            }
            label {
                display: block;
                margin-bottom: 5px;
            }

            input{
                width: 95%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            input[type="radio"]{
                width: 10%;
            }
    </style>
</head>

<body>
    <h2>Ubah Data</h2>
    <p>
        <button>
            <a href="index.php" style="text-decoration: none; color:black; ">Kembali</a>
        </button>
    </p>
    
        <form action="editAction.php" method="post", name="edit">
            <label class="required">Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo $nama; ?>">
            <br> <br>

            <label class="required">Umur</label>
            <input type="number" name="umur" value="<?php echo $umur; ?>">
            <br> <br>

            <label class="required">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
            <br> <br>

            <label class="required">Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            <br> 

            <label class="required">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br> <br>

            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $alamat; ?>" Optional>
            <br> <br>

            <label class="required">No. Telepon</label>
            <input type="text" name="no_telp" value="<?php echo $no_telp; ?>" >
            <br> <br>

            <input type="hidden" name="ID" value=<?php echo $ID; ?>>
            <input type="submit" name="update" value="Ubah" >
        </form>

</body>
</html>