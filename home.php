<?php include "header.php"; ?>

  <!-- ======= Header ======= -->
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
        <a class="nav-link " href="home.php">
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
        <a class="nav-link " href="log_out.php">
        <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
        </div>
      </li><!-- End Components Nav -->
  </aside>
  <div class="container">
        <?php 
         
        if(isset($_GET["halaman"])){
            $halaman =$_GET["halaman"];
            switch($halaman){
              //futsal
                case "futsal-list":
                include "futsal_list.php";
                break;
                case "futsal-add":
                include "futsal_add.php";
                break;
                case "futsal-edit";
                include "futsal_edit.php";
                break;
                case "futsal-update";
                include "futsal_update.php";
                break;
                
                //akhir
                //volly
                case "volly-list":
                include "volly_list.php";
                break;
                case "volly-add":
                include "volly_add.php";
                break;
                case "volly-edit";
                include "volly_edit.php";
                break;
                case "volly-update";
                include "volly_update.php";
                break;
                
                //akhir
                //basket
                case "basket-list":
                  include "basket_list.php";
                  break;
                  case "basket-add":
                  include "basket_add.php";
                  break;
                  case "basket-edit";
                  include "basket_edit.php";
                  break;
                  case "basket-update";
                  include "basket_update.php";
                  break;

                  default: 
                  include "home2.php";
                  break;
                  
            }

            }else{
                echo "halaman tidak ditemukan";
            }
            
          
         
         ?>

    



<?php include "footer.php"; ?>