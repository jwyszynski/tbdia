<!DOCTYPE html>
<html lang="pl_PL">
<head>
  <meta charset="utf-8" />
  <meta name="Keywords" content="warunkowe, instrukcje" />
  <meta name="description" content="Tu są warunkowe instrukcje" />
  <meta name="author" content="JWyszynski" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <meta name="date" content="07.11.2017"/>
  <meta http-equiv="Last-Modified" content="07.11.2017"/>
  <link rel="stylesheet" type="text/css" href="main.css"/>

  <title>Instrukcje warunkowe</title>
</head>
<body>
  <div class="allbox">

    <header>
      Head
    </header>
    <div class="menu">
      <div class="c1">
        c1
      </div>
      <div class="c2">
        c2
      </div>
      <div>
        c3
      </div>
      <span class="clear"></span>
    </div>

    <div class="srodek">

    <div class="sidebar">
      <div class="c1">
        c1
      </div>
      <div class="c2">
        c2
      </div>
      <div>
        c3
      </div>

    </div>

    <div class="content">
      <p>Lorem ipsum dolor sit amet wisi. Suspendisse adipiscing. Nunc justo. Integer mi odio, in nunc. Nunc velit eros.</p>

      <p>Fusce ullamcorper quam. Ut eget augue. Aenean mollis consectetuer. Aliquam at urna elit, interdum ligula eleifend viverra. Ut.</p>

      <p>Ut id erat at nibh massa lacinia turpis non dui. Mauris interdum viverra. Cras non diam. Pellentesque eget.</p>
<br />
      zad1



<?php
$a=3;
$b=5;
$c=5;
if($a==$b&&$b==$c) {
    print ("Trójkąt o bokach".$a.",".$b.",".$c."jest równoboczny");
}
elseif ($a==$b||$b==$c||$a==$c) {
    print ("Trójkąt o bokach".$a.",".$b.",".$c."jest równoramienny");
}
else {
    print ("Trójkąt o bokach".$a.",".$b.",".$c."jest różnoboczny");
}
?>

zad2
<?php
$a=5;
$b=5;
$c=5;
$d=5;
$e=5;
$f=5;
if($a==$b&&$b==$c&&$c==$d&&$d==$e&&$e==$f) {
    print ("Wielokont o bokach".$a.",".$b.",".$c.",".$d.",".$e.",".$f."jest foremny");
}

?>
<br />




zad5

<?php
$a=30;
if($a % 2 == 0 && $a % 3 == 0 && $a % 5 == 0){
print("liczba".$a."jest podzielna przez 2, 3, 5");
}
else {
    print("liczba".$a." nie jest podzielna przez 2,3,5");
}



?>

<br />
zad4
<?php
$kolor="czerwony";
switch($kolor){
    case"czerwony":
        print("Kolor <font color=\"red\">czerwony</font>");
        break;
    case "zielony":
        print("Kolor <font color=\"green\">zielony</font>");
        break;
    default:
        print("Podano błędny kolor!");
}
?>
<br />
    </div>

    <div class="ad">
      ad
    </div>

      <span class="clear"></span>

    </div>

    <footer>
      footer
    </footer>

  </div>
</body>
</html>
