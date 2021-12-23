<?php
include "koneksi.php";
if (isset($_POST['save'])){

	//ambil data yang dikirim dari form
	$kategori = $_POST['kategoriberita'];
	$judul = $_POST['judulberita'];
	$tanggal = $_POST['tanggalberita'];
	$isi = $_POST['isiberita'];
	//untuk file gambar
	$gambar = $_FILES['gambar']['name']; 
	$judulpendek = substr($judul, 0,5);
	$rename = $judulpendek."_".$gambar;
	$tmp_name = $_FILES['gambar']['tmp_name'];
	
	// folder tempat menyimpan gambar
	$destination = "images/"; 

	//print_r($_POST);

// Simpan gambar di Folder Gambar
if(move_uploaded_file($tmp_name, $destination.$gambar)){
   	$message = 'Gambar berhasil diupload!';
   	//die($message);
	//echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	// Simpan gambar ke Database
	$sql = "insert into berita (berita_kategori, berita_judul, berita_tanggal, berita_isi,berita_gambar) 
			values ('$kategori','$judul','$tanggal','$isi','$gambar')";
	mysqli_query($koneksi,$sql);
	header('location: berita.php');
} else { 
	echo "Data gagal disimpan";
}


}
?>