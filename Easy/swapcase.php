<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function swapcase($string){
    
    //initialise the return string
    $swappedString = "";
    //loop through each letter of the string
    
    for($i = 0; $i < strlen($string); $i++){
        // Check if its letter
        if(is_string($string[$i])){
            
            if(ctype_upper($string[$i])){
                
                $swappedString .= strtolower($string[$i]);
            }
            else{
                
                $swappedString .= strtoupper($string[$i]);
                
            }
            
        } else {
            
            $swappedString .= $string[$i];
        }
        
    }
    
    echo $swappedString;
    
    
}



$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
$string = trim(fgets($fh));

swapcase($string);
echo "\n";

# break loop if $test is an empty line
# $test represents the test case, do something with it
}





?>
