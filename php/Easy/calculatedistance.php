<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function calculatedistance($data){

/*
	sample input data format
	(25, 4) (1, -6)
	(x1, y1) (x2, y2)
	distance formula
	d = sqrt( pow( (x2 - x1), 2) - pow((y2 - y1), 2) )
*/

	//initialise the result as int
	$intResult = 0;
	// get all the numbers including negative sign
	preg_match_all("|[0-9-]{1,4}|", $data, $matches);
	// process the formula
	$intXdiff = ( $matches[0][2] - $matches[0][0]);
	$intYdiff = ( $matches[0][3] - $matches[0][1]);	
	$intXpow = pow($intXdiff, 2);
	$intYpow = pow($intYdiff, 2);
	$z = $intXpow + $intYpow;
	echo sqrt($z);
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));
    
    calculatedistance($data);
    echo "\n";

}



?>
