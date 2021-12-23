<?php
include "koneksi.php";
if (isset($_POST['save'])){

	//ambil data yang dikirim dari form
	$idbiodata = $_POST['id'];
	$nama = $_POST['namalengkap'];
	$tanggal = $_POST['tanggallahir'];
	$tempat = $_POST['tempatlahir'];
	$tempattgl = $_POST['tempattinggal'];
	$jenjang = $_POST['pendidikn'];
	$dataa= $_POST['databio'];
	$foto = $_FILES['foto']['name']; 
	$judulpendek = substr($judul, 0,5);
	$ganti = $judulpendek."_".$foto;
	$tmp_name = $_FILES['foto']['tmp_name'];
	$destination = "images/";
	if(move_uploaded_file($tmp_name, $destination.$foto)){
	$sql = "select * from biodata where biodata_id='$idbiodata'";
	$data = mysqli_fetch_assoc(mysqli_query($koneksi,$sql));
		} 
	if(is_file("images/biodata".$data['foto_profile'])){     
		unlink("images/biodata".$data['foto_profile']); 
		   	}
		else { 
			echo "Data gagal disimpan";
		}
	$sql = "UPDATE biodata SET nama_lengkap = '$nama',tanggal_lahir = '$tanggal', tempat_lahir = '$tempat', tempat_tinggal = '$tempattgl', pendidikan = '$jenjang', isi_biodata = '$dataa', foto_profile = '$foto' WHERE biodata_id = '$idbiodata'";
			echo $sql;
			mysqli_query($koneksi,$sql);
			echo "berhasil";
			header('location: user.php');
}
?>