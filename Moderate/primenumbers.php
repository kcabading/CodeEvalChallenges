<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function returnPrimes($data){

    $strReturnVal = "";

    $arPrimes[] = "2";


    for($i = 3; $i < $data; $i++){


        if($i % 2 == 0){
            continue;
        } 



        for($j = 3; $j < $i; $j++){

            if($i % $j == 0){                
                break;
            }

        }

        if ($i == $j){
            
            $arPrimes[] = $i;               

        }   
        
        


    }

    
    foreach($arPrimes as $prime){

        $strReturnVal .= $prime.",";
    }

    echo trim($strReturnVal,",");




}





$fh = fopen($argv[1], "r");

while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    returnPrimes($data);

    echo "\n";


}




?>
