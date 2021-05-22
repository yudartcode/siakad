<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
	if(file_exists("$page.php")){
		include "$page.php";
	}else{
		echo "<div class='card-body'>
      <h1>Halaman tidak ditemukan!</h1></div>";
	}
}else{
	include "home.php";
}
?>