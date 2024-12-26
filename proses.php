<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap input dari form
    $nama = $conn->real_escape_string($_POST['nama']);
    $alamat = $conn->real_escape_string($_POST['alamat']);
    $email = $conn->real_escape_string($_POST['email']);
    $pesan = $conn->real_escape_string($_POST['pesan']);
    
    // Menyisipkan data ke dalam tabel buku_tamu dengan kolom nama, alamat, email, dan pesan
    $sql = "INSERT INTO buku_tamu (nama, alamat, email, pesan) VALUES ('$nama', '$alamat', '$email', '$pesan')";
    
    // Mengeksekusi query
    if ($conn->query($sql) === TRUE) {
        // Mengarahkan kembali ke halaman buku_tamu.php setelah data berhasil disimpan
        header("Location: buku_tamu.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
