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

    $number = "";
    $numbers = fgets($fh);
    $numbers = trim($numbers);
    $num = explode(",", $numbers);    
    
    $num = array_unique($num);
    sort($num);    
        
    foreach($num as $num){
    
        $number .= "$num,";
    
    }
    
    echo rtrim($number, ",");
    echo "\n";
}

?>
