<!DOCTYPE html>
<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/rotate.css" rel="stylesheet">
    <script src="js/giphy.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="js/morsevalidation.js"></script>
</head>
<section id="services" class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">

<body onload="validation()">
<form class="form-horizontal" role="form" method="post" action="morsecode.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" onkeydown="validation()"  class="form-control" id="name" name="name" placeholder="First & Last Name.. in morse code please" value="">
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
</div>
        </div>
    </div>
</section>
</form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
