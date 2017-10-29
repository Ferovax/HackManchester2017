<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <script src="jquery-3.2.1.min.js"></script>

    <link href="css/snake.css" rel="stylesheet">

    <script>
        function load(){
            setTimeout(timefunction, 6000);
        }
        function timefunction(){
            //window.location.replace("/");
        }
    </script>
</head>
<body onload="load()">
<section class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">

                <h2> Information you entered:  </h2>
                <hr class="small">
                <div id="elements">
                <script>
                    var myname = sessionStorage.getItem('name');
                    var myemail = sessionStorage.getItem('email');
                    var mynumber = sessionStorage.getItem('number');
                    var mygif = sessionStorage.getItem('gif');
                    console.log(myname + " " + mynumber + " " + mygif + " " + myemail);

                    //"Gif-Complaint", "Morse Code", "Text To Speech", "Emoji-Mayhem"
                    $("<h3>").text(myname).appendTo("#elements");
                    $("<h3>").text(myemail).appendTo("#elements");
                    $("<h3>").text(mynumber).appendTo("#elements");
                    //$("<h3>").text(mygif).appendTo("#elements");
                    if(mygif != null) {
                        var opts = mygif.split(",");
                        for (v in opts) {
                            console.log(opts[v]);
                            $("<img>").attr("src", opts[v]).appendTo("#elements");
                        }
                    }

                    sessionStorage.clear();
                </script>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/snake.js"></script>
<h3>Get a score of 5 to submit your form. Just checking you're human!</h3>
<canvas id="stage" height="400" width="520"></canvas>
</body>
</html>