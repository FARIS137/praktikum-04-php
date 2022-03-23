<?php
require_once "classpersegi_panjang.php";
echo " Lebar persegi panjang I = 7<br/>";
echo " Lebar persegi panjang II = 7<br/>";
echo " panjang persegi panjang I = 20<br/>";
echo " panjang persegi panjang II = 10<hr/>";
$perpan1 = new Persegi_panjang( 7, 20 );
$perpan2 = new Persegi_panjang(7, 10  );
echo "<br/> Luas Persegi panjang I = ".$perpan1->getluas();
echo "<br/> Luas Persegi panjang II = ".$perpan2->getluas();
echo "<br/> keliling Persegi panjang I = ".$perpan1->getkeliling();
echo "<br/> keliling Persegi panjang II = ".$perpan2->getkeliling();

?>