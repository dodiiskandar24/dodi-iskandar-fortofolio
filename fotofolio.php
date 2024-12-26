<?php include 'db.php'; ?>         
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Fotofolio</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif; /* Menggunakan font modern */
            background: linear-gradient(45deg, #2c3e50, #34495e); /* Gradasi gelap */
            color: #fff; /* Warna teks putih agar terlihat jelas */
            line-height: 1.6;
            font-size: 14px; /* Ukuran font lebih kecil */
            text-rendering: optimizeLegibility;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        header h1 {
            font-size: 2em; /* Ukuran font header disesuaikan lebih kecil */
            font-weight: bold;
            letter-spacing: 1px;
        }
        header nav a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            text-transform: uppercase;
            transition: color 0.3s ease, transform 0.3s ease;
            font-size: 1em;
        }
        header nav a:hover {
            color: #fff;
            transform: translateY(-3px);
        }
        section {
            padding: 120px 20px 20px;
            margin-top: 80px; /* Menambahkan jarak untuk header yang fixed */
            display: grid;
            grid-template-columns: 1fr 1fr; /* Membuat 2 kolom */
            gap: 30px;
        }
        .bio-container, .education, .hobbies, .organizations {
            background: rgba(0, 0, 0, 0.7); /* Transparan gelap */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Menambah efek shadow */
        }
        .bio-container h2, .education h2, .hobbies h2, .organizations h2 {
            color: #FFD700;
            font-size: 1.5em; /* Ukuran font judul sedikit lebih kecil */
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
            border-bottom: 2px solid #FFD700;
            padding-bottom: 10px;
        }
        .bio-container table {
            width: 100%;
            margin-top: 15px;
            font-size: 1.1em; /* Ukuran font tabel disesuaikan lebih kecil */
        }
        .bio-container table td {
            padding: 12px 15px;
            vertical-align: top;
        }
        .bio-container img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid #FFD700;
            margin-left: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        .bio-container td img {
            margin: 0;
        }
        .education-list, .hobbies-list, .organizations-list {
            list-style: none;
            padding-left: 0;
            font-size: 1.1em; /* Ukuran font list disesuaikan lebih kecil */
        }
        .education-list li, .hobbies-list li, .organizations-list li {
            margin-bottom: 12px;
            padding: 12px;
            background: #444; /* Background gelap untuk list */
            border-left: 5px solid #FFD700;
            transition: background 0.3s ease;
            border-radius: 5px;
            color: #fff; /* Warna teks putih */
        }
        .education-list li:hover, .hobbies-list li:hover, .organizations-list li:hover {
            background: #555; /* Hover lebih gelap */
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        footer p {
            margin-bottom: 10px;
            font-size: 1em;
        }
        footer .social-media a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.3em;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        footer .social-media a:hover {
            color: #fff;
            transform: translateY(-3px);
        }
        footer .social-media img {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin-right: 8px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            section {
                grid-template-columns: 1fr; /* Membuat layout menjadi satu kolom pada perangkat kecil */
            }
            header h1 {
                font-size: 1.8em;
            }
            header nav a {
                font-size: 1em;
                margin: 0 8px;
            }
            .bio-container {
                padding: 15px;
            }
            .bio-container img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Fotofolio Saya</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="fotofolio.php">Fotofolio</a>
            <a href="buku_tamu.php">Buku Tamu</a>
        </nav>
    </header>

    <section>
        <!-- Kolom Biodata dan Riwayat Pendidikan -->
        <div class="bio-container">
            <h2>Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: Dodi Iskandar</td>
                    <td rowspan="7">
                        <img src="profil.jpg" alt="Foto Profil">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: 23050809</td>
                </tr>
                <tr>
                    <td>Program studi</td>
                    <td>: Ilmu Komputer</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>: Teknologi dan Bisnis</td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td>: Universitas Yatsi Madani</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: Laki-laki</td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>: 085210357970</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: Islam</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>: SMK (SMK Cokroaminoto Muaradua)</td>
                </tr>
            </table>
        </div>

        <div class="education">
            <h2>Riwayat Pendidikan</h2>
            <ul class="education-list">
                <li><strong>2018 - 2021:</strong> SMK Cokroaminoto Muaradua</li>
                <li><strong>2016 - 2018:</strong> SMP Negeri Lubuk Liku Bungamas</li>
                <li><strong>2009 - 2015:</strong> SD Negeri Lubuk Liku Bungamas</li>
            </ul>
        </div>

        <!-- Kolom Hobi dan Organisasi -->
        <div class="hobbies">
            <h2>Hobi</h2>
            <ul class="hobbies-list">
                <li>Badminton</li>
                <li>Pengembangan Web</li>
                <li>Bermain Game</li>
                <li>Berkebun</li>
                <li>Olahraga</li>
            </ul>
        </div>

        <div class="organizations">
            <h2>Organisasi</h2>
            <ul class="organizations-list">
                <li>Anggota Himpunan Mahasiswa Ilmu Komputer</li>
                <li>UKM Badminton UYM</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="social-media">
            <a href="https://wa.me/6285210357970" target="_blank">
                <img src="https://png.pngtree.com/png-clipart/20181003/ourmid/pngtree-whatsapp-social-media-icon-design-template-vector-whatsapp-logo-png-image_3654780.png" alt="WhatsApp"> WhatsApp
            </a>
            <a href="https://www.instagram.com/dodiiskandar931/profilecard/?igsh=Mnp3eDFwaG90bTQw" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" alt="Instagram"> Instagram
            </a>
            <a href="https://www.facebook.com/dodi.andesbung" target="_blank">
                <img src="https://cdn.pixabay.com/photo/2021/06/15/12/51/facebook-6338507_960_720.png" alt="Facebook"> Facebook
            </a>
        </div>
    </footer>
</body>
</html>
