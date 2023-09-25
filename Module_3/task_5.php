<?php
function generatePassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789(!@#$%^&*()_+)";
    $pass = array(); 
    $length = strlen($alphabet) - 1; 
    for ($i = 0; $i < 12; $i++) {
        $n = rand(0, $length);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

echo generatePassword()."\n";

?>