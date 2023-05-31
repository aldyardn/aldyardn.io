<?php
// Ambil data dari form
include_once "koneksi.php";
if (isset($_POST["volly-update"])){
    $id= $_POST ["id"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jk = $_POST["jeniskelamin"];
    $alamat = $_POST["alamat"];
    
    
    
    if(empty($nama)){
    header("location:home.php?halaman=volly-update&info=nama-kosong");
    }elseif(empty($kelas)){
        header("location:home.php?halaman=volly-update&info=kelas-kosong"); 
    // }elseif(empty($jk)){
    //     header("location:index.php?halaman=futsal-add&info=jeniskelamin-kosong");
    }elseif(empty($alamat)){
        header("location:home.php?halaman=volly-update&info=alamat-kosong"); 
    }else{
    $update = $koneksi->query("UPDATE volly SET Nama='$nama', Kelas='$kelas', Jk='$jk', Alamat='$alamat' WHERE ID='$id' ");
    echo "<script>
    location.href = 'home.php?halaman=volly-list&info=berhasil';
    </script>";
    // header("location:index.php?halaman=futsal-list&info=berhasil");
    }
    
    }
?>
