<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background: #d2b48c; /* Background color coklat soft */
        }

        header {
            background:  #C6557F;  /* Warna coklat untuk header */
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #fff; /* Warna teks putih */
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            background: #C6557F;  /* Warna coklat untuk link navigasi */
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background:  #D9ABAB; /* Warna hover untuk link navigasi */
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .about, .projects, .contact {
            margin-bottom: 40px;
        }

        .about h2, .projects h2, .contact h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color:  #C6557F; /* Warna coklat untuk judul */
        }

        .about-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .about-content img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.2em;
            max-width: 800px;
        }

        .projects-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .project {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .project img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project:hover {
            transform: translateY(-10px);
        }

        .project-info {
            padding: 20px;
        }

        .project-info h3 {
            margin-top: 0;
            font-size: 1.5em;
        }

        .project-info p {
            color: #666;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact form input, .contact form textarea {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact form input[type="submit"] {
            background: #8b5a2b; /* Warna coklat untuk tombol submit */
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact form input[type="submit"]:hover {
            background: #a87245; /* Warna hover untuk tombol submit */
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #C6557F; /* Warna coklat untuk footer */
            color: #fff;
        }

        footer p {
            margin: 0;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #fff;
            font-size: 1.5em;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #D9ABAB; /* Warna hover untuk ikon sosial media */
        }
    </style>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#social-icons">Sosmed</a> <!-- Tambahkan link ke halaman data mahasiswa -->
        </nav>
    </header>

    <div class="container">
        <section id="about" class="about">
            <h2>About Me</h2>
            <div class="about-content">
                <img src="saya1.jpg" alt="Foto Saya">
                <p>Halo! Nama saya SYFA AULIA, seorang Mahasiswa yang sedang menempuh pendidikan di Kampus
                POLITEKNIK NEGERI PADANG. Jurusan saya adalah Teknologi Informasi, dengan prodi D3 Teknik Komputer.
                Saya selalu bersemangat untuk mempelajari hal-hal baru serta menghadapi tantangan baru.</p>
            </div>
        </section>

        <section id="projects" class="projects">
            <h2>Projects</h2>
            <div class="projects-grid">
                <div class="project">
                    <img src="image.jpg" alt="Project 1">
                    <div class="project-info">
                        <h3>Project 1</h3>
                        <p>"Jangan takut gagal, takutlah kalau WiFi mati saat deadline."</p>
                    </div>
                </div>
                <div class="project">
                    <img src="image.jpg" alt="Project 2">
                    <div class="project-info">
                        <h3>Project 2</h3>
                        <p>"Jangan tunggu peluang, kejar dan tangkap dia sampai ngos-ngosan!."</p>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak proyek sesuai kebutuhan -->
            </div>
        </section>
    </div>

    <footer id="social-icons">
        <p>&copy; 2024 Syfa Aulia. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/p/C0rHbYHSrma/?igsh=NWJqMXIxejh1Y3N5" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #D9ABAB;
        }

        h1 {
            color: #C6557F;
            text-align: center;
            margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #C6557F;
            color: white;
        }

        tr:nth-child(even) {
            background-color:  #FADADD;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color:white;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #C6557F;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px #999;
        }

        .btn:hover {
            background-color: #FFB6C1;
        }

        .btn:active {
            background-color: #C6557F;
            box-shadow: 0 1px #666;
            transform: translateY(2px);
        }

        .form-inline {
            margin-bottom: 20px;
        }

        .form-inline input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #C6557F;
            border-radius: 5px;
        }

        .form-inline button {
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #C6557F;
            background-color: #C6557F;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-inline button:hover {
            background-color: #FFB6C1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="tambah_data.php" class="btn">Tambah Data</a><br><br>
        <form class="form-inline" method="get" action="index.php">
            <input type="text" class="form-control mr-sm-2" name="search" placeholder="Cari...">
            <button type="submit" class="btn btn-outline-success">Cari</button>
        </form>
        <a href="print_pdf.php"><button class="btn">Print</button></a>
        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                
                <th colspan="2">Aksi</th>
            </tr>
            <?php
include "koneksi.php";

// Handle search query
$search = isset($_GET['search']) ? mysqli_real_escape_string($connect, $_GET['search']) : '';
$query = "SELECT * FROM data_saya";
if ($search) {
    $query .= " WHERE id LIKE '%$search%' OR nama LIKE '%$search%' OR email LIKE '%$search%'";
}

// Perform the query
$sql = mysqli_query($connect, $query);

// Check for query execution success
if (!$sql) {
    // Display error message and exit script
    die('Error querying database: ' . mysqli_error($connect));
}

// Fetch data from the result set
while ($data = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td class='action-links'><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td class='action-links'><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
}

// Release the result set
mysqli_free_result($sql);

// Close the database connection
mysqli_close($connect);
?>
