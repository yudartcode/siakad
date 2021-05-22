 <?php include 'koneksi.php'; ?>
 <div class="row">
    <div class="col-md-12">

        <?php
        if(isset($_GET['ubah'])){
            $kd_nilai=$_GET['ubah'];
            $sql="select * from nilai where kd_nilai='$kd_nilai'";
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


            $sql="update nilai set kd_nilai='$kd_nilai',nis='$nis',nama='$nama',mata_pelajaran='$mata_pelajaran',kelas='$kelas',jurusan='$jurusan',semester='$semester',tugas='$tugas',uts='$uts',uas='$uas',rapot='$rapot' where kd_nilai='$kd_nilai'";
            $query=mysqli_query($koneksi,$sql);

            if($query){
             echo "<script>
             alert('Ubah data berhasil');
             document.location='dashboard.php?page=tampil_nilai';
             </script>";
         }
         else
         {
             echo "<script>
             alert('Ubah data GAGAL!');
             document.location='dashboard.php?page=tampil_nilai';
             </script>";
         }
     }

     ?>

     <!-- START DEFAULT FORM ELEMENTS -->
     <div class="block">
        <h4>Ubah Data Nilai</h4>
        <form method="POST" action="" class="form-horizontal" role="form">                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Kode Nilai</label>
                <div class="col-md-10">
                    <input type="text" name="kd_nilai" value="<?php echo $panggil['kd_nilai'] ?>" class="form-control" placeholder="Masukkan Kode Nilai "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nis</label>
                <div class="col-md-10">
                    <input type="text" name="nis" value="<?php echo $panggil['nis'] ?>" class="form-control" placeholder="Masukkan Nis "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="nama" value="<?php echo $panggil['nama'] ?>" class="form-control"  placeholder="Masukkan Nama "/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Mata Pelajaran</label>
                <div class="col-md-10">
                    <input type="text" name="mata_pelajaran" value="<?php echo $panggil['mata_pelajaran'] ?>" class="form-control"  placeholder="Masukkan Mata Pelajaran"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Kelas</label>
                <div class="col-md-10">                                        
                    <select name="kelas" value="<?php echo $panggil['kelas']?>" class="form-control select">
                        <option>--Pilih Kelas--</option>
                    </select>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Jurusan</label>
                <div class="col-md-10">                                        
                    <select name="jurusan" value="<?php echo $panggil['jurusan']?>" class="form-control select">
                        <option>--Pilih Jurusan--</option>
                    </select>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Semester</label>
                <div class="col-md-10">                                        
                    <select name="semester" value="<?php echo $panggil['semester']?>" class="form-control select">
                        <option>--Pilih Semester--</option>
                        <option>1(satu)</option>
                        <option>2(dua)</option>
                    </select>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Tugas</label>
                <div class="col-md-10">
                    <input type="text" name="tugas" value="<?php echo $panggil['tugas']?>" class="form-control" placeholder="Masukkan Nilai Tugas"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">UTS</label>
                <div class="col-md-10">
                    <input type="text" name="uts" value="<?php echo $panggil['uts']?>" class="form-control" placeholder="Masukkan Nilai  UTS"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">UAS</label>
                <div class="col-md-10">
                    <input type="text" name="uas" value="<?php echo $panggil['uas']?>"  class="form-control" placeholder="Masukkan Nilai UAS"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Rapot</label>
                <div class="col-md-10">
                    <input type="text" name="rapot"value="<?php echo $panggil['rapot']?>"  class="form-control" placeholder="Masukkan Nilai Rapot"/>
                </div>
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
