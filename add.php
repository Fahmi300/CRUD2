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

            select {
                width: 95%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
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
        </style>
    </head>
    <body>
        <h2>Add Data</h2>
        <div class="homebut">
            <p>
                <a href="index.php">Home</a>
            </p>
        </div>
        <form action="addAction.php" method="post", name="add">
            <label class="required">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
            <br> <br>

            <label class="required">Umur</label>
            <input type="number" name="nama" placeholder="Masukkan Umur">
            <br> <br>

            <label class="required">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir">
            <br> <br>

            <label class="required">Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="0">Laki-Laki</option>
                <option value="1">Perempuan</option>
            </select>
            <br> <br>

            <label class="required">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email Aktif">
            <br> <br>

            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat (Optional)"Optional>
            <br> <br>

            <label class="required">No. Telepon</label>
            <input type="text" name="notelp" placeholder="Masukkan Nomor Telepon" ">
            <br> <br>

            <input type="submit" name="submit" value="Add" >
        </form>
    </body>
</html>