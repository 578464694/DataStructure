<?php
$arr = [2,1,3,4,7,5];
$len = count($arr);
for($i = 0;$i < $len-1;$i++) {
	for($j = $i+1;$j <$len;$j++) {
		if($arr[$i] < $arr[$j]) {
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		}
	}
}
print_r($arr);
// 冒泡算法，时间复杂度是 o(n^2)
?>