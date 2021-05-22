 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_POST['simpan'])){
      $kd_kelas=$_POST['kd_kelas'];
      $kelas=$_POST['kelas'];
      $jurusan=$_POST['jurusan'];


      $sql="insert into kelas values('$kd_kelas','$kelas','$jurusan')";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('simpan data berhasil');
       document.location='dashboard.php?page=tampil_kelas';
       </script>";
     }
     else
     {
       echo "<script>
       alert('simpan data GAGAL!');
       document.location='dashboard.php?page=tampil_kelas';
       </script>";
     }
   }

   ?>

   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Tambah Data Kelas</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Kelas</label>
        <div class="col-md-10">
          <input type="text" name="kd_kelas" class="form-control" placeholder="Masukkan Kode Kelas"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Kelas</label>
        <div class="col-md-10">
          <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-10">                                        
          <select name="jurusan" class="form-control select">
            <option>--Pilih Jenis Jurusan--</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <button class="btn btn-success" name="simpan">Simpan</button>
          <button class="btn btn-danger" name="batal">Batal</button>
        </div>
      </div>
    </form>
  </div>
