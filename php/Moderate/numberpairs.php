<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function numberPairs($data){

    // initialise the return string 
     $strReturnResult = "";
    // separate the integers to the number X
    $arSepValue = explode(";", $data);
    $strSeries = $arSepValue[0];

    settype($arSepValue[1], "integer");    
    $intX = $arSepValue[1];   

    //lets separate the values in the series into array
    $arNumbers = explode(",", $strSeries);    

    for($i = 0; $i < count($arNumbers); $i++){

        for($j = 0; $j < count($arNumbers); $j++){

            if($arNumbers[$i] + $arNumbers[$j] == $intX){

                if($i < $j){

                    $arReturnPair[] = implode(",", array($arNumbers[$i],$arNumbers[$j] ));

                }

                

            }

        }

    }

    // if there are pairs
    if($arReturnPair){

        foreach($arReturnPair as $pair){

            $strReturnResult .= $pair.";"; 
        }

        echo trim($strReturnResult,";");   


    } else {

        echo "NULL";

    }

    


}



$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    numberPairs($data);

    echo "\n";

    

}
?>
