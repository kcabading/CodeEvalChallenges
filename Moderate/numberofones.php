<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function numberofones($data){
    // initialise the return result as integer
    $intResult = 0;
    // transform the input into binary
    $strBinary = decbin($data);
    // get the length of the binary
    $intBinaryLength = strlen($strBinary);
    // assign each digit in the binary into array
    $arBinary = array();
    for($i = 0; $i<$intBinaryLength; $i++){
        $arBinary[] = $strBinary[$i];
    }
    $arCounts = array_count_values($arBinary);
    $intResult = (int) $arCounts[1];
    echo $intResult;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {

    $data = trim(fgets($fh));
    numberofones($data);
    echo "\n";
# break loop if $test is an empty line
# $test represents the test case, do something with it
}



?>
