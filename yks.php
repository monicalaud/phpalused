<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="kalkulaator.css" type="text/css"
	media="all" />
<title>Vastus</title>
</head>
<body>
<?php
$vastus = 0;
$esimene = $_POST ['esimene'];
$teine = $_POST ['teine'];
if ($_POST ['group1'] == 'add') {
	$vastus = $esimene + $teine;
} else if ($_POST ['group1'] == 'subtract') {
	$vastus = $esimene - $teine;
} else if ($_POST ['group1'] == 'times') {
	$vastus = $esimene * $teine;
} else if ($teine == 0) {
	$vastus = 'nulliga ei saa jagada. Vali uus number';
} else if ($_POST ['group1'] == 'divide') {
	$vastus = $esimene / $teine;
}
?>

	<main>
<h1>
<?php

	if ($vastus == 0) {
		echo "Vastus on nii väike, et sa ei näe!";
	} else {
		echo "Vastus on: " . $vastus;
	}

?>
</h1>
	</main>

</body>
</html>