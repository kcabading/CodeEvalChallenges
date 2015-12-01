<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function morsecode($data){
    // inialise the morse code mapping as array
    $morse = array(
        'A' => '.-',
        'B' => '-...',
        'C' => '-.-.',
        'D' => '-..',
        'E' => '.',
        'F' => '..-.',
        'G' => '--.',
        'H' => '....',
        'I' => '..',
        'J' => '.---',
        'K' => '-.-',
        'L' => '.-..',
        'M' => '--',
        'N' => '-.',
        'O' => '---',
        'P' => '.--.',
        'Q' => '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-',
        'V' => '...-',
        'W' => '.--',
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
    );
    //inialise the result as string
    $strResult = "";
    //inialise the morse codes as array
    //one for each words
    $arMorseCodeWords = array();
    //and one for each letters
    $arMorseCodeLetter = array();
    //explode the morse code by words to an array
    $arMorseCodeWords = explode("  ", $data);
    //lets iterate through each morse code words
    foreach($arMorseCodeWords as $strWord){
        //explode each morse code word to array
        //to extract each letter
        $arMorseCodeLetters = explode(" ", $strWord);
        //lets iterate through each letter
        foreach($arMorseCodeLetters as $strLetter){
            //search the string to the morse array
            //concatenate if found
            $strResult .= array_search($strLetter, $morse);                      
        }      
        //add space for each word
        $strResult .= " ";
    }
    //echo the final result with whitespace trimmed
    echo trim($strResult);

}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));    
    morsecode($data);
    echo "\n";
}



?>
