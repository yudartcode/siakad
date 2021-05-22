 <?php include 'koneksi.php'; ?>
 <div class="row">
    <div class="col-md-12">

        <?php
        if(isset($_GET['ubah'])){
            $nis=$_GET['ubah'];
            $sql="select * from siswa where nis='$nis'";
            $tampil=mysqli_query($koneksi,$sql);
            ($panggil=mysqli_fetch_array($tampil));
        }

        if(isset($_POST['simpan'])){
            $kd_nilai=$_POST['kd_nilai'];
            $nis=$_POST['nis'];
            $nama=$_POST['nama'];
            $mata_pelajaran=$_POST['mata_pelajaran'];
            $kelas=$_POST['kelas'];
            $jurusan=$_POST['jurusan'];
            $semester=$_POST['semester'];
            $tugas=$_POST['tugas'];
            $uts=$_POST['uts'];
            $uas=$_POST['uas'];
            $rapot=$_POST['rapot'];

            $sql="update siswa set nis='$nis',nama='$nama',jk='$jk',nisn='$nisn',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',agama='$agama',alamat='$alamat',kecamatan='$kecamatan',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',rombel='$rombel' where nis='$nis'";
            $query=mysqli_query($koneksi,$sql);

            if($query){
             echo "<script>
             alert('Ubah data berhasil');
             document.location='dashboard.php?page=tampil_siswa';
             </script>";
         }
         else
         {
             echo "<script>
             alert('Ubah data GAGAL!');
             document.location='dashboard.php?page=tampil_siswa';
             </script>";
         }
     }

     ?>

     <!-- START DEFAULT FORM ELEMENTS -->
     <div class="block">
        <h4>Ubah Data Siswa</h4>
        <form method="POST" action="" class="form-horizontal" role="form">                                    
            <div class="form-group">
                <label class="col-md-2 control-label">NIS</label>
                <div class="col-md-10">
                    <input type="text" name="nis" value="<?php echo $panggil['nis']?>" class="form-control" placeholder="Masukkan NIS Anda"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="nama" value="<?php echo $panggil['nama']?>" class="form-control" placeholder="Masukkan Nama Anda"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-10">                                        
                    <select name="jk" value="<?php echo $panggil['jk']?>" class="form-control select">
                        <option>--Pilih Jenis Kelamin--</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">NISN</label>
                <div class="col-md-10">
                    <input type="text" name="nisn" value="<?php echo $panggil['nisn']?>" class="form-control"  placeholder="Masukkan NISN Anda"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Tempat Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tempat_lahir" value="<?php echo $panggil['tempat_lahir']?>" class="form-control"  placeholder="Masukkan Tempat Lahir Anda"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tanggal_lahir" value="<?php echo $panggil['tanggal_lahir']?>" class="form-control" placeholder="Masukkan Tanggal Lahir Anda"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Agama</label>
                <div class="col-md-10">                                        
                    <select name="agama" value="<?php echo $panggil['agama']?>"  class="form-control select">
                        <option>--Pilih Agama--</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Alamat</label>
                <div class="col-md-10">
                    <input type="text" name="alamat" value="<?php echo $panggil['alamat']?>" class="form-control" placeholder="Masukkan Alamat Anda"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">Kecamatan</label>
                <div class="col-md-10">
                    <input type="text" name="kecamatan" value="<?php echo $panggil['kecamatan']?>"  class="form-control" placeholder="Masukkan Kecamatan Anda"/>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ayah</label>
                <div class="col-md-10">
                    <input type="text" name="nama_ayah" value="<?php echo $panggil['nama_ayah']?>" class="form-control" placeholder="Masukkan Nama Ayah anda"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ibu</label>
                <div class="col-md-10">
                    <input type="text" name="nama_ibu" value="<?php echo $panggil['nama_ibu']?>" class="form-control" placeholder="Masukkan Nama Ibu Anda"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Rombel Saat Ini</label>
                <div class="col-md-10">                                        
                    <select name="rombel" value="<?php echo $panggil['rombel']?>" class="form-control select">
                        <option>--Pilih Rombel</option>
                    </select>
                </div>
            </div>  <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-10">
                    <button class="btn btn-success" name="simpan">Simpan</button>
                    <button class="btn btn-danger" name="batal">Batal</button>
                </div>
            </div>
        </form>
    </div>
