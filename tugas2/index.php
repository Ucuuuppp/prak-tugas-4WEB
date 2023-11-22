<?php

use kucing\kucing as hewanKucing;
use macan\macan as hewanmacan;

include "kucing/hewan.php";
include "macan/hewan.php";

$pus = new hewanKucing;
$pus->setNama("sulipan");
$pus->setKelamin("Betina");
echo "Nama Kucing : ".$pus->getNama() . "\n"; 
echo "Jenis Kelamin : ".$pus->getKelamin() . "\n";
echo "Makanannya : ".$pus->makan() . "\n";
echo "Bunyinya : ".$pus->bunyi();
echo "\n~~~~~~~next~~~~~~~\n";

$adip = new hewanmacan;
$adip->setNama("irpan");
$adip->setKelamin("Jantan");
echo "Nama macan : ".$adip->getNama() . "\n"; 
echo "Jenis Kelamin : ".$adip->getKelamin() . "\n";

echo "Makanannya : ".$adip->makan() . "\n";
echo "Bunyinya : ".$adip->bunyi();
echo "\nTamat";
