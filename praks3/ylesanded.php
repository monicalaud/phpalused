<?php
//ylessanded.php
//genereerime vanuse v��rtuse
$age = rand (0, 120); //v��rtused vahemikus 0-120
echo 'oled ' .$age.' aastat vana <br/>';
if ($age >0 and $age <=10) {
	echo'oled nooruk<br/>';
	
}
else if ($age > 18 and $age <= 120){
	echo 'oled seenior<br/>';
}

$age = 10;
switch ($age){
	case 5;
		echo 'laps';
		break;
	case 10;
		echo 'nooruk';
		break;
	case 25;
		echo 'oled t�iskasvanud';
		break;
		
}

echo 'for tsykkel';
	for ($arv =1; $arv <=49; $arv++)
	{
		if ($arv % 2 ==1)
		echo $arv .'<br/>';
	}
	echo '<hr />'; 
echo 'while ts�kkel<br />'; 
$arv = 1; 
while($arv <=49){ 
    if($arv % 2 == 1){ 
        echo $arv.'<br />'; 
    } 
    $arv++; 
} 

?>
