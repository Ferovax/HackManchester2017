<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">

</head>
<body onload="load()">
<section class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">

                <h2> You entered your name:  </h2>
                <hr class="small">
                <h3>
                <?php
                require('morsecodetranslater.php');
                $MorseCodeTranslator = new MorseCodeTranslator();
                $name = $_POST['name'];
                // convert latin string to morse
                // - .... .. ...  .. ...  .-  - . ... -
                //echo $MorseCodeTranslator->latinToMorse("$name"),"\n";

                // convert morse string to latin

                echo $morse = $MorseCodeTranslator->morseToLatin("$name");
                ?>
                    <script>
                        function load(){
                            setTimeout(timefunction, 4000);
                        }
                        function timefunction(){
                            sessionStorage.setItem('name', "<?php echo $morse;?>,");
                            ///alert(sessionStorage.getItem('name'));
                            window.location.replace("/roulettewheel.php");
                        }
                    </script>
                </h3>
            </div>
        </div>
    </div>
</section>
</body>
</html>