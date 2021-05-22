<div class="row">
  <div class="col-md-12">

    <!-- START DATATABLE EXPORT -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Data Guru</h3> 
      </div>
      <div class="panel-body">
        <table id="customers2" class="table datatable">
          <thead>
            <tr><th>NO</th>
              <th>Id Guru</th>
              <th>Nama</th>
              <th>NUPTK</th>
              <th>Jenis Kelamin</th>
              <th>NIP</th>
              <th>Status Kepegawaian</th>
              <th>Jenis PTK</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>Kecamatan</th>
              <th>Tugas Tambahan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            $panggil=mysqli_query($koneksi,"select* from guru");
            while($tampil=mysqli_fetch_array($panggil)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampil['id_guru']; ?></td>
                <td><?php echo $tampil['nama']; ?></td>  
                <td><?php echo $tampil['nuptk']; ?></td>
                <td><?php echo $tampil['jk']; ?></td>
                <td><?php echo $tampil['nip']; ?></td>
                <td><?php echo $tampil['status_kepegawaian']; ?></td>
                <td><?php echo $tampil['jenis_ptk']; ?></td>
                <td><?php echo $tampil['agama']; ?></td>
                <td><?php echo $tampil['alamat']; ?></td>
                <td><?php echo $tampil['kecamatan']; ?></td>
                <td><?php echo $tampil['tugas_tambahan']; ?></td>
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