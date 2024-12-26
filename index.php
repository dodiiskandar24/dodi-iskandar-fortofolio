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
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #8e2de2, #4a00e0); /* Elegant purple gradient */
            color: #fff;
            line-height: 1.5;
            font-size: 15px; /* Font lebih kecil */
            text-rendering: optimizeLegibility;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding-top: 80px;
        }

        /* Header */
        header {
            background: rgba(0, 0, 0, 0.7);
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
            font-size: 2em;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        header nav {
            margin-top: 10px;
        }
        header nav a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease, transform 0.3s ease;
            font-size: 1.1em; /* Ukuran font navigasi */
        }
        header nav a:hover {
            color: #fff;
            transform: translateY(-3px);
        }

        /* Main Section */
        section {
            padding: 30px;
            text-align: center;
            flex: 1;
        }

        /* About Me Section */
        .about-me {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        .profile {
            background: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 12px;
            width: 280px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .profile:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }
        .profile img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid #FFD700;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        .profile img:hover {
            transform: scale(1.1);
        }
        .name h2 {
            color: #FFD700;
            font-size: 2.2em;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        .bio h2 {
            color: #fff;
            margin-top: 15px;
            font-size: 1.6em;
            letter-spacing: 1px;
        }
        .bio p {
            color: #ddd;
            font-size: 1em;
            text-align: justify;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 25px;
            width: 100%;
            position: relative;
            margin-top: 30px;
        }
        footer p {
            margin-bottom: 12px;
            font-size: 1em;
        }
        footer .social-media {
            margin-top: 10px;
        }
        footer .social-media a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.4em;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        footer .social-media a:hover {
            color: #fff;
            transform: translateY(-3px);
        }
        footer .social-media img {
            width: 28px;
            height: 28px;
            vertical-align: middle;
            margin-right: 8px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-me {
                flex-direction: column;
                text-align: center;
            }
            .profile {
                width: 80%;
                margin-bottom: 20px;
            }
            .profile img {
                width: 120px;
                height: 120px;
            }
            header h1 {
                font-size: 1.8em;
            }
            footer .social-media a {
                font-size: 1.2em;
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

    <section class="about-me">
        <div class="profile">
            <img src="profil.jpg" alt="Profil Saya">
            <div class="name">
                <h2>Dodi Iskandar</h2>
            </div>
            <div class="bio">
                <h2>Tentang Saya</h2>
                <p>Halo! Nama saya Dodi Iskandar, seorang mahasiswa di Universitas Yatsi Madani, 
                    mengambil jurusan Ilmu Komputer. Saya sangat tertarik dengan teknologi dan 
                    pengembangan web.  Selain itu, saya juga aktif di 
                    beberapa organisasi mahasiswa dan memiliki hobi bermain badminton dan berolahraga.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Fotofolio</p>
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
