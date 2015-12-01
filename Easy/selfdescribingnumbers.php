<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function checkself($number){
    
    $numArr = array();

    // transform the number into array 
    for($i = 0; $i < strlen($number) ; $i++){
        
        $numArr[] = $number[$i];
    }

    $numOfTimes = array_count_values($numArr);

        foreach($numOfTimes as $key => $value){

        	if(in_array($key, $numArr)){

        		if($value != $numArr[$key]){
        			echo "0";
        			return;
        		}        		

        	} else {

        		echo "0";
        		return;
        	}


        }

        echo "1";    
        return;

}


$fh = fopen($argv[1], "r");

while(!feof($fh)){

	$number = trim(fgets($fh));

	checkself($number);

	echo "\n";


}




?>
