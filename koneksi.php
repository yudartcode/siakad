<?php
$koneksi = mysqli_connect("localhost","root","","db_siakad");

if(!$koneksi){
	echo "Koneksi Database Gagal...!!!";
}
?>