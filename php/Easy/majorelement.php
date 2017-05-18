<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function checkmajorelement($sequence){
    $number = explode(',', $sequence);
    $seq_length = count($number);    
    $occurence = array_count_values($number);
    foreach($number as $number){
        if($number > 100 || $number < 0){
            echo "Invalid input N: ";
            return false;
        } 
    }
    if($seq_length > 30000){
    
        echo "Invalid input L: ";
        return;
    }    
    foreach($occurence as $key=>$value){
        
        if($value> $seq_length/2){
            settype($key, "integer");
            return $key;            
        }        
    }
    

}


$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $sequence = trim(fgets($fh));        
    $major_element = checkmajorelement($sequence);
    if($major_element){
        echo $major_element;    
    }
    else{
        echo "None";
    }
    echo "\n";        

}

?>
