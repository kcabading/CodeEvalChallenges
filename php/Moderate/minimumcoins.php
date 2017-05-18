<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function minimumcoins($data){

    // initialise the return number of coins
    $intReturnCoin = 0;
    // initialise the coin that we will use
    $arCoins = array(5,3,1);

    // loop through each coins
    foreach($arCoins as $coin){

        while($data >= $coin){

            $data = $data - $coin;

            $intReturnCoin++; 
        }

    }

    echo $intReturnCoin;



}




$fh = fopen($argv[1],"r");

while(!feof($fh)){    

    $data = trim(fgets($fh));  


    minimumcoins($data);
    echo "\n";   
   
    

}




?>
