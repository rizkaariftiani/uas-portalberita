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
<script type="text/javascript">

/*snow efek*/
  function openwindow(){
window.open("autumn_effect.htm","","width=350,height=500")
}

  //Configure below to change URL path to the snow image
  var snowsrc="images/snow.gif"
  // Configure below to change number of snow to render
  var no = 10;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

  function iecompattest(){
  return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
  }

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
    if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
    doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
  if (snowdistance=="windowheight"){
    doc_height = window.innerHeight || iecompattest().clientHeight
  }
  else{
    doc_height = iecompattest().scrollHeight
  }
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

  function hidesnow(){
    if (window.snowtimer) clearTimeout(snowtimer)
    for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
  }
    
if (ie4up||ns6up){
    snowIE_NS6();
    if (hidesnowtime>0)
    setTimeout("hidesnow()", hidesnowtime*1000)
    }

</script>
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
      <li class="current_page_item"><a href="index2.php">Home</a></li>
      <li><a href="about1.php">About</a></li>
      <li><a href="user.php">Profile</a></li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
    <div id="center">
      <div id="headline">
        <h3>HOMEPAGE</h3>
        <div class="the_content"> <img src="images/home.png" alt="" width="600" height="300" border="0" />
        </div>
        <!-- /the_content -->
      </div>
      <!-- wn1 -->
      <div id="featured">
        <h3>Breaking News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=2";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- wn2 -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=20";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- wn3 -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=11";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
      </div>
      <!-- /featured -->
      <div id="popular">
        <h3>Popular News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=6";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=24";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=14";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
      </div>
      <!-- /popular -->
      <div id="latest">
        <h3>Latest News</h3>
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=7";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
        <div class="spost">
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=25";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <div class="spost">
        <?php 
            $query ="SELECT berita_id, berita_kategori, berita_judul, berita_tanggal,berita_isi, berita_gambar FROM berita WHERE berita_id=16";
            $hasil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($hasil);
  ?>
          <h2><?php echo $data["berita_judul"]; ?></h2>
          <?php echo "<img src=images/".$data['berita_gambar'].">"; ?>
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
      <!-- /top -->
      <!-- /right -->
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
