<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <?php
    // Cek apakah formulir telah dikirimkan
    if(isset($_POST['submit'])){
        // Ambil nilai-nilai yang dikirimkan melalui formulir
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Lakukan validasi data (bisa ditambahkan validasi tambahan sesuai kebutuhan)

        // Simpan data ke dalam database atau lakukan tindakan lainnya
        // ...

        // Tampilkan pesan registrasi berhasil
        echo "<p>Registrasi berhasil! Terima kasih, $nama.</p>";
    }
    ?>

    <h2>Form Registrasi</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>
