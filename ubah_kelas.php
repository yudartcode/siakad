 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_GET['ubah'])){
      $kd_kelas=$_GET['ubah'];
      $sql="select * from kelas where kd_kelas='$kd_kelas'";
      $tampil=mysqli_query($koneksi,$sql);
      ($panggil=mysqli_fetch_array($tampil));
    }

    if(isset($_POST['simpan'])){
      $kd_kelas=$_POST['kd_kelas'];
      $kelas=$_POST['kelas'];
      $jurusan=$_POST['jurusan'];


      $sql="update kelas set kd_kelas='$kd_kelas',kelas='$kelas',jurusan='$jurusan' where kd_kelas='$kd_kelas'";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('Ubah data berhasil');
       document.location='dashboard.php?page=tampil_kelas';
       </script>";
     }
     else
     {
       echo "<script>
       alert('Ubah data GAGAL!');
       document.location='dashboard.php?page=tampil_kelas';
       </script>";
     }
   }

   ?>

   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Ubah Data Kelas</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Kelas</label>
        <div class="col-md-10">
          <input type="text" name="kd_kelas" value="<?php echo $panggil['kd_kelas']?>" class="form-control" placeholder="Masukkan NIS Anda"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Kelas</label>
        <div class="col-md-10">
          <input type="text" name="kelas" value="<?php echo $panggil['kelas']?>" class="form-control" placeholder="Masukkan Nama Anda"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-10">                                        
          <select name="jurusan" value="<?php echo $panggil['jurusan']?>" class="form-control select">
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
