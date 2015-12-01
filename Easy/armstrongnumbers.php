<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function armstrongnumbers($data){
	//inialise the final result as integer
	$intResult = 0;	
	//lets check the length of the number
	$intDigitLength = strlen($data);
	//iterates through each digits
	for($i = 0; $i < $intDigitLength; $i++ ){
		// get the power of the digit
		 $intResult += pow($data[$i], $intDigitLength);
	}
	// if the result is equal to the data
	if($intResult == $data){
		echo "True";
	} else {
		echo "False";
	}
}
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));
    armstrongnumbers($data);
    echo "\n";    
}

?>
