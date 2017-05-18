<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

$fh = fopen($argv[1], "r");

while(!feof($fh)){
    
    $data = fgets($fh);   
    
    if(($data % 2)==0){
        
        echo 1;
        echo "\n";        
    }
    
    else
    
        echo 0;
        echo "\n";
        
    
}






?>
