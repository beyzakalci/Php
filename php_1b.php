<?php
	$dizi = array(75, 50, 45, 85, 50, 40, 70);

	for($i = 0; $i<7; $i++) {
		for($j = $i; $j>0 && $dizi[$j] < $dizi[$j-1]; $j--) {
			$aktar = $dizi[$j];
			$dizi[$j] = $dizi[$j-1];
			$dizi[$j-1] = $aktar;
		}
	}

	// Ekrana Yazdırma
	for($a = 0; $a<7; $a++) {
		echo $dizi[$a]."   ";
	}