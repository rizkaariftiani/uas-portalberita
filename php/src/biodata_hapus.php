<?php 
include "koneksi.php";
$idbiodata = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM biodata WHERE biodata_id=$idbiodata");
header('location: user.php');

 ?>