function validation() {
    var textbox = document.getElementById('name');
    textbox.addEventListener('keypress', checkName, false);
    //Non-numeric character range

}
function checkName(evt) {
    var charCode = evt.charCode;

    if (charCode == 45 || charCode == 46 || charCode == 32) {
        return true;
    }
    else {
        evt.preventDefault();
        return false;
    }
}