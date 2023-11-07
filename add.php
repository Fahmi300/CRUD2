<html>
    <head>
        <title>Add Data</title>
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

            .required::after {
                content: '*';
                color: orangered;
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
        <h2>Masukkan Data</h2>
        <div class="homebut">
            <p>
            <button>
                <a href="index.php" style="text-decoration: none; color:black; ">Kembali</a>
            </button>
            </p>
        </div>
        <form action="addAction.php" method="post", name="add">
            <label class="required">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
            <br> <br>

            <label class="required">Umur</label>
            <input type="number" name="umur" placeholder="Masukkan Umur">
            <br> <br>

            <label class="required">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir">
            <br> <br>

            <label class="required jns">Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            <br> 

            <label class="required">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Aktif">
            <br> <br>

            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat (Optional)"Optional>
            <br> <br>

            <label class="required">No. Telepon</label>
            <input type="text" name="no_telp" placeholder="Masukkan Nomor Telepon" >
            <br> <br>

            <input type="submit" name="submit" value="Tambah" >
        </form>
    </body>
</html>