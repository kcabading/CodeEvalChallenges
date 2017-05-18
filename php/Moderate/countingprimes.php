<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function countingPrimes($data){

    //set the return result as int
    $intReturnVal = 0;

    //set the primes container as array
    $arPrimes = array("2");

    // separate the values
    $arSepVal = explode(",", $data);
    settype($arSepVal[0], "integer");
    settype($arSepVal[1], "integer");

    $intFirstVal = $arSepVal[0];
    $intSecondVal = $arSepVal[1];


    for($i = 3; $i < $intSecondVal; $i++){

        if($i % 2==0){
            continue;
        }

        for($j = 3; $j < $i; $j++){

            if($i % $j ==0){                
                break;
            }

        }


        if($i==$j){

            $arPrimes[] = $i;
        }


    }   

    foreach($arPrimes as $prime){

        if($prime >= $intFirstVal && $prime <= $intSecondVal){
            $intReturnVal++;
        }
    }
    
    echo $intReturnVal;



}





$fh = fopen($argv[1],"r");

while(!feof($fh)){    

    $data = trim(fgets($fh));  

    countingPrimes($data);
    echo "\n";   
    
    

}
?>
