<div class="row">
    <div class="col-md-12">

        <!-- START DATATABLE EXPORT -->
        <?php
        if(isset($_POST['simpan'])){
            $query=mysqli_query($koneksi,"insert into siswa value('$_POST[nim]','$_POST[nik]','$_POST[nm]','$_POST[jr]','$_POST[al]')");
            if($query){
             echo "<script>
             alert('simpan data berhasil');
             document.location='index.php?page=formsiswa';
             </script>";
         }
         else
         {
             echo "<script>
             alert('simpan data GAGAL!');
             document.location='index.php?page=formsiswa';
             </script>";
         }
     }

     ?>
     <?php
     if(isset($_GET['nim'])){
        $query=mysqli_query($koneksi,"delete from siswa where nim='$_GET[nim]'");
        if($query){
         echo "<script>
         alert('Hapus data berhasil');
         document.location='index.php?page=formsiswa';
         </script>";
     }
     else
     {
         echo "<script>
         alert('Hapus data GAGAL!');
         document.location='index.php?page=formsiswa';
         </script>";
     }
 }
 ?>
 <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">DataTable Export</h3>
        <div class="btn-group pull-right"><a href="index.php?page=tambah_siswa" style='text-decoration:none'><button type="button" class="btn btn-success">Tambah</button></a>button>
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
                    <th>MATA PELAJARAN</th>
                    <th>NAMA</th>
                    <th>JURUSAN</th>
                    <th>ALAMAT</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $c=mysqli_query($koneksi,"select* from guru,siswa where guru.nik=siswa.nik");
              $no=1;
              while($d=mysqli_fetch_array($c)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nim'] ?></td>
                    <td><?php echo $d['matapelajaran'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['jurusan'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td>
                        <a href="?page=formsiswa&&nim=<?php echo $d['nim'];?>" class="fa fa-trash-o btn btn-danger"></a>
                        <a href="?page=ubahsiswa&&tampil=<?php echo $d['nim'];?>" class="fa fa-pencil btn btn-info"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>                                    

</div>
</div>
<!-- END DATATABLE EXPORT -->                            
<div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT FORM ELEMENTS -->
                        <div class="block">
                            <h4>Form Tambah Siswa</h4>
                            <form method="POST" class="form-horizontal" role="form">                                    
                                <div class="form-group">
                                    <label class="col-md-2 control-label">NIM</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nim" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">matapelajaran</label>
                                    <div class="col-md-10">
                                        <select  name="nik" class="form-control"/>
                                        <option> pilih matapelajaran </option>
                                        <?php 
                                        $panggil="select* from guru";
                                        $a=mysqli_query($koneksi,$panggil);
                                        while($b=mysqli_fetch_array($a)){
                                            echo "<option value='$b[nik]'>$b[matapelajaran]</option>";
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nm" class="form-control"/>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-md-2 control-label">JURUSAN</label>
                                <div class="col-md-10">
                                    <input type="text" name="jr" class="form-control"/>
                                </div>
                            </div>                                    
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-10">
                                    <textarea name="al" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                <div class="col-md-10">
                                  <input type="submit" class="btn btn-success" name="simpan" value="Simpan"/>
                                  <input type="submit" class="btn btn-danger" value="Batal"/>
                              </div>
                          </div>   
                      </form>
                  </div>
                  <!-- END DEFAULT FORM ELEMENTS -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>    