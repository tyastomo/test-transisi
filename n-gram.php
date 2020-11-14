
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		function gram($input)
		{
			$arr_input = explode(' ', $input);

			// unigram
			$unigram = '';
			foreach ($arr_input as $item) {
				$unigram .= $item.', ';
			}
			$unigram = substr($unigram, 0, -2);

			// bigram
			$x = 0;
			$bigram = '';
			foreach ($arr_input as $item) {
				if ($x < 1) {
					$bigram .= $item.' ';
					$x++;
				} else {
					$bigram .= $item.', ';
					$x = 0;
				}
			}
			$bigram = substr($bigram, 0, -2);

			// trigram
			$y = 0;
			$trigram = '';
			foreach ($arr_input as $item) {
				if ($y < 2) {
					$trigram .= $item.' ';
					$y++;
				} else {
					$trigram .= $item.', ';
					$y = 0;
				}
			}
			$trigram = substr($trigram, 0, -2);


			echo "Unigram : ". $unigram;
			echo "\nBigram : ". $bigram;
			echo "\nTrigram : ". $trigram;
		};
		gram($_POST['masuk']);
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="masuk" value="" />
	<input type="submit">
</form>