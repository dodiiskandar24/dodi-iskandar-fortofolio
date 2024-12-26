<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $sql = "DELETE FROM buku_tamu WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect ke halaman buku tamu setelah penghapusan
        header("Location: buku_tamu.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
