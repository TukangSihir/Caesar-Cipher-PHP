<?php
	echo 'Masukkan String: ';
	$input = trim(fgets(STDIN));
	$split = str_split($input);
	$space = '!';
	echo 'Masukkan kelipatan : ';
	$jml = trim(fgets(STDIN));
	
	for($i=0; $i < count($split); $i++){
		
		$a = ord($split[$i]) + $jml;
		$b = chr($a);
		if($b == $space){
			$b = str_replace($b, ' ', $b);
		}
		echo $b;
	}
	echo "\n";
#Copyright: TukanSihir
?>
