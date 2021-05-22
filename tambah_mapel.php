 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_POST['simpan'])){
      $kd_mapel=$_POST['kd_mapel'];
      $mata_pelajaran=$_POST['mata_pelajaran'];


      $sql="insert into mata_pelajaran values('$kd_mapel','$mata_pelajaran')";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('simpan data berhasil');
       document.location='dashboard.php?page=tampil_mapel';
       </script>";
     }
     else
     {
       echo "<script>
       alert('simpan data GAGAL!');
       document.location='dashboard.php?page=tampil_mapel';
       </script>";
     }
   }
   ?>
   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Tambah Data Jurusan</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Mata Pelajaran</label>
        <div class="col-md-10">
          <input type="text" name="kd_mapel" class="form-control" placeholder="Masukkan Kode mata pelajaran"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Mata Pelajaran</label>
        <div class="col-md-10">
          <input type="text" name="mata_pelajaran" class="form-control" placeholder="Masukkan mata pelajaran"/>
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
