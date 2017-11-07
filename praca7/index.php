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

<form action="index.php" method="get">

    Wpisz Kwotę i wybierz jej walutę: <input type="text" name="wartosc">
    <select name="waluta1">
        <option value="pln">PLN</option>
        <option value="eur">EUR</option>
        <option value="usd">USD</option>
        <option value="gbp">GBP</option>
        <option value="jpy">JPY</option>
    </select><br />

     Wybierz walutę na którą chcesz przeliczyć
    <select name="waluta2">
        <option value="pln">PLN</option>
        <option value="eur">EUR</option>
        <option value="usd">USD</option>
        <option value="gpb">GBP</option>
        <option value="jpy">JPY</option>
    </select><br />

    <input type="submit" value="Przelicz" />
</form>

<br />
<?php

	$wartosc=$_GET['wartosc'];
	$wal_1=$_GET['waluta1'];
	$wal_2=$_GET['waluta2'];
	$b=4.237;

switch ($wal_1) {
	case 'pln':
		$wartoscp = $wartosc*1;
		break;
	case 'eur':
		$wartoscp = $wartosc*4.2449;
		break;
	case 'usd':
		$wartoscp = $wartosc*3.6585;
		break;
	case 'gbp':
		$wartoscp = $wartosc*4.7938;
		break;
	case 'jpy':
		$wartoscp = $wartosc*0.032051;
		break;
	
	default:
		# code...
		break;
}


switch ($wal_2) {
	case 'pln':
		$wynik = $wartoscp*1;
		break;
	case 'eur':
		$wynik = $wartoscp/4.2449;
		break;
	case 'usd':
		$wynik = $wartoscp/3.6585;
		break;
	case 'gbp':
		$wynik = $wartoscp/4.7938;
		break;
	case 'jpy':
		$wynik = $wartoscp/320.51;
		break;
	
	default:
		# code...
		break;
}
// echo $wartosc."<br />";
// echo $wartoscp."<br />";
// echo $wal_1."<br />";
// echo $wal_2."<br />";
echo $wartosc." ".$wal1." -> ".$wynik." ".$wal2."<br />";


// if ($a!=0) {
// if($typ==ez) {
// 	$wynik = $a*$b;
// 	$wynik = number_format ( $wynik, 2 );
//	echo "Euro na Złotówki: ".$a." EUR -> ".$wynik." PLN<br />";
//} else {
// 	$wynik = $a/$b;
// 	$wynik = number_format ( $wynik, 2 );
// 	echo "Złotówki na Euro: ".$a." PLN -> ".$wynik." EUR<br />";
// }}

?>


</div>

</body>
</html>