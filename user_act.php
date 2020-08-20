<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];

$rand = rand();
$ekstensi =  array('jpg','pdf');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:user_tambah.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10440700){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO upload VALUES(NULL,'$nama','$nim','$xx')");
		header("location:user_tambah.php?alert=berhasil");
	}else{
		header("location:user_tambah.php?alert=gagal_ukuran");
	}
}