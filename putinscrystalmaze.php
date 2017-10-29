<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/crystalmaze.css" rel="stylesheet">
    <script src="js/giphy.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="js/countdownclock.js"></script>
    <script src="js/crystalmaze.js"></script>
</head>
<body onload="load()">
<section id="complaint" class="bg-primary text-white row text-center">
    <h2>You have <div id="demo"></div> to enter your email!</h2>

    <form id="myform" class="form-horizontal" role="form" method="post" action="putinscrystalmazehandling.php">

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" onclick="alertBox2()" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="button" onclick="myFunction()" value="Submit">
                <!--<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">-->
            </div>
        </div>
    </form>
</section>
</body>
</html>
