<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Działania matematyczne</title>
</head>
<body>

<div class="all">
	<a href="index.html"><div class="banner"></div></a>
	<div class="menu">
		Menu<br />
		- <a href="strona1.html">proste działania</a><br />
		- <a href="strona2.php">potęgowanie</a><br />
	</div>
	<div class="content">
		<h1>POTĘGOWANIE</h1><br />
		
			Podaj podstawę potęgi: 
			<input type="number" name="liczba1" id="li1"><br />
			Podaj dodatni, całkowity wykładnik potęgi:
			<input type="number" name="liczba2" id="li2"><br />

			<button onclick="potegowanie()">POTĘGOWANIE</button>
			
			<script type="text/javascript">
		function potegowanie() {
			var x = document.getElementById("li1").value;
			x = Number(x);
			var y = document.getElementById("li2").value;
			y = Number(y);
			var z = x;
			for (var i = 0; i < y; i++) {
				z = z*x;
			}
			document.write(z);
		}
	</script>
	</div>

</div>

</body>
</html>