<?php

$text = "The quick brown fox jumps over the lazy dog";

//Convert the string to all lowercase.
$resStr = strtolower($text);
  print_r($resStr);

echo "\n";
//Replace "brown" with "red" in the string.
$repStr = str_replace('brown', 'red', $text);
  print_r($repStr);

echo "\n";

?>