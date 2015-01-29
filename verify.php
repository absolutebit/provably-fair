<?php

$client_seed = "";
$server_seed = "";

$z = hash('sha256', $server_seed);
$n = hash_hmac('sha256', $client_seed, $server_seed);
$n = preg_replace("/[^0-9]/", "", $n);

while($winners<6 || $losers<9) {
	   $x = substr($n, $index, 1);
	   if($x>5 && $winners<6) {
		      $winners++;
		      $ticket = $ticket."1";
	   }
	   if($x<=5 && $losers<9) {
		      $losers++;
		      $ticket = $ticket."0";
	   }
	   $index++;
}

echo "Hashed Server Seed: $z\r\n";
echo "Answer Key: $ticket\r\n";

?>
