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
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    $array = explode(" ",$data);  

    $count = count($array);
    if($count>1){
        echo $array[$count-2];    
    } else {
        echo $array[0];    
    }
    echo "\n";    
    
}


?>
