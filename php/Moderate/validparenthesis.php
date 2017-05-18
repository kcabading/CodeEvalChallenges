<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function validparenthesis($data){

	// separate each input into an array
	$arLeft = array();
	$arRight = array();
	// get the length of the string
	$intSymbolsLen = (int) strlen($data);
	$intSymbolsLenHalf = $intSymbolsLen / 2;
	// if the length of the input is odd return false and exit
	if($intSymbolsLen % 2 != 0){		
		return 'False';
	}	
	// assign the data to array
	for($i = 0; $i < $intSymbolsLen; $i++){
		// if the opening symbols are not position in
		// the indexes of the first half of string, return false
		if( ($data[$i]=="(") || ($data[$i]=="[") || ($data[$i]=="{") ){			
			if($i > $intSymbolsLenHalf){
				return 'False';
			}
		}
		// if the closing symbols are not position in
		// the indexes of the second half of string, return false
		if( ($data[$i]==")") || ($data[$i]=="]") || ($data[$i]=="}") ){
			if($i < $intSymbolsLenHalf){
				return 'False';
			} 
		}
		// assign the symbol to the array
		if($i < $intSymbolsLenHalf){
		    $arLeft[] = $data[$i];	        
		} else {
		    $arRight[] = $data[$i];
		}
	}
	
	$arRight = array_reverse($arRight);
    
	// loop both arrays at the same time
	for($i = 0; $i < $intSymbolsLenHalf; $i++){
	    // if opening is a parenthesis
	    if($arLeft[$i] == "("){
	        if($arRight[$i]!=")"){
	            return "False";
	        }
	    }
	    // if opening is a bracket
	    if($arLeft[$i] == "["){
	        if($arRight[$i]!="]"){
	            return "False";
	        }
	    }
	    // if opening is a brace
	    if($arLeft[$i] == "{"){
	        if($arRight[$i]!="}"){
	            return "False";
	        }
	    }
	    
	}// end forloop
	
	// if validation passed
	return "True";

}// end of function


$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));      
    echo validparenthesis($data);
    echo "\n";    
    
}

?>