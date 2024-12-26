<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Purple to blue gradient */
            color: #fff;
            line-height: 1.6;
            font-size: 14px;
            text-rendering: optimizeLegibility;
        }
        header {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        header nav a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        header nav a:hover {
            color: #fff;
            transform: translateY(-3px);
        }
        .guestbook {
            padding: 120px 20px 20px;
            text-align: center;
        }
        .guestbook h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #FFD700;
        }
        form {
            max-width: 600px;
            margin: 0 auto 30px;
            padding: 25px;
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
        }
        form input, form textarea, form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }
        form input:focus, form textarea:focus {
            outline: none;
            border-color: #FFD700;
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.7);
        }
        form button {
            background: #FFD700;
            color: #1e1e2f;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        form button:hover {
            background: #fff;
            color: #1e1e2f;
        }
        .messages {
            max-width: 800px;
            margin: 0 auto;
        }
        .message {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
        }
        .message strong {
            color: #FFD700;
            font-size: 1.2em;
        }
        .message small {
            display: block;
            color: #ccc;
            margin-top: 10px;
        }
        .message .actions {
            margin-top: 10px;
            display: flex;
            justify-content: flex-start;
            gap: 15px;
        }
        .message .actions a {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border: 1px solid #FFD700;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .message .actions a:hover {
            background: #FFD700;
            color: #1e1e2f;
            transform: translateY(-3px);
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Buku Tamu</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="buku_tamu.php">Buku Tamu</a>
            <a href="fotofolio.php">Fotofolio</a>
        </nav>
    </header>
    <section class="guestbook">
        <h2>Pesan Pengunjung</h2>
        <form action="proses.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="pesan" placeholder="Pesan" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
        <h3>Pesan yang Dikirim</h3>
        <div class="messages">
            <?php
            // Contoh PHP untuk menampilkan data dari database
            include 'db.php'; // Koneksi database
            $sql = "SELECT id, nama, pesan FROM buku_tamu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="message">';
                    echo '<strong>' . htmlspecialchars($row['nama']) . '</strong>';
                    echo '<p>' . htmlspecialchars($row['pesan']) . '</p>';
                    echo '<div class="actions">';
                    echo '<a href="ubah.php?id=' . $row['id'] . '">Ubah</a>';
                    echo '<a href="hapus.php?id=' . $row['id'] . '">Hapus</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada pesan yang ditemukan.</p>';
            }
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Fotofolio</p>
    </footer>
</body>
</html>
