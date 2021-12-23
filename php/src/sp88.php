<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<title>Portal Berita</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="icon" href="images/favicon.ico" type="images/x-icon">
<!--[if IE 6]><script src="scripts/suckerfish.js" type="text/javascript"></script><link href="ie6.css" type="text/css" rel="stylesheet" media="screen" /><![endif]-->
<!--[if IE 7]><style>ul#menu li li li {padding-left:0;}</style><![endif]-->
<!--[if IE]><style>#searchform input#searchsubmit {height:24px;}#feeds p { padding-top:1px;}</style><![endif]-->
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
  <!-- /header -->
  <div id="nav">
    <ul id="menu">
      <li><a href="index2.php">Home</a></li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
  <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=26";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
    <div id="center">
      <div id="the_loop">
        <p class="address"><?php echo $data["berita_kategori"];?></p>
        <div class="post">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <p class="postmeta"><?php echo $data["berita_tanggal"];?></p>
          <div class="the_content"><?php  
           echo "<img src=images/".$data['berita_gambar'].">";
            ?>
            <p><?php echo $data["berita_isi"];?></p>
          </div></div></div></div>
    <div id="sidebar">
      <div id="top">
        <div class="topitem">
          <h3>Categories</h3>
          <ul id="categories">
            <li class="cat-item"><a href="wnn.php">World News</a></li>
            <li class="cat-item"><a href="sportt.php">Sport</a></li>
            <li class="cat-item"><a href="teknologii.php">Technology</a></li>
          </ul>
          <!-- /categories -->
        </div>
        <!-- /topitem -->
      </div>
      <div id="bottom">
        <div class="sitem">
          <h3>Sponsor</h3>
         <img src="images/s1.png" alt="" width="320" height="105" border="0" />
         <img src="images/s2.png" alt="" width="320" height="105" border="0" />
         <img src="images/s3.jpg" alt="" width="320" height="105" border="0" />
         <img src="images/s4.jpg" alt="" width="320" height="105" border="0" />
         <img src="images/s5.jpg" alt="" width="320" height="105" border="0" />
        </div>
        <!-- /sitem -->
      </div>
      <!-- /bottom -->
    </div>
    <!-- /sidebar -->
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
        <!-- /flinks -->
      </div>
      <!-- /fbar -->
      <div id="copyright">
        <p>&copy; 2017 Portal Berita &middot; Design By NAF-FLY</p>
      </div>
      <!-- /copyright -->
    </div>
    <!-- /footer -->
  </div>
  <!-- /content -->
</div>
<!-- /wrapper -->
</body>
</html>
