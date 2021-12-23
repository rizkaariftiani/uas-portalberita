<?php
include "koneksi.php";
if (isset($_POST['save'])){

	//ambil data yang dikirim dari form
	$nama = $_POST['namalengkap'];
	$tanggal = $_POST['tanggallahir'];
	$tempat = $_POST['tempatlahir'];
	$tempattgl = $_POST['tempattinggal'];
	$jenjang = $_POST['pendidikn'];
	$dataa = $_POST['databio'];
	//untuk file gambar
	$foto = $_FILES['foto']['name']; 
	$judulpendek = substr($nama, 0,5);
	$ganti = $judulpendek."_".$foto;
	$tmp_name = $_FILES['foto']['tmp_name'];
	
	// folder tempat menyimpan gambar
	$destination = "images/"; 

	//print_r($_POST);

// Simpan gambar di Folder Gambar
if(move_uploaded_file($tmp_name, $destination.$foto)){
   	$message = 'Gambar berhasil diupload!';
   	//die($message);
	//echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	// Simpan gambar ke Database
	$sql = "insert into biodata (nama_lengkap, tanggal_lahir, tempat_lahir, tempat_tinggal,pendidikan, isi_biodata, foto_profile) 
			values ('$nama','$tanggal','$tempat','$tempattgl','$jenjang', '$dataa', '$foto')";
	mysqli_query($koneksi,$sql);
	header('location: user.php');
} else { 
	echo "Data gagal disimpan";
}


}
?>