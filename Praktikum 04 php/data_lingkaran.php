<?php
 require_once "class_lingkaran.php";
 $lingkar1 = new Lingkaran( 5, 10 );
 $lingkar2 = new Lingkaran( 4, 11 );
 echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
 echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
 echo "<br/>Keliling Lingkaran I ".$lingkar1->getKeliling();
 echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();
 ?>