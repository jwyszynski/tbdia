<?php
		
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<title>Zadania z 2 listopada</title>
</head>
<body>

<div class="all">

	<header>
		Header
	</header>

	<div class="obraz">
		
	</div>

	<div class="klasy3">
		<div>JESTEM CZARNY</div>
		<div>UKRADNĘ CI ROWER</div>
		<div>Dziecko 3</div>
		<span class="clear"></span>
	</div>
	<div class="klasy2">
		<div id="jeden">

<form action="index.php" method="get">
    Wpisz Kwotę: <input type="text" name="wartosc"><br />
    Wybierz sposób przeliczania waluty: <br />
    <select name="typ">
        <option value="ez">Euro na Złotówki</option>
        <option value="ze">Złotówki na Euro</option>
    </select><br />
    <input type="submit" value="Przelicz" />
</form>

<br />
<?php

	$a=$_GET['wartosc'];  //Popież wartość
	$typ=$_GET['typ'];    //Pobież typ przeliczenia
	$b=4.237;             //Stały kurs waluty

if ($a!=0) {
if($typ==ez) {
	$wynik = $a*$b;
	$wynik = number_format ( $wynik, 2 );
	echo "Euro na Złotówki: ".$a." EUR -> ".$wynik." PLN<br />";
} else {
	$wynik = $a/$b;
	$wynik = number_format ( $wynik, 2 );
	echo "Złotówki na Euro: ".$a." PLN -> ".$wynik." EUR<br />";
}}

?>
		</div>
		<div id="dwa">ID 2<br />

<?php

$x=2;
$y=3;
$z=4;
$x++;
$z+=$y;
--$z;
$x*=$z;
print($x." ".$y." ".$z);

?>

		</div>
		<span class="clear"></span>
	</div>
	<div class="klasy4">
		<div><i class="icon-facebook"></i></div>
		<div><i class="icon-youtube"></i></div>
		<div><i class="icon-twitter"></i></div>
		<div><i class="icon-gplus"></i></div>
		<span class="clear"></span>
	</div>

	<div>
		<br />
		<b>Traps are natural choice
for men. Jacking to traps are normal. Anyone should do this.MAKE TRAPS GREATE AGAIN. If you are interested in traps you are real man.</b>

	</div>

</div>

</body>
</html>