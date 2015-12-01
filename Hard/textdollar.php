<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
$arDollarMapping = array(
					"One" => 1,
					"Two" => 2,
					"Three" => 3,
					"Four" => 4,
					"Five" => 5,
					"Six" => 6,
					"Seven" => 7,
					"Eight" => 8,
					"Nine" => 9,
					"Ten" => 10,
					"Eleven" => 11,
					"Twelve" => 12,
					"Thirteen" => 13,
					"Fourteen" => 14,
					"Fifteen" => 15,
					"Sixteen" => 16,
					"Seventeen" => 17,
					"Eighteen" => 18,
					"Nineteen" => 19,
					"Twenty" => 20,
					"Thirty" => 30,
					"Fourty" => 40,
					"Fifty" => 50,
					"Sixty" => 60,
					"Seventy" => 70,
					"Eighty" => 80,
					"Ninety" => 90,
					"Hundred" => 100,
					"Thousand" => 1000,
					"Hundred  " => 100000,
					"Million" => 1000000,
					"Hundred " => 100000000,
					"Billion" => 1000000000,
					);
// reverse the array
$arDollarMapping1 = array_reverse($arDollarMapping);


function textdollar($data){
	// set return result as string
	$arDollarText = array();
	//get access to global
	global $arDollarMapping1;		
	// assign the input to local variable
	$intDollar = $data;
	// loop through each mapping
	foreach($arDollarMapping1 as $text => $value){
			// loop again the mapping so we can multiply
			foreach($arDollarMapping1 as $y => $x){			
						// check if the current value in the first loop multiply be the value
						// in the second loop is less than the input value
						if( (($value * $x) <= $intDollar)){
							// loop for base one
							for($j = 9; $j >= 1; $j--){							
								// add values
								if( ( ($value * $x) + ($value * $j) ) <= $intDollar){
									// decrease the int dollar with the value we get
									$intDollar -= ($value * $x) + ($value * $j);																
									// assign the text to the array
									$arDollarText[] = $y.trim(array_search($j, $arDollarMapping1)).$text;		
									break;																						
								} 
							}// end for loop		

							if($intDollar >= ($value * $x)){
								 if( ($value * $x) < 100 ){
								 			$intDollar -= $value * $x;														
								 			$arDollarText[] = trim($text);		
								 }	else {
											$intDollar -= $value * $x;														
								  		$arDollarText[] = $y.trim($text); 						

								 }

							}				
							
						}// if not iterates the second loop
					
			}// second loop		
			

	}// first loop


    if(count($arDollarText)){
		$strDollarNoun = ($arDollarText[0] == "One")? "Dollar": "Dollars";
		array_push($arDollarText, $strDollarNoun);
		foreach($arDollarText as $dollar){
			echo $dollar;
		}

    }

}





$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));    
    textdollar($data);
    echo "\n";    
    
}



?>
