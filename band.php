<?php
$totaal = 0;
$album = array('Citizen of Glass' => "4.5","Night" => "9" , "New Eyes " => "5", "Strange Trails " => "10" , );
foreach ($album as $naam => $prijs) {
  echo ($naam . " kost €" . $prijs . PHP_EOL);
  ($totaal += $prijs);
}

readline("Het totaalbedrag van alle albums is €" . $totaal . PHP_EOL);
readline("De gemiddelde prijs van alle albums is €" . $totaal / (count($album)));
 ?>
