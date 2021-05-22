 <?php include 'koneksi.php'; ?>
 <div class="row">
    <div class="col-md-12">

        <?php
        if(isset($_POST['simpan'])){
            $nis=$_POST['nis'];
            $nama=$_POST['nama'];
            $jk=$_POST['jk'];
            $nisn=$_POST['nisn'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $agama=$_POST['agama'];
            $alamat=$_POST['alamat'];
            $kecamatan=$_POST['kecamatan'];
            $nama_ayah=$_POST['nama_ayah'];
            $nama_ibu=$_POST['nama_ibu'];
            $rombel=$_POST['rombel'];


            $sql="insert into siswa values('$nis','$nama','$jk','$nisn','$tempat_lahir','$tanggal_lahir','$agama','$alamat','$kecamatan','$nama_ayah','$nama_ibu','$rombel')";
            $query=mysqli_query($koneksi,$sql);

            if($query){
             echo "<script>
             alert('simpan data berhasil');
             document.location='dashboard.php?page=tampil_siswa';
             </script>";
         }
         else
         {
             echo "<script>
             alert('simpan data GAGAL!');
             document.location='dashboard.php?page=tampil_siswa';
             </script>";
         }
     }

     ?>

     <!-- START DEFAULT FORM ELEMENTS -->
     <div class="block">
        <h4>Tambah Data Siswa</h4>
        <form method="POST" action="" class="form-horizontal" role="form">                                    
            <div class="form-group">
                <label class="col-md-2 control-label">NIS</label>
                <div class="col-md-10">
                    <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-10">                                        
                    <select name="jk" class="form-control select">
                        <option>--Pilih Jenis Kelamin--</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">NISN</label>
                <div class="col-md-10">
                    <input type="text" name="nisn" class="form-control"  placeholder="Masukkan NISN"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Tempat Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tempat_lahir" class="form-control"  placeholder="Masukkan Tempat Lahir"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Agama</label>
                <div class="col-md-10">                                        
                    <select name="agama" class="form-control select">
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
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">Kecamatan</label>
                <div class="col-md-10">
                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan"/>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ayah</label>
                <div class="col-md-10">
                    <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ibu</label>
                <div class="col-md-10">
                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu"/>
                </div>
            </div>   
            <div class="form-group">
                <label class="col-md-2 control-label">Rombel Saat Ini</label>
                <div class="col-md-10">                                        
                    <select name="rombel" class="form-control select">
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
