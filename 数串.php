<?php
while(fscanf(STDIN,"%d",$N)==1){
	$arr = trim(fgets(STDIN));
    $arr = explode(" ",$arr);
	usort($arr, 'cmp');
	
	$result = implode("",$arr);
	echo $result."\n";
}

function cmp($a, $b)
{
    if($a.$b === $b.$a) {
		return 0;
	}
    return ($a.$b < $b.$a) ? 1 : -1;
}

?>