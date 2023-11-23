<?php

function randomPassword($lengthPass) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-_òàùè+?"^[]{}!#@';
    
    $pass = []; 

    $alphaLength = strlen($alphabet) - 1; 

    for ($i = 0; $i < $lengthPass; $i++) {

        $n = rand(0, $alphaLength);

        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

?>
