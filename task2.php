<?php 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function remove_even($n){
  $result =  $n % 2 != 0;
    return $result;
}
$filter = array_filter($numbers, 'remove_even');
print_r($filter);

