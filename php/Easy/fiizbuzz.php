<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function fizzbuzz($data){

    // initialise the return value as a string
    $strReturnValue = "";

    // separate each values and the length of the value
    $arSeparateValues = explode(" ", $data);
    // initialise
    $intFizz = $arSeparateValues[0];
    $intBuzz = $arSeparateValues[1];
    $intLength = $arSeparateValues[2];
    // loop through all strings
    for($i = 1; $i <= $intLength; $i++){

        if( ($i % $intFizz == 0) && ($i % $intBuzz == 0) ) {

            $strReturnValue .= "FB ";

        }elseif($i % $intFizz == 0){

            $strReturnValue .= "F ";

        } elseif($i % $intBuzz == 0){

            $strReturnValue .= "B ";

        } else {

            $strReturnValue .= "$i ";

        }

    }

    echo trim($strReturnValue);

    

}





$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    fizzbuzz($data);
    echo "\n";
}
?>
