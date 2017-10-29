var keys = {
  // Lowercase Letters
  113 : "a", // q : a
  119 : "b", // w : b
  101 : "c", // e : c
  114 : "d", // r : d
  116 : "e", // t : e
  121 : "f", // y : f
  117 : "g", // u : g
  105 : "h", // i : h
  111 : "i", // o : i
  112 : "j", // p : j
  97  : "k", // a : k
  115 : "l", // s : l
  100 : "m", // d : m
  102 : "n", // f : n
  103 : "o", // g : o
  104 : "p", // h : p
  106 : "q", // j : q
  107 : "r", // k : r
  108 : "s", // l : s
  122 : "t", // z : t
  120 : "u", // x : u
  99  : "v", // c : v
  118 : "w", // v : w
  98  : "x", // b : x
  110 : "y", // n : y
  109 : "z", // m : z
}

var textbox = document.getElementById('name');

textbox.addEventListener('keypress', checkName, false);

function checkName(evt) {
  console.log(evt);

    var charCode = String.fromCharCode(evt.charCode).toLowerCase().charCodeAt();

    console.log(charCode);

    if (charCode.toString() in keys) {
        evt.preventDefault();
        textbox.value += keys[charCode];
        var key = document.getElementById(keys[charCode]);
        key.style.backgroundColor = "white";
        key.style.color = "#007bff";

        setTimeout(function() {
          key.style.backgroundColor = "#007bff";
          key.style.color = "white";
        }, 250);
    } else {
        return true;
    }
}
