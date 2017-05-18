<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/



function multiplesofanumber($data){

    // initialise the return result as integer
    $intResult = 0;

    // separate the x and n value
    $arSepVal = explode(",", $data);
    $intX = $arSepVal[0];
    $intN = $arSepVal[1];

    $intResult = $intN;

    settype($intResult, "integer");
    settype($intX, "integer");

    while( ($intResult < $intX) || ($intResult % $intN != 0) ){

        $intResult++;
    }

    echo $intResult;
   
    


}





$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    multiplesofanumber($data);

    echo "\n";
 

}


?>
