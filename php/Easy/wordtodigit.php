<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


//WORD TO DIGIT

function transform($number){
    
    switch($number){    
        
        case 'one':
            return 1;
        case 'two':
            return 2;
        case 'three':
            return 3;
        case 'four':
            return 4;
        case 'five':
            return 5;
        case 'six':
            return 6;
        case 'seven':
            return 7;
        case 'eight':
            return 8;
        case 'nine':
            return 9;
        case 'zero':
            return 0;
    
    } 

}



$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $numbers = fgets($fh);
    $numbers = trim($numbers);
    
    $numbers_array = explode(';', $numbers);       
    
    if(count($numbers_array)>20){
    
        echo "Only 20 numbers are allowed per line";        
        
    }   
    else
    {
        foreach($numbers_array as $number){
            
            $number = strtolower($number);
        
            $digit = transform($number);
            
            echo $digit;
        
        } 
    }    
        
    
    echo "\n";


}



?>
