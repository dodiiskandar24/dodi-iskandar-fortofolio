<?php
include 'db.php';

// Periksa apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi dan ambil data dari form
    $id = intval($_POST['id']);
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $pesan = htmlspecialchars(trim($_POST['pesan']));

    // Periksa apakah semua field terisi dan valid
    if (!$id || !$nama || !$alamat || !$email || !$pesan) {
        echo "<p>Data tidak valid. Silakan periksa kembali.</p>";
        echo "<a href='buku_tamu.php'>Kembali</a>";
        exit;
    }

    // Update data ke database
    $sql = "UPDATE buku_tamu SET nama = ?, alamat = ?, email = ?, pesan = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Kesalahan pada query: " . $conn->error);
    }

    $stmt->bind_param("ssssi", $nama, $alamat, $email, $pesan, $id);

    if ($stmt->execute()) {
        echo "<p>Pesan berhasil diubah.</p>";
        echo "<a href='buku_tamu.php'>Kembali ke Buku Tamu</a>";
    } else {
        echo "<p>Terjadi kesalahan: " . $stmt->error . "</p>";
        echo "<a href='buku_tamu.php'>Kembali</a>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>Akses tidak valid.</p>";
    echo "<a href='buku_tamu.php'>Kembali</a>";
}
?>
