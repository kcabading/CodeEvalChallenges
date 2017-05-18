<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


$fh = fopen($argv[1], "r" );

while(!feof($fh)){
    
    
    $line = trim(fgets($fh));
    
    if(filter_var($line, FILTER_VALIDATE_EMAIL)){
        
        echo 'true';
    }
    else{
        
        echo 'false';
        
    }
    
    echo "\n";
    
    
}



?>
