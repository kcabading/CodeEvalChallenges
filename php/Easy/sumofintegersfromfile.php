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

$sum = 0;

while ($data = fgets($fh)) {
    
    
    $sum = $sum + $data;
    
}

echo $sum;


?>
