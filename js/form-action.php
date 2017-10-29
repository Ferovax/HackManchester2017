<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <script>
        function load(){
            //setTimeout(timefunction, 2000);
        }
        function timefunction(){
            sessionStorage.setItem('gif', "<?php echo $_POST['urls'];?>,");
            //alert(sessionStorage.getItem('gif'));
            window.location.replace("/roulettewheel.php");
        }
    </script>
</head>
<body onload="load()">
<?php
$servername = "helios.csesalford.com";
$username = "stc905";
$password = "turtlebrainholocaust";
$dbname = "stc905";
$urls = $_POST['urls'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO urls (ID, urlString) VALUES (NULL , '$urls')";
?>
<section class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">

                <h2> <?php
                    $result = $conn->query($sql);
                    if ($result === TRUE) {
                        echo "We have reviewed your complaint, are you sure it wasn't your fault?";
                        echo "<hr class=\"small\">";
                        echo "<a href='javascript:timefunction()' class='btn btn-primary'> No </a>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    ?>
                </h2>
                <hr class="small">

                <div class="row" id="imageSelection" style="height:100px; clear:both;">
                    <?php
                    $urlarr = explode(",",$urls);
                    foreach($urlarr as $item){
                        echo "<div class=\"col-md-2\">
    <div class=\"thumbnail\">";
                        echo "<img src='$item'>";
                        echo "</div></div>";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
