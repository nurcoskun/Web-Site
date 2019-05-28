<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="stil.css" type="text/css" rel="stylesheet"/>
<title>İstanbul Şehir Üniversitesi-Kayıt</title>
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


<div style="float:left;width:50%;">
<form action="" method="post"> <br><br>
<p id="yeni">
 Kullanıcı Adı:<br/><input id="bicim1" type="text" name="kullanici" />
 Mail Adresiniz: <br/><input id="bicim1" type="text" name="mail" />
 Şifre:<br/><input id="bicim1" type="password" name="sifre" />
  <br/></p>
<input id="bicim1" type="submit" value="Kaydet"/>
<br><br><br><br><br><br><br><br>
 </form>
</div>

<?php
	
	echo '<div style="float:right;width:50%;">';
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) {
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
	$mail=$_POST['mail'];
 
   if(empty($kullanici) || empty($sifre)) {
	   echo '<br><br><br>';
      echo 'Lütfen formu boş bırakmayın';
   } else {
	   if ($_POST) {  echo '<br><br>';
		 echo "<table border='1' width='600px; height=600px'>";
		 echo "<tr>";
		 echo "<th>Adı</th>";
		 echo "<th>Mail Adresi</th>";
		 echo "</tr>";
   		echo "<tr>";echo '<br>';echo '<br>';
   		echo "<td>$kullanici</td>";
   		echo "<td>$mail</td>";
   		echo "</tr>";
}
echo "</table>";
   }
} else {echo '<br><br><br>';
   echo 'Lütfen formu kullanın';
}
echo '</div>';

	 
    
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