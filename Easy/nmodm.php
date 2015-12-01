<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function nmodm($data){

    $intAddedResult = 0;

    //separate the values
    $arValues = explode(",", $data);    
    $intFirstVal = $arValues[0];
    $intSecondVal = $arValues[1];
    
    if($intFirstVal < $intSecondVal){
        echo $intFirstVal;
        return;
    }

    while($intAddedResult < $intFirstVal){

        $intAddedResult += $intSecondVal;
    }

    echo $intFirstVal - ($intAddedResult - $intSecondVal);    
        


}



$fh = fopen($argv[1],"r");

while(!feof($fh)){    

    $data = trim(fgets($fh));  


    nmodm($data);
    echo "\n";   
}


?>