 <?php include 'koneksi.php'; ?>
 <div class="row">
    <div class="col-md-12">

        <?php
        if(isset($_POST['simpan'])){
            $kd_nilai=$_POST['kd_nilai'];
            $nis=$_POST['nis'];
            $nama=$_POST['nama'];
            $kd_mapel=$_POST['kd_mapel'];
            $id_guru=$_POST['id_guru'];
            $kd_kelas=$_POST['kd_kelas'];
            $jurusan=$_POST['jurusan'];
            $semester=$_POST['semester'];
            $tugas=$_POST['tugas'];
            $uts=$_POST['uts'];
            $uas=$_POST['uas'];
            $total_nilai=$_POST['total_nilai'];
            $rata_rata=$_POST['rata_rata'];


            $sql="insert into nilai values('$kd_nilai','$nis','$nama','$kd_mapel','$id_guru','$kd_kelas','$jurusan','$semester','$tugas','$uts','$uas','$total_nilai','$rata_rata')";
            $query=mysqli_query($koneksi,$sql);

            if($query){
               echo "<script>
               alert('simpan data berhasil');
               document.location='dashboard.php?page=tampil_nilai';
               </script>";
           }
           else
           {
               echo "<script>
               alert('simpan data GAGAL!');
               document.location='dashboard.php?page=tampil_nilai';
               </script>";
           }
       }

       ?>

       <!-- START DEFAULT FORM ELEMENTS -->
       <div class="block">
        <h4>Tambah Data Nilai</h4>
        <form method="POST" action="" class="form-horizontal" role="form">                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Kode Nilai</label>
                <div class="col-md-10">
                    <input type="text" name="kd_nilai" class="form-control" placeholder="Masukkan Kode Nilai "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nis</label>
                <div class="col-md-10">
                    <input type="text" name="nis" class="form-control" placeholder="Masukkan Nis "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama "/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Mata Pelajaran</label>
                <div class="col-md-10">
                    <input type="text" name="kd_mapel" class="form-control"  placeholder="Masukkan Mata Pelajaran"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Guru</label>
                <div class="col-md-10">
                    <input type="text" name="id_guru" class="form-control"  placeholder="Masukkan Guru"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Kelas</label>
                <div class="col-md-10">                                        
                    <select name="kd_kelas"  class="form-control select">
                        <option>--Pilih Kelas--</option>
                    </select>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Jurusan</label>
                <div class="col-md-10">                                        
                    <select name="jurusan"  class="form-control select">
                        <option>--Pilih Jurusan--</option>
                    </select>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Semester</label>
                <div class="col-md-10">                                        
                    <select name="semester"  class="form-control select">
                        <option>--Pilih Semester--</option>
                        <option>1(satu)</option>
                        <option>2(dua)</option>
                    </select>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Tugas</label>
                <div class="col-md-10">
                    <input type="text" name="tugas" class="form-control" placeholder="Masukkan Nilai Tugas"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">UTS</label>
                <div class="col-md-10">
                    <input type="text" name="uts" class="form-control" placeholder="Masukkan Nilai  UTS"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">UAS</label>
                <div class="col-md-10">
                    <input type="text" name="uas" class="form-control" placeholder="Masukkan Nilai UAS"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Total Nilai</label>
                <div class="col-md-10">
                    <input type="text" name="total_nilai" class="form-control" placeholder="Masukkan Nilai Total Nilai"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Rata-Rata</label>
                <div class="col-md-10">
                    <input type="text" name="rata_rata" class="form-control" placeholder="Masukkan Rata-Rata"/>
                </div>
            </div>     
        </div>  
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
                <button class="btn btn-success" name="simpan">Simpan</button>
                <button class="btn btn-danger" value="false" name="batal">Batal</button>
            </div>
        </div>
    </form>
</div>