<?php
include "koneksi.php";
if (isset($_POST['save'])){

	//ambil data yang dikirim dari form
	$idberita = $_POST['id'];
	$kategori = $_POST['kategoriberita'];
	$judul = $_POST['judulberita'];
	$tanggal = $_POST['tanggalberita'];
	$isi = $_POST['isiberita'];
	$gambar = $_FILES['gambar']['name']; 
	$judulpendek = substr($judul, 0,5);
	$rename = $judulpendek."_".$fileName;
	$tmp_name = $_FILES['gambar']['tmp_name'];
	$destination = "images/";
	if(move_uploaded_file($tmp_name, $destination.$gambar)){
	$sql = "select * from berita where berita_id='$ideberita'";
	$data = mysqli_fetch_assoc(mysqli_query($koneksi,$sql));
		} 
	if(is_file("images/berita".$data['berita_gambar'])){     
		unlink("images/berita".$data['berita_gambar']); 
		   	}
		else { 
			echo "Data gagal disimpan";
		}
	$sql = "UPDATE berita SET berita_kategori = '$kategori',berita_judul = '$judul', berita_tanggal = '$tanggal', berita_isi = '$isi', berita_gambar = '$gambar' WHERE berita_id = '$idberita'";
			echo $sql;
			mysqli_query($koneksi,$sql);
			echo "berhasil";
			header('location: berita.php');
}
?>