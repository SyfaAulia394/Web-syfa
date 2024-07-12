<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D9ABAB; /* Very light beige background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #C6557F; /* Softer brown */
        }

        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], input[type="button"] {
            width: 50%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #C6557F; /* Softer brown */
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #B44A6F; /* Slightly darker brown */
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container a {
            text-decoration: none;
            width: 48%;
        }

        .btn-container input[type="button"] {
            width: 100%;
            background-color: #C6557F; /* Softer brown */
        }

        .btn-container input[type="button"]:hover {
            background-color: #B44A6F; /* Slightly darker brown */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ubah Data Mahasiswa</h1>
        <?php
        // Load file koneksi.php
        include "koneksi.php";

        // Ambil data id yang dikirim melalui URL
        $id = $_GET['id'];

        // Query untuk menampilkan data berdasarkan id yang dikirim
        $query = "SELECT * FROM data_saya WHERE id='$id'";
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

        if (!$sql) {
            die("Query gagal: " . mysqli_error($connect));
        }

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

        if (!$data) {
            die("Data tidak ditemukan.");
        }
        ?>
        <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" id="id" name="id" value="<?php echo $data['id']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" id="email" name="email" value="<?php echo $data['email']; ?>"></td>
                </tr>
            </table>
            <hr>
            <div class="btn-container">
                <input type="submit" value="Ubah">
                <a href="index.php"><input type="button" value="Batal"></a>
            </div>
        </form>
    </div>
</body>
</html>
