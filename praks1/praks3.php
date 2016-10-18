<?php
	
	$tuju ='halb';
	if ($tuju== 'hea') {
			echo 'Tuju on hea';
	}
	else {
			echo 'tuju on halb';
	}
	echo '<hr />';
		if ($tuju=='hea'){
			echo '<font color="#13894e">tuju on hea</font>';
		}
	else if ($tuju =='halb'){
		echo '<font color="red">tuju on paha</font>';
	}
	else {
		echo '<font color="blue">tuju on '.$tuju.'</font>';}
		$tuju = 'halb';
	$text = ($tuju =='hea') ? 'Tuju on hea' : 'tuju on halb';
	echo $text;
	echo '<hr />'
?>