<?php
	$arr = [
		['f', 'g', 'h', 'i'],
		['j', 'k', 'p', 'q'],
		['r', 's', 't', 'u']
	];

	$str = 'fghi';
	$split = str_split($str);
	$count = count($split);
	echo $count;


	for($i=0;$i<4;$i++){
		foreach ($arr as $key => $val) {
			if ($val == $split[$i]) {
				return $key;
			}
		}
	}
?>