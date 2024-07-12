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
            background: #8b5a2b; /* Warna coklat untuk header */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
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
            background: #a87245; /* Warna coklat untuk link navigasi */
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #8b5a2b; /* Warna hover untuk link navigasi */
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
            color: #8b5a2b; /* Warna coklat untuk judul */
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
            background: #8b5a2b; /* Warna coklat untuk footer */
            color: #fff;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
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

        <section id="contact" class="contact">
            <h2>Contact</h2>
            <form action="#" method="post">
			 <input type="id" name="id" placeholder="Your Id" required>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="submit" value="Send Message">
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Your Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
