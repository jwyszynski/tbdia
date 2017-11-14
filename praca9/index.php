<?php require_once 'script.php'; ?>

<!DOCTYPE html>
<html lang="pl_PL">
<head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="warunkowe, instrukcje" />
  <meta name="description" content="Tu są Pętle" />
  <meta name="author" content="JWyszynski" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <meta name="date" content="07.11.2017"/>
  <meta http-equiv="Last-Modified" content="07.11.2017"/>
  <link rel="stylesheet" type="text/css" href="main.css"/>
  <link rel="stylesheet" href="css/fontello.css" type="text/css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Pętle</title>

  <style media="screen">
  body {background-color: #333;}

  .all {
    margin-left: auto;
    margin-right: auto;
    width: 1200px;
  }

  header {
    width: 1000px;
    height: 180px;
    font-family: 'Tahoma';
    font-size: 80px;
    color: rgb(255, 255, 255);
    text-align: center;
    padding: 20px 0;
    margin-left: auto;
    margin-right: auto;
    background-color: orange;
  }

  .menu {
    width: 100%;
    height: 40px;
    background-color: #7ca18f;
    text-align: center;
    font-family: 'Arial';
    font-size: 20px;
    color: #FFF;
  }

  .menu a {
    display: inline-block;
    width: 200px;
    background-color:  #ace1af;
    height: 30px;
    margin-top: 5px;
    text-align: center;
  }

  .content {
    width: 1200px;

  }

  .kwadrat {
    width: 500px;
    height: 500px;
    float: left;
    background-color: rgba(0,0,0,0.2);
    margin-left: 66.6px
  }

  .kwadrat1 {
    height: 250px;
  }

  .kwadrat12 {
    width: 433.3px;
    margin-left: 33.3px;
    height: 200px;
    margin-top: 13.3px;
  }

  .kwadrat2 {
   float: left;
   width: 250px;
   height: 500px;
  }

  .kwadrat21 {
    height: 433.3px;
    margin-left: 13.3px;
    width: 200px;
    margin-top: 33.3px;
  }

  .c2 {
    background-color: #ee8888;
    float: left;
    margin-top: 33.3px;
    width: 200px;
    height: 200px;
    margin-left: 33.3px;
  }

  .c3 {
    background-color: yellow;
    width: 200px;
    height: 200px;
    margin-top: 33.3px;
    margin-left: 33.3px;

  }

  .clear {
    clear: both;
  }

  #prostokaty {
    background-color: #22b;
  }

  .socials {
    width: 100%;
    background-color: #000;
    height: 100px;
    margin-top: 550px;
    text-align: center;
  }

  .socials div {
    display: inline-block;
    color: #FFF;
    width: 200px;
    height: 80px;
    margin: 10px;

  }

  .socials div i {
    margin-top: -1000px;
  }

  .socials .c4 {

  }


  footer {
    width: 1000px;
    padding: 20px 0;
    background-color: inherit;
    font-family: 'Times New Roman';
    color: #FFF;
    font-size: 20px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }

  .s1 {background-color: #008;}
  .s2 {background-color: #e00;}
  .s3 {background-color: #55e;}
  .s4 {background-color: orange;}

  /*END*/

  </style>

</head>
<body>
<div class="all">

  <header>
    Header
  </header>

  <div class="menu">
    <a class="c1">link</a>
    <a class="c1">link</a>
    <a class="c1">link</a>
    <a class="c1">link</a>
  </div>

  <div class="content">
    <div class="kwadrat">
      <div class="kwadrat1">
        <div class="c2"><?php fun1() ?></div>
        <div class="c2"><?php fun2() ?></div>
        <span class="clear"></span>
      </div>
      <div class="kwadrat1" >
        <div class="kwadrat12"  id="prostokaty">
          <?php fun3() ?>
        </div>
      </div>
    </div>
    <div class="kwadrat">
      <div class="kwadrat2">
        <div class="c3"><?php fun4() ?></div>
        <div class="c3"><?php fun5() ?></div>
      </div>
      <div class="kwadrat2">
        <div class="kwadrat21" id="prostokaty">
          <?php fun6() ?>
          <br /><br />
          <?php fun7() ?>
        </div>
      </div>
      <span class="clear"></span>
    </div>
  </div>
  <div class="socials">
    <div class="c4 s1"><a><i class="icon-facebook"></i></a></div>
		<div class="c4 s2"><a><i class="icon-youtube"></i></a></div>
		<div class="c4 s3"><a><i class="icon-twitter"></i></a></div>
		<div class="c4 s4"><a><i class="icon-gplus"></i></a></div>

  </div>

  <footer>
    Footer
  </footer>
</div>
</body>
</html>


























<!-- end -->
