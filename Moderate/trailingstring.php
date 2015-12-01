<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function trailingstring($data){

    // explode

    $arSepValue = explode(",", $data);

    $strFirstString = $arSepValue[0];
    $strSecondString = $arSepValue[1];

    // lets separate the words in the first string
    $arFirstWords = explode(" ", $strFirstString);
    // lets get the B value
    $strFirstB = $arFirstWords[1];


    // lets separate the words in the second string
    $arSecondWords = explode(" ", $strSecondString);
    // lets get the A value
    $strSecondA = $arSecondWords[0];

    if($strFirstB == $strSecondA){

        echo 1;
    }
    else
        echo 0;
}





$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    trailingstring($data);

    echo "\n";


}
?>
