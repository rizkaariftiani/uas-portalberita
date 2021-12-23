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
<h2>Tambah Data Berita</h2>
<form method="POST" action="berita_simpan.php" enctype="multipart/form-data">
<table>
<tr>
  <td>Kategori Berita</td>
  <td> : <input type="text" name='kategoriberita'></td>
</tr>
<tr>
  <td>Judul Berita</td>
  <td> : <input type="text" name='judulberita'></td>
</tr>
<tr>
  <td>Tanggal Berita</td>
  <td> : <input type="text" name='tanggalberita'></td>
</tr>
<tr>
  <td>Isi Berita</td>
  <td> : <textarea name="isiberita"></textarea></td>
</tr>
<tr>
  <td>File Gambar</td>
  <td> : 
  <input type="file" name="gambar"></form></td>
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