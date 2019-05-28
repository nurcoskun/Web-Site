<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="stil.css" type="text/css" rel="stylesheet"/>
<title>İstanbul Şehir Üniversitesi-Kişi Sayfası</title>
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
<form action="" method="post"> <br><br><br><br>
<p id="yeni">Mesaj: <br/><textarea name="mesaj" id="bicim"></textarea>
  Kullanıcı:<br/><input id="bicim1" type="text" name="kullanici" /><br>
<input id="bicim1" type="submit" value="Formu Kaydet"/>
<br><br><br><br><br><br><br><br>
 </form>
</div>

<?php
	
	echo '<div style="float:right;width:50%;">';
echo '<div style="height:100px; width:auto; margin:auto; position:absolute; right:20%;top:60%;"><br><br><br>';

    echo '<div style="height: 50%; width: auto; float: left; font-size: 20px;"><img src="images/img1.fw.png"><h4><pre>  10874-Ahmet Ekim </pre></h4><br><br><br><br></div>';
    
    
	echo '</div><br><br><br><br><br><br><br><br><br><br><br><br>';
	
if(isset($_POST['kullanici']) && isset($_POST['mesaj'])) {
   $kullanici = $_POST['kullanici'];
	$mesaj=$_POST['mesaj'];
 
   if(empty($kullanici) || empty($mesaj)) {
	   echo '<br><br><br>';
      echo 'Lütfen formu boş bırakmayın';
   } else {
	   if ($_POST) {  echo '<br><br>';
		 echo "<table border='1' width='600px; height=600px'>";
		 echo "<tr>";
		 echo "<th>Adı</th>";
		 echo "<th>Mesajı</th>";
		 echo "</tr>";
   		echo "<tr>";echo '<br>';echo '<br>';
   		echo "<td>$kullanici</td>";
   		echo "<td>$mesaj</td>";
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