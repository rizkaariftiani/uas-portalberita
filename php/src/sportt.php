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
    <div id="center">
      <div id="headline">
        <h3>Sport News</h3>
        <h2>Berita Olahraga</h2>
        <div class="the_content"> <img src="images/sp.jpg" alt="" width="230" height="165" border="0" />
          <p>Berita Olahraga ini kami menyediakan seputar berita Olahraga yang terdapat diseluruh dunia, Tentunya disajikan bagi seluruh pecinta olahraga didunia dengan berita teraktual dan terbaru.</a></p>
        </div>
        <!-- /the_content -->
      </div>
      <!-- wn1 -->
      <div id="featured">
        <h3>Breaking News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=19";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?>- 14:37 WIB &#8230; <a href="sp11.php">Read more &raquo;</a></p>
        </div>
        <!-- wn2 -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=20";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> -18:18 WIB &#8230; <a href="sp22.php">Read more &raquo;</a></p>
        </div>
        <!-- wn3 -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=21";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> -14:19 WIB &#8230; <a href="sp33.php">Read more &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
      </div>
      <!-- /featured -->
      <div id="popular">
        <h3>Popular News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=22";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> -20:26 WIB  &#8230; <a href="sp44.php">Read more &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=23";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> -12:09 WIB &#8230; <a href="sp55.php">Read more &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=24";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> -08:38 WIB &#8230; <a href="sp66.php">Read more &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
      </div>
      <!-- /popular -->
      <div id="latest">
        <h3>Latest News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=25";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> - 08:08 WIB &#8230; <a href="sp77.php">Read entire article &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=26";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> - 11:36 WIB &#8230; <a href="sp88.php">Read entire article &raquo;</a></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=27";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
      ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
          <p><?php echo $data["berita_tanggal"];?> - 21:06 WIB &#8230; <a href="sp99.php">Read entire article &raquo;</a></p>
        </div>
        </div>
        <!-- /navigation -->
      </div>
      <!-- /latest -->
    </div>
    <!-- /center -->
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
