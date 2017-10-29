<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <script src="js/giphy.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body onload="load()">
<section id="services" class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">
                <img src="https://media.giphy.com/media/N57KpqDb0tlWE/giphy.gif">
                <h2> Gif complaint form </h2>
                <hr class="small">
                <form class="form-horizontal" role="form" id="myform" method="post" action="js/form-action.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Gif-SearchBox</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="searchBox" name="searchBox" placeholder="Start typing to search gifs to complain" value="">
                        </div>
                    </div>
                    <div class="row" id="imageSelection" style="height:100px; clear:both;">

                    </div>
                    <hr class="small">
                    <div class="row" id="imageSubmission"  style="height:100px; clear:both;">

                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <! Will be used to display an alert to the user>
                        </div>
                    </div>
                    <input id="urls" name="urls" type="text" hidden>
                </form>

            </div>
        </div>
    </div>
</section>
</body>
</html>
