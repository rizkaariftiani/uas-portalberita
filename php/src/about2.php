<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
      <li><a href="index.php">Home</a></li>
      <li class="current_page_item"><a href="about2.php">About</a></li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
    <div id="center">
      <div id="the_loop">
        <p class="address">About</p>
        <div class="post">
          <h2><a href="#">NAF NEWS</a></h2>
          <div class="the_content"> <img class="aligncenter" src="images/naff.jpg" alt="" width="300" height="250" border="0" />
            <p>Web Portal adalah web site yang menjadi pintu gerbang, starting point bagi pengunjung untuk memulai aktivitasnya di Internet. Web Portal yang bersifat horizontal menyediakan berbagai informasi dan layanan umum. Sedangkan portal vertical menyediakan informasi dan layanan yang spesifik untuk bidang tertentu saja, sehingga bisa bersifat personal bagi pengunjungnya.</p>
            <p>Layanan umum yang tersedia biasanya adalah search engine, berita, pooling, berbagai macam rubrik dan fasilitas.Yang bersifat personal bisa berupa personal diary dan calender, account e-mail bahkan personal web. Web Portal vertical bahkan bisa bersifat eksklusif dan hanya menampilkan informasi yang dikehendaki komunitasnya. Misalnya portal yang bersifat religius seperti scientology, namun bisa saja sebaliknya bersifat terbuka meskipun membahas hal spesifik seperti toko buku amazon.</p>
            <p>Kelengkapan fasilitas Web Portal mampu menciptakan ketergantungan bagi pengunjung agar secara reguler datang ke web site tersebut. Lambat laun mereka akan tertarik untuk menjadi member dan menjadikan portal tersebut halaman pertama setiap kali membuka Internet browsernya. Portal dibangun sebagai one stop services bagi pengunjung. Sehingga orang menjadi betah menelusuri isinya karena semua yang dibutuhkan ada di sana tidak perlu menjelajah ke tempat lain. Pada titik ini, pengunjung ini boleh dibilang telah masuk ke dalam komunitas portal tersebut.</p>
            <p>Tujuan utama sebuah Web portal adalah membangun komunitas dengan cara mengikat pengunjung secara sukarela ke dalam berbagai layanan yang disediakannya. Apabila densitas komunitas sudah cukup tinggi, pengelola Web portal memiliki metode pendataan secara statistik sehingga mereka  dapat mengetahui profil pengunjung dan membaginya dalam berbagai kelompok. Mereka juga akan membuat prediksi berdasarkan berbagai pola kunjungan sehingga mengetahui dengan pasti layanan apa yang paling diminati.</p>
            <p>Dengan komunitas dan data statistik yang dimilikinya tersebut, pengelola portal kemudian dapat menjual space web site dan layanan yang dimilikinya kepada para pemasar berbagai produk yang sesuai dengan komunitas portal tersebut. Tidak jarang, Web portal didirikan oleh suatu konsorsium bisnis yang memang memiliki minat untuk melakukan pemasaran melalui web site. Sebuah Web portal bisa menjadi tempat perdagangan, semacam trading house.</p>
          </div>
        </div>
       
      
        <!-- /wp-pagenavi -->
      </div>
      <!-- /the_loop -->
    </div>
    <!-- /center -->
    <div id="sidebar">
      <div id="top">
        <div class="topitem">
          <h3>Categories</h3>
          <ul id="categories">
            <li class="cat-item"><a href="login.php">World News</a></li>
            <li class="cat-item"><a href="login.php">Sport</a></li>
            <li class="cat-item"><a href="login.php">Technology</a></li>
          </ul>
          <!-- /categories -->
        </div>
        <!-- /topitem -->
      </div>
      <!-- /right -->
      <div id="bottom">
        <div class="sitem">
          <h3>Sponsor</h3>
          <img src="images/s1.png" alt="" width="320" height="105" border="0" />
         <img src="images/s2.png" alt="" width="320" height="105" border="0" />
         <img src="images/s3.jpg" alt="" width="320" height="105" border="0" />
         <img src="images/s4.jpg" alt="" width="320" height="105" border="0" />
         <img src="images/s5.jpg" alt="" width="320" height="105" border="0" /></div></div></div>

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
      <!-- /copyright -->
    </div>
    <!-- /footer -->
  </div>
  <!-- /content -->
</div>
<!-- /wrapper -->
</body>
</html>
