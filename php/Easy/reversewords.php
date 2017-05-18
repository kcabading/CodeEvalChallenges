<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function reversewords($data){
    $strResult = "";
    // explode to separate each words into an array
    $arWords = explode(" ", $data);
    // lets reverse sort the keys of the words
    krsort($arWords);
    // then lets just loop through each word
    foreach($arWords as $word){
        $strResult .= $word." ";
    }
    // Finally output the result
    echo trim($strResult);
}
$fh = fopen($argv[1], "r");
while (!feof($fh)){
    $data = trim(fgets($fh));
    reversewords($data);
    echo "\n";
}



?>