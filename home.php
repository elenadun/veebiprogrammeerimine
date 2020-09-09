<?php
  $username = "Elena Dunajeva";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  
  if($hournow <= 6){
	  $partofday = "uneaeg";
  }//enne 6
  if($hournow >= 8 and $hournow <= 16){
      $partofday = "õppimise aeg";
  }//pärast 8 ja enne 16
  if($hournow >= 16 and $hournow <= 18){
	  $partofday = "puhkamise aeg";
  }//pärast 16 ja enne 18
  if($hournow >= 18 and $hournow <= 20){
  $partofday = "pesemise aeg";
  }//pärast 18 ja enne 19
  if($hournow >= 20 and $hournow <=6){
	  $partofday = "magamise aeg";
  }//pärast 22 ja enne 6
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime("2020-8-31");
  $semesterend = new DateTime("2020-12-13");
  //selgitame välja nende vahe ehk erinevuse
  $semesterduration = $semesterstart->diff($semesterend);
  //leiame selle päevade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");
  
  //tänane päev
  $today = "2020-8-31";
  $semesterdate = new DateTime($today);
  
  $interval = $semesterdate->diff(date_create("now"));
  //arvutamine päeva järgi
  $days = $interval->d;
  if($days <= 1){
	  $semestriolek = "ei ole veel alanud";
  }
  
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See konkreetne leht on loodud veebiprogrammeerimise kursusel aasta 2020 sügissemestril <a href="https://www.tlu.ee">Tallinna Ülikooli</a> Digitehnoloogiate instituudis.</p>
  <p>Lehe avamise hetk: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Praegu on " .$partofday ."."; ?></p>
</body>
</html>