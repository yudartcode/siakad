<div class="row">
  <div class="col-md-12">

    <!-- START DATATABLE EXPORT -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Data Jurusant</h3>                                  
      </div>
      <div class="panel-body">
        <table id="customers2" class="table datatable">
          <thead>
            <tr><th>NO</th>
              <th>Kode Jurusan</th>
              <th>Jurusan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            $panggil=mysqli_query($koneksi,"select* from jurusan");
            while($tampil=mysqli_fetch_array($panggil)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampil['kd_jurusan']; ?></td>
                <td><?php echo $tampil['jurusan']; ?></td>
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