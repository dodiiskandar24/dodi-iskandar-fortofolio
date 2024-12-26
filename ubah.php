<?php 
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Pastikan ID adalah angka untuk menghindari SQL Injection

    // Ambil data pesan berdasarkan ID
    $sql = "SELECT * FROM buku_tamu WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Kesalahan pada query: " . $conn->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>Pesan tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p>ID tidak ditemukan.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
            padding: 20px;
            margin: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px 20px;
            text-align: center;
        }
        header nav a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .guestbook {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .guestbook h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        form input, form textarea, form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form textarea {
            height: 100px;
            resize: none;
        }
        form button {
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        form button:hover {
            background: #444;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #555;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ubah Pesan</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="buku_tamu.php">Buku Tamu</a>
        </nav>
    </header>
    
    <section class="guestbook">
        <h2>Form Ubah Pesan</h2>
        <form action="proses_ubah.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" placeholder="Nama" required>
            <input type="text" name="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" placeholder="Alamat" required>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" placeholder="Email" required>
            <textarea name="pesan" placeholder="Pesan" required><?php echo htmlspecialchars($row['pesan']); ?></textarea>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Fotofolio</p>
    </footer>
</body>
</html>
