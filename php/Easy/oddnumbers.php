<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

for($i=1;$i<100;$i++){
    if(($i % 2)!= 0){
        echo $i . "\n";           
    }
}


?>
