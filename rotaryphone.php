<!DOCTYPE html>
<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/rotate.css" rel="stylesheet">
</head>
<body>
<form class="form-horizontal" role="form" method="post" action="morsecode.php">
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="" hidden="hidden">
        <canvas id="retrophone"></canvas>
        <script src="js/rotaryphone.js"></script>
    </div>
</div>
</form>
</body>
</html>
