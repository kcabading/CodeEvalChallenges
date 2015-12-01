<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function jollyjumpers($data){

	// separate numbers to an array
	$arNumbers = explode(" ", $data);
	$intNumberTimes = count($arNumbers);
	$intDiff = array();

	for($i = 0; $i< $intNumberTimes - 1; $i++){		

		$intDiff[] = abs($arNumbers[$i] - $arNumbers[$i+1]);	
		if($i==0){
			continue;
		} else {
			if(($intDiff[$i -1 ] != $intDiff[$i] + 1)){
				return "Not jolly";

			}

		}

		

	}

	if(count($intDiff) == $intNumberTimes){
		return "Not jolly";
	}

	return "Jolly";



}



$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));    
    echo jollyjumpers($data);
    echo "\n";

}

?>
