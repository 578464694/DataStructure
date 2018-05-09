<?php
function find($arr)
{
	$result = 0;
	$len = count($arr);
	for($i = 0; $i < $len; $i++)
	{
		$result ^= $arr[$i];
	}
	
	for($i = 1; $i <= 1000;$i++)
	{
		$result ^= $i;
	}
	
	print_r($result);
	
}

$arr = [];
for($i=1;$i <= 1000;$i++)
{
	$arr[$i] = $i;
}

$arr[0] = rand(0,1000);

print_r($arr[0]);

find($arr);

?>