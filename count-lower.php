<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		function hitung($str) {
			//count lowercase
			$lowercount = strlen(preg_replace('![^a-z]+!', '', $str));
			echo $lowercount;
		};
		hitung($_POST['masuk']);
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="masuk" value="" />
	<input type="submit">
</form>