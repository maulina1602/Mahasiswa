<?php 
session_start();
?>

<div class="card">
    <div class="card-header">
        <strong>Informasi</strong>
    </div>
    <div class="card-body">
        <p>Selamat Datang <strong><i><?php echo $_SESSION['username'] ?></i></strong>,</p>
        <p>
            <strong>Materi ini mempelajari tentang CRUD sederhana dengan <code>PHP + MySQLI</code></strong><br><br>

            Apa saja yang kita pelajari
            <ul>
                <li>Membuat tampilan menggunakan Bootstrap 4</li>
                <li>Pemrograman dasar <code>PHP</code></li>
                <li>Proses CRUD <code>Crate, read, update, delete</code></li>
                <li>Login user dengan password</li>
                <li>Register User</li>
                <li>Fungsi simpan data</li>
                <li>Fungsi edit data</li>
                <li>Fungsi hapus data</li>
                <li>Fungsi cari data</li>
                <li>Fungsi pagination</li>
                <li>Fungsi cetak data dengan <code>FPDF</code></li>
            </ul>
        </p>
    </div>
</div>