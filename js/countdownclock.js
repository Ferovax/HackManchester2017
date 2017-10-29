<!-- Display the countdown timer in an element -->



// Set the date we're counting down to
var countDownDate = new Date("Oct 29, 2017 14:00:00").getTime();
var counter = 10;
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = "0d 0h 0m " + counter + "s";//days + "d " + hours + "h "
    counter--;
       // + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (counter < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        document.getElementById("myform").submit();
    }
}, 1000);

function myFunction(){
    document.getElementById("myform").submit();
}