<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		function enkrip($input){
			$huruf = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

			$input = strtoupper($input);
			$arr_input = str_split($input);

			$plus = true;
			$hasil = '';
			$x = 1;
			$tmp = 0;
			for ($i=0; $i < count($arr_input); $i++) {
				$tmp = array_search($arr_input[$i], $huruf);
				if ($plus == true) {
					$hasil .= $huruf[$tmp+$x];
					$plus = false;
				} else {
					$ne = $tmp-$x;
					if ($ne < 0) {
						$ne = count($huruf) + ($ne);
					}
					$hasil .= $huruf[$ne];
					$plus = true;
				}
				$x++;
			}

		echo "Hasil Enkripsi dari ". $input. " adalah ". $hasil;
		}
		enkrip($_POST['masuk']);
	}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="masuk" value="" />
	<input type="submit">
</form>