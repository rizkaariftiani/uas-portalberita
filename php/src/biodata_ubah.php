<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Portal Berita</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="icon" href="images/favicon.ico" type="images/x-icon">
</head>

<body>
<?php
include "koneksi.php";
?>
<div id="wrapper">
  <div id="feeds">
  </div>
  <!-- /feeds -->
  <div id="topbar"> </div>
  <!-- /topbar -->
  <div id="header">
  <h1 align="center">
  <script language="JavaScript1.2">

//Neon Lights Text II 

var message="WELCOME TO NAF NEWS"
var neonbasecolor="#009999"
var neontextcolor="#ffff33"
var neontextcolor2="#ffff99"
var flashspeed=100            // speed of flashing in milliseconds
var flashingletters=3           // number of letters flashing in neontextcolor
var flashingletters2=1            // number of letters flashing in neontextcolor2 (0 to disable)
var flashpause=0            // the pause between flash-cycles in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2 
if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",flashpause)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()

</script></h1>
  </div>
<div id="nav">
    <ul id="menu">
      <li><a href="index1.php">Home</a></li>
      <li><a href="admin.php">Profile</a></li>
    </ul>
    <!-- /menu -->
  </div>
  <div id="page-wrap">
		
				
		<div id="contact-area">
<h2>Edit Data Berita</h2>
<?php 
$idbiodata = $_GET['id'];
//print_r($_GET);
$sql = "select * from biodata where biodata_id='".$idbiodata."'";
$hasil = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($hasil);
?>
<form method="POST" action="biodata_ubahsimpan.php" enctype="multipart/form-data">
<table>
<tr>
  <td>Nama Lengkap</td>
  <td> : <input type="text" name='namalengkap' value="<?php echo $data['nama_lengkap']; ?>">
      <input type="hidden" name="id" value="<?php echo $data['biodata_id'];?>" >
  </td>
</tr>
<tr>
  <td>Tanggal Lahir</td>
  <td> : <input type="text" name='tanggallahir' value="<?php echo $data['tanggal_lahir']; ?>">
      <input type="hidden" name="id" value="<?php echo $data['biodata_id'];?>" >
  </td>
</tr>
<tr>
  <td>Tempat Lahir</td>
  <td> : <input type="text" name='tempatlahir' value="<?php echo $data['tempat_lahir'];?>">
  <input type="hidden" name="id" value="<?php echo $data['biodata_id'];?>" ></td>
</tr>
<tr>
  <td>Alamat</td>
  <td> : <input type="text" name='tempattinggal' value="<?php echo $data['tempat_tinggal'];?>">
  <input type="hidden" name="id" value="<?php echo $data['biodata_id'];?>" >
  </td>
</tr>
<tr>
  <td>Pendidikan</td>
  <td> : <input type="text" name='pendidikn' value="<?php echo $data['pendidikan'];?>">
  <input type="hidden" name="id" value="<?php echo $data['biodata_id'];?>" >
  </td>
</tr>
<tr>
  <td>File Gambar</td>
  <td> : 
  <input type="file" name="foto"></td>
</tr>
<tr>
  <td>Isi Biodata</td>
  <td> : <textarea name="databio"><?php echo $data['isi_biodata']; ?></textarea></td>
</tr>
<tr>
  <td colspan=2>
<input type="submit" name="save" value="Simpan">
<input type="button" value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>
<div style="clear: both;"></div>
		
		
		</div>
	
	</div>
	<div id="footer">
      <div id="fbar">
        <div class="flinks">
        </div>
        <!-- /flinks -->
        <div class="flinks">
        </div>
        <!-- /flinks -->
        <div class="flinks">
        </div>
      </div>
	<div id="copyright">
	<p>&copy; 2017 Portal Berita &middot; Design By NAF-FLY</p>
      
      </div>

</body>

</html>