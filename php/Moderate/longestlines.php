<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function checklongest($string){

    
    $number = $string[0];
    $length = array();
    $longest = array();
    
    for($i = 1; $i!=count($string); $i++){
        
        $length[$i] = strlen($string[$i]);
        
    }
    
    arsort($length);
    
    foreach($length as $key=>$value){
        
        $longest[] = $string[$key];
        
        if(count($longest)==$number){
            
            break;
        }
        
        
    }
    
    foreach($longest as $longest){
        
        echo $longest;
        echo "\n";
    }
    
    
    
    
    
    
    // for($i=1; $i!=count($string); $i++){
        
    //     if($i == 1){
            
    //         $longest[] = $string[$i];
    //     }
    //     else($s)
        
    // }
    
    // if($longest){
        
    //     foreach($longest as $longest){
        
    //     echo $longest;
    //     echo "\n";
        
    //     }    
        
    // }
    // else{
        
    //     echo "Error";
    // }
    
}

$string = array();

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $string[] = trim(fgets($fh));
    
}

checklongest($string);


?>
