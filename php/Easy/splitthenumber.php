<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function splitnumber($data){

    
    $errors = '';
    $split = explode(' ', $data);        
    $number = $split[0];
    $pattern = $split[1];    
    $number_array = array();
    $i =0;
    while($i < strlen($number)){
        
        $number_array[$i] = $number[$i];
        $i++;
    
    }    

    for($i =0; $i<strlen($pattern); $i++){
    
        if($pattern[$i]=='+' || $pattern[$i]=='-' || $pattern[$i]=='*' || $pattern[$i]=='/'){
    
            $operator_pos = $i;
            $operator = $pattern[$i];            
            
        }
    
    }
    
    if(!isset($operator)){
    
        return $error = 'No valid operation found!';
        
    }
    if( (strlen($pattern)-1 != count($number_array)) || (  count($number_array) != strlen($pattern) - 1 )  ){
    
        return $error = 'Invalid pattern';
    
    }
        
    
    $number1 = '';
    $number2 = '';
    
    $i = 0;
    while($i < $operator_pos){
        
        $number1 .= $number_array[$i];
        $i++;
    }
            
    $i = $operator_pos;
    
    while($i < count($number_array)){
    
        $number2 .= $number_array[$i];
        $i++;
    
    }
            
    switch($operator){
    
        case "+":
            return $number1 + $number2;
        case "-":
            return $number1 - $number2;
        case "*":
            return $number1 * $number2;
        case "/":
            return $number1 / $number2;
        default:
            return false;          
    }
    
        

}



$fh = fopen($argv[1], "r");

while(!feof($fh)){
    
    $data = trim(fgets($fh));
    
    $result = splitnumber($data);    
    
    if($result){
        
        echo $result;
    
    }
    else{
        
        echo $errors;
    
    }
    
    echo "\n";

}




?>
