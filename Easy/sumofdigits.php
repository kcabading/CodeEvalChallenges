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

    $linedata = fgets($fh);  
    $linedata = trim($linedata);
        
    $sum = 0;
    $i = 0;    
        
    while($i<strlen($linedata)){
    
        $sum += $linedata[$i];        
        $i++;
    
    }
    
    echo $sum;
    echo "\n";

}




?>
