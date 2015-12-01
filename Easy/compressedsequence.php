<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function compressed_sequence($sequence){
    //initialise the return result as string
    $strCurrentNum = "";
    // initialise the number of times a number appear as integer
    $intTimes = 0;
    // separate each number to array
    $number_array = explode(' ', $sequence);    
    // loop through each array
    for($i = 0; $i < count($number_array); $i++ ){
        // if this is the first number
        if($i == 0){
            // lets assign it as the current number to check later
            $strCurrentNum = $number_array[$i];       
            // add times + 1
            $intTimes += 1;
            // lets skip the iteration
            continue;       
        }

        // if the current number is still equal to the last current number
        if($strCurrentNum == $number_array[$i]){            
            // add times + 1
            $intTimes += 1;            
        } else {
            // else concatenate the times the number appear and the number itself
            $strResult .= $intTimes ." ".$strCurrentNum." ";            
            // change the current number to the new number
            $strCurrentNum = $number_array[$i];           
            // lets reset the appearance to 1                      
            $intTimes = 1;
        }

    }
    // then concatenate again the last number
    $strResult .= $intTimes ." ".$strCurrentNum." ";
    // finally output the result
    echo trim($strResult);

    
}

$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $sequence = trim(fgets($fh));
    compressed_sequence($sequence);
    echo "\n";

}


?>
