<?php
$arr = [2,1,3,4,7,5];
function quick($arr)
{
	if(! is_array($arr)) {
		return false;
	}
	$len = count($arr);
	if( $len <= 0){
		return $arr;
	}
	$left = $right = [];
	for($i = 1;$i < $len;$i++) {
		if($arr[0] > $arr[$i]) {
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	$left = quick($left);
	$right = quick($right);
	return array_merge($left, array($arr[0]), $right);
}
$arr = quick($arr);
print_r($arr);
?>