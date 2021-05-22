 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_POST['simpan'])){
      $kd_jurusan=$_POST['kd_jurusan'];
      $jurusan=$_POST['jurusan'];


      $sql="insert into jurusan values('$kd_jurusan','$jurusan')";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('simpan data berhasil');
       document.location='dashboard.php?page=tampil_jurusan';
       </script>";
     }
     else
     {
       echo "<script>
       alert('simpan data GAGAL!');
       document.location='dashboard.php?page=tampil_jurusan';
       </script>";
     }
   }

   ?>

   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Tambah Data Jurusan</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Jurusan</label>
        <div class="col-md-10">
          <input type="text" name="kd_jurusan" class="form-control" placeholder="Masukkan Kode Jurusan"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-10">                                        
          <select name="jurusan" class="form-control select">
            <option>--Pilih Jurusan--</option>
            <option>Multimedia</option>
            <option>Teknik Audio Video</option>
            <option>Teknik Komputer dan Jaringan</option>
            <option>Rekayasa Perangkat Lunak</option>
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
