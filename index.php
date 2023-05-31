<?php include_once "header.php";?>
<?php
include_once "koneksi.php";
session_start();

// Cek apakah pengguna sudah login, jika ya, redirect ke halaman lain
if(isset($_SESSION['username'])){
  header("Location: home.php");
  exit;
}

// Cek apakah ada data yang dikirimkan melalui metode POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Simpan data yang dikirimkan melalui form
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users where username='$username' and password='$password'";
  $result = $koneksi->query($sql);

  // Di sini, Anda dapat menambahkan logika untuk memeriksa data login yang valid
  // Misalnya, memeriksa apakah username dan password cocok dalam basis data

  // Set session jika data login valid
  if($result ->num_rows > 0){
    $_SESSION['username'] = $username;
    header("Location: home2.php");
    exit;
  } else {
    $error = "Username atau password salah.";
  }
}
?>

  
  

  
  <div class="row d-flex align-item-center justify-content-center" style="margin-top: 10%; margin-left :3%;">
<!-- BAGIAN KIRI -->
<div class="card form" style="width: 50%; height:70%;">
<div class="text-center text-hitam bg bg-white m-4">
    <h3><b>Log In Admin</b> </h3>
</div>
<?php if(isset($error)) { ?>
    <p><?php echo $error; ?></p>
  <?php } ?>
<div class="col-md-8">
    <form action="" method="post" class="m-4">
        <div class="mb-3">
            <label for="username" class="form-label"><b>Ussername</b></label>
            <input type="text" id="username" class="form-control rounded-0" name="username"  placeholder="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" ><b>Password</b></label>
            <input type="password" id="password" class="form-control rounded-0" name="password" placeholder="password">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success"><i class="bi bi-check2-square"></i>Log In</button>
        </div>
    </form>

</div>
</div>
<!-- BAGIAN BAWAH -->

</div>

<?php include_once "footer.php";?>
