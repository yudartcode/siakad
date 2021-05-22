 <?php include 'koneksi.php'; ?>
 <div class="row">
    <div class="col-md-12">

        <?php
        if(isset($_GET['ubah'])){
            $id_guru=$_GET['ubah'];
            $sql="select * from guru where id_guru='$id_guru'";
            $tampil=mysqli_query($koneksi,$sql);
            ($panggil=mysqli_fetch_array($tampil));
        }

        if(isset($_POST['simpan'])){
            $id_guru=$_POST['id_guru'];
            $nama=$_POST['nama'];
            $nuptk=$_POST['nuptk'];
            $jk=$_POST['jk'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $nip=$_POST['nip'];
            $status_kepegawaian=$_POST['status_kepegawaian'];
            $jenis_ptk=$_POST['jenis_ptk'];
            $agama=$_POST['agama'];
            $alamat=$_POST['alamat'];
            $kecamatan=$_POST['kecamatan']; 
            $tugas_tambahan=$_POST['tugas_tambahan'];
            $golongan=$_POST['golongan'];


            $sql="update guru set id_guru='$id_guru',nama='$nama',nuptk='$nuptk',jk='$jk',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',nip='$nip',status_kepegawaian='$status_kepegawaian',jenis_ptk='$jenis_ptk',agama='$agama',alamat='$alamat',kecamatan='$kecamatan',tugas_tambahan='$tugas_tambahan',golongan='$golongan' where id_guru='$id_guru'";
            $query=mysqli_query($koneksi,$sql);

            if($query){
             echo "<script>
             alert('Ubah data berhasil');
             document.location='dashboard.php?page=tampil_guru';
             </script>";
         }
         else
         {
             echo "<script>
             alert('Ubah data GAGAL!');
             document.location='dashboard.php?page=tampil_guru';
             </script>";
         }
     }

     ?>

     <!-- START DEFAULT FORM ELEMENTS -->
     <div class="block">
        <h4>Ubah Data Guru</h4>
        <form method="POST" action="" class="form-horizontal" role="form">                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Id Guru</label>
                <div class="col-md-10">
                    <input type="text" name="id_guru" value="<?php echo $panggil['id_guru'] ?>" class="form-control" placeholder="Masukkan Id Guru "/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="nama" value="<?php echo $panggil['nama'] ?>" class="form-control" placeholder="Masukkan Nama"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">NUPTK</label>
                <div class="col-md-10">
                    <input type="text" name="nuptk" value="<?php echo $panggil['nuptk'] ?>"  class="form-control" placeholder="Masukkan NUPTK"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-10">                                        
                    <select name="jk" value="<?php echo $panggil['jk'] ?>" class="form-control select">
                        <option>--Pilih Jenis Kelamin--</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
            </div>                                
            <div class="form-group">
                <label class="col-md-2 control-label">Tempat Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tempat_lahir" value="<?php echo $panggil['tempat_lahir'] ?>" class="form-control"  placeholder="Masukkan Tempat Lahir"/>
                </div>
            </div>                                    
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-md-10">
                    <input type="text" name="tanggal_lahir" value="<?php echo $panggil['tanggal_lahir'] ?>" class="form-control" placeholder="Masukkan Tanggal Lahir"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">NIP</label>
                <div class="col-md-10">
                    <input type="text" name="nip" value="<?php echo $panggil['nip'] ?>"  class="form-control" placeholder="Masukkan NIP"/>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Status Kepegawaian</label>
                <div class="col-md-10">                                        
                    <select name="status_kepegawaian" value="<?php echo $panggil['status_kepegawaian'] ?>" class="form-control select">
                        <option>--Pilih Status Kepegawaian--</option>
                        <option value="PNS">PNS</option>
                        <option value="CPNS">CPNS</option>
                        <option value="GTY/PTY">GTY/PTY</option>
                        <option value="Honor Daerah TK.I Provinsi">Honor Daerah TK.I Provinsi</option>
                        <option value="Honor Sekolah">Honor Sekolah</option>
                    </select>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">Jenis PTK</label>
                <div class="col-md-10">                                        
                    <select name="jenis_ptk" value="<?php echo $panggil['jenis_ptk'] ?>" class="form-control select">
                        <option>--Pilih Jenis PTK--</option>
                        <option value="Guru Mapel">Guru Mapel</option>
                        <option value="Guru BK">Guru BK</option>
                    </select>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">Agama</label>
                <div class="col-md-10">                                        
                    <select name="agama" value="<?php echo $panggil['agama'] ?>" class="form-control select">
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
                    <input type="text" name="alamat" value="<?php echo $panggil['alamat'] ?>" class="form-control" placeholder="Masukkan Alamat"/>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 control-label">Kecamatan</label>
                <div class="col-md-10">
                    <input type="text" name="kecamatan" value="<?php echo $panggil['kecamatan'] ?>" class="form-control" placeholder="Masukkan Kecamatan"/>
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-2 control-label">Tugas Tambahan</label>
                <div class="col-md-10">                                        
                    <select name="tugas_tambahan" value="<?php echo $panggil['tugas_tambahan'] ?>" class="form-control select">
                        <option>--Tugas Tambahan--</option>
                        <option value="Kepala Program Keahlian">Kepala Program Keahlian</option>
                        <option value="Wakil Kepala Sekolah Humas">Wakil Kepala Sekolah Humas</option>
                        <option value="Wakil Kepala Sekolah Kesiswaan">Wakil Kepala Sekolah Kesiswaan</option>
                        <option value="Guru Piket">Guru Piket</option>
                        <option value="Wakil Kepala Sekolah Sarpras">Wakil Kepala Sekolah Sarpras</option>
                        <option value="Pembina OSIS">Pembina OSIS</option>
                        <option value="Pengurus Organisasi Tingkat Kabupaten / Kota">Pengurus Organisasi Tingkat Kabupaten / Kota</option>
                        <option value="Kepala Program Keahlian">Kepala Program Keahlian</option>
                        <option value="Wakil Kepala Sekolah Kurikulum">Wakil Kepala Sekolah Kurikulum</option>
                        <option value="Pembina Ekstrakurikuler">Pembina Ekstrakurikuler</option>
                        <option value="Wakil Kepala Sekolah Kurikulum">Wakil Kepala Sekolah Kurikulum</option>
                        <option value="Kepala Bengkel">Kepala Bengkel</option>
                        <option value="Kepala Program Keahlian">Kepala Program Keahlian</option>
                        <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                        <option value="Kepala Unit Produksi">Kepala Unit Produksi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Golongan</label>
                <div class="col-md-10">                                        
                    <select name="golongan" value="<?php echo $panggil['golongan'] ?>" class="form-control select">
                        <option>--Pilih Golongan--</option>
                        <option value="III/a">III/a</option>
                        <option value="III/b">III/b</option>
                        <option value="III/c">III/c</option>
                        <option value="III/d">III/d</option>
                        <option value="IV/a">IV/a</option>
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
