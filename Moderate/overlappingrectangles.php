<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function doOverlap($data){
    // separate the values
    $arValues = explode(",", $data);
    // values for x 
    $intAX1 = (int) $arValues[0];
    $intAY1 = (int) $arValues[1];
    $intAX2 = (int) $arValues[2];
    $intAY2 = (int) $arValues[3];
    // values for y
    $intBX1 = (int) $arValues[4];
    $intBY1 = (int) $arValues[5];
    $intBX2 = (int) $arValues[6];
    $intBY2 = (int) $arValues[7];
    
    
    if ( ($inAX1 < $intBX2) && ($intAX2 > $intBX1) &&  ($intAY1 < $intBY2) && ($intAY2 > $intY1) ){
        
        echo "True";
        
    } else {
        
        echo "False";
    }
    
    
}




$fh = fopen($argv[1], "r");

while (!feof($fh)) {
    $data = trim(fgets($fh));
    doOverlap($data);
    echo "\n";


# break loop if $test is an empty line
# $test represents the test case, do something with it
}


?>
