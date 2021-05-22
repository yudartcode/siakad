 <?php include 'koneksi.php'; ?>
 <div class="row">
  <div class="col-md-12">

    <?php
    if(isset($_GET['ubah'])){
      $id_user=$_GET['ubah'];
      $sql="select * from user where id_user='$id_user'";
      $tampil=mysqli_query($koneksi,$sql);
      ($panggil=mysqli_fetch_array($tampil));
    }

    if(isset($_POST['simpan'])){
      $id_user=$_POST['id_user'];
      $username=$_POST['username'];
      $nama=$_POST['nama'];
      $password=$_POST['password'];
      $level=$_POST['level'];


      $sql="insert into user values('$id_user','$username','$nama','$password','$level')";
      $query=mysqli_query($koneksi,$sql);

      if($query){
       echo "<script>
       alert('simpan data berhasil');
       document.location='dashboard.php?page=tampil_user';
       </script>";
     }
     else
     {
       echo "<script>
       alert('simpan data GAGAL!');
       document.location='dashboard.php?page=tampil_user';
       </script>";
     }
   }

   ?>

   <!-- START DEFAULT FORM ELEMENTS -->
   <div class="block">
    <h4>Tambah Data User</h4>
    <form method="POST" action="" class="form-horizontal" role="form">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Id User</label>
        <div class="col-md-10">
          <input type="text" name="id_user" class="form-control" placeholder="Masukkan Kode Jurusan"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Username</label>
        <div class="col-md-10">
          <input type="text" name="username" class="form-control" placeholder="Masukkan Kode Jurusan"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class="col-md-10">
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Kode Jurusan"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Password</label>
        <div class="col-md-10">
          <input type="text" name="password" class="form-control" placeholder="Masukkan Kode Jurusan"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Level</label>
        <div class="col-md-10">                                        
          <select name="level" class="form-control select">
            <option>--Pilih Jurusan--</option>
            <option>Admin</option>
            <option>Siswa</option>
            <option>Guru</option>
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
