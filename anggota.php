<?php include_once "header.php";?>
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
        <div class="mb-auto">
        <a class="nav-link" href="anggota.php">
        <i class="bi bi-people-fill"></i>
          <span>Anggota Kelompok</span>
        </a>
        </div>
        <div class="mb-auto">
        <a class="nav-link " href="log_out.php">
        <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
        </div>
      </li><!-- End Components Nav -->
  </aside>
<section>
    <div class="container" style="margin-top :30px;">
            <div class="my-4" style="margin-left :590px;">
                <h3><b>Anggota Kelompok Projects</h3>
            </div>
        <div class="row" style="margin-left :390px;">
            <div class="card mx-2 " style="width: 15rem;">
                <img src="assets/img/clint.jpg" class="card-img-top" alt="...">
                <div class="card-body py-3 text-center">
                    <h5>Ahmad Sidqi M</h5>
                </div>
            </div>
            <div class="card mx-2" style="width: 15rem;">
                <img src="assets/img/aldous.jpg" class="card-img-top" alt="...">
                <div class="card-body py-3 text-center">
                    <h5>Aldy Ardian Nazril</h5>
                </div>
            </div>
            <div class="card mx-2" style="width: 15rem;">
                <img src="assets/img/miya.jpg" class="card-img-top" alt="...">
                <div class="card-body py-3 text-center">
                    <h5>Asyifa Zahratul H</h5>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left :515px;">
            <div class="card mx-2" style="width: 15rem;">
                <img src="assets/img/layla.jpg" class="card-img-top" alt="...">
                <div class="card-body py-3 text-center">
                    <h5>Alya Ramadhani</h5>
                </div>
            </div>
            <div class="card mx-2" style="width: 15rem;">
                <img src="assets/img/desvi.jpg" class="card-img-top" alt="...">
                <div class="card-body py-3 text-center">
                    <h5>Desvita</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once "footer.php";?>