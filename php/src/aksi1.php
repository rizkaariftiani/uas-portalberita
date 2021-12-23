<?php
session_start();
// membuat koneksi
$con = mysqli_connect("localhost","root","","naf");
 
// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$login =$_POST['login'];
 
if(isset($login)){
 
 if(empty($username) or empty($password)){
 
  echo "<script>alert('Form Tidak Boleh Kosong !!! Silahkan Ulangi Lagi...'); window.location=('login1.php') </script>";
 }else{
 
  $query = mysqli_query($con,"SELECT * FROM login WHERE user_login = '$username' and pass_login = '$password'");
  if(mysqli_num_rows($query) > 0){
   echo "Selamat datang admin";
 
   $r = mysqli_fetch_array($query);
   $_SESSION['username'] = $r['user_login'];
 
   header("location:admin.php");
  }else{
 
   header("location:login1.php");
  }
 }
}
 
?>