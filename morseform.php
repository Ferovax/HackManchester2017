<!DOCTYPE html>
<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/rotate.css" rel="stylesheet">
    <link href="css/keyboard.css" rel="stylesheet">
    <script src="js/giphy.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="js/morsevalidation.js"></script>
</head>
<body onload="validation()">
<section id="services" class="services bg-primary text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-10 mx-auto">
        <form class="form-horizontal" role="form" method="post" action="morsecode.php">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
              <script src="js/keyboard.js"></script>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <! Will be used to display an alert to the user>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<div id="keyboard">
  <div class="row" id="top">
    <div class="key" id="a">A</div>
    <div class="key" id="b">B</div>
    <div class="key" id="c">C</div>
    <div class="key" id="d">D</div>
    <div class="key" id="e">E</div>
    <div class="key" id="f">F</div>
    <div class="key" id="g">G</div>
    <div class="key" id="h">H</div>
    <div class="key" id="i">I</div>
    <div class="key" id="j">J</div>
  </div>
  <div class="row" id="mid">
    <div class="key" id="k">K</div>
    <div class="key" id="l">L</div>
    <div class="key" id="m">M</div>
    <div class="key" id="n">N</div>
    <div class="key" id="o">O</div>
    <div class="key" id="p">P</div>
    <div class="key" id="q">Q</div>
    <div class="key" id="r">R</div>
    <div class="key" id="s">S</div>
  </div>
  <div class="row" id="bot">
    <div class="key" id="t">T</div>
    <div class="key" id="u">U</div>
    <div class="key" id="v">V</div>
    <div class="key" id="w">W</div>
    <div class="key" id="x">X</div>
    <div class="key" id="y">Y</div>
    <div class="key" id="z">Z</div>
  </div>
</div>
</body>
</html>
