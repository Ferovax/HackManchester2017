<!DOCTYPE html>
<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!--<link href="css/rotate.css" rel="stylesheet">
    <script src="js/giphy.js"></script>-->
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body onload="load()">
<section id="services" class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">
                <h2> Morse Code name Form</h2>
                <hr class="small">
                <form class="form-horizontal" role="form" id="myform" method="post" action="rotary-handling.php">

                    <div class="form-group">
                        <label for="name" class="control-label">Phone Number</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="" hidden="hidden" required>
                            <canvas id="retrophone"></canvas>
                            <script src="js/rotaryphone.js"></script>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-10">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
