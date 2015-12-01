<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function implementStack($string){
    
    $strResult = "";
    $arNum = explode(" ",$string);
    $arNumLen = count($arNum);
    $j = 0;
    for( $i = $arNumLen - 1 ; $i >= 0; $i--){
        
        if ($j % 2 == 0){
            $strResult .= $arNum[$i]." ";
        }
        $j++;
    }
    
    echo trim($strResult);
    
}

$fh = fopen($argv[1], "r");

while (!feof($fh)) {

    $test = trim(fgets($fh));
    implementStack($test);
    echo "\n";
}


?>
