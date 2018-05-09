<?php
$arr = Array
(
     5,
     4,
     1,
     8,
     7
);
function cmp($a, $b)
{
    
    return ($a < $b) ? -1 : 1;
}

$result = usort($arr, 'cmp');
print_r($result);
print_r($arr);
?>