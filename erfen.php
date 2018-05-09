<?php
$arr = [1,3,4,6,7,10];
function find($arr,$number)
{
	$len = count($arr);
	$left = 0;
	$right = $len-1;
	$mid = (int)(($left+$right)/2);
	while($left <= $right) 
	{
		if($arr[$left] == $number) {
			return $left;
		}elseif($arr[$right] == $number) {
			return $right;
		}elseif($arr[$mid] == $number) {
			return $mid;
		}
		if($arr[$mid] < $number) {
			$left = $mid+1;
		}else{
			$right = $mid-1;
		}
	}
}
$result = find($arr, 6);
echo $result;
?>