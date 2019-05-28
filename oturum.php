<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="stil.css" type="text/css" rel="stylesheet"/>
<title>İstanbul Şehir Üniversitesi-Oturum Açın</title>
</head>

<body>
<header>
		<div class="bosluk">
		<ul>
  <li><a href="index.php">ANASAYFA</a></li>
  <li><a href="forum.php">FORUM</a></li>
  <li><a href="kisi.php">KİŞİLER</a>
   <ul>
    <li><a href="kisi1.php">KİŞİLER SAYFASI</a></li>
  </ul>  
			</li>
  <li><a href="foto.php">FOTOĞRAFLAR</a>
  <ul>
    <li><a href="foto1.php">FOTOĞRAF SAYFASI</a></li>
  </ul>  
  </li>
  <li><a href="video.php">VİDEOLAR</a>
   <ul>
    <li><a href="video1.php">VİDEO SAYFASI</a></li>
  </ul>  </li>
  <li><a href="kim.php">KİM,NEREDE,NE YAPIYOR?</a></li>
 
</ul>
</div>
	</header>
	<div style="height:100px; width:auto; margin:auto; position:absolute; left:35%;top:70%;">
	<form name="kullanicigirisi" method="post" action="">
<table width="354" border="0" cellpadding="2" cellspacing="5">
  <tr>
    <td width="130" height="25">Kullanıcı Adı</td>
    <td width="12">:</td>
    <td width="189">
      <label for="kadi"></label>
      <input type="text" name="kadi" id="kadi">
    </td>
  </tr>
  <tr>
    <td>Kullanıcı Şifresi</td>
    <td>:</td>
    <td><input type="password" name="sifre" id="sifre"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="girisbuton" id="girisbuton" value="Giriş Yap">
   </td>
  </tr>
</table>
</form><br><br><br>
	</div>

<?php
	

session_start();
 
if(isset($_POST["girisbuton"]))
{
  $adi = 'esma';
 $sifre = '12345';
	$kadi=$_SESSION["kullaniciadi"] = $_POST["kadi"];
	$sifree=$_SESSION["kullanicisifresi"] = $_POST["sifre"];
	
	if($adi==$kadi||$kadi=='Esma'&&$sifre==$sifree){
	header('location: index.php');	
		}
	else {echo 'Lütfen bilgileri kontrol edin';}
}
 
?>
 


<footer>
<ul>
    <li><a href="index.php">ANASAYFA</a></li>
   <li><a href="kayit.php">KAYIT</a></li>
  <li><a href="oturum.php">OTURUM</a></li>
  <li><a href="harita.php">HARİTA</a></li>
</ul>
	</footer>
</body>
</html>