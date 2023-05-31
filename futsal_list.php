<?php include_once "header.php";?>
<?php include_once "koneksi.php"; ?>
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex logo align-items-center justify-content-between">
    <img src="assets/img/11.png" alt="">
    <span class="d-none d-lg-block"> SMKN 1 Rongga</span>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="home2.php">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Ekstrakulikuler</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="home.php?halaman=futsal-list">
              <i class="bi bi-circle"></i><span>Futsal</span>
            </a>
          </li>
          <li>
            <a href="home.php?halaman=volly-list">
              <i class="bi bi-circle"></i><span>Volly</span>
            </a>
          </li>
          <li>
            <a href="home.php?halaman=basket-list">
              <i class="bi bi-circle"></i><span>Basket</span>
            </a>
          </li>
        </ul>
        <a class="nav-link" href="anggota.php">
        <i class="bi bi-people-fill"></i>
          <span>Anggota Kelompok</span>
        </a>
        <a class="nav-link " href="log_out.php">
        <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Components Nav -->
  </aside>
<div class="row d-flex align-item-center justify-content-end" style="margin-top: 10%; margin-left :3%;">
<div class="col-md-10">
  <div class="text-center">
  <h1><b>List Daftar Anggota Futsal</b></h1>
  </div>
<?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "berhasil") :?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Info!</strong> Input data berhasil
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif ?>
    <?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "delete") :?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Info!</strong> Hapus data berhasil.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif ?>
    <?php endif ?>
    <?php endif ?>
    
    <div class="card my-5 p-2">
        <div class="card-header ">
            
            <a href="home.php?halaman=futsal-add">
                <button class="mx-3 p-1 rounded-0 text-white " style="font-size: 13px; background-color: #012970;" >
                    Tambah Anggota +
                </button>
            </a>
        </div>
        <div class="card-body ">
            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sql = "SELECT * FROM futsal";?>
                    <?php $result = $koneksi->query($sql); ?>
                    <?php while ($data = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $data["ID"] ?></td>
                            <td><?php echo $data["Nama"] ?></td>
                            <td><?php echo $data["Kelas"] ?></td>
                            <td><?php echo $data["Jk"] ?></td>
                            <td><?php echo $data["Alamat"] ?></td>
                            
                            <td>
                                <a href="futsal_edit.php?id=<?php echo $data['ID'] ?>"><button class=" btn btn-warning bi bi-pencil-square p-1"></button></a>
                                <a href="futsal_delete.php?id=<?php echo $data["ID"]?>"><button class=" btn btn-danger bi bi-trash3 p-1"></button></a>
                            </td>
                        </tr>
                        <?php endwhile ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>

<?php include_once "footer.php";?>