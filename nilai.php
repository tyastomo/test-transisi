<?php
	$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

	//sum of array
	$jumlah = array_sum($nilai);
	//count elements
	$banyak = count($nilai);
	//array mean
	$mean = $jumlah/$banyak;

	echo "Nilai Rata-rata : " .$mean;

	$x = 7;
	//reverse sort
	rsort($nilai);
	echo "\n7 Nilai Tertinggi : ";

	foreach ($nilai as $key => $v) {
		$x--;
		//show only top 7 of data
		if ($x >= 0){
			echo $v.", ";
		} else{
			break;
		}

	}

	$i = 0;
	//sort the array
	sort($nilai);
	echo "\n7 Nilai Terendah : ";

	foreach ($nilai as $key => $val) {
		$i++;
		//show only top 7 of data
		if ($i <= 7){
			echo $val.", ";
		} else{
			break;
		}

	}
