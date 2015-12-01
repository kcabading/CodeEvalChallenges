<?php

//open the file handle
$fh = fopen($argv[1], "r");

//loop while not end of line
while (!feof($fh)) {
    
    $line = ucwords(fgets($fh));
    echo $line;
    echo "\n";

# break loop if $test is an empty line
# $test represents the test case, do something with it
}

?>
