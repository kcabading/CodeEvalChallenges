<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function jugglingzero($data){
    // inialise the variables
    $strBinary = "";
    $arZeros = array();
    $arSeries = array();

    //explode the zeros;
    $arZeros = explode(" ", $data);
    //separate the zero flags to the series
    for($i = 0; $i < count($arZeros); $i++){        
        if($i % 2 == 0){
            $arFlags[] = $arZeros[$i];
        } else {
            $arSeries[] = $arZeros[$i];
        }
    }
    // lets iterate through each flags
    for($i = 0; $i < count($arFlags); $i++){
        // if flag is equal to string zero        
        if($arFlags[$i] === "0"){
            // concatenate the series
            $strBinary .= $arSeries[$i];                         
        } else {
            // replace the zero to one in the series
            // before concatenation
            $strBinary .= str_replace("0","1",$arSeries[$i]);
        }
    }
    // then convert the binary to integer
    echo bindec($strBinary);
}

$fh = fopen($argv[1], "r");

while (!feof($fh)) {
    $data = trim(fgets($fh));    
    jugglingzero($data);
    echo "\n";
    
    
}



?>
