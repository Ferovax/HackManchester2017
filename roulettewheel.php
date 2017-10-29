<html>
<head>
    <script src="js/sessions.js"></script>
</head>
<body>
<section id="complaint" class="bg-info text-white row text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto center-block">
                <hr class="small">
                <h2>
                    Spin the wheel to make a complaint!
                </h2>
                <hr class="small">
                <input href="#canvas" id="spin" name="submit" type="button" value="spin" class="btn btn-default">
                <hr class="small">
            </div>
        </div>
        <div class="row">
                <div class="col-lg-10 mx-auto center-block">
                <canvas id="canvas" width="500" height="500"></canvas>
                <script src="js/roullette.js" onload="spin()"></script>
                </div>
                </div>
                </div>
                </section>
                </body>
                </html>