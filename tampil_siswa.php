<div class="row">
  <div class="col-md-12">

    <!-- START DATATABLE EXPORT -->
    <?php 
    if(isset($_GET['nis'])){
      $nis=$_GET['nis'];
      $sql="delete from siswa where nis='$nis'";
      $query=mysqli_query($koneksi,$sql);
      if($query){
       echo "<script>
       alert('Hapus data berhasil');
       document.location='dashboard.php?page=tampil_siswa';
       </script>";
     }
     else
     {
       echo "<script>
       alert('Hapus data GAGAL!');
       document.location='dashboard.php?page=tampil_siswa';
       </script>";
     }
   }
   ?>

   <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Data Siswa</h3>
      <div class="btn-group pull-right"><a href="dashboard.php?page=tambah_siswa" style='text-decoration:none'><button type="button" class="btn btn-success">Tambah</button></a>
        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
        <ul class="dropdown-menu">
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
          <li class="divider"></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
          <li class="divider"></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
          <li class="divider"></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
          <li class="divider"></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
          <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
        </ul>
      </div>                                    
    </div>
    <div class="panel-body">
      <table id="customers2" class="table datatable">
        <thead>
          <tr><th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Rombel</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=1;
          $panggil=mysqli_query($koneksi,"select* from siswa");
          while($tampil=mysqli_fetch_array($panggil)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tampil['nis']; ?></td>
              <td><?php echo $tampil['nama']; ?></td>  
              <td><?php echo $tampil['jk']; ?></td>
              <td><?php echo $tampil['nisn']; ?></td>
              <td><?php echo $tampil['tempat_lahir']; ?></td>
              <td><?php echo $tampil['tanggal_lahir']; ?></td>
              <td><?php echo $tampil['agama']; ?></td>
              <td><?php echo $tampil['alamat']; ?></td>
              <td><?php echo $tampil['kecamatan']; ?></td>
              <td><?php echo $tampil['nama_ayah']; ?></td>
              <td><?php echo $tampil['nama_ibu']; ?></td>
              <td><?php echo $tampil['rombel']; ?></td>
              <td>
                <a href="dashboard.php?page=tampil_siswa&&nis=<?php echo $tampil['nis'] ?>" class="fa fa-trash-o btn btn-danger"></a>
                <a href="dashboard.php?page=ubah_siswa&&ubah=<?php echo $tampil['nis']; ?>" class="fa fa-pencil btn btn-info"></a>
              </td>
            </tr>
          <?php }?> 
        </tbody>
      </table>                                    
    </div>
  </div>
  <!-- END DATATABLE EXPORT -->   
</div>
</div>
</div>
</div>    