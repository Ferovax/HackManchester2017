<?php
require('morsecodetranslater.php');
$MorseCodeTranslator = new MorseCodeTranslator();
$name = $_POST['name'];
// convert latin string to morse
// - .... .. ...  .. ...  .-  - . ... -
echo $MorseCodeTranslator->latinToMorse($name),"\n";

// convert morse string to latin

echo $MorseCodeTranslator->morseToLatin("- .... .. ...  .. ...  .-  - . ... -"),"\n";
?>