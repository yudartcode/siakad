<div class="row">
  <div class="col-md-12">

    <!-- START DATATABLE EXPORT -->
    <?php 
    if(isset($_GET['kd_nilai'])){
      $kd_nilai=$_GET['kd_nilai'];
      $sql="delete from nilai where kd_nilai='$kd_nilai'";
      $query=mysqli_query($koneksi,$sql);
      if($query){
       echo "<script>
       alert('Hapus data berhasil');
       document.location='dashboard.php?page=tampil_nilai';
       </script>";
     }
     else
     {
       echo "<script>
       alert('Hapus data GAGAL!');
       document.location='dashboard.php?page=tampil_nilai';
       </script>";
     }
   }
   ?>

   <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Data Nilai</h3>
      <div class="btn-group pull-right"><a href="dashboard.php?page=tambah_nilai" style='text-decoration:none'><button type="button" class="btn btn-success">Tambah</button></a>
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
            <th>Kode Nilai</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Guru</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>Uas</th>
            <th>Total Nilai</th>
            <th>Rata-Rata</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=1;
          $panggil=mysqli_query($koneksi,"select* from nilai");
          while($tampil=mysqli_fetch_array($panggil)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tampil['kd_nilai']; ?></td>
              <td><?php echo $tampil['nis']; ?></td>  
              <td><?php echo $tampil['nama']; ?></td>
              <td><?php echo $tampil['kd_mapel']; ?></td>
              <td><?php echo $tampil['id_guru']; ?></td>
              <td><?php echo $tampil['kd_kelas']; ?></td>
              <td><?php echo $tampil['jurusan']; ?></td>
              <td><?php echo $tampil['semester']; ?></td>
              <td><?php echo $tampil['tugas']; ?></td>
              <td><?php echo $tampil['uts']; ?></td>
              <td><?php echo $tampil['uas']; ?></td>
              <td><?php echo $tampil['total_nilai']; ?></td>
              <td><?php echo $tampil['rata_rata']; ?></td>
              <td>
                <a href="dashboard.php?page=tampil_nilai&&kd_nilai=<?php echo $tampil['kd_nilai'] ?>" class="fa fa-trash-o btn btn-danger"></a>
                <a href="dashboard.php?page=ubah_nilai&&ubah=<?php echo $tampil['kd_nilai']; ?>" class="fa fa-pencil btn btn-info"></a>
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