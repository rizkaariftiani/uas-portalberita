<?php 
include "koneksi.php";
$idberita = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM berita WHERE berita_id=$idberita");
header('location: berita.php');

 ?>