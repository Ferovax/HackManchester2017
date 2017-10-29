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
<h1>Welcome to Putin's Crystal Maze.</h1>
<h2>You have x time to complete this form</h2>
<h2>Nuclear launch in:<div id="demo"></div></h2>
<form class="form-horizontal" role="form" method="post" action="js/form-action.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" onclick="alertBox()" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" onclick="alertBox2()" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea onclick="alertBox3()" class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">8*7-56?</label>
        <div class="col-sm-10">
            <input type="number" onclick="alertBox4()" onkeydown="alertBox6()" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="urls" name="urls" type="text" hidden>
</form>
</div>
</div>
</div>
</form>
</body>
</html>
