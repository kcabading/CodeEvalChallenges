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
    $data = trim($data);    
    $data = explode(" ", $data);    
    sort($data);    
    $result = '';    
    foreach($data as $number){    
        $result .= $number." ";            
    }
    
    $result = trim($result);
    echo $result;    

    echo "\n";


}



?>
