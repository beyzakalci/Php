<?php
function quick_sort($array)
 {
	$loe = $gt = array();
	if(count($array) < 2)
	{
		return $array;
	}
	$pivot_key = key($array);
	$pivot = array_shift($array);
	foreach($array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}
 
$array = array(75, 50, 45, 85, 50, 40, 70);
echo 'İlk Dizi : '.implode(',',$array) ;
$array = quick_sort($array);
echo ' Sıralanmış Dizi : '.implode(',',$array);