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

    $line = fgets($fh);
    $line = trim($line);
    
    $string = explode(",", $line);        
    
    if ($pos = strrpos($string[0], $string[1])){
        echo $pos;
        echo "\n";
    }
    else{
        echo "-1";
        echo "\n";
    }

}






?>
