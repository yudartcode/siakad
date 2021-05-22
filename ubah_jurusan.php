 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_GET['ubah'])){
      $kd_jurusan=$_GET['ubah'];
      $sql="select * from jurusan where kd_jurusan='$kd_jurusan'";
      $tampil=mysqli_query($koneksi,$sql);
      ($panggil=mysqli_fetch_array($tampil));
    }

    if(isset($_POST['simpan'])){
      $kd_jurusan=$_POST['kd_jurusan'];
      $jurusan=$_POST['jurusan'];


      $sql="update jurusan set kd_jurusan='$kd_jurusan',jurusan='$jurusan' where kd_jurusan='$kd_jurusan'";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('Ubah data berhasil');
       document.location='dashboard.php?page=tampil_jurusan';
       </script>";
     }
     else
     {
       echo "<script>
       alert('Ubah data GAGAL!');
       document.location='dashboard.php?page=tampil_jurusan';
       </script>";
     }
   }

   ?>

   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Ubah Data Jurusan</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Jurusan</label>
        <div class="col-md-10">
          <input type="text" name="kd_jurusan" value="<?php echo $panggil['kd_jurusan'] ?>" class="form-control" placeholder="Masukkan Kode Jurusan Anda"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-10">                                        
          <select name="jurusan" value="<?php echo $panggil['jurusan'] ?>" class="form-control select">
            <option>--Pilih Jenis Jurusan--</option>
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
