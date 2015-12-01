<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function swapElements($data){
    // initialise the return value as a string
    $returnString = "";
    // separate the series from the swap vars
    $explodedData = explode(":", $data);
    // assign the string series to a variable
    $series = $explodedData[0];
    // convert the series as array
    $arrSeries = explode(" ", $series);    
    // assign the swap positions to a variable
    $swapnumbers = $explodedData[1];

    // separate each positions as array

    $eachPosition = explode(",", $swapnumbers);

    foreach($eachPosition as $each){


        $arrSwapNumber = explode("-",$each);
    
            for($i = 0; $i < count($arrSeries); $i++){
                
                if( $i == $arrSwapNumber[0] ){
                    
                    $secondvalue = $arrSeries[$arrSwapNumber[1]];                       
                    $arrSeries[$arrSwapNumber[1]] = $arrSeries[$i];
                    $arrSeries[$i] = $secondvalue;
                    
                } 
                
            }

    }         


    
    for($x = 0 ; $x < count($arrSeries); $x++){
        
        $returnString .= $arrSeries[$x]." ";
    }
    
    trim($returnString);
    echo $returnString;
    
}



$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    swapElements($data);
    echo "\n";

}



?>
