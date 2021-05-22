
<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">SIAKAD</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">John Doe</div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>                                                                        
        </li>

        <?php if($_SESSION['level']=="admin"){?>
            <li class="active">
                <a href="dashboard.php?page=home"><span class="fa fa-home"></span> <span class="xn-text">Beranda</span></a>
            </li> 
            <li class="active">
                <a href="dashboard.php?page=tampil_siswa"><span class="fa fa-user"></span> <span class="xn-text">Siswa</span></a>
            </li>  
            <li class="active">
                <a href="dashboard.php?page=tampil_kelas"><span class="fa fa-folder-o"></span> <span class="xn-text">Kelas</span></a> 
            </li>       
            <li class="active">
                <a href="dashboard.php?page=tampil_jurusan"><span class="fa fa-folder-o"></span> <span class="xn-text">Jurusan</span></a>
            </li> 
            <li class="active">
                <a href="dashboard.php?page=tampil_mapel"><span class="fa fa-folder-o"></span> <span class="xn-text">Mata Pelajaran</span></a>
            </li> 
            <li class="active">
                <a href="dashboard.php?page=tampil_nilai"><span class="fa fa-folder-o"></span> <span class="xn-text">Nilai</span></a>
            </li> 
            <li class="active">
                <a href="dashboard.php?page=tampil_guru"><span class="fa fa-user"></span> <span class="xn-text">Guru</span></a>
            </li>
            <li class="active">
                <a href="dashboard.php?page=tampil_user"><span class="fa fa-user"></span> <span class="xn-text">User</span></a>
            </li> 
            <li class="xn-title">Transaksi</li>
            <li class="active">
                <a href=""><span class="fa fa-print"></span> <span class="xn-text">Cetak Nilai</span></a>
            </li>
            <li class="active">
                <a href=""><span class="fa fa-print"></span> <span class="xn-text">Cetak Siswa</span></a>
            </li>  
            <li class="active">
                <a href=""><span class="fa fa-print"></span> <span class="xn-text">Cetak Guru</span></a>
            </li>                  

        <?php }else if($_SESSION['level']=="siswa"){?>
            <li class="active">
                <a href=""><span class="fa fa-user"></span> <span class="xn-text">Ubah Biodata</span></a>
            </li>
            <li class="active">
                <a href="dashboard.php?page=lihat_kelas"><span class="fa fa-folder-o"></span> <span class="xn-text">Lihat Kelas</span></a>
            </li>
            <li class="active">
                <a href="dashboard.php?page=lihat_jurusan"><span class="fa fa-folder-o"></span> <span class="xn-text">Lihat Jurusan</span></a>
            </li> 
            <li class="active">
                <a href=""><span class="fa fa-folder-o"></span> <span class="xn-text">Lihat Nilai</span></a>
            </li> 
            <li class="active">
                <a href="dashboard.php?page=lihat_guru"><span class="fa fa-user"></span> <span class="xn-text">Lihat Guru</span></a>
            </li> 
        <?php }else if($_SESSION['level']=="guru"){?>
            <li class="active">
                <a href="dashboard.php?page=tampil_nilai"><span class="fa fa-folder-o"></span> <span class="xn-text">Nilai</span></a>
            </li> 
        <?php } ?>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->
