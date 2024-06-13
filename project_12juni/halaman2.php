<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="halaman2.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['is_logged_in'] != TRUE)
        {
            header('Location: form_login.php');
            exit();
        }

        echo $_SESSION['nama'];
    ?>
    <div class="container mt-5">
    <div class="row">
        <!-- Menu_kanan -->
        <div class="col-md-3">
            <h3>Aqil Purba S - 06829</h3>
            <ul class="list-group">
                <a href="halaman1.php" class="list-group-item">Halaman 1</a>
                <a href="Biodata.php" class="list-group-item">Biodata</a>
                <a href="Jadwal Kuliah.php" class="list-group-item">Jadwal Kuliah</a>
                <a href="logout.php" class="list-group-item">Logout</a>
                
            </ul>
        </div>
   <!-- Konten Beranda -->
   <div class="col-md-9">
            <h1>HALAMAN 2</h1>
            <section class="mt-4">
                <h2>Sejarah Singkat UniPin</h2>
                <p>UniPin (Universal Pin) adalah sebuah platform penyedia konten digital yang didirikan pada tahun 2009.[1] UniPin tersedia di lebih dari 32 negara dan 21.400.000 pengguna aktif yang terus bertambah setiap bulannya.  
                    Jumlah transaksi harian tertinggi UniPin mencapai lebih dari 3.100.000 dan terhubung dengan lebih dari 2.400.000 jaringan distribusi.[2] Setelah sukses membangun nama di pasar domestik, UniPin berekspansi untuk menyediakan layanannya dengan menggandeng lebih dari 500 mitra di seluruh dunia
                    Sebagai penyedia konten digital terdepan, UniPin menawarkan kemudahan dalam memenuhi beragam kebutuhan game online dan produk digital di seluruh dunia dengan berbagai macam channel pembayaran. Dengan UniPin, penerbit game dan perusahaan konten digital yang ingin mengembangkan bisnis tak perlu lagi repot-repot menjalin kerja sama dengan channel pembayaran yang tersedia di setiap negara, karena mereka sudah dapat langsung terhubung dengan semua channel pembayaran tersebut melalui UniPin.                    
                    Untuk para pemain game dan pengguna konten digital, UniPin mempermudah pembelian voucher dan pembayaran isi ulang game melalui  berbagai metode pembayaran yang disediakan, seperti transfer bank, pulsa, e-wallet, e-commerce, jaringan mini market dan kartu kredit.
                     </p>
            </section>
            <img src="unipin.png">
            <section class="mt-4">
                <h2>Mitra </h2>
                <p>Pada Juli 2011, UniPin, yang berada di bawah naungan PT 24 Jam Online, mengumumkan terjalinnya kerja sama dengan penyedia layanan minimarket terkemuka, Indomaret. Kerja sama ini menyediakan voucher game online di seluruh gerai Indomaret yang tersebar di seluruh Indonesia.</p>
                <p>Pada tahun yang sama, UniPin juga menjalin kolaborasi dengan Moonton, penerbit game ''Mobile Legends: Bang Bang'' atau MLBB. Kolaborasi ini bertujuan untuk membantu Moonton memasuki pasar Indonesia dan meningkatkan ''brand awareness''.</p>
                <p>Pada Mei 2018, UniPin bermitra dengan TNC Philippine Holdings Inc. dengan mengadakan konferensi pers di High Ground Cafe, Manila, untuk memperkokoh kehadirannya di pasar game Asia tenggara dengan merambah ke Filipina.  </p>
                <p>Pada tahun 2019, UniPin secara resmi menggandeng berbagai platform e-commerce terkemuka di Indonesia seperti Tokopedia, Lazada, Blibli, dan lain-lain.   </p>
                <p>Pada tahun yang sama, UniPin menjalin kerja sama eksklusif dengan jaringan minimarket terkemuka di Malaysia, KK Super Mart.</p>
                <p>Pada awal tahun 2020, Ashadi Ang selaku Co-Founder dan CEO UniPin resmi dilantik sebagai anggota PBESI (Pengurus Besar Esports Indonesia) dibawah naungan KONI (Komite Olahraga Nasional Indonesia).</p>
            </section>
        </div>
    </div>
</div>
    
</body>
</html>