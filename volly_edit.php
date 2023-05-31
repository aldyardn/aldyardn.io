<?php 
include_once "header.php";
include "koneksi.php";
$id = $_GET["id"];
$edit = $koneksi->query("SELECT * FROM volly WHERE ID='$id'");
$data = $edit->fetch_assoc();
?>
<div class="row d-flex align-item-center justify-content-center" style="margin-top: 10%; margin-left :3%;">
     <div class="card " style="width: 50%; height:70%;">
     <div class="text-center text-hitam bg bg-white m-4">
          <h3><b> Edit Anggota volly</b> </h3>
     </div>
          <div class="col-md-8">
               <form action="volly_update.php" method="post" class="m-4">
                    <div class="mb-3">
                         <label for="" class="form-label"><b>Nama</b></label>
                         <input type="text" class ="form-control rounded-0" name="nama" value="<?php echo $data['Nama'] ?>">
                         <input type="hidden" class ="form-control" name="id" value="<?php echo $data['ID'] ?>">
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label"><b>Kelas</b></label>
                         <input type="text-area" class ="form-control rounded-0" name="kelas" value="<?php echo $data['Kelas'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label"><b>Jenis Kelamin</b></label>
                    <select class="form-select rounded-0" aria-label="Default select example" name="jeniskelamin">
                              <option selected></option>
                              <option >Laki-laki</option>
                              <option >Perempuan</option>
                         </select>
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label"><b>Alamat</b></label>
                         <input type="text" class ="form-control rounded-0" name="alamat" value="<?php echo $data['Alamat'] ?>"></input>
                    </div>
                    <div class="mb-3">
                         <button type="submit" class="btn btn-warning" name="volly-update">Update</button>
                         <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>
               </form>
          </div>
     </div>
</div>









