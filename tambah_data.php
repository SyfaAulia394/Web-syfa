<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #FFB6C1; /* Light Grey */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #C6557F; /* Dark Grey */
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container {
            background:  #FADADD; /* White */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
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

        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .btn {
            width: 50%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 6px;
            background-color: #C6557F;  /* Dark Grey */
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #495057; /* Darker Grey */
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container a {
            width: 48%;
        }
    </style>
</head> 
<body> 
    <div class="form-container">
        <h1>Tambah Data Mahasiswa</h1> 
        <form method="post" action="form_simpan.php" enctype="multipart/form-data"> 
            <table>
                <tr> 
                    <td>Id</td> 
                    <td><input type="text" id="id" name="id" required></td> 
                </tr> 
                <tr> 
                    <td>Nama</td> 
                    <td><input type="text" id="nama" name="nama" required></td> 
                </tr> 
                <tr> 
                    <td>Email</td> 
                    <td><input type="text" id="email" name="email" required></td> 
                </tr> 
            </table> 
            <hr> 
            <div class="btn-container">
                <input type="submit" class="btn" value="Simpan"> 
                <a href="index.php" class="btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
