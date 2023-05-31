<?php include_once "header.php";?>
<?php
include "koneksi.php";
if (isset($_POST["futsal-add"])){
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jk = $_POST["jeniskelamin"];
$alamat = $_POST["alamat"];



if(empty($nama)){
  header("location:home.php?halaman=futsal-add&info=nama-kosong");
}elseif(empty($kelas)){
    header("location:home.php?halaman=futsal-add&info=kelas-kosong"); 
// }elseif(empty($jk)){
//     header("location:index.php?halaman=futsal-add&info=jeniskelamin-kosong");
}elseif(empty($alamat)){
    header("location:home.php?halaman=futsal-add&info=alamat-kosong"); 
}else{
$add = $koneksi->query("INSERT INTO futsal VALUES('','$nama','$kelas','$jk','$alamat')");
echo "<script>
location.href = 'home.php?halaman=futsal-list&info=berhasil';
</script>";
// header("location:index.php?halaman=futsal-list&info=berhasil");
}

}


?>




<div class="row d-flex align-item-center justify-content-center" style="margin-top: 10%; margin-left :3%;">
<!-- BAGIAN KIRI -->
<div class="card " style="width: 50%; height:70%;">
<div class="text-center text-hitam bg bg-white m-4">
    <h3><b>Add Anggota Futsal</b> </h3>
</div>
<div class="col-md-9">
    <form action="" method="post" class="m-4">
        <div class="mb-3">
            <label for="" class="form-label"><b>Nama Siswa</b></label>
            <input type="text" class="form-control rounded-0" name="nama">
            <?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "nama-kosong") :?>
                    <div class="alert text-danger p-0">
                        <strong>*</strong>Nama Siswa Tidak Boleh Kosong!!
                    </div>
                    <?php endif ?>
                        <?php endif ?>
                
        </div>
        <div class="mb-3">
            <label for="" class="form-label" ><b>Kelas</b></label>
            <input type="text" class="form-control rounded-0" name="kelas">
            
            <?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "kelas-kosong") :?>
                    <div class="alert text-danger p-0">
                        <strong>*</strong>Kelas Tidak Boleh Kosong!!
                    </div>
                    <?php endif ?>
                        <?php endif ?>
                
        </div>
        <div class="mb-3">
        <label for="" class="form-label" ><b>Jenis Kelamin</b></label>
        <select class="form-select rounded-0" aria-label="Default select example" name="jeniskelamin">
            <option selected></option>
            <option >Laki-laki</option>
            <option >Perempuan</option>
        </select>
            <?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "jeniskelamin-kosong") :?>
                    <div class="alert text-danger p-0">
                        <strong>*</strong>Jenis Kelamin Tamu Tidak Boleh Kosong!!
                    </div>
                    <?php endif ?>
                        <?php endif ?>
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label" ><b>Alamat</b></label>
            <input type="text" class="form-control rounded-0"name="alamat">
            <?php if (isset($_GET['info'])) :?>
                <?php if ($_GET['info'] == "alamat-kosong") :?>
                    <div class="alert text-danger p-0">
                        <strong>*</strong>Alamat Tidak Boleh Kosong!!
                    </div>
                    <?php endif ?>
                        <?php endif ?>
</div>
       <div class="mb-3">
        <button type="submit" class="btn btn-warning" name="futsal-add">Kirim</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
        </div>
    </form>

</div>


<!-- BAGIAN BAWAH -->
</div>
</div>
  
<?php include_once "footer.php";?>
