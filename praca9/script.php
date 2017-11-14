<?php

function fun1()
{
  echo 'Zad1 <br />';
  for ($i=0; $i < 6; $i++) {
    print(rand(1, 49).' ');
  }
}

function fun2()
{
  echo 'Zad2 <br />';
  for ($i=0; $i < 10; $i++) {
    print(rand(1, 80).' ');
  }
}

function fun3()
{
  echo 'Zad3 <br />';
  $x=1;
  while (rand(1, 100) != 21) {
    $x++;
  }
  print('<b>21</b> wylosowano za '.$x.' razem');

}

function fun4()
{
  echo 'Zad4 <br />';
  $x=1;
  while (rand(1, 200) != 120) {
    $x++;
  }
  print('<b>21</b> wylosowano za '.$x.' razem');

}

function fun5()
{
  echo 'Zad5 <br />';
  $suma=0;
  do {
    $x=rand(1,20);
    $suma+=$x;
    print($x.' + ');
  } while ($suma < 100);
  print('0 = '.$suma);
}

function fun6()
{
  echo 'Zad6 <br />';
  $suma=0;
  do {
    $x=rand(6, 89);
    $suma+=$x;
    print($x.' + ');
  } while ($suma < 255);
  print('0 = '.$suma);
}

function fun7()
{
  echo 'Zad7 <br /> a) <br />';
  for ($i=0; $i < 10; $i++) {
    print('*');
  }

  echo '<br />b) <br />';
  for ($a=1; $a < 7; $a++) {
    for ($i=0; $i < $a; $i++) {
    print('*');
    }
    echo "<br />";
  }
}



?>
