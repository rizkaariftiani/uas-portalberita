<?php
// membuat koneksi 
$con = mysqli_connect("localhost","root","","naf");

// Deklarasi variable
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$submit =$_POST['submit'];

if(isset($submit)){

	if(empty($username) or empty($password)){

		echo "<script>alert('Form Tidak Boleh Kosong !!! Silahkan Ulangi Lagi...'); window.location=('register.php') </script>";
	}else{

		$pass = md5($_POST['password']);
		$ins = mysqli_query($con,"insert into login(email_login,user_login,pass_login) values ('$email','$username','$pass')");
		echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
	}
}
?>