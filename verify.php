<?php

$server_seed = "";
$client_seed = "";

$z = hash('sha256', $server_seed);

function createScratchTicket($server_seed, $client_seed) {
    
    $card = array();
    $scratch_index = array();
    for ($i = 0; $i < 15; $i++) {
        $card[] = 0;
        $scratch_index[] = $i;
    }
    
    $hash = hash_hmac("sha512", $server_seed, $client_seed);
   
    $rng_pool = str_split($hash, 4);
    
    for ($i = 0; $i < 6; $i++) {
        
        $rand = intval($rng_pool [0], 16);
        array_splice($rng_pool, 0, 1);
        
        $rand = $rand % count($scratch_index);
        
        $idx = $scratch_index[$rand];
        array_splice($scratch_index, $rand, 1);
        
        $card[$idx] = 1;
    }
    
    $pattern = "";
    for ($i = 0; $i < count($card); $i++) {
        $pattern .= (string) $card[$i];
    }
    
    return $pattern;
}

$ticket = createScratchTicket($server_seed, $client_seed);

echo "Hashed Server Seed: $z\r\n";
echo "Answer Key: $ticket\r\n";

?>
