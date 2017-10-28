<?php
class MorseCodeTranslator {
    private static $library = array(
        '.-'    => 'a',
        '-...'  => 'b',
        '-.-.'  => 'c',
        '-..'   => 'd',
        '.'     => 'e',
        '..-.'  => 'f',
        '--.'   => 'g',
        '....'  => 'h',
        '..'    => 'i',
        '.---'  => 'j',
        '-.-'   => 'k',
        '.-..'  => 'l',
        '--'    => 'm',
        '-.'    => 'n',
        '---'   => 'o',
        '.--.'  => 'p',
        '--.-'  => 'q',
        '.-.'   => 'r',
        '...'   => 's',
        '-'     => 't',
        '..-'   => 'u',
        '...-'  => 'v',
        '.--'   => 'w',
        '-..-'  => 'x',
        '-.--'  => 'y',
        '--..'  => 'z',
        '.----' => '1',
        '..---' => '2',
        '...--' => '3',
        '....-' => '4',
        '.....' => '5',
        '-....' => '6',
        '--...' => '7',
        '---..' => '8',
        '----.' => '9',
        '-----' => '0',
    );
    /**
     * Constructor
     */
    public function MorseCodeTranslator() {}
    /**
     * Converts a string in Morse Code to latin characters
     *
     * @param string $morseString The morse string to convert
     * @return string $latinString The latin string
     */
    public function morseToLatin($morseString) {
        $chars = explode(' ', $morseString);
        $latinString = '';
        foreach ($chars as $char) {
            if (isset(static::$library[$char])) {
                $latinString .= static::$library[$char];
            }
        }
        return $latinString;
    }
    /**
     * Converts a string in latin characters to Morse Code
     *
     * @param string $latinString The latin string to convert
     * @return string $morseString The string encoded in morse code
     */
    public function latinToMorse($latinString) {
        $chars = str_split(strtoupper($latinString));
        $latinToMorseLib = array_flip(static::$library);
        $morseString = '';
        foreach ($chars as $char) {
            if (isset($latinToMorseLib[$char])) {
                $morseString .= $latinToMorseLib[$char];
            }
            $morseString .= ' ';
        }
        return $morseString;
    }
}