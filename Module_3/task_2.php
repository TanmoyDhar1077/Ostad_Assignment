<?php
function remove_even($var)
  {
  return($var & 1);
  }

$numbers=array(1,2,3,4,5,6,7,8,9,10);

$filter = (array_filter($numbers,"remove_even"));
print_r ($filter);

?>